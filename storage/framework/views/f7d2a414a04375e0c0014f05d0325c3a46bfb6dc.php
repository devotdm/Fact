<div class="row">
    <div class="col-lg-6 mb-3">
      <h3 class="text-dark">Informations</h3>
        <table class="table table-borderless mt-3">
            <tbody>
                <tr class="border-bottom">
                    <td class="text-secondary w-50">Statut : </td>
                    <td class="text-dark font-weight-bold"><?php echo e(ucfirst(trans($data->statut))); ?></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Créé le :</td>
                    <td class="text-dark font-weight-bold"><?php echo e($data->created_at); ?></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Derniére modification le  :</td>
                    <td class="text-dark font-weight-bold"><?php echo e($data->updated_at); ?></td>
                </tr>
                <?php if($ind == 3 && isset($data->duree)): ?>
                 <tr class="border-bottom">
                    <td class="text-secondary">Durée de validité :</td>
                    <td class="text-dark font-weight-bold"><?php echo e($data->duree.' jours'); ?></td>
                </tr>
                <?php endif; ?>
                <?php if(isset($data->mot_cle)): ?>
                <tr class="border-bottom">
                    <td class="text-secondary">Mots clés :</td>
                    <td class="text-dark font-weight-bold"><?php echo e($data->mot_cle); ?></td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    
    <div class="col-lg-6 mb-3">
     <?php if($data->statut == 'provisoire'): ?>
      <h3 class="text-dark">Votre devis est prete ?</h3>
      <p>Finalisez votre devis a l'aide du bouton<i class="far fa-check-circle ml-2 mr-2 text-success"></i>ci-dessus pour pouvoir l'envoyer au client. </p>
      <p>Attention un devis finalisé n'est plus modifiable.</p>
      <?php endif; ?>
      <h3 class="text-dark">Documents liés</h3>
      <p>aucun document lié </p>
    </div>

    <div class="col-lg-6 mb-3">
      <h3 class="text-dark">Destinataire</h3>
          <?php echo $__env->make($path.'includes.layouts.clients.info',['data'=> $dataC ,'_data'=> $dataS ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
            <?php $__currentLoopData = $_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="border-bottom">
                <td class="font-weight-bold"><?php echo e($_data->type); ?></td>
                <td class="font-weight-bold"><?php echo e($_data->description); ?></td>
                <td class="font-weight-bold text-right"><?php echo e($_data->prix); ?></td>
                <td class="font-weight-bold text-right"><?php echo e($_data->quantity); ?></td>
                <td class="font-weight-bold text-right"><?php echo e($_data->tva); ?></td>
                <td class="font-weight-bold text-right"><?php echo e($_data->reduction); ?></td>
                <td class="font-weight-bold text-right"><?php echo e($_data->total); ?></td>
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
                <td class="font-weight-bold text-right"><?php echo e($data->total); ?></td>
            </tr>
        </table>
</div>

<p class="pb-5">DEVOSOFT S.A.R.L, TP : 50990690 - IF : 207224501 - ICE : 001853352000050 - CNSS : 5297016</p><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/////includes/layouts/info.blade.php ENDPATH**/ ?>