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
        @include($path.'includes.layouts.clients.info',['data'=> $data])
    </div>
</div>

@if ($countD > 0)
<div class="row mb-4">
    <div class="col-12">
        <h4 class="font-weight-bold">Devis({{ $countD }})</h4>
    </div>
    @include($path.'includes.layouts.devis',["data"=> $dataD])
</div>
@endif

@if ($countF > 0)
<div class="row mb-4">
    <div class="col-12">
        <h4 class="font-weight-bold">Factures({{ $countF }})</h4>
    </div>
    @include($path.'includes.layouts.factures',["data"=> $dataF])
</div>
@endif

@endsection