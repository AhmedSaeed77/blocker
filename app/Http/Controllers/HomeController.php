<?php

namespace App\Http\Controllers;

use App\Models\Test;

use App\Models\User;
use App\Models\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Transcode\TranscodeService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $locations = DB::table('locations')->get();
        $types=DB::table('type')->get();
        $blogs=DB::table('blogs')->get();
        
        return view('welcome')->with('locations', $locations)->with('types', $types)->with('blogs',$blogs);
    }

    public function storTest(Request $request)
    {

        $tes = new Test();
        $tes->name = $request->name_en;
        $tes->save();

        $langs = ['ar', 'fr'];
        $failds = ['name_ar', 'name_fr'];

        foreach ($langs as $lang) {
            $name = 'name_' . $lang;

            add($tes, [
                'name' => $request->$name,
            ], $lang);
        }

        return ' success';
    }

    public function about()
    {
        $view = View::all();
        return view('about',compact('view'));
    }
    public function editprofile(Request $request)
    {

        $user = User::findOrFail(Auth::user()->id);

        if ($request->photo) {
            $photo = $request->photo;
            $file_extension = $photo->getClientOriginalExtension();
            $file_name = time() . '.' . $file_extension;
            $path = 'attachments/users/';
            $photo->move($path, $file_name);
            $user->photo = $file_name;
            if ($request->password) {
                $user->password = $request->password;
            }
            $user->save();
        }


        DB::table('users')->where('id', Auth::user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'country' => $request->country,
            'city' => $request->city,
        ]);

        return redirect()->route('main');
    }



    public function translate_submit(Request $request, $lang)
    {
        $full_data = include(base_path('lang/' . $lang . '/messages.php'));
        $full_data[$request['key']] = $request['value'];
        $str = "<?php return " . var_export($full_data, true) . ";";
        file_put_contents(base_path('lang/' . $lang . '/messages.php'), $str);
        return response()->json(['err' => false, 'msg' => 'تم التعديل بنجاح']);
    }
    public function search(Request $request){

        $validate = $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'الاسم مطلوب ',
        ]);

        $result=DB::table('projects')
        ->where('type_id',$request->type)
        ->where('region_id',$request->location)
        ->where('name','like',"%{$request->keyword}%")
        ->first();
        return redirect()->route('project', ['id' => (int)$result->id]);
    }
}
