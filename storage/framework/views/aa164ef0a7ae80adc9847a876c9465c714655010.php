<div class="toast show" id="toast" style="position: absolute; top: -20%; left: 50%; transform: translateX(-50%); transition: 0.5s ease-in; z-index: 9999999999">
    <div class="toast-header text-dark">
        <strong class="mr-auto">C'est fait</strong>
        
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" style="outline: none;">&times;</button>
    </div>
    <div class="toast-body"><?php echo e(Session::get('success')); ?></div>
</div><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views////includes/toast.blade.php ENDPATH**/ ?>