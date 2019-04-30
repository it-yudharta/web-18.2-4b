@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                Daftar Guru
                <a class="btn-sm btn-primary float-right" href="{{ route('teachers.create') }}" role="button">Tambah</a>
                </div>

                <div class="card-body">
                {{ $teachers->links() }}
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $teacher)
                        <tr>
                            <th scope="row">{{ $teacher->id }}</th>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->address }}</td>
                            <td>{{ $teacher->old }}</td>
                            <td>
                                <a class="btn-sm btn-success" href="{{ route('teachers.edit', $teacher->id) }}" role="button">Edit</a>
                                <a class="btn-sm btn-danger" href="{{ route('teachers.destroy', $teacher->id) }}" role="button"
                                    onclick="event.preventDefault();
                                                    document.getElementById('destroy-teacher-{{$teacher->id}}').submit();">
                                    Hapus
                                </a>

                                <form id="destroy-teacher-{{$teacher->id}}" action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                        @endforeach                        
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
