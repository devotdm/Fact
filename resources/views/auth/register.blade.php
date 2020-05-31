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
                <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                <div class="col-md-6">
                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                    @error('nom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prenom ') }}</label>

                <div class="col-md-6">
                    <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                    @error('prenom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

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
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

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
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer mot de passe') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

             <div class="form-group row">
                <label for="societe" class="col-md-4 col-form-label text-md-right">{{ __('Société  ') }}</label>

                <div class="col-md-6">
                    <input id="societe" type="text" class="form-control @error('societe') is-invalid @enderror" name="societe" value="{{ old('societe') }}" autocomplete="societe" autofocus>

                    @error('societe')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="code_ice" class="col-md-4 col-form-label text-md-right">{{ __('Code ICE') }}</label>

                <div class="col-md-6">
                    <input id="code_ice" type="text" class="form-control @error('code_ice') is-invalid @enderror" name="code_ice" value="{{ old('code_ice') }}" autocomplete="code_ice" autofocus>

                    @error('code_ice')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="code_cnss" class="col-md-4 col-form-label text-md-right">{{ __('Code CNSS') }}</label>

                <div class="col-md-6">
                    <input id="code_cnss" type="text" class="form-control @error('code_cnss') is-invalid @enderror" name="code_cnss" value="{{ old('code_cnss') }}" autocomplete="code_cnss" autofocus>

                    @error('code_cnss')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

           <div class="form-group row">
                <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                <div class="col-md-6">
                    <textarea id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" autocomplete="adresse" autofocus></textarea> 

                    @error('adresse')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

               
           <div class="form-group row">
                <label for="codep" class="col-md-4 col-form-label text-md-right">{{ __('Code postal') }}</label>

                <div class="col-md-6">
                    <input id="codep" type="text" class="form-control @error('codep') is-invalid @enderror" name="codep" value="{{ old('codep') }}" autocomplete="codep" autofocus>

                    @error('codep')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


           <div class="form-group row">
                <label for="ville" class="col-md-4 col-form-label text-md-right">{{ __('ville') }}</label>

                <div class="col-md-6">
                    <input id="ville" type="text" class="form-control @error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') }}" autocomplete="ville" autofocus>

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
                    <input id="pays" type="text" class="form-control @error('pays') is-invalid @enderror" name="pays" value="{{ old('pays') }}" autocomplete="pays" autofocus>

                    @error('pays')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

          <div class="form-group row">
                <label for="tele" class="col-md-4 col-form-label text-md-right">{{ __('Numero telephone') }}</label>

                <div class="col-md-6">
                    <input id="tele" type="text" class="form-control @error('tele') is-invalid @enderror" name="tele" value="{{ old('tele') }}" autocomplete="tele" autofocus>

                    @error('tele')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

          <div class="form-group row">
                <label for="site" class="col-md-4 col-form-label text-md-right">{{ __('Site internet') }}</label>

                <div class="col-md-6">
                    <input id="site" type="text" class="form-control @error('site internet') is-invalid @enderror" name="site" value="{{ old('site') }}" autocomplete="site" autofocus>

                    @error('site')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
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