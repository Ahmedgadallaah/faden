<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Thank;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class ThankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thanks = Thank::paginate(10);

        
        return view('admin.thanks.index',compact('thanks'));
    }

    public function create()
    {
        return view('admin.thanks.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'en_name' => ['required', 'string', 'max:50'],
            'ar_name' => ['required', 'string', 'max:50'],
          //  'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $thank_data = [
            'en' => ['name'=> $request->input('en_name'),],
            'ar' => [ 'name' => $request->input('ar_name')],
            'online' => 1
        ];
        // $thank_data['image'] = '';
        $image = $request->file('image');
        if ($image) {
            $request->image->store('thank');
            $imagename = $request->image->hashName();
            $thank_data['image'] =$request->image->hashName();
        }
         Thank::create($thank_data);
         Session::put('message', 'Thank Created  Successfully !!');
         return Redirect::to('admin/thank/'); 
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
        
            $thank = Thank::find($id);
            return view('admin.thanks.edit', compact('thank','id'));
    
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
       $thank= Thank::findOrFail($id);

       $this->validate($request, [
        'en_name' => ['required', 'string', 'max:50'],
        'ar_name' => ['required', 'string', 'max:50'],
       // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

        $thank_data = [
            'en' => ['name'=> $request->input('en_name')],
            'ar' => [ 'name' => $request->input('ar_name')],
            'online' => 1
        ];
        // $thank_data['image'] = '';
        $image = $request->has('image');
        if ($image) {
            @unlink(storage_path('app/thank/'.$thank->image));
            $request->image->store('thank');
            $imagename = $request->image->hashName();
            $thank_data['image'] =$request->image->hashName();
        }
        
     
        
        $thank->update($thank_data);
        Session::put('message', 'Thank Updated  Successfully !!');
         return Redirect::to('admin/thank/');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $thank = Thank::find($id)->delete();
        Session::put('message', 'Thank Deleted  Successfully !!');
        return Redirect::to('/admin/thank/'); 
    }
    public function InActive($id)
    {
        $thank = Thank::find($id)->update(['online' => 0]);
        Session::put('message', 'thank Activated Successfully !!');
        return Redirect::to('/admin/thank');
    }

    public function Active($id)
    {
        
        $thank = Thank::find($id)->update(['online' => 1]);
        Session::put('message', 'thank Activated Successfully !!');
        return Redirect::to('/admin/thank');
    }
}
