<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Type;
use App\Models\status;
use App\Models\Setting;
use App\Models\Location;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;


class SettingController extends Controller
{

    public function storeLocation(Request $request)
    {

        $loa = new Location();
        $loa->location = $request->name;
        $loa->save();

        $langs = ['ar', 'fr'];
        foreach ($langs as $lang) {
            $name = 'location_' . $lang;
            add($loa, [
                'location' => $request->$name,
            ], $lang);
        }

        return response()->json(['err' => false, 'msg', 'تم الحفظ بنجاح'], 200);
    }

    public function storeArea(Request $request)
    {
        $area = new Area();
        $area->area = $request->name;
        $area->location_id = $request->location_id;
        $area->save();

        $langs = ['ar', 'fr'];
        foreach ($langs as $lang) {
            $name = 'area_' . $lang;
            add($area, [
                'location' => $request->$name,
            ], $lang);
        }

        return response()->json(['err' => false, 'msg', 'تم الحفظ بنجاح'], 200);
    }
    public function storestatus(Request $request)
    {
        $status = new status();
        $status->name = $request->status;
        $status->save();

        if ($request->status_ar && $request->staus_fr) {
        $langs = ['ar', 'fr'];
            foreach ($langs as $lang) {
                $name = 'status_' . $lang;
                add($status, [
                    'status' => $request->$name,
                ], $lang);
            }
        }



        return response()->json(['err' => false, 'msg', 'تم الحفظ بنجاح'], 200);
    }



    public function update(Request $request)
    {
        $input = $request->except('token');
        if (isset($input['logo']) && !empty($input['logo'])) {
            $setting = Setting::where('key', '=', 'logo')->first();
            $logo_name = $this->uploadMedia($input['logo'], 'app/logo');
            $delete = $this->deleteMedia($setting->value, 'app/logo');
            $setting = $setting->refresh();
            $setting->update(['value' => $logo_name]);
        }
        if (isset($input['icon']) && !empty($input['icon'])) {
            $setting = Setting::where('key', '=', 'icon')->first();
            $icon_name = $this->uploadMedia($input['icon'], 'app/icon');
            $delete = $this->deleteMedia($setting->value, 'app/icon');
            $setting = $setting->refresh();
            $setting->update(['value' => $icon_name]);
        }
        $settingInputArray = Arr::only($input, [
            'app_name', 'company_name', 'phone', 'address', 'wedd_before', 'wedd_after', 'soiree_before', 'soiree_after'
        ]);
        foreach ($settingInputArray as $key => $value) {
            Setting::where('key', '=', $key)->first()->update(['value' => $value]);
        }
        session()->flash('edit', 'تم حفظ الاعدادات  ');
        return redirect()->route('setting.index');
    }
    public function index(Request $request)
    {
        $settings = Setting::pluck('value_en', 'key')->toArray();
        return view('admin.setting.index', compact('settings'));
    }

    public function updateOne(Request $request)
    {
        Setting::where('id', '=', $request->id)->first()->update([
            'value_en' => $request->value,
            'value_ar' => $request->value_ar,
            'value_fr' => $request->value_fr,
        ]);
        return response()->json(['err' => false], 200);
    }
    public function translate($lang)
    {
        $full_data = include(base_path('lang/' . $lang . '/messages.php'));
        $lang_data = [];
        ksort($full_data);
        foreach ($full_data as $key => $data) {
            array_push($lang_data, ['key' => $key, 'value' => $data]);
        }
        // return $lang_data;
        return view('admin.setting.langindex', compact('lang', 'lang_data'));
    }
    // public function updatemedia(Request $request)
    // {
    // }
}
