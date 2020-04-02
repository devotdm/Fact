<div class="line">
    <span class="float-right mb-3" >
        <a href="" class="btn-link text-danger disabled d-block mb-2 c_ligne" title="Supprimer la ligne"><i class="fas fa-times fa-2x"></i></a>
        <a href="" class="btn-link text-dark d-block mb-2 d_ligne" title="Dupliquer la ligne"><i class="far fa-copy fa-2x"></i></a>
    </span>
    <p class="mb-2"><span class="badge badge-primary rounded-circle nbr" style="font-size:20px;">1</span></p>

    <div class="form-group">
        <label for="type">Type</label><br>
        <select class="form-control w-50 d-inline" id="type">
            <option>Service</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class="form-row form-group line_row">
        <div class="col">
            <label for="qtity">Quantite</label>
            <input type="number" class="form-control inp qtity" value="0">
        </div>
        <div class="col">
            <label for="ht">Prix HT</label><br>
            <input type="number" step="0.01" class="form-control inp ht" value="0">
        </div>
        <div class="col">
            <label for="tva">TVA</label>
            <input type="number" step="0.01" class="form-control inp ltva tva" value="20">
        </div>
        <div class="col">
            <label for="reduction">Reduction</label>
            <input type="number" step="0.01" class="form-control inp reduction" value="0" placeholder="%">
        </div>
        <div class="col">
            <label for="total_ht">Total HT</label>
            <input type="number" step="0.01" class="form-control total_ht" readonly>
        </div>

        <div class="col">
            <label for="total_ttc">Total TTC</label>
            <input type="number" step="0.01" class="form-control total_ttc" readonly>
        </div>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control description" rows="5"></textarea>
    </div>
</div>


<div class="form-group div_ajout">
    <a href="" class="font-weight-bold text-decoration-none" id="btn"><i class="fas fa-plus mr-2"></i>AJOUTER UNE LIGNE</a>
</div>
<div class="form-group w-25">
    <label for="remise">Remise générale</label>
    <input type="number" step="0.01" class="form-control" id="remise" value="0">
</div>
<div class="jumbotron p-3 text-dark font-weight-bold">
    <table class="table table-borderless text-dark text-right">
        <tr>
            <td class="w-50"></td>
            <td class="w-50">Total HT</td>
            <td><span id="totalht">0</span></td>
        </tr>
        <tr>
            <td></td>
            <td>Remise générale</td>
            <td><span id="remise_span">0</span></td>
        </tr>
        <tr>
            <td></td>
            <td>Total HT final</td>
            <td><span id="htfinal">0</span></td>
        </tr>
        <tr>
            <td></td>
            <td>TVA</td>
            <td><span id="tva_tot">0</span></td>
        </tr>
        <tr>
            <td></td>
            <td>Total</td>
            <td><span id="total">0</span></td>
        </tr>
    </table>
</div>