@extends('layout.main')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="section-body bg-white p-3">
            <h1>Selamat Datang, {{ auth()->user()->name }}</h1>
      </div>
    </section>
</div>
@endsection
