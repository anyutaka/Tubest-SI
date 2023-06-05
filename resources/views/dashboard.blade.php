@include('layout/header')
@include('layout/sidebar')
@include('layout/navbar')

<!-- partial -->

<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
        <div class="mdc-layout-grid" style="padding-top: 0px, padding-bottom: 0px;">
            <h2>Data</h2>
            <div class="mdc-layout-grid">
                {{-- INI DATA 1 --}}
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                        <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                            <div class="mdc--tile mdc--tile-merah rounded">
                                <i class="fa fa-user fa-3x"></i>
                            </div>
                            <div class="text-wrapper pl-1">
                                <h3 class="mdc-typography--display1 font-weight-bold mb-1">{{ $userCount }}</h3>
                                <p class="font-weight-normal mb-0 mt-0">Data User</p>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                        <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                            <div class="mdc--tile mdc--tile-kuning rounded">
                                <i class="fa fa-industry fa-2x"></i>
                            </div>
                            <div class="text-wrapper pl-1">
                                <h3 class="mdc-typography--display1 font-weight-bold mb-1">{{ $gudangCount }}</h3>
                                <p class="font-weight-normal mb-0 mt-0">Data Gudang</p>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                        <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                            <div class="mdc--tile mdc--tile-hijau rounded">
                                <i class="fa fa-id-card-o fa-3x"></i>
                            </div>
                            <div class="text-wrapper pl-1">
                                <h3 class="mdc-typography--display1 font-weight-bold mb-1">{{ $supirCount }}</h3>
                                <p class="font-weight-normal mb-0 mt-0">Data Supir</p>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                        <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                            <div class="mdc--tile mdc--tile-primary rounded">
                                <i class="fa fa-cubes fa-3x"></i>
                            </div>
                            <div class="text-wrapper pl-1">
                                <h3 class="mdc-typography--display1 font-weight-bold mb-1">{{ $barangCount }}</h3>
                                <p class="font-weight-normal mb-0 mt-0">Data Barang</p>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                        <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                            <div class="mdc--tile mdc--tile-ungu rounded">
                                <i class="fa fa-archive fa-2x"></i>
                            </div>
                            <div class="text-wrapper pl-1">
                                <h3 class="mdc-typography--display1 font-weight-bold mb-1">{{ $jadwalCount }}</h3>
                                <p class="font-weight-normal mb-0 mt-0">Data Jadwal</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- --------------------------------------- INI DATA 2 --------------------------------------------- --}}
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                        <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                            <div class="mdc--tile mdc--tile-merah rounded">
                                <i class="fa fa-user fa-3x"></i>
                            </div>
                            <div class="text-wrapper pl-1">
                                <h3 class="mdc-typography--display1 font-weight-bold mb-1">{{ $pegawaiCount }}</h3>
                                <p class="font-weight-normal mb-0 mt-0">Data Pegawai</p>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                        <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                            <div class="mdc--tile mdc--tile-kuning rounded">
                                <i class="fa fa-home fa-3x"></i>
                            </div>
                            <div class="text-wrapper pl-1">
                                <h3 class="mdc-typography--display1 font-weight-bold mb-1">{{ $outletCount }}</h3>
                                <p class="font-weight-normal mb-0 mt-0">Data Outlet</p>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                        <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                            <div class="mdc--tile mdc--tile-hijau rounded">
                                <i class="fa fa-truck fa-3x"></i>
                            </div>
                            <div class="text-wrapper pl-1">
                                <h3 class="mdc-typography--display1 font-weight-bold mb-1">{{ $trukCount }}</h3>
                                <p class="font-weight-normal mb-0 mt-0">Data Truk</p>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                        <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                            <div class="mdc--tile mdc--tile-primary rounded">
                                <i class="fa fa-map-o fa-3x"></i>
                            </div>
                            <div class="text-wrapper pl-1">
                                <h3 class="mdc-typography--display1 font-weight-bold mb-1">{{ $ruteCount }}</h3>
                                <p class="font-weight-normal mb-0 mt-0">Data Rute</p>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                        <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                            <div class="mdc--tile mdc--tile-ungu rounded">
                                <i class="fa fa-fighter-jet fa-3x"></i>
                            </div>
                            <div class="text-wrapper pl-1">
                                <h3 class="mdc-typography--display1 font-weight-bold mb-1">{{ $pengirimanCount }}</h3>
                                <p class="font-weight-normal mb-0 mt-0">Data Pengiriman</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- </div> --}}
            {{-- REPORT --}}
            {{-- <div class="mdc-layout-grid "> --}}
            <h2>Report</h2>
            <div class="mdc-layout-grid ">
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                        <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                            <div class="mdc--tile mdc--tile-merah rounded">
                                <i class="fa fa-file-o fa-2x"></i>
                            </div>
                            <div class="text-wrapper pl-1">
                                <h3 class="mdc-typography--display1 font-weight-bold mb-1">{{ $barangCount }}</h3>
                                <p class="font-weight-normal mb-0 mt-0">Report Barang</p>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                        <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                            <div class="mdc--tile mdc--tile-kuning rounded">
                                <i class="fa fa-file-o fa-2x"></i>
                            </div>
                            <div class="text-wrapper pl-1">
                                <h3 class="mdc-typography--display1 font-weight-bold mb-1">{{ $gudangCount }}</h3>
                                <p class="font-weight-normal mb-0 mt-0">Report Gudang</p>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                        <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                            <div class="mdc--tile mdc--tile-hijau rounded">
                                <i class="fa fa-file-o fa-2x"></i>
                            </div>
                            <div class="text-wrapper pl-1">
                                <h3 class="mdc-typography--display1 font-weight-bold mb-1">{{ $pegawaiCount }}</h3>
                                <p class="font-weight-normal mb-0 mt-0">Report Pegawai</p>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                        <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                            <div class="mdc--tile mdc--tile-biru rounded">
                                <i class="fa fa-file-o fa-2x"></i>
                            </div>
                            <div class="text-wrapper pl-1">
                                <h3 class="mdc-typography--display1 font-weight-bold mb-1">{{ $jadwalCount }}</h3>
                                <p class="font-weight-normal mb-0 mt-0">Report Jadwal</p>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                        <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                            <div class="mdc--tile mdc--tile-ungu rounded">
                                <i class="fa fa-file-o fa-2x"></i>
                            </div>
                            <div class="text-wrapper pl-1">
                                <h3 class="mdc-typography--display1 font-weight-bold mb-1">{{ $trukCount }}</h3>
                                <p class="font-weight-normal mb-0 mt-0">Report Truk</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</main>
</div>
@include('layout/footer')
