@extends('template.main')

@section('titulo', 'Clientes - Informações')

@section('conteudo')

<h3>Informações do cliente</h3>

<p><strong>ID:</strong> {{$cliente['id']}}</p>
<p><strong>Nome:</strong> {{$cliente['nome']}}</p>
<p><strong>sobrenome:</strong> {{$cliente['sobrenome']}}</p>
<p><strong>Email:</strong> <a href="mailto:{{$cliente['email']}}">{{$cliente['email']}}</a></p>
<br>

<a href="{{route('clientes.index')}}">Voltar</a>
@endsection