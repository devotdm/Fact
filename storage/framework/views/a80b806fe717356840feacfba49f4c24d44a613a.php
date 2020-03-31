<?php $__env->startSection('content'); ?>

<form method="post" class="w-100 text-dark" id="form1">

    <div class="form-group">
        <label for="email">Adresse email</label>
        <input type="text" name="email" id="email" class="form-control w-50">
    </div>
    <div class="form-group">
        <label for="pass">Mot de passe actuel</label>
        <input type="password" name="pass" id="pass" class="form-control w-50">
    </div>
    <div class="form-group">
        <label for="new_pass">Nouveau mot de passe</label>
        <input type="password" name="new_pass" id="new_pass" class="form-control w-50">
    </div>
    <div class="form-group">
        <label for="conf">Confirmer nouveau mot de passe</label>
        <input type="password" name="conf" id="conf" class="form-control w-50">
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-success mb-5">Mettre a jour</button>
    </div>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('parametres/struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/parametres/compte/change.blade.php ENDPATH**/ ?>