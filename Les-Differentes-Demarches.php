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
    height: 190px;
}

.cards {
    margin-top: 20px;
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
            <h5 class="text-center" style="color: black; font-weight: bold;">Veuillez sélectionner votre démarche</h5>
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


<div class="container cards">
    <div class="row">
        <div class="col-md-3 col-6">
            <a href="https://documentsofficiels.fr/app/commander.php">
                <div class="inner text-center">
                    <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Veuillez/Picture1.png" alt="" width="30%">
                    <p class="text-center" style="color: #203764; font-weight: bold; font-size: 16px; padding-top: 5px;">
                        Changement de Titulaire</p>
                    <p class="text-center" style="color: #203764; font-size: 11px">Vous avez acheté un véhicule d'occasion
                        en France ou à l'étranger.</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-6">
            <a href="https://documentsofficiels.fr/app/commander_Enregistrement.php">
                <div class="inner text-center">
                    <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Veuillez/Picture2.png" alt="" width="30%">
                    <p class="text-center" style="color: #203764; font-weight: bold; font-size: 16px; padding-top: 5px;">
                    Enregistrement de Cession</p>
                    <p class="text-center" style="color: #203764; font-size: 11px">Vous avez vendu un véhicule et souhaitez ne plus être responsable en cas d'amende ou d'accident.</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-6">
            <a href="https://documentsofficiels.fr/app/commander_Changement.php">
                <div class="inner text-center">
                    <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Veuillez/Picture3.png" alt="" width="30%">
                    <p class="text-center" style="color: #203764; font-weight: bold; font-size: 16px; padding-top: 5px;">
                    Changement d'Adresse</p>
                    <p class="text-center" style="color: #203764; font-size: 11px">Vous avez changé d'adresse ou de nom de rue.</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-6">
            <a href="https://documentsofficiels.fr/app/commander_Demande.php">
                <div class="inner text-center">
                    <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Veuillez/Picture4.png" alt="" width="30%">
                    <p class="text-center" style="color: #203764; font-weight: bold; font-size: 16px; padding-top: 5px;">
                    Demande de Duplicata</p>
                    <p class="text-center" style="color: #203764; font-size: 11px">Votre carte grise a été perdue, volée ou abîmée.</p>
                </div>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 col-6">
            <a href="https://documentsofficiels.fr/app/commander_Declaration.php">
                <div class="inner text-center">
                    <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Veuillez/Picture5.png" alt="" width="30%">
                    <p class="text-center" style="color: #203764; font-weight: bold; font-size: 16px; padding-top: 5px;">
                    Déclaration d'Achat</p>
                    <p class="text-center" style="color: #203764; font-size: 11px">Vous êtes un professionnel de l'automobile et souhaitez déclarer l'achat d'un véhicule.</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-6">
            <a href="https://documentsofficiels.fr/app/commander_Demande_d'immatriculation.php">
                <div class="inner text-center">
                    <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Veuillez/Picture6.png" alt="" width="30%">
                    <p class="text-center" style="color: #203764; font-weight: bold; font-size: 16px; padding-top: 5px;">
                    Immatriculation Provisoire WW</p>
                    <p class="text-center" style="color: #203764; font-size: 11px">Vous avez acheté un véhicule à l'étranger et souhaitez obtenir une immatriculation provisoire WW valable 4 mois.</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-6">
            <a href="https://documentsofficiels.fr/app/commander_W_garage.php">
                <div class="inner text-center">
                    <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Veuillez/Picture7.png" alt="" width="30%">
                    <p class="text-center" style="color: #203764; font-weight: bold; font-size: 16px; padding-top: 5px;">
                    W Garage</p>
                    <p class="text-center" style="color: #203764; font-size: 11px">Vous êtes un professionnel de l'automobile et souhaitez obtenir ou renouveler un W garage.</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-6">
            <a href="https://documentsofficiels.fr/app/commander_Changement_de_raison.php">
                <div class="inner text-center">
                    <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Veuillez/Picture8.png" alt="" width="30%">
                    <p class="text-center" style="color: #203764; font-weight: bold; font-size: 16px; padding-top: 5px;">
                    Changement de Raison Sociale</p>
                    <p class="text-center" style="color: #203764; font-size: 11px">Votre société a changé de raison sociale sans changer de n° de Siren.</p>
                </div>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 col-6">
            <a href="https://documentsofficiels.fr/app/commander_Passage.php">
                <div class="inner text-center">
                    <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Veuillez/Picture9.png" alt="" width="30%">
                    <p class="text-center" style="color: #203764; font-weight: bold; font-size: 16px; padding-top: 5px;">
                    Passage en Collection</p>
                    <p class="text-center" style="color: #203764; font-size: 11px">Vous souhaitez passer votre véhicule de +30 ans en carte grise collection.</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-6">
            <a href="https://documentsofficiels.fr/app/commander_Ajout.php">
                <div class="inner text-center">
                    <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Veuillez/Picture10.png" alt="" width="30%">
                    <p class="text-center" style="color: #203764; font-weight: bold; font-size: 16px; padding-top: 5px;">
                    Ajout d'un Cotitulaire</p>
                    <p class="text-center" style="color: #203764; font-size: 11px">Vous souhaitez ajouter un cotitulaire sur votre carte grise.</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-6">
            <a href="https://documentsofficiels.fr/app/commander_Changement_de_caracteristiques.php">
                <div class="inner text-center">
                    <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Veuillez/Picture11.png" alt="" width="30%">
                    <p class="text-center" style="color: #203764; font-weight: bold; font-size: 16px; padding-top: 5px;">
                    Changement Fiche Technique</p>
                    <p class="text-center" style="color: #203764; font-size: 11px">Votre véhicule a été modifié techniquement (Deriv-VP, MTT2...)</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-6">
            <a href="https://documentsofficiels.fr/app/commander_Usurpation.php">
                <div class="inner text-center">
                    <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Veuillez/Picture12.png" alt="" width="30%">
                    <p class="text-center" style="color: #203764; font-weight: bold; font-size: 16px; padding-top: 5px;">
                    Usurpation de Plaques</p>
                    <p class="text-center" style="color: #203764; font-size: 11px">Vous avez été victime d'une doublette de plaques</p>
                </div>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 col-6">
            <a href="https://documentsofficiels.fr/app/commander_Changement_de_nom.php">
                <div class="inner text-center">
                    <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Veuillez/Picture13.png" alt="" width="30%">
                    <p class="text-center" style="color: #203764; font-weight: bold; font-size: 16px; padding-top: 5px;">
                    Changement de Nom</p>
                    <p class="text-center" style="color: #203764; font-size: 11px">A la suite d'un mariage, divorce ou veuvage.</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-6">
            <a href="https://documentsofficiels.fr/app/commander_Changement_de_locataire.php">
                <div class="inner text-center">
                    <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Veuillez/Picture14.png" alt="" width="30%">
                    <p class="text-center" style="color: #203764; font-weight: bold; font-size: 16px; padding-top: 5px;">
                    Changement de Locataire</p>
                    <p class="text-center" style="color: #203764; font-size: 11px">Votre véhicule est en leasing et souhaitez uniquement changer le locataire.</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-6">
            <a href="https://documentsofficiels.fr/app/commander_Correction_de_carte.php">
                <div class="inner text-center">
                    <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Veuillez/Picture15.png" alt="" width="30%">
                    <p class="text-center" style="color: #203764; font-weight: bold; font-size: 16px; padding-top: 5px;">
                    Correction de Carte Grise</p>
                    <p class="text-center" style="color: #203764; font-size: 11px">Vous souhaitez corriger une erreur sur votre carte grise.</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-6">
            <a href="https://documentsofficiels.fr/app/commander_Fiche.php">
                <div class="inner text-center">
                    <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Veuillez/Picture16.png" alt="" width="30%">
                    <p class="text-center" style="color: #203764; font-weight: bold; font-size: 16px; padding-top: 5px;">
                    Fiche d'Identification d'Un Véhicule</p>
                    <p class="text-center" style="color: #203764; font-size: 10px">Vous avez perdu la carte grise et souhaitez un document pour passer un contrôle technique.</p>
                </div>
            </a>
        </div>
    </div>
</div>


<div style="height: 50px;" class="space-for-desktop"></div>
<div style="height: 20px;" class="space-for-mobile"></div>

<section class="u-padding-b-100 u-padding-t-40 u-padding-y-50-mobile-down u-inline-center">
    <div class="l-container">
        <h2 class="text-center"> <span style="color: #000000; font-weight: bold;">Des démarches simples et rapides
            </span></h2>
        <div class="l-grid-row u-margin-t-60 u-margin-reset-mobile-down">
            <div class="l-col-3">
                <img class="c-img"
                    data-src="https://documentsofficiels.fr/img/rapide_icon.png"
                    data-srcset="https://documentsofficiels.fr/img/rapide_icon.png"
                    alt="" width="60" height="60">
                <h5 style="color: #203764; class="c-h3 u-margin-t-30 u-margin-t-10-mobile-down u-fz-20-mobile-down">Toutes vos démarches en quelques clics et minutes</h5>
                <p class="c-p u-margin-t-5 u-fz-16-mobile-down">Toutes vos démarches administratives rendues faciles et rapides en quelques clics.</p>
            </div>
            <div class="l-col-3 u-margin-t-40-mobile-down">
                <img class="c-img"
                    data-src="https://documentsofficiels.fr/img/paiement_icon.png"
                    data-srcset="https://documentsofficiels.fr/img/paiement_icon.png"
                    alt="" width="60" height="60">
                <h5 style="color: #203764; class="c-h3 u-margin-t-30 u-margin-t-10-mobile-down u-fz-20-mobile-down">Paiement Ultra-Sécurisé, Régulé et Transparent</h5>
                <p class="c-p u-margin-t-5 u-fz-16-mobile-down">Nous sommes habilités et agréés par le Ministère de l'Intérieur.</p>
            </div>
            <div class="l-col-3 u-margin-t-40-mobile-down">
                <img class="c-img"
                    data-src="https://documentsofficiels.fr/img/envoi_carte_grise_icon.png"
                    data-srcset="https://documentsofficiels.fr/img/envoi_carte_grise_icon.png"
                    alt="" width="60" height="60">
                <h5 style="color: #203764; class="c-h3 u-margin-t-30 u-margin-t-10-mobile-down u-fz-20-mobile-down">Livraison de votre carte grise et plaques en 24h/48h</h5>
                <p class="c-p u-margin-t-5 u-fz-16-mobile-down">
                    L'Imprimerie Nationale vous livre votre carte grise en recommandé. <br>
                    Les plaques d'immatriculation sont livrées à domicile ou en point relais.
                </p>
            </div>
            <div class="l-col-3 u-margin-t-40-mobile-down">
                <img class="c-img"
                    data-src="https://documentsofficiels.fr/img/france_icon.png"
                    data-srcset="https://documentsofficiels.fr/img/france_icon.png"
                    alt="" width="60" height="60">
                <h5 style="color: #203764; class="c-h3 u-margin-t-30 u-margin-t-10-mobile-down u-fz-20-mobile-down">Habilitation du Ministère de l'Intérieur et du Trésor Public
                </h5>
                <p class="c-p u-margin-t-5 u-fz-16-mobile-down">Nous sommes habilités par le Ministère de l'Intérieur et le Trésor Public (N.230027).</p>
            </div>
        </div>
    </div>
</section>

<section class="u-padding-y-120 u-padding-y-50-mobile-down u-inline-center" style="background-color: #203764;">
    <div class="l-container">
        <img class="c-img" data-src="https://documentsofficiels.fr/Documentoffciels_Resources/Home/stars.png" alt="" width="188"
            height="32">
        <h2 class="c-h2 u-fz-24-mobile-down u-margin-t-30 text-white">Un service recommandé par nos clients</h2>
        <p class="c-p u-large u-fz-15-mobile-down u-margin-t-10 ekomiContainer text-white">
            + 1 million d'utilisateurs <br>
            + 20 000 avis clients certifiés sur
            <a class="blueLink" href="https://documentsofficiels.fr/" target="_blank" style="color: #a0a0a0;">Google</a>,
            <a class="blueLink" href="https://documentsofficiels.fr/" target="_blank" style="color: #a0a0a0;">Ekomi</a>,
            <a class="blueLink" href="https://documentsofficiels.fr/" target="_blank" style="color: #a0a0a0;">Trustpilot</a>
            et
            <a class="blueLink" href="https://documentsofficiels.fr/" target="_blank" style="color: #a0a0a0;">Facebook</a>
        </p>
    </div>
</section>

<?php 
 require('footer.php')
?>