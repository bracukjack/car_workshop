<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;


class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::get();
        return view('admin.services/index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Services::get();
        return view('admin.services/create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            
        ]);
        $services = [
            'name' => $request->name,
            'price' => $request->price,
    
        ];
        Services::create($services);
        \Session::flash('notification', ['level' => 'success', 'message' =>  'Data berhasil Disimpan!']);

        return redirect('/admin/services');
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
        $services = Services::find($id);
        return view('admin.services.edit',compact('services'));
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
        $services = [
            'name' => $request->name,
            'price' => $request->price,
        ];
        Services::where('id',$id)->update($services);
        \Session::flash('notification', ['level' => 'success', 'message' =>  'Data berhasil Disimpan!']);

        return redirect('/admin/services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Services::find($id)->delete();
        \Session::flash('notification', ['level' => 'success', 'message' =>  'Data berhasil Dihapus!']);
        return redirect('/admin/services');
    }
}
