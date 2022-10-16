<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
use App\Http\Requests\StoreImovelRequest;
use App\Http\Requests\UpdateImovelRequest;

class ImovelController extends Controller
{
    public function index()
    {
        $lista = Imovel::all();
        return view('imovel.index')->with(compact('lista'));
    }

    public function create()
    {
        $objeto = new Imovel();
        return view('imovel.edit')->with(compact('objeto'));
    }

    public function store(StoreImovelRequest $request)
    {
        $dados = $request->validated();
        $objeto = Imovel::create($dados);
        return redirect(route('imovel.index'))->with(  'mensagem', 'Registro CADASTRADO com sucesso!!!');
    }

    public function show(Imovel $imovel)
    {
        $objeto = $imovel;
        return view('imovel.show')->with(compact('objeto'));
    }

    public function edit(Imovel $imovel)
    {
        $objeto = $imovel;
        return view('imovel.edit')->with(compact('objeto'));
    }

    public function update(UpdateImovelRequest $request, Imovel $imovel)
    {
        $dados = $request->validated();
        $imovel->update($dados);
        return redirect(route('imovel.index'))->with('mensagem', 'Registro EDITADO com sucesso!!!');
    }

    public function destroy(Imovel $imovel)
    {
        $imovel->delete();
        return redirect(route('imovel.index'))->with('mensagem', 'Registro APAGADO com sucesso!!!');
    }
}
