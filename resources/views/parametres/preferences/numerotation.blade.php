@extends('parametres/struct')


@section('content')

<form method="post" class="w-100 text-dark" id="form1">
    <div class="form-group">
        <label for="code1"><h4>Format</h4></label>
    </div>
    <div class="form-row form-group w-50">
        <div class="col">
            <select name="code1" class="form-control codes" id="code1">
                <option value="F">doc</option>
                <option value="20">aa</option>
                <option value="1">cmp</option>
            </select>
        </div>
        <div class="col">
            <select name="code2" class="form-control codes" id="code2">
                <option value="F">doc</option>
                <option value="20" selected>aa</option>
                <option value="1">cmp</option>
            </select>
        </div>
        <div class="col">
            <select name="code3" class="form-control codes" id="code3">
                <option value="F">doc</option>
                <option value="20">aa</option>
                <option value="1" selected>cmp</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="res">Résultat</label>
        <input type="text" class="form-control w-50" name="res" id="res">
    </div>
    <div class="form-group">
        <a class="link text-decoration-none" data-toggle="collapse" href="#doc" role="button" aria-expanded="false" aria-controls="doc" id="showDiv">Afficher la documentation</a>
        <div class="collapse mt-2" id="doc">
            <table class="table table-bordered bg-white">
                <tr>
                    <td class="w-25">doc</td>
                    <td>une lettre représent le type de document (F pour les factures, D pour les devis).</td>
                </tr>
                <tr>
                    <td>aa</td>
                    <td>l'année avec deux chiffres donc 20.</td>
                </tr>
                <tr>
                    <td>cmp</td>
                    <td>Le compteur, il commence par 1 et incrémente par 1.</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="form-group">
        <label for="taille">Taille de numérotation</label>
        <input type="number" class="form-control w-25" name="taille" id="taille" value="5">
    </div>
    <div class="form-group">
        <label for="reset">Réinitialisation du compteur</label>
        <select class="form-control w-25" name="taille" id="reset" value="5">
            <option value="">Tous les mois</option>
            <option value="">Tous les ans</option>
            <option value="">Jamais</option>
        </select>
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-success mt-3 mb-5">Enregistrer</button>
    </div>
</form>

@endsection


@section('scripts')

<script src="{{ asset('js/settings/toggle.js') }}"></script>
<script src="{{ asset('js/settings/num.js') }}"></script>

@endsection