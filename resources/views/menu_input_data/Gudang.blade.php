@include('layout/header')
@include('layout/sidebar')
@include('layout/navbar')

<!-- partial -->
<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <section class="mdc-card__primary">
                            <h1 class="mdc-card__title mdc-card__title--large">Tabel Data Gudang</h1>
                            <a href="/iGudang" class="mdc-button mdc-button--stroked" data-mdc-auto-init="MDCRipple">
                                Masukan Data
                            </a>
                        </section>
                        <div class="template-demo">
                            <table class="table table-hoverable">
                                <thead>
                                    <tr>
                                        <th>ID Gudang</th>
                                        <th>Nama Gudang</th>
                                        <th>Alamat Gudang</th>
                                        <th>Kapasitas</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah Barang</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $row)
                                        <tr>
                                            <td>{{ $row->id_gudang }}</td>
                                            <td>{{ $row->nama_gudang }}</td>
                                            <td>{{ $row->alamat_gudang }}</td>
                                            <td>{{ $row->kapasitas }}</td>  
                                            <td>{{ $row->barang->nama_barang }}</td>
                                            <td>{{ $row->jumlah_barang }}</td>
                                            <td>
                                                <a href="/editGudang/{{ $row->id }}"
                                                    class="mdc-button mdc-button--stroked"
                                                    data-mdc-auto-init="MDCRipple">
                                                    edit
                                                </a>
                                                <a href="/delGudang/{{ $row->id }}"
                                                    class="mdc-button mdc-button--stroked"
                                                    data-mdc-auto-init="MDCRipple">
                                                    delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                    <span class="text-muted">Copyright © 2018 <a class="text-green"
                            href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights
                        reserved.</span>
                </div>
                <div
                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6 d-flex justify-content-end">
                    <span class="mt-0 text-right">Hand-crafted &amp; made with <i
                            class="mdi mdi-heart text-red"></i></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- body wrapper -->
@include('layout/footer')
