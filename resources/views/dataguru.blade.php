@extends('layout.main')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Data Guru</h1>
      </div>

      <div class="container">
        <a href="/tambahguru" class="btn btn-primary mt-5">Tambah Data [+]</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Guru</th>
                    <th scope="col">NIK Guru</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>

                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($gurus as $guru)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $guru->nama_guru }}</td> 
                    <td>{{ $guru->nik_guru }}</td>
                    <td>{{ $guru->mata_pelajaran }}</td>
                    <td>{{ $guru->username }}</td>
                    <td>{{ $guru->password }}</td>
                    <td class="d-flex">
                        <form action="/editguru/{{ $guru->id }}">
                            @csrf
                            <button class="btn btn-warning mt-2">Edit</button>
                            <a href="/hapusguru/{{ $guru->id }}" class="btn btn-danger mt-2">Hapus</a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </section>
    </div>
    </div>
    </div>
@endsection
