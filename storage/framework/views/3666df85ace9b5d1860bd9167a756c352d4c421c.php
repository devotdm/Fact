
<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-ellipsis-v fa-md fa-fw text-dark"></i>
</a>
<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
    <?php if($obj=='facture' || $obj=='devis'): ?>
    <a class="dropdown-item" href="#">Finaliser</a>
    <?php endif; ?>
    <a class="dropdown-item" href="#">Modifier</a>
    <a class="dropdown-item" href="#">Supprimer</a>
    <?php if($obj=='devis'): ?>
    <a class="dropdown-item" href="#">Marquer comme signé</a>
    <a class="dropdown-item" href="#">Marquer comme refusé</a>
    <a class="dropdown-item" href="#">Annuler la signature</a>
    <?php endif; ?>
    <?php if($obj=='facture'): ?>
    <a class="dropdown-item" href="#">Marquer comme payée</a>
    <a class="dropdown-item" href="#">Annuler la paiement</a>
    <?php endif; ?>
    <?php if($obj=='facture' || $obj=='devis'): ?>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Télécharger</a>
    <a class="dropdown-item" href="#">Envoyer par e-mail</a>
    <?php endif; ?>
    <div class="dropdown-divider"></div>
    <span class="dropdown-item disabled">Pour ce<?php echo e(($obj=='client' || $obj=='devis') ? ' '.$obj : 'tte '.$obj); ?></span>
    <?php if($obj=='société'): ?>
    <a class="dropdown-item" href="#">Créer un client</a>
    <?php endif; ?>
    <?php if($obj!='facture'): ?>
    <a class="dropdown-item" href="#">Créer une facture</a>
    <?php endif; ?>
    <?php if($obj!='devis'): ?>
    <a class="dropdown-item" href="#">Créer un devis</a>
    <?php endif; ?>
    <?php if($obj=='facture'): ?>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Duppliquer la facture</a>
    <a class="dropdown-item" href="#">Duppliquer en devis</a>
    <?php endif; ?>
    <?php if($obj=='devis'): ?>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Duppliquer le devis</a>
    <a class="dropdown-item" href="#">Duppliquer en facture</a>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views////includes/dropdown.blade.php ENDPATH**/ ?>