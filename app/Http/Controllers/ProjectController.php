<?php

namespace App\Http\Controllers;

use Image;
use \Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\File;
use App\Models\AP;
use App\Models\Payment;
use App\Models\Project;
use App\Models\status;
use App\Models\Type;
use App\Models\Template;
use App\Http\Traits\media;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    use media;

    public function create()
    {
        return view('admin.project.create1');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            
        ]);
        DB::beginTransaction();
        try {
            if ($request->has('pdf'))
            {
                $pdfname = $this->uploadfiles($request->file('pdf'), 'projects/');

            }
            $project = new Project();
            $project->name_ar = $request->name_ar; //
            $project->name = $request->name;   //
            $project->name_fr = $request->name_fr;  //
            // $project->description = $request->description; //
            // $project->description_ar = $request->description_ar;  //
            // $project->description_fr = $request->description_fr; //
            // $project->price = $request->price;  //
            // $project->pay_plan = $request->pay_plan;  //
            // $project->code = $request->code;  //
            // $project->region_id = $request->region_id; //
            // $project->area_id = $request->area_id;  //
            // $project->vedio_link = $request->vedio_link;
            // $project->rooms = $request->rooms;   //
            // $project->bedrooms = $request->bedrooms;  //
            // $project->bath = $request->bath;   //
            // $project->garage = $request->garage;  //
            // $project->type_id = $request->type_id;  //
            // $project->status_id = $request->status_id; //
            // $project->dev_id = $request->dev_id; //
            // $project->pdf = $pdfname; //
            $project->save();
            // for ($x = 0; $x <= count($request->pers) - 1; $x++) {
            //     Payment::create(['project_id' => $project->id, 'pers' => $request->pers[$x]]);
            // }
            // if ($request->has('image')) {
            //     for ($x = 0; $x <= count($request->image) - 1; $x++) {
            //         $filename = $this->uploadManyMedia($request->image[$x], 'images/projects/', $x, 700, 600);
            //     }
            //     ProjectImage::create(['project_id' => $project->id, 'name' => $filename]);
            // }
            // if ($request->has('plan_image')) {
            //     $filename = $this->uploadMedia($request->file('plan_image'), 'images/projects/plan/', 700, 600);
            //     Template::create(['project_id' => $project->id, 'name' => $request->planName, 'image' => $filename]);
            // }
            // for ($r = 0; $r <= count($request->amenitie) - 1; $r++) {
            //     AP::create(['project_id' => $project->id, 'amenitie_id' => $request->amenitie[$r]]);
            // }
            DB::commit();
            return response()->json(['err' => false, 'msg' => 'تم الحفظ بنجاح'], 200);
            //return redirect()->route('projects.index');
        } catch (\Exception  $e)
        {
            DB::rollBack();
            return response()->json(['msg' => $e->getMessage()], 200);
        }
    }
    public function addDescreption(){
        return view('admin.project.addDiscription');
    }
    public function addCode(){
        return view('admin.project.addCode');
    }
    public function addPrice(){
        return view('admin.project.addPrice');
    }
    public function addAddress(){
        return view('admin.project.addAddress');
    }
    public function addPlan(){
        return view('admin.project.addPlan');
    }
    public function addAttachment(){
        return view('admin.project.addAttachment');
    }
    public function addDetails(){
        return view('admin.project.addDetails');
    }
    public function storeDiscription(Request $request)
    {
        
        DB::beginTransaction();
        try {

            if ($request->has('pdf'))
            {
                $pdfname = $this->uploadfiles($request->file('pdf'), 'projects/');

            }
            $project = Project::find($request->pro_id);
            $project->description = $request->description; //
            $project->description_ar = $request->description_ar; 
            $project->description_fr = $request->description_fr; 
            // $project->description = $request->description; //
            // $project->description_ar = $request->description_ar;  //
            // $project->description_fr = $request->description_fr; //
            // $project->price = $request->price;  //
            // $project->pay_plan = $request->pay_plan;  //
            // $project->code = $request->code;  //
            // $project->region_id = $request->region_id; //
            // $project->area_id = $request->area_id;  //
            // $project->vedio_link = $request->vedio_link;
            // $project->rooms = $request->rooms;   //
            // $project->bedrooms = $request->bedrooms;  //
            // $project->bath = $request->bath;   //
            // $project->garage = $request->garage;  //
            // $project->type_id = $request->type_id;  //
            // $project->status_id = $request->status_id; //
            // $project->dev_id = $request->dev_id; //
            // $project->pdf = $pdfname; //
            $project->save();
            // for ($x = 0; $x <= count($request->pers) - 1; $x++) {
            //     Payment::create(['project_id' => $project->id, 'pers' => $request->pers[$x]]);
            // }
            // if ($request->has('image')) {
            //     for ($x = 0; $x <= count($request->image) - 1; $x++) {
            //         $filename = $this->uploadManyMedia($request->image[$x], 'images/projects/', $x, 700, 600);
            //     }
            //     ProjectImage::create(['project_id' => $project->id, 'name' => $filename]);
            // }
            // if ($request->has('plan_image')) {
            //     $filename = $this->uploadMedia($request->file('plan_image'), 'images/projects/plan/', 700, 600);
            //     Template::create(['project_id' => $project->id, 'name' => $request->planName, 'image' => $filename]);
            // }
            // for ($r = 0; $r <= count($request->amenitie) - 1; $r++) {
            //     AP::create(['project_id' => $project->id, 'amenitie_id' => $request->amenitie[$r]]);
            // }
            DB::commit();
            return response()->json(['err' => false, 'msg' => 'تم الحفظ بنجاح'], 200);
            //return redirect()->route('projects.index');
        } catch (\Exception  $e)
        {
            DB::rollBack();
            return response()->json(['msg' => $e->getMessage()], 200);
        }
    }
    public function storeCode(Request $request)
    {
        $request->validate([
            'name' => 'required',
            
        ]);
        DB::beginTransaction();
        try {
            if ($request->has('pdf'))
            {
                $pdfname = $this->uploadfiles($request->file('pdf'), 'projects/');

            }
            $project = new Project();
            $project->name_ar = $request->name_ar; //
            $project->name = $request->name;   //
            $project->name_fr = $request->name_fr;  //
            // $project->description = $request->description; //
            // $project->description_ar = $request->description_ar;  //
            // $project->description_fr = $request->description_fr; //
            // $project->price = $request->price;  //
            // $project->pay_plan = $request->pay_plan;  //
            // $project->code = $request->code;  //
            // $project->region_id = $request->region_id; //
            // $project->area_id = $request->area_id;  //
            // $project->vedio_link = $request->vedio_link;
            // $project->rooms = $request->rooms;   //
            // $project->bedrooms = $request->bedrooms;  //
            // $project->bath = $request->bath;   //
            // $project->garage = $request->garage;  //
            // $project->type_id = $request->type_id;  //
            // $project->status_id = $request->status_id; //
            // $project->dev_id = $request->dev_id; //
            // $project->pdf = $pdfname; //
            $project->save();
            // for ($x = 0; $x <= count($request->pers) - 1; $x++) {
            //     Payment::create(['project_id' => $project->id, 'pers' => $request->pers[$x]]);
            // }
            // if ($request->has('image')) {
            //     for ($x = 0; $x <= count($request->image) - 1; $x++) {
            //         $filename = $this->uploadManyMedia($request->image[$x], 'images/projects/', $x, 700, 600);
            //     }
            //     ProjectImage::create(['project_id' => $project->id, 'name' => $filename]);
            // }
            // if ($request->has('plan_image')) {
            //     $filename = $this->uploadMedia($request->file('plan_image'), 'images/projects/plan/', 700, 600);
            //     Template::create(['project_id' => $project->id, 'name' => $request->planName, 'image' => $filename]);
            // }
            // for ($r = 0; $r <= count($request->amenitie) - 1; $r++) {
            //     AP::create(['project_id' => $project->id, 'amenitie_id' => $request->amenitie[$r]]);
            // }
            DB::commit();
            return response()->json(['err' => false, 'msg' => 'تم الحفظ بنجاح'], 200);
            //return redirect()->route('projects.index');
        } catch (\Exception  $e)
        {
            DB::rollBack();
            return response()->json(['msg' => $e->getMessage()], 200);
        }
    }
    public function storePrice(Request $request)
    {
        $request->validate([
            'name' => 'required',
            
        ]);
        DB::beginTransaction();
        try {
            if ($request->has('pdf'))
            {
                $pdfname = $this->uploadfiles($request->file('pdf'), 'projects/');

            }
            $project = new Project();
            $project->name_ar = $request->name_ar; //
            $project->name = $request->name;   //
            $project->name_fr = $request->name_fr;  //
            // $project->description = $request->description; //
            // $project->description_ar = $request->description_ar;  //
            // $project->description_fr = $request->description_fr; //
            // $project->price = $request->price;  //
            // $project->pay_plan = $request->pay_plan;  //
            // $project->code = $request->code;  //
            // $project->region_id = $request->region_id; //
            // $project->area_id = $request->area_id;  //
            // $project->vedio_link = $request->vedio_link;
            // $project->rooms = $request->rooms;   //
            // $project->bedrooms = $request->bedrooms;  //
            // $project->bath = $request->bath;   //
            // $project->garage = $request->garage;  //
            // $project->type_id = $request->type_id;  //
            // $project->status_id = $request->status_id; //
            // $project->dev_id = $request->dev_id; //
            // $project->pdf = $pdfname; //
            $project->save();
            // for ($x = 0; $x <= count($request->pers) - 1; $x++) {
            //     Payment::create(['project_id' => $project->id, 'pers' => $request->pers[$x]]);
            // }
            // if ($request->has('image')) {
            //     for ($x = 0; $x <= count($request->image) - 1; $x++) {
            //         $filename = $this->uploadManyMedia($request->image[$x], 'images/projects/', $x, 700, 600);
            //     }
            //     ProjectImage::create(['project_id' => $project->id, 'name' => $filename]);
            // }
            // if ($request->has('plan_image')) {
            //     $filename = $this->uploadMedia($request->file('plan_image'), 'images/projects/plan/', 700, 600);
            //     Template::create(['project_id' => $project->id, 'name' => $request->planName, 'image' => $filename]);
            // }
            // for ($r = 0; $r <= count($request->amenitie) - 1; $r++) {
            //     AP::create(['project_id' => $project->id, 'amenitie_id' => $request->amenitie[$r]]);
            // }
            DB::commit();
            return response()->json(['err' => false, 'msg' => 'تم الحفظ بنجاح'], 200);
            //return redirect()->route('projects.index');
        } catch (\Exception  $e)
        {
            DB::rollBack();
            return response()->json(['msg' => $e->getMessage()], 200);
        }
    }
    public function storeAddress(Request $request)
    {
        $request->validate([
            'name' => 'required',
            
        ]);
        DB::beginTransaction();
        try {
            if ($request->has('pdf'))
            {
                $pdfname = $this->uploadfiles($request->file('pdf'), 'projects/');

            }
            $project = new Project();
            $project->name_ar = $request->name_ar; //
            $project->name = $request->name;   //
            $project->name_fr = $request->name_fr;  //
            // $project->description = $request->description; //
            // $project->description_ar = $request->description_ar;  //
            // $project->description_fr = $request->description_fr; //
            // $project->price = $request->price;  //
            // $project->pay_plan = $request->pay_plan;  //
            // $project->code = $request->code;  //
            // $project->region_id = $request->region_id; //
            // $project->area_id = $request->area_id;  //
            // $project->vedio_link = $request->vedio_link;
            // $project->rooms = $request->rooms;   //
            // $project->bedrooms = $request->bedrooms;  //
            // $project->bath = $request->bath;   //
            // $project->garage = $request->garage;  //
            // $project->type_id = $request->type_id;  //
            // $project->status_id = $request->status_id; //
            // $project->dev_id = $request->dev_id; //
            // $project->pdf = $pdfname; //
            $project->save();
            // for ($x = 0; $x <= count($request->pers) - 1; $x++) {
            //     Payment::create(['project_id' => $project->id, 'pers' => $request->pers[$x]]);
            // }
            // if ($request->has('image')) {
            //     for ($x = 0; $x <= count($request->image) - 1; $x++) {
            //         $filename = $this->uploadManyMedia($request->image[$x], 'images/projects/', $x, 700, 600);
            //     }
            //     ProjectImage::create(['project_id' => $project->id, 'name' => $filename]);
            // }
            // if ($request->has('plan_image')) {
            //     $filename = $this->uploadMedia($request->file('plan_image'), 'images/projects/plan/', 700, 600);
            //     Template::create(['project_id' => $project->id, 'name' => $request->planName, 'image' => $filename]);
            // }
            // for ($r = 0; $r <= count($request->amenitie) - 1; $r++) {
            //     AP::create(['project_id' => $project->id, 'amenitie_id' => $request->amenitie[$r]]);
            // }
            DB::commit();
            return response()->json(['err' => false, 'msg' => 'تم الحفظ بنجاح'], 200);
            //return redirect()->route('projects.index');
        } catch (\Exception  $e)
        {
            DB::rollBack();
            return response()->json(['msg' => $e->getMessage()], 200);
        }
    }
    public function storePlan(Request $request)
    {
        $request->validate([
            'name' => 'required',
            
        ]);
        DB::beginTransaction();
        try {
            if ($request->has('pdf'))
            {
                $pdfname = $this->uploadfiles($request->file('pdf'), 'projects/');

            }
            $project = new Project();
            $project->name_ar = $request->name_ar; //
            $project->name = $request->name;   //
            $project->name_fr = $request->name_fr;  //
            // $project->description = $request->description; //
            // $project->description_ar = $request->description_ar;  //
            // $project->description_fr = $request->description_fr; //
            // $project->price = $request->price;  //
            // $project->pay_plan = $request->pay_plan;  //
            // $project->code = $request->code;  //
            // $project->region_id = $request->region_id; //
            // $project->area_id = $request->area_id;  //
            // $project->vedio_link = $request->vedio_link;
            // $project->rooms = $request->rooms;   //
            // $project->bedrooms = $request->bedrooms;  //
            // $project->bath = $request->bath;   //
            // $project->garage = $request->garage;  //
            // $project->type_id = $request->type_id;  //
            // $project->status_id = $request->status_id; //
            // $project->dev_id = $request->dev_id; //
            // $project->pdf = $pdfname; //
            $project->save();
            // for ($x = 0; $x <= count($request->pers) - 1; $x++) {
            //     Payment::create(['project_id' => $project->id, 'pers' => $request->pers[$x]]);
            // }
            // if ($request->has('image')) {
            //     for ($x = 0; $x <= count($request->image) - 1; $x++) {
            //         $filename = $this->uploadManyMedia($request->image[$x], 'images/projects/', $x, 700, 600);
            //     }
            //     ProjectImage::create(['project_id' => $project->id, 'name' => $filename]);
            // }
            // if ($request->has('plan_image')) {
            //     $filename = $this->uploadMedia($request->file('plan_image'), 'images/projects/plan/', 700, 600);
            //     Template::create(['project_id' => $project->id, 'name' => $request->planName, 'image' => $filename]);
            // }
            // for ($r = 0; $r <= count($request->amenitie) - 1; $r++) {
            //     AP::create(['project_id' => $project->id, 'amenitie_id' => $request->amenitie[$r]]);
            // }
            DB::commit();
            return response()->json(['err' => false, 'msg' => 'تم الحفظ بنجاح'], 200);
            //return redirect()->route('projects.index');
        } catch (\Exception  $e)
        {
            DB::rollBack();
            return response()->json(['msg' => $e->getMessage()], 200);
        }
    }
    public function storeAttachments(Request $request)
    {
        $request->validate([
            'name' => 'required',
            
        ]);
        DB::beginTransaction();
        try {
            if ($request->has('pdf'))
            {
                $pdfname = $this->uploadfiles($request->file('pdf'), 'projects/');

            }
            $project = new Project();
            $project->name_ar = $request->name_ar; //
            $project->name = $request->name;   //
            $project->name_fr = $request->name_fr;  //
            // $project->description = $request->description; //
            // $project->description_ar = $request->description_ar;  //
            // $project->description_fr = $request->description_fr; //
            // $project->price = $request->price;  //
            // $project->pay_plan = $request->pay_plan;  //
            // $project->code = $request->code;  //
            // $project->region_id = $request->region_id; //
            // $project->area_id = $request->area_id;  //
            // $project->vedio_link = $request->vedio_link;
            // $project->rooms = $request->rooms;   //
            // $project->bedrooms = $request->bedrooms;  //
            // $project->bath = $request->bath;   //
            // $project->garage = $request->garage;  //
            // $project->type_id = $request->type_id;  //
            // $project->status_id = $request->status_id; //
            // $project->dev_id = $request->dev_id; //
            // $project->pdf = $pdfname; //
            $project->save();
            // for ($x = 0; $x <= count($request->pers) - 1; $x++) {
            //     Payment::create(['project_id' => $project->id, 'pers' => $request->pers[$x]]);
            // }
            // if ($request->has('image')) {
            //     for ($x = 0; $x <= count($request->image) - 1; $x++) {
            //         $filename = $this->uploadManyMedia($request->image[$x], 'images/projects/', $x, 700, 600);
            //     }
            //     ProjectImage::create(['project_id' => $project->id, 'name' => $filename]);
            // }
            // if ($request->has('plan_image')) {
            //     $filename = $this->uploadMedia($request->file('plan_image'), 'images/projects/plan/', 700, 600);
            //     Template::create(['project_id' => $project->id, 'name' => $request->planName, 'image' => $filename]);
            // }
            // for ($r = 0; $r <= count($request->amenitie) - 1; $r++) {
            //     AP::create(['project_id' => $project->id, 'amenitie_id' => $request->amenitie[$r]]);
            // }
            DB::commit();
            return response()->json(['err' => false, 'msg' => 'تم الحفظ بنجاح'], 200);
            //return redirect()->route('projects.index');
        } catch (\Exception  $e)
        {
            DB::rollBack();
            return response()->json(['msg' => $e->getMessage()], 200);
        }
    }
    public function storeDetails(Request $request)
    {
        $request->validate([
            'name' => 'required',
            
        ]);
        DB::beginTransaction();
        try {
            if ($request->has('pdf'))
            {
                $pdfname = $this->uploadfiles($request->file('pdf'), 'projects/');

            }
            $project = new Project();
            $project->name_ar = $request->name_ar; //
            $project->name = $request->name;   //
            $project->name_fr = $request->name_fr;  //
            // $project->description = $request->description; //
            // $project->description_ar = $request->description_ar;  //
            // $project->description_fr = $request->description_fr; //
            // $project->price = $request->price;  //
            // $project->pay_plan = $request->pay_plan;  //
            // $project->code = $request->code;  //
            // $project->region_id = $request->region_id; //
            // $project->area_id = $request->area_id;  //
            // $project->vedio_link = $request->vedio_link;
            // $project->rooms = $request->rooms;   //
            // $project->bedrooms = $request->bedrooms;  //
            // $project->bath = $request->bath;   //
            // $project->garage = $request->garage;  //
            // $project->type_id = $request->type_id;  //
            // $project->status_id = $request->status_id; //
            // $project->dev_id = $request->dev_id; //
            // $project->pdf = $pdfname; //
            $project->save();
            // for ($x = 0; $x <= count($request->pers) - 1; $x++) {
            //     Payment::create(['project_id' => $project->id, 'pers' => $request->pers[$x]]);
            // }
            // if ($request->has('image')) {
            //     for ($x = 0; $x <= count($request->image) - 1; $x++) {
            //         $filename = $this->uploadManyMedia($request->image[$x], 'images/projects/', $x, 700, 600);
            //     }
            //     ProjectImage::create(['project_id' => $project->id, 'name' => $filename]);
            // }
            // if ($request->has('plan_image')) {
            //     $filename = $this->uploadMedia($request->file('plan_image'), 'images/projects/plan/', 700, 600);
            //     Template::create(['project_id' => $project->id, 'name' => $request->planName, 'image' => $filename]);
            // }
            // for ($r = 0; $r <= count($request->amenitie) - 1; $r++) {
            //     AP::create(['project_id' => $project->id, 'amenitie_id' => $request->amenitie[$r]]);
            // }
            DB::commit();
            return response()->json(['err' => false, 'msg' => 'تم الحفظ بنجاح'], 200);
            //return redirect()->route('projects.index');
        } catch (\Exception  $e)
        {
            DB::rollBack();
            return response()->json(['msg' => $e->getMessage()], 200);
        }
    }
    


        // $project->status = $;
        // $project->image = $;
        // $project->price = $;
        // $project->email = $;
        // $project->phone = $;
        // $project->location = $;
        // $project->area = $;
        // $project->description = $;
        // $project->vedio = $;
        // $project->pay_plan = $;

        // if ($request->hasFile('images')) {
        //     $classifiedImg = $request->file('image');
        //     $filename = time() . rand(1, 400);
        //     $image = Image::make($classifiedImg)->encode('webp', 90)->resize(1000, 750)->save(public_path('images/projects/'  .  $filename . '.webp'));
        //     $ab->image    =    $filename  . '.webp';
        // }


        // // attachment
        // // templates
        //     - name
        //     - project_id
        //     - images


    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Project::latest()->get();
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
        return view('admin.project.newindex');
    }

    public function edit($id)
    {
        $project = Project::find($id);
        $am = AP::all();
        $result = json_decode($project->plans, true);
        return view('admin.project.edit', compact('project','am','result'));
    }

    public function OneProject($id)
    {
        $project = Project::find($id);
        $type= Type::find($project->type_id);
        $status=Status::find($project->status_id);
        return view('oneProject',['project'=>$project,'type'=>$type,'status'=>$status]) ;
    }

    public function update(Request $request)
    {


        $request->validate([
            'name_ar' => 'required',
            'name_fr' => 'required',
            'description' => 'required',
            'description_ar' => 'required',
            'description_fr' => 'required',
            'price' => 'required',
            'garage' => 'required',
            'vedio_link' => 'required',
            'region_id' => 'required',
            'area_id' => 'required',
            'bedrooms' => 'required',
            'type_id' => 'required',
            'status_id' => 'required',
            'dev_id' => 'required',
            'pay_plan' => 'required',
        ],[
            'name.ar' => 'الاسم باللغه العربيه مطلوب ',
            'name_fr' => 'الاسم باللغه الفرنسيه مطلوب ',
            'description' => ' الوصف باللغه الانجليزيه مطلوب  ',
            'description_ar' =>' الوصف باللغه العربيه مطلوب  ',
            'description_fr' => ' الوصف باللغه الفرنسيه مطلوب  ',
            'vedio_link' => '  رابط الفيديو مطلوب  ',
            'garage' => ' تفاصيل الجاراج مطلوبه  ',
            'region_id' => ' لوجو المطور مطلوب  ',
            'area_id' => ' لوجو المطور مطلوب  ',
            'bedrooms' => '   برجاء اختيار عدد  غرف النوم  ',
            'type_id' => '   برجاء اختيار نوع المشروع  ',
            'status_id' => ' لوجو المطور مطلوب  ',
            'dev_id' => ' لوجو المطور مطلوب  ',
            'pay_plan' => ' لوجو المطور مطلوب  '
        ]);
        DB::beginTransaction();
        try {
            $project =  Project::find($request->id); //

            $project->name_ar = $request->name_ar; //
            $project->name = $request->name;   //
            $project->name_fr = $request->name_fr;  //
            $project->description = $request->description; //
            $project->description_ar = $request->description_ar;  //
            $project->description_fr = $request->description_fr; //
            $project->price = $request->price; //
            $project->bath = $request->bath; //
            $project->garage = $request->garage; //
            $project->code = $request->code; //
            $project->vedio_link = $request->vedio_link;  //
            $project->region_id = $request->region_id; //
            $project->area_id = $request->area_id; //
            $project->bedrooms = $request->bedrooms;  //
            $project->rooms = $request->rooms;   //
            $project->type_id = $request->type_id;  //
            $project->status_id = $request->status_id; //
            $project->dev_id = $request->dev_id; //
            $project->pay_plan = $request->pay_plan; //

            if( $request->pay_plan > 0)
            {
                $pp = Payment:: where( 'project_id' , $project->id )->get();
                foreach($pp as  $key=>$item)
                {
                    $pay =  Payment:: where( 'id' , $item->id )->first();
                    $pay->update(['project_id' => $project->id, 'pers' => $request->pers[$key] ]);
                }
            }

            $project_ani=$project->advgarr();
            if($project_ani)
            {
                for ($r = 0; $r <= count($project_ani) - 1; $r++)
                {
                    if( ! $request->amenitie_update )
                    {
                        AP::Where ('project_id',$project->id)->delete();
                    }
                    else
                    {
                        $Check=in_array ($project_ani[$r] , $request->amenitie_update );
                        if(!$Check)
                        {
                           AP::Where('project_id',$project->id && 'amenitie_id',$project_ani[$r])->delete();
                        }
                    }
                }
            }

            if( $request->amenitie ) {
                for ($r = 0; $r <= count($request->amenitie) - 1; $r++)
                {
                    AP::create(['project_id' => $project->id, 'amenitie_id' => $request->amenitie[$r]]);
                }
            }

            if($request->file('pdf'))
            {
                if (File::exists('project/' . $project->pdf))
                {
                    File::delete('project/'.$project->pdf);
                }
                $file=$request->file('pdf');
                $filename=$file->getClientOriginalName();
                $file->move('project/',$filename);
                $project->pdf=$filename;
            }

            if ($request->has('plan_image'))
            {
                $result = json_decode($project->plans, true);

                if (File::exists('images/projects/plan/' . $result[0]["image"]))
                {
                    File::delete('images/projects/plan/'.$result[0]["image"]);
                }

                $file=$request->file('plan_image');
                $filename=$file->getClientOriginalName();
                $file->move('images/projects/plan/',$filename);

                $p =  Template:: where( 'project_id' , $project->id )->first();
                $p -> update(['project_id' => $project->id, 'name' => $request->planName, 'image' => $filename]);
            }

            if ($request->has('image'))
            {
                $images = ProjectImage::where("project_id",$project->id)->get();

                foreach($images as $img)
                {
                    if (File::exists("images/projects/" . $img->name))
                    {
                        File::delete("images/projects/".$img -> name);
                        $img->delete();
                    }
                }
                for ($x = 0; $x <= count($request->image) - 1; $x++)
                {
                    $file=$request->image[$x];
                    $filename=$file->getClientOriginalName();
                    $file->move('images/projects/',$filename);
                    $images =  ProjectImage::create(['project_id' => $project->id , 'name' => $filename]);
                }
            }
            $project->save();
            DB::commit();
            return redirect()->route('projects.index');
        } catch (\Exception  $e)
        {
            DB::rollBack();
            return response()->json(['msg' => $e->getMessage()], 200);
        }

    }


    public function allprojects()
    {

        $projects = Project::paginate(2);
        return view('projects.fullProject', compact('projects'));
    }

    public function filterLocation($id)
    {
        $projects = Project::where('region_id', $id)->paginate(5);
        return view('projects.fullProject', compact('projects'));
    }
}
