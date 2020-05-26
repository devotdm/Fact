<?php $__env->startSection('header'); ?>

<?php echo $__env->make($path.'includes.topbars.lists', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link text-uppercase <?php echo e(($url=='')?'active':''); ?>" href="<?php echo e(url('devis/list')); ?>">tous</a>
        <a class="nav-item nav-link text-uppercase <?php echo e(($url=='provisoire')?'active':''); ?>" href="<?php echo e(url('devis/list/provisoire')); ?>">provisoires</a>
        <a class="nav-item nav-link text-uppercase <?php echo e(($url=='finalisé')?'active':''); ?>" href="<?php echo e(url('devis/list/finalisé')); ?>">finalisés</a>
        <a class="nav-item nav-link text-uppercase <?php echo e(($url=='refusé')?'active':''); ?>" href="<?php echo e(url('devis/list/refusé')); ?>">refusés</a>
        <a class="nav-item nav-link text-uppercase <?php echo e(($url=='signé')?'active':''); ?>" href="<?php echo e(url('devis/list/signé')); ?>">signés</a>
    </div>
</nav>
<div class="row">
    <?php echo $__env->make($path.'devis.layouts.list',["data"=> $data , "tbl"=> $obj], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/devis/list.blade.php ENDPATH**/ ?>