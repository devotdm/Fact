@extends('parametres/struct')


@section('content')

<form method="post" class="w-100 text-dark" id="form6">
    <div class="form-group">
        <label for="email">Adresse email</label>
        <input type="text" name="email" id="email" class="form-control w-50">
        <span class="email text-danger d-none">n'est pas une adresse email valide</span>
        <span class="email_ text-danger d-none">doit etre rempli</span>
    </div>
    <div class="form-group">
        <label for="pass">Mot de passe actuel</label>
        <input type="password" name="pass" id="pass" class="form-control w-50">
    </div>
    <div class="form-group">
        <label for="new_pass">Nouveau mot de passe</label>
        <input type="password" name="new_pass" id="new_pass" class="form-control w-50">
    </div>
    <div class="form-group">
        <label for="conf">Confirmer nouveau mot de passe</label>
        <input type="password" name="conf" id="conf" class="form-control w-50">
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-success mb-5">Mettre a jour</button>
    </div>

</form>

@endsection


@section('scripts')

<script src="{{ asset('js/settings/validate.js') }}"></script>

@endsection