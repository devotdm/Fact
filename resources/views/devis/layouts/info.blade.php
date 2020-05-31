<h3 class="text-dark">Informations</h3>
<table class="table table-borderless mt-3">
    <tbody>
        <tr class="border-bottom">
            <td class="text-secondary w-50">Statut : </td>
            <td class="text-dark font-weight-bold">{{ ucfirst(trans($data->statut)) }}</td>
        </tr>
        <tr class="border-bottom">
            <td class="text-secondary">Créé le :</td>
            <td class="text-dark font-weight-bold">{{ $data->created_at->format('d M Y').' à '.$data->created_at->format('H:i') }}</td>
            {{-- <td class="text-dark font-weight-bold">{{ date('d F Y', strtotime($data->created_at)).' à '.date('h:m A', strtotime($data->created_at)) }}</td> --}}
        </tr>
        @if (isset($data->updated_at))
        <tr class="border-bottom">
            <td class="text-secondary">Derniére modification le  :</td>
            <td class="text-dark font-weight-bold">{{ $data->updated_at->format('d M Y').' à '.$data->updated_at->format('H:i') }}</td>
            {{-- <td class="text-dark font-weight-bold">{{ date('d F Y', strtotime($data->updated_at)).' à '.date('h:m A', strtotime($data->updated_at)) }}</td> --}}
        </tr> 
        @endif
        @if($data->statut != 'provisoire')
        <tr class="border-bottom">
            <td class="text-secondary">Finalisé le :</td>
            <td class="text-dark font-weight-bold">{{ $data->date_finalise->format('d M Y').' à '.$data->date_finalise->format('H:i') }}</td>
            {{-- <td class="text-dark font-weight-bold">{{ date('d F Y', strtotime($data->date_finalise)).' à '.date('h:m A', strtotime($data->date_finalise)) }}</td> --}}
        </tr>
        @endif
        @if($data->statut == 'signé')
        <tr class="border-bottom">
            <td class="text-secondary">Signé le :</td>
            <td class="text-dark font-weight-bold">{{ $data->date_signe->format('d M Y') }}</td>
            {{-- <td class="text-dark font-weight-bold">{{ date('d F Y', strtotime($data->date_signe)) }}</td> --}}
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