@include('layout/header')
@include('layout/sidebar')
@include('layout/navbar')

<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <div class="mdc-card__primary">
                            <form action="/instRute" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Id Rute</label>
                                    <br>
                                    <input type="string" name="id_rute" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Pilih Gudang</label>
                                    <div class="form-group">
                                        <select class="form-control" name="id_gudang">
                                            <option selected disabled>-- Pilih Gudang --</option>
                                            @foreach ($gudang as $row)
                                                <option value="{{ $row->id }}">{{ $row->id_gudang }} - {{ $row->nama_gudang }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Pilih Outlet</label>
                                    <div class="form-group">
                                        <select class="form-control" name="id_outlet">
                                            <option selected disabled>-- Pilih Outlet --</option>
                                            @foreach ($outlet as $row)
                                                <option value="{{ $row->id }}">{{ $row->id_outlet }} - {{ $row->nama_outlet }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Jarak</label>
                                    <br>
                                    <input type="string" name="jarak" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Waktu Tempuh</label>
                                    <br>
                                    <input type="string" name="waktu_tempuh" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <button type="submit" class="mdc-button mdc-button--raised">Simpan</button>
                                <a href="/Rute" class="mdc-button mdc-button--raised">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@include('layout/footer')
