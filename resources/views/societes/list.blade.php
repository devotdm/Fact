@extends('struct')

@section('header')

@include($path.'includes.topbars.lists')

@endsection

@section('content')

<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card shadow mt-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <span><h5 class="card-title mb-3 font-weight-bold text-dark"><a href="{{ url('societes/info') }}">Societe Test</a></h5>
                <h6 class="card-subtitle text-muted">2 Clients</h6></span>
                <div class="dropdown no-arrow">
                    @include($path.'includes.dropdown')
                </div>
            </div>
            <div class="card-body">
                <p class="card-text"><i class="fas fa-location-arrow mr-2"></i>Sociéte 1,Rue sociéte 1,Safi,Maroc</p>
                <p class="card-text"><i class="fas fa-phone-alt mr-2"></i>0223812771</p>
                <hr>
                <span class="text-white bg-danger p-2">Motcle</span>
            </div>
        </div>
    </div>
</div>


@endsection