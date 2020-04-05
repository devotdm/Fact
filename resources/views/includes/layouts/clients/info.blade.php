
<table class="table table-borderless mt-3">
    <tbody>
        @if($ind == 3 || $ind == 4)
        <tr class="border-bottom">
            <td class="text-secondary w-50">Nom complet :</td>
            <td class="text-dark font-weight-bold">{{ $data->prenom.' '.$data->nom }}</td>
        </tr>
        @endif
        @if(isset($data->fonction))
        <tr class="border-bottom">
            <td class="text-secondary w-50">Fonction :</td>
            <td class="text-dark font-weight-bold">{{ $data->fonction }}</td>
        </tr>
        @endif
        @if(isset($data->email))
        <tr class="border-bottom">
            <td class="text-secondary">Email : </td>
            <td class="text-dark font-weight-bold">{{ $data->email }}</td>
        </tr>
        @endif
        @if(isset($data->tele))
        <tr class="border-bottom">
            <td class="text-secondary">Numero de telephone : </td>
            <td class="text-dark font-weight-bold">{{ $data->tele }}</td>
        </tr>
        @endif
        
        @if(isset($data->societe_id))
        @if(isset($data->societe->nom))
        <tr class="border-bottom">
            <td class="text-secondary">Societe :</td>
            <td class="text-dark font-weight-bold"><a href="{{ url('societes/info/'.$data->societe_id) }}"> {{ $data->societe->nom }} </a></td>
        </tr>
        @endif
        @if(isset($data->societe->adresse))
        <tr class="border-bottom">
            <td class="text-secondary">Adresse :</td>
            <td class="text-dark font-weight-bold">{{ $data->societe->adresse }}</td>
        </tr>
        @endif
        @if(isset($data->pays))
        <tr class="border-bottom">
            <td class="text-secondary">Pays :</td>
            <td class="text-dark font-weight-bold">{{ $data->societe->pays }}</td>
        </tr>
        @endif
        @if(isset($data->societe->tele))
        <tr class="border-bottom">
            <td class="text-secondary">Numero de tel. de la société : </td>
            <td class="text-dark font-weight-bold">{{ $data->societe->tele }}</td>
        </tr>
        @endif
        @if(isset($data->site))
        <tr class="border-bottom">
            <td class="text-secondary">Site internet :</td>
            <td class="text-dark font-weight-bold">{{ $data->societe->site }}</td>
        </tr>
        @endif
        @if(isset($data->mot_cle))
        <tr class="border-bottom">
            <td class="text-secondary">Mot clés :</td>
            <td class="text-dark font-weight-bold">{{ $data->societe->mot_cle }}</td>
        </tr>
        @endif
        
        @else
        @if(isset($data->adresse))
        <tr class="border-bottom">
            <td class="text-secondary">Adresse :</td>
            <td class="text-dark font-weight-bold">{{ $data->adresse }}</td>
        </tr>
        @endif
        @if(isset($data->pays))
        <tr class="border-bottom">
            <td class="text-secondary">Pays :</td>
            <td class="text-dark font-weight-bold">{{ $data->pays }}</td>
        </tr>
        @endif
        @if(isset($data->site))
        <tr class="border-bottom">
            <td class="text-secondary">Site internet :</td>
            <td class="text-dark font-weight-bold">{{ $data->site }}</td>
        </tr>
        @endif
        @if(isset($data->mot_cle))
        <tr class="border-bottom">
            <td class="text-secondary">Mot clés :</td>
            <td class="text-dark font-weight-bold">{{ $data->mot_cle }}</td>
        </tr>
        @endif
        @endif

    </tbody>
</table>