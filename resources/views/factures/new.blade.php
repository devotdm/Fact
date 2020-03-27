@extends('struct')

@section('header')

@include($path.'includes.topbars.news')

@endsection


@section('content')


<form action="" method="post">

    <div class="form-group">
        <label for="destinataire"><h3 class="text-dark mt-3">Destinataire</h3></label>
        <select class="form-control w-75" id="destinataire">
            <option></option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <h3 class="text-dark mt-3">Informations</h3>
    <div class="form-group">
        <label for="devise">Devise(requis)</label>
        <select class="form-control w-50" id="devise">
            <option>Dirham marocain (د م  )</option>
        </select>
    </div>
    <div class="custom-control custom-checkbox mr-sm-2">
        <input type="checkbox" class="custom-control-input" id="tva_check" onchange="disableInput()">
        <label class="custom-control-label tva_label" for="tva_check">TVA non applicable</label>
    </div>

    <h3 class="text-dark mt-3">Articles</h3>
    <div class="line">
        <span class="float-right mb-3">
            <a href="" class="text-dark p-1"><i class="far fa-window-close"></i></a>
            <a href="" class="text-dark p-1"><i class="far fa-copy"></i></a>
        </span>

        <p class="mb-2"><span class="badge badge-primary rounded-circle nbr" style="font-size:20px;">1</span></p>
        <div class="form-group">
            <label for="type">Type</label>
            <select class="form-control w-50" id="type">
                <option>Service</option>
                <option>Produit</option>
            </select>
        </div>
        <div class="form-row form-group">
            <div class="col">
                <label for="qtity">Quantite</label>
                <input type="number" class="form-control" id="qtity">
            </div>
            <div class="col">
                <label for="ht">Prix HT</label><br>
                <input type="number" class="form-control" id="ht">
            </div>

            <div class="col">
                <label for="tva">TVA</label>
                <input type="number" class="form-control ltva" id="tva" disabled>
            </div>

            <div class="col">
                <label for="reduction">Reduction</label>
                <input type="number" class="form-control" id="reduction">
            </div>
            <div class="col">
                <label for="unit">.</label>
                <select id="unit" class="form-control">
                    <option selected>%</option>
                    <option>devise</option>
                </select>
            </div>

            <div class="col">
                <label for="total_ht">Total HT</label>
                <input type="number" class="form-control" id="total_ht" disabled>
            </div>

            <div class="col">
                <label for="total_ttc">Total TTC</label>
                <input type="number" class="form-control" id="total_ttc" disabled>
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="5"></textarea>
        </div>
    </div>
    <div class="form-group div_ajout">
        <a href="#" class="font-weight-bold text-decoration-none" id="btn"><i class="fas fa-plus mr-2"></i>AJOUTER UNE LIGNE</a>
    </div>

    <div class="form-group">
        <h3>Débours</h3>
        <a href="#" class="font-weight-bold text-decoration-none"><i class="fas fa-plus mr-2"></i>AJOUTER UN DEBOURS</a>
    </div>
    <div class="form-row form-group w-50 align-content-right">
        <div class=" col">
            <label for="remise">Remise générale</label>
            <input type="number" class="form-control" id="remise">
        </div>
        <div class=" col">
            <label for="unitr">.</label>
            <select id="unitr" class="form-control w-50" id="unitr">
                <option selected>%</option>
                <option>devise</option>
            </select>
        </div>

    </div>

    <div class="jumbotron p-3 text-dark font-weight-bold">
        <table class="table table-borderless text-dark ">
            <tr>
                <td class="w-75"></td>
                <td>Total HT</td>
                <td><span id="TotalHT">2100</span></td>
            </tr>
            <tr>
                <td></td>
                <td>Remise générale </td>
                <td><span id="remise">312312</span></td>
            </tr>
            <tr>
                <td></td>
                <td>Total HT final </td>
                <td><span id="HTfinal">32132</span></td>
            </tr>
            <tr>
                <td></td>
                <td>TVA </td>
                <td><span id="tva_tot">231</span></td>
            </tr>
            <tr>
                <td></td>
                <td>Total </td>
                <td><span id="total">32131</span></td>
            </tr>
        </table>

    </div>
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
        <textarea class="form-control w-75" id="pied" rows="3" placeholder="Pied de page(visible sur la facture)" disabled> DEVOSOFT S.A.R.L.TP:50990690-IF:207224501-ICE:001853352000050-CNSS:5297016</textarea>
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

<script src="{{ asset('js/scripts.js') }}"></script>

@endsection