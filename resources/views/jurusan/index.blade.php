@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Prodi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jurusan as $jrs)
                        <tr>
                            <td scope="row">{{ $jrs->nama_jurusan }}</td>
                            <td>{{ $jrs->jenis_prodi }}</td>
                            <td>
                            <form action="{{ route('jurusan.destroy', $jrs->id) }}" method="POST">
                                <a href="{{ route('jurusan.show', $jrs->id) }}" class="btn btn-success">Lihat</a>
                                <a href="{{ route('jurusan.edit', $jrs->id) }}" class="btn btn-success">Edit</a>
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('Yakin ?')">Hapus</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
