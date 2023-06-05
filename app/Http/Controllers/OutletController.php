<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    public function index(){
        $data = Outlet::all();
        return view('menu_input_data.Outlet', compact('data'));
    }

    public function iOutlet(){
        return view('menu_input_data.input.iOutlet');
    }

    public function instOutlet(Request $request){
        //dd($request->all());
        Outlet::create($request->all());
        return redirect()->route('Outlet')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editOutlet($id){
        $data = Outlet::find($id);
        return view('menu_input_data.edit.eOutlet', compact('data'));
    }

    public function updateOutlet(Request $request, $id ){
        $data = Outlet::find($id);
        $data->update($request->all());
        return redirect()->route('Outlet')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delOutlet($id){
        $data = Outlet::find($id);
        $data->delete();
        return redirect()->route('Outlet')->with('Success', 'Data Berhasil Dihapus');
    }
}