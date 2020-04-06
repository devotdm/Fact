<div class="row">
    <div class="col-lg-6 mb-3">
      <h3 class="text-dark">Informations</h3>
        <table class="table table-borderless mt-3">
            <tbody>
                <tr class="border-bottom">
                    <td class="text-secondary w-50">Statut : </td>
                    <td class="text-dark font-weight-bold">{{ ucfirst(trans($data->statut)) }}</td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Créé le :</td>
                    <td class="text-dark font-weight-bold">{{ date('d F Y', strtotime($data->created_at)).' à '.date('h:m A', strtotime($data->created_at)) }}</td>
                </tr>
                @if (isset($data->updated_at))
                <tr class="border-bottom">
                    <td class="text-secondary">Derniére modification le  :</td>
                    <td class="text-dark font-weight-bold">{{ date('d F Y', strtotime($data->updated_at)).' à '.date('h:m A', strtotime($data->updated_at)) }}</td>
                </tr> 
                @endif
                @if($data->statut == 'finalisé')
                <tr class="border-bottom">
                    <td class="text-secondary">Finalisé le :</td>
                    <td class="text-dark font-weight-bold">{{ date('d F Y', strtotime($data->date_finalise)).' à '.date('h:m A', strtotime($data->date_finalise)) }}</td>
                </tr>
                @endif
                @if($data->statut == 'signé')
                <tr class="border-bottom">
                    <td class="text-secondary">{{ ucfirst(trans($data->statut)) }} le :</td>
                    <td class="text-dark font-weight-bold">{{ date('d F Y', strtotime($data->date_signe)).' à '.date('h:m A', strtotime($data->date_signe)) }}</td>
                </tr>
                @endif
                @if($data->statut == 'payée')
                <tr class="border-bottom">
                    <td class="text-secondary">{{ ucfirst(trans($data->statut)) }} le :</td>
                    <td class="text-dark font-weight-bold">{{ date('d F Y', strtotime($data->date_payee)).' à '.date('h:m A', strtotime($data->date_payee)) }}</td>
                </tr>
                @endif
                @if($ind == 3 && isset($data->duree))
                 <tr class="border-bottom">
                    <td class="text-secondary">Durée de validité :</td>
                    <td class="text-dark font-weight-bold">{{ $data->duree.' jours' }}</td>
                </tr>
                @endif
                @if(isset($data->mot_cle))
                <tr class="border-bottom">
                    <td class="text-secondary">Mots clés :</td>
                    <td class="text-dark font-weight-bold">{{ $data->mot_cle }}</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    
    <div class="col-lg-6 mb-3">
        @if($data->statut == 'provisoire')
        <h3 class="text-dark">Votre devis est prete ?</h3>
        <p>Finalisez votre devis a l'aide du bouton<i class="far fa-check-circle ml-2 mr-2 text-success"></i>ci-dessus pour pouvoir l'envoyer au client. </p>
        <p>Attention un devis finalisé n'est plus modifiable.</p>
        @endif
        <h3 class="text-dark">Documents liés</h3>
        <p>aucun document lié </p>
    </div>

    <div class="col-lg-6 mb-3">
      <h3 class="text-dark">Destinataire</h3>
          @include($path.'includes.layouts.clients.info',['data'=> $dataC ,'_data'=> $dataS ])
    </div>


    <div class="col-lg-6 mb-3">
      <h3 class="text-dark">Conditions</h3>
  <table class="table table-borderless mt-3">
            <tbody>
                <tr class="border-bottom">
                    <td class="text-secondary w-50">Conditions de règlement :</td>
                    <td class="text-dark font-weight-bold">{{ $data->cond_reg }}</td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Mode de règlement :</td>
                    <td class="text-dark font-weight-bold">{{ $data->mode_reg }}</td>
                </tr>
                @if(isset($data->intr_retard))
                <tr class="border-bottom">
                    <td class="text-secondary">Intérêt de retard :</td>
                    <td class="text-dark font-weight-bold">{{ $data->intr_retard }}</td>
                </tr>
                @endif
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
            @foreach ($_data as $_data)
            <tr class="border-bottom">
                <td class="font-weight-bold">{{ $_data->type }}</td>
                <td class="font-weight-bold">{{ $_data->description }}</td>
                <td class="font-weight-bold text-right">{{ $_data->prix }}</td>
                <td class="font-weight-bold text-right">{{ $_data->quantity }}</td>
                <td class="font-weight-bold text-right">{{ $_data->tva }}</td>
                <td class="font-weight-bold text-right">{{ $_data->reduction }}</td>
                <td class="font-weight-bold text-right">{{ $_data->total }}</td>
            </tr>
            @endforeach
        
            <tr>
                <td colspan="5" class="font-weight-bold text-right pb-0"></td>
                <td class="font-weight-bold text-right">Total HT</td>
                <td class="font-weight-bold text-right">{{ $data->total_ht }}</td>
            </tr>
            <tr>
                <td colspan="5" class="font-weight-bold text-right pb-0"></td>
                <td class="font-weight-bold text-right">Total TVA</td>
                <td class="font-weight-bold text-right">{{ $data->total_tva }}</td>
            </tr>
            <tr>
                <td colspan="5" class="font-weight-bold text-right pb-0"></td>
                <td class="font-weight-bold text-right">Total TTC</td>
                <td class="font-weight-bold text-right">{{ $data->total }}</td>
            </tr>
        </table>
</div>

<p class="pb-5">DEVOSOFT S.A.R.L, TP : 50990690 - IF : 207224501 - ICE : 001853352000050 - CNSS : 5297016</p>