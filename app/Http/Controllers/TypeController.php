<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Transcode;
use Illuminate\Http\Request;
use DataTables;

class TypeController extends Controller
{


    public function store(Request $request)
    {
        $type = new Type();
        $type->type = $request->name;
        $type->save();
        $langs = ['ar', 'fr'];
        foreach ($langs as $lang) {
            $name = 'name_' . $lang;
            add($type, [
                'type' => $request->$name,
            ], $lang);
        }
        return response()->json(['err' => false, 'msg' => 'تم الحفظ بنجاح'], 200);
    }

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Type::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $edit = route('type.edit', $row->id);
                    $actionBtn = '<a href=" ' . $edit . '" class="edit btn btn-success btn-sm m-1">Edit</a>';
                    // $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a>';
                    $actionBtn .= '<a href="javascript:void(0)" value="' . $row->id . '" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->addColumn('name_ar', function ($row) {
                    $name_ar = evaluateSp($row, 'fr')['type'];
                    return $name_ar;
                })
                ->addColumn('name_fr', function ($row) {
                    $name_fr = evaluateSp($row, 'fr')['type'];
                    return $name_fr;
                })
                ->rawColumns(['action', 'name_ar', 'name_fr'])
                ->make(true);
        }
        return view('admin.type.index');
    }

    public function edit($id)
    {
        $type = Type::find($id);
        $type_ar = Transcode::where('row_', $type->id  && 'table_','type' )->get();
        $type_fr = Transcode::where('row_', $type->id  && 'table_','type' )->get();
        return view('admin.type.edit', compact('type','type_ar','type_fr'));
    }

    public function update(Request $request)
    {
        $type =  Type::find($request->id);
        $type->type = $request->name;
        $type->save();
        deletetranscode($type);
        $langs = ['ar', 'fr'];
        foreach ($langs as $lang) {
            $name = 'name_' . $lang;
            add($type, [
                'type' => $request->$name,
            ], $lang);
        }
        return response()->json(['err' => false, 'msg' => ' تم تعديل النوع بنجاح'], 200);
    }

    public function delete(Request $request)
    {
        $t = Type::find($request->id);
        $t->delete();
        return response()->json(['err' => false, 'msg', 'تم الحذف بنجاح'], 200);
    }
}
