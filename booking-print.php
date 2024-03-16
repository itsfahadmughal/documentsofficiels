<?php
require_once "./app/Database_Connection.php";

if (session_id() == '') {
    session_start();
}
$order="";
if(isset($_GET['slug'])){
    $order=$_GET['slug'];
}
?>

<!DOCTYPE html>
<html lang="fr-FR">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="canonical" href="https://documentsofficiels.fr/" />
        <meta name='robots' content='max-image-preview:large, index, follow, max-snippet:-1, max-video-preview:-1' />

        <title>Documents Officiels - N°1 Des Cartes Grises Et Plaques En Ligne</title>
        <meta name="description" content="Documents Officiels est le N°1 Des Cartes Grises Et Plaques En Ligne Habilité par le Ministère de l'Intérieur et le Trésor Public." />
        <meta property="og:locale" content="fr_FR" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Documents Officiels - N°1 Des Cartes Grises Et Plaques En Ligne" />
        <meta property="og:description" content="N°1 Des Cartes Grises Et Plaques En Ligne Habilité par le Ministère de l'Intérieur et le Trésor Public." />
        <meta property="og:url" content="https://documentsofficiels.fr/" />
        <meta property="og:site_name" content="DocumentsOfficiels" />
        <meta property="article:publisher" content="https://www.facebook.com" />
        <meta property="article:modified_time" content="2021-04-20T09:11:38+00:00" />
        <meta property="og:image" content="https://documentsofficiels.fr/Documentoffciels_Resources/Logo.png" />
        <meta property="og:image:width" content="320" />
        <meta property="og:image:height" content="320" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@documentsoffciels" />


        <link rel="icon" href="https://documentsofficiels.fr/Documentoffciels_Resources/Favicon.png" sizes="32x32" />
        <link rel="icon" href="https://documentsofficiels.fr/Documentoffciels_Resources/Favicon.png" sizes="192x192" />
        <link rel="apple-touch-icon" href="https://documentsofficiels.fr/Documentoffciels_Resources/Favicon.png" />
        <meta name="msapplication-TileImage" content="https://documentsofficiels.fr/Documentoffciels_Resources/Favicon.png" />
        <style type="text/css" id="wp-custom-css">
            @media (max-width: 991px) {
                .c-cluster__linkdropdown {
                    display: list-item !important;
                }
            }

            @media (max-width: 768px) {
                .mobile-header-logo-width{
                    width: 170px !important;
                }
                .mobile-float-left{
                    float: left;
                }

            }

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

            @media (max-width: 576px) {

                .four-images-desktop,
                .sub-header-desktop,
                .space-for-desktop {
                    display: none;
                }

                .inner {
                    height: 750px !important;
                }

                .cards{
                    overflow: auto;
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
                height: 600px;
            }

            .cards {
                margin-top: 20px;
            }
        </style>
    </head>

    <body class="">


        <div style="height: 20px;" class="space-for-desktop"></div>
        <div style="height: 10px;" class="space-for-mobile"></div>


        <div class="container cards">
            <div class="row inner">
                <div class="col-md-12 col-12" id="printable">

                    <div class="row mb-4">
                        <div class="col-lg-12 col-md-12 text-center">
                            <a href="https://documentsofficiels.fr/">
                                <img src="https://documentsofficiels.fr/Documentoffciels_Resources/Logo.png" alt="" width="250px">
                            </a>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-12 col-md-12">
                            <h3 class="text-center" style="color: #203764; font-weight: bold;">Merci pour votre commande!</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <p>Nous avons bien reçu votre demande. Notre équipe vous contactera dans les plus brefs délais.</p>
                            <br>
                            <p>Veuillez régulièrement consulter votre adresse e-mail de manière à suivre l'évolution de votre dossier.</p>
                            <br>
                            <p>La référence de votre dossier est XXXX. [<?php echo $order; ?>]</p>
                            <br>
                            <br>
                            <p>Cordialement,</p>
                            <p>L'équipe de Documents Officiels</p>
                            <a href="https://documentsofficiels.fr/" style="color: #203764;"><p>documentsofficiels.fr </p></a>

                        </div>
                    </div>

                </div>


                <div class="col-lg-12 col-md-12">
                    <button onclick="PrintElem()" class="btn btn-success" style="float:right">Print</button>
                </div>

            </div>
        </div>




        <script>
            function printDiv(divName){
                var printContents = document.getElementById(divName).innerHTML;
                alert (document.getElementById(divName));
                return false;
            }

            function PrintElem()
            {
                var mywindow = window.open('', 'PRINT', 'height=1000,width=1000');

                mywindow.document.write('<html><head><title>' + document.title  + '</title>');
                mywindow.document.write('</head><body >');
                mywindow.document.write('<h1>' + document.title  + '</h1>');
                mywindow.document.write(document.getElementById("printable").innerHTML);
                mywindow.document.write('</body></html>');

                mywindow.document.close(); // necessary for IE >= 10
                mywindow.focus(); // necessary for IE >= 10*/

                mywindow.print();
                mywindow.close();

                return false;
            }
        </script>


    </body>

</html>

