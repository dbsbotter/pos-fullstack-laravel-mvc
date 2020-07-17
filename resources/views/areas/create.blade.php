@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastro de Áreas</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('areas.store') }}" method="POST">
        @include('areas._partial.form')
    </form>
</div>
@endsection
