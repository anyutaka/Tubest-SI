<?php

namespace App\Http\Controllers;

use App\Models\Supir;
use Illuminate\Http\Request;

class SupirController extends Controller
{
    public function index(){
        $data = Supir::all();
        return view('menu_input_data.Supir', compact('data'));
    }

    public function iSupir(){
        return view('menu_input_data.input.iSupir');
    }

    public function instSupir(Request $request){
        //dd($request->all());
        Supir::create($request->all());
        return redirect()->route('Supir')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editSupir($id){
        $data = Supir::find($id);
        return view('menu_input_data.edit.eSupir', compact('data'));
    }

    public function updateSupir(Request $request, $id ){
        $data = Supir::find($id);
        $data->update($request->all());
        return redirect()->route('Supir')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delSupir($id){
        $data = Supir::find($id);
        $data->delete();
        return redirect()->route('Supir')->with('Success', 'Data Berhasil Dihapus');
    }
}
