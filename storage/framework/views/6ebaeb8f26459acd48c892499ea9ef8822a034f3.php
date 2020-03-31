<?php $__env->startSection('content'); ?>

<form method="post" class="w-100 text-dark" id="form1">

    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" name="nom" class="form-control w-50">
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-success mb-5">Enregistrer</button>
    </div>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('parametres/struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/parametres/types_articles/new.blade.php ENDPATH**/ ?>