<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Officer;
use App\Skill;
use App\OfficerExperience;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class OfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $officers=Officer::with('skills')->paginate();
        
        return view('admin.officers.index',compact('officers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $skills=Skill::all();
      return view('admin.officers.create',compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          $officer = new Officer;
          $officer->address = $request->input('address');
          $officer->phone = $request->input('phone');
          $officer->email = $request->input('email');
          

          $officer->objective = $request->input('objective');
          $officer->university = $request->input('university');
          $officer->city = $request->input('city');
          $officer->Gpa = $request->input('Gpa');
          $officer->communication = $request->input('communication');
          $officer->leader = $request->input('leader');
      
          $officer->job_title = $request->input('job_title');
          $officer->position = $request->input('position');
          $officer->company_name = $request->input('company_name');
          
    
  
           $cv = $request->has('cv');
          if ($cv) {
               $request->cv->store('officer');
               $cvname = $request->cv->hashName();
               $officer->cv =$request->cv->hashName();
               }

             
        
        $officer->save();
              
          $skill = Skill::find($request->skill);
          $officer->skills()->attach($skill);
          Session::put('message', 'Data Created Successfully !!');
          // Redirect to the previous page successfully    
          return Redirect::to('/officer'); 
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $office=Officer::find($id)->skills()->detach($id);
        $officer = Officer::find($id)->delete();

        
        ;
        
        Session::put('message', 'officer Deleted Successfully !!');
        return Redirect::to('/admin/officer/');
    }

  
}
