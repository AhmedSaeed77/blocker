<?php

namespace App\Http\Controllers;

use Image;
use \Yajra\Datatables\Datatables;
use App\Models\Developer;
use App\Http\Traits\media;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    use media;
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Developer::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                $edit = route('dev.edit', $row->id);
                $actionBtn = '<a href=" ' . $edit . '" class="edit btn btn-success btn-sm m-1">Edit</a>';
                $actionBtn .= '<a href="javascript:void(0)" value="' . $row->id . '" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.dev.create');
    }
    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'name' => 'required',
            'logo' => 'required|max:1024',
        ], [
            'name.required' => 'الاسم مطلوب ',
            'logo.required' => ' لوجو المطور مطلوب  ',
            'logo.max' => ' لوجو المطور لا يجب ان يتجاوز حجمه 1 ميجا  ',
        ]);
        if ($request->hasFile('logo')) {
            $filename = $this->uploadMedia($request->file('logo'), 'images/devs/', 700, 600);
        }
        $dev = new Developer();
        $dev->name = $request->name;
        $dev->logo = $filename;

        $dev->phone = $request->phone;
        $dev->fax   = $request->fax;
        $dev->email = $request->email;
        $dev->site = $request->site;
        $dev->save();
        return response()->json(['err' => false, 'msg' => 'تم اضافة مطور بنجاح'], 200);
    }


    public function edit($id)
    {
        $dev =  Developer::find($id);
        return view('admin.dev.edit', compact('dev'));
    }

    public function update(Request $request)
    {
        $dev =  Developer::find($request->id);
        $dev->name = $request->name;
        $dev->phone = $request->phone;
        $dev->fax   = $request->fax;
        if ($request->hasFile('logo')) {
            $filename = $this->uploadMedia($request->file('logo'), 'images/devs/', 700, 600);
            $dev->logo = $filename;
        }
        $dev->email = $request->email;
        $dev->site = $request->site;
        $dev->save();
        return response()->json(['err' => false, 'msg' => ' تم تعديل المطور بنجاح'], 200);
    }

    public function delete(Request $request)
    {
        $dev =  Developer::find($request->id);
        $dev->delete();

        return response()->json(['err' => false, 'msg' => 'تم مسح مطور بنجاح'], 200);
    }
}
