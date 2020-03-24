<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::paginate(10);
        
        return view('admin.works.index',compact('works'));
    }

    public function create()
    {
        return view('admin.works.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'en_name' => ['required', 'string', 'max:50'],
            'ar_name' => ['required', 'string', 'max:50'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $work_data = [
            'en' => [
                'name'=> $request->input('en_name'),
            ],
            'ar' => [ 'name' => $request->input('ar_name')],
            
            
            'online' => 1
        ];
        $work_data['image'] = '';
        $image = $request->file('image');
        if ($image) {
            $request->image->store('work');
            $imagename = $request->image->hashName();
            $work_data['image'] =$request->image->hashName();
            }
         Work::create($work_data);
         Session::put('message', 'Work Created  Successfully !!');
         return Redirect::to('admin/work'); 
        //  return redirect()->route('admin.work.index');
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
        
            $work = Work::find($id);
            return view('admin.works.edit', compact('work','id'));
    
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
        $work = Work::findOrFail($id);

        $this->validate($request, [
            'en_name' => ['required', 'string', 'max:50'],
            'ar_name' => ['required', 'string', 'max:50'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $work_data = [
            'en' => ['name'=> $request->input('en_name'),],
            'ar' => [ 'name' => $request->input('ar_name')],
            'online' => 1
        ];
        $work_data['image'] = '';
        $image=$request->file('image');
        if ($image) {
            @unlink(storage_path('app/work/'.$work->image));
            $request->image->store('work');
            $imagename = $request->image->hashName();
            $work_data['image'] =$request->image->hashName();
        }
        //dd($work_data);
        $work->update($work_data);
        Session::put('message', 'Work Updated  Successfully !!');
        return Redirect::to('admin/work');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Work::find($id)->delete();
        Session::put('message', 'Work Deleted  Successfully !!');
        return Redirect::to('/admin/work/'); 
    }
    public function InActive($id)
    {
        $work = Work::find($id)->update(['online' => 0]);
        Session::put('message', 'work Activated Successfully !!');
        return Redirect::to('/admin/work');
    }

    public function Active($id)
    {
        
        $work = Work::find($id)->update(['online' => 1]);
        Session::put('message', 'work Activated Successfully !!');
        return Redirect::to('/admin/work');
    }
}
