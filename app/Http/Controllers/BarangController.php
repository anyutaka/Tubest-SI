<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use PDF;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        $data = Barang::all();
        return view('menu_input_data.Barang', compact('data'));
    }

    public function iBarang(){
        return view('menu_input_data.input.iBarang');
    }

    public function instBarang(Request $request){
        //dd($request->all());
        Barang::create($request->all());
        return redirect()->route('barang')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editBarang($id){
        $data = Barang::find($id);
        return view('menu_input_data.edit.eBarang', compact('data'));
    }

    public function updateBarang(Request $request, $id ){
        $data = Barang::find($id);
        $data->update($request->all());
        return redirect()->route('barang')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delBarang($id){
        $data = Barang::find($id);
        $data->delete();
        return redirect()->route('barang')->with('Success', 'Data Berhasil Dihapus');
    }
    public function exportBarang(){
        $data = Barang::all();
        $pdf = PDF::loadView('PDF.barang_export', compact('data'));
        return $pdf->download('barang_export.pdf');
    }

    public function rBarang(){
        $data = Barang::all();
        return view('report.rBarang', compact('data')); 
    }
}
