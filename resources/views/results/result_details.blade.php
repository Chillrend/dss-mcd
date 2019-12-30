@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <h3>Hasil Perhitungan {{ $result->nama_perhitungan }}</h3>
                <h3>Top Rank : {{ $result->top_ranking }}</h3>
            </div>
        </div>

        <div class="row">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Peringkat</th>
                    <th scope="col">Nama Alternatif</th>
                    <th scope="col">Skor total</th>
                </tr>
                </thead>
                <tbody>
                @foreach($alternatif as $al)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{ $al->nama }}</td>
                        <td>{{ $al->hasil }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <div class="row">
        <div class="col-md-10 offset-1">
            <h3>Alternatif yang diuji</h3>
            <small><i>Angka pada tabel berikut sudah dibulatkan agar mudah dilihat</i></small>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 offset-1">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col" rowspan="2">Alternatif</th>
                    <th scope="col" colspan="3">Sales</th>
                    <th scope="col" colspan="4">Profit</th>
                    <th scope="col" colspan="3">QSC</th>
                    <th scope="col" colspan="3">People</th>
                </tr>
                <tr>
                    <th scope="col">SC</th>
                    <th scope="col">SA</th>
                    <th scope="col">GCC</th>
                    <th scope="col">PAC</th>
                    <th scope="col">SOI</th>
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
                @foreach($alternatif as $alt)
                    <tr>
                        <th scope="row">{{ $alt->nama }}</th>
                        <td>{{ $alt->sc }}</td>
                        <td>{{ $alt->sa }}</td>
                        <td>{{ $alt->gcc }}</td>
                        <td>{{ $alt->pac }}</td>
                        <td>{{ $alt->soi }}</td>
                        <td>{{ $alt->gcpch }}</td>
                        <td>{{ $alt->fcc }}</td>
                        <td>{{ $alt->cso }}</td>
                        <td>{{ $alt->tet }}</td>
                        <td>{{ $alt->mds }}</td>
                        <td>{{ $alt->si }}</td>
                        <td>{{ $alt->cosmos }}</td>
                        <td>{{ $alt->cto }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
