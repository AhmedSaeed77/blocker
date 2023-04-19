<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\View;

class ViewController extends Controller
{
    public function store(Request $request)
    {

        $validate = $request->validate([
            'name' => 'required',
            'comment' => 'required',
            'grade' => 'required',
            'photo' => 'required',
        ], [
            'name.required' => 'العنوان مطلوب ',
            'grade.required' => 'العنوان مطلوب ',
            'comment.required' => 'العنوان مطلوب ',
            'photo.required' => ' المقال مطلوب  ',
        ]);
        
        $view = new View();
        $file=$request->file('photo');
        $filename=$file->getClientOriginalName();
        $file->move('views/',$filename);
        
        $view->name = $request->name;
        $view->comment = $request->comment;
        $view->grade = $request->grade;
        $view->photo =  $filename;
        $view->save();
    
        return redirect()->back();
    }

    public function index(Request $request)
    {
        $views = View::all();
        return view('admin.views.create',compact('views'));
    }

    public function edit($id)
    {

        $view =  View::find($id);
        return view('admin.views.edit', compact('view'));
    }

    public function update(Request $request,$id)
    {
        
        $validate = $request->validate([
            'name' => 'required',
            'comment' => 'required',
            'grade' => 'required',
            
        ], [
            'name.required' => 'الاسم مطلوب ',
            'grade.required' => 'التقيم مطلوب ',
            'comment.required' => 'التعليق مطلوب ',
            
        ]);

        $view =  View::find($id);
        
        $view->name = $request->name;
        $view->comment = $request->comment;
        $view->grade = $request->grade;

        if($request->file('photo'))
        {
            if (File::exists('views/' . $view->photo))
            {
                File::delete('views/'.$view->photo);
            }
            $file=$request->file('photo');
            $filename=$file->getClientOriginalName();
            $file->move('views/',$filename);
            $view->photo=$filename;
        }
        $view->save();
        return redirect()->route('views.index');
    }

    public function delete($id)
    {
        $view = View::find($id);
        

        if (File::exists('views/'.$view->photo))
        {
            File::delete('views/'.$view->photo);
        }
        $view->delete();
        return redirect()->back();
    }
}
