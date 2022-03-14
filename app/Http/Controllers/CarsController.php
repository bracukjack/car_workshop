<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;
use App\Models\Services;
use App\Models\User;


class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = \Auth::user()->role;
        if ($role=='admin') {
            $cars_work = Cars::get();
            
        }elseif ($role=='mechanics'){
            $userId = \Auth::user()->id;
            $cars_work = Cars::where('mechanics_id', $userId)->get(); 

        }elseif ($role=='car_owners'){
            $userId = \Auth::user()->id;
            $cars_work = Cars::where('cars_owners_id', $userId)->get(); 
        }
        
        return view('admin.cars_work/index', compact('cars_work'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car_owners = User::where('role','car_owners')->get();
        $mechanics = User::where('role','mechanics')->get();
        $services = Services::get();
        return view('admin.cars_work/create', compact('mechanics','services','car_owners'));
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
            'merk' => 'required',
            'no_plate' => 'required',
            'cars_owners_id' => 'required',
            'mechanics_id' => 'required',
            'services_id' => 'required',
            'status' => 'required',
            'payment' => 'required',

            
        ]);
        $cars_work = [
            'merk' => $request->merk,
            'no_plate' => $request->no_plate,
            'cars_owners_id' => $request->cars_owners_id,
            'mechanics_id' => $request->mechanics_id,
            'services_id' => $request->services_id,
            'status' => $request->status,
            'payment' => $request->payment,

        ];
        Cars::create($cars_work);
        \Session::flash('notification', ['level' => 'success', 'message' =>  'Data berhasil Disimpan!']);

        return redirect('/admin/cars_work');
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
        $cars_work = Cars::find($id);
        return view('admin.cars_work.edit',compact('cars_work'));
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
        $cars_work = [
            'merk' => $request->merk,
            'no_plate' => $request->no_plate,
            'cars_owners_id' => $request->cars_owners_id,
            'mechanics_id' => $request->mechanics_id,
            'services_id' => $request->services_id,
            'status' => $request->status,
            'payment' => $request->payment,
        ];
        Cars::where('id',$id)->update($cars_work);
        \Session::flash('notification', ['level' => 'success', 'message' =>  'Data berhasil Disimpan!']);

        return redirect('/admin/cars_work');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cars::find($id)->delete();
        \Session::flash('notification', ['level' => 'success', 'message' =>  'Data berhasil Dihapus!']);
        return redirect('/admin/cars_work');
    }
}
