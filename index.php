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
    }

    @media (max-width: 768px) {
        .mobile-padding-left-right-3{
            padding-left: 3px !important;
            padding-right: 3px !important;
        }
        .u-padding-custom-y-15-25-mobile-up-down{
            padding-top: 15px !important;
            padding-bottom: 25px !important;
        }
        .mobile-font-size-1-5{
            font-size: 1.5rem;
        }
        .mobile-text-size-1-75{
            font-size: 1.75rem;
        }
        .mobile-text-size-1-3{
            font-size: 1.3rem;
        }
        .mobile-font-8{
            font-size: 8px !important;
        }
        .rgpd-padding-change{
            padding: 10px 20px !important;
        }
        #rgpd .buttons{
            margin-top: 10px;
        }

    }

    .Zoom:hover {
        transform: scale(1.05);
        transition: transform .5s;
    }
</style>


<div style="height: 100px;" class="space-for-desktop"></div>
<div style="height: 30px;" class="space-for-mobile"></div>

<!-- this section for desktop -->
<div class="container sub-header-desktop">
    <div class="row">
        <div class="col-md-3">
            <img src="https://documentsofficiels.fr/img/documentsofficiels_professionnel_agree_habilitation.png" alt="" loading="lazy" width="100%" height="auto">
        </div>
        <div class="col-md-6 my-auto">
            <h3 class="text-center" style="color: #203764; font-weight: bold;">Je veux commander…</h3>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-2 p-1">
                    <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Veuillez/Picture10.png" alt="" loading="lazy" width="100%" height="auto">
                </div>
                <div class="col-md-10 p-0">
                    <p style="font-size: 13px;"> <span style="font-weight: bold;color: #203864;">67 personnes</span> consultent actuellement le site de <span style="font-weight: bold;color: #203864;">DocumentsOfficiels.fr</span></span></p>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- this section for Mobile -->
<div class="container sub-header-mobile">
    <div class="row">
        <div class="col-md-3 text-center pb-4">
            <img src="https://documentsofficiels.fr/img/documentsofficiels_professionnel_agree_habilitation.png" alt="" loading="lazy" width="80%" height="auto">
        </div>
        <div class="col-md-6 my-auto pb-3">
            <h3 class="text-center" style="color: #203764; font-weight: bold;">Je veux commander…</h3>
        </div>
        <div class="col-md-3">

            <div class="row p-3">
                <div class="col-md-2" style="width: 15%;">
                    <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Veuillez/Picture10.png" alt="" loading="lazy" width="100%" height="auto">
                </div>
                <div class="col-md-10 p-0" style="width: 85%;">
                    <p style="font-size: 12px;"> <span style="font-weight: bold;color: #203864;"><?php echo random_int(50, 150) ?> personnes</span> consultent actuellement le site.
                        Dernière demande en ligne il y a <span style="font-weight: bold;color: #203864;">3 minutes.</span></p>

                </div>
            </div>
        </div>
    </div>
</div>





<!-- this section for desktop -->
<div class="container four-images-desktop pt-5">
    <div class="row">

        <div class="col-md-4 Zoom pl-1" style="padding-right: 3px;">
            <a href="https://documentsofficiels.fr/Les-Differentes-Demarches.php">
                <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Home/11.png" alt="" loading="lazy" width="100%" height="300px">
                <div>
                    <h5 class="text-center text-white" style="background-color: #203764;padding: 30px 0px;font-size:1.1rem;">
                        Ma Carte Grise
                    </h5>
                </div>
            </a>
        </div>
        <!--<div class="col-md-3 Zoom pl-2" style="padding-right: 3px">
            <a href="https://documentsofficiels.fr/app/Plaque.php">
                <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Home/22.png" alt="" loading="lazy" width="100%" height="250px">
                <div>
                    <h5 class="text-center text-white" style="background-color: #203764;padding: 30px 0px;font-size:1.1rem;">
                        Mes Plaques d’Immatriculation
                    </h5>
                </div>
            </a>
        </div>!-->

        <div class="col-md-4 Zoom pl-2" style="padding-right: 3px">
            <a href="https://documentsofficiels.fr/app/vignette_critair.php">
                <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Home/vignette-critair-removebg-preview.jpg" alt="" loading="lazy" width="100%" height="300px">
                <div>
                    <h5 class="text-center text-white" style="background-color: #203764;padding: 30px 0px;font-size:1.1rem;">
                        Vignette Crit’Air
                    </h5>
                </div>
            </a>
        </div>

        <div class="col-md-4 Zoom pl-2" style="padding-right: 3px">
            <a href="https://documentsofficiels.fr/app/extrait_kbis.php">
                <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Home/extrait-kbis-removebg-preview.jpg" alt="" loading="lazy" width="100%" height="300px">
                <div>
                    <h5 class="text-center text-white" style="background-color: #203764;padding: 30px 0px;font-size:1.1rem;">
                        Extrait K ou Kbis
                    </h5>
                </div>
            </a>
        </div>


    </div>
</div>

<!-- this section for Mobile -->
<div class="container four-images-mobile">
    <div class="row">
        <div class="col-md-6 mobile-padding-left-right-3" style="width: 50%;">
            <a href="https://documentsofficiels.fr/Les-Differentes-Demarches.php">
                <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Home/11.png" alt="" loading="lazy" width="100%" height="180px">
                <div>
                    <h6 class="text-center text-white" style="background-color: #203764;padding: 5px 0px;font-size:11px;">
                        Ma Carte Grise
                    </h6>
                </div>
            </a>
        </div>
<!--
        <div class="col-md-6 mobile-padding-left-right-3" style="width: 50%;">
            <a href="https://documentsofficiels.fr/app/Plaque.php">
                <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Home/22.png" alt="" loading="lazy" width="100%" height="180px">
                <div>
                    <h6 class="text-center text-white" style="background-color: #203764;padding: 5px 0px; font-size:11px;">
                        Mes Plaques d’immatriculation
                    </h6>
                </div>
            </a>
        </div>
-->

        <div class="col-md-6 mobile-padding-left-right-3" style="width: 50%;">
            <a href="https://documentsofficiels.fr/app/vignette_critair.php">
                <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Home/vignette-critair-removebg-preview.jpg" alt="" loading="lazy" width="100%" height="180px">
                <div>
                    <h6 class="text-center text-white" style="background-color: #203764;padding: 5px 0px; font-size:11px;">
                        Vignette Crit’Air
                    </h6>
                </div>
            </a>
        </div>

        <div class="col-md-6 mobile-padding-left-right-3" style="width: 50%;">
            <a href="https://documentsofficiels.fr/app/extrait_kbis.php">
                <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Home/extrait-kbis-removebg-preview.jpg" alt="" loading="lazy" width="100%" height="180px">
                <div>
                    <h6 class="text-center text-white" style="background-color: #203764;padding: 5px 0px; font-size:11px;">
                        Extrait K ou Kbis
                    </h6>
                </div>
            </a>
        </div>

    </div>
</div>





<section class="u-padding-y-50 u-padding-custom-y-15-25-mobile-up-down u-inline-center">
    <div class="l-container">
        <h2 class="text-center u-padding-y-10 mobile-font-size-1-5"> <span style="color: #000000; font-weight: bold;"> </span> <span style="color: #203764; font-weight: bold;"> Découvrez nos démarches de cartes grises et autres services en vidéo</span> </h2>

        <video width="100%" height="100%" poster="./Documentoffciels_Resources/video_thumb.png" controls style="box-shadow: 0px 0px 10px #cccccc;">
            <source src="./Documentoffciels_Resources/Intro.mp4" type="video/mp4">
        </video>
    </div>
</section>





<!-- this section for desktop -->
<div class="container sub-header-desktop">
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6 my-auto">
            <h3 class="text-center" style="color: black; font-weight: bold;">Veuillez sélectionner votre démarche</h3>
            <h3 class="text-center" style="color: #203764; font-weight: bold;">Toutes vos démarches en quelques clics<br><br></h3>
        </div>
        <div class="col-md-3">
            <!-- <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Home/Picture2.png" alt="" loading="lazy" width="130%"
height="auto"> -->
            <div class="row">
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
                        Derniere demmmmmande en ligne il y a <span style="font-weight: bold;color: #203864;">3 minutes</span></p>

                </div>
            </div>
        </div>
    </div>
</div>



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
                <h5 style="color: #203764;" class=" c-h3 u-margin-t-30 u-margin-t-10-mobile-down u-fz-20-mobile-down">Toutes vos démarches en quelques clics et minutes</h5>
                <p class="c-p u-margin-t-5 u-fz-16-mobile-down">Toutes vos démarches administratives rendues faciles et rapides en quelques clics.</p>
            </div>
            <div class="l-col-3 u-margin-t-40-mobile-down">
                <img class="c-img"
                     data-src="https://documentsofficiels.fr/img/paiement_icon.png"
                     data-srcset="https://documentsofficiels.fr/img/paiement_icon.png"
                     alt="" width="60" height="60">
                <h5 style="color: #203764;" class=" c-h3 u-margin-t-30 u-margin-t-10-mobile-down u-fz-20-mobile-down">Paiement Ultra-Sécurisé, Régulé et Transparent</h5>
                <p class="c-p u-margin-t-5 u-fz-16-mobile-down">Nous sommes habilités et agréés par le Ministère de l'Intérieur.</p>
            </div>
            <div class="l-col-3 u-margin-t-40-mobile-down">
                <img class="c-img"
                     data-src="https://documentsofficiels.fr/img/envoi_carte_grise_icon.png"
                     data-srcset="https://documentsofficiels.fr/img/envoi_carte_grise_icon.png"
                     alt="" width="60" height="60">
                <h5 style="color: #203764;" class=" c-h3 u-margin-t-30 u-margin-t-10-mobile-down u-fz-20-mobile-down">Livraison de votre carte grise et plaques en 24h/48h</h5>
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
                <h5 style="color: #203764;" class=" c-h3 u-margin-t-30 u-margin-t-10-mobile-down u-fz-20-mobile-down">Habilitation du Ministère de l'Intérieur et du Trésor Public
                </h5>
                <p class="c-p u-margin-t-5 u-fz-16-mobile-down">Nous sommes habilités par le Ministère de l'Intérieur (N.230027) et le Trésor Public (N.125222)</p>
            </div>
        </div>
    </div>
</section>


<div class="c-subheader">
    <div class="l-container u-relative">
        <a href="/" class="c-subheader__brand"><img src="https://documentsofficiels.fr/Documentoffciels_Resources/Logo.png" srcset="https://documentsofficiels.fr/Documentoffciels_Resources/Logo.png 1x, https://documentsofficiels.fr/Documentoffciels_Resources/Logo.png 2x, https://documentsofficiels.fr/Documentoffciels_Resources/Logo.png 3x" alt="" class="c-img" width="100" height="24" loading="lazy"></a>
        <div class="u-margin-t-30">
          <a href="https://documentsofficiels.fr/carte-grise.php" rel="nofollow" class="c-button u-margin-r-20-mobile-up u-center-table-mobile-down">Commandez votre carte grise</a>
          <a href="https://documentsofficiels.fr/app/Plaque.php" rel="nofollow" class="c-button u-margin-r-20-mobile-up u-center-table-mobile-down">Commandez vos plaques</a>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-plaque">
    <div class="modal-dialog">
        <div class="modal-content ">
            <div class="u-inline-center">
                <p class="c-p u-grey50 u-xxxlarge">Renseigner votre véhicule</p>
                <p class="c-p u-margin-t-10">Merci d'indiquer le numéro d'immatriculation du véhicule</p>
            </div>
            <div class="u-inline-left u-inline-block u-margin-t-30">
                <p class="c-p u-lsmall u-uppercase u-bold">Plaque d’immatriculation</p>
                <div class="u-margin-t-5">
                    <div class="js-form-tabulate c-input-square-container">
                        <input class="c-input-square js-input-square-1 js-plaque-field" type="text" name="" value="" maxlength="1">
                        <input class="c-input-square js-input-square-2" type="text" name="" value="" maxlength="1">
                    </div>
                    <div class="c-input-square-container">
                        <input class="c-input-square js-input-square-3" type="text" name="" value="" maxlength="1">
                        <input class="c-input-square js-input-square-4" type="text" name="" value="" maxlength="1">
                        <input class="c-input-square js-input-square-5" type="text" name="" value="" maxlength="1">
                    </div>
                    <div class="c-input-square-container">
                        <input class="c-input-square js-input-square-6" type="text" name="" value="" maxlength="1">
                        <input class="c-input-square js-input-square-7" type="text" name="" value="" maxlength="1">
                    </div>
                </div>
            </div>
            <div class="u-margin-t-30">
                <button class="c-button c-button--primary js-plaque-button" type="submit">Valider</button>
            </div>
            <div class="close-button">
                <span data-dismiss="modal" aria-label="Close" class="c-modal__close-btn icon-baseline-close-24px"></span>
            </div>
        </div>
    </div>
</div>




<section class="u-padding-b-100 u-padding-t-40 u-padding-y-50-mobile-down u-inline-center">
    <div class="l-container">
        <h2 class="text-center mobile-text-size-1-75"> <span style="color: #000000; font-weight: bold;"> Commandez votre</span> <span style="color: #203764; font-weight: bold;"> Carte Grise</span> </h2>
        <h4 class="text-center mobile-text-size-1-3" style="color: #203764;font-weight: bold;">J'obtiens ma carte grise en 3 étapes</h4>
        <div class="l-grid-row u-margin-t-60">
            <div class="l-col-4">
                <img class="c-img" data-src="https://documentsofficiels.fr/img/prix_icon.png" data-srcset="https://documentsofficiels.fr/img/prix_icon.png" alt="" width="60" height="60">
                <h5 style="color: #203764;" class=" c-h3 u-margin-t-30 u-margin-t-10-mobile-down u-fz-20-mobile-down">1<br>Je renseigne mon numéro d'immatriculation et accède à mon tarif</h5>
            </div>
            <div class="l-col-4 u-margin-t-40-mobile-down">
                <img class="c-img" data-src="https://documentsofficiels.fr/img/signez_icon.png" data-srcset="https://documentsofficiels.fr/img/signez_icon.png" alt="" width="60" height="60">
                <h5 style="color: #203764;" class=" c-h3 u-margin-t-30 u-margin-t-10-mobile-down u-fz-20-mobile-down">2<br>Je signe électroniquement mes documents et transfère mes documents</h5>
            </div>
            <div class="l-col-4 u-margin-t-40-mobile-down">
                <img class="c-img" data-src="https://documentsofficiels.fr/img/conduisez_icon.png" data-srcset="https://documentsofficiels.fr/img/conduisez_icon.png" alt="" width="60" height="60">
                <h5 style="color: #203764;" class=" c-h3 u-margin-t-30 u-margin-t-10-mobile-down u-fz-20-mobile-down">3<br>Je reçois par mail mon certificat provisioire en 24h et en courier recommandé sous 2 à 4 jours</h5>
            </div>
            
            <!--<div class="l-col-3 u-margin-t-40-mobile-down">
                <div class="u-vertical-container">
                    <div class="u-vertical-container__cell u-vertical-container__cell--bottom u-height-60">
                        <img class="c-img" data-src="https://documentsofficiels.fr/img/conduisez_icon.png" data-srcset="https://documentsofficiels.fr/img/conduisez_icon.png" alt="" width="60" height="60">
                    </div>
                </div>
                <h5 style="color: #203764;" class=" c-h3 u-margin-t-30 u-margin-t-10-mobile-down u-fz-20-mobile-down">3<br>Je reçois par mail mon certificat provisioire en 24h et en courier recommandé sous 2 à 4 jours</h5>
            </div>!-->
            
        </div>
    </div>
</section>




<!--<section class="u-padding-b-100 u-padding-t-40 u-padding-y-50-mobile-down u-inline-center">
    <div class="l-container">
        <h2 class="text-center"> <span style="color: #000000; font-weight: bold;"> Commandez votre </span> <span style="color: #203764; font-weight: bold;"> Plaque d’Immatriculation</span> </h2>
        <h4 class="text-center" style="color: #203764;font-weight: bold;">Rien de plus facile</h4>
        <div class="l-grid-row u-margin-t-60 u-margin-reset-mobile-down">
            <div class="l-col-3">
                <img class="c-img" data-src="https://documentsofficiels.fr/img/rapide_icon.png" data-srcset="https://documentsofficiels.fr/img/rapide_icon.png" alt="" width="60" height="60">
                <h5 style="color: #203764;" class=" c-h3 u-margin-t-30 u-margin-t-10-mobile-down u-fz-20-mobile-down">Toutes vos démarches en quelques clics et minutes</h5>
                <p class="c-p u-margin-t-5 u-fz-16-mobile-down">Toutes vos démarches administratives rendues faciles et rapides en quelques clics.</p>
            </div>
            <div class="l-col-3 u-margin-t-40-mobile-down">
                <img class="c-img" data-src="https://documentsofficiels.fr/img/paiement_icon.png" data-srcset="https://documentsofficiels.fr/img/paiement_icon.png" alt="" width="60" height="60">
                <h5 style="color: #203764;" class=" c-h3 u-margin-t-30 u-margin-t-10-mobile-down u-fz-20-mobile-down">Paiement Ultra-Sécurisé, Régulé et Transparent</h5>
                <p class="c-p u-margin-t-5 u-fz-16-mobile-down">Nous sommes habilités et agréés par le Ministère de l'Intérieur.</p>
            </div>
            <div class="l-col-3 u-margin-t-40-mobile-down">
                <img class="c-img" data-src="https://documentsofficiels.fr/img/envoi_carte_grise_icon.png" data-srcset="https://documentsofficiels.fr/img/envoi_carte_grise_icon.png" alt="" width="60" height="60">
                <h5 style="color: #203764;" class=" c-h3 u-margin-t-30 u-margin-t-10-mobile-down u-fz-20-mobile-down">Livraison de votre carte grise et plaques en 24h/48h</h5>
                <p class="c-p u-margin-t-5 u-fz-16-mobile-down">
                    L'Imprimerie Nationale vous livre votre carte grise en recommandé. <br>
                    Les plaques d'immatriculation sont livrées à domicile ou en point relais.
                </p>
            </div>
            <div class="l-col-3 u-margin-t-40-mobile-down">
                <img class="c-img" data-src="https://documentsofficiels.fr/img/france_icon.png" data-srcset="https://documentsofficiels.fr/img/france_icon.png" alt="" width="60" height="60">
                <h5 style="color: #203764;" class=" c-h3 u-margin-t-30 u-margin-t-10-mobile-down u-fz-20-mobile-down">Habilitation du Ministère de l'Intérieur et du Trésor Public</h5>
                <p class="c-p u-margin-t-5 u-fz-16-mobile-down">Nous sommes habilités par le Ministère de l'Intérieur (N.230027) et le Trésor Public (N.125222)</p>
            </div>
        </div>
    </div>
</section>!-->

<section class="u-padding-y-120 u-padding-y-50-mobile-down u-inline-center" style="background-color: #203764;">
    <div class="l-container">
        <h2 class="c-h2 u-fz-24-mobile-down u-margin-t-30 text-white">DocumentsOfficiels.fr est un service habilité par le Ministère de l'Intérieur</h2>
        <p class="c-p u-large u-fz-15-mobile-down u-margin-t-10 ekomiContainer text-white">Habilité par le Ministère de l'Intérieur (<b>habilitation n°230027</b>) et agréé par le Trésor Public (<b>agrément n°125222</b>), DocumentsOfficiels.fr vous permet de faire votre demande d'immatriculation conformément à la réglementation en vigueur. <br><br>À vos côtés à chaque étape, la plateforme vous offre également un accompagnement sur mesure afin d'obtenir votre carte grise plus facilement et plus rapidement.</p><br><br>
        <img class="c-img" data-src="https://documentsofficiels.fr/Documentoffciels_Resources/Home/stars.png" alt="" width="188" height="32">
        <h2 class="c-h2 u-fz-24-mobile-down u-margin-t-30 text-white">Rejoignez nos clients satisfaits</h2>
    </div>
</section>


<div id="rgpd" class="rgpd-padding-change" style="display:none">
    <div class="mainTitle">Choisissez vos préférences pour les cookies</div>
    <div class="top">
        <p class="mainDescription mobile-font-8" style="font-size: 12px;">
            Nous utilisons des cookies afin d'améliorer votre expérience et afin de fournir nos services dans les meilleures conditions.
            Vous pouvez les accepter, les choisir ou <u id="rgpd_refus" class="refuser">tout refuser</u>.
            Pour plus d’informations, vous pouvez <a href="/" class="link" target="_blank">consulter notre page dédiée.</a>
        </p>
        <div class="buttons alignCenterXY">
            <div id="rgpd_choisir" class="cta2 white">En savoir plus</div>
            <div id="rgpd_valider" class="cta1"></div>
        </div>
    </div>
    <div id="rgpd_bottom" class="bottom" style="display:none">
        <section class="section">
            <div class="sectionTop">
                <p class="label">Assistance</p>
                <div id="rgpd_radio_assistance" class="radioContainer">
                    <div class="curseurContainer">
                        <div class="radioCurseur active">
                            <span class="elemCurseur"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sectionBottom">
                <p class="description">Ces cookies sont essentiels pour vous donner accès à certaines fonctionnalités de notre site.</p>
                <div id="rgpd_additional_assistance" class="additional" style="display:none">
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">__zlcmid</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.documentsofficiels.fr</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 an</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Le widget de chat en direct définit les cookies pour stocker l'identifiant du chat en direct de Zopim utilisé pour identifier un appareil à travers les visites.</span></p>
                    </div>
                </div>
            </div>
            <div id="rgpd_dropdown_assistance" class="iconsContainer">
                <span id="rgpd_dropdown_icon_assistance" class="c-icon icon-Arrow_Dropdown_Icon"></span>
            </div>
        </section>
        <section class="section">
            <div class="sectionTop">
                <p class="label">Performance</p>
                <div id="rgpd_radio_audience" class="radioContainer">
                    <div class="curseurContainer">
                        <div class="radioCurseur active">
                            <span class="elemCurseur"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sectionBottom">
                <p class="description">Ces cookies recueillent des informations sur la façon dont les visiteurs utilisent un site web, par exemple les pages que les visiteurs consultent le plus souvent, et s'ils obtiennent des messages d'erreur sur les pages Web.Ces cookies ne collectent pas d'informations permettant d'identifier un visiteur. Toutes les informations que ces cookies collectent sont agrégées et donc anonymes. Elles ne sont utilisées que pour améliorer le fonctionnement d'un site web.</p>
                <div id="rgpd_additional_audience" class="additional" style="display:none">
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">_ga_YGSD4JYL86</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.documentsofficiels.fr</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">13 mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce nom de cookie est associé à Google Analytics 4 - qui est une mise à jour importante du service d'analyse de Google, plus couramment utilisé. Ce cookie est utilisé pour distinguer les utilisateurs uniques en attribuant un numéro généré de manière aléatoire comme identifiant du client. Il est inclus dans chaque demande de page d'un site et utilisé pour calculer les données relatives aux visiteurs, aux sessions et aux campagnes pour les rapports d'analyse des sites. Par défaut, il expire au bout de deux ans, bien que les propriétaires de sites puissent le personnaliser.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">_gid</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.documentsofficiels.fr</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 an</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Le nom de ce cookie est associé à Google Universal Analytics. Il semble s'agir d'un nouveau cookie et, depuis le printemps 2017, aucune information n'est disponible auprès de Google. Il semble stocker et mettre à jour une valeur unique pour chaque page visitée.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">_gaExpireDate</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.www.documentsofficiels.fr</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">13 mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Il s'agit d'un cookie associé à Google Analytics pour définir la conformité à la durée de vie du RGPD.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">_ga</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.documentsofficiels.fr</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">13 mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce nom de cookie est associé à Google Analytics Universal Analytics - qui est une mise à jour importante du service d'analyse le plus utilisé de Google. Ce cookie est utilisé pour distinguer les utilisateurs uniques en attribuant un numéro généré de manière aléatoire comme identifiant du client. Il est inclus dans chaque demande de page d'un site et utilisé pour calculer les données relatives aux visiteurs, aux sessions et aux campagnes pour les rapports d'analyse des sites. Par défaut, il expire au bout de deux ans, bien que les propriétaires de sites puissent le personnaliser.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">_gat_UA-12082178-1</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.documentsofficiels.fr</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value"></span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Il s'agit d'un cookie de type modèle défini par Google Analytics, où l'élément modèle du nom contient le numéro d'identité unique du compte ou du site web auquel il se rapporte. Il semble être une variante du cookie _gat qui est utilisé pour limiter la quantité de données enregistrées par Google sur les sites web à fort trafic.</span></p>
                    </div>
                </div>
            </div>
            <div id="rgpd_dropdown_audience" class="iconsContainer">
                <span id="rgpd_dropdown_icon_audience" class="c-icon icon-Arrow_Dropdown_Icon"></span>
            </div>
        </section>
        <section class="section">
            <div class="sectionTop">
                <p class="label">Ciblage</p>
                <div id="rgpd_radio_targeting" class="radioContainer">
                    <div class="curseurContainer">
                        <div class="radioCurseur active">
                            <span class="elemCurseur"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sectionBottom">
                <p class="description">Ces cookies sont utilisés pour diffuser des publicités plus pertinentes pour vous et vos intérêts, le nombre de fois que vous voyez une publicité et ainsi pour aider à mesurer l'efficacité des campagnes. Ils sont généralement placés par les réseaux avec l'autorisation de l'exploitant du site web. Ils se souviennent que vous avez visité un site web et ces informations sont partagées avec d'autres organisations telles que les les annonceurs. Très souvent, les cookies de ciblage ou de publicité sont liés à des fonctionnalités du site fournies par l'autre organisation.</p>
                <div id="rgpd_additional_targeting" class="additional" style="display:none">
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">MUID</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.bing.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 an</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie est largement utilisé par Microsoft comme identifiant unique de l'utilisateur. Il peut être défini par des scripts microsoft intégrés. On pense qu'il permet de se synchroniser avec de nombreux domaines Microsoft différents, ce qui permet de suivre les utilisateurs.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">ANON</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.bing.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 an</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Il s'agit d'un cookie Microsoft MSN 1st party pour permettre un contenu basé sur l'utilisateur.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">SSID</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.google.fr</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie contient des informations sur l'utilisation du site par l'utilisateur et les publicités qu'il aurait déjà vu.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">HSID</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.google.fr</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie est défini par DoubleClick (qui est la propriété de Google) pour établir un profil des intérêts du visiteur du site web et afficher des annonces pertinentes sur d'autres sites.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">APISID</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.google.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie DoubleClick est généralement placé sur le site par des partenaires publicitaires, et utilisé par eux pour établir un profil des intérêts du visiteur du site et afficher des annonces pertinentes sur d'autres sites. Ce cookie fonctionne en identifiant de manière unique votre navigateur et votre appareil.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">SID</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.google.fr</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Il s'agit d'un nom de cookie très courant mais lorsqu'il est trouvé comme cookie de session, il est susceptible d'être utilisé comme pour la gestion de l'état de la session.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">HSID</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.google.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie est défini par DoubleClick (qui est la propriété de Google) pour établir un profil des intérêts du visiteur du site web et afficher des annonces pertinentes sur d'autres sites.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">SAPISID</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.google.fr</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie DoubleClick est généralement placé sur le site par des partenaires publicitaires, et utilisé par eux pour établir un profil des intérêts du visiteur du site et afficher des annonces pertinentes sur d'autres sites. Ce cookie fonctionne en identifiant de manière unique votre navigateur et votre appareil.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">SAPISID</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.google.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie DoubleClick est généralement placé sur le site par des partenaires publicitaires, et utilisé par eux pour établir un profil des intérêts du visiteur du site et afficher des annonces pertinentes sur d'autres sites. Ce cookie fonctionne en identifiant de manière unique votre navigateur et votre appareil.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">SIDCC</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.google.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 an</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie fournit des informations sur la façon dont l'utilisateur final utilise le site web et sur toute publicité que l'utilisateur final a pu voir avant de visiter ledit site.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">APISID</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.google.fr</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie DoubleClick est généralement placé sur le site par des partenaires publicitaires, et utilisé par eux pour établir un profil des intérêts du visiteur du site et afficher des annonces pertinentes sur d'autres sites. Ce cookie fonctionne en identifiant de manière unique votre navigateur et votre appareil.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">SID</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.google.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Il s'agit d'un nom de cookie très courant mais lorsqu'il est trouvé comme cookie de session, il est susceptible d'être utilisé comme pour la gestion de l'état de la session.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">SSID</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.google.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie fournit des informations sur la façon dont l'utilisateur final utilise le site web et sur toute publicité que l'utilisateur final a pu voir avant de visiter ledit site.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">NID</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.google.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">6 mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce domaine est la propriété de Google Inc. Bien que Google soit principalement connu comme un moteur de recherche, la société fournit une gamme variée de produits et de services. Sa principale source de revenus est cependant la publicité. Google suit de près les utilisateurs, tant par ses propres produits et sites que par les nombreuses technologies intégrées à des millions de sites web dans le monde. Elle utilise les données recueillies par la plupart de ces services pour établir le profil des intérêts des internautes et vendre des espaces publicitaires à des organisations en fonction de ces profils d'intérêt, ainsi que pour aligner les publicités sur le contenu des pages où apparaissent les publicités de ses clients.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">_uetvid</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.documentsofficiels.fr</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 an</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Il s'agit d'un cookie utilisé par Microsoft Bing Ads et d'un cookie de suivi. Il nous permet de communiquer avec un utilisateur qui a déjà visité notre site web.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">_uetsid</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.documentsofficiels.fr</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 an</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie est utilisé par Bing pour déterminer les publicités à diffuser qui peuvent être pertinentes pour l'utilisateur final qui consulte le site.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">_gcl_au</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.documentsofficiels.fr</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">3 mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Utilisé par Google AdSense pour expérimenter l'efficacité de la publicité sur les sites web utilisant leurs services.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">IDE</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.doubleclick.net</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 an</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce domaine est la propriété de Doubleclick (Google). La principale activité commerciale est : Doubleclick est l'échange de publicité en temps réel de Google.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">NID</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.google.fr</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">6 mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce domaine est la propriété de Google Inc. Bien que Google soit principalement connu comme un moteur de recherche, la société fournit une gamme variée de produits et de services. Sa principale source de revenus est cependant la publicité. Google suit de près les utilisateurs, tant par ses propres produits et sites que par les nombreuses technologies intégrées à des millions de sites web dans le monde. Elle utilise les données recueillies par la plupart de ces services pour établir le profil des intérêts des internautes et vendre des espaces publicitaires à des organisations en fonction de ces profils d'intérêt, ainsi que pour aligner les publicités sur le contenu des pages où apparaissent les publicités de ses clients.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">fr</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.facebook.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">3 mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Contient une combinaison de navigateur et d'identifiant unique de l'utilisateur, utilisée pour la publicité ciblée.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">_fbp</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.documentsofficiels.fr</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">3 mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Utilisé par Facebook pour diffuser une série de produits publicitaires tels que les enchères en temps réel d'annonceurs tiers.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">DV</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">www.google.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value"></span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce domaine est la propriété de Doubleclick (Google). La principale activité commerciale est : Doubleclick est l'échange de publicité en temps réel de Google.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">xs</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.facebook.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 an</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Utilisé par Facebook pour diffuser une série de produits publicitaires tels que les enchères en temps réel d'annonceurs tiers.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">presence</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.facebook.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Utilisé par Facebook pour diffuser une série de produits publicitaires tels que les enchères en temps réel d'annonceurs tiers.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">sb</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.facebook.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Utilisé par Facebook pour diffuser une série de produits publicitaires tels que les enchères en temps réel d'annonceurs tiers.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">wd</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.facebook.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 semaine</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie fournit des informations sur la façon dont l'utilisateur final utilise le site web et sur toute publicité que l'utilisateur final a pu voir avant de visiter ledit site.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">datr</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.facebook.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie fournit des informations sur la façon dont l'utilisateur final utilise le site web et sur toute publicité que l'utilisateur final a pu voir avant de visiter ledit site.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">spin</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.facebook.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 jour</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie fournit des informations sur la façon dont l'utilisateur final utilise le site web et sur toute publicité que l'utilisateur final a pu voir avant de visiter ledit site.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">cppo</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.facebook.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 jour</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie fournit des informations sur la façon dont l'utilisateur final utilise le site web et sur toute publicité que l'utilisateur final a pu voir avant de visiter ledit site.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">c_user</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.facebook.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 an</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie fournit des informations sur la façon dont l'utilisateur final utilise le site web et sur toute publicité que l'utilisateur final a pu voir avant de visiter ledit site.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">RUL</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.doubleclick.net</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 an</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce domaine est la propriété de Doubleclick (Google). La principale activité commerciale est : Doubleclick est une bourse de publicité en temps réel de Google.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">test_cookie</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.doubleclick.net</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 jour</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie est défini par DoubleClick (qui est la propriété de Google) pour déterminer si le navigateur du visiteur du site web supporte les cookies.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">lang</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.ads.linkedin.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value"></span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Il existe de nombreux types différents de cookies associés à ce nom, et il est généralement recommandé d'examiner plus en détail la manière dont ils sont utilisés sur un site Web particulier. Cependant, dans la plupart des cas, il sera probablement utilisé pour stocker les préférences linguistiques, potentiellement pour servir le contenu dans la langue stockée.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">AMCV_14215E3D5995C57C0A495C55%40AdobeOrg</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.linkedin.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">6 mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Il s'agit d'un nom de cookie de type modèle associé à Adobe Marketing Cloud. Il stocke un identifiant de visiteur unique et utilise un identifiant d'organisation pour permettre à une entreprise de suivre les utilisateurs à travers ses domaines et services.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">li_mc</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.linkedin.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Utilisé comme un cache temporaire pour éviter les consultations de la base de données pour le consentement du membre pour l'utilisation de cookies non essentiels et utilisé pour avoir des informations sur le consentement du côté client afin d'appliquer le consentement du côté client.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">lms_analytics</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.linkedin.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Utilisé pour stocker des informations sur l'heure à laquelle une synchronisation avec le cookie lms_analytics a eu lieu pour les utilisateurs des pays désignés.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">lms_ads</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.linkedin.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Used to identify LinkedIn Members off LinkedIn in the Designated Countries for advertising.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">AnalyticsSyncHistory</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.linkedin.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Utilisé pour stocker des informations sur l'heure à laquelle une synchronisation a eu lieu avec le cookie lms_analytics.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">_gid</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.linkedin.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 jour</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce nom de cookie est associé à Google Analytics Universal Analytics - qui est une mise à jour importante du service d'analyse le plus utilisé de Google. Ce cookie est utilisé pour distinguer les utilisateurs uniques en attribuant un numéro généré de manière aléatoire comme identifiant du client. Il est inclus dans chaque demande de page d'un site et utilisé pour calculer les données relatives aux visiteurs, aux sessions et aux campagnes pour les rapports d'analyse des sites. Par défaut, il expire au bout de deux ans, bien que les propriétaires de sites puissent le personnaliser.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">gpv_pn</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.linkedin.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">6 mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie recueille des données pour analyser l'utilisation du site Web par le visiteur, notamment le suivi des activités, les visites de pages et les liens cliqués.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">dfpfpt</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.linkedin.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">6 mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Utilisé par les domaines non-www pour indiquer le statut de connexion d'un membre.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">liap</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.linkedin.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 an</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Utilisé par les domaines non-www pour indiquer le statut de connexion d'un membre.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">aam_uuid</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.linkedin.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Définir pour la synchronisation des ID pour Adobe Audience Manager.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">lidc</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.linkedin.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 jour</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Il s'agit d'un cookie Microsoft MSN 1st party qui assure le bon fonctionnement de ce site web.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">mbox</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.linkedin.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">6 mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Utilisé par Adobe Target pour analyser la pertinence du contenu en ligne.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">lissc</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.linkedin.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Cookies utilisés par LinkedIn pour identifier l'ID du navigateur (défini à partir des boutons de partage et des balises publicitaires de LinkedIn), pour le routage à partir des boutons de partage et des balises publicitaires, pour définir le paramètre local/langue par défaut.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">bcookie</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.linkedin.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Cookie d'identification du navigateur pour identifier de manière unique les appareils accédant à LinkedIn afin de détecter les abus sur la plateforme.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">_ga</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.linkedin.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce nom de cookie est associé à Google Analytics Universal Analytics - qui est une mise à jour importante du service d'analyse le plus utilisé de Google. Ce cookie est utilisé pour distinguer les utilisateurs uniques en attribuant un numéro généré de manière aléatoire comme identifiant du client. Il est inclus dans chaque demande de page d'un site et utilisé pour calculer les données relatives aux visiteurs, aux sessions et aux campagnes pour les rapports d'analyse des sites. Par défaut, il expire au bout de deux ans, bien que les propriétaires de sites puissent le personnaliser.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">__ssid</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.linkedin.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">9 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Certains cookies sont utilisés pour authentifier les utilisateurs, afin de s'assurer que seul le propriétaire réel d'un compte peut y accéder. Par exemple, les cookies appelés 'SID' et 'HSId' contiennent des enregistrements signés numériquement et cryptés de l'identifiant du compte Google d'un utilisateur et de la dernière heure de connexion.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">_guid</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.linkedin.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">4 mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Utilisé pour identifier un membre de LinkedIn pour la publicité par le biais de Google Ads.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">UserMatchHistory</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.linkedin.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Synchronisation de l'ID des publicités LinkedIn.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">_gcl_au</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.linkedin.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">4 mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Utilisé par Google Analytics pour comprendre l'interaction des utilisateurs avec le site et la publicité.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">s_tslv</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.linkedin.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">6 mois</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Utilisé pour conserver et récupérer le temps écoulé depuis la dernière visite dans Adobe Analytics.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">SIDCC</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.youtube.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">1 an</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie fournit des informations sur la façon dont l'utilisateur final utilise le site web et sur toute publicité que l'utilisateur final a pu voir avant de visiter ledit site web.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">SAPISID</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.youtube.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie DoubleClick est généralement placé sur le site par des partenaires publicitaires, qui l'utilisent pour établir un profil des intérêts du visiteur du site et afficher des publicités pertinentes sur d'autres sites. Ce cookie fonctionne en identifiant de manière unique votre navigateur et votre appareil.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">APISID</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.youtube.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie DoubleClick est généralement placé sur le site par des partenaires publicitaires, qui l'utilisent pour établir un profil des intérêts du visiteur du site et afficher des publicités pertinentes sur d'autres sites. Ce cookie fonctionne en identifiant de manière unique votre navigateur et votre appareil.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">HSID</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.youtube.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie est défini par DoubleClick (qui appartient à Google) pour établir un profil des intérêts du visiteur du site Web et diffuser des annonces pertinentes sur d'autres sites.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">SID</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.youtube.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie est utilisé pour lire les vidéos YouTube intégrées sur le site Web.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">SSID</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.youtube.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Certains cookies sont utilisés pour authentifier les utilisateurs, afin de s'assurer que seul le propriétaire réel d'un compte peut y accéder. Par exemple, les cookies appelés 'SID' et 'HSID' contiennent des enregistrements signés numériquement et cryptés de l'identifiant du compte Google d'un utilisateur et de la dernière heure de connexion.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">YSC</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.youtube.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value"></span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie est défini par YouTube pour suivre les vues des vidéos intégrées.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">CONSENT</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.youtube.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">17 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie fournit des informations sur la façon dont l'utilisateur final utilise le site web et sur toute publicité que l'utilisateur final a pu voir avant de visiter ledit site web.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">LOGIN_INFO</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.youtube.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie est utilisé pour lire les vidéos YouTube intégrées sur le site Web.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">PREF</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.youtube.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie, qui peut être défini par Google ou Doubleclick, peut être utilisé par des partenaires publicitaires pour établir un profil d'intérêts afin de diffuser des annonces pertinentes sur d'autres sites. Il fonctionne en identifiant de manière unique votre navigateur et votre appareil.</span></p>
                    </div>
                    <div class="additionalContainer">
                        <p class="additionalRow"><span class="label">Nom : </span><span class="value">VISITOR_INFO1_LIVE</span></p>
                        <p class="additionalRow"><span class="label">Hôte : </span><span class="value">.youtube.com</span></p>
                        <p class="additionalRow"><span class="label">Durée : </span><span class="value">2 ans</span></p>
                        <p class="additionalRow"><span class="label">Description : </span><span class="value">Ce cookie est utilisé pour lire les vidéos YouTube intégrées sur le site Web.</span></p>
                    </div>
                </div>
            </div>
            <div id="rgpd_dropdown_targeting" class="iconsContainer">
                <span id="rgpd_dropdown_icon_targeting" class="c-icon icon-Arrow_Dropdown_Icon"></span>
            </div>
        </section>
    </div>
</div>

<?php
    require('footer.php');
?>