<?php

namespace App\Http\Controllers;

use App\Models\Truk;
use PDF;
use Illuminate\Http\Request;

class TrukController extends Controller
{
    public function index(){
        $data = Truk::all();
        return view('menu_input_data.Truk', compact('data'));
    }

    public function iTruk(){
        return view('menu_input_data.input.iTruk');
    }

    public function instTruk(Request $request){
        //dd($request->all());
        Truk::create($request->all());
        return redirect()->route('Truk')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editTruk($id){
        $data = Truk::find($id);
        return view('menu_input_data.edit.eTruk', compact('data'));
    }

    public function updateTruk(Request $request, $id ){
        $data = Truk::find($id);
        $data->update($request->all());
        return redirect()->route('Truk')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delTruk($id){
        $data = Truk::find($id);
        $data->delete();
        return redirect()->route('Truk')->with('Success', 'Data Berhasil Dihapus');
    }
    public function exportTruk(){
        $data = Truk::all();
        $pdf = PDF::loadView('PDF.truk_export', compact('data'));
        return $pdf->download('truk_export.pdf');
    }

    public function rTruk(){
        $data = Truk::all();
        return view('report.rTruk', compact('data')); 
    }
}
