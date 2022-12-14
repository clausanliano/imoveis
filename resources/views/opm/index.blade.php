@extends('adminlte::page')

@section('title', 'OPM')


@section('content')
<div class="py-4">
    @if (session('mensagem'))
        <div class="alert alert-success">{{ session('mensagem') }}</div>
    @endif
    <div class="card card-dark" style="width: 100%;">
        <div class="card-header">
            OPM
        </div>
        <div class="card-body">
            <table id="tabela" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Imóvel</th>
                        <th>Município</th>
                        <th style="width: 17em" >Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($lista as $item)
                        <tr>
                            <td>{{ $item->nome }}</td>
                            <td>{{ $item->imovel->nome }}</td>
                            <td>{{ $item->imovel->municipio }}</td>
                            <td >
                                <div class="form-inline">
                                <a class="btn btn-outline-primary mx-2" href="{{ route('opm.show', $item )}}">Mostrar</a>
                                <a class="btn btn-outline-warning mx-2" href="{{ route('opm.edit', $item )}}">Editar</a>
                                <form action="{{ route('opm.destroy', $item)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-outline-danger mx-2" type="submit">Apagar</button>
                                </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">Não há registros cadastrados!!!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a class="btn btn-outline-success" href="{{ route('opm.create')}}">Cadastrar</a>
        </div>
    </div>
</div>
@stop


@section('plugins.Datatables', true)

@section('js')
    <script>
        $(document).ready(function () {
            $('#tabela').DataTable({
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/pt-BR.json',
                },
                columnDefs: [
                    {
                        searchable: false,
                        orderable: false,
                        targets: [3]
                    },
                ],
            });
        });
    </script>
@stop
