@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
    <div class="card-header">{{ __('Register') }}</div>

    <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group row">
                <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('nom') }}</label>

                <div class="col-md-6">
                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('name') }}" required autocomplete="nom" autofocus>

                    @error('nom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="prenom " class="col-md-4 col-form-label text-md-right">{{ __('prenom ') }}</label>

                <div class="col-md-6">
                    <input id="prenom " type="text" class="form-control @error('prenom ') is-invalid @enderror" name="prenom " value="{{ old('prenom ') }}" required autocomplete="prenom " autofocus>

                    @error('prenom ')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="pass" class="col-md-4 col-form-label text-md-right">{{ __('pass') }}</label>

                <div class="col-md-6">
                    <input id="pass" type="password" class="form-control @error('pass') is-invalid @enderror" name="pass" required autocomplete="new-password">

                    @error('pass')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

             <div class="form-group row">
                <label for="societe " class="col-md-4 col-form-label text-md-right">{{ __('Société  ') }}</label>

                <div class="col-md-6">
                    <input id="societe" type="text" class="form-control @error('societe ') is-invalid @enderror" name="societe " value="{{ old('societe ') }}" required autocomplete="societe " autofocus>

                    @error('societe ')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="code_ice" class="col-md-4 col-form-label text-md-right">{{ __('code ICE') }}</label>

                <div class="col-md-6">
                    <input id="code_ice" type="text" class="form-control @error('code_ice') is-invalid @enderror" name="code_ice" value="{{ old('code_ice') }}" required autocomplete="code_ice" autofocus>

                    @error('code_ice')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

           <div class="form-group row">
                <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('adresse') }}</label>

                <div class="col-md-6">
                    <textarea id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse" autofocus></textarea> 

                    @error('adresse')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

               
           <div class="form-group row">
                <label for="code_postal" class="col-md-4 col-form-label text-md-right">{{ __('code postal') }}</label>

                <div class="col-md-6">
                    <input id="code_postal" type="text" class="form-control @error('code_postal') is-invalid @enderror" name="code_postal" value="{{ old('code_postal') }}" required autocomplete="code_postal" autofocus>

                    @error('code_postal')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


           <div class="form-group row">
                <label for="ville" class="col-md-4 col-form-label text-md-right">{{ __('ville') }}</label>

                <div class="col-md-6">
                    <input id="ville" type="text" class="form-control @error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') }}" required autocomplete="ville" autofocus>

                    @error('ville')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


           <div class="form-group row">
                <label for="pays" class="col-md-4 col-form-label text-md-right">{{ __('pays') }}</label>

                <div class="col-md-6">
                    <input id="pays" type="text" class="form-control @error('pays') is-invalid @enderror" name="pays" value="{{ old('pays') }}" required autocomplete="pays" autofocus>

                    @error('pays')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

          <div class="form-group row">
                <label for="numero telephone" class="col-md-4 col-form-label text-md-right">{{ __('numero telephone') }}</label>

                <div class="col-md-6">
                    <input id="numero telephone" type="text" class="form-control @error('numero telephone') is-invalid @enderror" name="numero telephone" value="{{ old('numero telephone') }}" required autocomplete="numero telephone" autofocus>

                    @error('numero telephone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

          <div class="form-group row">
                <label for="site" class="col-md-4 col-form-label text-md-right">{{ __('site internet') }}</label>

                <div class="col-md-6">
                    <input id="site" type="text" class="form-control @error('site internet') is-invalid @enderror" name="site" value="{{ old('site internet') }}" required autocomplete="site" autofocus>

                    @error('site internet')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>



   {{--  <label for="email" class="a">email :</label><input type="email"class="form-control"  name="email"><span id="mail"></span><br>


   <label for="passowrd" class="a">Mot de passe :</label> <input type="password" class="form-control"  name="passowrd"><span id="pass"></span><br>

  <label for="nom" class="a">Nom de famille (requis) :</label>   <input class="form-control"  type="text" name="nom"><span id="nomm"></span><br>

    <label for="prenom" class="a">prenom (requis):</label> <input class="form-control"  type="text" name="prenom"><span id="prnm"></span><br>

  <label for="socierte" class="a">Société :</label> <input class="form-control"  type="text" name="socierte"><span id="socc"></span><br>
   <label for="if" class="a">IF :</label> <input class="form-control"  type="text" name="IF"><span id="ife"></span><br>
   
   <label for="ICE" class="a">ICE :</label> <input class="form-control"  type="text" name="ICE"><span id="ICEe"></span><br>
   <label for="TP" class="a">TP :</label> <input class="form-control"  type="text" name="TP"><span id="TPe"></span><br>

   <label for="RC" class="a">RC :</label> <input class="form-control"  type="text" name="RC"><span id="RCe"></span><br>
   <label for="CNSS" class="a">CNSS :</label> <input class="form-control"  type="text" name="CNSS"><span id="CNSSE"></span><br>

   <label for="adresse" class="a">adresse :</label> <textarea class="form-control"  type="text" name="adresse"></textarea><span id="adress"> </span><br>

   <label for="code_postal" class="a">code_postal :</label> <input class="form-control" type="text" name="code_postal"><span id="code_postalE"></span><br>

   <label for="ville" class="a">ville :</label> <input class="form-control"  type="text" name="ville"><span id="vill"></span><br>

   <label for="pays" class="a">pays :</label> <input class="form-control" class="form-control"  type="text" name="pays"><span id="paysE"></span><br>

   <label for="numero telephone" class="a">numero telephone :</label> <input class="form-control" type="text" name="telephone"><span id="telephon"></span><br>

   <label for="siteinternet " class="a">site internet :</label> <input class="form-control" type="text" name="siteinternet"><span id="siteinternete"></span><br>
--}}          



        



            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
@endsection
