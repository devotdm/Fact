@extends('struct')

@section('header')

@include($path.'includes.topbars.news')

@endsection

@section('content')

<form action="" method="post" id="form4">
    <h3 class="text-dark mt-2">Destinataire</h3>
    <div class="form-group">
        <label for="destinataire"></label>
        <select class="form-control w-50" id="destinataire">
            <option value="" selected disabled>Sélectionner un destinataire</option>
            <option></option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
              <span class="dest text-danger d-none">veuillez sélectionner un destinataire</span>
    </div>
    <h3 class="text-dark mt-2">Informations</h3>
    <div class="form-group">
        <label for="duree">Durée de validité</label>
        <input class="form-control w-25" type="number" name="duree" id="duree" placeholder="jours">
    </div>
    <div class="form-group">
        <label for="devise">Devise(requis)</label>
        <select class="form-control w-50" id="devise">
            <option>Dirham marocain (د م)</option>
        </select>
    </div>
    <div class="custom-control custom-checkbox mr-sm-2">
        <input type="checkbox" class="custom-control-input" id="tva_check">
        <label class="custom-control-label tva_label" for="tva_check">TVA non applicable</label>
    </div>

    <h3 class="text-dark mt-2">Articles</h3>

    @include($path.'includes.lignes')
    
    <h3 class="text-dark mt-2">Règlement</h3>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Conditions de règlement</label><br>
        <select class="form-control w-50 d-inline" id="exampleFormControlSelect1">
            <option>A réception</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Mode de reglement</label><br>
        <select class="form-control w-50 d-inline" id="exampleFormControlSelect1">
            <option>Chèque</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Interet de retard</label><br>
        <select class="form-control w-50 d-inline" id="exampleFormControlSelect1">
            <option>Pas d'intérets de retard</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <h3 class="text-dark mt-2">Textes affichés sur le document</h3><br>
    <div class="form-group">
        <textarea class="form-control w-75" id="exampleFormControlTextarea1" rows="3" placeholder="Texte d'introduction (visible sur le devis)"></textarea>
    </div>
    <div class="form-group">
        <textarea class="form-control w-75" id="exampleFormControlTextarea1" rows="3" placeholder="Texte de conclusion (visible sur le devis)"></textarea>
    </div>

    <div class="form-group">
        <label for="pied">Pied de page :</label>
        <textarea class="form-control w-75" id="pied" rows="3" placeholder="Pied de page(visible sur la facture)" disabled> DEVOSOFT S.A.R.L.TP:50990690-IF:207224501-ICE:001853352000050-CNSS:5297016</textarea>
    </div>

    <div class="form-group">
        <textarea class="form-control w-75" id="exampleFormControlTextarea1" rows="3" placeholder="Conditions générales de vente (visible sur le devis)"></textarea>
    </div>
    <h3>Mots clés</h3>
    <div class="form-group">
        <label for="exampleFormControlSelect1"></label>
        <select class="form-control w-50 d-inline" id="exampleFormControlSelect1">
            <option>Ajouter/Sélectionner des mots clés</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <button type="submit" name="submit" class="btn btn-success mb-5">Créer le devis</button>
</form>

@endsection


@section('scripts')

<script src="{{ asset('js/forms/scripts.js') }}"></script>

@endsection