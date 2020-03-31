<?php $__env->startSection('content'); ?>

<ul class="list-group">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
    <li class="list-group-item">Porta ac consectetur ac</li>
    <li class="list-group-item">Vestibulum at eros</li>
</ul>
<a href="<?php echo e(url('parametres/types_articles/new')); ?>" class="btn btn-success mt-3">Ajouter un type d'article</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('parametres/struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/parametres/types_articles/list.blade.php ENDPATH**/ ?>