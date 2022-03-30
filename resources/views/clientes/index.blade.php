<h1>Clientes</h1>

<strong><a href="{{route('clientes.create')}}">Criar Cliente</a></strong>

<ul>
    
    @foreach ($clientes as $c)
        <li>
            <strong>ID:</strong> {{$c['id']}} |
            <strong>Nome:</strong> {{ $c['nome'] }} {{$c['sobrenome']}}|
            <strong>Email:</strong> <a href="mailto:{{$c['email']}}">{{$c['email']}}</a> |
            <a href="{{ route('clientes.edit', $c['id']) }}">editar</a> |
            <a href="{{ route('clientes.show', $c['id']) }}">Info</a> |
            <form action="{{ route('clientes.destroy', $c['id']) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Apagar">
            </form>
        </li>
    @endforeach

</ul>