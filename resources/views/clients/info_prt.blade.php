@extends('struct')

@section('header')

@include($path.'includes.topbars.infos')

@endsection

@section('content')

<div class="row ml-2 mt-3">
    <div class="col-lg-6 text-dark">
        <h3>Informations : </h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <table class="table table-borderless mt-3">
            <tbody>
                <tr class="border-bottom">
                    <td class="w-50">Fonction :</td>
                    <td class="text-dark font-weight-bold">Gerant</td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Email : </td>
                    <td class="text-dark font-weight-bold">client1@gmail.com</td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Numero de telephone : </td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Adresse :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Pays :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Site internet :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Mot clés :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary"></td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection