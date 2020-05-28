<?php $__env->startSection('header'); ?>

<?php echo $__env->make($path.'includes.topbars.news', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo e(Form::model($data,array('url' => 'factures/update' , 'method' => 'put'))); ?>

    
	    <?php echo $__env->make($path.'factures.layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	    
	    <button type="submit" name="submit" class="btn btn-success mb-5">Modifier la facture</button>
    <?php echo e(Form::close()); ?>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<script src="<?php echo e(asset('js/forms/scripts.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/factures/edit.blade.php ENDPATH**/ ?>