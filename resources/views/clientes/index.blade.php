<h1>Clientes</h1>

<ol>
    
    @foreach ($clientes as $c)
    <li>
        {{ $c['nome'] }}
    </li>
    @endforeach

</ol>