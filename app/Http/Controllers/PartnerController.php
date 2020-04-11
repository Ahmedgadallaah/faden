<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Partner;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::paginate(10);

        return view('admin.partners.index',compact('partners'));
    }
    public function create()
    {
        return view('admin.partners.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'ar_name' => ['required', 'string', 'max:50'],
            'en_name' => ['required', 'string', 'max:50'],
            'link' => ['required', 'max:191'],
         //   'logo' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        

        $partner_data = [
            'en' => ['name'=> $request->input('en_name')],
            'ar' => [ 'name' => $request->input('ar_name')],
            'link' => $request->input('link'),
            'online' => 1
        ];
        
        $image = $request->file('logo');
        if ($image) {
            $request->logo->store('partner');
            $imagename = $request->logo->hashName();
            $partner_data['logo'] =$request->logo->hashName();
        }
         Partner::create($partner_data);
         Session::put('message', 'Partner Created Successfully !!');
         return Redirect::to('admin/partner/'); 
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
            $partner = Partner::find($id);
            return view('admin.partners.edit', compact('partner','id'));
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
        //dd($request->all());
        $partner = Partner::findOrFail($id);

        $this->validate($request, [
            'ar_name' => ['required', 'string', 'max:50'],
            'en_name' => ['required', 'string', 'max:50'],
            'link' => ['required', 'max:191'],
           // 'logo' =>  'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $partner_data = [
                    'en' => [ 'name'=> $request->input('en_name')],
                    'ar' => [ 'name' => $request->input('ar_name')],
                    'link' => $request->input('link'),
                    'online' => 1
                ];
                
            
                if ($request->has('logo')) {
                    @unlink(storage_path('app/partner/'.$partner->logo));
                    $request->logo->store('partner');
                    $partner_data['logo'] =$request->logo->hashName();   
                }
        $partner->update($partner_data);
        Session::put('message', 'Partner Updated Successfully !!');
        return Redirect::to('admin/partner/');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::find($id)->delete();
        Session::put('message', 'Partner Deleted Successfully !!');
        return Redirect::to('/admin/partner/'); 
    }
    public function InActive($id)
    {
        $partner = Partner::find($id)->update(['online' => 0]);
        Session::put('message', 'partner Activated Successfully !!');
        return Redirect::to('/admin/partner');
    }

    public function Active($id)
    {
        
        $partner = Partner::find($id)->update(['online' => 1]);
        Session::put('message', 'partner Activated Successfully !!');
        return Redirect::to('/admin/partner');
    }
}
