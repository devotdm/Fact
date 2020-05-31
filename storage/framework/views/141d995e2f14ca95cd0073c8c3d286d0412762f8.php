<?php $__env->startSection('content'); ?>

<?php echo e(Form::model($user,['url' => 'parametres/update' , 'method' => 'put'])); ?>

    <?php echo csrf_field(); ?>

    <div class="form-group row">
        <label for="nom" class="col-md-2 text-dark col-form-label">Nom</label>

        <div class="col-md-6">
        	<?php echo e(Form::input('text','nom',null, ['class'=>'form-control', 'required', 'id'=>'nom'])); ?>


 
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($errors->first('nom')); ?></strong>
                </span>
        </div>
    </div>

    <div class="form-group row">
        <label for="prenom" class="col-md-2 text-dark col-form-label">Prenom </label>

        <div class="col-md-6">
            <?php echo e(Form::input('text','prenom',null, ['class'=>'form-control', 'required', 'id'=>'prenom'])); ?>


    
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($errors->first('prenom')); ?></strong>
                </span>
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-2 text-dark col-form-label">E-Mail</label>

        <div class="col-md-6">
            <?php echo e(Form::input('email','email',null, ['class'=>'form-control', 'required', 'id'=>'email'])); ?>


   
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
        </div>
    </div>

     <div class="form-group row">
        <label for="societe" class="col-md-2 text-dark col-form-label">Société  </label>

        <div class="col-md-6">
            <?php echo e(Form::input('text','societe',null, ['class'=>'form-control', 'required', 'id'=>'societe'])); ?>


     
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($errors->first('societe')); ?></strong>
                </span>
        </div>
    </div>

    <div class="form-group row">
        <label for="code_ice" class="col-md-2 text-dark col-form-label">Code ICE</label>

        <div class="col-md-6">
            <?php echo e(Form::input('text','code_ice',null, ['class'=>'form-control', 'required', 'id'=>'code_ice'])); ?>


      
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($errors->first('code_ice')); ?></strong>
                </span>
        </div>
    </div>

    <div class="form-group row">
        <label for="code_cnss" class="col-md-2 text-dark col-form-label">Code CNSS</label>

        <div class="col-md-6">
            <?php echo e(Form::input('text','code_cnss',null, ['class'=>'form-control', 'required', 'id'=>'code_cnss'])); ?>


       
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($errors->first('code_cnss')); ?></strong>
                </span>
        </div>
    </div>

   <div class="form-group row">
        <label for="adresse" class="col-md-2 text-dark col-form-label">Adresse</label>

        <div class="col-md-6">
             
            <?php echo e(Form::textarea('adresse',null, ['rows' => '3' ,'class'=>'form-control', 'required', 'id'=>'adresse'])); ?>


     
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($errors->first('adresse')); ?></strong>
                </span>
        </div>
    </div>

       
   <div class="form-group row">
        <label for="codep" class="col-md-2 text-dark col-form-label">Code postal</label>

        <div class="col-md-6">
            <?php echo e(Form::input('text','codep',null, ['class'=>'form-control', 'required', 'id'=>'codep'])); ?>


   
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($errors->first('codep')); ?></strong>
                </span>
        </div>
    </div>


   <div class="form-group row">
        <label for="ville" class="col-md-2 text-dark col-form-label">ville</label>

        <div class="col-md-6">
            <?php echo e(Form::input('text','ville',null, ['class'=>'form-control', 'required', 'id'=>'ville'])); ?>


   
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($errors->first('ville')); ?></strong>
                </span>
        </div>
    </div>


   <div class="form-group row">
        <label for="pays" class="col-md-2 text-dark col-form-label">pays</label>

        <div class="col-md-6">
            <?php echo e(Form::input('text','pays',null, ['class'=>'form-control', 'required', 'id'=>'pays'])); ?>


  
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($errors->first('pays')); ?></strong>
                </span>
        </div>
    </div>

  <div class="form-group row">
        <label for="tele" class="col-md-2 text-dark col-form-label">Numero telephone</label>

        <div class="col-md-6">
           <?php echo e(Form::input('text','tele',null, ['class'=>'form-control', 'required', 'id'=>'tele'])); ?>


  
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($errors->first('tele')); ?></strong>
                </span>
        </div>
    </div>

  <div class="form-group row">
        <label for="site" class="col-md-2 text-dark col-form-label">Site internet</label>

        <div class="col-md-6">
            <?php echo e(Form::input('text','site',null, ['class'=>'form-control', 'required', 'id'=>'site'])); ?>


  
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($errors->first('site')); ?></strong>
                </span>
        </div>
    </div>
    
    <div class="form-group row mb-3">
        <div class="col-md-6">
            <button type="submit" class="btn btn-primary">
                Enregistrer
            </button>
        </div>
    </div>
</form>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<script src="<?php echo e(asset('js/settings/validate.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('parametres/struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/parametres/compte/update.blade.php ENDPATH**/ ?>