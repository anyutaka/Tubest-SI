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
                            <form action="/instPegawai" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Id Pegawai</label>
                                    <br>
                                    <input type="string" name="id_pegawai" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Pegawai</label>
                                    <br>
                                    <input type="string" name="nama_pegawai" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                    <br>
                                    <input type="string" name="alamat" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">No Telp</label>
                                    <br>
                                    <input type="string" name="no_telp" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Id User</label>
                                    <div class="form-group">
                                        <select class="form-control" name="id_user">
                                            <option selected disabled>-- Pilih ID User --</option>
                                            @foreach ($user as $row)
                                                <option value="{{ $row->id }}">
                                                    {{ $row->id_user }}-{{ $row->username }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <div class="form-group">
                                        <select class="form-control" name="email">
                                            <option selected disabled>-- Pastikan ID sama dengan User yang anda Pilih --
                                            </option>
                                            @foreach ($user as $row)
                                                <option value="{{ $row->id }}">
                                                    {{ $row->id_user }}-{{ $row->email }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Gudang</label>
                                    <div class="form-group">
                                        <select class="form-control" name="id_gudang">
                                            <option selected disabled>-- Pilih Nama Gudang --</option>
                                            @foreach ($gudang as $row)
                                                <option value="{{ $row->id }}">
                                                    {{ $row->id_gudang }}-{{ $row->nama_gudang }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="mdc-button mdc-button--raised">Simpan</button>
                                <a href="/Pegawai" class="mdc-button mdc-button--raised">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@include('layout/footer')
