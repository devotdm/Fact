<?php $__env->startSection('header'); ?>

<?php echo $__env->make($path.'includes.topbars.infos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row mt-3">
    <div class="col-lg-6">
        <h4 class="font-weight-bold">Informations : </h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <table class="table table-borderless mt-3">
            <tbody>
                <?php if(isset($data->code_ice)): ?>
                <tr class="border-bottom">
                    <td class="text-secondary">Numero de societe :</td>
                    <td class="text-dark font-weight-bold"><?php echo e($data->code_ice); ?></td>
                </tr>
                <?php endif; ?>
                <?php if(isset($data->tva)): ?>
                <tr class="border-bottom">
                    <td class="text-secondary">Numero de tva :</td>
                    <td class="text-dark font-weight-bold"><?php echo e($data->tva); ?></td>
                </tr>
                <?php endif; ?>
                <?php if(isset($data->adresse)): ?>
                <tr class="border-bottom">
                    <td class="text-secondary">Adresse :</td>
                    <td class="text-dark font-weight-bold"><?php echo e($data->adresse); ?></td>
                </tr>
                <?php endif; ?>
                <?php if(isset($data->pays)): ?>
                <tr class="border-bottom">
                    <td class="text-secondary">Pays :</td>
                    <td class="text-dark font-weight-bold"><?php echo e($data->pays); ?></td>
                </tr>
                <?php endif; ?>
                <?php if(isset($data->tele)): ?>
                <tr class="border-bottom">
                    <td class="text-secondary">Numero de telephone : </td>
                    <td class="text-dark font-weight-bold"><?php echo e($data->tele); ?></td>
                </tr>
                <?php endif; ?>
                <?php if(isset($data->site)): ?>
                <tr class="border-bottom">
                    <td class="text-secondary">Site internet :</td>
                    <td class="text-dark font-weight-bold"><?php echo e($data->site); ?></td>
                </tr>
                <?php endif; ?>
                <?php if(isset($data->mot_cle)): ?>
                <tr class="border-bottom">
                    <td class="text-secondary">Mot clés :</td>
                    <td class="text-dark font-weight-bold"><?php echo e($data->mot_cle); ?></td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php if(count($_data) > 0): ?>
<div class="row mb-4">
    <div class="col-12">
        <h4 class="font-weight-bold">Clients(<?php echo e(count($_data)); ?>)</h4>
    </div>
    <?php echo $__env->make($path.'includes.layouts.clients.list',["data"=> $_data], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php endif; ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/societes/info.blade.php ENDPATH**/ ?>