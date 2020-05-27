<h3 class="text-dark mt-2">Destinataire</h3>
    <div class="form-group">
        <label for="client_id"></label>
        <?php echo e(Form::select('client_id',$clients,(isset($client))?$client->id:null, ['class'=>'form-control w-50' , 'id' => 'destinataire'])); ?>

        <span class="dest text-danger"><?php echo e($errors->first('client_id')); ?></span>
    </div>
    <h3 class="text-dark mt-2">Informations</h3>
    <div class="form-group">
        <label for="duree">Durée de validité</label>
        <?php echo e(Form::input('number','duree',null, ['class'=>'form-control w-25', 'id'=>'duree' ,'placeholder' => 'jours'])); ?>

    </div>
    <div class="form-group">
        <label for="devise">Devise(requis)</label>
        <select class="form-control w-50" name="devise" id="devise">
            <option value="Dirham marocain">Dirham marocain</option>
        </select>
        
    </div>
    <div class="custom-control custom-checkbox mr-sm-2">
        <input type="checkbox" class="custom-control-input" id="tva_check">
        
        <label class="custom-control-label tva_label" for="tva_check">TVA non applicable</label>
    </div>

    <h3 class="text-dark mt-2">Articles</h3>

    <?php echo $__env->make($path.'includes.lignes',['articles' => $articles ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <h3 class="text-dark mt-2">Règlement</h3>
    <div class="form-group">
        <label for="cond_reg">Conditions de règlement</label><br>
        <select name="cond_reg" class="form-control w-50 d-inline" id="cond_reg">
            <option value="A réception">A réception</option>
            <option value="Fin du mois">Fin du mois</option>
        </select>
        
    </div>
    <div class="form-group">
        <label for="mode_reg">Mode de reglement</label><br>
        <select name="mode_reg" class="form-control w-50 d-inline" id="mode_reg">
            <option value="Chèque">Chèque</option>
            <option value="Carte bancaire">Carte bancaire</option>
            <option value="Especes">Especes</option>
        </select>
        
    </div>
    <div class="form-group">
        <label for="intr_retard">Interet de retard</label><br>
        <select name="intr_retard" class="form-control w-50 d-inline" id="intr_retard">
            <option value="">Pas d'intérets de retard</option>
            <option value="À préciser">À préciser</option>
        </select>
        
    </div>
    <h3 class="text-dark mt-2">Textes affichés sur le document</h3><br>
    <div class="form-group">
        <textarea class="form-control w-75" id="exampleFormControlTextarea1" rows="3" placeholder="Texte d'introduction (visible sur le devis)"></textarea>
    </div>
    <div class="form-group">
        <textarea class="form-control w-75" id="exampleFormControlTextarea1" rows="3" placeholder="Texte de conclusion (visible sur le devis)"></textarea>
    </div>

    <div class="form-group">
        <label for="pied">Pied de page :</label>
        <textarea class="form-control w-75" id="pied" rows="3" placeholder="Pied de page(visible sur la facture)" disabled> DEVOSOFT S.A.R.L.TP:50990690-IF:207224501-ICE:001853352000050-CNSS:5297016</textarea>
    </div>

    <div class="form-group">
        <textarea class="form-control w-75" id="exampleFormControlTextarea1" rows="3" placeholder="Conditions générales de vente (visible sur le devis)"></textarea>
    </div>
    <?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views///////devis/layouts/form.blade.php ENDPATH**/ ?>