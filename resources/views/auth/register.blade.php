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
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                                <div class="form-group row">
                            <label for="Prénom " class="col-md-4 col-form-label text-md-right">{{ __('Prénom ') }}</label>

                            <div class="col-md-6">
                                <input id="Prénom " type="text" class="form-control @error('Prénom ') is-invalid @enderror" name="Prénom " value="{{ old('Prénom ') }}" required autocomplete="Prénom " autofocus>

                                @error('Prénom ')
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
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
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
                            <label for="Société " class="col-md-4 col-form-label text-md-right">{{ __('Société  ') }}</label>

                            <div class="col-md-6">
                                <input id="Société " type="text" class="form-control @error('Société ') is-invalid @enderror" name="Société " value="{{ old('Société ') }}" required autocomplete="Société " autofocus>

                                @error('Société  ')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                         <div class="form-group row">
                            <label for="IF" class="col-md-4 col-form-label text-md-right">{{ __('IF') }}</label>

                            <div class="col-md-6">
                                <input id="IF" type="text" class="form-control @error('IF') is-invalid @enderror" name="IF" value="{{ old('IF') }}" required autocomplete="IF" autofocus>

                                @error('IF')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                               <div class="form-group row">
                            <label for="ICE" class="col-md-4 col-form-label text-md-right">{{ __('ICE') }}</label>

                            <div class="col-md-6">
                                <input id="ICE" type="text" class="form-control @error('ICE') is-invalid @enderror" name="ICE" value="{{ old('ICE') }}" required autocomplete="ICE" autofocus>

                                @error('ICE')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                               <div class="form-group row">
                            <label for="RC" class="col-md-4 col-form-label text-md-right">{{ __('RC') }}</label>

                            <div class="col-md-6">
                                <input id="RC" type="text" class="form-control @error('RC') is-invalid @enderror" name="RC" value="{{ old('RC') }}" required autocomplete="RC" autofocus>

                                @error('RC')
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
                            <label for="site internet" class="col-md-4 col-form-label text-md-right">{{ __('site internet') }}</label>

                            <div class="col-md-6">
                                <input id="site internet" type="text" class="form-control @error('site internet') is-invalid @enderror" name="site internet" value="{{ old('site internet') }}" required autocomplete="site internet" autofocus>

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

                <label for="prenom" class="a">Prénom (requis):</label> <input class="form-control"  type="text" name="prenom"><span id="prnm"></span><br>
            
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
