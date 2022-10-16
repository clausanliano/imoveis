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

                    <div class="form-group ">
                        <label for="tipo_logradouro">Tipo de Logradouro</label>
                        <input type="text" name="tipo_logradouro" id="tipo_logradouro" value="{{ old('tipo_logradouro', $objeto->tipo_logradouro )}}"
                            class="form-control @error('tipo_logradouro') is-invalid @enderror"
                        >
                        @error('tipo_logradouro')
                            <div class="badge badge-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <label for="logradouro">Logradouro</label>
                        <input type="text" name="logradouro" id="logradouro" value="{{ old('logradouro', $objeto->logradouro )}}"
                            class="form-control @error('logradouro') is-invalid @enderror"
                        >
                        @error('logradouro')
                            <div class="badge badge-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <label for="numero">Número</label>
                        <input type="text" name="numero" id="numero" value="{{ old('numero', $objeto->numero )}}"
                            class="form-control @error('numero') is-invalid @enderror"
                        >
                        @error('numero')
                            <div class="badge badge-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <label for="bairro">Bairro</label>
                        <input type="text" name="bairro" id="bairro" value="{{ old('bairro', $objeto->bairro )}}"
                            class="form-control @error('bairro') is-invalid @enderror"
                        >
                        @error('bairro')
                            <div class="badge badge-danger">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="form-group ">
                        <label for="CEP">CEP</label>
                        <input type="text" name="CEP" id="CEP" value="{{ old('CEP', $objeto->CEP )}}"
                            class="form-control @error('CEP') is-invalid @enderror"
                        >
                        @error('CEP')
                            <div class="badge badge-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <label for="municipio">Município</label>
                        <input type="text" name="municipio" id="municipio" value="{{ old('municipio', $objeto->municipio )}}"
                            class="form-control @error('municipio') is-invalid @enderror"
                        >
                        @error('municipio')
                            <div class="badge badge-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="observacao">Observação</label>
                        <textarea name="observacao" id="observacao" cols="30" rows="10"
                        class="form-control @error('observacao') is-invalid @enderror"
                        >{{ old('observacao', $objeto->observacao )}}</textarea>
                        @error('observacao')
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
