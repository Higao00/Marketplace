@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.products.update', ['product' => $product->id]) }}" method="POST">
        @csrf
        @method('put')

        <h1> EDITAR PRODUTO</h1>
        <div class="form-group">
            <label> Nome Produto </label>
            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                value="{{ $product->name }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label> Descrição </label>
            <input class="form-control @error('description') is-invalid @enderror" type="text" name="description"
                value="{{ $product->description }}">
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label> Conteudo </label>
            <textarea name="body" id="" cols="30" rows="10"
                class="form-control @error('body') is-invalid @enderror">{{ $product->body }}</textarea>
            @error('body')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label> Preço </label>
            <input class="form-control @error('price') is-invalid @enderror" type="text" name="price"
                value="{{ $product->price }}">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label> Categorias</label>
            <select name="categories[]" class="form-control" multiple>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" ] @if ($product->categories->contains($category))
                        selected
                @endif
                > {{ $category->name }}</option>
                @endforeach
            </select>
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
