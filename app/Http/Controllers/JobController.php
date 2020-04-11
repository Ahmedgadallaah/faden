<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Job;
use App\Location;
use App\Experience;
use App\Client;
use App\Title;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('location')->with('experience')->with('client')->with('title')->paginate(10);
        
        return view('admin.jobs.index',compact('jobs'));
    }
    public function create()
    {
        $clients = Client::all();
        $locations = Location::all();
        $experiences = Experience::all();
        $titles = Title::all();
        return view('admin.jobs.create',compact('clients','locations','experiences','titles'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [

            'author' => ['required', 'string', 'max:50'],
            'ar_description' => ['required', 'string', 'max:255'],
            'en_description' => ['required', 'string', 'max:255'],
            'ar_requirment' => ['required', 'string', 'max:255'],
            'en_requirment' => ['required', 'string', 'max:255'],

        ]);
        $job_data = [
            'en' => ['description'=> $request->input('en_description'),'requirment'=> $request->input('en_requirment')],
            'ar' => [ 'description'=> $request->input('ar_description'),'requirment'=> $request->input('ar_requirment')],
            'client_id' => $request->client_id,
            'location_id' => $request->location_id,
            'experience_id' => $request->experience_id,
            'title_id' => $request->title_id,
            'author' => $request->input('author'),
            'online' => 1
        
        ]; 
        $job = Job::create($job_data);  
         Session::put('message', 'Job Created Successfully !!');
         return Redirect::to('admin/job/'); 
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
            $job = Job::find($id);
            $clients = Client::all();
            $locations = Location::all();
            $experiences = Experience::all();
            $titles = Title::all();
            
            return view('admin.jobs.edit', compact('job','id','clients','locations','experiences','titles'));
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
        $job = Job::findOrFail($id);

        $this->validate($request, [

            'author' => ['required', 'string', 'max:50'],
            
            'ar_description' => ['required', 'string', 'max:255'],
            'en_description' => ['required', 'string', 'max:255'],
            'ar_requirment' => ['required', 'string', 'max:255'],
            'en_requirment' => ['required', 'string', 'max:255'], 
        ]);
        $job_data = [
            'en' => ['description'=> $request->input('en_description'),'requirment'=> $request->input('en_requirment')],
            'ar' => ['description'=> $request->input('ar_description'),'requirment'=> $request->input('ar_requirment')],
            'client_id' => $request->client_id,
            'location_id' => $request->location_id,
            'experience_id' => $request->experience_id,
            'title_id' => $request->title_id,
            'author' => $request->input('author'),
            'online' => 1
        ];     
        $job->update($job_data);
        Session::put('message', 'Job Created Successfully !!');
        return Redirect::to('admin/job/');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id)->delete();
        Session::put('message', 'Job Deleted Successfully !!');
        return Redirect::to('/admin/job/'); 

    }
    public function InActive($id)
    {
        $job = Job::find($id)->update(['online' => 0]);
        Session::put('message', 'job Activated Successfully !!');
        return Redirect::to('/admin/job');
    }

    public function Active($id)
    {
        
        $job = Job::find($id)->update(['online' => 1]);
        Session::put('message', 'job Activated Successfully !!');
        return Redirect::to('/admin/job');
    }



}
