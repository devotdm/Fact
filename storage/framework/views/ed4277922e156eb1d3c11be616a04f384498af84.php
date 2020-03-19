<?php $__env->startSection('header'); ?>

<?php echo $__env->make($path.'includes.topbars.lists', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">TOUS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">PROVISOIRES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">FINALISES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">REFUES</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="#">SIGNES</a>
</ul>

<div class="row">



    <div class="col">
        <div class="card shadow mt-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <span><h5 class="card-title mb-3 font-weight-bold text-dark">Provisoire</h5>
                	<span class="text-primary ml-2">el mahdi essekhyry</span><br><br>

                    <h6 class="card-subtitle text-muted">  
                      <p class="card-text"><i class="fas fa-sticky-note mr-2">&nbsp; 1000.00د .م </i>
                         &nbsp;&nbsp;&nbsp;<i class="far fa-clock mr-2"></i>06 mars 2020</p>
                      
                   
                  </h6></span>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-md fa-fw text-dark"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Modifier</a>
                        <a class="dropdown-item" href="#">Supprimer</a>
                        <a class="dropdown-item" href="#">Cree devis</a>
                    </div>
                </div>
            
        

            </div>
        </div>
    </div>


 

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/devis/list.blade.php ENDPATH**/ ?>