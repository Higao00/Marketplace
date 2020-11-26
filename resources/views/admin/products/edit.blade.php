@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.products.update', ['product' => $product->id]) }}" method="POST"
        enctype="multipart/form-data">
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
                    <option value="{{ $category->id }}" @if ($product->categories->contains($category))
                        selected
                @endif
                > {{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="">Fotos do Produto</label>
            <input type="file" name="photos[]" class="form-control @error('photos.*') is-invalid @enderror" multiple>
            @error('photos.*')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label> Slug </label>
            <input class="form-control" type="text" name="slug" value="{{ $product->slug }}">
        </div>

        <div class="form-group">
            <button class="btn btn-sm btn-lg btn-outline-success" type="submit"> ATUALIZAR PRODUTO </button>
        </div>
    </form>

    <hr>

    <div class="row">
        @foreach ($product->photos as $photo)
            <div class="col-lg-4 text-center">
                <img src="{{ asset('storage/' . $photo->image) }}" alt="" class="img-fluid">
                <form action="{{ route('admin.photo.remove') }}" method="POST">
                    @csrf

                    <input type="hidden" name="photoName" value="{{ $photo->image }}">
                    <button type="submit" class="btn btn-sm btn-lg btn-outline-danger">Remover</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
