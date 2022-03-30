<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteControlador extends Controller
{

    private $clientes = [
        ['id' => 1, 'nome' => 'matheus', 'sobrenome' => '1', 'email' => 'matheus@gmail.com'],
        ['id' => 2, 'nome' => 'matheus', 'sobrenome' => '2', 'email' => 'matheus@gmail.com'],
        ['id' => 3, 'nome' => 'matheus', 'sobrenome' => '3', 'email' => 'matheus@gmail.com'],
        ['id' => 4, 'nome' => 'matheus', 'sobrenome' => '4', 'email' => 'matheus@gmail.com'],
        ['id' => 5, 'nome' => 'matheus', 'sobrenome' => '5', 'email' => 'matheus@gmail.com'],
        ['id' => 6, 'nome' => 'matheus', 'sobrenome' => '6', 'email' => 'matheus@gmail.com']
    ];

    public function __construct()
    {
        $clientes = session('clientes');
        if (!isset($clientes))
            session(['clientes' => $this->clientes]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = session('clientes');
        return view('clientes.index', compact(['clientes']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.criarCliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = session('clientes');
        $id = count($clientes) + 1;
        $nome = $request -> nome;
        $sobrenome = $request -> sobrenome;
        $email = $request -> email;
        $dados = ['id' => $id, "nome" => $nome, "sobrenome" => $sobrenome, "email" => $email];
        $clientes[] = $dados;
        session(['clientes' => $clientes]);
       $clientes = $this -> clientes;
        return redirect() -> route('clientes.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = session('clientes');
        $index = $this->getIndex($id, $clientes);
        $cliente = $clientes[$index];
        return view('clientes.info', compact(['cliente']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = session('clientes');
        $index = $this->getIndex($id, $clientes);
        $cliente = $clientes[$index];
        return view('clientes.edit', compact(['cliente']));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clientes = session('clientes');
        $clientes[$id - 1]['nome'] = $request -> nome;
        session(['clientes' => $clientes]);
        return redirect() -> route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes = session('clientes');
        $index = $this->getIndex($id, $clientes);
        array_splice($clientes, $index, 1);
        session(['clientes' => $clientes]);
        return redirect() -> route('clientes.index');
    }

    private function getIndex($id, $clientes)
    {
        $cols = array_column($clientes, 'id');
        $index = array_search($id, $cols);
        return $index;
    }
}
