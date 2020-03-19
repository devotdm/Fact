<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <h3 class="ml-2">Titre</h3>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        @if($obj=='devis' || $obj=='facture')
        <li class="nav-item">
            <a class="nav-link" href="#" id="finalise" role="button" title="Finaliser">
                <span class="badge badge-success" style="padding: 12px 5px"><i class="far fa-check-circle" style="font-size:22px"></i></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" id="edit" role="button" title="Modifier">
                <span class="badge badge-info" style="padding: 12px 5px"><i class="fas fa-pen" style="font-size:22px"></i></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" id="delete" role="button" title="Supprimer">
                <span class="badge badge-danger" style="padding: 12px 5px"><i class="fas fa-trash" style="font-size:22px"></i></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" id="signe" role="button" title="Signer">
                <span class="badge badge-success" style="padding: 12px 7px"><i class="fas fa-clipboard-check" style="font-size:22px"></i></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" id="mail" role="button" title="Envoyer par mail">
                <span class="badge badge-dark" style="padding: 12px 7px"><i class="far fa-envelope" style="font-size:22px"></i></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" id="download" role="button" title="Télécharger">
                <span class="badge badge-dark" style="padding: 12px 5px"><i class="fas fa-download" style="font-size:22px"></i></span>
            </a>
        </li>
        @endif
       <!--        <i class="far fa-calendar-times"></i>-->
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-lg fa-fw text-dark"></i>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
            </div>
        </li>
    </ul>

</nav>
<!-- End of Topbar -->