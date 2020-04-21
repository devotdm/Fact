<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
    <div class="card shadow mt-4" style="height: 13rem;">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <span><h5 class="card-title mb-3 font-weight-bold text-dark"><a href="<?php echo e(url('clients/info/'.$data->id)); ?>"> <?php echo e($data->prenom.' '.$data->nom); ?> </a></h5>
                <h6 class="card-subtitle text-muted">
                <?php if(!isset($data->societe_id)): ?>
                Particulier
                <?php else: ?>
                <a href="<?php echo e(url('societes/info/'.$data->societe_id)); ?>"> <?php echo e($data->societe->nom); ?> </a>
                <?php endif; ?>
                </h6></span>
            <div class="dropdown no-arrow">
                <?php echo $__env->make($path.'includes.dropdown',['index' => $index , 'road' => 'clients'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="card-body">
            <?php if(isset($data->email)): ?>
            <p class="card-text"><i class="far fa-envelope mr-2"></i> <?php echo e($data->email); ?></p>
            <?php endif; ?>
            <?php if(isset($data->tele)): ?>
            <p class="card-text"><i class="fas fa-phone mr-2"></i> <?php echo e($data->tele); ?> </p>
            <?php endif; ?>
<!--
            <hr>
            <span class="text-white bg-danger p-2">  </span>
-->
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views////clients/layouts/list.blade.php ENDPATH**/ ?>