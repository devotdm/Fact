@extends('parametres/struct')


@section('content')

<form method="post" class="w-100 text-dark" id="form1">
    <div class="custom-control custom-checkbox mr-sm-2 mb-3">
        <input type="checkbox" class="custom-control-input" id="nom" checked>
        <label class="custom-control-label" for="nom">Afficher mon nom dans les PDF</label>
    </div>
    <div class="form-group">
        <label for="intro">Texte d'introduction par défaut</label>
        <textarea class="form-control w-75" id="intro" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="conclusion">Texte de conclusion par défaut</label>
        <textarea class="form-control w-75" id="conclusion" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="pied">Pied de page par défaut</label>
        <textarea class="form-control w-75" id="pied" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="cgv">Conditions générales de vente par défaut</label>
        <textarea class="form-control w-75" id="cgv" rows="3"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-success mb-5">Enregistrer</button>
    </div>
</form>

@endsection