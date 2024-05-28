@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @canany(['create-properti', 'edit-properti', 'delete-properti'])
                            <a class="btn btn-primary" href="{{ route('propertis.index') }}">
                                <i class="bi bi-building-fill"></i> Manage Properties
                            </a>
                        @endcanany
                        @canany(['create-agen', 'edit-agen', 'delete-agen'])
                            <a class="btn btn-success" href="{{ route('agens.index') }}">
                                <i class="bi bi-people"></i>
                                Manage Agens
                            </a>
                        @endcanany
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
