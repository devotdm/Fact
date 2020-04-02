
<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-ellipsis-v fa-md fa-fw text-dark"></i>
</a>
<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
    @if($obj=='facture' || $obj=='devis')
    <a class="dropdown-item" href="#">Finaliser</a>
    @endif
    <a class="dropdown-item" href="#">Modifier</a>
    <a class="dropdown-item" href="#">Supprimer</a>
    @if($obj=='devis')
    <a class="dropdown-item" href="#">Marquer comme signé</a>
    <a class="dropdown-item" href="#">Marquer comme refusé</a>
    <a class="dropdown-item" href="#">Annuler la signature</a>
    @endif
    @if($obj=='facture')
    <a class="dropdown-item" href="#">Marquer comme payée</a>
    <a class="dropdown-item" href="#">Annuler la paiement</a>
    @endif
    @if($obj=='facture' || $obj=='devis')
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Télécharger</a>
    <a class="dropdown-item" href="#">Envoyer par e-mail</a>
    @endif
    <div class="dropdown-divider"></div>
    <span class="dropdown-item disabled">Pour ce{{ ($obj=='client' || $obj=='devis') ? ' '.$obj : 'tte '.$obj }}</span>
    @if($obj=='société')
    <a class="dropdown-item" href="#">Créer un client</a>
    @endif
    @if($obj!='facture')
    <a class="dropdown-item" href="#">Créer une facture</a>
    @endif
    @if($obj!='devis')
    <a class="dropdown-item" href="#">Créer un devis</a>
    @endif
    @if($obj=='facture')
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Duppliquer la facture</a>
    <a class="dropdown-item" href="#">Duppliquer en devis</a>
    @endif
    @if($obj=='devis')
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Duppliquer le devis</a>
    <a class="dropdown-item" href="#">Duppliquer en facture</a>
    @endif
</div>
