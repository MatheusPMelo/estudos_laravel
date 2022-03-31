@extends('template.main')

@section('titulo', 'Lista de clientes')

@section('conteudo')

<h1>Lista de clientes</h1>

<strong><a href="{{route('clientes.create')}}">Criar uma Nova cobaia</a></strong>

@if(count($clientes)>0)
<ul>
    @foreach ($clientes as $c)
    <li>
        <strong>ID:</strong> {{$c['id']}} |
        <strong>Nome:</strong> {{ $c['nome'] }} {{$c['sobrenome']}}|
        <strong>Email:</strong> <a href="mailto:{{$c['email']}}">{{$c['email']}}</a> |
        <a href="{{ route('clientes.edit', $c['id']) }}">editar
        </a> |
        <a href="{{ route('clientes.show', $c['id']) }}">Info
        </a> |
        <form action="{{ route('clientes.destroy', $c['id']) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Apagar">
        </form>
    </li>
    @endforeach

    <hr>

   
    @foreach($clientes as $c)
        <p>
            {{$c['nome']}} |
            @if ($loop->first)
                (chupa!)
            @endif
            @if ($loop->last)
                (Fudeu )
            @endif
            Index {{$loop->index}} - Qnt. dentro do array {{$loop -> count}} / {{$loop -> iteration}}
        </p>
    @endforeach
    

</ul>
@endif

@empty($clientes)
    <h1>Ops!!</h1>
@endempty
@endsection