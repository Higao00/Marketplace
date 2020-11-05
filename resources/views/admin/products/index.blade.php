@extends('layouts.app')
@section('content')

    <div class="card-header">
        <a href="{{ route('admin.products.create') }}" class="btn btn-sm btn-lg btn-outline-success">CRIAR PRODUTO</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Loja</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->store->name }}</td>
                        <td>R$ {{ number_format($p->price, 2, ',', '.') }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.products.edit', ['product' => $p->id]) }}"
                                    class="btn btn-sm btn-outline-info">EDITAR</a>

                                <form action="{{ route('admin.products.destroy', ['product' => $p->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                        style="color: darkred">REMOVER</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </div>

@endsection
