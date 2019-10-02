@extends('navbar1')

@section('content')
<div class="container" style="margin-top: 10em">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary mb-3">
                <div class="card-header text-white text-center bg-primary mb-3">{{ __('Pengaduan') }}</div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Pengaduan') }}</label>

                    <div class="col-md-6">
                        <select class="form-control">
                            <option>Pilih Kategori</option>
                            <option>Tempat Duduk Rusak</option>
                            <option>Berkarat</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Laporan') }}</label>

                    <div class="col-md-6">
                        <textarea id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                            class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Ketik Laporan Anda"></textarea>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Upload Lampiran') }}</label>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            <a href="/admin/index">
                            {{ __('Kirim') }}
                            </a>
                        </button>
                        <br><br>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection