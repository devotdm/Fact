<?php $__env->startSection('header'); ?>

<?php echo $__env->make($path.'includes.topbars.news', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-lg-7">
    <?php echo e(Form::model($data,array('url' => 'societes/update/'.$data->id , 'method' => 'put' ,
        'class' => "w-100" , 'id' => 'e_form1' ))); ?>

         
         <?php echo $__env->make($path.'societes.layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

         <div class="form-group">
            <button type="submit" class="btn btn-success mb-5">Modifier le client</button>
          </div>

      <?php echo e(Form::close()); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/societes/edit.blade.php ENDPATH**/ ?>