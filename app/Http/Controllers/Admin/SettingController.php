<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $rowCount = Setting::count();
        $settings=Setting::query()->get();
        return view ('Admin.pages.setting.settings', compact('settings','rowCount'));
    }

    public function create()
    {
        return view ('Admin.pages.setting.settingsAdd');
    }

    public function store(Request $request)
    {
        $validationRule=[
            'top_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'bottom_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'address' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ];
        $request->validate($validationRule);
//        dd($request->all());
        $setting=new Setting();  //team table'da yeni row yaratdi
        $setting->top_logo=$request->file('top_logo')->store('settings', 'public');
        $setting->bottom_logo=$request->file('bottom_logo')->store('settings', 'public');
        $setting->address=$request->input('address');
        $setting->mail=$request->input('email');
        $setting->phone=$request->input('phone_number');
        $setting->save();

        return redirect()->route('settings')->with('success', 'Has been added successfully!');
    }

    public function edit(Setting $setting)
    {
        return view ('Admin.pages.setting.settingsEdit', compact('setting'));
    }

    public function update(Request $request)
    {
        $validationRules=[
            'address' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ];
        $request->validate($validationRules);

        $setting = Setting::find($request->setting_id);
        if($request->hasFile('top_logo')) {
            if ($setting->top_logo && Storage::disk('public')->exists($setting->top_logo)) {
                Storage::disk('public')->delete($setting->top_logo);
            }
            $setting->top_logo = $request->file('top_logo')->store('settings', 'public');
        }
        if($request->hasFile('bottom_logo')) {
            if ($setting->bottom_logo && Storage::disk('public')->exists($setting->bottom_logo)) {
                Storage::disk('public')->delete($setting->bottom_logo);
            }
            $setting->bottom_logo = $request->file('bottom_logo')->store('settings', 'public');
        }
        $setting->address = $request->input('address');
        $setting->mail = $request->input('email');
        $setting->phone = $request->input('phone_number');
        $setting->save();

        return redirect()->route('settings')->with('success', 'Has been updated successfully');
    }

    public function destroy(string $id)
    {
        $setting = Setting::find($id);
        if ($setting) {
            if (Storage::disk('public')->exists($setting->top_logo)) {
                Storage::disk('public')->delete($setting->top_logo);
            }
            $setting->delete();
            if (Storage::disk('public')->exists($setting->bottom_logo)) {
                Storage::disk('public')->delete($setting->bottom_logo);
            }
            $setting->delete();

            return redirect()->back()->with('success', 'Has been deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Sponsor not found.');
        }
    }

}
