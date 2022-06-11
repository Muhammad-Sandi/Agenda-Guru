@extends('layout.main')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Tambah Data Guru</h1>
      </div>

    <div class="container pt-5">
        <form action="/simpanguru" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="inputGuru" class="col-sm-2 col-form-label">Nama Guru</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputGuru" name="nama_guru">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputNik" class="col-sm-2 col-form-label">NIK Guru</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNik" name="nik_guru">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputMapel" class="col-sm-2 col-form-label">Mata Pelajaran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputMapel" name="mata_pelajaran">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputUsername" name="username">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputNik" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="password">
                </div>
            </div>

            <button class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
