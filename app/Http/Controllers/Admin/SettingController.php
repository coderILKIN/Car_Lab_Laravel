<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingsRequest;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index() {

        $settings = Setting::first();

        return view('admin.setting.index', compact('settings'));
        
    }


    public function update(SettingsRequest $request){

        $validated = $request->validated();

        $setting = Setting::first();

        
        if($request->hasFile('about_image')) {
            if($setting->about_image) Storage::delete($setting->about_image);
            $validated['about_image'] = Storage::putFile('uploads/settings/images', $request->file('about_image'));
        }

        if($request->hasFile('breadcrump_image')) {
            if($setting->breadcrump_image) Storage::delete($setting->breadcrump_image);
            $validated['breadcrump_image'] = Storage::putFile('uploads/settings/images', $request->file('breadcrump_image'));
        }

        if($request->hasFile('slider_image')) {
            if($setting->slider_image) Storage::delete($setting->slider_image);
            $validated['slider_image'] = Storage::putFile('uploads/settings/images', $request->file('slider_image'));
        }

        if($setting){
            $setting->update($validated);
        } 
        else{
            Setting::create($validated);
        }


        return redirect()->back()->with('success', 'Setting update successfully');
        
    }
}
