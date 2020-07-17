@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h1 class="display-4 d-none d-sm-block">
                Central de Estudos
            </h1>

            @if (session('status'))
            <div class="alert alert-success fade collapse" role="alert" id="myAlert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>Hey!</strong> {{ session('status') }}
            </div>
            @endif

            <div class="row mb-3">
                <div class="col-xl-4 col-sm-6 py-2">
                    <div class="card bg-danger text-white h-100">
                        <div class="card-body bg-danger">
                            <div class="rotate">
                                <i class="fa fa-user fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Atrasado</h6>
                            <h1 class="display-4">{{ $atraso }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 py-2">
                    <div class="card text-white bg-info h-100">
                        <div class="card-body bg-info">
                            <div class="rotate">
                                <i class="fa fa-list fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Em Andamento</h6>
                            <h1 class="display-4">{{ $andamento }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 py-2">
                    <div class="card text-white bg-success h-100">
                        <div class="card-body bg-success">
                            <div class="rotate">
                                <i class="fa fa-twitter fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Concluído</h6>
                            <h1 class="display-4">{{ $finalizado }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- <div class="card">
            <div class="card-header">Dashboard</div>

            <div class="card-body">


                You are logged in!
            </div>

        </div> -->
    </div>
</div>
@endsection
