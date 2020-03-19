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
                <tr class="border-bottom">
                    <td class="text-secondary w-50">Numero de societe :</td>
                    <td class="text-dark font-weight-bold">Gerant</td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Adresse :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Pays :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Numero de telephone : </td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Site internet :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row mb-4">
    <div class="col-12">
        <h4 class="font-weight-bold">Clients(5)</h4>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card shadow mt-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <span><h5 class="card-title mb-3 font-weight-bold text-dark">Client Test</h5>
                    <h6 class="card-subtitle text-muted">Particulier</h6></span>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-md fa-fw text-dark"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Modifier</a>
                        <a class="dropdown-item" href="#">Supprimer</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text"><i class="far fa-envelope mr-2"></i>client1@gmail.com</p>
                <p class="card-text"><i class="fas fa-phone mr-2"></i>0223812771</p>
                <hr>
                <span class="text-white bg-danger p-2">Motcle</span>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/societes/info.blade.php ENDPATH**/ ?>