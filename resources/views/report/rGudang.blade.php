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
                            <h1 class="mdc-card__title mdc-card__title--large">Tabel Report Gudang</h1>
                            @if (count($data) > 0)
                                <a href="/exportGudang/{{ $data[0]->id }}" data-mdc-auto-init="MDCRipple"
                                    class="mdc-button mdc-button--stroked">Download Report</a>
                            @endif
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
    <!-- partial:../../partials/_footer.html -->
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
