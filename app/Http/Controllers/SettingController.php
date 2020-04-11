<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::paginate(10);

        
        return view('admin.settings.index',compact('settings'));
    }

    public function create()
    {
        return view('admin.settings.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [

            // 'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'logo_2030' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'Ar_flag' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'En_flag' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'back_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $setting_data = [
            'en' => [
                'name'=> $request->input('en_name'),
                'vision'=> $request->input('en_vision'),
                    ],
            'ar' => [
                 'name' => $request->input('ar_name'),
                 'vision'=> $request->input('ar_vision')],    
                    ];
        $logo = $request->has('logo');
        $logo_2030 = $request->has('logo_2030');
        $Ar_flag = $request->has('Ar_flag');
        $En_flag = $request->has('En_flag');
        $back_image = $request->has('back_img');


        if ($logo) {
            $request->logo->store('setting');
            $imagename = $request->logo->hashName();
            $setting_data['logo'] =$request->logo->hashName();
        }
        if ($logo_2030) {
            $request->logo_2030->store('setting');
            $imagename = $request->logo_2030->hashName();
            $setting_data['logo_2030'] =$request->logo_2030->hashName();
        }
        if ($Ar_flag) {
            $request->Ar_flag->store('setting');
            $imagename = $request->Ar_flag->hashName();
            $setting_data['Ar_flag'] =$request->Ar_flag->hashName();
        }
        if ($En_flag) {
            $request->En_flag->store('setting');
            $imagename = $request->En_flag->hashName();
            $setting_data['En_flag'] =$request->En_flag->hashName();
        }
        if ($back_image) {
            $request->back_img->store('setting');
            $imagename = $request->back_img->hashName();
            $setting_data['back_img'] =$request->back_img->hashName();
        }
        

        
     
         // Now just pass this array to regular Eloquent function and Voila!    
         Setting::create($setting_data);
         Session::put('message', 'Setting Created Successfully !!');
         // Redirect to the previous page successfully    
         return Redirect::to('admin/setting/'); 
        //  return redirect()->route('admin.setting.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
            $setting = Setting::find($id);
            return view('admin.settings.edit', compact('setting','id'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
         $setting = Setting::findOrFail($id);

         $this->validate($request, [
            'en_name' => ['required', 'string', 'max:225'],
            'ar_name' => ['required', 'string', 'max:255'],
            'en_vision' => ['required', 'string', 'max:255'],
            'ar_vision' => ['required', 'string', 'max:255'],
            // // 'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'logo_2030' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'Ar_flag' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'En_flag' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'back_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

         $setting_data = [
            'en' => [
                'name'=> $request->input('en_name'),
                'vision'=> $request->input('en_vision'),
                    ],
            'ar' => [
                 'name' => $request->input('ar_name'),
                 'vision'=> $request->input('ar_vision')],    
                    ];
        $logo = $request->has('logo');
        $logo_2030 = $request->has('logo_2030');
        $Ar_flag = $request->has('Ar_flag');
        $En_flag = $request->has('En_flag');
        $back_image = $request->has('back_img');


        if ($logo) {
            @unlink(storage_path('app/setting/'.$setting->logo));
            $request->logo->store('setting');
            $imagename = $request->logo->hashName();
            $setting_data['logo'] =$request->logo->hashName();
        }
        if ($logo_2030) {
            @unlink(storage_path('app/setting/'.$setting->logo_2030));
            $request->logo_2030->store('setting');
            $imagename = $request->logo_2030->hashName();
            $setting_data['logo_2030'] =$request->logo_2030->hashName();
        }
        if ($Ar_flag) {
            @unlink(storage_path('app/setting/'.$setting->Ar_flag));
            $request->Ar_flag->store('setting');
            $imagename = $request->Ar_flag->hashName();
            $setting_data['Ar_flag'] =$request->Ar_flag->hashName();
        }
        if ($En_flag) {
            @unlink(storage_path('app/setting/'.$setting->En_flag));
            $request->En_flag->store('setting');
            $imagename = $request->En_flag->hashName();
            $setting_data['En_flag'] =$request->En_flag->hashName();
        }
        if ($back_image) {
            @unlink(storage_path('app/setting/'.$setting->back_img));
            $request->back_img->store('setting');
            $imagename = $request->back_img->hashName();
            $setting_data['back_img'] =$request->back_img->hashName();
        }




         $setting->update($setting_data);
         Session::put('message', 'Setting Updated Successfully !!');
         // Redirect to the previous page successfully    
         return Redirect::to('admin/setting/');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setting = Setting::find($id)->delete();
        Session::put('message', 'Setting Created Successfully !!');
        return Redirect::to('/admin/setting/'); 
        
    }
    public function InActive($id)
    {
        $setting = Setting::find($id)->update(['online' => 0]);
        Session::put('message', 'setting Activated Successfully !!');
        return Redirect::to('/admin/setting');
    }

    public function Active($id)
    {
        
        $setting = Setting::find($id)->update(['online' => 1]);
        Session::put('message', 'setting Activated Successfully !!');
        return Redirect::to('/admin/setting');
    }
}
