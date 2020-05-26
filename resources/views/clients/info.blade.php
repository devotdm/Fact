@extends('struct')

@section('header')

@include($path.'includes.topbars.infos')

@endsection

@section('content')

<div class="row mt-3">
    <div class="col-lg-6">
        <h4>Informations : </h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        @include($path.'clients.layouts.info',['data'=> $data])
    </div>
</div>

@if (count($dataD) > 0)
<div class="row mb-4 mt-3">
    <div class="col-12">
        <h4 class="font-weight-bold">Devis({{ count($dataD) }})</h4>
    </div>
    @include($path.'devis.layouts.list',["data"=> $dataD , 'tbl'=> 'devis'])
</div>
@endif

@if (count($dataF) > 0)
<div class="row mb-4 mt-3">
    <div class="col-12">
        <h4 class="font-weight-bold">Factures({{ count($dataF) }})</h4>
    </div>
    @include($path.'factures.layouts.list',["data"=> $dataF , 'tbl'=> 'facture'])
</div>
@endif

@endsection