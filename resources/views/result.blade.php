@extends('layouts.app', ['final_result' => $final_result])

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <h3>Hasil Perhitungan</h3>
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
                    @foreach($final_result as $key=>$value)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $key }}</td>
                            <td>{{ $value }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <div class="row">
        <div class="col-md-10 offset-1">
            <h3>Detail Perhitungan</h3>
            <small><i>Angka pada tabel perhitungan dibulatkan agar mudah dilihat, hasil perhitungan menggunakan nilai yang tidak dibulatkan agar lebih akurat</i></small>
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
                    <tr>
                        <th scope="row">Bobot</th>
                        @foreach($kriteria as $krit)
                            <td>{{$krit->bobot}}</td>
                        @endforeach
                    </tr>
                        @foreach($alternatifs as $alt)
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
                        <tr>
                            <th scope="row">∑xij^2 v</th>
                            @foreach($xij_pow_2_v as $key=>$value)
                                <td>{{ $value }}</td>
                            @endforeach
                        </tr>
                    <tr>
                        <th scope="row">√∑xij^2 v</th>
                        @foreach($sqrt_xij_pow_2_v as $key=>$value)
                            <td>{{ number_format((float)$value, 4, '.', '') }}</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 offset-1">
            <h3>Tabel R</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 offset-1">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Alternatif</th>
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
                @foreach($r_matrices as $rkey => $rvalue)
                    <tr>
                        <th scope="row">{{ $rkey }}</th>

                        @foreach($rvalue as $key => $value)
                            <td>{{ number_format((float)$value, 4, '.', '') }}</td>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 offset-1">
            <h3>Tabel Y</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 offset-1">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Alternatif</th>
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
                @foreach($y_matrices as $ykey => $yvalue)
                    <tr>
                        <th scope="row">{{ $ykey }}</th>

                        @foreach($yvalue as $key => $value)
                            <td>{{ number_format((float)$value, 4, '.', '') }}</td>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 offset-1">
            <h3>Y+ dan Y-</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 offset-1">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col"></th>
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
                    <tr>
                        <th scope="row">Y+</th>
                        @foreach($y_plus as $ykey => $yvalue)
                            <td>{{ number_format((float)$yvalue, 4, '.', '') }}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <th scope="row">Y-</th>
                        @foreach($y_min as $ykey => $yvalue)
                            <td>{{ number_format((float)$yvalue, 4, '.', '') }}</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 offset-1">
            <h5>Yi+ dan Yi-</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="row">Alternatif</th>
                        <th scope="row">∑(Yij-Yi+)^2</th>
                        <th scope="row">∑(Yij-Yi-)^2</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($yi_plus as $key => $value)
                        <tr>
                            <th scope="col">{{ $key }}</th>
                            <td>{{ number_format((float)$value, 4, '.', '') }}</td>
                            <td>{{ number_format((float)$yi_min[$key], 4, '.', '') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-4 offset-1">
            <h5>D+ dan D-</h5>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="row">Alternatif</th>
                    <th scope="row">D+</th>
                    <th scope="row">D-</th>
                </tr>
                </thead>
                <tbody>
                @foreach($d_plus as $key => $value)
                    <tr>
                        <th scope="col">{{ $key }}</th>
                        <td>{{ number_format((float)$value, 4, '.', '') }}</td>
                        <td>{{ number_format((float)$d_min[$key], 4, '.', '') }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
