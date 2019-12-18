@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Alternatif') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/alternatif/update/{{$alt -> id}}">
                            @csrf

                            <div class="form-group row">
                                <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama alternatif') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{$alt -> nama}}" required autocomplete="name" autofocus>

                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="bobot" class="col-md-4 col-form-label text-md-right">{{ __('Nilai SC') }}</label>

                                <div class="col-md-6">
                                    <input id="sc" type="number" min="1" max="4" class="form-control @error('sc') is-invalid @enderror" name="sc" value="{{$alt -> sc}}" required>

                                    @error('sc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="bobot" class="col-md-4 col-form-label text-md-right">{{ __('Nilai SA') }}</label>

                                <div class="col-md-6">
                                    <input id="sa" type="number" min="1" max="4" class="form-control @error('sa') is-invalid @enderror" name="sa" value="{{$alt -> sa}}" required>

                                    @error('sa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="bobot" class="col-md-4 col-form-label text-md-right">{{ __('Nilai GCC') }}</label>

                                <div class="col-md-6">
                                    <input id="gcc" type="number" min="1" max="4" class="form-control @error('gcc') is-invalid @enderror" name="gcc" value="{{$alt -> gcc}}" required>

                                    @error('gcc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pac" class="col-md-4 col-form-label text-md-right">{{ __('Nilai PAC') }}</label>

                                <div class="col-md-6">
                                    <input id="pac" type="number" min="1" max="4" class="form-control @error('pac') is-invalid @enderror" name="pac" value="{{$alt -> pac}}" required>

                                    @error('pac')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="soi" class="col-md-4 col-form-label text-md-right">{{ __('Nilai SOI') }}</label>

                                <div class="col-md-6">
                                    <input id="soi" type="number" min="1" max="4" class="form-control @error('soi') is-invalid @enderror" name="soi" value="{{$alt -> soi}}" required>

                                    @error('soi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gcpch" class="col-md-4 col-form-label text-md-right">{{ __('Nilai GCPCH') }}</label>

                                <div class="col-md-6">
                                    <input id="gcpch" type="number" min="1" max="4" class="form-control @error('gcpch') is-invalid @enderror" name="gcpch" value="{{$alt -> gcpch}}" required>

                                    @error('gcpch')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fcc" class="col-md-4 col-form-label text-md-right">{{ __('Nilai FCC') }}</label>

                                <div class="col-md-6">
                                    <input id="fcc" type="number" min="1" max="4" class="form-control @error('fcc') is-invalid @enderror" name="fcc" value="{{$alt -> fcc}}" required>

                                    @error('fcc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cso" class="col-md-4 col-form-label text-md-right">{{ __('Nilai CSO') }}</label>

                                <div class="col-md-6">
                                    <input id="cso" type="number" min="1" max="4" class="form-control @error('cso') is-invalid @enderror" name="cso" value="{{$alt -> cso}}" required>

                                    @error('cso')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tet" class="col-md-4 col-form-label text-md-right">{{ __('Nilai TET') }}</label>

                                <div class="col-md-6">
                                    <input id="tet" type="number" min="1" max="4" class="form-control @error('tet') is-invalid @enderror" name="tet" value="{{$alt -> tet}}" required>

                                    @error('tet')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mds" class="col-md-4 col-form-label text-md-right">{{ __('Nilai MDS') }}</label>

                                <div class="col-md-6">
                                    <input id="mds" type="number" min="1" max="4" class="form-control @error('mds') is-invalid @enderror" name="mds" value="{{$alt -> mds}}" required>

                                    @error('mds')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="si" class="col-md-4 col-form-label text-md-right">{{ __('Nilai SI') }}</label>

                                <div class="col-md-6">
                                    <input id="si" type="number" min="1" max="4" class="form-control @error('si') is-invalid @enderror" name="si" value="{{$alt -> si}}" required>

                                    @error('si')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cosmos" class="col-md-4 col-form-label text-md-right">{{ __('Nilai COS+MOS') }}</label>

                                <div class="col-md-6">
                                    <input id="cosmos" type="number" min="1" max="4" class="form-control @error('cosmos') is-invalid @enderror" name="cosmos" value="{{$alt -> cosmos}}" required>

                                    @error('cosmos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cto" class="col-md-4 col-form-label text-md-right">{{ __('Nilai CTO') }}</label>

                                <div class="col-md-6">
                                    <input id="cto" type="number" min="1" max="4" class="form-control @error('cto') is-invalid @enderror" name="cto" value="{{$alt -> cto}}" required>

                                    @error('cto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
