<!-- partial:../../partials/_navbar.html -->
<header class="mdc-toolbar mdc-elevation--z4 mdc-toolbar--fixed">
    <div class="mdc-toolbar__row">
        <section class="mdc-toolbar__section mdc-toolbar__section--align-start">
            <a href="#" class="menu-toggler material-icons mdc-toolbar__menu-icon">menu</a>
        </section>
        <section class="mdc-toolbar__section mdc-toolbar__section--align-end" role="toolbar">
            <div class="mdc-menu-anchor">
                <a href="#" class="mdc-toolbar__icon toggle mdc-ripple-surface" data-toggle="dropdown"
                    toggle-dropdown="notification-menu" data-mdc-auto-init="MDCRipple">
                    <i class="material-icons">notifications</i>
                    <span class="dropdown-count">3</span>
                </a>
                <div class="mdc-simple-menu mdc-simple-menu--right" tabindex="-1" id="notification-menu">
                    <ul class="mdc-simple-menu__items mdc-list" role="menu" aria-hidden="true">
                        <li class="mdc-list-item" role="menuitem" tabindex="0">
                            <a class="mdc-drawer-link" href="/barang">
                                <i class="fa fa-television"> Berhasil Menambahkan Data Barang</i>
                            </a>

                        </li>
                        <li class="mdc-list-item" role="menuitem" tabindex="0">
                            <a class="mdc-drawer-link" href="/Gudang">
                                <i class="fa fa-building"> Berhasil Menambahkan Data Gudang</i>
                            </a>

                        </li>
                        <li class="mdc-list-item" role="menuitem" tabindex="0">
                            <a class="mdc-drawer-link" href="/rPengiriman">
                                <i class="fa fa-file-text"> Berhasil Mencetak Laporan Pengiriman</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mdc-menu-anchor mr-1">
                <a href="#" class="mdc-toolbar__icon toggle mdc-ripple-surface" data-toggle="dropdown"
                    toggle-dropdown="logout-menu" data-mdc-auto-init="MDCRipple">
                    <i class="material-icons">more_vert</i>
                </a>
                <div class="mdc-simple-menu mdc-simple-menu--right" tabindex="-1" id="logout-menu">
                    <ul class="mdc-simple-menu__items mdc-list" role="menu" aria-hidden="true">
                        <li class="mdc-list-item" role="menuitem" tabindex="0">
                            <i class="material-icons mdc-theme--primary mr-1">settings</i>
                            Settings
                        </li>
                        <li class="mdc-list-item" role="menuitem" tabindex="0">
                            <i class="material-icons mdc-theme--primary mr-1">power_settings_new</i>
                            Logout
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</header>
