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
        <?php if(isset($data->updated_at)): ?>
        <tr class="border-bottom">
            <td class="text-secondary">Derniére modification le  :</td>
            <td class="text-dark font-weight-bold"><?php echo e($data->updated_at); ?></td>
            
        </tr> 
        <?php endif; ?>
        <?php if($data->statut != 'provisoire'): ?>
        <tr class="border-bottom">
            <td class="text-secondary">Finalisé le :</td>
            <td class="text-dark font-weight-bold"><?php echo e($data->date_finalise); ?></td>
            
        </tr>
        <?php endif; ?>
        <?php if($data->statut == 'signé'): ?>
        <tr class="border-bottom">
            <td class="text-secondary"><?php echo e(ucfirst(trans($data->statut))); ?> le :</td>
            <td class="text-dark font-weight-bold"><?php echo e($data->date_signe); ?></td>
            
        </tr>
        <?php endif; ?>
        <?php if($data->statut == 'payée'): ?>
        <tr class="border-bottom">
            <td class="text-secondary"><?php echo e(ucfirst(trans($data->statut))); ?> le :</td>
            <td class="text-dark font-weight-bold"><?php echo e($data->date_payee); ?></td>
            
        </tr>
        <?php endif; ?>
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
</table><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views///////devis/layouts/info.blade.php ENDPATH**/ ?>