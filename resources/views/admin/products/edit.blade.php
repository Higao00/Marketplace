@extends('layouts.app')

@section('content')
    <h1> EDITAR PRODUTO</h1>
    <form action="{{ route('admin.products.update', ['product' => $product->id]) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label> Nome Produto </label>
            <input class="form-control" type="text" name="name" value="{{ $product->name }}">
        </div>

        <div class="form-group">
            <label> Descrição </label>
            <input class="form-control" type="text" name="description" value="{{ $product->description }}">
        </div>

        <div class="form-group">
            <label> Conteudo </label>
            <textarea name="boyd" id="" cols="30" rows="10" class="form-control">{{ $product->body }}</textarea>
        </div>

        <div class="form-group">
            <label> Preço </label>
            <input class="form-control" type="text" name="price" value="{{ $product->price }}">
        </div>

        <div class="form-group">
            <label> Slug </label>
            <input class="form-control" type="text" name="slug" value="{{ $product->slug }}">
        </div>

        <div class="form-group">
            <button class="btn btn-lg btn-success" type="submit"> ATUALIZAR PRODUTO </button>
        </div>
    </form>
@endsection
