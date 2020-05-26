@extends('struct')

@section('header')

@include($path.'includes.topbars.lists')

@endsection


@section('content')

<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link text-uppercase {{ ($url=='')?'active':'' }}" href="{{ url('devis/list') }}">tous</a>
        <a class="nav-item nav-link text-uppercase {{ ($url=='provisoire')?'active':'' }}" href="{{ url('devis/list/provisoire') }}">provisoires</a>
        <a class="nav-item nav-link text-uppercase {{ ($url=='finalisé')?'active':'' }}" href="{{ url('devis/list/finalisé') }}">finalisés</a>
        <a class="nav-item nav-link text-uppercase {{ ($url=='refusé')?'active':'' }}" href="{{ url('devis/list/refusé') }}">refusés</a>
        <a class="nav-item nav-link text-uppercase {{ ($url=='signé')?'active':'' }}" href="{{ url('devis/list/signé') }}">signés</a>
    </div>
</nav>
<div class="row">
    @include($path.'devis.layouts.list',["data"=> $data , "tbl"=> $obj])
</div>

@endsection