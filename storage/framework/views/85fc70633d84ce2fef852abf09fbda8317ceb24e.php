<?php $__env->startSection('header'); ?>

<?php echo $__env->make($path.'includes.topbars.infos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>



 <div class="row">
    <div class="col-lg-6 mb-3">
      <h3 class="text-dark">Informations</h3>
        <table class="table table-borderless mt-3">
            <tbody>
                <tr class="border-bottom">
                    <td class="text-secondary w-50">Statut : </td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Créée le :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Derniére modification le  :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">PDF généré le  : </td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Mots clés :</td>
                    <td class="text-dark font-weight-bold"></td>

                </tr>
            </tbody>
        </table>
    </div>



    <div class="col-lg-6 mb-3">
      <h3 class="text-dark">Votre facture est prete ?</h3><br><br>
      <p>Finalisez votre facture a l'aide du bouton<span class="badge badge-success ml-2 mr-2" style="padding: 12px 5px"><i class="far fa-check-circle" style="font-size:22px"></i></span>ci-dessus pour pouvoir l'envoyer au client . </p>
      <p>Attention une facture finalisee n'est plus modifiable .</p><br>

      <h3 class="text-dark">Documents liés</h3>
      <p>aucun document lié </p>
    </div>

    <div class="col-lg-6 mb-3">
      <h3 class="text-dark">Destinataire</h3>
          <table class="table table-borderless mt-3">
            <tbody>
                <tr class="border-bottom">
                    <td class="text-secondary w-50">Destinataire :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Société  :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Adresse:</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Pays : </td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Numéro de téléphone :</td>
                    <td class="text-dark font-weight-bold"></td>

                </tr>

                 <tr class="border-bottom">
                    <td class="text-secondary">Adresse email : </td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="col-lg-6 mb-3">
      <h3 class="text-dark">Conditions</h3>
  <table class="table table-borderless mt-3">
            <tbody>
                <tr class="border-bottom">
                    <td class="text-secondary w-50">Concdition de réglement :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Mode de réglement :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
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
                <td class="text-secondary text-right">Prix unitaure HT</td>
                <td class="text-secondary text-right">Quantité </td>
                <td class="text-secondary text-right">Total HT</td>
            </tr>
            <tr class="border-bottom">
                <td class="font-weight-bold">Service</td>
                <td class="font-weight-bold">gfdf</td>
                <td class="font-weight-bold text-right">1000</td>
                <td class="font-weight-bold text-right">1</td>
                <td class="font-weight-bold text-right">1000</td>
            </tr>
            <tr>
                <td colspan="5" class="text-right pt-4"> TVA non applicable .art.293 B du CGI</td>
            </tr>
            <tr>
                <td colspan="4" class="font-weight-bold text-right pb-0">Total</td>
                <td class="font-weight-bold text-right">1000</td>
            </tr>
            <tr>
                <td colspan="4" class="font-weight-bold text-right pb-0">Remise generale(10%)</td>
                <td class="font-weight-bold text-right">100</td>
            </tr>
            <tr>
                <td colspan="4" class="font-weight-bold text-right pb-0">Total final</td>
                <td class="font-weight-bold text-right">900</td>
            </tr>
        </table>
</div>

<p class="pb-5">DEVOSOFT S.A.R.L.TP:50990690-IF:207224501-ICE:001853352000050-CNSS:5297016</p>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/factures/info.blade.php ENDPATH**/ ?>