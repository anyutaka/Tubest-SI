<?php

namespace App\Http\Controllers;

use App\Models\Rute;
use App\Models\Gudang;
use App\Models\Outlet;
use Illuminate\Http\Request;

class RuteController extends Controller
{
    public function index(){
        $data = Rute::all();
        return view('menu_input_data.Rute', compact('data'));
    }

    public function iRute(){
        $gudang = Gudang::all();
        $outlet = Outlet::all();
        return view('menu_input_data.input.iRute', compact('gudang','outlet'));
    }

    public function instRute(Request $request){
        //dd($request->all());
        Rute::create($request->all());
        return redirect()->route('Rute')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editRute($id){
        $data = Rute::find($id);
        $gudang = Gudang::all();
        $outlet = Outlet::all();
        return view('menu_input_data.edit.eRute', compact('data','gudang','outlet'));
    }

    public function updateRute(Request $request, $id ){
        $data = Rute::find($id);
        $data->update($request->all());
        return redirect()->route('Rute')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delRute($id){
        $data = Rute::find($id);
        $data->delete();
        return redirect()->route('Rute')->with('Success', 'Data Berhasil Dihapus');
    }
}
