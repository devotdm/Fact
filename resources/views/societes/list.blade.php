@extends('struct')

@section('header')

@include($path.'includes.topbars.lists')

@endsection

@section('content')

<div class="row">
    @foreach($data as $index => $data)
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card shadow mt-4" style="height: 13rem;">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <span><h5 class="card-title mb-3 font-weight-bold text-dark">
                <a href="{{ url('societes/info/'.$data->id) }}"> {{  $data->nom }} </a></h5>
                <h6 class="card-subtitle text-muted">{{ $data->clients_count }} Clients</h6></span>
                <div class="dropdown no-arrow">
                    @include($path.'includes.dropdown',['index' => $index, 'road' => 'societes' , "tbl"=> $obj])
                </div>
            </div>
            <div class="card-body">
                @if(isset($data->adresse))
                <p class="card-text"><i class="fas fa-location-arrow mr-2"></i> {{  $data->adresse }} </p>
                @endif
                @if(isset($data->tele))
                <p class="card-text"><i class="fas fa-phone-alt mr-2"></i> {{ $data->tele }} </p>
                @endif
<!--
                <hr>
                <span class="text-white bg-danger p-2">Motcle</span>
-->
            </div>
        </div>
    </div>
    @endforeach
</div>


@endsection