@extends('parametres/struct')


@section('content')

<div class="col-md-8">

    <div class="card">



        <div class="card-body">

            <form method="POST" action="{{  url('parametres/compte/update') }}">

                @csrf 



                 @foreach ($errors->all() as $error)

                    <p class="text-danger">{{ $error }}</p>

                 @endforeach 



                <div class="form-group row">

                    <label for="password" class="col-md-5 col-form-label">Mot de passe actuel</label>



                    <div class="col-md-6">

                        
                        {{ Form::input('password','current_password',null, ['class'=>'form-control', 'id'=>'password', 'autocomplete'=>'current-password']) }}

                    </div>

                </div>



                <div class="form-group row">

                    <label for="password" class="col-md-5 col-form-label">Nouveau mot de passe</label>



                    <div class="col-md-6">

                        {{ Form::input('password','new_password',null, ['class'=>'form-control', 'id'=>'new_password', 'autocomplete'=>'current-password']) }}

                    </div>

                </div>



                <div class="form-group row">

                    <label for="password" class="col-md-5 col-form-label">Confirmer nouveau mot de passe</label>



                    <div class="col-md-6">

                        {{ Form::input('password','new_confirm_password',null, ['class'=>'form-control', 'id'=>'new_confirm_password', 'autocomplete'=>'current-password']) }}

                    </div>

                </div>



                <div class="form-group row mb-0">

                    <div class="col-md-8">

                        <button type="submit" class="btn btn-primary">

                            Mettre a jour

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection


@section('scripts')

<script src="{{ asset('js/settings/validate.js') }}"></script>

@endsection