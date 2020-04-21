<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-ellipsis-v fa-md fa-fw text-dark"></i>
</a>
<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
    @if( ($obj=='facture' || $obj=='devis') && $data->statut == 'provisoire')
    <a class="dropdown-item" href="" data-toggle="modal" data-target="#confirm-finalise{{ $index }}">Finaliser</a>
    @endif
    @if($obj != 'devis' || ($obj == 'devis' && $data->statut == 'provisoire'))
    <a class="dropdown-item" href="{{ url($road.'/edit/'.$data->id) }}">Modifier</a>
    <a class="dropdown-item" href="" data-toggle="modal" data-target="#confirm-delete{{ $index }}">Supprimer</a>
    @endif
    @if($obj=='devis' && ($data->statut == 'finalisé' || !isset($data->statut)))
    <a class="dropdown-item" href="" data-toggle="modal" data-target="#confirm-signature{{ $index }}">Marquer comme signé</a>
    <a class="dropdown-item" href="{{ url($road.'/statut/'.$data->id.'/refusé') }}">Marquer comme refusé</a>
    @endif
    @if($obj=='devis' && $data->statut == 'signé')
    <a class="dropdown-item" href="" data-toggle="modal" data-target="#confirm-cancel{{ $index }}">Annuler la signature</a>
    @endif
    @if($obj=='devis' && $data->statut == 'refusé')
    <a class="dropdown-item" href="" data-toggle="modal" data-target="#confirm-cancel{{ $index }}">Annuler le refus</a>
    @endif
    @if($obj=='facture' && ($data->statut == 'finalisé' || !isset($data->statut)))
    <a class="dropdown-item" href="">Marquer comme payée</a>
    @endif
    @if($obj=='facture' && $data->statut == 'payée')
    <a class="dropdown-item" href="">Annuler la paiement</a>
    @endif
    {{-- @if($obj=='facture' || $obj=='devis')
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="">Télécharger</a>
    <a class="dropdown-item" href="">Envoyer par e-mail</a>
    @endif --}}
    <div class="dropdown-divider"></div>
    <span class="dropdown-item disabled">Pour ce{{ ($obj=='client' || $obj=='devis') ? ' '.$obj : 'tte '.$obj }}</span>
    @if($obj=='société')
    <a class="dropdown-item" href="{{ url('clients/new/'.$data->id) }}">Créer un client</a>
    @endif
    @if($obj!='devis')
    <a class="dropdown-item" href="{{ url('path') }}">Créer un devis</a>
    @endif
    @if($obj!='facture')
    <a class="dropdown-item" href="">Créer une facture</a>
    @endif
    @if($obj=='facture')
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="">Duppliquer la facture</a>
    <a class="dropdown-item" href="">Duppliquer en devis</a>
    @endif
    @if($obj=='devis')
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="">Duppliquer le devis</a>
    <a class="dropdown-item" href="">Duppliquer en facture</a>
    @endif
</div>

<div class="modal fade" id="confirm-delete{{ $index }}" tabindex="-1" role="dialog"
          aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">Voulez-vous vraiment supprimer ce{{ ($obj=='client' || $obj=='devis') ? ' '.$obj : 'tte '.$obj }} ?</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <a href="{{ url($road.'/delete/'.$data->id) }}" class="btn btn-success btn-ok">Confirmer</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirm-finalise{{ $index }}" tabindex="-1" role="dialog"
          aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Vous êtes sur le point de transformer ce brouillon en {{ $obj }} officiel. <br> <br> Cela lui attribuera un numéro et vous permettra de l'envoyer à votre client. <br> <br>
                Cette action n'est pas réversible. Vous ne pourrez plus modifier ou effacer ce devis. <br> <br> Confirmez-vous cette action ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <a href="{{ url($road.'/statut/'.$data->id.'/finalisé') }}" class="btn btn-success btn-ok">Confirmer</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirm-signature{{ $index }}" tabindex="-1" role="dialog"
          aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Marquer ce {{ $obj }} comme signé ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <a href="{{ url($road.'/statut/'.$data->id.'/signé') }}" class="btn btn-success btn-ok">Confirmer</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirm-cancel{{ $index }}" tabindex="-1" role="dialog"
          aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               Voulez-vous vraiment annuler l'action de ce {{ $obj }} ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <a href="{{ url($road.'/cancel/'.$data->id) }}" class="btn btn-success btn-ok">Confirmer</a>
            </div>
        </div>
    </div>
</div>