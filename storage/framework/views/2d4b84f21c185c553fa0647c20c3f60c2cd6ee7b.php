<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card shadow mt-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <span><h5 class="card-title mb-3 font-weight-bold text-dark">Société Test</h5>
                <h6 class="card-subtitle text-muted">2 Clients</h6></span>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-md fa-fw text-dark"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Modifier</a>
                        <a class="dropdown-item" href="#">Supprimer</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text"><i class="fas fa-location-arrow mr-2"></i>Sociéte 1,Rue sociéte 1,Safi,Maroc</p>
                <p class="card-text"><i class="fas fa-phone-alt mr-2"></i>0223812771</p>
                <hr>
                <span class="text-white bg-danger p-2">Motcle</span>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/societes/list.blade.php ENDPATH**/ ?>