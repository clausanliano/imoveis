<?php

namespace App\Http\Controllers;

use App\Models\Opm;
use App\Http\Requests\StoreOpmRequest;
use App\Http\Requests\UpdateOpmRequest;
use App\Models\Imovel;

class OpmController extends Controller
{
    public function index()
    {
        $lista = Opm::all();
        return view('opm.index')->with(compact('lista'));
    }

    public function create()
    {
        $objeto = new Opm();
        $imoveis = Imovel::all();
        return view('opm.edit')->with(compact('objeto', 'imoveis'));
    }

    public function store(StoreOpmRequest $request)
    {
        $dados = $request->validated();
        $objeto = Opm::create($dados);
        return redirect(route('opm.index'))->with(  'mensagem', 'Registro CADASTRADO com sucesso!!!');
    }

    public function show(Opm $opm)
    {
        $objeto = $opm;
        return view('telefone.opm')->with(compact('objeto'));
    }

    public function edit(Opm $opm)
    {
        $objeto = $opm;
        $imoveis = Imovel::all();
        return view('opm.edit')->with(compact('objeto', 'imoveis'));
    }

    public function update(UpdateOpmRequest $request, Opm $opm)
    {
        $dados = $request->validated();
        $opm->update($dados);
        return redirect(route('opm.index'))->with('mensagem', 'Registro EDITADO com sucesso!!!');
    }

    public function destroy(Opm $opm)
    {
        $opm->delete();
        return redirect(route('opm.index'))->with('mensagem', 'Registro APAGADO com sucesso!!!');
    }
}
