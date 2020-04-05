
<table class="table table-borderless mt-3">
    <tbody>
        <?php if($ind == 3 || $ind == 4): ?>
        <tr class="border-bottom">
            <td class="text-secondary w-50">Nom complet :</td>
            <td class="text-dark font-weight-bold"><?php echo e($data->prenom.' '.$data->nom); ?></td>
        </tr>
        <?php endif; ?>
        <?php if(isset($data->fonction)): ?>
        <tr class="border-bottom">
            <td class="text-secondary w-50">Fonction :</td>
            <td class="text-dark font-weight-bold"><?php echo e($data->fonction); ?></td>
        </tr>
        <?php endif; ?>
        <?php if(isset($data->email)): ?>
        <tr class="border-bottom">
            <td class="text-secondary">Email : </td>
            <td class="text-dark font-weight-bold"><?php echo e($data->email); ?></td>
        </tr>
        <?php endif; ?>
        <?php if(isset($data->tele)): ?>
        <tr class="border-bottom">
            <td class="text-secondary">Numero de telephone : </td>
            <td class="text-dark font-weight-bold"><?php echo e($data->tele); ?></td>
        </tr>
        <?php endif; ?>
        
        <?php if(isset($data->societe_id)): ?>
        <?php if(isset($_data->nom)): ?>
        <tr class="border-bottom">
            <td class="text-secondary">Societe :</td>
            <td class="text-dark font-weight-bold"><?php echo e($_data->nom); ?></td>
        </tr>
        <?php endif; ?>
        <?php if(isset($_data->adresse)): ?>
        <tr class="border-bottom">
            <td class="text-secondary">Adresse :</td>
            <td class="text-dark font-weight-bold"><?php echo e($_data->adresse); ?></td>
        </tr>
        <?php endif; ?>
        <?php if(isset($data->pays)): ?>
        <tr class="border-bottom">
            <td class="text-secondary">Pays :</td>
            <td class="text-dark font-weight-bold"><?php echo e($_data->pays); ?></td>
        </tr>
        <?php endif; ?>
        <?php if(isset($_data->tele)): ?>
        <tr class="border-bottom">
            <td class="text-secondary">Numero de tel. de la société : </td>
            <td class="text-dark font-weight-bold"><?php echo e($_data->tele); ?></td>
        </tr>
        <?php endif; ?>
        <?php if(isset($data->site)): ?>
        <tr class="border-bottom">
            <td class="text-secondary">Site internet :</td>
            <td class="text-dark font-weight-bold"><?php echo e($_data->site); ?></td>
        </tr>
        <?php endif; ?>
        <?php if(isset($data->mot_cle)): ?>
        <tr class="border-bottom">
            <td class="text-secondary">Mot clés :</td>
            <td class="text-dark font-weight-bold"><?php echo e($_data->mot_cle); ?></td>
        </tr>
        <?php endif; ?>
        
        <?php else: ?>
        <?php if(isset($data->adresse)): ?>
        <tr class="border-bottom">
            <td class="text-secondary">Adresse :</td>
            <td class="text-dark font-weight-bold"><?php echo e($data->adresse); ?></td>
        </tr>
        <?php endif; ?>
        <?php if(isset($data->pays)): ?>
        <tr class="border-bottom">
            <td class="text-secondary">Pays :</td>
            <td class="text-dark font-weight-bold"><?php echo e($data->pays); ?></td>
        </tr>
        <?php endif; ?>
        <?php if(isset($data->site)): ?>
        <tr class="border-bottom">
            <td class="text-secondary">Site internet :</td>
            <td class="text-dark font-weight-bold"><?php echo e($data->site); ?></td>
        </tr>
        <?php endif; ?>
        <?php if(isset($data->mot_cle)): ?>
        <tr class="border-bottom">
            <td class="text-secondary">Mot clés :</td>
            <td class="text-dark font-weight-bold"><?php echo e($data->mot_cle); ?></td>
        </tr>
        <?php endif; ?>
        <?php endif; ?>

    </tbody>
</table><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views//////includes/layouts/clients/info.blade.php ENDPATH**/ ?>