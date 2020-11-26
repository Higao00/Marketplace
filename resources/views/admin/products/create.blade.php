@extends('layouts.app')

@section('content')
    <h1> CRIAR PRODUTO</h1>
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label> Nome Produto </label>
            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                value="{{ old('name') }}">

            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label> Descrição </label>
            <input class="form-control @error('description') is-invalid @enderror" type="text" name="description"
                value="{{ old('description') }}">

            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label> Conteudo </label>
            <textarea name="body" id="" cols="30" rows="10"
                class="form-control @error('body') is-invalid @enderror">{{ old('body') }}</textarea>

            @error('body')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label> Preço </label>
            <input class="form-control @error('price') is-invalid @enderror" type="text" name="price"
                value="{{ old('price') }}">

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
                    <option value="{{ $category->id }}"> {{ $category->name }}</option>
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
            <button class="btn btn-lg btn-success" type="submit"> CRIAR PRODUTO </button>
        </div>
    </form>

@endsection
