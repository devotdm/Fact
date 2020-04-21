<div class="form-group mt-3">
    <h3 class="font-weight-bold">Informations</h3>
</div>
<div class="form-group">
    <label for="email">Email : </label>
    <?php echo e(Form::input('text','email',null, ['class'=>'form-control', 'id'=>'email'])); ?>

    <span class="email text-danger"> <?php echo e($errors->first('email')); ?> </span>
</div>
<div class="form-group">
    <label for="prenom">Prénom(requis) :</label>
    <?php echo e(Form::input('text','prenom',null, ['class'=>'form-control', 'id'=>'prenom'])); ?>

    <span class="prenom text-danger"> <?php echo e($errors->first('prenom')); ?> </span>
</div>
<div class="form-group">
    <label for="nom">Nom de famille(requis) :</label>
    <?php echo e(Form::input('text','nom',null, ['class'=>'form-control', 'id'=>'nom'])); ?>

    <span class="nom text-danger"> <?php echo e($errors->first('nom')); ?> </span>
</div>
<div class="form-group">
    <label for="fonction">Fonction :</label>
    <?php echo e(Form::input('text','fonction',null, ['class'=>'form-control', 'id'=>'fonction'])); ?>

</div>
<div class="form-group mt-3">
    <h4>Cordonnées du client : </h4>
</div>
<div class="form-group">
    <label for="adresse">Adresse : </label>
    <?php echo e(Form::textarea('adresse',null, ['class'=>'form-control', 'id'=>'adresse' , 'cols'=>'30' , 'rows'=>'5'])); ?>

</div>
<div class="form-group">
    <label for="codep">Code postal</label>
    <?php echo e(Form::input('text','codep',null, ['class'=>'form-control', 'id'=>'codep'])); ?>

</div>
<div class="form-group">
    <label for="ville">Ville</label>
    <?php echo e(Form::input('text','ville',null, ['class'=>'form-control', 'id'=>'ville'])); ?>

</div>
<div class="form-group">
    <label for="pays">Pays</label>
    <?php echo e(Form::select('pays',$countries,null, ['class'=>'form-control' , 'id' => 'pays'])); ?>

</div>
<div class="form-group">
    <label for="site">Site internet : </label>
    <?php echo e(Form::input('text','site',null, ['class'=>'form-control', 'id'=>'site'])); ?>

</div>
<div class="form-group">
    <label for="tele">Numero du téléphone</label>
    <?php echo e(Form::input('text','tele',null, ['class'=>'form-control', 'id'=>'tele'])); ?>

</div>
<div class="form-group">
    <label for="mot_cle" class="d-block">Mot clés : </label>
    <?php echo e(Form::input('text','mot_cle',null, ['class'=>'form-control', 'id'=>'mot_cle'])); ?>

</div>
<?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views////clients/layouts/form1.blade.php ENDPATH**/ ?>