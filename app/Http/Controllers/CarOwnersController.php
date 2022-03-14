<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CarOwnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car_owners = User::where('role','car_owners')->get();
        return view('admin.car_owners/index', compact('car_owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car_owners = User::get();
        return view('admin.car_owners/create', compact('car_owners'));
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
            'email' => 'required',
            'password' => 'required',
        ]);
        $car_owners = [
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'password' => md5($request->password),
        ];
        User::create($car_owners);
        \Session::flash('notification', ['level' => 'success', 'message' =>  'Data berhasil Disimpan!']);

        return redirect('/admin/car_owners');
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
        $car_owners = User::find($id);
        return view('admin.car_owners.edit',compact('car_owners'));
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
        $car_owners = [
            'name' => $request->name,
            'email' => $request->email,
             'password' => md5($request->password),
        ];
        User::where('id',$id)->update($car_owners);
        \Session::flash('notification', ['level' => 'success', 'message' =>  'Data berhasil Disimpan!']);

        return redirect('/admin/car_owners');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        \Session::flash('notification', ['level' => 'success', 'message' =>  'Data berhasil Dihapus!']);
        return redirect('/admin/car_owners');
    }
}
