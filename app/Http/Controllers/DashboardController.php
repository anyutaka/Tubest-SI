<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rute;
use App\Models\Truk;
use App\Models\Supir;
use App\Models\Jadwal;
use App\Models\User;
use App\Models\Barang;
use App\Models\Outlet;
use App\Models\Pegawai;
use App\Models\Pengiriman;
use App\Models\Gudang;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $barangCount = Barang::count();
        $gudangCount = Gudang::count();
        $outletCount = Outlet::count();
        $pegawaiCount = Pegawai::count();
        $ruteCount = Rute::count();
        $supirCount = Supir::count();
        $trukCount = Truk::count();
        $jadwalCount = Jadwal::count();
        $pengirimanCount = Pengiriman::count();

        // $userCount = $userCount ?? 0;
        // $barangCount = $barangCount ?? 0;
        // $gudangCount = $gudangCount ?? 0;
        // $outletCount = $outletCount ?? 0;
        // $pegawaiCount = $pegawaiCount ?? 0;
        // $ruteCount = $ruteCount ?? 0;
        // $supirCount = $supirCount ?? 0;
        // $trukCount = $trukCount ?? 0;
        // $jadwalCount = $jadwalCount ?? 0;
        // $pengirimanCount = $pengirimanCount ?? 0;

        return view('dashboard', compact('userCount', 'barangCount', 'gudangCount','outletCount','pegawaiCount','ruteCount','supirCount','trukCount','jadwalCount','pengirimanCount'));
    }
}
