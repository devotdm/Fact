@extends('struct')

@section('header')

@include($path.'includes.topbars.news')

@endsection

@section('content')
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item bg-white shadow mb-3 mr-4">
        <a class="nav-link p-3 pr-5 d-flex {{ (!isset($data->societe_id))?'active':'' }}" id="prt-tab" data-toggle="pill" href="#prt" role="tab" aria-controls="prt" aria-selected="false">
            <i class="fas fa-fw fa-user-tie fa-4x"></i>
            <span><h5>Particulier</h5>
                <h6>client avec société</h6></span>
        </a>
    </li>
    <li class="nav-item bg-white shadow mb-3 mr-4">
        <a class="nav-link p-3 pr-5 d-flex {{ (isset($data->societe_id))?'active':'' }}" id="pro-tab" data-toggle="pill" href="#pro" role="tab" aria-controls="pro" aria-selected="false">
            <i class="fas fa-fw fa-building fa-4x"></i>
            <span><h5>Professionnel</h5>
                <h6>client sans société</h6></span>
        </a>
    </li>
</ul>
<div class="tab-content row" id="pills-tabContent">
   
   <!-- Particulier -->
    <div class="tab-pane fade col-lg-7 col-md-12 {{ (!isset($data->societe_id))?'active show':'' }}" id="prt" role="tabpanel" aria-labelledby="prt-tab">
      {{ Form::model($data,array('url' => 'clients/update/'.$data->id , 'method' => 'put' ,
        'class' => "w-100" , 'id' => 'e_form1' )) }}
         
         @include($path.'clients.layouts.form1')

         <div class="form-group">
            <button type="submit" class="btn btn-success mb-5">Modifier le client</button>
          </div>

      {{ Form::close() }}
  </div>
    <div class="tab-pane fade col-lg-7 col-md-12 {{ (isset($data->societe_id))?'active show':'' }}" id="pro" role="tabpanel" aria-labelledby="pro-tab">
      
       <!-- Professionnel -->
        {{ Form::model($data,array('url' => 'clients/update_/'.$data->id , 'method' => 'put' ,
        'class' => "w-100" , 'id' => 'e_form2' )) }}

          @include($path.'clients.layouts.form2')

          <div class="form-group">
            <button type="submit" class="btn btn-success mb-5">Modifier le client</button>
          </div>

        {{ Form::close() }}
    </div>
</div>

@endsection