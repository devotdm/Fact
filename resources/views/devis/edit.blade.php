@extends('struct')

@section('header')

@include($path.'includes.topbars.news')

@endsection

@section('content')

    {{ Form::model($data,array('url' => 'devis/update' , 'method' => 'put')) }}
    
    @include($path.'devis.layouts.form')
    
    <button type="submit" name="submit" class="btn btn-success mb-5">Modifier le devis</button>
      {{ Form::close() }}

@endsection


@section('scripts')

<script src="{{ asset('js/forms/scripts.js') }}"></script>

@endsection