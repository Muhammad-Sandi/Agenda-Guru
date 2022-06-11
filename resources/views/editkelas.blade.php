@extends('layout.main')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Edit Data Kelas</h1>
      </div>

<div class="container pt-5">
    <form action="/updatekelas/{{ $kelas->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <label for="inputKelas" class="col-sm-2 col-form-label">Nama Kelas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputKelas" name="nama_kelas"
                    value="{{ old('nama_kelas', $kelas->nama_kelas) }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputWali" class="col-sm-2 col-form-label">Wali Kelas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputWali" name="wali_kelas"
                    value="{{ old('wali_kelas', $kelas->wali_kelas) }}">
            </div>
        </div>

        <button class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
