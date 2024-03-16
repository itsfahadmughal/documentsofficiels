<?php
require('header.php');
?>

    <progress value="0" class="c-progress c-progress--vertical"></progress>



<head>
<title>Documents Officiels - N°1 Des Cartes Grises Et Plaques En Ligne - CGV</title>
<meta name=”description” content=”Documents Officiels vous fournit les informations sur chaque préfécture de France. Commandez votre carte grise et plaques en ligne.”>
</head>

<?php 
 require('header.php')
?>

<style>
@media (max-width: 576px) {

    .four-images-desktop,
    .sub-header-desktop,
    .space-for-desktop {
        display: none;
    }

    .inner {
        margin-bottom: 20px;
    }

    .col-6 {
        padding: 0px 10px;
    }

}

@media (min-width: 576px) {

    .four-images-mobile,
    .sub-header-mobile,
    .space-for-mobile {
        display: none;
    }

    h6 {
        font-size: 0.8rem !important;
    }

    .cards>.row {
        margin-bottom: 20px;
    }
}

.inner {
    border: 2px solid #D0CECE;
    background-color: #F9F6FC;
    padding: 20px;
    border-radius: 20px;
    height: 540px;
}

.cards {
    margin-top: 50px;
}
</style>





<div style="height: 100px;" class="space-for-desktop"></div>
<div style="height: 30px;" class="space-for-mobile"></div>

<!-- this section for desktop -->
<div class="container sub-header-desktop">
    <div class="row">
        <div class="col-md-3">
            <img src="https://documentsofficiels.fr/img/documentsofficiels_professionnel_agree_habilitation.png" alt="" loading="lazy" width="100%"
                height="auto">
        </div>
        <div class="col-md-6 my-auto">
            <h5 class="text-center" style="color: black; font-weight: bold;">Informations sur chaque préfécture</h5>
            <h5 class="text-center" style="color: #203764; font-weight: bold;">Toutes vos démarches en quelques clics</h5>
        </div>
        <div class="col-md-3">
            <!-- <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Home/Picture2.png" alt="" loading="lazy" width="130%"
                height="auto"> -->
            <div class="row">
                <div class="col-md-2 p-1">
                    <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Veuillez/Picture10.png" alt="" loading="lazy" width="100%"
                    height="auto">
                </div>
                <div class="col-md-10 p-0">
                <p style="font-size: 13px;"> <span style="font-weight: bold;color: #203864;"><?php echo random_int(50,150)?> personnes</span>   consultent actuellement le site. 
                    Dernière demande en ligne il y a <span style="font-weight: bold;color: #203864;"><?php echo random_int(1,10)?> minutes.</span></p>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- this section for Mobile -->
<div class="container sub-header-mobile">
    <div class="row">
        <div class="col-md-3 text-center pb-4">
            <img src="https://documentsofficiels.fr/img/documentsofficiels_professionnel_agree_habilitation.png" alt="" loading="lazy" width="100%"
                height="auto">
        </div>
        <div class="col-md-6 my-auto pb-3">
            <h3 class="text-center" style="color: #203764; font-weight: bold;">Je veux commander…</h3>
        </div>
        <div class="col-md-3">
            <!-- <div class="row">
            <div class="col-2"><i class="fas fa-info-circle" style="font-size: 36px;color: #203764"></i></div>
            <div class="col-10">
            <p class="text-left"> <span style="color: #000000; font-weight: bold;"> Commandez votre</span> <span style="color: #203764; font-weight: bold;"> Carte Grise</span> </p>
            <h4 class="text-center" style="color: #203764;font-weight: bold;">4 simples étapes pour vous la procurer </h4>
            </div>
          </div> -->
            <!-- <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Home/Picture2.png" alt="" loading="lazy" width="100%"
                height="auto"> -->
            <div class="row p-3">
                <div class="col-md-2" style="width: 15%;">
                    <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Veuillez/Picture10.png" alt="" loading="lazy" width="100%"
                    height="auto">
                </div>
                <div class="col-md-10 p-0" style="width: 85%;">
                    <p style="font-size: 12px;"> <span style="font-weight: bold;color: #203864;"><?php echo random_int(50,150)?> personnes</span>   consultent actuellemnet le site 
                    Derniere demmmmmande en ligne il y a <span style="font-weight: bold;color: #203864;"><?php echo random_int(1,10)?> minute</span></p>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<section class="u-inline-center">
  <div class="l-container-14">
    <h1>Mentions Légales</h1>
    Documents Officiels est un professionnel de la vente de véhicules neufs et d’occasion.<br>
    La société Documents Officiels propose également un service complet d’immatriculation des véhicules : service de cartes grises et de prestation de services. Ces services s’adressent aux professionnels de l’automobile, aux sociétés et aux particuliers.
    <br><br>
    
    Le site www.documentsofficiels.fr est édité par la GBTA GUIDICELLI BALAGNE TRANSPORT AUTO immatriculée au Greffe du Tribunal de Commerce de Bastia sous le numéro 387 562 028.
    <br><br>
    <b>GBTA GUIDICELLI BALAGNE TRANSPORT AUTO</b><br>
    Siège social : Bd De Fogata 20220 Ile-Rousse FRANCE<br>
    Capital Social : 8000 euros<br>
    SIRET : 387 562 028 000 10<br>
    SIREN : 387 562 028<br>
    TVA : FR 583 875 620 28<br>
    Email: contact @ documentsofficiels.fr<br>
    <br>
    Tel : +33 (0)4 95 60 26 79 (0,35€ / min)<br>
    <br>
    Email : contact @ documentsofficiels.fr<br>
    <br>
    DocumentsOfficiels : habilitations n°230027 du Ministère de l’Intérieur et n°230027 du Trésor Public.<br>
    <br>
    Le site est hébergé sur des serveurs européens par la société Hostinger.fr.

    <br><br>

  </div>
</section>

    <div id="modal-service" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content u-inline-center">
            <p class="c-p u-grey50 u-xxxlarge">Choisir service</p>
            <div class="l-grid-row l-grid-row--40 u-margin-t-30">
              <div class="l-col-6">
                <a href="https://documentsofficiels.fr/carte-grise.php" rel="nofollow" class="c-card c-card--link u-padding-x-15 u-padding-y-40">
                  <div class="u-vertical-container">
                    <div class="u-vertical-container__cell">
                      <img data-src="https://www.DocumentsOfficiels.fr/wp-content/themes/documentsofficiels/img/illustration/Carte_Grise_Grey.png" data-srcset="https://www.DocumentsOfficiels.fr/wp-content/themes/documentsofficiels/img/illustration/Carte_Grise_Grey.png 1x, https://www.DocumentsOfficiels.fr/wp-content/themes/documentsofficiels/img/illustration/Carte_Grise_Grey@2x.png 2x" alt="" class="c-img c-img--height-42-mobile-down">
                    </div>
                  </div>
                  <div class="">
                    <p class="c-p u-grey50 u-semi-bold u-large u-margin-t-25">Carte grise</p>
                    <p class="c-p c-p--disappear u-margin-t-5">Commandez votre carte grise en 2min</p>
                  </div>
                  <div class="c-button c-button--primary u-margin-t-20">
                    Commander
                  </div>
                </a>
              </div>
              <div class="l-col-6 u-margin-t-20-mobile-down">
                <a href="https://documentsofficiels.fr/app/Plaque.php" rel="nofollow" class="c-card c-card--link u-padding-x-15 u-padding-y-40">
                  <div class="u-vertical-container">
                    <div class="u-vertical-container__cell">
                      <img data-src="https://www.DocumentsOfficiels.fr/wp-content/themes/documentsofficiels/img/illustration/Plaques_Grey.png" data-srcset="https://www.DocumentsOfficiels.fr/wp-content/themes/documentsofficiels/img/illustration/Plaques_Grey.png 1x, https://www.DocumentsOfficiels.fr/wp-content/themes/documentsofficiels/img/illustration/Plaques_Grey@2x.png 2x" alt="" class="c-img c-img--height-42-mobile-down">
                    </div>
                  </div>
                  <div class="">
                    <p class="c-p u-grey50 u-semi-bold u-large u-margin-t-25">Plaques d’immatriculation</p>
                    <p class="c-p c-p--disappear u-margin-t-5">Fabrication de vos plaques personnalisées sous 24h</p>
                  </div>
                  <div class="c-button c-button--primary u-margin-t-20">
                    Commander
                  </div>
                </a>
              </div>
            </div>
            <div class="close-button">
              <span data-dismiss="modal" aria-label="Close" class="c-modal__close-btn icon-baseline-close-24px"></span>
            </div>
		</div>
	</div>
</div>

    
    
<?php
require('footer.php');
?>