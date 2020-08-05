@extends('layouts.app')
@section('content')

    <div class="card-header">
        <a href="{{ route('admin.stores.create') }}" class="btn btn-sm btn-lg btn-outline-success">CRIAR LOJA</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Loja</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stores as $store)
                    <tr>
                        <td>{{ $store->id }}</td>
                        <td>{{ $store->name }}</td>
                        <td>
                            <a href="{{ route('admin.stores.edit', ['store' => $store->id]) }}"
                                class="btn btn-sm btn-outline-info">EDITAR</a>
                            <a href="{{ route('admin.stores.destroy', ['store' => $store->id]) }}"
                                class="btn btn-sm btn-outline-danger">REMOVER</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $stores->links() }}
    </div>

@endsection
