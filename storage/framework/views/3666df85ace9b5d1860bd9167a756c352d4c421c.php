<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-ellipsis-v fa-md fa-fw text-dark"></i>
</a>
<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
    <?php if($data->statut == 'provisoire'): ?>
    <a class="dropdown-item" href="" data-toggle="modal" data-target="#confirm-finalise<?php echo e($index); ?>">Finaliser</a>
    <?php endif; ?>

    <?php if( ($tbl != 'devis' && $tbl != 'facture') || $data->statut == 'provisoire' ): ?>
    <a class="dropdown-item" href="<?php echo e(url($road.'/edit/'.$data->id)); ?>">Modifier</a>
    <a class="dropdown-item" href="" data-toggle="modal" data-target="#confirm-delete<?php echo e($index); ?>">Supprimer</a>
    <?php endif; ?>

    <?php if($tbl=='devis' && $data->statut == 'finalisé'): ?>
    <a class="dropdown-item" href="" data-toggle="modal" data-target="#confirm-signature<?php echo e($index); ?>">Marquer comme signé</a>
    <a class="dropdown-item" href="<?php echo e(url($road.'/statut/'.$data->id.'/refusé')); ?>">Marquer comme refusé</a>
    <?php endif; ?>

    <?php if($tbl=='devis' && $data->statut == 'signé'): ?>
    <a class="dropdown-item" href="" data-toggle="modal" data-target="#confirm-cancel<?php echo e($index); ?>">Annuler la signature</a>
    <?php endif; ?>

    <?php if($tbl=='devis' && $data->statut == 'refusé'): ?>
    <a class="dropdown-item" href="" data-toggle="modal" data-target="#confirm-cancel<?php echo e($index); ?>">Annuler le refus</a>
    <?php endif; ?>

    <?php if($tbl=='facture' && $data->statut == 'finalisé'): ?>
    <a class="dropdown-item" href="" data-toggle="modal" data-target="#confirm-payee<?php echo e($index); ?>">Marquer comme payée</a>
    <?php endif; ?>

    <?php if($tbl=='facture' && $data->statut == 'payée'): ?>
    <a class="dropdown-item" href="" data-toggle="modal" data-target="#confirm-cancel<?php echo e($index); ?>">Annuler la paiement</a>
    <?php endif; ?>

    
    <div class="dropdown-divider"></div>
    <span class="dropdown-item disabled">Pour ce<?php echo e(($tbl=='client' || $tbl=='devis') ? ' '.$tbl : 'tte '.$tbl); ?></span>
    <?php if($tbl=='société'): ?>
    <a class="dropdown-item" href="<?php echo e(url('clients/new/'.$data->id)); ?>">Créer un client</a>
    <?php endif; ?>

    <?php if($tbl!='devis'): ?>
    <a class="dropdown-item" href="<?php echo e(url('devis/new/'.$data->id)); ?>">Créer un devis</a>
    <?php endif; ?>

    <?php if($tbl!='facture'): ?>
    <a class="dropdown-item" href="<?php echo e(url('factures/new/'.$data->id)); ?>">Créer une facture</a>
    <?php endif; ?>

    <?php if($tbl=='facture'): ?>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="">Duppliquer la facture</a>
    <a class="dropdown-item" href="">Duppliquer en devis</a>
    <?php endif; ?>

    <?php if($tbl=='devis'): ?>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="">Duppliquer le devis</a>
    <a class="dropdown-item" href="">Duppliquer en facture</a>
    <?php endif; ?>

</div>

<div class="modal fade" id="confirm-delete<?php echo e($index); ?>" tabindex="-1" role="dialog"
          aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">Voulez-vous vraiment supprimer ce<?php echo e(($tbl=='client' || $tbl=='devis') ? ' '.$tbl : 'tte '.$tbl); ?> ?</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <a href="<?php echo e(url($road.'/delete/'.$data->id)); ?>" class="btn btn-success btn-ok">Confirmer</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirm-finalise<?php echo e($index); ?>" tabindex="-1" role="dialog"
          aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Vous êtes sur le point de transformer ce brouillon en <?php echo e($tbl); ?> officiel. <br> <br> Cela lui attribuera un numéro et vous permettra de l'envoyer à votre client. <br> <br>
                Cette action n'est pas réversible. Vous ne pourrez plus modifier ou effacer ce devis. <br> <br> Confirmez-vous cette action ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <a href="<?php echo e(url($road.'/statut/'.$data->id.'/finalisé')); ?>" class="btn btn-success btn-ok">Confirmer</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirm-signature<?php echo e($index); ?>" tabindex="-1" role="dialog"
          aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Marquer ce <?php echo e($tbl); ?> comme signé ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <a href="<?php echo e(url($road.'/statut/'.$data->id.'/signé')); ?>" class="btn btn-success btn-ok">Confirmer</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirm-payee<?php echo e($index); ?>" tabindex="-1" role="dialog"
          aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Marquer cette <?php echo e($tbl); ?> comme payée ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <a href="<?php echo e(url($road.'/statut/'.$data->id.'/payée')); ?>" class="btn btn-success btn-ok">Confirmer</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirm-cancel<?php echo e($index); ?>" tabindex="-1" role="dialog"
          aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               Voulez-vous vraiment annuler l'action de ce <?php echo e($tbl); ?> ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <a href="<?php echo e(url($road.'/cancel/'.$data->id)); ?>" class="btn btn-success btn-ok">Confirmer</a>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views////includes/dropdown.blade.php ENDPATH**/ ?>