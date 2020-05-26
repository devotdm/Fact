@extends('struct')


@section('header')

@include($path.'includes.topbars.lists')

@endsection


@section('content')

<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link text-uppercase {{ ($url=='')?'active':'' }}" href="{{ url('factures/list') }}">tous</a>
        <a class="nav-item nav-link text-uppercase {{ ($url=='provisoire')?'active':'' }}" href="{{ url('factures/list/provisoire') }}">provisoires</a>
        <a class="nav-item nav-link text-uppercase {{ ($url=='finalisé')?'active':'' }}" href="{{ url('factures/list/finalisé') }}">finalisés</a>
        <a class="nav-item nav-link text-uppercase {{ ($url=='payée')?'active':'' }}" href="{{ url('factures/list/payée') }}">payées</a>
        <a class="nav-item nav-link text-uppercase {{ ($url=='à_payer')?'active':'' }}" href="{{ url('factures/list/à_payer') }}">à payer</a>
    </div>
</nav>
<div class="row">
    @include($path.'factures.layouts.list',["data"=> $data , "tbl"=> $obj])
</div>

@endsection