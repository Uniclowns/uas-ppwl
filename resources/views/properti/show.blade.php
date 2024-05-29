@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Properti Information
                    </div>
                    <div class="float-end">
                        <a href="{{ route('propertis.index') }}" class="btn
btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <label for="alamat"
                            class="col-md-4 col-form-label
text-md-end text-start"><strong>Alamat:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $properti->alamat }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="tipe"
                            class="col-md-4 col-form-label
text-md-end text-start"><strong>Tipe:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $properti->tipe }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="jumlah_kamar" class="col-md-4 col-form-label
text-md-end text-start"><strong>Jumlah
                                Kamar:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $properti->jumlah_kamar }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="kamar_mandi" class="col-md-4 col-form-label
text-md-end text-start"><strong>Kamar
                                Mandi:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $properti->kamar_mandi }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="fasilitas"
                            class="col-md-4 col-form-label
text-md-end text-start"><strong>Fasilitas:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $properti->fasilitas }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="harga"
                            class="col-md-4 col-form-label
text-md-end text-start"><strong>Harga:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            Rp{{ number_format($properti->harga, 0) }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="status"
                            class="col-md-4 col-form-label
text-md-end text-start"><strong>Status:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $properti->status }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="tanggal_listing" class="col-md-4 col-form-label
text-md-end text-start"><strong>Tanggal
                                Listing:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $properti->tanggal_listing }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="agenId" class="col-md-4 col-form-label
text-md-end text-start"><strong>Nama
                                Agen:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $properti->agens->name }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
