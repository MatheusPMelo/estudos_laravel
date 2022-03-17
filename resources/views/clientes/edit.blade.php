<center><h3>Criar Cliente</h3>
<form action="{{route('clientes.update', $cliente['id'])}}" method="post">
    @csrf <!-- cria e envia um token do formulário -->

    @method('put')
    <input type="text" name="nome" value="{{$cliente['nome']}}"><br>
    <input type="text" name="sobrenome" value="{{$cliente['sobrenome']}}"><br>
    <input type="email" name="email" id="" placeholder="{{$cliente['email']}}"><br><br>
    <input type="submit" value="Salvar">
</form>

<a href="{{route('clientes.index')}}">Voltar</a></center>