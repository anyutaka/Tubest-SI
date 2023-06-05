<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Pengiriman;
use PDF;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    public function index(){
        $data = Pengiriman::all();
        return view('menu_input_data.Pengiriman', compact('data'));
    }

    public function iPengiriman(){
        $jadwal = Jadwal::all();
        return view('menu_input_data.input.iPengiriman', compact('jadwal'));
    }

    public function instPengiriman(Request $request){
        //dd($request->all());
        Pengiriman::create($request->all());
        return redirect()->route('Pengiriman')->with('Success', 'Data Berhasil Ditambahkan');
    }
    public function editPengiriman($id){
        $jadwal = Jadwal::all();
        $data = Pengiriman::find($id);
        return view('menu_input_data.edit.ePengiriman', compact('data', 'jadwal'));
    }

    public function updatePengiriman(Request $request, $id ){
        $data = Pengiriman::find($id);
        $data->update($request->all());
        return redirect()->route('Pengiriman')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delPengiriman($id){
        $data = Pengiriman::find($id);
        $data->delete();
        return redirect()->route('Pengiriman')->with('Success', 'Data Berhasil Dihapus');
    }

    public function exportPengiriman(){
        $data = Pengiriman::all();
        $pdf = PDF::loadView('PDF.pengiriman_export', compact('data'));
        return $pdf->download('pengiriman_export.pdf');
    }

    public function rPengiriman(){
        $data = Pengiriman::all();
        return view('report.rPengiriman', compact('data')); 
    }
}
