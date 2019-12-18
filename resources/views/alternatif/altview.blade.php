@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 offset-1">
                <div class="card">
                    <div class="card-header">Tabel Alternatif</div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col" rowspan="2" style="vertical-align: middle; text-align: center">Nama alternatif</th>
                                <th scope="col" colspan="13" style="text-align: center;">Kriteria Alternatif</th>
                                <th scope="col" rowspan="2" style="vertical-align: middle; text-align: center;">Action</th>
                            </tr>
                            <tr>
                                <th scope="col">SC</th>
                                <th scope="col">SA</th>
                                <th scope="col">GCC</th>
                                <th scope="col">PAC</th>
                                <th scope="col">SOL</th>
                                <th scope="col">GCPCH</th>
                                <th scope="col">FCC</th>
                                <th scope="col">CSO</th>
                                <th scope="col">TET</th>
                                <th scope="col">MDS</th>
                                <th scope="col">SI</th>
                                <th scope="col">COS+MOS</th>
                                <th scope="col">CTO</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($alt as $obj)
                                <tr>
                                    <td>{{ $obj-> nama }}</td>
                                    <td>{{ $obj-> sc }}</td>
                                    <td>{{ $obj-> sa }}</td>
                                    <td>{{ $obj-> gcc }}</td>
                                    <td>{{ $obj-> pac }}</td>
                                    <td>{{ $obj-> soi }}</td>
                                    <td>{{ $obj-> gcpch }}</td>
                                    <td>{{ $obj-> fcc }}</td>
                                    <td>{{ $obj-> cso }}</td>
                                    <td>{{ $obj-> tet }}</td>
                                    <td>{{ $obj-> mds }}</td>
                                    <td>{{ $obj-> si }}</td>
                                    <td>{{ $obj-> cosmos }}</td>
                                    <td>{{ $obj-> cto }}</td>
                                    <td>
                                        <a href="/alternatif/edit/{{ $obj->id }}" class="btn btn-warning">Edit</a>
                                        <a href="/alternatif/delete/{{ $obj->id }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <a href="/alternatif/add-form" class="btn btn-info">Tambah alternatif</a>
                        <a class="btn btn-success">Jalankan Perhitungan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
