@extends('struct')

@section('header')

@include($path.'includes.topbars.news')

@endsection

@section('content')
<div class="col-lg-7">
    <form method="post" class="w-100 text-dark">
        <div class="form-group mt-3" id="form3">
            <h3 class="font-weight-bold">Informations</h3>
        </div>
        <div class="form-group">
            <label for="nom">Nom de la société : </label>
            <input type="text" class="form-control text-dark" name="nom" id="nom" v-model="nom" v-bind:class="{'border-danger': attemptSubmit && !this.nom}">
<!--              <div class="text-danger" v-if="attemptSubmit && !this.nom">Ce champs est obligatoire.</div> -->
        </div>
        <div class="form-group">
            <label for="tva">Numero du TVA</label>
            <input type="number" class="form-control" name="tva" id="tva" v-model="tva" v-bind:class="{'border-danger': attemptSubmit && !this.tva}">
<!--              <div class="text-danger" v-if="attemptSubmit && !this.tva">Ce champs est obligatoire.</div> -->
        </div>
        <div class="form-group">
            <label for="ice">Code ICE</label>
            <input type="text" class="form-control" name="ice" id="ice" v-model="ice" v-bind:class="{'border-danger': attemptSubmit && !this.ice}">
<!--              <div class="text-danger" v-if="attemptSubmit && !this.ice">Ce champs est obligatoire.</div> -->
        </div>
        <div class="form-group mt-3">
            <h4>Cordonnées de la société : </h4>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse : </label>
            <textarea class="form-control" name="adresse" id="adresse" cols="30" rows="5" v-model="adresse" v-bind:class="{'border-danger': attemptSubmit && !this.adresse}"></textarea>
<!--              <div class="text-danger" v-if="attemptSubmit && !this.adresse">Ce champs est obligatoire.</div> -->
        </div>
        <div class="form-group">
            <label for="codep">Code postal</label>
            <input type="text" class="form-control" name="codep" id="codep" v-model="codep" v-bind:class="{'border-danger': attemptSubmit && !this.codep}">
<!--              <div class="text-danger" v-if="attemptSubmit && !this.codep">Ce champs est obligatoire.</div> -->
        </div>
        <div class="form-group">
            <label for="ville">Ville</label>
            <input type="text" class="form-control" name="ville" id="ville" v-model="ville" v-bind:class="{'border-danger': attemptSubmit && !this.ville}">
<!--              <div class="text-danger" v-if="attemptSubmit && !this.ville">Ce champs est obligatoire.</div> -->
        </div>
        <div class="form-group">
            <label for="pays">Pays</label>
            <select class="form-control" name="pays" id="pays" v-model="pays" v-bind:class="{'border-danger': attemptSubmit && !this.pays}">
                <option value=""></option>
            </select>
<!--              <div class="text-danger" v-if="attemptSubmit && !this.pays">Ce champs est obligatoire.</div> -->
        </div>
        <div class="form-group">
            <label for="site">Site internet : </label>
            <input type="text" class="form-control" name="site" id="site" v-model="site" v-bind:class="{'border-danger': attemptSubmit && !this.site}">
<!--              <div class="text-danger" v-if="attemptSubmit && !this.site">Ce champs est obligatoire.</div> -->
        </div>
        <div class="form-group">
            <label for="tele">Numero du téléphone</label>
            <input type="text" class="form-control" name="tele" id="tele" v-model="tele" v-bind:class="{'border-danger': attemptSubmit && !this.tele}">
<!--              <div class="text-danger" v-if="attemptSubmit && !this.tele">Ce champs est obligatoire.</div> -->
        </div>
        <div class="form-group">
            <label for="clients">Clients</label>
            <select multiple class="form-control" name="clients" id="clients" v-model="clients" v-bind:class="{'border-danger': attemptSubmit && !this.clients}">
                <option value=""></option>
            </select>
<!--              <div class="text-danger" v-if="attemptSubmit && !this.clients">Ce champs est obligatoire.</div> -->
        </div>
        <div class="form-group">
            <label for="motcle">Mot clés : </label>
            <input type="text" class="form-control" name="motcle" id="motcle" v-model="motcle" v-bind:class="{'border-danger': attemptSubmit && !this.motcle}">
<!--              <div class="text-danger" v-if="attemptSubmit && !this.motcle">Au moins une seul mot clé.</div> -->
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-success mb-5">Créer la société</button>
        </div>
    </form>
</div>

@endsection