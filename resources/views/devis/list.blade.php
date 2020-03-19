@extends('struct')

@section('header')

@include($path.'includes.topbars.lists')

@endsection


@section('content')

<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link text-uppercase active" id="nav-tous-tab" data-toggle="tab" href="#nav-tous" role="tab" aria-controls="nav-tous" aria-selected="true">tous</a>
        <a class="nav-item nav-link text-uppercase" id="nav-provisoires-tab" data-toggle="tab" href="#nav-provisoires" role="tab" aria-controls="nav-provisoires" aria-selected="false">provisoires</a>
        <a class="nav-item nav-link text-uppercase" id="nav-finalisés-tab" data-toggle="tab" href="#nav-finalisés" role="tab" aria-controls="nav-finalisés" aria-selected="false">finalisés</a>
        <a class="nav-item nav-link text-uppercase" id="nav-refusés-tab" data-toggle="tab" href="#nav-refusés" role="tab" aria-controls="nav-refusés" aria-selected="true">refusés</a>
        <a class="nav-item nav-link text-uppercase" id="nav-signés-tab" data-toggle="tab" href="#nav-signés" role="tab" aria-controls="nav-signés" aria-selected="false">signés</a>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-tous" role="tabpanel" aria-labelledby="nav-tous-tab">
        <div class="row">
            <div class="col">
                <div class="card shadow mt-4">
                    <div class="card-header bg-white py-3 d-flex flex-row align-items-center justify-content-between">
                        <span><h5 class="card-title mb-3 font-weight-bold text-dark">Provisoire</h5>
                            <span class="text-primary ml-2">el mahdi essekhyry</span><br><br>
                            <h6 class="card-subtitle text-muted">  
                                <p class="card-text"><i class="fas fa-sticky-note mr-2">&nbsp; 1000.00د .م </i>
                                    &nbsp;&nbsp;&nbsp;<i class="far fa-clock mr-2"></i>06 mars 2020</p>
                            </h6></span>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-md fa-fw text-dark"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Finaliser</a>
                                <a class="dropdown-item" href="#">Modifier</a>
                                <a class="dropdown-item" href="#">Supprimer</a>
                                <a class="dropdown-item" href="#">Annuler la signature</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Télécharger</a>
                                <a class="dropdown-item" href="#">Envoyer par e-mail</a>
                                <div class="dropdown-divider"></div>
                                <span class="dropdown-item disabled">Pour ce devis :</span>
                                <a class="dropdown-item" href="#">Créer une facture</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Duppliquer le devis</a>
                                <a class="dropdown-item" href="#">Duppliquer en facture</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-provisoires" role="tabpanel" aria-labelledby="nav-provisoires-tab">
        <div class="row">
            <div class="col">
                <div class="card shadow mt-4">
                    <div class="card-header bg-white py-3 d-flex flex-row align-items-center justify-content-between">
                        <span><h5 class="card-title mb-3 font-weight-bold text-dark">Provisoire</h5>
                            <span class="text-primary ml-2">el mahdi essekhyry</span><br><br>
                            <h6 class="card-subtitle text-muted">  
                                <p class="card-text"><i class="fas fa-sticky-note mr-2">&nbsp; 1000.00د .م </i>
                                    &nbsp;&nbsp;&nbsp;<i class="far fa-clock mr-2"></i>06 mars 2020</p>
                            </h6></span>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-md fa-fw text-dark"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Finaliser</a>
                                <a class="dropdown-item" href="#">Modifier</a>
                                <a class="dropdown-item" href="#">Supprimer</a>
                                <a class="dropdown-item" href="#">Annuler la signature</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Télécharger</a>
                                <a class="dropdown-item" href="#">Envoyer par e-mail</a>
                                <div class="dropdown-divider"></div>
                                <span class="dropdown-item disabled">Pour ce devis :</span>
                                <a class="dropdown-item" href="#">Créer une facture</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Duppliquer le devis</a>
                                <a class="dropdown-item" href="#">Duppliquer en facture</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-finalisés" role="tabpanel" aria-labelledby="nav-finalisés-tab">
        <div class="row">
            <div class="col">
                <div class="card shadow mt-4">
                    <div class="card-header bg-white py-3 d-flex flex-row align-items-center justify-content-between">
                        <span><h5 class="card-title mb-3 font-weight-bold text-dark">Provisoire</h5>
                            <span class="text-primary ml-2">el mahdi essekhyry</span><br><br>
                            <h6 class="card-subtitle text-muted">  
                                <p class="card-text"><i class="fas fa-sticky-note mr-2">&nbsp; 1000.00د .م </i>
                                    &nbsp;&nbsp;&nbsp;<i class="far fa-clock mr-2"></i>06 mars 2020</p>
                            </h6></span>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-md fa-fw text-dark"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Finaliser</a>
                                <a class="dropdown-item" href="#">Modifier</a>
                                <a class="dropdown-item" href="#">Supprimer</a>
                                <a class="dropdown-item" href="#">Annuler la signature</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Télécharger</a>
                                <a class="dropdown-item" href="#">Envoyer par e-mail</a>
                                <div class="dropdown-divider"></div>
                                <span class="dropdown-item disabled">Pour ce devis :</span>
                                <a class="dropdown-item" href="#">Créer une facture</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Duppliquer le devis</a>
                                <a class="dropdown-item" href="#">Duppliquer en facture</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-refusés" role="tabpanel" aria-labelledby="nav-refusés-tab">
        <div class="row">
            <div class="col">
                <div class="card shadow mt-4">
                    <div class="card-header bg-white py-3 d-flex flex-row align-items-center justify-content-between">
                        <span><h5 class="card-title mb-3 font-weight-bold text-dark">Provisoire</h5>
                            <span class="text-primary ml-2">el mahdi essekhyry</span><br><br>
                            <h6 class="card-subtitle text-muted">  
                                <p class="card-text"><i class="fas fa-sticky-note mr-2">&nbsp; 1000.00د .م </i>
                                    &nbsp;&nbsp;&nbsp;<i class="far fa-clock mr-2"></i>06 mars 2020</p>
                            </h6></span>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-md fa-fw text-dark"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Finaliser</a>
                                <a class="dropdown-item" href="#">Modifier</a>
                                <a class="dropdown-item" href="#">Supprimer</a>
                                <a class="dropdown-item" href="#">Annuler la signature</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Télécharger</a>
                                <a class="dropdown-item" href="#">Envoyer par e-mail</a>
                                <div class="dropdown-divider"></div>
                                <span class="dropdown-item disabled">Pour ce devis :</span>
                                <a class="dropdown-item" href="#">Créer une facture</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Duppliquer le devis</a>
                                <a class="dropdown-item" href="#">Duppliquer en facture</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-signés" role="tabpanel" aria-labelledby="nav-signés-tab">
        <div class="row">
            <div class="col">
                <div class="card shadow mt-4">
                    <div class="card-header bg-white py-3 d-flex flex-row align-items-center justify-content-between">
                        <span><h5 class="card-title mb-3 font-weight-bold text-dark">Provisoire</h5>
                            <span class="text-primary ml-2">el mahdi essekhyry</span><br><br>
                            <h6 class="card-subtitle text-muted">  
                                <p class="card-text"><i class="fas fa-sticky-note mr-2">&nbsp; 1000.00د .م </i>
                                    &nbsp;&nbsp;&nbsp;<i class="far fa-clock mr-2"></i>06 mars 2020</p>
                            </h6></span>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-md fa-fw text-dark"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Finaliser</a>
                                <a class="dropdown-item" href="#">Modifier</a>
                                <a class="dropdown-item" href="#">Supprimer</a>
                                <a class="dropdown-item" href="#">Annuler la signature</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Télécharger</a>
                                <a class="dropdown-item" href="#">Envoyer par e-mail</a>
                                <div class="dropdown-divider"></div>
                                <span class="dropdown-item disabled">Pour ce devis :</span>
                                <a class="dropdown-item" href="#">Créer une facture</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Duppliquer le devis</a>
                                <a class="dropdown-item" href="#">Duppliquer en facture</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection