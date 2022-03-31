@extends('template.main')

@section('titulo', 'Criar Clientes')

@section('conteudo')

<center><h3>Criar Cliente</h3>
<form action="{{route('clientes.store')}}" method="post">
    @csrf <!-- cria e envia um token do formulário -->
    <input type="text" name="nome" id="" placeholder="nome"><br>
    <input type="text" name="sobrenome" id="" placeholder="sobrenome"><br>
    <input type="email" name="email" id="" placeholder="Email"><br>
    <input type="submit" value="Enviar">
</form>

<a href="{{route('clientes.index')}}">Ver todos os clienter</a></center>
@endsection