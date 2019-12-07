@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 offset-1">
                <div class="card">
                    <div class="card-header">Tabel kriteria</div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Nama Kriteria</th>
                                <th scope="col">Bobot</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($krit as $kr)
                            <tr>
                                <td>{{ $kr->name }}</td>
                                <td>{{ $kr->bobot }}</td>
                                <td>
                                    <a href="/krit/edit/{{ $kr->id }}" class="btn btn-warning">Edit</a>
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
