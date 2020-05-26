<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-ellipsis-v fa-md fa-fw text-dark"></i>
</a>
<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
    @if($data->statut == 'provisoire')
    <a class="dropdown-item" href="" data-toggle="modal" data-target="#confirm-finalise{{ $index }}">Finaliser</a>
    @endif

    @if( ($tbl != 'devis' && $tbl != 'facture') || $data->statut == 'provisoire' )
    <a class="dropdown-item" href="{{ url($road.'/edit/'.$data->id) }}">Modifier</a>
    <a class="dropdown-item" href="" data-toggle="modal" data-target="#confirm-delete{{ $index }}">Supprimer</a>
    @endif

    @if($tbl=='devis' && $data->statut == 'finalisé')
    <a class="dropdown-item" href="" data-toggle="modal" data-target="#confirm-signature{{ $index }}">Marquer comme signé</a>
    <a class="dropdown-item" href="{{ url($road.'/statut/'.$data->id.'/refusé') }}">Marquer comme refusé</a>
    @endif

    @if($tbl=='devis' && $data->statut == 'signé')
    <a class="dropdown-item" href="" data-toggle="modal" data-target="#confirm-cancel{{ $index }}">Annuler la signature</a>
    @endif

    @if($tbl=='devis' && $data->statut == 'refusé')
    <a class="dropdown-item" href="" data-toggle="modal" data-target="#confirm-cancel{{ $index }}">Annuler le refus</a>
    @endif

    @if($tbl=='facture' && $data->statut == 'finalisé')
    <a class="dropdown-item" href="" data-toggle="modal" data-target="#confirm-payee{{ $index }}">Marquer comme payée</a>
    @endif

    @if($tbl=='facture' && $data->statut == 'payée')
    <a class="dropdown-item" href="" data-toggle="modal" data-target="#confirm-cancel{{ $index }}">Annuler la paiement</a>
    @endif

    {{-- @if($tbl=='facture' || $tbl=='devis')
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="">Télécharger</a>
    <a class="dropdown-item" href="">Envoyer par e-mail</a>
    @endif
     --}}
    <div class="dropdown-divider"></div>
    <span class="dropdown-item disabled">Pour ce{{ ($tbl=='client' || $tbl=='devis') ? ' '.$tbl : 'tte '.$tbl }}</span>
    @if($tbl=='société')
    <a class="dropdown-item" href="{{ url('clients/new/'.$data->id) }}">Créer un client</a>
    @endif

    @if($tbl!='devis')
    <a class="dropdown-item" href="{{ url('devis/new/'.$data->id) }}">Créer un devis</a>
    @endif

    @if($tbl!='facture')
    <a class="dropdown-item" href="{{ url('factures/new/'.$data->id) }}">Créer une facture</a>
    @endif

    @if($tbl=='facture')
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="">Duppliquer la facture</a>
    <a class="dropdown-item" href="">Duppliquer en devis</a>
    @endif

    @if($tbl=='devis')
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="">Duppliquer le devis</a>
    <a class="dropdown-item" href="">Duppliquer en facture</a>
    @endif

</div>

<div class="modal fade" id="confirm-delete{{ $index }}" tabindex="-1" role="dialog"
          aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">Voulez-vous vraiment supprimer ce{{ ($tbl=='client' || $tbl=='devis') ? ' '.$tbl : 'tte '.$tbl }} ?</div>
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
                Vous êtes sur le point de transformer ce brouillon en {{ $tbl }} officiel. <br> <br> Cela lui attribuera un numéro et vous permettra de l'envoyer à votre client. <br> <br>
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
                Marquer ce {{ $tbl }} comme signé ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <a href="{{ url($road.'/statut/'.$data->id.'/signé') }}" class="btn btn-success btn-ok">Confirmer</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirm-payee{{ $index }}" tabindex="-1" role="dialog"
          aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Marquer cette {{ $tbl }} comme payée ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <a href="{{ url($road.'/statut/'.$data->id.'/payée') }}" class="btn btn-success btn-ok">Confirmer</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirm-cancel{{ $index }}" tabindex="-1" role="dialog"
          aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               Voulez-vous vraiment annuler l'action de ce {{ $tbl }} ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <a href="{{ url($road.'/cancel/'.$data->id) }}" class="btn btn-success btn-ok">Confirmer</a>
            </div>
        </div>
    </div>
</div>