<body>
    <div class="body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <aside class="mdc-persistent-drawer mdc-persistent-drawer--open">
            <nav class="mdc-persistent-drawer__drawer">
                <div class="mdc-persistent-drawer__toolbar-spacer">
                    <a href="/" class="brand-logo">
                        <img src="{{ asset('img/logo.png') }}" alt="logo">
                    </a>
                </div>
                <div class="mdc-list-group">
                    <nav class="mdc-list mdc-drawer-menu">
                        {{-- Dashboard --}}
                        <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-drawer-link" href="/">
                                <i class="fa fa-home fa-2x" aria-hidden="true"></i>
                                &nbsp; &nbsp; Home
                            </a>
                        </div>
                        {{-- Drawer Menu Master Data --}}
                        <div class="mdc-list-item mdc-drawer-item" href="#" data-toggle="expansionPanel"
                            target-panel="ui-sub-menu">
                            <a class="mdc-drawer-link" href="#">
                                <i class="fa fa-database fa-lg" aria-hidden="true"></i>
                                &nbsp; &nbsp;&nbsp;&nbsp; Master Data
                                <i class="mdc-drawer-arrow material-icons">arrow_drop_down</i>
                            </a>
                            <div class="mdc-expansion-panel" id="ui-sub-menu">
                                <nav class="mdc-list mdc-drawer-submenu">
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="/barang">
                                            Data Barang
                                        </a>
                                    </div>
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="/Gudang">
                                            Data Gudang
                                        </a>
                                    </div>
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="/Outlet">
                                            Data Outlet
                                        </a>
                                    </div>
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="/Pegawai">
                                            Data Pegawai
                                        </a>
                                    </div>
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="/Rute">
                                            Data Rute
                                        </a>
                                    </div>
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="/Supir">
                                            Data Supir
                                        </a>
                                    </div>
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="/Truk">
                                            Data Truk
                                        </a>
                                    </div>
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="/User">
                                            Data User
                                        </a>
                                </nav>
                            </div>
                        </div>

                        <div class="mdc-list-item mdc-drawer-item" href="#" data-toggle="expansionPanel" target-panel="ui-sub-menu-2">
                            <a class="mdc-drawer-link" href="#">
                                <i class="fa fa-truck fa-lg" aria-hidden="true"></i>
                                &nbsp; &nbsp; &nbsp; Operational Data
                                <i class="mdc-drawer-arrow material-icons">arrow_drop_down</i>
                            </a>
                            <div class="mdc-expansion-panel" id="ui-sub-menu-2">
                                <nav class="mdc-list mdc-drawer-submenu">
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="/Jadwal">
                                            Data Jadwal
                                        </a>
                                    </div>
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="/Pengiriman">
                                            Data Pengiriman
                                        </a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        {{-- Drawer Menu Laporan/Report --}}
                        <div class="mdc-list-item mdc-drawer-item" href="#" data-toggle="expansionPanel" target-panel="sample-page-submenu">
                            <a class="mdc-drawer-link" href="#">
                                <i class="fa fa-print fa-lg" aria-hidden="true"></i>
                                &nbsp; &nbsp; &nbsp; Report
                                <i class="mdc-drawer-arrow material-icons">arrow_drop_down</i>
                            </a>
                            <div class="mdc-expansion-panel" id="sample-page-submenu">
                                <nav class="mdc-list mdc-drawer-submenu">
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="/rBarang">
                                            Laporan Barang
                                        </a>
                                    </div>
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="/rGudang">
                                            Laporan Gudang
                                        </a>
                                    </div>
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="rPegawai">
                                            Laporan Pegawai
                                        </a>
                                    </div>
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="/rJadwalPengiriman">
                                            Laporan Jadwal Pengiriman
                                        </a>
                                    </div>
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="/rTruk">
                                            Laporan Truk
                                        </a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        {{-- GHOST --}}
                        <br><br><br><br><br><br><br><br><br><br><br><br>
                    </nav>
                </div>
            </nav>
        </aside>
