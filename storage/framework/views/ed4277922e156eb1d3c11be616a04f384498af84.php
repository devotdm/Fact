<?php $__env->startSection('header'); ?>

<?php echo $__env->make($path.'includes.topbars.lists', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link text-uppercase active" href="<?php echo e(url('devis/list')); ?>">tous</a>
        <a class="nav-item nav-link text-uppercase" href="<?php echo e(url('devis/list')); ?>">provisoires</a>
        <a class="nav-item nav-link text-uppercase" href="<?php echo e(url('devis/list')); ?>">finalisés</a>
        <a class="nav-item nav-link text-uppercase" href="<?php echo e(url('devis/list')); ?>">refusés</a>
        <a class="nav-item nav-link text-uppercase" href="<?php echo e(url('devis/list')); ?>">signés</a>
    </div>
</nav>
<div class="row">
    <div class="col">
        <div class="card shadow mt-4">
            <div class="card-header bg-white py-3 d-flex flex-row align-items-center justify-content-between">
                <span><h5 class="card-title mb-3 font-weight-bold text-dark"><a href="<?php echo e(url('devis/info')); ?>">Provisioire</a></h5>
                    <h6><a class="text-dark" href="<?php echo e(url('clients/info')); ?>">Client Test</a> - <a class="text-dark" href="<?php echo e(url('societes/info')); ?>">Societe Test</a></h6>
                </span>
                <div class="dropdown no-arrow">
                <?php echo $__env->make($path.'includes.dropdown', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text"><i class="fas fa-sticky-note mr-3"></i>1000.00د .م</p>
                <p class="card-text"><i class="far fa-clock mr-2"></i>06 mars 2020</p>
                <hr>
                <span class="text-white bg-danger p-2">Motcle</span>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/devis/list.blade.php ENDPATH**/ ?>