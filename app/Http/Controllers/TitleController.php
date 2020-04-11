<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titles = Title::paginate(10);
        
        return view('admin.titles.index',compact('titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.titles.create');
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
        $title_data = [   
            'en' => ['title'=> $request->input('en_title'),],
            'ar' => [ 'title' => $request->input('ar_title')],
            'online' => 1
        ];
        $image = $request->file('image');
        if ($image) {
            $request->image->store('title');
            //$imagename = $request->image->hashName();
            $title_data['image'] =$request->image->hashName();
        }
        Title::create($title_data);
         Session::put('message', 'data Created Successfully !!');
         return Redirect::to('admin/title/');
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
        $title = Title::find($id);
        return view('admin.titles.edit', compact('title','id'));
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
        $title = Title::findOrFail($id);
        $this->validate($request, [
            'ar_title' => ['required', 'string', 'max:50'],
            'en_title' => ['required', 'string', 'max:50'], 
        ]);
        $title_data = [   
            'en' => ['title'=> $request->input('en_title'),],
            'ar' => [ 'title' => $request->input('ar_title')],
            'online' => 1
        ];
        if ($request->has('image')) {
            @unlink(storage_path('app/title/'.$title->image));
            $request->image->store('title');
            $title_data['image'] =$request->image->hashName();   
        }
        $title->update($title_data);
         Session::put('message', 'data Updated Successfully !!');
         return Redirect::to('admin/title/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $title = Title::find($id)->delete();
        Session::put('message', 'row Deleted Successfully !!');
        return Redirect::to('/admin/title/'); 
    }
    
    public function InActive($id)
    {
        $title = Title::find($id)->update(['online' => 0]);
        Session::put('message', 'Row InActivated Successfully !!');
        return Redirect::to('/admin/title');
    }

    public function Active($id)
    {
        
        $title = Title::find($id)->update(['online' => 1]);
        Session::put('message', 'Row Activated Successfully !!');
        return Redirect::to('/admin/title');
    }
}
