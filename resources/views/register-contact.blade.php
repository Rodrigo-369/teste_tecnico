@extends('layout.main')

@section('title', 'register contact')

@section('content')

<form action=" {{ route('store.contact') }}" method="post" class="container-md">
    @csrf
    <input type="text" name="Cont_name" class="form-control" placeholder="Nome">
    <input type="email" name="Cont_email" class="form-control" placeholder="Email">
    <input type="text" name="Cont_telefone" class="form-control" placeholder="Telefone">
    <input type="number" name="Cont_cep" class="form-control" placeholder="CEP">
    <input type="submit" class="btn btn-danger" value="registrar">
</form>

@endsection