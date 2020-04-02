@extends('struct')

@section('header')

@include($path.'includes.topbars.lists')

@endsection


@section('content')

<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link text-uppercase active" href="{{ url('factures/list') }}">tous</a>
        <a class="nav-item nav-link text-uppercase" href="{{ url('factures/list') }}">provisoires</a>
        <a class="nav-item nav-link text-uppercase" href="{{ url('factures/list') }}">finalisés</a>
        <a class="nav-item nav-link text-uppercase" href="{{ url('factures/list') }}">payées</a>
        <a class="nav-item nav-link text-uppercase" href="{{ url('factures/list') }}">à payer</a>
    </div>
</nav>
<div class="row">
    <div class="col">
        <div class="card shadow mt-4">
            <div class="card-header bg-white py-3 d-flex flex-row align-items-center justify-content-between">
                <span><h5 class="card-title mb-3 font-weight-bold text-dark"><a href="{{ url('factures/info') }}">Provisioire</a></h5>
                    <h6><a class="text-dark" href="{{ url('clients/info') }}">Client Test</a> - <a class="text-dark" href="{{ url('societes/info') }}">Societe Test</a></h6>
                </span>
                <div class="dropdown no-arrow">
                @include($path.'includes.dropdown')
                </div>
            </div>
            <div class="card-body">
                <p class="card-text"><i class="fas fa-sticky-note mr-3"></i>1000.00د .م</p>
                <p class="card-text"><i class="far fa-clock mr-2"></i>06 mars 2020</p>
                <hr>
                <span class="text-white bg-danger p-2">Motcle</span>
            </div>
        </div>
    </div>
</div>

@endsection