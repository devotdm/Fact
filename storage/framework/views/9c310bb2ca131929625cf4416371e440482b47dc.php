<!-- Sidebar -->
<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion menu overflow-y-auto border-right" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <div class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e($path); ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-fw fa-cog"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Paramètres</div>
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <li class="nav-item <?php echo e(($ind==='5')?'active':''); ?>">
        <a class="nav-link collapsed" href="<?php echo e(url('parametres/update')); ?>" >
            <span>Cordonnées</span>
        </a>
    </li>

    <li class="nav-item <?php echo e(($ind==='6')?'active':''); ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSocietes" aria-expanded="true" aria-controls="collapseSocietes">
            <span>Compte</span>
        </a>
        <div id="collapseSocietes" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo e(url('parametres/compte/change')); ?>"><span>Changer mot de passe</span></a>
                <a class="collapse-item" href="<?php echo e(url('parametres/compte/delete')); ?>"><span>Supprimer mon compte</span></a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo e(url('/')); ?>" >
            <span>Retour</span>
        </a>
    </li>
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar --><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views////parametres/includes/menu.blade.php ENDPATH**/ ?>