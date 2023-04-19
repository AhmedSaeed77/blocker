<?php

namespace App\Http\Controllers;

use App\Http\Traits\media;
use App\Models\Location;
use Illuminate\Http\Request;
use DataTables;

class LocationController extends Controller
{
    use media;

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Location::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('count', function ($row) {
                    $count =  $row->area->count();
                    return $count;
                })
                ->addColumn('action', function ($row) {
                    $edit = route('location.edit', $row->id);
                    $actionBtn = '<a href="' . $edit . '" class="edit btn btn-success btn-sm"> تعديل</a> <a href="javascript:void(0)" value="' . $row->id . '" class="delete btn btn-danger btn-sm">حذف  </a>';
                    return $actionBtn;
                })
                ->rawColumns(['action', 'count'])
                ->make(true);
        }
        return view('admin.location.index');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'image' => 'required|max:1024',

            ], [
                'name' => 'اسم الموقع مطلوب',
                'image' => [
                'required'=>'اللوجو مطلوب',
                'max'=>'حجم اللوجو يجب الا يتجاوز 1 ميجا'     
                ]
            ]);
            $new = new Location();
            $new->location = $request->name;
            // $new->location_ar = $request->name_ar;
            // $new->location_fr = $request->name_fr;
            
            if ($request->hasFile('image')) 
            {
                $file=$request->file('image');
                $filename=$file->getClientOriginalName();
                $file->move('images/places/',$filename);
                //$filename = $this->uploadMedia($request->file('image'), 'images/places/', 700, 600);
            }
            $new->image = $filename;
            $new->save();
            $langs = ['ar', 'fr'];
            foreach ($langs as $lang) {
                $name = 'name_' . $lang;
                add($new, [
                    'location' => $request->$name,
                ], $lang);
            }
            return response()->json(['err' => false, 'msg' => ' تم اضافة مكان جديد بنجاح']);
        } catch (\Exception  $e) {
            return response()->json(['err' => true, 'msg' => $e->getMessage()], 200);
        }
    }

    public function delete(Request $request)
    {
        $location = Location::find($request->id);
        $location->delete();
        return response()->json(['err' => false, 'msg' => ' تم الحذف بنجاح']);
    }

    public function edit($id)
    {
        $location = Location::find($id);
        return view('admin.location.edit', compact('location'));
    }

    public function update(Request $request)
    {
        try
        {
            $request->validate([
                'name' => 'required',
                'image' => 'bail|max:1024',
    
            ]);
            $new = Location::find($request->id);
            $new->location = $request->name;
            if ($request->hasFile('image')) 
            {
                deleteMedia('places/', $new->image);
                $filename = $this->uploadMedia($request->file('image'), 'images/places/', 700, 600);
                $new->image = $filename;
            }
            $new->save();
            deletetranscode($new);
            $langs = ['ar', 'fr'];
            foreach ($langs as $lang) 
            {
            $name = 'name_' . $lang;
            add($new, [
                        'location' => $request->$name,
                        ], $lang);
            }
            return response()->json(['err' => false, 'msg' => ' تم التعديل بنجاح']);
        }
        catch (\Exception  $e) 
        {
            return response()->json(['err' => true, 'msg' => $e->getMessage()], 200);
        }
        
    }
}
