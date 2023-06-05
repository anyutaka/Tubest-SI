<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use App\Models\Pegawai;
use App\Models\User;
use PDF;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(){
        $data = Pegawai::all();
        return view('menu_input_data.Pegawai', compact('data'));
    }

    public function iPegawai(){
        $user = User::all();
        $gudang = Gudang::all();
        return view('menu_input_data.input.iPegawai', compact('user', 'gudang'));
    }

    public function instPegawai(Request $request){
        //dd($request->all());
        Pegawai::create($request->all());
        return redirect()->route('Pegawai')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editPegawai($id){
        $user = User::all();
        $gudang = Gudang::all();
        $data = Pegawai::find($id);
        return view('menu_input_data.edit.ePegawai', compact('data', 'user', 'gudang'));
    }

    public function updatePegawai(Request $request, $id ){
        $data = Pegawai::find($id);
        $data->update($request->all());
        return redirect()->route('Pegawai')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delPegawai($id){
        $data = Pegawai::find($id);
        $data->delete();
        return redirect()->route('Pegawai')->with('Success', 'Data Berhasil Dihapus');
    }
    public function exportPegawai(){
        $data = Pegawai::all();
        $pdf = PDF::loadView('PDF.pegawai_export', compact('data'));
        return $pdf->download('pegawai_export.pdf');
    }

    public function rPegawai(){
        $data = Pegawai::all();
        return view('report.rPegawai', compact('data')); 
    }
}
