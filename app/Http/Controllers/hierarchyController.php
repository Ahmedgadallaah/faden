<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Hierarchy;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class HierarchyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hierarchies = Hierarchy::paginate(10);

        
        return view('admin.hierarchies.index',compact('hierarchies'));
    }

    public function create()
    {
        return view('admin.hierarchies.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [

            'ar_name' => ['required', 'string', 'max:50'],
            'en_name' => ['required', 'string', 'max:50'],
            //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);

        $hierarchy_data = [
            'en' => ['name'=> $request->input('en_name')],
            'ar' => [ 'name' => $request->input('ar_name')],
            'online' => 1  
         ];
        
        $image = $request->file('image');
        if ($image) {
            $request->image->store('hierarchy');
            $imagename = $request->image->hashName();
            $hierarchy_data['image'] =$request->image->hashName();
        }
         Hierarchy::create($hierarchy_data);
         Session::put('message', 'Hierarchy Created Successfully !!');
         return Redirect::to('admin/hierarchy/'); 
    }
    public function edit($id)
    {        
            $hierarchy = Hierarchy::find($id);
            return view('admin.hierarchies.edit', compact('hierarchy','id'));
    }
    public function update(Request $request, $id)
    {
        $hierarchy = Hierarchy::findOrFail($id);
        $this->validate($request, [

            'ar_name' => ['required', 'string', 'max:50'],
            'en_name' => ['required', 'string', 'max:50'],
            //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);
        $hierarchy_data = [
            'en' => ['name'=> $request->input('en_name')],
            'ar' => [ 'name' => $request->input('ar_name')],
            'online' => 1
        ];
        
        //$image = $request->file('image');
        if ($request->has('image')) {
            @unlink(storage_path('app/hierarchy/'.$hierarchy->image));
            $request->image->store('hierarchy');
            $imagename = $request->image->hashName();
            $hierarchy_data['image'] =$request->image->hashName();
        } 
         $hierarchy->update($hierarchy_data);
         Session::put('message', 'Hierarchy Updated Successfully !!');
         return Redirect::to('admin/hierarchy/');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hierarchy = Hierarchy::find($id)->delete();
        Session::put('message', 'Hierarchy Deleted Successfully !!');
        return Redirect::to('/admin/hierarchy/'); 
    }
    public function InActive($id)
    {
        $Hirarchy = Hierarchy::find($id)->update(['online' => 0]);
        Session::put('message', 'Hirarchy Activated Successfully !!');
        return Redirect::to('/admin/hierarchy');
    }

    public function Active($id)
    {
        
        $Hirarchy = Hierarchy::find($id)->update(['online' => 1]);
        Session::put('message', 'Hirarchy Activated Successfully !!');
        return Redirect::to('/admin/hierarchy');
    }
}
