@extends('layouts.app')
@section('content')

    <div class="card-header">
        <a href="{{ route('admin.products.create') }}" class="btn btn-sm btn-lg btn-outline-success">CRIAR PRODUTO</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->price }}</td>

                        <td>
                            <a href="{{ route('admin.products.edit', ['product' => $p->id]) }}"
                                class="btn btn-sm btn-outline-info">EDITAR</a>
                            <a href="{{ route('admin.products.destroy', ['product' => $p->id]) }}"
                                class="btn btn-sm btn-outline-danger">REMOVER</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </div>

@endsection
