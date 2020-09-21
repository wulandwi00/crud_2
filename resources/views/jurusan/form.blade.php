@extends('layouts.frontend')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                @if (\Route::current()->getName() == 'jurusan.edit')
                    <h2>Edit Jurusan</h2>
                    <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST">
                    {{ method_field('patch') }}
                @else
                    <h2>Tambah Jurusan</h2>
                    <form action="{{ route('jurusan.store') }}" method="POST">
                @endif
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nama_jurusan">Nama Jurusan</label>
                            <input  value="{{ \Route::current()->getName() == 'jurusan.edit' ? $jurusan->nama_jurusan : '' }}"
                                    type="text" name="nama_jurusan" id="nama_jurusan" class="form-control" placeholder="Nama Jurusan" aria-describedby="nama_jurusan">
                            <small id="nama_jurusan" class="text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis_prodi">Jenis Prodi</label>
                            <input  value="{{ \Route::current()->getName() == 'jurusan.edit' ? $jurusan->jenis_prodi : '' }}"
                                    type="text" name="jenis_prodi" id="jenis_prodi" class="form-control" placeholder="Nama Prodi" aria-describedby="jenis_prodi">
                            <small id="jenis_prodi" class="text-muted"></small>
                        </div>
                        <button class="btn btn-warning shadow-sm px-5" type="submit">Submit</button>
                    </form>
            </div>
        </div>
    </div>
@endsection
