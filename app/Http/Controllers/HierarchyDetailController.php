<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HierarchyDetail;
use App\Department;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();


class HierarchyDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hierarchyDetails = HierarchyDetail::with('department')->paginate(10);
        return view('admin.hierarchyDetails.index',compact('hierarchyDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();

        return view('admin.hierarchyDetails.create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

           
            'ar_title' => ['required', 'string', 'max:50'],
            'en_title' => ['required', 'string', 'max:50'],
           

        ]);
        $hierarchyDetail_data = [
            'en' => ['title'=> $request->input('en_title')],
            'ar' => [ 'title'=> $request->input('ar_title')],
            'department_id' => $request->department_id,
            'online' => 1
        
        ]; 
        $hierarchyDetail = HierarchyDetail::create($hierarchyDetail_data);  
         Session::put('message', 'Data Created Successfully !!');
         return Redirect::to('admin/hierarchyDetail/'); 
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
        $hierarchyDetail = HierarchyDetail::find($id);
        $departments = Department::all();
        return view('admin.hierarchyDetails.edit', compact('hierarchyDetail','id','departments'));
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
        $hierarchyDetail = HierarchyDetail::findOrFail($id);

        $this->validate($request, [
            'ar_title' => ['required', 'string', 'max:50'],
            'en_title' => ['required', 'string', 'max:50'],
        ]);
        $hierarchyDetail_data = [
            'en' => ['title'=> $request->input('en_title')],
            'ar' => ['title'=> $request->input('ar_title')],
            'department_id' => $request->department_id,
            'online' => 1
        ];     
        $hierarchyDetail->update($hierarchyDetail_data);
        Session::put('message', 'Data Created Successfully !!');
        return Redirect::to('admin/hierarchyDetail/');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hierarchyDetail = HierarchyDetail::find($id)->delete();
        Session::put('message', 'Data Deleted Successfully !!');
        return Redirect::to('/admin/hierarchyDetail/'); 
    }

    public function InActive($id)
    {
        $hierarchyDetail = HierarchyDetail::find($id)->update(['online' => 0]);
        Session::put('message', 'Data InActivated Successfully !!');
        return Redirect::to('/admin/hierarchyDetail');
    }

    public function Active($id)
    {
        $hierarchyDetail = HierarchyDetail::find($id)->update(['online' => 1]);
        Session::put('message', 'Data Activated Successfully !!');
        return Redirect::to('/admin/hierarchyDetail');
    }
}
