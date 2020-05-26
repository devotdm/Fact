@extends('struct')

@section('header')

@include($path.'includes.topbars.news')

@endsection


@section('content')


    {{ Form::open(array('url' => 'factures/create' , 'method' => 'post' ,
         'id' => 'form5' )) }}

        @include($path.'factures.layouts.form')

        <button type="submit" name="submit" class="btn btn-success mb-5">Créer la facture</button>

    {{ Form::close() }}

@endsection


@section('scripts')

<script src="{{ asset('js/forms/scripts.js') }}"></script>

@endsection