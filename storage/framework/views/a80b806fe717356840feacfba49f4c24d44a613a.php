<?php $__env->startSection('content'); ?>

<div class="col-md-8">

    <div class="card">



        <div class="card-body">

            <form method="POST" action="<?php echo e(url('parametres/compte/update')); ?>">

                <?php echo csrf_field(); ?> 



                 <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <p class="text-danger"><?php echo e($error); ?></p>

                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 



                <div class="form-group row">

                    <label for="password" class="col-md-5 col-form-label">Mot de passe actuel</label>



                    <div class="col-md-6">

                        
                        <?php echo e(Form::input('password','current_password',null, ['class'=>'form-control', 'id'=>'password', 'autocomplete'=>'current-password'])); ?>


                    </div>

                </div>



                <div class="form-group row">

                    <label for="password" class="col-md-5 col-form-label">Nouveau mot de passe</label>



                    <div class="col-md-6">

                        <?php echo e(Form::input('password','new_password',null, ['class'=>'form-control', 'id'=>'new_password', 'autocomplete'=>'current-password'])); ?>


                    </div>

                </div>



                <div class="form-group row">

                    <label for="password" class="col-md-5 col-form-label">Confirmer nouveau mot de passe</label>



                    <div class="col-md-6">

                        <?php echo e(Form::input('password','new_confirm_password',null, ['class'=>'form-control', 'id'=>'new_confirm_password', 'autocomplete'=>'current-password'])); ?>


                    </div>

                </div>



                <div class="form-group row mb-0">

                    <div class="col-md-8">

                        <button type="submit" class="btn btn-primary">

                            Mettre a jour

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<script src="<?php echo e(asset('js/settings/validate.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('parametres/struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/parametres/compte/change.blade.php ENDPATH**/ ?>