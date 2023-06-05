<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Gudang;
use PDF;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function index(){
        $data = Gudang::all();
        return view('menu_input_data.Gudang', compact('data'));
    }

    public function iGudang(){
        $barang = Barang::all();
        return view('menu_input_data.input.iGudang', compact('barang'));
    }

    public function instGudang(Request $request){
        //dd($request->all());
        Gudang::create($request->all());
        return redirect()->route('Gudang')->with('Success', 'Data Berhasil Ditambahkan');
    }
    public function editGudang($id){
        $barang = Barang::all();
        $data = Gudang::find($id);
        return view('menu_input_data.edit.eGudang', compact('data', 'barang'));
    }

    public function updateGudang(Request $request, $id ){
        $data = Gudang::find($id);
        $data->update($request->all());
        return redirect()->route('Gudang')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delGudang($id){
        $data = Gudang::find($id);
        $data->delete();
        return redirect()->route('Gudang')->with('Success', 'Data Berhasil Dihapus');
    }

    public function exportGudang(){
        $data = Gudang::all();
        $pdf = PDF::loadView('PDF.gudang_export', compact('data'));
        return $pdf->download('gudang_export.pdf');
    }

    public function rGudang(){
        $data = Gudang::all();
        return view('report.rGudang', compact('data')); 
    }
}
