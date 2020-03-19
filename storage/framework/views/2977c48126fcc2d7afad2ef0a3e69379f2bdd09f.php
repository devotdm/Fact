<?php $__env->startSection('header'); ?>

<?php echo $__env->make($path.'includes.topbars.lists', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">



    <div class="col">
        <div class="card shadow mt-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <span><h5 class="card-title mb-3 font-weight-bold text-dark">F200001<span class="text-primary ml-2">Finalisee</span></h5>
                    <h6 class="card-subtitle text-muted">mohammed nejmedine - near eaxt foundation /ARM</h6></span>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-md fa-fw text-dark"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Modifier</a>
                        <a class="dropdown-item" href="#">Supprimer</a>
                        <a class="dropdown-item" href="#">Cree facture</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="card-body"> 
                 <p class="card-text"><i class="far fa-clock mr-2"></i>26 fevcier 2020</p>
                   
                <p class="card-text"><i class="fas fa-sticky-note mr-2"></i>2331.563د .م </p>
                <hr>
<!--
             
                 <span class="text-white bg-danger p-2">nef</span>
                <span class="text-white bg-primary p-2">yassine </span>
                <span class="text-white bg-secondary p-2">bricovet</span>
-->
            </div>
        </div>
    </div>


 

</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/factures/list.blade.php ENDPATH**/ ?>