@extends('adminlte::page')


@section('title', 'OPM - Formulário')

@section('content')

    <div class="py-4">
        <div class="card card-secondary ">
            <div class="card-header">
                OPM - Formulário
            </div>
            @if ($objeto->id)
                <form action="{{ route('opm.update', $objeto)}}" method="post">
                @method('PUT')
            @else
                <form action="{{ route('opm.store')}}" method="post">
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

                    <div class="form-group">
                        <label for="imovel_id">Imóvel</label>
                        <select name="imovel_id" id="imovel_id"
                            class="form-control @error('imovel_id') is-invalid @enderror"
                        >
                            <option value="0"> - - Selecione uma opção - - </option>
                            @foreach ($imoveis as $item)
                                @if (old('imovel_id', $objeto->imovel_id) == $item->id)
                                    <option value="{{ $item->id}}" selected>{{ $item->nome}}</option>
                               @else
                                    <option value="{{ $item->id}}">{{ $item->nome}}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('imovel_id')
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
                    <a class="btn btn-outline-danger"  href="{{ route('opm.index')}}">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection


@section('plugins.Select2', true)

@section('js')
    <script>
        $(document).ready(function () {
            $( '#imovel_id' ).select2( {
                closeOnSelect: false,
                allowClear: true,
            } );
        });
    </script>
@stop
