@extends('struct')

@section('header')

@include($path.'includes.topbars.infos')

@endsection


@section('content')


 <div class="row">
    <div class="col-lg-6 mb-3">
      <h3 class="text-dark">Informations</h3>
        <table class="table table-borderless mt-3">
            <tbody>
                <tr class="border-bottom">
                    <td class="text-secondary w-50">Statut : </td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Créé le :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Derniére modification le  :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>

                 <tr class="border-bottom">
                    <td class="text-secondary">Durée de validité :</td>
                    <td class="text-dark font-weight-bold"></td>

                </tr>

                <tr class="border-bottom">
                    <td class="text-secondary">Mots clés :</td>
                    <td class="text-dark font-weight-bold"></td>

                </tr>
            </tbody>
        </table>
    </div>



    <div class="col-lg-6 mb-3">
      <h3 class="text-dark">Votre devis est prete ?</h3><br><br>
      <p>Finalisez votre devis a l'aide du bouton<i class="far fa-check-circle ml-2 mr-2 text-success"></i>ci-dessus pour pouvoir l'envoyer au client. </p>
      <p>Attention un devis finalisé n'est plus modifiable.</p>
      <h3 class="text-dark">Documents liés</h3>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;aucun document lié </p>
    </div>

    <div class="col-lg-6 mb-3">
      <h3 class="text-dark">Destinataire</h3>
          <table class="table table-borderless mt-3">
            <tbody>
                <tr class="border-bottom">
                    <td class="text-secondary w-50">Destinataire :</td>
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


    <div class="col-lg-6 mb-3">
      <h3 class="text-dark">Conditions</h3>
  <table class="table table-borderless mt-3">
            <tbody>
                <tr class="border-bottom">
                    <td class="text-secondary w-50">Conditions de règlement :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-secondary">Mode de règlement :</td>
                    <td class="text-dark font-weight-bold"></td>
                </tr>
            </tbody>
        </table>

</div>
<div class="col">
<h3>Détail</h3>
</div>


        
        <table class="table table-borderless text-dark">
            <tr class="border-bottom">
                <td class="text-secondary">Type</td>
                <td class="text-secondary">Description</td>
                <td class="text-secondary text-right">Prix unitaire HT</td>
                <td class="text-secondary text-right">Quantité </td>
                <td class="text-secondary text-right">TVA</td>
                <td class="text-secondary text-right">Total HT</td>

            </tr>
            <tr class="border-bottom">
                <td class="font-weight-bold">Service</td>
                <td class="font-weight-bold">Service X</td>
                <td class="font-weight-bold text-right">500,00</td>
                <td class="font-weight-bold text-right">2</td>
                <td class="font-weight-bold text-right">20%</td>
                <td class="font-weight-bold text-right">1 000,00</td>

            </tr>
        
            <tr>
                <td colspan="4" class="font-weight-bold text-right pb-0"></td>
                <td class="font-weight-bold text-right">Total HT</td>
                <td class="font-weight-bold text-right">1 000,00</td>
            </tr>
            <tr>
                <td colspan="4" class="font-weight-bold text-right pb-0"></td>
                <td class="font-weight-bold text-right">TVA(20%)</td>
                <td class="font-weight-bold text-right">200,00</td>
            </tr>
            <tr>
                <td colspan="4" class="font-weight-bold text-right pb-0"></td>
                <td class="font-weight-bold text-right">Total TTC</td>
                <td class="font-weight-bold text-right">1 200,00</td>
            </tr>
        </table>
</div>

<p class="pb-5">DEVOSOFT S.A.R.L, TP : 50990690 - IF : 207224501 - ICE : 001853352000050 - CNSS : 5297016</p>

@endsection