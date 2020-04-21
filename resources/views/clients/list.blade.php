@extends('struct')

@section('header')

@include($path.'includes.topbars.lists')

@endsection

@section('content')

<div class="row">
    @include($path.'clients.layouts.list',["data"=> $data])
</div>

@endsection