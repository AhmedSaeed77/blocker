<?php

namespace App\Http\Controllers;
use App\Models\Amenitie;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;

class AminatiesController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Amenitie::latest()->get();
            return Datatables::of($data)
                ->addColumn('action', function ($row) {
                    $edit = route('advanteges.edit', $row->id);
                    $actionBtn = '<a href="' . $edit . '" class="edit m-1 btn btn-success btn-sm">Edit</a>';
                    $actionBtn .= '<a href="javascript:void(0)" value="' . $row->id . '" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.animaties.index');
    }
    public function Create()
    {
        return view('admin.animaties.index');
    }

    public function store(Request $request)
    {
        $ad = new Amenitie();
        $ad->name = $request->name; //
        $ad->name_ar = $request->name_ar; //
        $ad->name_fr = $request->name_fr; //
        $ad->save();   // 
        return response()->json(['err' => false, 'msg' => 'تم اضافة ميزه'], 200);
    }

    public function edit($id)
    {
        $ad =  Amenitie::find($id);
        return view('admin.animaties.edit', compact('ad'));
    }

    public function update(Request $request)
    {
        $ad =  Amenitie::find($request->id);
        $ad->name = $request->name; //
        $ad->name_ar = $request->name_ar; //
        $ad->name_fr = $request->name_fr; //
        $ad->save();   // 
        return response()->json(['err' => false, 'msg' => '  تم تعديل الميزه بنجاح '], 200);
    }

    public function delete(Request $request)
    {
        $ad = Amenitie::find($request->id);
        $ad->delete();
        return response()->json(['err' => false, 'msg' => ' تم مسح الميزه '], 200);
    }
}
