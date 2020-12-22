@extends('layouts.front')

@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-6">
                @if ($product->photos->count())
                    <img src="{{ asset('storage/' . $product->photos->first()->image) }}" alt="" class="card-img-top">
                    <div class="row" style="margin-top: 20px;">
                        @foreach ($product->photos as $photo)
                            <div class="col-4">
                                <img src="{{ asset('storage/' . $photo->image) }}" alt="" class="img-fluid">
                            </div>
                        @endforeach
                    </div>
                @else
                    <img src="{{ asset('assets/img/no-photo.jpg') }}" alt="" class="card-img-top">
                @endif
            </div>

            <div class="col-lg-6">
                <div class="col-md-12">
                    <h2 class="text-break">{{ $product->name }}</h2>
                    <p class="text-break">{{ $product->description }}</p>
                    <h3 class="text-break">R${{ number_format($product->price, '2', ',', '.') }}</h3>
                    <span class="text-break">Loja: {{ $product->store->name }}</span>
                </div>

                <hr>

                <div class="product-add col-md-12">
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product[name]" value="{{ $product->name }}">
                        <input type="hidden" name="product[price]" value="{{ $product->price }}">
                        <input type="hidden" name="product[slug]" value="{{ $product->slug }}">
                        <div class="form-group">
                            <label>Quantidade</label>
                            <input type="number" name="product[amount]" class="form-group col-md-2" value="1" />
                        </div>
                        <button class="btn btn-danger">Comprar</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <hr>
                {{ $product->body }}
            </div>
        </div>
    </div>

@endsection
