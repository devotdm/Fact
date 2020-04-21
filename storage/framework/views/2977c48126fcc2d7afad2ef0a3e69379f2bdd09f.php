<?php $__env->startSection('header'); ?>

<?php echo $__env->make($path.'includes.topbars.lists', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link text-uppercase <?php echo e(($url=='')?'active':''); ?>" href="<?php echo e(url('factures/list')); ?>">tous</a>
        <a class="nav-item nav-link text-uppercase <?php echo e(($url=='provisoire')?'active':''); ?>" href="<?php echo e(url('factures/list/provisoire')); ?>">provisoires</a>
        <a class="nav-item nav-link text-uppercase <?php echo e(($url=='finalisé')?'active':''); ?>" href="<?php echo e(url('factures/list/finalisé')); ?>">finalisés</a>
        <a class="nav-item nav-link text-uppercase <?php echo e(($url=='payée')?'active':''); ?>" href="<?php echo e(url('factures/list/payée')); ?>">payées</a>
        <a class="nav-item nav-link text-uppercase <?php echo e(($url=='à_payer')?'active':''); ?>" href="<?php echo e(url('factures/list/à_payer')); ?>">à payer</a>
    </div>
</nav>
<div class="row">
    <?php echo $__env->make($path.'factures.layouts.list',["data"=> $data], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/factures/list.blade.php ENDPATH**/ ?>