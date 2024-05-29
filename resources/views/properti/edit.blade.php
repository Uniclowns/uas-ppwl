@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Edit Propertis
                    </div>
                    <div class="float-end">
                        <a href="{{ route('propertis.index') }}" class="btn btn-primary btn-sm">&larr;
                            Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('propertis.update', $properti->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-end text-start">
                                Alamat
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                    id="alamat" name="alamat" value="{{ old('alamat', $properti->alamat) }}">
                                @if ($errors->has('alamat'))
                                    <span class="text-danger">
                                        {{ $errors->first('alamat') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tipe" class="col-md-4 col-form-label text-md-end text-start">
                                Tipe Rumah</label>
                            <div class="col-md-6">
                                <select class="form-select @error('tipe') is-invalid @enderror" multiple aria-label="tipe"
                                    id="tipe" name="tipe">
                                    <option value="Rumah Tinggal"
                                        {{ $properti->tipe == 'Rumah Tinggal' ? 'selected' : '' }}>
                                        Rumah Tinggal
                                    </option>
                                    <option value="Apartemen" {{ $properti->tipe == 'Apartemen' ? 'selected' : '' }}>
                                        Apartemen
                                    </option>
                                    <option value="Kondominium" {{ $properti->tipe == 'Kondominium' ? 'selected' : '' }}>
                                        Kondominium
                                    </option>
                                </select>
                                @if ($errors->has('tipe'))
                                    <span class="text-danger">{{ $errors->first('tipe') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jumlah_kamar" class="col-md-4 col-form-label text-md-end text-start">Jumlah
                                Kamar</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control @error('jumlah_kamar') is-invalid @enderror"
                                    id="jumlah_kamar" name="jumlah_kamar"
                                    value="{{ old('jumlah_kamar', $properti->jumlah_kamar) }}">
                                @if ($errors->has('jumlah_kamar'))
                                    <span class="text-danger">{{ $errors->first('jumlah_kamar') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="kamar_mandi" class="col-md-4 col-form-label text-md-end text-start">Kamar
                                Mandi</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control @error('kamar_mandi') is-invalid @enderror"
                                    id="kamar_mandi" name="kamar_mandi"
                                    value="{{ old('kamar_mandi', $properti->kamar_mandi) }}">
                                @if ($errors->has('kamar_mandi'))
                                    <span class="text-danger">{{ $errors->first('kamar_mandi') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="fasilitas" class="col-md-4 col-form-label text-md-end text-start">
                                Fasilitas</label>
                            <div class="col-md-6">
                                <label for="fasilitas">
                                    <input type="checkbox"
                                        class="form-check-label @error('fasilitas[]') is-invalid @enderror" id="fasilitas"
                                        name="fasilitas[]" value="Taman"
                                        {{ in_array('Taman', $fasilitas) ? 'checked' : ' ' }}>
                                    Taman
                                </label>
                                <label for="fasilitas">
                                    <input type="checkbox"
                                        class="form-check-label @error('fasilitas[]') is-invalid @enderror" id="fasilitas"
                                        name="fasilitas[]" value="Garasi"
                                        {{ in_array('Garasi', $fasilitas) ? 'checked' : ' ' }}>
                                    Garasi
                                </label>
                                <label for="fasilitas">
                                    <input type="checkbox"
                                        class="form-check-label @error('fasilitas[]') is-invalid @enderror" id="fasilitas"
                                        name="fasilitas[]" value="Kolam Renang"
                                        {{ in_array('Kolam Renang', $fasilitas) ? 'checked' : ' ' }}>
                                    Kolam Renang
                                </label>
                                @if ($errors->has('status'))
                                    <span class="text-danger">{{ $errors->first('roles') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="harga" class="col-md-4 col-form-label text-md-end text-start">Harga</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control @error('harga') is-invalid @enderror"
                                    id="harga" name="harga" value="{{ old('harga', $properti->harga) }}">
                                @if ($errors->has('harga'))
                                    <span class="text-danger">{{ $errors->first('harga') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="status" class="col-md-4 col-form-label text-md-end text-start">
                                Status</label>
                            <div class="col-md-6">
                                <select class="form-select @error('status') is-invalid @enderror" multiple
                                    aria-label="status" id="status" name="status">
                                    <option value="Sudah Terjual"
                                        {{ $properti->status == 'Sudah Terjual' ? 'selected' : '' }}>
                                        Sudah Terjual
                                    </option>
                                    <option value="Sudah Disewa"
                                        {{ $properti->status == 'Sudah Disewa' ? 'selected' : '' }}>
                                        Sudah Disewa
                                    </option>
                                    <option value="Dijual" {{ $properti->status == 'Dijual' ? 'selected' : '' }}>
                                        Dijual
                                    </option>
                                    <option value="Disewa" {{ $properti->status == 'Disewa' ? 'selected' : '' }}>
                                        Disewa
                                    </option>
                                </select>
                                @if ($errors->has('status'))
                                    <span class="text-danger">{{ $errors->first('status') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tanggal_listing" class="col-md-4 col-form-label text-md-end text-start">Tanggal
                                Listing</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control @error('tanggal_listing') is-invalid @enderror"
                                    id="tanggal_listing" name="tanggal_listing"
                                    value="{{ old('tanggal_listing', $properti->tanggal_listing) }}">
                                @if ($errors->has('tanggal_listing'))
                                    <span class="text-danger">{{ $errors->first('tanggal_listing') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add Properti">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
