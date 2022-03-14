<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MechanicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mechanics = User::where('role','mechanics')->get();
        return view('admin.mechanics/index', compact('mechanics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mechanics = User::get();
        return view('admin.mechanics/create', compact('mechanics'));
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
        $mechanics = [
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'password' => md5($request->password),
        ];
        User::create($mechanics);
        \Session::flash('notification', ['level' => 'success', 'message' =>  'Data berhasil Disimpan!']);

        return redirect('/admin/mechanics');
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
        $mechanics = User::find($id);
        return view('admin.mechanics.edit',compact('mechanics'));
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
        $mechanics = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => md5($request->password),
        ];
        User::where('id',$id)->update($mechanics);
        \Session::flash('notification', ['level' => 'success', 'message' =>  'Data berhasil Disimpan!']);

        return redirect('/admin/mechanics');
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
        return redirect('/admin/mechanics');
    }
}
