@extends('layouts.front')

@section('content')
    <div class="row">
        <div class="col-12">
            <h2>Carrinho de Compra</h2>
        </div>

        <div class="col-12">
            @if ($cart)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Produtos</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Subtotal</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $total = 0;
                        @endphp

                        @foreach ($cart as $c)
                            <tr>
                                <td>{{ $c['name'] }}</td>
                                <td>R${{ $c['price'] }}</td>
                                <td>{{ $c['amount'] }}</td>
                                @php
                                $subtotal = $c['price'] * $c['amount'];
                                $total += $subtotal;
                                @endphp
                                <td>R${{ number_format($c['price'] * $c['amount'], 2, ',', '.') }}</td>
                                <td>
                                    <a href="{{ route('cart.remove', ['slug' => $c['slug']]) }}"
                                        class="btn btn-sm btn-danger">Remover</a>
                                </td>
                            </tr>
                        @endforeach

                        <tr>
                            <td colspan="3">Total:</td>
                            <td colspan="3">R${{ number_format($total, 2, ',', '.') }}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>

                <div class="col-md-12">
                    <a href="{{ route('checkout.index') }}" class="btn btn-success float-right">Concluir Compla</a>
                    <a href="{{ route('cart.cancel') }}" class="btn btn-danger float-left">Cancelar Compla</a>

                </div>
            @else
                <div class="alert alert-warning">Carrinho vazio...</div>
            @endif
        </div>

    </div>
@endsection
