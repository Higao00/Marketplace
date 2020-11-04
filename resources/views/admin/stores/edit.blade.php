@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.stores.update', ['store' => $store->id]) }}" method="POST">
        @csrf
        @method('put')

        <h1> EDITAR LOJA</h1>
        <div class="form-group">
            <label> Nome Loja </label>
            <input class="form-control" type="text" name="name" value="{{ $store->name }}">
        </div>

        <div class="form-group">
            <label> Descrição </label>
            <input class="form-control" type="text" name="description" value="{{ $store->description }}">
        </div>

        <div class="form-group">
            <label> Telefone </label>
            <input class="form-control" type="text" name="phone" value="{{ $store->phone }}">
        </div>

        <div class="form-group">
            <label> Celular </label>
            <input class="form-control" type="text" name="mobile_phone" value="{{ $store->mobile_phone }}">
        </div>

        <div class="form-group">
            <label> Slug </label>
            <input class="form-control" type="text" name="slug" value="{{ $store->slug }}">
        </div>

        <div class="form-group">
            <button class="btn btn-lg btn-success" type="submit"> ATUALIZAR LOJA </button>
        </div>
    </form>

@endsection
