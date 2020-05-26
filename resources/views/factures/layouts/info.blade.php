<h3 class="text-dark">Informations</h3>
<table class="table table-borderless mt-3">
    <tbody>
        <tr class="border-bottom">
            <td class="text-secondary w-50">Statut : </td>
            <td class="text-dark font-weight-bold">{{ ucfirst(trans($data->statut)) }}</td>
        </tr>
        <tr class="border-bottom">
            <td class="text-secondary">Créé le :</td>
            <td class="text-dark font-weight-bold">{{ $data->created_at }}</td>
        </tr>
        @if (isset($data->updated_at))
        <tr class="border-bottom">
            <td class="text-secondary">Derniére modification le  :</td>
            <td class="text-dark font-weight-bold">{{ $data->updated_at }}</td>
        </tr> 
        @endif
        @if($data->statut == 'finalisé')
        <tr class="border-bottom">
            <td class="text-secondary">Finalisé le :</td>
            <td class="text-dark font-weight-bold">{{ $data->date_finalise }}</td>
        </tr>
        @endif
        @if($data->statut == 'payée')
        <tr class="border-bottom">
            <td class="text-secondary">{{ ucfirst(trans($data->statut)) }} le :</td>
            <td class="text-dark font-weight-bold">{{ $data->date_payee }}</td>
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