<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;
use Session;
 session_start();
class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = Experience::paginate(10);
        
        return view('admin.experiences.index',compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.experiences.create');
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

            'experience' => ['required', 'string', 'max:50'],
            
            
            
            
        ]);
        $experience_data = [   
            'experience' => $request->input('experience'),
            'online' => 1        ];
         Experience::create($experience_data);
         Session::put('message', 'experience Created Successfully !!');
         return Redirect::to('admin/experience/'); 
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
        $experience = Experience::find($id);
        return view('admin.experiences.edit', compact('experience','id'));
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
        $experience = Experience::findOrFail($id);
        $this->validate($request, [
            'experience' => ['required', 'string', 'max:50'],
        ]);
        $experience_data = [  
            'experience' => $request->input('experience'),
            'online' => 1
        ];
         $experience->update($experience_data);
         Session::put('message', 'experience updated Successfully !!');
         return Redirect::to('admin/experience/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experience = Experience::find($id)->delete();
        Session::put('message', 'experience Deleted Successfully !!');
        return Redirect::to('/admin/experience/');
    }

    public function InActive($id)
    {
        $experience = Experience::find($id)->update(['online' => 0]);
        Session::put('message', 'Experience InActivated Successfully !!');
        return Redirect::to('/admin/experience');
    }

    public function Active($id)
    {
        
        $experience = Experience::find($id)->update(['online' => 1]);
        Session::put('message', 'experience Activated Successfully !!');
        return Redirect::to('/admin/experience');
    }
}
