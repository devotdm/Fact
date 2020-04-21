
<div class="line">
    <span class="float-right mb-3" >
        <a href="" class="btn-link text-danger disabled d-block mb-2 c_ligne" title="Supprimer la ligne"><i class="fas fa-times fa-2x"></i></a>
        <a href="" class="btn-link text-dark d-block mb-2 d_ligne" title="Dupliquer la ligne"><i class="far fa-copy fa-2x"></i></a>
    </span>
    <p class="mb-2"><span class="badge badge-primary rounded-circle nbr" style="font-size:20px;">1</span></p>

    <div class="form-group">
        
        
        <span class="text-danger"><?php echo e($errors->first('type[]')); ?></span>
    </div>
    <div class="form-row form-group line_row">
        <div class="col">
            <label for="quantity">Quantite</label>
            <input name="quantity[]" type="number" class="form-control inp qtity" value="0">
            
            <span class="text-danger"><?php echo e($errors->first('quantity[]')); ?></span>
        </div>
        <div class="col">
            <label for="prix">Prix HT</label><br>
            <input name="prix[]" type="number" step="0.01" class="form-control inp ht" value="0">
            
        <span class="text-danger"><?php echo e($errors->first('prix[]')); ?></span>
        </div>
        <div class="col">
            <label for="tva">TVA</label>
            <input name="tva[]" type="number" step="0.01" class="form-control inp ltva tva" value="20">
            
        </div>
        <div class="col">
            <label for="reduction">Reduction</label>
            <input name="reduction[]" type="number" step="0.01" class="form-control inp reduction" value="0" placeholder="%">
            
        </div>
        <div class="col">
            <label for="total_">Total HT</label>
            <input type="number" step="0.01" class="form-control total_ht" readonly>
        </div>

        <div class="col">
            <label for="total">Total TTC</label>
            <input name="total[]" type="number" step="0.01" class="form-control total_ttc" readonly>
            
        </div>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description[]" class="form-control description" rows="5"></textarea>
        
    </div>
</div>



<div class="form-group div_ajout">
    <a href="" class="font-weight-bold text-decoration-none" id="btn"><i class="fas fa-plus mr-2"></i>AJOUTER UNE LIGNE</a>
</div>
<div class="form-group w-25">
    <label for="remise">Remise générale</label>
    <input name="remise" type="number" step="0.01" class="form-control" id="remise" value="0">
</div>
<div class="jumbotron p-3 text-dark font-weight-bold">
    <table class="table table-borderless text-dark text-right">
        <tr>
            <td class="w-50"></td>
            <td class="w-50">Total HT</td>
            <td><input type="text" name="total_ht" value="0" id="totalht" readonly style="width:90px;background:none;border:none;outline:none;"></td>
        </tr>
        <tr>
            <td></td>
            <td>Remise générale</td>
            <td><input type="text" name="remise" value="0" id="remise_span" readonly style="width:90px;background:none;border:none;outline:none;"></td>
        </tr>
        <tr>
            <td></td>
            <td>Total HT final</td>
            <td><input type="text" value="0" id="htfinal" readonly style="width:90px;background:none;border:none;outline:none;"></td>
        </tr>
        <tr>
            <td></td>
            <td>TVA</td>
            <td><input type="text" name="total_tva" value="0" id="tva_tot" readonly style="width:90px;background:none;border:none;outline:none;"></td>
        </tr>
        <tr>
            <td></td>
            <td>Total</td>
            <td><input type="text" name="total_ttc" value="0" id="total" readonly style="width:90px;background:none;border:none;outline:none;"></td>
        </tr>
    </table>
</div><?php /**PATH C:\xampp\htdocs\DEVOSOFT\Fact\resources\views///////includes/layouts/lignes.blade.php ENDPATH**/ ?>