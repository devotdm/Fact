@extends('parametres/struct')


@section('content')

<form method="post" action="{{ url('parametres/compte/delete') }}" class="w-100 text-dark" id="form7" >
    
@csrf 
    
    @foreach ($errors->all() as $error)

        <p class="text-danger">{{ $error }}</p>

    @endforeach 

    <div class="form-group">
        <label for="raison">Raison</label>
        <select name="raison" id="raison" class="form-control w-50">
            <option value="">Je rencontre des problèmes techniques</option>
            <option value="">J'ai un autre compte</option>
            <option value="">Autre</option>
        </select>
    </div>
    <div class="form-group">
        <label for="remarques">Remarques</label>
        <textarea name="remarques" class="form-control w-75" id="remarques" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label for="pass">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control w-50">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-danger mb-5">Supprimer mon compte</button>
    </div>

</form>

@endsection


@section('scripts')

{{-- <script src="{{ asset('js/settings/validate.js') }}"></script> --}}

@endsection