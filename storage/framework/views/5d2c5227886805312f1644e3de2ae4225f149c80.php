<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <h3 class="ml-2"> <?php echo e($title); ?> </h3>
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
            <?php if($obj == 'société'): ?>
            <?php echo $__env->make($path.'includes.dropdown',['index' => '00', 'road' => 'societes', 'tbl'=> $obj], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php elseif($obj == 'devis'): ?>
            <?php echo $__env->make($path.'includes.dropdown',['index' => '00', 'road' => $obj, 'tbl'=> $obj], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php else: ?>
            <?php echo $__env->make($path.'includes.dropdown',['index' => '00', 'road' => $obj.'s', 'tbl'=> $obj], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </li>

    </ul>

</nav>
<!-- End of Topbar --><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views///////includes/topbars/infos.blade.php ENDPATH**/ ?>