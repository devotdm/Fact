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
        <form method="post" class="w-100 text-dark">
           <div class="form-group mt-3">
                <h3 class="font-weight-bold">Informations</h3>
            </div>
            <div class="form-group">
                <label for="email">Email : </label>
                <input type="text" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="number" class="form-control" name="prenom" id="prenom">
            </div>
            <div class="form-group">
                <label for="nom">Nom de famille :</label>
                <input type="text" class="form-control" name="nom" id="nom">
            </div>
            <div class="form-group">
                <label for="fonction">Fonction :</label>
                <input type="text" class="form-control" name="fonction" id="fonction">
            </div>
            <div class="form-group mt-3">
                <h4>Cordonnées du client : </h4>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse : </label>
                <textarea class="form-control" name="adresse" id="adresse" cols="30" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="codep">Code postal</label>
                <input type="text" class="form-control" name="codep" id="codep">
            </div>
            <div class="form-group">
                <label for="ville">Ville</label>
                <input type="text" class="form-control" name="ville" id="ville">
            </div>
            <div class="form-group">
                <label for="pays">Pays</label>
                <select class="form-control" name="pays" id="pays">
                    <option value=""></option>
                </select>
            </div>
            <div class="form-group">
                <label for="site">Site internet : </label>
                <input type="text" class="form-control" name="site" id="site">
            </div>
            <div class="form-group">
                <label for="tele">Numero du téléphone</label>
                <input type="text" class="form-control" name="tele" id="tele">
            </div>
            <div class="form-group">
                <label for="motcle" class="d-block">Mot clés : </label>
                <input type="text" class="form-control" name="motcle" id="motcle">
            </div>
            <div class="form-group">
                <button type="submit" name="submit1" class="btn btn-success mb-5">Créer le client</button>
            </div>
        </form>
    </div>
    <div class="tab-pane fade col-lg-7 col-md-12" id="pro" role="tabpanel" aria-labelledby="pro-tab">
        <form method="post" class="w-100 text-dark">
            <div class="form-group mt-3">
                <h3 class="font-weight-bold">Informations</h3>
            </div>
            <div class="form-group">
                <label for="email">Email : </label>
                <input type="text" class="form-control" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" name="prenom" id="prenom">
            </div>

            <div class="form-group">
                <label for="nom">Nom de famille :</label>
                <input type="text" class="form-control" name="nom" id="nom">
            </div>

            <div class="form-group">
                <label for="fonction">Fonction :</label>
                <input type="text" class="form-control" name="fonction" id="fonction">
            </div>
            <div class="form-group mt-3">
                <h4>Cordonnées du client : </h4>
            </div>
            <div class="form-group">
                <label for="tele">Numero du téléphone</label>
                <input type="text" class="form-control" name="tele" id="tele">
            </div>

            <div class="form-group">
                <label for="societes"><h4>Société</h4></label>
                <select class="form-control" name="societes" id="societes">
                    <option value=""><a href=""></a></option>
                    <option value=""></option>
                </select>
            </div>

            <div class="form-group">
                <label for="motcle"><h4>Mot clés : </h4></label>
                <input type="text" class="form-control" name="motcle" id="motcle">
            </div>

            <div class="form-group">
                <button type="submit" name="submitpro" class="btn btn-success mb-5">Créer le client</button>
            </div>

        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/clients/new.blade.php ENDPATH**/ ?>