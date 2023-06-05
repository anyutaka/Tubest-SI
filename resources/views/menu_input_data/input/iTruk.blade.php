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
                            <form action="/instTruk" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Id Truk</label>
                                    <br>
                                    <input type="string" name="id_truk" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Plat Nomor</label>
                                    <br>
                                    <input type="string" name="plat_no" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Jenis Truk</label>
                                    <div class="form-group">
                                        <select class="form-control" name="jenis_truk">
                                            <option selected disabled>-- Pilih Truk --</option>
                                            <option>Truk Kontainer</option>
                                            <option>Truk Box CDE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kapasitas</label>
                                    <br>
                                    <input type="string" name="kapasitas" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <button type="submit" class="mdc-button mdc-button--raised">Simpan</button>
                                <a href="/Truk" class="mdc-button mdc-button--raised">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@include('layout/footer')
