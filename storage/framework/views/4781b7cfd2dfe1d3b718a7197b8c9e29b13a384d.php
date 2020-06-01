<?php $__env->startSection('header'); ?>

<?php echo $__env->make($path.'includes.topbars.infos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-6 mb-3">
    	<?php echo $__env->make($path.'devis.layouts.info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    
    <div class="col-lg-6 mb-3">
        
    </div>

    <div class="col-lg-6 mb-3">
      	<h3 class="text-dark">Destinataire</h3>
        <?php echo $__env->make($path.'clients.layouts.info',['data'=> $dataC ,'_data'=> $dataS ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>


    <div class="col-lg-6 mb-3">
      	<h3 class="text-dark">Conditions</h3>
  		<table class="table table-borderless mt-3">
            <tbody>
                <tr class="border-bottom">
                    <td class="text-secondary w-50">Conditions de règlement :</td>
                    <td class="text-dark font-weight-bold"><?php echo e($data->cond_reg); ?></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Mode de règlement :</td>
                    <td class="text-dark font-weight-bold"><?php echo e($data->mode_reg); ?></td>
                </tr>
                <?php if(isset($data->intr_retard)): ?>
                <tr class="border-bottom">
                    <td class="text-secondary">Intérêt de retard :</td>
                    <td class="text-dark font-weight-bold"><?php echo e($data->intr_retard); ?></td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
	</div>
	
	<div class="col">
	<h3>Détails</h3>
	</div>
	<table class="table table-borderless text-dark">
	    <tr class="border-bottom">
	        <td class="text-secondary">Type</td>
	        <td class="text-secondary">Description</td>
	        <td class="text-secondary text-right">Prix unitaire HT</td>
	        <td class="text-secondary text-right">Quantité </td>
	        <td class="text-secondary text-right">TVA</td>
	        <td class="text-secondary text-right">Reduction</td>
	        <td class="text-secondary text-right">Total HT</td>
	    </tr>
	    <?php $__currentLoopData = $data->lignes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ligne): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    <tr class="border-bottom">
	        <td class="font-weight-bold"><?php echo e($ligne->type); ?></td>
	        <td class="font-weight-bold"><?php echo e($ligne->description); ?></td>
	        <td class="font-weight-bold text-right"><?php echo e($ligne->prix); ?></td>
	        <td class="font-weight-bold text-right"><?php echo e($ligne->quantity); ?></td>
	        <td class="font-weight-bold text-right"><?php echo e($ligne->tva); ?></td>
	        <td class="font-weight-bold text-right"><?php echo e($ligne->reduction); ?></td>
	        <td class="font-weight-bold text-right"><?php echo e($ligne->total); ?></td>
	    </tr>
	    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	    <tr>
	        <td colspan="5" class="font-weight-bold text-right pb-0"></td>
	        <td class="font-weight-bold text-right">Total HT</td>
	        <td class="font-weight-bold text-right"><?php echo e($data->total_ht); ?></td>
	    </tr>
	    <tr>
	        <td colspan="5" class="font-weight-bold text-right pb-0"></td>
	        <td class="font-weight-bold text-right">Total TVA</td>
	        <td class="font-weight-bold text-right"><?php echo e($data->total_tva); ?></td>
	    </tr>
	    <tr>
	        <td colspan="5" class="font-weight-bold text-right pb-0"></td>
	        <td class="font-weight-bold text-right">Total TTC</td>
	        <td class="font-weight-bold text-right"><?php echo e($data->total_ttc); ?></td>
	    </tr>
	</table>
</div>

<p class="pb-5">DEVOSOFT S.A.R.L, TP : 50990690 - IF : 207224501 - ICE : 001853352000050 - CNSS : 5297016</p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/devis/info.blade.php ENDPATH**/ ?>