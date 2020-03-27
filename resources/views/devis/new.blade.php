@extends('struct')

@section('header')

@include($path.'includes.topbars.news')

@endsection

@section('content')

<form action="" method="post">
    <h3 class="text-dark mt-2">Destinataire</h3>
    <div class="form-group">
        <label for="exampleFormControlSelect1"></label>
        <select class="form-control w-50 d-inline" id="exampleFormControlSelect1">
            <option value="choose" selected disabled>Nouveau client</option>
            <option></option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
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

    <div class="line">
        <span class="float-right mb-3" >
            <a href="" class="text-dark p-1 c_ligne"><i class="far fa-window-close"></i></a><br>
            <a href="" class="text-dark p-1 d_ligne"><i class="far fa-copy"></i></a>
        </span>
        <p class="mb-2"><span class="badge badge-primary rounded-circle nbr" style="font-size:20px;">1</span></p>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Type</label><br>
            <select class="form-control w-50 d-inline" id="exampleFormControlSelect1">
                <option>Service</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-row form-group">
            <div class="col">
                <label for="qtity">Quantite</label>
                <input type="number" class="form-control inp" value="0" id="qtity">
            </div>
            <div class="col">
                <label for="ht">Prix HT</label><br>
                <input type="number" step="0.01" class="form-control inp" value="0" id="ht">
            </div>
            <div class="col">
                <label for="tva">TVA</label>
                <input type="number" step="0.01" class="form-control inp ltva" id="tva" value="0" disabled>
            </div>
            <div class="col">
                <label for="reduction">Reduction</label>
                <input type="number" step="0.01" class="form-control inp" value="0" id="reduction" placeholder="%">
            </div>
            <div class="col">
                <label for="total_ht">Total HT</label>
                <input type="number" step="0.01" class="form-control" id="total_ht" readonly>
            </div>

            <div class="col">
                <label for="total_ttc">Total TTC</label>
                <input type="number" step="0.01" class="form-control" id="total_ttc" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="5"></textarea>
        </div>
    </div>
    <div class="form-group div_ajout">
        <a href="" class="font-weight-bold text-decoration-none" id="btn"><i class="fas fa-plus mr-2"></i>AJOUTER UNE LIGNE</a>
    </div>
    <div class="form-row form-group w-50 align-content-right">
        <div class=" col">
            <label for="remise">Remise générale</label>
            <input type="number" step="0.01" class="form-control" id="remise">
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