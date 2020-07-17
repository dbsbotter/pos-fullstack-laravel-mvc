@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Estudo</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('studies.update', ['study' => $study->id]) }}" method="POST">
        <input type="hidden" name="_method" value="put">
        @include('studies._partial.form')
    </form>
</div>
@endsection
