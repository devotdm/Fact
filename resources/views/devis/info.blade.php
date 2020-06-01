@extends('struct')

@section('header')

@include($path.'includes.topbars.infos')

@endsection


@section('content')

<div class="row">
    <div class="col-lg-6 mb-3">
    	@include($path.'devis.layouts.info')
    </div>
    
    <div class="col-lg-6 mb-3">
        
    </div>

    <div class="col-lg-6 mb-3">
      	<h3 class="text-dark">Destinataire</h3>
        @include($path.'clients.layouts.info',['data'=> $dataC ,'_data'=> $dataS ])
    </div>


    <div class="col-lg-6 mb-3">
      	<h3 class="text-dark">Conditions</h3>
  		<table class="table table-borderless mt-3">
            <tbody>
                <tr class="border-bottom">
                    <td class="text-secondary w-50">Conditions de règlement :</td>
                    <td class="text-dark font-weight-bold">{{ $data->cond_reg }}</td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Mode de règlement :</td>
                    <td class="text-dark font-weight-bold">{{ $data->mode_reg }}</td>
                </tr>
                @if(isset($data->intr_retard))
                <tr class="border-bottom">
                    <td class="text-secondary">Intérêt de retard :</td>
                    <td class="text-dark font-weight-bold">{{ $data->intr_retard }}</td>
                </tr>
                @endif
            </tbody>
        </table>
	</div>
	
	<div class="col">
	<h3>Détails</h3>
	</div>
	<table class="table table-borderless text-dark">
	    <tr class="border-bottom">
	        <td class="text-secondary">Type</td>
	        <td class="text-secondary">Description</td>
	        <td class="text-secondary text-right">Prix unitaire HT</td>
	        <td class="text-secondary text-right">Quantité </td>
	        <td class="text-secondary text-right">TVA</td>
	        <td class="text-secondary text-right">Reduction</td>
	        <td class="text-secondary text-right">Total HT</td>
	    </tr>
	    @foreach ($data->lignes as $ligne)
	    <tr class="border-bottom">
	        <td class="font-weight-bold">{{ $ligne->type }}</td>
	        <td class="font-weight-bold">{{ $ligne->description }}</td>
	        <td class="font-weight-bold text-right">{{ $ligne->prix }}</td>
	        <td class="font-weight-bold text-right">{{ $ligne->quantity }}</td>
	        <td class="font-weight-bold text-right">{{ $ligne->tva }}</td>
	        <td class="font-weight-bold text-right">{{ $ligne->reduction }}</td>
	        <td class="font-weight-bold text-right">{{ $ligne->total }}</td>
	    </tr>
	    @endforeach

	    <tr>
	        <td colspan="5" class="font-weight-bold text-right pb-0"></td>
	        <td class="font-weight-bold text-right">Total HT</td>
	        <td class="font-weight-bold text-right">{{ $data->total_ht }}</td>
	    </tr>
	    <tr>
	        <td colspan="5" class="font-weight-bold text-right pb-0"></td>
	        <td class="font-weight-bold text-right">Total TVA</td>
	        <td class="font-weight-bold text-right">{{ $data->total_tva }}</td>
	    </tr>
	    <tr>
	        <td colspan="5" class="font-weight-bold text-right pb-0"></td>
	        <td class="font-weight-bold text-right">Total TTC</td>
	        <td class="font-weight-bold text-right">{{ $data->total_ttc }}</td>
	    </tr>
	</table>
</div>

<p class="pb-5">DEVOSOFT S.A.R.L, TP : 50990690 - IF : 207224501 - ICE : 001853352000050 - CNSS : 5297016</p>

@endsection