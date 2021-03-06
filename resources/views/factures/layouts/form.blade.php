{{ Form::input('hidden','user_id',Auth::user()->id, ['id'=>'user_id']) }}
<div class="form-group">
    <h3 class="text-dark mt-2">Destinataire</h3>
    <div class="form-group">
        <label for="client_id"></label>
        {{ Form::select('client_id',$clients,(isset($client))?$client->id:null, ['class'=>'form-control w-50' , 'id' => 'client_id']) }}
        <span class="dest text-danger">{{ $errors->first('client_id') }}</span>
    </div>
</div>
<h3 class="text-dark mt-3">Informations</h3>
<div class="form-group">
    <label for="devise">Devise(requis)</label>
    <select class="form-control w-50" id="devise">
        <option value="Dirham marocain">Dirham marocain</option>
    </select>
</div>
<div class="custom-control custom-checkbox mr-sm-2">
    <input type="checkbox" class="custom-control-input" id="tva_check">
    <label class="custom-control-label tva_label" for="tva_check">TVA non applicable</label>
</div>

<h3 class="text-dark mt-2">Articles</h3>

@include($path.'includes.lignes',['articles' => $articles ])

<h3 class="text-dark">Reglement</h3>
<div class="form-group">
    <label for="cond_reg">Conditions de règlement</label><br>
    <select name="cond_reg" class="form-control w-50 d-inline" id="cond_reg">
        <option value="A réception">A réception</option>
        <option value="Fin du mois">Fin du mois</option>
    </select>
</div>
<div class="form-group">
    <label for="mode_reg">Mode de reglement</label><br>
    <select name="mode_reg" class="form-control w-50 d-inline" id="mode_reg">
        <option value="Chèque">Chèque</option>
        <option value="Carte bancaire">Carte bancaire</option>
        <option value="Especes">Especes</option>
    </select>
</div>
<div class="form-group">
    <label for="intr_retard">Interet de retard</label><br>
    <select name="intr_retard" class="form-control w-50 d-inline" id="intr_retard">
        <option value="">Pas d'intérets de retard</option>
        <option value="À préciser">À préciser</option>
    </select>
</div>
