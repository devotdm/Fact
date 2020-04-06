@extends('struct')

@section('header')

@include($path.'includes.topbars.infos')

@endsection

@section('content')

<div class="row mt-3">
    <div class="col-lg-6">
        <h4 class="font-weight-bold">Informations : </h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <table class="table table-borderless mt-3">
            <tbody>
                @if(isset($data->code_ice))
                <tr class="border-bottom">
                    <td class="text-secondary">Numero de societe :</td>
                    <td class="text-dark font-weight-bold">{{ $data->code_ice }}</td>
                </tr>
                @endif
                @if(isset($data->tva))
                <tr class="border-bottom">
                    <td class="text-secondary">Numero de tva :</td>
                    <td class="text-dark font-weight-bold">{{ $data->tva }}</td>
                </tr>
                @endif
                @if(isset($data->adresse))
                <tr class="border-bottom">
                    <td class="text-secondary">Adresse :</td>
                    <td class="text-dark font-weight-bold">{{ $data->adresse }}</td>
                </tr>
                @endif
                @if(isset($data->pays))
                <tr class="border-bottom">
                    <td class="text-secondary">Pays :</td>
                    <td class="text-dark font-weight-bold">{{ $data->pays }}</td>
                </tr>
                @endif
                @if(isset($data->tele))
                <tr class="border-bottom">
                    <td class="text-secondary">Numero de telephone : </td>
                    <td class="text-dark font-weight-bold">{{ $data->tele }}</td>
                </tr>
                @endif
                @if(isset($data->site))
                <tr class="border-bottom">
                    <td class="text-secondary">Site internet :</td>
                    <td class="text-dark font-weight-bold">{{ $data->site }}</td>
                </tr>
                @endif
                @if(isset($data->mot_cle))
                <tr class="border-bottom">
                    <td class="text-secondary">Mot clés :</td>
                    <td class="text-dark font-weight-bold">{{ $data->mot_cle }}</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@if (count($_data) > 0)
<div class="row mb-4">
    <div class="col-12">
        <h4 class="font-weight-bold">Clients({{ count($_data) }})</h4>
    </div>
    @include($path.'includes.layouts.clients.list',["data"=> $_data])
</div>
@endif

@if (count($dataD) > 0)
<div class="row mb-4">
    <div class="col-12">
        <h4 class="font-weight-bold">Devis({{ count($dataD) }})</h4>
    </div>
    @include($path.'includes.layouts.devis',["data"=> $dataD])
</div>
@endif

@if (count($dataF) > 0)
<div class="row mb-4">
    <div class="col-12">
        <h4 class="font-weight-bold">Factures({{ count($dataF) }})</h4>
    </div>
    @include($path.'includes.layouts.factures',["data"=> $dataF])
</div>
@endif

@endsection