@extends('struct')

@section('header')

@include($path.'includes.topbars.news')

@endsection

@section('content')

    {{ Form::open(array('url' => 'devis/create' , 'method' => 'post' ,
     'id' => 'form4' )) }}
    
	    @include($path.'devis.layouts.form')
	    
	    <button type="submit" name="submit" class="btn btn-success mb-5">Créer le devis</button>

    {{ Form::close() }}

@endsection


@section('scripts')

<script src="{{ asset('js/forms/scripts.js') }}"></script>

@endsection