@extends('layouts.app')
@section('content')
    <div class="card ">
        <div class="card-header">Agen List</div>
        <div class="card-body">
            @can('create-agens')
                <a href="{{ route('agens.create') }}" class="btn btn-success btn-sm my-2">
                    <i class="bi bi-plus-circle"></i> Add New Agen
                </a>
            @endcan
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        @php
                            use Illuminate\Support\Str;
                        @endphp
                        <th scope="col">No</th>
                        <th scope="col">Nama Agen</th>
                        <th scope="col">Email Agen</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($agens as $agen)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $agen->name }}</td>
                            <td>{{ $agen->email }}</td>
                            <td>
                                <form action="{{ route('agens.destroy', $agen->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('agens.show', $agen->id) }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-eye"></i>
                                        Show
                                    </a>
                                    @can('edit-agen')
                                        <a href="agens/{{ $agen->id }}/edit" class="btn btn-primary btn-sm">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                    @endcan
                                    @can('delete-agen')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Do you want to delete this agen?');">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    @endcan
                                </form>
                            </td>
                        </tr>
                    @empty
                        <td colspan="12">
                            <span class="text-danger">
                                <strong>No agen Found!</strong>
                            </span>
                        </td>
                    @endforelse
                </tbody>
            </table>
            {{ $agens->links() }}
        </div>
    </div>
@endsection
