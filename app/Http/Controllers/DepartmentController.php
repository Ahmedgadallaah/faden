<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::paginate(10);

        
        return view('admin.departments.index',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.departments.create');
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

        $department_data = [
            'en' => ['title'=> $request->input('en_title')],
            'ar' => [ 'title' => $request->input('ar_title')],
            'online' => 1  
         ];
        
         Department::create($department_data);
         Session::put('message', 'Data Created Successfully !!');
         return Redirect::to('admin/department/'); 
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
        $department = Department::find($id);
            return view('admin.departments.edit', compact('department','id'));
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
        $department = Department::findOrFail($id);
        $this->validate($request, [
            'ar_title' => ['required', 'string', 'max:50'],
            'en_title' => ['required', 'string', 'max:50'],  
        ]);
        $department_data = [
            'en' => ['title'=> $request->input('en_title')],
            'ar' => [ 'title' => $request->input('ar_title')],
            'online' => 1
        ];
         $department->update($department_data);
         Session::put('message', 'Department Updated Successfully !!');
         return Redirect::to('admin/department/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::find($id)->delete();
        Session::put('message', 'Data Deleted Successfully !!');
        return Redirect::to('/admin/department/'); 
    }

    public function InActive($id)
    {
        $department = Department::find($id)->update(['online' => 0]);
        Session::put('message','Data InActivated Successfully !!');
        return Redirect::to('/admin/department');
    }

    public function Active($id)
    {
        $department = Department::find($id)->update(['online' => 1]);
        Session::put('message','Department Activated Successfully !!');
        return Redirect::to('/admin/department');
    }
}
