<?php $__env->startSection('header'); ?>

<?php echo $__env->make($path.'includes.topbars.infos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row ml-2 mt-3">
    <div class="col-lg-6">
        <h4>Informations : </h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <table class="table table-borderless mt-3">
            <tbody>
                <tr class="border-bottom">
                    <td class="text-secondary w-50">Fonction :</td>
                    <td class="text-dark font-weight-bold">Gerant</td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Email : </td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Numero de telephone : </td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Societe :</td>
                    <td class="text-dark font-weight-bold"></td>
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
                    <td class="text-secondary">Numero de tel. de la société : </td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Site internet :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Mot clés :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
            </tbody>
        </table>
    </div>
<!--
    <div class="col-lg-6">
        <table class="table table-borderless mt-3">
            <tbody>
                <tr class="border-bottom">
                    <td class="w-50">Fonction :</td>
                    <td class="text-dark font-weight-bold">Gerant</td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Email : </td>
                    <td class="text-dark font-weight-bold">client1@gmail.com</td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Numero de telephone : </td>
                    <td class="text-dark font-weight-bold"></td>
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
                    <td class="text-secondary">Site internet :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Mot clés :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
            </tbody>
        </table>
    </div>
-->
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/clients/info.blade.php ENDPATH**/ ?>