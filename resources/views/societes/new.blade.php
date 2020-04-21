@extends('struct')

@section('header')

@include($path.'includes.topbars.news')

@endsection

@section('content')
<div class="col-lg-7">
    {{ Form::open(array('url' => 'societes/create' , 'method' => 'post' ,
    'class' => "w-100" , 'id' => 'form3' )) }}
        
        @include($path.'societes.layouts.form')

        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-success mb-5" href="#page_top">Créer la société</button>
        </div>
      {{ Form::close() }}
</div>

@endsection