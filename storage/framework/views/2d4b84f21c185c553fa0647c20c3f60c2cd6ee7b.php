<?php $__env->startSection('header'); ?>

<?php echo $__env->make($path.'includes.topbars.lists', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card shadow mt-4" style="height: 13rem;">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <span><h5 class="card-title mb-3 font-weight-bold text-dark">
                <a href="<?php echo e(url('societes/info/'.$data->id)); ?>"> <?php echo e($data->nom); ?> </a></h5>
                <h6 class="card-subtitle text-muted"><?php echo e($data->clients_count); ?> Clients</h6></span>
                <div class="dropdown no-arrow">
                    <?php echo $__env->make($path.'includes.dropdown',['index' => $index, 'road' => 'societes'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <div class="card-body">
                <?php if(isset($data->adresse)): ?>
                <p class="card-text"><i class="fas fa-location-arrow mr-2"></i> <?php echo e($data->adresse); ?> </p>
                <?php endif; ?>
                <?php if(isset($data->tele)): ?>
                <p class="card-text"><i class="fas fa-phone-alt mr-2"></i> <?php echo e($data->tele); ?> </p>
                <?php endif; ?>
<!--
                <hr>
                <span class="text-white bg-danger p-2">Motcle</span>
-->
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/societes/list.blade.php ENDPATH**/ ?>