@extends('adminlte::page')


@section('title', 'Imóvel - Formulário')

@section('content')

    <div class="py-4">
        <div class="card card-secondary ">
            <div class="card-header">
                Imóvel - Formulário
            </div>
            @if ($objeto->id)
                <form action="{{ route('imovel.update', $objeto)}}" method="post">
                @method('PUT')
            @else
                <form action="{{ route('imovel.store')}}" method="post">
            @endif
                @csrf
                <div class="card-body">
                    <div class="form-group ">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" value="{{ old('nome', $objeto->nome )}}"
                            class="form-control @error('nome') is-invalid @enderror"
                        >
                        @error('nome')
                            <div class="badge badge-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="card-footer">
                    <button class="btn btn-outline-success" type="submit">Confirmar</button>
                    <a class="btn btn-outline-danger"  href="{{ route('imovel.index')}}">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
