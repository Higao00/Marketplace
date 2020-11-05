@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.stores.store') }}" method="POST">
        @csrf
        <h1> CRIAR LOJA</h1>
        <div class="form-group">
            <label> Nome Loja </label>
            <input class="form-control" type="text" name="name">
        </div>

        <div class="form-group">
            <label> Descrição </label>
            <input class="form-control" type="text" name="description">
        </div>

        <div class="form-group">
            <label> Telefone </label>
            <input class="form-control" type="text" name="phone">
        </div>

        <div class="form-group">
            <label> Celular </label>
            <input class="form-control" type="text" name="mobile_phone">
        </div>

        <div class="form-group">
            <label> Slug </label>
            <input class="form-control" type="text" name="slug">
        </div>

        <div class="form-group">
            <button class="btn btn-lg btn-success" type="submit"> CRIAR LOJA </button>
        </div>
    </form>

@endsection
