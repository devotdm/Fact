{{ Form::input('hidden','user_id',Auth::user()->id, ['id'=>'user_id']) }}
<div class="form-group mt-3">
    <h3 class="font-weight-bold">Informations</h3>
</div>
<div class="form-group">
    <label for="nom">Nom de la société : </label>
    {{ Form::input('text','nom',null,['class' => 'form-control' , 'id' => 'nom']) }}
      <span class="nom text-danger"> {{ $errors->first('nom') }} </span>
</div>
<div class="form-group">
    <label for="tva">Numero du TVA</label>
    {{ Form::input('number','tva',null,['class' => 'form-control' , 'id' => 'tva']) }}
</div>
<div class="form-group">
    <label for="code_ice">Code ICE</label>
    {{ Form::input('text','code_ice',null,['class' => 'form-control' , 'id' => 'code_ice']) }}
</div>
<div class="form-group mt-3">
    <h4>Cordonnées de la société : </h4>
</div>
<div class="form-group">
    <label for="adresse">Adresse : </label>
    {{ Form::textarea('adresse',null,['class' => 'form-control' , 'id' => 'adresse' , 'cols' => '30' , 'rows' => '5']) }}
</div>
<div class="form-group">
    <label for="codep">Code postal</label>
    {{ Form::input('text','codep',null,['class' => 'form-control' , 'id' => 'codep']) }}
</div>
<div class="form-group">
    <label for="ville">Ville</label>
    {{ Form::input('text','ville',null,['class' => 'form-control' , 'id' => 'ville']) }}
</div>
<div class="form-group">
    <label for="pays">Pays</label>
    {{ Form::select('pays',$countries,null, ['class'=>'form-control' , 'id' => 'pays']) }}
</div>
<div class="form-group">
    <label for="site">Site internet : </label>
    {{ Form::input('text','site',null,['class' => 'form-control' , 'id' => 'site']) }}
</div>
<div class="form-group">
    <label for="tele">Numero du téléphone</label>
    {{ Form::input('text','tele',null,['class' => 'form-control' , 'id' => 'tele']) }}
</div>