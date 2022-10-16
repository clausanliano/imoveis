@extends('adminlte::page')


@section('title', 'Telefone')

@section('content')
    <div class="py-4">
        <div class="card card-secondary ">
            <div class="card-header">
                Telefone
            </div>
            <div class="card-body">
                <div class="form-group ">
                    <label for="numero">Número</label>
                    <input type="text" name='numero' id='numero' value="{{ $objeto->numero }}" class="form-control" disabled>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group ">
                    <label for="imovel">Imóvel</label>
                    <input type="text" name="imovel" id='imovel' value="{{ $objeto->imovel->nome }}" class="form-control" disabled>
                </div>
            </div>
                <div class="card-footer">
                    <a class="btn btn-outline-primary"  href="{{ route('telefone.index')}}">Listar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
