@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No. </th>
                            <th scope="col">Nama Perhitungan</th>
                            <th scope="col">Top Rank</th>
                            <th scope="col">Tanggal Perhitungan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($result as $r)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td><a href="{{ url("/result/". $r->id) }}">{{ $r->nama_perhitungan }}</a></td>
                                <td>{{ $r->top_ranking }}</td>
                                <td>{{ $r->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
