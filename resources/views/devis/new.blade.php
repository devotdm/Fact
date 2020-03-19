@extends('struct')

@section('header')

@include($path.'includes.topbars.news')

@endsection


@section('content')

<h3>Destinataire</h3>
  <div class="form-group">
    <label for="exampleFormControlSelect1"></label>
    <select class="form-control w-50 d-inline" id="exampleFormControlSelect1">
      <option value="choose" selected disabled>Nouveau client</option>
      <option></option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
<h3>Informations</h3>
 <div class="form-group">
<input class="form-control w-50 d-inline " type="text" name="dure" placeholder="Durée de validité">
<span class="d-inline ml-2" > jours</span>
</div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Devise(requis)</label><br>
    <select class="form-control w-50 d-inline" id="exampleFormControlSelect1">
      <option>Dirham marocain (د م  )</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
   <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">TVA non appliacale</label>
  </div>

<h3>Articles</h3>

<span class="float-right  mb-3" >

   <a href="" class="text-dark p-1"><i class="far fa-window-close"></i></a><br>
   <a href="" class="text-dark p-1"><i class="far fa-copy"></i></a>

</span>
    <p class="mb-2"><span class="badge badge-primary rounded-circle" style="font-size:20px;">1</span></p>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Type</label><br>
    <select class="form-control w-50 d-inline" id="exampleFormControlSelect1">
      <option>Service</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
   <div class="form-row">
   <div class="col">
       
      <input type="number" class="form-control" placeholder="Quantité" >
    </div>

    
    <div class="col">
     
      <input type="number" class="form-control" placeholder="Prix HT">
    </div>
   
    <div class="col">
       
      <input type="number" class="form-control" placeholder="TVA">
    </div>
    
    <div class="col">
      
      <input type="number" class="form-control" placeholder="Réduction" >
    </div>
        <div class="col">
      
      <select id="inputState" class="form-control">
        <option value="choose" selected disabled>%</option>
        <option>100</option>
        <option>75</option>
        <option>50</option>

      </select>
    </div>
    
    <div class="col">
       
      <input type="number" class="form-control" placeholder="Total HT">
    </div>
      
    <div class="col">
      
      <input type="number" class="form-control" placeholder="Total TTC">
    </div>
  <label for="inputState"> </label>
</div>
   <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description"></textarea>
  </div>


<a href="#"><i class="fas fa-plus">AJOUTER UNE LIGNE</i></a><br><br>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Remise générale" >
    </div>
   
 <div class=" col">
      <select id="inputState" class="form-control">
      	<option value="choose" selected disabled>%</option>
        <option >100</option>
        <option>75</option>
        <option>50</option>
      </select>
    </div>

  </div>
    

    




      
 <div class="jumbotron p-3 text-dark font-weight-bold">
        <table class="table table-borderless text-dark ">
            <tr>
                <td class="w-75"></td>
                <td>Total HT</td>
                <td><span id="TotalHT">0,00 د.م </span></td>
            </tr>
            <tr>
                <td></td>
                <td>Remise générale </td>
                <td><span id="remise">0,00 د.م </span></td>
            </tr>
            <tr>
                <td></td>
                <td>Total HT final </td>
                <td><span id="HTfinal">0,00 د.م </span></td>
            </tr>
            <tr>
                <td></td>
                <td>TVA </td>
                <td><span id="tva_tot">0,00 د.م </span></td>
            </tr>
            <tr>
                <td></td>
                <td>Total </td>
                <td><span id="total">0,00 د.م </span></td>
            </tr>
        </table>


</div>
<h3>Règlement</h3>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Conditions de règlement</label><br>
    <select class="form-control w-50 d-inline" id="exampleFormControlSelect1">
      <option>A réception</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Mode de reglement</label><br>
    <select class="form-control w-50 d-inline" id="exampleFormControlSelect1">
      <option>Chèque</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Interet de retard</label><br>
    <select class="form-control w-50 d-inline" id="exampleFormControlSelect1">
      <option>Pas d'intérets de retard</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
 <br>
 <br>



    <h3>Textes affichés sur le document</h3><br>
     <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Texte d'introduction (visible sur le devis)"></textarea>
  </div>
  

        <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Texte de conclusion (visible sur le devis)"></textarea>
  </div>
  
 <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Pied de la page (visible sur le devis)"></textarea>
  </div>
    
      <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Conditions générales de vente (visible sur le devis)"></textarea>
  </div>
  
   

   <h3>Mots clés</h3>
   <div class="form-group">
    <label for="exampleFormControlSelect1"></label>
    <select class="form-control w-50 d-inline" id="exampleFormControlSelect1">
      <option>Ajouter/Sélectionner des mots clés</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select><br> <br>

     <div class="form-group">
                <button type="submit" name="submitpro" class="btn btn-success mb-5">Créer le devis</button>
            </div>



@endsection