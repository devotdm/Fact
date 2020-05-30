<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
    <div class="card-header"><?php echo e(__('Register')); ?></div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo csrf_field(); ?>

            <div class="form-group row">
                <label for="nom" class="col-md-4 col-form-label text-md-right"><?php echo e(__('nom')); ?></label>

                <div class="col-md-6">
                    <input id="nom" type="text" class="form-control <?php if ($errors->has('nom')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nom'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="nom" value="<?php echo e(old('name')); ?>" required autocomplete="nom" autofocus>

                    <?php if ($errors->has('nom')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nom'); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="prenom " class="col-md-4 col-form-label text-md-right"><?php echo e(__('prenom ')); ?></label>

                <div class="col-md-6">
                    <input id="prenom " type="text" class="form-control <?php if ($errors->has('prenom ')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('prenom '); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="prenom " value="<?php echo e(old('prenom ')); ?>" required autocomplete="prenom " autofocus>

                    <?php if ($errors->has('prenom ')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('prenom '); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                    <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="pass" class="col-md-4 col-form-label text-md-right"><?php echo e(__('pass')); ?></label>

                <div class="col-md-6">
                    <input id="pass" type="password" class="form-control <?php if ($errors->has('pass')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('pass'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="pass" required autocomplete="new-password">

                    <?php if ($errors->has('pass')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('pass'); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

             <div class="form-group row">
                <label for="societe " class="col-md-4 col-form-label text-md-right"><?php echo e(__('Société  ')); ?></label>

                <div class="col-md-6">
                    <input id="societe" type="text" class="form-control <?php if ($errors->has('societe ')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('societe '); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="societe " value="<?php echo e(old('societe ')); ?>" required autocomplete="societe " autofocus>

                    <?php if ($errors->has('societe ')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('societe '); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="code_ice" class="col-md-4 col-form-label text-md-right"><?php echo e(__('code ICE')); ?></label>

                <div class="col-md-6">
                    <input id="code_ice" type="text" class="form-control <?php if ($errors->has('code_ice')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('code_ice'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="code_ice" value="<?php echo e(old('code_ice')); ?>" required autocomplete="code_ice" autofocus>

                    <?php if ($errors->has('code_ice')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('code_ice'); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>

           <div class="form-group row">
                <label for="adresse" class="col-md-4 col-form-label text-md-right"><?php echo e(__('adresse')); ?></label>

                <div class="col-md-6">
                    <textarea id="adresse" type="text" class="form-control <?php if ($errors->has('adresse')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('adresse'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="adresse" value="<?php echo e(old('adresse')); ?>" required autocomplete="adresse" autofocus></textarea> 

                    <?php if ($errors->has('adresse')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('adresse'); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>

               
           <div class="form-group row">
                <label for="code_postal" class="col-md-4 col-form-label text-md-right"><?php echo e(__('code postal')); ?></label>

                <div class="col-md-6">
                    <input id="code_postal" type="text" class="form-control <?php if ($errors->has('code_postal')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('code_postal'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="code_postal" value="<?php echo e(old('code_postal')); ?>" required autocomplete="code_postal" autofocus>

                    <?php if ($errors->has('code_postal')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('code_postal'); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>


           <div class="form-group row">
                <label for="ville" class="col-md-4 col-form-label text-md-right"><?php echo e(__('ville')); ?></label>

                <div class="col-md-6">
                    <input id="ville" type="text" class="form-control <?php if ($errors->has('ville')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('ville'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="ville" value="<?php echo e(old('ville')); ?>" required autocomplete="ville" autofocus>

                    <?php if ($errors->has('ville')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('ville'); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>


           <div class="form-group row">
                <label for="pays" class="col-md-4 col-form-label text-md-right"><?php echo e(__('pays')); ?></label>

                <div class="col-md-6">
                    <input id="pays" type="text" class="form-control <?php if ($errors->has('pays')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('pays'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="pays" value="<?php echo e(old('pays')); ?>" required autocomplete="pays" autofocus>

                    <?php if ($errors->has('pays')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('pays'); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>

          <div class="form-group row">
                <label for="numero telephone" class="col-md-4 col-form-label text-md-right"><?php echo e(__('numero telephone')); ?></label>

                <div class="col-md-6">
                    <input id="numero telephone" type="text" class="form-control <?php if ($errors->has('numero telephone')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('numero telephone'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="numero telephone" value="<?php echo e(old('numero telephone')); ?>" required autocomplete="numero telephone" autofocus>

                    <?php if ($errors->has('numero telephone')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('numero telephone'); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>

          <div class="form-group row">
                <label for="site" class="col-md-4 col-form-label text-md-right"><?php echo e(__('site internet')); ?></label>

                <div class="col-md-6">
                    <input id="site" type="text" class="form-control <?php if ($errors->has('site internet')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('site internet'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="site" value="<?php echo e(old('site internet')); ?>" required autocomplete="site" autofocus>

                    <?php if ($errors->has('site internet')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('site internet'); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>



             



        



            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        <?php echo e(__('Register')); ?>

                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/auth/register.blade.php ENDPATH**/ ?>