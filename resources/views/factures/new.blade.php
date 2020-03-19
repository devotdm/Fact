@extends('struct')

@section('header')

@include($path.'includes.topbars.news')

@endsection


@section('content')



<h3>Destinataire</h3>
  <div class="form-group">
    <label for="exampleFormControlSelect1"></label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option></option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
<h3>Informations</h3>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Devise(requis)</label>
    <select class="form-control" id="exampleFormControlSelect1">
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

<h3>Articles</h3><br>
<span class="float-right  mb-3" >

  <i class="far fa-window-close"></i>
</i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="far fa-copy " ></i>

</span>
    <p id="num"></p>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Type</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Service</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
   <div class="form-row">
   <div class="col">
       <label for="inputState">Quantite</label>
      <input type="number" class="form-control" >
    </div>

    
    <div class="col">
      <label for="inputState">Prix HT</label><br>
      <input type="number" class="form-control" >
    </div>
   
    <div class="col">
       <label for="inputState">TVA</label>
      <input type="number" class="form-control">
    </div>
    
    <div class="col">
      <label for="inputState">.</label>
      <input type="number" class="form-control" >
    </div>
        <div class="col">
      <label for="inputState">%</label>
      <select id="inputState" class="form-control">
        <option selected></option>
        <option>...</option>
      </select>
    </div>
    
    <div class="col">
        <label for="inputState">Total HT</label>
      <input type="number" class="form-control" >
    </div>
      
    <div class="col">
      <label for="inputState">Total TTC</label>
      <input type="number" class="form-control" >
    </div>
  <label for="inputState"> </label>
</div><br>
   <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description">Service one</textarea>
  </div>

  <a href="#"><i class="fas fa-plus">&nbsp;&nbsp;&nbsp;&nbsp;AJOUTER UNE LIGNE</i></a><br><br>

<h3>Débours</h3><br>
<a href="#"><i class="fas fa-plus">&nbsp;&nbsp;&nbsp;&nbsp;AJOUTER UN DEBOURS</i></a><br>
  <div class="row">
   <div class=" col">
      <label for="inputState">%</label>
      <select id="inputState" class="form-control">
        <option selected>100</option>
        <option></option>
      </select>


    </div><br><br>
 
    <div class="col">
       <label for="inputState">Remise generale</label>
      <input type="text" class="form-control" >
    </div>
   
  </div><br>
    

    



<div class="jumbotron jumbotron-fluid">
      <div class="">
          <label for="Total">Total HT </label>
      <p id="TotalFT" ></p>
    </div>
     <div class="">
        <label for="Remise">Remise générale </label>
        <p id="Remise"></p>
    </div>
     <div class="">
        <label for="finalht">Total HT final </label>
         <p id="HTfinal"></p>
    </div>
    <div class="">
        <label for="TVA">TVA </label>
        <p id="TVA"></p>
    </div>
    <div class="">
        <label for="Total">Total  </label>
       <p id="Total"></p>
    </div>



    <br>

  <div class="container">
     
  </div>
</div>
<h3>Reglement</h3>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Conditions de reglement</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>A reception</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Mode de reglement</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Cheque</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Interet de retard</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Pas d'interets de retard</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Compte bancaire(RIB)</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option></option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>




    <h3>Textes affiches sur le document</h3>
     <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Texte d'introduction(visible sur la facture)"></textarea>
  </div>
  

        <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Texte de conclusion(visible sur la facture)"></textarea>
  </div>
  

         <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Pied de page(visible sur la facture)"> DEVOSOFT S.A.R.L.TP:50990690-IF:207224501-ICE:001853352000050-CNSS:5297016</textarea>
  </div>
    
  
   

   <h3>mot cles</h3>
   <div class="form-group">
    <label for="exampleFormControlSelect1"></label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>facture test</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>

  <button type="button" class="btn btn-success">Creer la facture</button>







@endsection