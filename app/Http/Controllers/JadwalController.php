<?php

namespace App\Http\Controllers;

use App\Models\Rute;
use App\Models\Truk;
use App\Models\Supir;
use App\Models\Jadwal;
use PDF;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(){
        $data = Jadwal::all();
        return view('menu_input_data.Jadwal', compact('data'));
    }

    public function iJadwal(){
        $rute = Rute::all();
        $supir = Supir::all();
        $truk = Truk::all();
        return view('menu_input_data.input.iJadwal', compact('rute','supir','truk'));
    }

    public function instJadwal(Request $request){
        Jadwal::create($request->all());
        return redirect()->route('Jadwal')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editJadwal($id){
        $data = Jadwal::find($id);
        $rute = Rute::all();
        $supir = Supir::all();
        $truk = Truk::all();
        return view('menu_input_data.edit.eJadwal', compact('data','rute','supir','truk'));
    }

    public function updateJadwal(Request $request, $id ){
        $data = Jadwal::find($id);
        $data->update($request->all());
        return redirect()->route('Jadwal')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delJadwal($id){
        $data = Jadwal::find($id);
        $data->delete();
        return redirect()->route('Jadwal')->with('Success', 'Data Berhasil Dihapus');
    }

    public function exportJadwal(){
        $data = Jadwal::all();
        $pdf = PDF::loadView('PDF.jadwal_export', compact('data'));
        return $pdf->download('jadwal_export.pdf');
    }

    public function rJadwalPengiriman(){
        $data = Jadwal::all();
        return view('report.rJadwalPengiriman', compact('data')); 
    }
}