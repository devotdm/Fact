<?php $__env->startSection('header'); ?>

<?php echo $__env->make($path.'includes.topbars.news', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item bg-white shadow mb-3 mr-4">
        <a class="nav-link p-3 pr-5 d-flex" id="prt-tab" data-toggle="pill" href="#prt" role="tab" aria-controls="prt" aria-selected="false">
            <i class="fas fa-fw fa-user-tie fa-4x"></i>
            <span><h5>Particulier</h5>
                <h6>client avec société</h6></span>
        </a>
    </li>
    <li class="nav-item bg-white shadow mb-3 mr-4">
        <a class="nav-link p-3 pr-5 d-flex" id="pro-tab" data-toggle="pill" href="#pro" role="tab" aria-controls="pro" aria-selected="false">
            <i class="fas fa-fw fa-building fa-4x"></i>
            <span><h5>Professionnel</h5>
                <h6>client sans société</h6></span>
        </a>
    </li>
</ul>
<div class="tab-content row" id="pills-tabContent">
   
   <!-- Particulier -->
    <div class="tab-pane fade col-lg-7 col-md-12" id="prt" role="tabpanel" aria-labelledby="prt-tab">
      <form method="post" class="w-100 text-dark" id="form1">
         <div class="form-group mt-3">
              <h3 class="font-weight-bold">Informations</h3>
          </div>
          <div class="form-group">
              <label for="email">Email : </label>
              <input type="text" class="form-control" name="email" id="email" v-model="email" v-bind:class="{'border-danger': attemptSubmit && !this.email}">
<!--              <div class="text-danger" v-if="attemptSubmit && !this.email">Ce champs est obligatoire.</div> -->
          </div>
          <div class="form-group">
              <label for="prenom">Prénom :</label>
              <input type="text" class="form-control" name="prenom" id="prenom" v-model="prenom" v-bind:class="{'border-danger': attemptSubmit && !this.prenom}">
<!--              <div class="text-danger" v-if="attemptSubmit && !this.prenom">Ce champs est obligatoire.</div> -->
          </div>
          <div class="form-group">
              <label for="nom">Nom de famille :</label>
              <input type="text" class="form-control" name="nom" id="nom" v-model="nom" v-bind:class="{'border-danger': attemptSubmit && !this.nom}">
<!--              <div class="text-danger" v-if="attemptSubmit && !this.nom">Ce champs est obligatoire.</div> -->
          </div>
          <div class="form-group">
              <label for="fonction">Fonction :</label>
              <input type="text" class="form-control" name="fonction" id="fonction" v-model="fonction" v-bind:class="{'border-danger': attemptSubmit && !this.fonction}">
<!--              <div class="text-danger" v-if="attemptSubmit && !this.fonction">Ce champs est obligatoire.</div> -->
          </div>
          <div class="form-group mt-3">
              <h4>Cordonnées du client : </h4>
          </div>
          <div class="form-group">
              <label for="adresse">Adresse : </label>
              <textarea class="form-control" name="adresse" id="adresse" cols="30" rows="5" v-model="adresse" v-bind:class="{'border-danger': attemptSubmit && !this.adresse}"></textarea>
<!--              <div class="text-danger" v-if="attemptSubmit && !this.adresse">Ce champs est obligatoire.</div> -->
          </div>
          <div class="form-group">
              <label for="codep">Code postal</label>
              <input type="text" class="form-control" name="codep" id="codep" v-model="codep" v-bind:class="{'border-danger': attemptSubmit && !this.codep }">
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
                  <option value="maroc">Maroc</option>
                  <option value="france">France</option>
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
              <label for="motcle" class="d-block">Mot clés : </label>
              <input type="text" class="form-control" name="motcle" id="motcle" v-model="motcle" v-bind:class="{'border-danger': attemptSubmit && !this.motcle}">
<!--              <div class="text-danger" v-if="attemptSubmit && !this.motcle">Au moins une seul mot clé.</div> -->
          </div>
          <div class="form-group">
              <button type="submit" name="submit1" class="btn btn-success mb-5">Créer le client</button>
          </div>
      </form>
  </div>
    <div class="tab-pane fade col-lg-7 col-md-12" id="pro" role="tabpanel" aria-labelledby="pro-tab">
      
       <!-- Professionnel -->
        <form method="post" class="w-100 text-dark" id="form2">
            <div class="form-group mt-3">
                <h3 class="font-weight-bold">Informations</h3>
            </div>
            <div class="form-group">
                <label for="email">Email : </label>
                <input type="text" class="form-control" name="email" id="email" v-model="email_" v-bind:class="{'border-danger': attemptSubmit_ && !this.email_}">
<!--                <div class="text-danger" v-if="attemptSubmit_ && !this.email_">Ce champs est obligatoire.</div> -->
            </div>

            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" name="prenom" id="prenom" v-model="prenom_" v-bind:class="{'border-danger': attemptSubmit_ && !this.prenom_}">
<!--                <div class="text-danger" v-if="attemptSubmit_ && !this.prenom_">Ce champs est obligatoire.</div> -->
            </div>

            <div class="form-group">
                <label for="nom">Nom de famille :</label>
                <input type="text" class="form-control" name="nom" id="nom" v-model="nom_" v-bind:class="{'border-danger': attemptSubmit_ && !this.nom_}">
<!--                <div class="text-danger" v-if="attemptSubmit_ && !this.nom_">Ce champs est obligatoire.</div> -->
            </div>

            <div class="form-group">
                <label for="fonction">Fonction :</label>
                <input type="text" class="form-control" name="fonction" id="fonction" v-model="fonction_" v-bind:class="{'border-danger': attemptSubmit_ && !this.fonction_}">
<!--                <div class="text-danger" v-if="attemptSubmit_ && !this.fonction_">Ce champs est obligatoire.</div> -->
            </div>
            <div class="form-group mt-3">
                <h4>Cordonnées du client : </h4>
            </div>
            <div class="form-group">
                <label for="tele">Numero du téléphone</label>
                <input type="text" class="form-control" name="tele" id="tele" v-model="tele_" v-bind:class="{'border-danger': attemptSubmit_ && !this.tele_}">
<!--                <div class="text-danger" v-if="attemptSubmit_ && !this.tele_">Ce champs est obligatoire.</div> -->
            </div>

            <div class="form-group">
                <label for="societe"><h4>Société</h4></label>
                <select class="form-control" name="societe" id="societe" v-model="societe" v-bind:class="{'border-danger': attemptSubmit_ && !this.societe}">
<!--                    <option value=""><a href=""></a></option>-->
                    <option value="">Maroc</option>
                </select>
<!--                <div class="text-danger" v-if="attemptSubmit_ && !this.societe">Ce champs est obligatoire.</div> -->
            </div>

            <div class="form-group">
                <label for="motcle"><h4>Mot clés : </h4></label>
                <input type="text" class="form-control" name="motcle" id="motcle" v-model="_" v-bind:class="{'border-danger': attemptSubmit_ && !this.motcle_}">
<!--                <div class="text-danger" v-if="attemptSubmit_ && !this.motcle_">Au moins une seul mot clé.</div> -->
            </div>

            <div class="form-group">
                <button type="submit" name="submitpro" class="btn btn-success mb-5">Créer le client</button>
            </div>

        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/clients/new.blade.php ENDPATH**/ ?>