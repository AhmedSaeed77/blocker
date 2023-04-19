<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use DataTables;
class RequestController extends Controller
{
    // public function store(Request $request)
    // {
    //     $new_r = new ModelsRequest();
    //     $new_r->name = $request->name;
    //     $new_r->email = $request->email;
    //     $new_r->phone = $request->phone;
    //     $new_r->msg = $request->msg;
    //     $new_r->save();

    //     return response()->json(['msg' => 'سيتم التواصل معك قريبا شكرا لك '], 200);
    // }
    public function delete(Request $request)
    {
        $re = ModelsRequest::find($request->id);
        $re->delete();
        return response()->json(['msg' => '   تم حذف الطلب بنجاح '], 200);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = ModelsRequest::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $edit = route('requests.show', $row->id);
                    $actionBtn = '<a href="' . $edit . '" class="edit btn btn-success btn-sm">show more</a> ';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.requests.bill');
    }
    public function create()
    {

    }
    public function show($id)
    {
        $req = ModelsRequest::find($id);
        return view ('admin.requests.show',compact('req'));
    }

    public function storex(Request $request)
    {
        $validatedData = $request->validate([
                                                'name' => 'required',
                                                'email' =>  'regex:/^\S+@\S+\.\S+$/',
                                            ]);
            
        $req = new ModelsRequest();
        $req->name = $request->name;
        $req->email = $request->email;
        $req->phone = $request->phone;
        $req->country = $request->country;
        $req->city = $request->city;
        $req->msg = $request->message;
        if($req->keep)
        {
            $req->keep = $request->keep;
        }
        else
        {
            $req->keep="off";
        }
        $req->save();
        return redirect()->back();
    }
}
