<?php $__env->startSection('content'); ?>

<form method="post" action="<?php echo e(url('parametres/compte/delete')); ?>" class="w-100 text-dark" id="form7" >
    
<?php echo csrf_field(); ?> 
    
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <p class="text-danger"><?php echo e($error); ?></p>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

    <div class="form-group">
        <label for="raison">Raison</label>
        <select name="raison" id="raison" class="form-control w-50">
            <option value="">Je rencontre des problèmes techniques</option>
            <option value="">J'ai un autre compte</option>
            <option value="">Autre</option>
        </select>
    </div>
    <div class="form-group">
        <label for="remarques">Remarques</label>
        <textarea name="remarques" class="form-control w-75" id="remarques" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label for="pass">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control w-50">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-danger mb-5">Supprimer mon compte</button>
    </div>

</form>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('parametres/struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/parametres/compte/remove.blade.php ENDPATH**/ ?>