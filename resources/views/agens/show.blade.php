@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Agen Information
                    </div>
                    <div class="float-end">
                        <a href="{{ route('agens.index') }}" class="btn
btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <label for="Name"
                            class="col-md-4 col-form-label
text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $agen->name }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="tipe"
                            class="col-md-4 col-form-label
text-md-end text-start"><strong>Email:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $agen->email }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
