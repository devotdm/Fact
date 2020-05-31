<!-- Sidebar -->
<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion menu overflow-y-auto" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e($path); ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo e(Auth::user()->prenom.' '.Auth::user()->nom); ?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php echo e(($title==='Accueil')?'active':''); ?>">
        <a class="nav-link" href="<?php echo e($path); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Accueil</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item <?php echo e(($ind==='1')?'active':''); ?>">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#CollapseClients" aria-expanded="true" aria-controls="CollapseClients">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Clients</span>
        </a>
        <div id="CollapseClients" class="collapse" aria-labelledby="head\ingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo e(url('clients/new')); ?>"><i class="fas fa-fw fa-plus-square text-success"></i><span>Ajouter un client</span></a>
                <a class="collapse-item" href="<?php echo e(url('clients/list')); ?>"><i class="fas fa-fw fa-tasks text-secondary"></i><span>Gérer les clients</span></a>
            </div>
        </div>
    </li>

    <li class="nav-item <?php echo e(($ind==='2')?'active':''); ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSocietes" aria-expanded="true" aria-controls="collapseSocietes">
            <i class="fas fa-fw fa-building"></i>
            <span>Sociétés</span>
        </a>
        <div id="collapseSocietes" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo e(url('societes/new')); ?>"><i class="fas fa-fw fa-plus-square text-success" ></i><span>Ajouter une société</span></a>
                <a class="collapse-item" href="<?php echo e(url('societes/list')); ?>"><i class="fas fa-fw fa-tasks text-secondary"></i><span>Gérer les sociétés</span></a>
            </div>
        </div>
    </li>

    <li class="nav-item <?php echo e(($ind==='3')?'active':''); ?>">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#CollapseDevis" aria-expanded="true" aria-controls="CollapseDevis">
            <i class="fas fa-fw fa-file-contract"></i>
            <span>Devis</span>
        </a>
        <div id="CollapseDevis" class="collapse" aria-labelledby="head\ingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo e(url('devis/new')); ?>"><i class="fas fa-fw fa-plus-square text-success" ></i><span>Ajouter un devis</span></a>
                <a class="collapse-item" href="<?php echo e(url('devis/list')); ?>"><i class="fas fa-fw fa-tasks text-secondary"></i><span>Gérer les devis</span></a>
            </div>
        </div>
    </li>

    <li class="nav-item <?php echo e(($ind==='4')?'active':''); ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFactures" aria-expanded="true" aria-controls="collapseFactures">
            <i class="fas fa-fw fa-file-invoice-dollar"></i>
            <span>Factures</span>
        </a>
        <div id="collapseFactures" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo e(url('factures/new')); ?>"><i class="fas fa-fw fa-plus-square text-success" ></i><span>Ajouter une facture</span></a>
                <a class="collapse-item" href="<?php echo e(url('factures/list')); ?>"><i class="fas fa-fw fa-tasks text-secondary"></i><span>Gérer les factures</span></a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <li class="nav-item <?php echo e(($ind==='5')?'active':''); ?>">
        <a class="nav-link collapsed" href="<?php echo e(url('parametres/')); ?>" >
            <i class="fas fa-fw fa-cog"></i>
            <span>Parametres</span>
        </a>
    </li>

<!--
    <li class="nav-item <?php echo e(($ind==='6')?'active':''); ?>">
        <a class="nav-link collapsed" href="" >
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Deconnecter</span>
        </a>
    </li>
    
-->
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar --><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views///////includes/menu.blade.php ENDPATH**/ ?>