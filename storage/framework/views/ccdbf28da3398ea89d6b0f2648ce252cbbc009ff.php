<?php $__env->startSection('header'); ?>
 

<?php echo $__env->make($path.'includes.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<center><h1 class="ml11">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters">Devosoft</span>
  </span>
</h1></center>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<canvas id="playArea" width="300" height="20"></canvas>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div id="inam" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
             <div class="container">
              <div class="row">
                <div class="col-sm-12 col-lg-4">
                  <div class="card" class="card-img-top">
                    <img src="<?php echo e(asset('slide/img2.jpg')); ?>" class="card-img-top">
                    <div class="card-body">
                      <h4 class="card-title">Vous avez des problèmes sur votre entreprise?</h4>
                      <p class="card-text">Bienvenue à nos précieux clients, nous vous remercions de votre service et vous aidons à résoudre vos problèmes. Merci de votre visite sur notre site Web.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                  <div class="card" style="width: 300px;">
                    <img src="<?php echo e(asset('slide/img3.jpg')); ?>" class="card-img-top">
                    <div class="card-body">
                      <h4 class="card-title">Vous avez des problèmes sur votre entreprise?</h4>
                      <p class="card-text">Bienvenue à nos précieux clients, nous vous remercions de votre service et vous aidons à résoudre vos problèmes. Merci de votre visite sur notre site Web.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                  <div class="card" style="width: 300px;">
                    <img src="<?php echo e(asset('slide/img1.jpg')); ?>" class="card-img-top">
                    <div class="card-body">
                      <h4 class="card-title">Vous avez des problèmes sur votre entreprise?</h4>
                      <p class="card-text">Bienvenue à nos précieux clients, nous vous remercions de votre service et vous aidons à résoudre vos problèmes. Merci de votre visite sur notre site Web.</p>
                    </div>
                  </div>
                </div>
              </div>
             </div>
          </div>
          <div class="carousel-item">
             <div class="container">
              <div class="row">
                <div class="col-sm-12 col-lg-4">
                  <div class="card" style="width: 300px;margin: auto;">
                    <img src="<?php echo e(asset('slide/img1.jpg')); ?>" class="card-img-top">
                    <div class="card-body">
                      <h4 class="card-title">Vous avez des problèmes sur votre entreprise?</h4>
                      <p class="card-text">Bienvenue à nos précieux clients, nous vous remercions de votre service et vous aidons à résoudre vos problèmes. Merci de votre visite sur notre site Web.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                  <div class="card" style="width: 300px;">
                    <img src="<?php echo e(asset('slide/img3.jpg')); ?>" class="card-img-top">
                    <div class="card-body">
                      <h4 class="card-title">Vous avez des problèmes sur votre entreprise?</h4>
                      <p class="card-text">Bienvenue à nos précieux clients, nous vous remercions de votre service et vous aidons à résoudre vos problèmes. Merci de votre visite sur notre site Web.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                  <div class="card" style="width: 300px;">
                    <img src="<?php echo e(asset('slide/img2.jpg')); ?>" class="card-img-top">
                    <div class="card-body">
                      <h4 class="card-title">Vous avez des problèmes sur votre entreprise?</h4>
                      <p class="card-text">Bienvenue à nos précieux clients, nous vous remercions de votre service et vous aidons à résoudre vos problèmes. Merci de votre visite sur notre site Web.</p>
                    </div>
                  </div>
                </div>
              </div>
             </div>
          </div>
        </div>
        <a href="#inam" class="carousel-control-prev" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#inam" class="carousel-control-next" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>



<!-- Footer -->
<footer class="page-footer font-small indigo">

  <!-- Footer Links -->
  <div class="container">

    <!-- Grid row-->
    <div class="row text-center d-flex justify-content-center pt-5 mb-3">

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">About us</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">Products</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">Awards</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">Help</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">Contact</a>
        </h6>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="rgba-white-light" style="margin: 0 15%;">

    <!-- Grid row-->
    <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

      <!-- Grid column -->
      <div class="col-md-8 col-12 mt-5">
        <p style="line-height: 1.7rem">Contactez Nous</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

    <!-- Grid row-->
    <div class="row pb-3">

      <!-- Grid column -->
      <div class="col-md-12">

        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic"><center>
            <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic">
            <i class="fab fa-pinterest fa-lg white-text"> </i>
          </a></center>

        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  
  

</footer>

  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/index.blade.php ENDPATH**/ ?>