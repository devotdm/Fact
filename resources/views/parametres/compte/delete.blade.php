@extends('parametres/struct')


@section('content')

<form method="post" class="w-100 text-dark" id="form7">

    <div class="form-group">
        <label for="raison">Raison</label>
        <select name="raison" id="raison" class="form-control w-50">
            <option value="">Je rencontre des problèmes techniques</option>
            <option value="">J'ai un autre compte</option>
            <option value="">Autre</option>
        </select>
        <span class="raison text-danger d-none">veuillez sélectionner une raison</span>
    </div>
    <div class="form-group">
        <label for="remarques">Remarques</label>
        <textarea name="remarques" class="form-control w-75" id="remarques" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label for="pass">Mot de passe</label>
        <input type="password" name="pass" id="pass" class="form-control w-50">
        <span class="pass text-danger d-none">doit etre rempli</span>
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-danger mb-5">Supprimer mon compte</button>
    </div>

</form>

@endsection


@section('scripts')

<script src="{{ asset('js/settings/validate.js') }}"></script>

@endsection