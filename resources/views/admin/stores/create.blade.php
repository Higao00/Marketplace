@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.stores.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1> CRIAR LOJA</h1>
        <div class="form-group">
            <label> Nome Loja </label>
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
            <label> Telefone </label>
            <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone"
                value="{{ old('phone') }}">
            @error('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label> Celular </label>
            <input class="form-control @error('mobile_phone') is-invalid @enderror" type="text" name="mobile_phone"
                value="{{ old('mobile_phone') }}">
            @error('mobile_phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Foto do Logo</label>
            <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror">
            @error('logo')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
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
