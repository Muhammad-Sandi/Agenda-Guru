@extends('layout.main')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Data Kelas</h1>
      </div>

      <div class="container">
        <a href="/tambahkelas" class="btn btn-primary mt-5">Tambah Data [+]</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kelas</th>
                    <th scope="col">Wali Kelas</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($kelas as $kls)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $kls->nama_kelas }}</td>
                    <td>{{ $kls->wali_kelas }}</td>
                    <td class="d-flex">
                        <form action="/editkelas/{{ $kls->id }}">
                            @csrf
                            <button class="btn btn-warning mt-2">Edit</button>
                            <a href="/hapuskelas/{{ $kls->id }}" class="btn btn-danger mt-2">Hapus</a>
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
