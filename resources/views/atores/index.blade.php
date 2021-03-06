@extends('adminlte::page')

@section('content')
    <h1>Atores</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach($atores as $ator)
                <tr>
                    <td>{{ $ator->nome }}</td>
                    <td>{{ $ator->dt_nascimento }}</td>
                    <td>
                        <a href="{{ route('atores.edit', ['id'=>$ator->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="{{ route('atores.destroy', ['id'=>$ator->id]) }}" class="btn-sm btn-danger">Remover</a>
                    </td>
                    <br>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('atores.create', []) }}" class="btn btn-info">Adicionar</a>
@stop