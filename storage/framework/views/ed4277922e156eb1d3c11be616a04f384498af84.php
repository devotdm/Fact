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
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col">
        <div class="card shadow mt-4">
            <div class="card-header bg-white py-3 d-flex flex-row align-items-center justify-content-between">
                <span><h5 class="card-title mb-3 font-weight-bold text-dark">
                    <?php if($data->statut=='provisoire'): ?>
                    <a href="<?php echo e(url('devis/info/'.$data->id)); ?>"> <?php echo e(ucfirst(trans($data->statut))); ?></a>
                    <?php else: ?>
                    <a href="<?php echo e(url('devis/info/'.$data->id)); ?>"> <?php echo e($data->id_num); ?></a><span class="text-important"><?php echo e(ucfirst(trans($data->statut))); ?></span>
                    <?php endif; ?>
                    </h5>
                    <h6><a class="text-dark" href="<?php echo e(url('clients/info')); ?>">Client Test</a> - <a class="text-dark" href="<?php echo e(url('societes/info')); ?>">Societe Test</a></h6>
                </span>
                <div class="dropdown no-arrow">
                    <?php echo $__env->make($path.'includes.dropdown', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <div class="card-body">
                <span class="card-text"><i class="fas fa-sticky-note mr-2"></i><?php echo e($data->total.' '.$data->devise); ?></span>
                <span class="card-text ml-3"><i class="far fa-clock mr-2"></i><?php echo e(date('d F Y', strtotime($data->created_at))); ?></span>
                <hr>
                <span class="text-white bg-danger p-2">Motcle</span>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/devis/list.blade.php ENDPATH**/ ?>