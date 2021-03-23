@extends('layout')

@section('content')
    <div class="col-xl-12">
        <form>
            @csrf
            <h1>Form Data Mahasiswa</h1>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Mahasiswa</label>
                <input type="text" name="nama" class="form-control is-invalid" id="nama">
                <div class="invalid-feedback">
                    Pesan Error disini
                </div>
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" name="kelas" class="form-control is-invalid" id="kelas">
                <div class="invalid-feedback">
                    Pesan Error disini
                </div>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control is-invalid" id="jurusan">
                <div class="invalid-feedback">
                    Pesan Error disini
                </div>
            </div>
            <div class="mb-3">
                <label for="nomor_handphone" class="form-label">Nomor Handphone</label>
                <input type="text" name="nomor_handphone" class="form-control is-invalid" id="nomor_handphone">
                <div class="invalid-feedback">
                    Pesan Error disini
                </div>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button">Simpan Data</button>
            </div>
        </form>
    </div>
@endsection
