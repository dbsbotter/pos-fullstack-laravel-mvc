@extends('layouts.app')

@section('content')
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-6">
                    <h2>Estudos</h2>
                </div>
                <div class="col-6">
                    <a href="{{ route('studies.create') }}">
                        <button class="btn btn-primary float-right">Cadastrar</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Área</th>
                        <th>Data Inicial</th>
                        <th>Data Final</th>
                        <th>Situação</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($studies as $study)
                    <tr>
                        <td>{{ $study->description }}</td>
                        <td>{{ $study->area->description }} </td>
                        <td>{{ $study->date_init }}</td>
                        <td>{{ $study->date_finish }}</td>
                        <td>{{ $study->status }}</td>
                        <td>
                            <div style="display: flex; justify-content: space-evenly;">
                                <a href="{{ route('studies.edit', ['study' => $study->id]) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('studies.destroy', ['study' => $study->id]) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete" />
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">Nenhum registro existente</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $studies->links() }}
    </div>
</div>
@endsection
