@extends('parametres/struct')


@section('content')

<ul class="list-group">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
    <li class="list-group-item">Porta ac consectetur ac</li>
    <li class="list-group-item">Vestibulum at eros</li>
</ul>
<a href="{{ url('parametres/types_articles/new') }}" class="btn btn-success mt-3">Ajouter un type d'article</a>

@endsection