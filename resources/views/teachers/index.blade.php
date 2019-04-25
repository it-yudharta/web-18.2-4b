@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Guru</div>

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
                            <td>@mdo</td>
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
