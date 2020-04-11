<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;
use Session;
 session_start();

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::paginate(10);
        
        return view('admin.skills.index',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skills.create');
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
        
            'skill' => ['required', 'string', 'max:50'],
        
        
        ]);
        $skill_data = [   
            'skill'=> $request->input('skill'),
            'online' => 1
        ];
         Skill::create($skill_data);
         Session::put('message', 'Data Created Successfully !!');
         return Redirect::to('admin/skill/'); 
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
        $skill = Skill::find($id);
            return view('admin.skills.edit', compact('skill','id'));
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
        $skill = Skill::findOrFail($id);
        $this->validate($request, [
            'skill' => ['required', 'string', 'max:50'],
            
            
           
        ]);
        
        $skill_data = [
            'skill'=> $request->input('skill'), 
            'online' => 1
        ];
        
         $skill->update($skill_data);
         Session::put('message', 'Data updated Successfully !!');
         return Redirect::to('admin/skill/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::find($id)->delete();
        Session::put('message', 'Data Deleted Successfully !!');
        return Redirect::to('/admin/skill/');

    }
    public function InActive($id)
    {
        $skill = Skill::find($id)->update(['online' => 0]);
        Session::put('message', 'Data InActivated Successfully !!');
        return Redirect::to('/admin/skill');
    }

    public function Active($id)
    {
        
        $skill = Skill::find($id)->update(['online' => 1]);
        Session::put('message', 'Data Activated Successfully !!');
        return Redirect::to('/admin/skill');
    }


}
