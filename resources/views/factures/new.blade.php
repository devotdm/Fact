@extends('struct')

@section('header')

@include($path.'includes.topbars.news')

@endsection


@section('content')


<form action="" method="post" id="form5">

    <div class="form-group">
        <h3 class="text-dark mt-2">Destinataire</h3>
        <div class="form-group">
            <label for="destinataire_"></label>
            <select class="form-control w-50" id="destinataire_">
                <option value="" selected readonly>Sélectionner un destinataire</option>
                <option></option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <span class="destf text-danger d-none">veuillez sélectionner un destinataire</span>
        </div>
    </div>
    <h3 class="text-dark mt-3">Informations</h3>
    <div class="form-group">
        <label for="devise">Devise(requis)</label>
        <select class="form-control w-50" id="devise">
            <option>Dirham marocain (د م  )</option>
        </select>
    </div>
    <div class="custom-control custom-checkbox mr-sm-2">
        <input type="checkbox" class="custom-control-input" id="tva_check">
        <label class="custom-control-label tva_label" for="tva_check">TVA non applicable</label>
    </div>

    <h3 class="text-dark mt-2">Articles</h3>

    @include($path.'includes.lignes')
    
    <h3 class="text-dark">Reglement</h3>
    <div class="form-group">
        <label for="condition">Conditions de reglement</label>
        <select class="form-control w-50" id="condition">
            <option>A reception</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="mode">Mode de reglement</label>
        <select class="form-control w-50" id="mode">
            <option>Cheque</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="interet">Interet de retard</label>
        <select class="form-control w-50" id="interet">
            <option>Pas d'interets de retard</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="rib">Compte bancaire(RIB)</label>
        <select class="form-control w-50" id="rib">
            <option></option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>

    <h3 class="text-dark mb-2">Textes affiches sur le document</h3>
    <div class="form-group">
        <textarea class="form-control w-75" name="text_intro" id="text_intro" rows="5" placeholder="Texte d'introduction(visible sur la facture)"></textarea>
    </div>


    <div class="form-group">
        <textarea class="form-control w-75" name="text-conclusion" id="text-conclusion" rows="5" placeholder="Texte de conclusion(visible sur la facture)"></textarea>
    </div>


    <div class="form-group">
        <label for="pied">Pied de page :</label>
        <textarea class="form-control w-75" id="pied" rows="3" placeholder="Pied de page(visible sur la facture)" readonly> DEVOSOFT S.A.R.L.TP:50990690-IF:207224501-ICE:001853352000050-CNSS:5297016</textarea>
    </div>




    <!--
<h3 class="">mot cles</h3>
<div class="form-group">
<label for="exampleFormControlSelect1"></label>
<select class="form-control" id="exampleFormControlSelect1">
<option>facture test</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</div>
-->

    <button type="submit" name="submit" class="btn btn-success mb-5">Créer la facture</button>


</form>

@endsection


@section('scripts')

<script src="{{ asset('js/forms/scripts.js') }}"></script>

@endsection