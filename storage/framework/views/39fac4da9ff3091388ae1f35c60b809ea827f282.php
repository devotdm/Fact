<?php $__env->startSection('header'); ?>

<?php echo $__env->make($path.'includes.topbars.news', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item bg-white shadow mb-3 mr-4">
        <a class="nav-link p-3 pr-5 d-flex <?php echo e((!isset($societe) && !$errors->isEmpty() && !$errors->has('societe_id'))?'active':''); ?>" id="prt-tab" data-toggle="pill" href="#prt" role="tab" aria-controls="prt" aria-selected="false">
            <i class="fas fa-fw fa-user-tie fa-4x"></i>
            <span><h5>Particulier</h5>
                <h6>client avec société</h6></span>
        </a>
    </li>
    <li class="nav-item bg-white shadow mb-3 mr-4">
        <a class="nav-link p-3 pr-5 d-flex <?php echo e((isset($societe) || (!$errors->isEmpty() && $errors->has('societe_id'))?'active':'')); ?>" id="pro-tab" data-toggle="pill" href="#pro" role="tab" aria-controls="pro" aria-selected="false">
            <i class="fas fa-fw fa-building fa-4x"></i>
            <span>
              <h5>Professionnel</h5>
              <h6>client sans société</h6>
            </span>
        </a>
    </li>
</ul>
<div class="tab-content row" id="pills-tabContent">
   
   <!-- Particulier -->
    <div class="tab-pane fade col-lg-7 col-md-12 <?php echo e((!isset($societe) && !$errors->isEmpty() && !$errors->has('societe_id'))?'active show':''); ?>" id="prt" role="tabpanel" aria-labelledby="prt-tab">

      <?php echo e(Form::open(array('url' => 'clients/create' , 'method' => 'post' ,
        'class' => "w-100" , 'name' => 'form1', 'id' => 'form1' ))); ?>

         
        <?php echo $__env->make($path.'clients.layouts.form1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="form-group">
            <button type="submit" class="btn btn-success mb-5">Créer le client</button>
        </div>

      <?php echo e(Form::close()); ?>


  </div>

       <!-- Professionnel -->
    <div class="tab-pane fade col-lg-7 col-md-12 <?php echo e((isset($societe) || (!$errors->isEmpty() && $errors->has('societe_id'))?'active show':'')); ?>" id="pro" role="tabpanel" aria-labelledby="pro-tab">
      
        <?php echo e(Form::open(array('url' => 'clients/create_' , 'method' => 'post' ,
          'class' => "w-100" , 'name' => 'form2', 'id' => 'form2' ))); ?>


          <?php echo $__env->make($path.'clients.layouts.form2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          <div class="form-group">
            <button type="submit" class="btn btn-success mb-5">Créer le client</button>
          </div>

        <?php echo e(Form::close()); ?>


    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/clients/new.blade.php ENDPATH**/ ?>