<?php $__env->startSection('content'); ?>

<form method="post" class="w-100 text-dark" id="form1">
    <div class="form-group">
        <label for="pays">Pays par défaut pour les clients et sociétés</label>
        <select class="form-control w-50" name="pays" id="pays">
            <option value="maroc">Maroc</option>
            <option value="france">France</option>
        </select>
    </div>
    <div class="form-group">
        <label for="devise">Devise par défaut</label>
        <select class="form-control w-50" name="devise" id="devise">
            <option value="maroc">Euro (€)</option>
            <option value="france">Dirham marocain (د.م.)</option>
        </select>
    </div>
    <div class="form-group">
        <label for="article">Type d'article par défaut</label>
        <select class="form-control w-50" name="article" id="article">
            <option value="maroc">Service</option>
            <option value="france">Produit</option>
        </select>
    </div>
    <div class="form-group">
        <label for="tva">TVA(%) par défaut</label>
        <input type="number" class="form-control w-25" step="0.01" value="20" name="tva" id="tva">
    </div>
    <div class="form-group">
        <label for="pays">Conditions de règlement par défaut</label>
        <select class="form-control w-50" name="pays" id="pays">
            <option value="maroc">A reception</option>
            <option value="france">Fin de mois</option>
        </select>
    </div>
    <div class="form-group">
        <label for="devise">Mode de règlement par défaut</label>
        <select class="form-control w-50" name="devise" id="devise">
            <option value="maroc">Carte bancaire</option>
            <option value="france">PayPal</option>
        </select>
    </div>
    <div class="form-group">
        <label for="article">Intérêt de retard par défaut</label>
        <select class="form-control w-50" name="article" id="article">
            <option value="maroc">Pas d'intérêts de retard</option>
            <option value="france">A preciser</option>
        </select>
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-success mb-5">Enregistrer</button>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('parametres/struct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views/parametres/preferences/general.blade.php ENDPATH**/ ?>