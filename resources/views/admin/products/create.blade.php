@extends('layouts.app')

@section('content')
    <h1> CRIAR PRODUTO</h1>
    <form action="{{ route('admin.products.store') }}" method="POST">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label> Nome Produto </label>
            <input class="form-control" type="text" name="name">
        </div>

        <div class="form-group">
            <label> Descrição </label>
            <input class="form-control" type="text" name="description">
        </div>

        <div class="form-group">
            <label> Conteudo </label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label> Preço </label>
            <input class="form-control" type="text" name="price">
        </div>

        <div class="form-group">
            <label> Slug </label>
            <input class="form-control" type="text" name="slug">
        </div>

        <div class="form-group">
            <label> Lojas </label>
            <select class="form-control" name="store">
                @foreach ($stores as $store)
                    <option value="{{ $store->id }}"> {{ $store->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button class="btn btn-lg btn-success" type="submit"> CRIAR PRODUTO </button>
        </div>
    </form>

@endsection
