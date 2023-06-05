<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = User::all();
        return view('menu_input_data.User', compact('data'));
    }

    public function iUser(){
        return view('menu_input_data.input.iUser');
    }

    public function instUser(Request $request){
        //dd($request->all());
        User::create($request->all());
        return redirect()->route('User')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editUser($id){
        $data = User::find($id);
        return view('menu_input_data.edit.eUser', compact('data'));
    }

    public function updateUser(Request $request, $id ){
        $data = User::find($id);
        $data->update($request->all());
        return redirect()->route('User')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delUser($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->route('User')->with('Success', 'Data Berhasil Dihapus');
    }
}