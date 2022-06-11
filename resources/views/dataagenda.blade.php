@extends('layout.main')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Agenda</h1>
        </div>

        <div class="container">
            <a href="/tambahagenda" class="btn btn-primary mt-5">Tambah Data [+]</a>
            <div style="overflow-x: scroll; overflow-y:scroll;">
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Guru</th>
                            <th scope="col">Mapel</th>
                            <th scope="col">Materi Pel.</th>
                            <th scope="col">Jam Pel.</th>
                            <th scope="col">Siswa Absen</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Link</th>
                            <th scope="col">Docs.</th>
                            <th scope="col">Ket.</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($agendas as $agenda)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td class="pt-4 pb-4">{{ $agenda->nama_guru }}</td>
                            <td class="pt-4 pb-4">{{ $agenda->mata_pelajaran }}</td>
                            <td class="pt-4 pb-4">{{ $agenda->materi_pelajaran }}</td>
                            <td class="pt-4 pb-4">{{ $agenda->jam_pelajaran }}</td>
                            <td class="pt-4 pb-4">{{ $agenda->siswa_yang_tidak_hadir }}</td>
                            <td class="pt-4 pb-4">{{ $agenda->kelas }}</td>
                            <td class="pt-4 pb-4">{{ $agenda->link_pembelajaran }}</td>
                            <td class="pt-4 pb-4">
                                <img src="{{ asset('storage/'.$agenda->dokumentasi.'') }}" style="width: 10rem;">
                            </td>
                            <td class="pt-4 pb-4">{{ $agenda->keterangan }}</td>
                            <td class="d-flex">
                                <form action="/editagenda/{{ $agenda->id }}">
                                    @csrf
                                    <button class="btn btn-warning mt-2">Edit</button>
                                    <a href="/hapusagenda/{{ $agenda->id }}" class="btn btn-danger mt-2">Hapus</a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection
