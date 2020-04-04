@extends('struct')

@section('header')

@include($path.'includes.topbars.infos')

@endsection

@section('content')

<div class="row ml-2 mt-3">
    <div class="col-lg-6">
        <h4>Informations : </h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <table class="table table-borderless mt-3">
            <tbody>
                @if(isset($data->fonction))
                <tr class="border-bottom">
                    <td class="text-secondary w-50">Fonction :</td>
                    <td class="text-dark font-weight-bold">{{ $data->fonction }}</td>
                </tr>
                @endif
                @if(isset($data->email))
                <tr class="border-bottom">
                    <td class="text-secondary">Email : </td>
                    <td class="text-dark font-weight-bold">{{ $data->email }}</td>
                </tr>
                @endif
                @if(isset($data->tele))
                <tr class="border-bottom">
                    <td class="text-secondary">Numero de telephone : </td>
                    <td class="text-dark font-weight-bold">{{ $data->tele }}</td>
                </tr>
                @endif
                
                @if(isset($data->societe_id))
                @if(isset($_data->nom))
                <tr class="border-bottom">
                    <td class="text-secondary">Societe :</td>
                    <td class="text-dark font-weight-bold">{{ $_data->nom }}</td>
                </tr>
                @endif
                @if(isset($_data->adresse))
                <tr class="border-bottom">
                    <td class="text-secondary">Adresse :</td>
                    <td class="text-dark font-weight-bold">{{ $_data->adresse }}</td>
                </tr>
                @endif
                @if(isset($data->pays))
                <tr class="border-bottom">
                    <td class="text-secondary">Pays :</td>
                    <td class="text-dark font-weight-bold">{{ $_data->pays }}</td>
                </tr>
                @endif
                @if(isset($_data->tele))
                <tr class="border-bottom">
                    <td class="text-secondary">Numero de tel. de la société : </td>
                    <td class="text-dark font-weight-bold">{{ $_data->tele }}</td>
                </tr>
                @endif
                @if(isset($data->site))
                <tr class="border-bottom">
                    <td class="text-secondary">Site internet :</td>
                    <td class="text-dark font-weight-bold">{{ $_data->site }}</td>
                </tr>
                @endif
                @if(isset($data->mot_cle))
                <tr class="border-bottom">
                    <td class="text-secondary">Mot clés :</td>
                    <td class="text-dark font-weight-bold">{{ $_data->mot_cle }}</td>
                </tr>
                @endif
                
                @else
                @if(isset($data->adresse))
                <tr class="border-bottom">
                    <td class="text-secondary">Adresse :</td>
                    <td class="text-dark font-weight-bold">{{ $data->adresse }}</td>
                </tr>
                @endif
                @if(isset($data->pays))
                <tr class="border-bottom">
                    <td class="text-secondary">Pays :</td>
                    <td class="text-dark font-weight-bold">{{ $data->pays }}</td>
                </tr>
                @endif
                @if(isset($data->site))
                <tr class="border-bottom">
                    <td class="text-secondary">Site internet :</td>
                    <td class="text-dark font-weight-bold">{{ $data->site }}</td>
                </tr>
                @endif
                @if(isset($data->mot_cle))
                <tr class="border-bottom">
                    <td class="text-secondary">Mot clés :</td>
                    <td class="text-dark font-weight-bold">{{ $data->mot_cle }}</td>
                </tr>
                @endif
                @endif

            </tbody>
        </table>
    </div>

</div>

@endsection