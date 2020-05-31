@extends('parametres/struct')


@section('content')

{{ Form::model($user,['url' => 'parametres/update' , 'method' => 'put']) }}
    @csrf

    <div class="form-group row">
        <label for="nom" class="col-md-2 text-dark col-form-label">Nom</label>

        <div class="col-md-6">
        	{{ Form::input('text','nom',null, ['class'=>'form-control', 'required', 'id'=>'nom']) }}

 
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('nom') }}</strong>
                </span>
        </div>
    </div>

    <div class="form-group row">
        <label for="prenom" class="col-md-2 text-dark col-form-label">Prenom </label>

        <div class="col-md-6">
            {{ Form::input('text','prenom',null, ['class'=>'form-control', 'required', 'id'=>'prenom']) }}

    
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('prenom') }}</strong>
                </span>
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-2 text-dark col-form-label">E-Mail</label>

        <div class="col-md-6">
            {{ Form::input('email','email',null, ['class'=>'form-control', 'required', 'id'=>'email']) }}

   
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
        </div>
    </div>

     <div class="form-group row">
        <label for="societe" class="col-md-2 text-dark col-form-label">Société  </label>

        <div class="col-md-6">
            {{ Form::input('text','societe',null, ['class'=>'form-control', 'id'=>'societe']) }}

     
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('societe') }}</strong>
                </span>
        </div>
    </div>

    <div class="form-group row">
        <label for="code_ice" class="col-md-2 text-dark col-form-label">Code ICE</label>

        <div class="col-md-6">
            {{ Form::input('text','code_ice',null, ['class'=>'form-control', 'id'=>'code_ice']) }}

      
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('code_ice') }}</strong>
                </span>
        </div>
    </div>

    <div class="form-group row">
        <label for="code_cnss" class="col-md-2 text-dark col-form-label">Code CNSS</label>

        <div class="col-md-6">
            {{ Form::input('text','code_cnss',null, ['class'=>'form-control', 'id'=>'code_cnss']) }}

       
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('code_cnss') }}</strong>
                </span>
        </div>
    </div>

   <div class="form-group row">
        <label for="adresse" class="col-md-2 text-dark col-form-label">Adresse</label>

        <div class="col-md-6">
             
            {{ Form::textarea('adresse',null, ['rows' => '3' ,'class'=>'form-control', 'id'=>'adresse']) }}

     
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('adresse') }}</strong>
                </span>
        </div>
    </div>

       
   <div class="form-group row">
        <label for="codep" class="col-md-2 text-dark col-form-label">Code postal</label>

        <div class="col-md-6">
            {{ Form::input('text','codep',null, ['class'=>'form-control', 'id'=>'codep']) }}

   
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('codep') }}</strong>
                </span>
        </div>
    </div>


   <div class="form-group row">
        <label for="ville" class="col-md-2 text-dark col-form-label">ville</label>

        <div class="col-md-6">
            {{ Form::input('text','ville',null, ['class'=>'form-control', 'id'=>'ville']) }}

   
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('ville') }}</strong>
                </span>
        </div>
    </div>


   <div class="form-group row">
        <label for="pays" class="col-md-2 text-dark col-form-label">pays</label>

        <div class="col-md-6">
            {{ Form::input('text','pays',null, ['class'=>'form-control', 'id'=>'pays']) }}

  
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('pays') }}</strong>
                </span>
        </div>
    </div>

  <div class="form-group row">
        <label for="tele" class="col-md-2 text-dark col-form-label">Numero telephone</label>

        <div class="col-md-6">
           {{ Form::input('text','tele',null, ['class'=>'form-control', 'id'=>'tele']) }}

  
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('tele') }}</strong>
                </span>
        </div>
    </div>

  <div class="form-group row">
        <label for="site" class="col-md-2 text-dark col-form-label">Site internet</label>

        <div class="col-md-6">
            {{ Form::input('text','site',null, ['class'=>'form-control', 'id'=>'site']) }}

  
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('site') }}</strong>
                </span>
        </div>
    </div>
    
    <div class="form-group row mb-3">
        <div class="col-md-6">
            <button type="submit" class="btn btn-primary">
                Enregistrer
            </button>
        </div>
    </div>
</form>

@endsection


@section('scripts')

<script src="{{ asset('js/settings/validate.js') }}"></script>

@endsection