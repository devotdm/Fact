<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-12">
    <div class="card shadow mt-4">
        <div class="card-header bg-white py-3 d-flex flex-row align-items-center justify-content-between">
            <span><h5 class="card-title mb-3 font-weight-bold text-dark">
                <?php if($data->statut=='provisoire'): ?>
                <a href="<?php echo e(url('factures/info/'.$data->id)); ?>"> <?php echo e(ucfirst(trans($data->statut))); ?></a>
                <?php else: ?>
                <a href="<?php echo e(url('factures/info/'.$data->id)); ?>"> <?php echo e($data->id_num); ?></a><span class="text-success ml-2"><?php echo e(ucfirst(trans($data->statut))); ?></span>
                <?php endif; ?>
                </h5>
                <h6><a class="text-dark" href="<?php echo e(url('clients/info/'.$data->client->id)); ?>"><?php echo e($data->client->prenom.' '.$data->client->nom); ?></a>
                <?php if(isset($data->client->societe_id)): ?>
                 - <a class="text-dark" href="<?php echo e(url('societes/info/'.$data->client->societe_id)); ?>"><?php echo e($data->client->societe->nom); ?></a>
                <?php endif; ?>
                </h6>
            </span>
            <div class="dropdown no-arrow">
                <?php echo $__env->make($path.'includes.dropdown', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="card-body">
            <span class="card-text"><i class="fas fa-sticky-note mr-2"></i><?php echo e($data->total.' '.$data->devise); ?></span>
            <span class="card-text ml-3"><i class="far fa-clock mr-2"></i><?php echo e(date('d F Y', strtotime($data->created_at))); ?></span>
            <?php if($data->statut=='payée'): ?>
                <span class="card-text ml-3" title="payée le"><i class="far fa-calendar-check mr-2"></i></i><?php echo e(date('d F Y', strtotime($data->created_at))); ?></span>
            <?php endif; ?>
            <hr>
            <span class="text-white bg-danger p-2">Motcle</span>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views///////includes/layouts/factures.blade.php ENDPATH**/ ?>