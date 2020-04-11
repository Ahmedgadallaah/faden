<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;
use Session;
 session_start();
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::paginate(10);
        
        return view('admin.clients.index',compact('clients'));
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [

            'ar_name' => ['required', 'string', 'max:50'],
            'en_name' => ['required', 'string', 'max:50'],
            'link' => ['max:191'],
        ]);


        $client_data = [   
            'en' => ['name'=> $request->input('en_name'),],
            'ar' => [ 'name' => $request->input('ar_name')],
            'link' => $request->input('link'),
            'online' => 1
        ];
        
        $image = $request->file('logo');
        if ($image) {
            $request->logo->store('client');
            $imagename = $request->logo->hashName();
            $client_data['logo'] =$request->logo->hashName();
        }  
         Client::create($client_data);
         Session::put('message', 'client Created Successfully !!');
         return Redirect::to('admin/client/'); 
        
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
        
            $client = Client::find($id);
            return view('admin.clients.edit', compact('client','id'));
    
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
        $client = Client::findOrFail($id);
        $this->validate($request, [

            'ar_name' => ['required', 'string', 'max:50'],
            'en_name' => ['required', 'string', 'max:50'],
            'link' => ['max:191'],
        ]);
        $client_data = [
            'en' => ['name'=> $request->input('en_name'), ],
            'ar' => [ 'name' => $request->input('ar_name')],
            'link' => $request->input('link'),
            'online' => 1
        ];
        
        
        if ($request->file('logo')) {
            @unlink(storage_path('app/client/'.$client->logo));
            $request->logo->store('client');
            $imagename = $request->logo->hashName();
            $client_data['logo'] =$request->logo->hashName();
        }
         $client->update($client_data);
         Session::put('message', 'client updated Successfully !!');
         return Redirect::to('admin/client/');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id)->delete();
        Session::put('message', 'client Deleted Successfully !!');
        return Redirect::to('/admin/client/'); 
    }

    public function InActive($id)
    {
        $client = Client::find($id)->update(['online' => 0]);
        Session::put('message', 'client Activated Successfully !!');
        return Redirect::to('/admin/client');
    }

    public function Active($id)
    {
        
        $client = Client::find($id)->update(['online' => 1]);
        Session::put('message', 'client Activated Successfully !!');
        return Redirect::to('/admin/client');
    }

}

