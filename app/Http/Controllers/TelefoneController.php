<?php

namespace App\Http\Controllers;

use App\Models\Telefone;
use App\Http\Requests\StoreTelefoneRequest;
use App\Http\Requests\UpdateTelefoneRequest;
use App\Models\Imovel;

class TelefoneController extends Controller
{
    public function index()
    {
        $lista = Telefone::all();
        return view('telefone.index')->with(compact('lista'));
    }

    public function create()
    {
        $objeto = new Telefone();
        $imoveis = Imovel::all();
        return view('telefone.edit')->with(compact('objeto', 'imoveis'));
    }

    public function store(StoreTelefoneRequest $request)
    {
        $dados = $request->validated();
        $objeto = Telefone::create($dados);
        return redirect(route('telefone.index'))->with(  'mensagem', 'Registro CADASTRADO com sucesso!!!');
    }

    public function show(Telefone $telefone)
    {
        $objeto = $telefone;
        return view('telefone.show')->with(compact('objeto'));
    }

    public function edit(Telefone $telefone)
    {
        $objeto = $telefone;
        $imoveis = Imovel::all();
        return view('telefone.edit')->with(compact('objeto', 'imoveis'));
    }

    public function update(UpdateTelefoneRequest $request, Telefone $telefone)
    {
        $dados = $request->validated();
        $telefone->update($dados);
        return redirect(route('telefone.index'))->with('mensagem', 'Registro EDITADO com sucesso!!!');
    }

    public function destroy(Telefone $telefone)
    {
        $telefone->delete();
        return redirect(route('telefone.index'))->with('mensagem', 'Registro APAGADO com sucesso!!!');
    }
}
