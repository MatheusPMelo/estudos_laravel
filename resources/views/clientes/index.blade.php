<h1>Clientes</h1>

<strong><a href="{{route('clientes.create')}}">Criar Cliente</a></strong>

<ul>
    
    @foreach ($clientes as $c)
        <li>
            id: {{$c['id']}} |
            Nome: {{ $c['nome'] }} {{$c['sobrenome']}}|
            Email: <a href="mailto:{{$c['email']}}">{{$c['email']}}</a> |
            <a href="{{ route('clientes.edit', $c['id']) }}">editar</a> |
            <a href="{{ route('clientes.destroy', $c['id']) }}">Excluir</a> |
            <a href="{{ route('clientes.show', $c['id']) }}">Info</a>
        </li>
    @endforeach

</ul>