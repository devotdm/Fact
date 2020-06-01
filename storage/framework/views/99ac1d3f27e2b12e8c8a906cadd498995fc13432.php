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

        <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/b/bf/TfNSW_F.png">

        <style type="text/css">
            body * {
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; 
            }
            body {
              overflow-x: hidden;
            }

          .ml11 {
  font-weight: 700;
  font-size: 3.5em;
}

.ml11 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.1em;
  padding-right: 0.05em;
  padding-bottom: 0.15em;
}

.ml11 .line {
  opacity: 0;
  position: absolute;
  left: 0;
  height: 100%;
  width: 3px;
  background-color: #fff;
  transform-origin: 0 50%;
}

.ml11 .line1 { 
  top: 0; 
  left: 0;
}

.ml11 .letter {
  display: inline-block;
  line-height: 1em;
}
        </style>


    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <?php echo $__env->make($path.'includes.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">
                    
                    <?php if(Session::has('success')): ?>
                    <?php echo $__env->make($path.'includes.toast', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                    
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
                    <div class="modal-body">Vous etes sur?</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Retour</button>
                        <a class="btn btn-primary" href="<?php echo e(route('logout')); ?>" 
                         onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">Confirmer</a>
                    </div>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>

                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo e(asset('jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/js/bootstrap.bundle.js')); ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="<?php echo e(asset('bootstrap/js/bootstrap-tagsinput.js')); ?>"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo e(asset('jquery-easing/jquery.easing.min.js')); ?>"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo e(asset('js/sidebar.js')); ?>"></script>
        <script src="<?php echo e(asset('js/script.js')); ?>"></script>
        <script src="<?php echo e(asset('js/tagsinput.js')); ?>"></script>

        <script>
            $(document).ready(function(){
                $(".toast").toast();
                $(".toast").css("top","1%");
                setTimeout(function(){
                    $(".toast").css("top","-20%");
                },5000);
            });
        </script>


       <script type="text/javascript">
  // Wrap every letter in a span
var textWrapper = document.querySelector('.ml11 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml11 .line',
    scaleY: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 700
  })
  .add({
    targets: '.ml11 .line',
    translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 10],
    easing: "easeOutExpo",
    duration: 700,
    delay: 100
  }).add({
    targets: '.ml11 .letter',
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=775',
    delay: (el, i) => 34 * (i+1)
  }).add({
    targets: '.ml11',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
       </script>



<script type="text/javascript">
   window.requestAnimFrame = (function(){
  return  window.requestAnimationFrame       ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame    ||
          function( callback ){
            window.setTimeout(callback, 1000 / 23);
          };
})();


$(function(){
  $(window).resize(function(){
    $("#playArea").attr({
      'width': $('#content').width()
    });
    
    width = $('#content').width();
    
  });
  $(window).resize();
});

var Point = function(){
  this._size = 0.5;
  this._x = 0;
  this._y = 0;
  this._direction = 0;
  this._velocity = 0;
  this._distances = [];
  this._neighboors = [];
  this._randomization = 0;

  this.__collection = null;
  
  
  this._step = function(aCollection){

    var modifiedVelocity = this._velocity*1 * ((Math.random() * this._randomization+1)/10);
    var direction = (Math.random()*2%2 >1)?-1:1;

    this._direction =  this._direction*1 + ((Math.random() * this._randomization) * direction);
    var radianAngle = this._direction * Math.PI / 180;

    
    this._x = (this._x * 1) + (modifiedVelocity * Math.cos(radianAngle) * 1);
    this._y = (this._y * 1) + (modifiedVelocity * Math.sin(radianAngle) * 1);

    if(this._x > width) this._x = 0;
    if(this._x < 0) this._x = width;
    if(this._y > height) this._y = 0;
    if(this._y < 0) this._y = height;
 
    this.__collection = aCollection;
    

  }
  
  this._computeNeighboors = function() {
    if(this.__collection == null)  return;

    aCollection = this.__collection;
    //compute the closest neighboor
    this._distances = [];
    for(i=0; i < aCollection.length; i++){
      
      if(aCollection[i]._x != this._x &&
         aCollection[i]._y != this._y){


        this._distances.push({
          pointIndex: i,
          pointObj: aCollection[i],
          distance: Math.sqrt( 
            Math.pow((this._x - aCollection[i]._x), 2) + 
            Math.pow((this._y - aCollection[i]._y), 2)
          )
        });
      }
    }
    this._distances.sort(function(a,b){ 
      defaultReturn = 0;
      if(a.distance < b.distance) defaultReturn = -1;
      if(a.distance > b.distance) defaultReturn = 1;
      return defaultReturn

    });
    
    this._neighboors = this._distances.slice(0,3);
  }

  
  this.draw = function(context){
    this._computeNeighboors();
    
    //draw connection lines
    
    context.lineWidth = 0.25;
    context.strokeStyle = '#666';
    
    context.beginPath();    
    for(i=0; i<this._neighboors.length; i++) {

        context.moveTo(this._x, this._y);
        context.lineTo(this._neighboors[i].pointObj._x,   this._neighboors[i].pointObj._y);
      
        context.lineWidth = 0.10 + 5 / this._neighboors[i].distance;
    }
    context.closePath();

    context.stroke();
    
    context.beginPath();
    context.arc(this._x, this._y, this._size*this._velocity, 0, 2 * Math.PI, false);
    context.fillStyle = '#999';
    context.strokeStyle = '#666';
    context.lineWidth = 0.5;
    context.fill();
    context.stroke();
    
    context.beginPath();
    context.arc(this._x, this._y, this._size, 0, 2 * Math.PI, false);
    context.fillStyle = '#666';
    context.fill();
    
//    ctx.fillText(this._direction.toFixed(2), this._x, this._y);
    
  }
}


var aPoints = [];
var can, ctx, interval, width, height;
var numPoints = 50;
/* var distanceTreshold = 100; */

function init() {
  can = document.getElementById("playArea");
  ctx = can.getContext("2d");
  width = $('body').width();
  height = $('body').height();
  
  for(x=0; x<numPoints; x++){
    var newPoint = new Point();
    newPoint._size = (Math.random() * (3 - 0.5) + 0.5).toFixed(2);
    newPoint._x = (Math.random() * width).toFixed(0);
    newPoint._y = (Math.random() * height).toFixed(0);
    newPoint._direction = (Math.random() * 360).toFixed(2);
    newPoint._velocity = (Math.random() * (4 - 0.1) + 0.2).toFixed(2);
    newPoint._randomization = (Math.random() * (10 - 0) + 0).toFixed(2);
    aPoints.push(newPoint);
  }

  animate();
}

function animate(){
  for(x=0; x<numPoints; x++){
    aPoints[x]._step(aPoints);
  }
  requestAnimFrame( animate );
  draw();
}

function draw(){
  ctx.save();

  ctx.clearRect(0,0,width,height);
  
  for(x=0; x<numPoints; x++){
    aPoints[x].draw(ctx);
  }
  
  ctx.restore();
}

init();
</script>


  
        <?php echo $__env->yieldContent('scripts'); ?>

    </body>

</html>
<?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/struct.blade.php ENDPATH**/ ?>