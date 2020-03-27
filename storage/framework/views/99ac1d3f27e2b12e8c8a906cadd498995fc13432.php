<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo e($title); ?></title>

        <link href="<?php echo e(asset('fontawesome-free/css/all.css')); ?>" rel="stylesheet" type="text/css">

        <link href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('bootstrap/css/bootstrap-tagsinput.css')); ?>" rel="stylesheet">
        
        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/tagsinput.css')); ?>" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <?php echo $__env->make($path.'includes.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">
                   
                    <?php echo $__env->yieldContent('header'); ?>

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <?php echo $__env->yieldContent('content'); ?>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->



            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo e(asset('jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/js/bootstrap.bundle.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/js/bootstrap-tagsinput.js')); ?>"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo e(asset('jquery-easing/jquery.easing.min.js')); ?>"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo e(asset('js/sidebar.js')); ?>"></script>
        <script src="<?php echo e(asset('js/script.js')); ?>"></script>
        <script src="<?php echo e(asset('js/scripts.js')); ?>"></script>
        <script src="<?php echo e(asset('js/tagsinput.js')); ?>"></script>
        
        <!-- VueJs -->
<!--
        <script src="<?php echo e(asset('vuejs/app.js')); ?>"></script>
        <script src="<?php echo e(asset('vuejs/script.js')); ?>"></script>
-->

    </body>

</html>
<?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/struct.blade.php ENDPATH**/ ?>