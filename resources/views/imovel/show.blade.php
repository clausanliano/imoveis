@extends('adminlte::page')


@section('title', 'Imóvel')

@section('content')
    <div class="py-4">
        <div class="card card-secondary ">
            <div class="card-header">
                Imóvel
            </div>
                <div class="card-body">
                    <div class="form-group ">
                        <label for="nome">Nome</label>
                        <input type="text" value="{{ $objeto->nome }}" class="form-control" disabled>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-outline-primary"  href="{{ route('imovel.index')}}">Listar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
