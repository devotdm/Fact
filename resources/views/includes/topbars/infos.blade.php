<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <h3 class="ml-2"> {{ $title }} </h3>
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">


        <!--
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
-->
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            @if($obj == 'société')
            @include($path.'includes.dropdown',['index' => '00', 'road' => 'societes'])
            @elseif($obj == 'devis')
            @include($path.'includes.dropdown',['index' => '00', 'road' => $obj])
            @else
            @include($path.'includes.dropdown',['index' => '00', 'road' => $obj.'s'])
            @endif
        </li>

    </ul>

</nav>
<!-- End of Topbar -->