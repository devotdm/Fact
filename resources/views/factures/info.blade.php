@extends('struct')

@section('header')

@include($path.'includes.topbars.infos')

@endsection


@section('content')



 <div class="row">
    <div class="col-6">
      <h5>Informations</h5>
        <table class="table table-borderless mt-3">
            <tbody>
                <tr class="border-bottom">
                    <td class="text-secondary w-50">Statut : </td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Créée le :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Derniére modification le  :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">PDF généré le  : </td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Mots clés :</td>
                    <td class="text-dark font-weight-bold"></td>

                </tr>
            </tbody>
        </table>
         <button type="button" class="btn btn-success"> facture test</button>
    </div>



    <div class="col-6">
      <h3>Votre facture est prete ?</h3><br><br>
      <p>Finalisez votre facture a l'aide du bouton&nbsp;&nbsp;&nbsp;&nbsp;<i class="far fa-check-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;ci-dessus pour pouvoir l'envoyer au client . </p>
      <p>Attention une facture finalisee n'est plus modifiable .</p><br>

      <h3>Documents liés</h3>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <p>aucun document lié </p>
    </div>


 </div><br><br><br>


<div class="row">
    <div class="col">
      <h3>Destinataire</h3>


          <table class="table table-borderless mt-3">
            <tbody>
                <tr class="border-bottom">
                    <td class="text-secondary w-50">Destinataire :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Société  :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Adresse:</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Pays : </td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Numéro de téléphone :</td>
                    <td class="text-dark font-weight-bold"></td>

                </tr>

                 <tr class="border-bottom">
                    <td class="text-secondary">Adresse email : </td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
            </tbody>
        </table>
       
    
   


    </div>


    <div class="col">
      <h3>Conditions</h3>
         

  <table class="table table-borderless mt-3">
            <tbody>
                <tr class="border-bottom">
                    <td class="text-secondary w-50">Concdition de réglement :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Mode de réglement :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
              
                 
            </tbody>
        </table>




</div>


  </div><br>

<h3>Détail</h3><br>


  <div class="form-row">
   
  <div class="row">

 <table class="table table-borderless mt-3">
            <tbody>
              <div class="col">
                <tr class="border-bottom">
                    <td class="text-secondary w-50">Type</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr></div>
                <div class="col">
                <tr class="border-bottom">
                    <td class="text-secondary">Description</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr></div>
                <div class="col">
                <tr class="border-bottom">
                    <td class="text-secondary">Prix unitaure HT</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr></div>
                <div class="col">
                <tr class="border-bottom">
                    <td class="text-secondary">Quantité </td>
                    <td class="text-dark font-weight-bold"></td>
                </tr></div>
                <div class="col">
                <tr class="border-bottom">
                    <td class="text-secondary">Total HT</td>
                    <td class="text-dark font-weight-bold"></td>

                </tr></div>

                 
            </tbody>
        </table>

</div>

 
  
      
    
</div><br>
   


   <p>TVA non applicable .art.293 B du CGI</p><br>


 <div class="">
        <label for="Total">Total  :</label>
      <p id="TotalFT" ></p>
    </div>
     <div class="">
        <label for="Remise">Remise générale (10%) :</label>
        <p id="Remise"></p>
    </div>
     <div class="">
        <label for="finalht">Total final :</label>
         <p id="HTfinal"></p>
    </div>

  <br><br>
       <p id="parg">DEVOSOFT S.A.R.L.TP:50990690-IF:207224501-ICE:001853352000050-CNSS:5297016</p>





@endsection