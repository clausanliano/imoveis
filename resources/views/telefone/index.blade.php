@extends('adminlte::page')

@section('title', 'Telefone')


@section('content')
<div class="py-4">
    @if (session('mensagem'))
        <div class="alert alert-success">{{ session('mensagem') }}</div>
    @endif
    <div class="card card-dark" style="width: 100%;">
        <div class="card-header">
            Telefone
        </div>
        <div class="card-body">
            <table id="tabela" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Número</th>
                        <th>Imóvel</th>
                        <th style="width: 17em" >Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($lista as $item)
                        <tr>
                            <td>{{ $item->numero }}</td>
                            <td>{{ $item->imovel->nome }}</td>
                            <td >
                                <div class="form-inline">
                                <a class="btn btn-outline-primary mx-2" href="{{ route('telefone.show', $item )}}">Mostrar</a>
                                <a class="btn btn-outline-warning mx-2" href="{{ route('telefone.edit', $item )}}">Editar</a>
                                <form action="{{ route('telefone.destroy', $item)}}" method="post">
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
            <a class="btn btn-outline-success" href="{{ route('telefone.create')}}">Cadastrar</a>
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
                        targets: [2]
                    },
                ],
            });
        });
    </script>
@stop
