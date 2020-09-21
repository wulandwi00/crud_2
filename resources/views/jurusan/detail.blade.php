@extends('layouts.frontend')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ URL::previous() }}" class="btn btn-white border-warning">Kembali</a>
                <h1>{{ $jurusan->nama_jurusan }}</h1>
                <p>{{ $jurusan->jenis_prodi }}</p>
            </div>
        </div>
    </div>
@endsection
