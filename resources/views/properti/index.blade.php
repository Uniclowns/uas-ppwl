@extends('layouts.app')
@section('content')
    <div class="card ">
        <div class="card-header">Properti List</div>
        <div class="card-body">
            @can('create-properti')
                <a href="{{ route('propertis.create') }}" class="btn btn-success btn-sm my-2">
                    <i class="bi bi-plus-circle"></i> Add New Properti
                </a>
            @endcan
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        @php
                            use Illuminate\Support\Str;
                        @endphp
                        <th scope="col">No</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Jumlah Kamar</th>
                        <th scope="col">Kamar Mandi</th>
                        <th scope="col">Fasilitas</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tanggal Listing</th>
                        <th scope="col">Nama Agen</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($propertis as $properti)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ Str::limit($properti->alamat, 16) }}</td>
                            <td>{{ $properti->tipe }}</td>
                            <td>{{ $properti->jumlah_kamar }} Kamar</td>
                            <td>{{ $properti->kamar_mandi }} Kamar</td>
                            <td>{{ $properti->fasilitas }}</td>
                            <td>Rp{{ number_format($properti->harga, 0) }}</td>
                            <td>{{ $properti->status }}</td>
                            <td>{{ date('d-m-Y', strtotime($properti->tanggal_listing)) }}</td>
                            <td>{{ $properti->agens->name }}</td>
                            <td>
                                <form action="{{ route('propertis.destroy', $properti->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('propertis.show', $properti->id) }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-eye"></i>
                                        Show
                                    </a>
                                    @can('edit-properti')
                                        <a href="propertis/{{ $properti->id }}/edit" class="btn btn-primary btn-sm">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                    @endcan
                                    @can('delete-properti')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Do you want to delete this properti?');">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    @endcan
                                </form>
                            </td>
                        </tr>
                    @empty
                        <td colspan="4">
                            <span class="text-danger">
                                <strong>No properti Found!</strong>
                            </span>
                        </td>
                    @endforelse
                </tbody>
            </table>
            {{ $propertis->links() }}
        </div>
    </div>
@endsection
