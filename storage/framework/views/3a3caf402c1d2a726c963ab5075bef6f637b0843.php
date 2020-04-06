<?php $__env->startSection('header'); ?>

<?php echo $__env->make($path.'includes.topbars.infos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row mt-3">
    <div class="col-lg-6">
        <h4>Informations : </h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <?php echo $__env->make($path.'includes.layouts.clients.info',['data'=> $data], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>

<?php if(count($dataD) > 0): ?>
<div class="row mb-4">
    <div class="col-12">
        <h4 class="font-weight-bold">Devis(<?php echo e(count($dataD)); ?>)</h4>
    </div>
    <?php echo $__env->make($path.'includes.layouts.devis',["data"=> $dataD], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php endif; ?>

<?php if(count($dataF) > 0): ?>
<div class="row mb-4">
    <div class="col-12">
        <h4 class="font-weight-bold">Factures(<?php echo e(count($dataF)); ?>)</h4>
    </div>
    <?php echo $__env->make($path.'includes.layouts.factures',["data"=> $dataF], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/clients/info.blade.php ENDPATH**/ ?>