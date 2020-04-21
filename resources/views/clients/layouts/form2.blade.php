<div class="form-group mt-3">
    <h3 class="font-weight-bold">Informations</h3>
</div>
<div class="form-group">
  <label for="email">Email : </label>
  {{ Form::input('text','email',null, ['class'=>'form-control', 'id'=>'email']) }}
  <span class="email text-danger"> {{ $errors->first('email') }}  </span>
</div>
<div class="form-group">
  <label for="prenom">Prénom(requis) :</label>
  {{ Form::input('text','prenom',null, ['class'=>'form-control', 'id'=>'prenom']) }}
  <span class="prenom text-danger"> {{ $errors->first('prenom') }} </span>
</div>
<div class="form-group">
  <label for="nom">Nom de famille(requis) :</label>
  {{ Form::input('text','nom',null, ['class'=>'form-control', 'id'=>'nom']) }}
  <span class="nom text-danger"> {{ $errors->first('nom') }} </span>
</div>

<div class="form-group">
    <label for="fonction">Fonction :</label>
  {{ Form::input('text','fonction',null, ['class'=>'form-control', 'id'=>'fonction_']) }}
</div>
<div class="form-group mt-3">
    <h4>Cordonnées du client : </h4>
</div>
<div class="form-group">
    <label for="tele">Numero du téléphone</label>
  {{ Form::input('text','tele',null, ['class'=>'form-control', 'id'=>'tele_']) }}
</div>

<div class="form-group">
    <label for="societe_id"><h4>Société</h4></label>
    {{ Form::select('societe_id',$societes,(isset($societe))?$societe->id:null, ['class'=>'form-control' , 'id' => 'societe']) }}
  <span class="soct text-danger"> {{ $errors->first('societe_id') }}</span>
</div>

<div class="form-group">
    <label for="mot_cle"><h4>Mot clés : </h4></label>
  {{ Form::input('text','mot_cle',null, ['class'=>'form-control', 'id'=>'motcle_']) }}
</div>


