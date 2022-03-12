<h1>Clientes</h1>

<a href="{{route('clientes.create')}}">Criar Cliente</a>

<ol>
    
    @foreach ($clientes as $c)
    <li>
        {{ $c['nome'] }} | 
        <a href="{{route('clientes.edit', $c['id']) }}">editar</a> |
        <a href="{{route('clientes.destroy', $c['id']) }}">Excluir</a>
    </li>
    @endforeach

</ol>