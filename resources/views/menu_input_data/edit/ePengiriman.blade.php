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
                                <form action="/updatePengiriman/{{ $data->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Id Jadwal</label>
                                        <div class="form-group">
                                            <select class="form-control" name="id_jadwal">
                                                <option selected disabled>-- Pilih ID Jadwal --</option>
                                                @foreach ($jadwal as $row)
                                                    <option value="{{ $row->id }}">
                                                        {{ $row->id_jadwal }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Status Pengiriman</label>
                                        <select class="form-control" name="status">
                                            <option selected disabled>-- Status --</option>
                                            <option>Menunggu</option>
                                            <option>Dalam Perjalanan</option>
                                            <option>Terlambat</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Estimasi Sampai</label>
                                        <br>
                                        <input type="date" name="estimasi" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            value="{{ $data->estimasi }}">
                                    </div>
                                    <button type="submit" class="mdc-button mdc-button--raised">Simpan</button>
                                    <a href="/Pengiriman" class="mdc-button mdc-button--raised">Cancel</a>
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
