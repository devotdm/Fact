<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    
    <h3 class="ml-2"> {{ $title }} </h3>
	<ul class="navbar-nav ml-auto">
	    <li class="nav-item">
	        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
	            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger"></i>
	            Se déconnecter
	        </a>

	        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	            @csrf
	        </form>
	    </li>
	</ul>

</nav>
<!-- End of Topbar -->