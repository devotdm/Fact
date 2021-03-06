@foreach($data as $index => $data)
<div class="col-12 mb-3">
    <div class="card shadow mt-2">
        <div class="card-header bg-white py-3 d-flex flex-row align-items-center justify-content-between">
            <span><h5 class="card-title mb-3 font-weight-bold text-dark">
                @if($data->statut=='provisoire')
                <a href="{{ url('factures/info/'.$data->id) }}"> {{ ucfirst(trans($data->statut)) }}</a>
                @else
                <a href="{{ url('factures/info/'.$data->id) }}"> {{ $data->id_num }}</a><span class="text-success ml-2">{{ ucfirst(trans($data->statut)) }}</span>
                @endif
                </h5>
                <h6><a class="text-dark" href="{{ url('clients/info/'.$data->client->id) }}">{{ $data->client->prenom.' '.$data->client->nom }}</a>
                @if (isset($data->client->societe_id))
                 - <a class="text-dark" href="{{ url('societes/info/'.$data->client->societe_id) }}">{{ $data->client->societe->nom }}</a>
                @endif
                </h6>
            </span>
            <div class="dropdown no-arrow">
                @include($path.'includes.dropdown',['road' => 'factures'])
            </div>
        </div>
        <div class="card-body">
            <span class="card-text"><i class="fas fa-sticky-note mr-2"></i>{{ $data->total_ttc.' '.$data->devise }}</span>
            <span class="card-text ml-3"  title="crée le"><i class="far fa-clock mr-2"></i>{{ $data->created_at->format('d M Y') }}</span>
            @if ($data->statut=='payée')
                <span class="card-text ml-3" title="payée le"><i class="far fa-calendar-check mr-2"></i></i>{{ $data->created_at->format('d M Y') }}</span>
            @endif
        </div>
    </div>
</div>
@endforeach