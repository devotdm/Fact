@extends('struct')

@section('header')

@include($path.'includes.topbars.lists')

@endsection

@section('content')

<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card shadow mt-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <span><h5 class="card-title mb-3 font-weight-bold text-dark">Client Test</h5>
                    <h6 class="card-subtitle text-muted">Particulier</h6></span>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-md fa-fw text-dark"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Modifier</a>
                        <a class="dropdown-item" href="#">Supprimer</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text"><i class="far fa-envelope mr-2"></i>client1@gmail.com</p>
                <p class="card-text"><i class="fas fa-phone mr-2"></i>0223812771</p>
                <hr>
                <span class="text-white bg-danger p-2">Motcle</span>
            </div>
        </div>
    </div>
</div>

@endsection