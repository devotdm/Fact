@extends('parametres/struct')


@section('content')

<form method="post" class="w-100 text-dark" id="form1">

    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" class="form-control w-50">
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-success mb-5">Enregistrer</button>
    </div>

</form>

@endsection