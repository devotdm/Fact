<?php $__env->startSection('header'); ?>

<?php echo $__env->make($path.'includes.topbars.lists', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card shadow mt-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <span><h5 class="card-title mb-3 font-weight-bold text-dark"><a href="<?php echo e(url('clients/info')); ?>">Client Test</a></h5>
                    <h6 class="card-subtitle text-muted">Particulier - <a href="<?php echo e(url('societes/info')); ?>">Societe Test</a></h6></span>
                <div class="dropdown no-arrow">
                    <?php echo $__env->make($path.'includes.dropdown', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text"><i class="far fa-envelope mr-2"></i>client1@gmail.com</p>
                <p class="card-text"><i class="fas fa-phone mr-2"></i>0223812771</p>
                <hr>
                <span class="text-white bg-danger p-2">Motcle</span>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/clients/list.blade.php ENDPATH**/ ?>