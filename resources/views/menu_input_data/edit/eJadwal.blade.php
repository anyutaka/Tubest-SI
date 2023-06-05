@include('layout/header')
@include('layout/sidebar')
@include('layout/navbar')

<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
        <div class="container">
            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        <div class="mdc-card">
                            <div class="mdc-card__primary">
                                <form action="/updateJadwal/{{ $data->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Id Jadwal</label>
                                        <br>
                                        <input type="string" name="id_jadwal" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            value="{{ $data->id_jadwal }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Supir</label>
                                        <div class="form-group">
                                            <select class="form-control" name="id_supir">
                                                <option selected disabled>-- Pilih Supir --</option>
                                                @foreach ($supir as $row)
                                                    <option value="{{ $row->id }}">
                                                        {{ $row->id_supir }} - {{ $row->nama_supir }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Jenis Truk</label>
                                        <div class="form-group">
                                            <select class="form-control" name="id_truk">
                                                <option selected disabled>-- Pilih Jenis Truk --</option>
                                                @foreach ($truk as $row)
                                                    <option value="{{ $row->id }}">
                                                        {{ $row->id_truk }}-{{ $row->jenis_truk }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Id Rute</label>
                                        <div class="form-group">
                                            <select class="form-control" name="id_rute">
                                                <option selected disabled>-- Pilih ID Rute --</option>
                                                @foreach ($rute as $row)
                                                    <option value="{{ $row->id }}">
                                                        {{ $row->id_rute }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tanggal Pengiriman</label>
                                        <br>
                                        <input type="date" name="tanggal" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            value="{{ $data->tanggal }}">
                                    </div>
                                    <button type="submit" class="mdc-button mdc-button--raised">Simpan</button>
                                    <a href="/Jadwal" class="mdc-button mdc-button--raised">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@include('layout/footer')
