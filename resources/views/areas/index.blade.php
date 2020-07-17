@extends('layouts.app')

@section('content')
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-6">
                    <h2>Áreas</h2>
                </div>
                <div class="col-6">
                    <a href="{{ route('areas.create') }}">
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
                        <th>Cor</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($areas as $area)
                    <tr>
                        <td>{{ $area->description }}</td>
                        <td>{{ $area->color }}</td>
                        <td>
                            <div style="display: flex; justify-content: space-evenly;">
                                <a href="{{ route('areas.edit', ['area' => $area->id]) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('areas.destroy', ['area' => $area->id]) }}" method="post">
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
    </div>
</div>
@endsection
