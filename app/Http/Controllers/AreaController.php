<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Location;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\Http\Traits\media;

use Illuminate\Support\Facades\Auth;

class AreaController extends Controller
{



    use media;
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Area::latest()->get();

            //true
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('location_name', function ($row) {
                    $name =  $row->location->location ?? 'تم حذفه';
                    return $name;
                })
                ->addColumn('action', function ($row) {
                    $edit = route('area.edit', $row->id);
                    $actionBtn = '<a href="' . $edit . '" class="edit m-1 btn btn-success btn-sm">Edit</a>';
                    $actionBtn .= '<a href="javascript:void(0)" value="' . $row->id . '" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.area.create');
    }
    public function Create()
    {
        return view('admin.area.create');
    }

    public function indexx(Request $request)
    {
        if ($request->ajax()) {
            $data = Area::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $edit = route('projects.edit', $row->id);
                    $actionBtn = '<a href="' . $edit . '" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.location.index');
    }


    public function store(Request $request)
    {
        $area = new Area();
        $area->area = $request->area; //
        $area->region_id = $request->region_id;   //
        $area->save();   //
        $langs = ['ar', 'fr'];
            foreach ($langs as $lang) {
                $name = 'area_' . $lang;
                add($area, [
                    'area' => $request->$name,
                ], $lang);
            }
        
        return response()->json(['err' => false, 'msg' => 'تم اضافة منطقه'], 200);
    }

    public function editt($id)
    {

        $area =  Area::find($id);
        return view('admin.area.edit', compact('area'));
    }

    public function updatex(Request $request)
    {
        $area =  Area::find($request->id);
        $area->area = $request->area; //
        $area->region_id = $request->region_id;   //
        $area->save();   //
        deletetranscode($area);
        $langs = ['ar', 'fr'];
            foreach ($langs as $lang) {

                $name = 'area_' . $lang;
                add($area, [
                    'area' => $request->$name,
                ], $lang);
            }
        // return redirect()->route('area.index');
        return response()->json(['err' => false, 'msg' => '  تم تعديل المنطقه بنجاح '], 200);
    }

    public function deletex(Request $request)
    {
        $b = Area::find($request->id);
        $b->delete();

        return response()->json(['err' => false, 'msg' => ' تم مسح المنطقه '], 200);
    }
    public function getAreax($id,Request $request)
    {
        $new = new Location();
        $new->location = $request->name;
        $new->location_ar = $request->name_ar;
        $new->location_fr = $request->name_fr;
        if ($request->hasFile('image')) {
            $filename = $this->uploadMedia($request->file('image'), 'images/locations/', 700, 600);
        }
        $new->image = $filename;
        $new->save();
        return response()->json(['err' => false, 'msg' => ' تم اضافة منطقه جديد بنجاح']);
    }

    public function delete(Request $request)
    {
        $location = Area::find($request->id);
        return view('admin.location.edit', compact('location'));
    }

    public function edit($id)
    {
        $location = Area::find($id);
        return view('admin.location.edit', compact('location'));
    }

    public function update(Request $request)
    {
        $new = Location::find($request->id);
        $new->location = $request->name;
        $new->location_ar = $request->name_ar;
        $new->location_fr = $request->name_fr;
        if ($request->hasFile('image')) {
            deleteMedia('locations/', $new->image);
            $filename = $this->uploadMedia($request->file('image'), 'images/locations/', 700, 600);
        }
        $new->image = $filename;
        $new->save();
        return response()->json(['err' => false, 'msg' => ' تم التعديل بنجاح']);
    }

    public function getArea($id)
    {
        $areas = Area::where('region_id', $id)->get();
        return response()->json(['areas' => $areas], 200);
    }
}
