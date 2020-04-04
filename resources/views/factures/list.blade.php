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
    @foreach($data as $data)
    <div class="col">
        <div class="card shadow mt-4">
            <div class="card-header bg-white py-3 d-flex flex-row align-items-center justify-content-between">
                <span><h5 class="card-title mb-3 font-weight-bold text-dark">
                    @if($data->statut=='provisoire')
                    <a href="{{ url('factures/info') }}"> {{ ucfirst(trans($data->statut)) }}</a>
                    @else
                    <a href="{{ url('factures/info') }}"> {{ $data->id_num }}</a><span class="text-important">{{ ucfirst(trans($data->statut)) }}</span>
                    @endif
                    </h5>
                    <h6><a class="text-dark" href="{{ url('clients/info') }}">Client Test</a> - <a class="text-dark" href="{{ url('societes/info') }}">Societe Test</a></h6>
                </span>
                <div class="dropdown no-arrow">
                    @include($path.'includes.dropdown')
                </div>
            </div>
            <div class="card-body">
                <span class="card-text"><i class="fas fa-sticky-note mr-2"></i>{{ $data->total.' '.$data->devise }}</span>
                <span class="card-text ml-3"><i class="far fa-clock mr-2"></i>{{ date('d F Y', strtotime($data->created_at)) }}</span>
                <hr>
                <span class="text-white bg-danger p-2">Motcle</span>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection