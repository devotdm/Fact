@extends('struct')

@section('header')

@include($path.'includes.topbars.news')

@endsection

@section('content')
<div class="col-lg-7">
    {{ Form::model($data,array('url' => 'societes/update/'.$data->id , 'method' => 'put' ,
        'class' => "w-100" , 'id' => 'e_form1' )) }}
         
         @include($path.'societes.layouts.form')

         <div class="form-group">
            <button type="submit" class="btn btn-success mb-5">Modifier le client</button>
          </div>

      {{ Form::close() }}
</div>

@endsection