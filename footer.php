<style>
    #myBtn {
        display: none; /* Hidden by default */
        position: fixed; /* Fixed/sticky position */
        bottom: 53px; /* Place the button at the bottom of the page */
        right: 15px; /* Place the button 30px from the right */
        z-index: 99; /* Make sure it does not overlap */
        border: none; /* Remove borders */
        outline: none; /* Remove outline */
        color: white; /* Text color */
        cursor: pointer; /* Add a mouse pointer on hover */
        font-size: 18px; /* Increase font size */
    }

    @media only screen and (min-width: 769px) {
        #myBtn{
            bottom: 120px;
            right: 30px;
        }
        #tidio-chat-iframe{
            display: block !important;
        }
    }

    @media only screen and (max-width: 768px) {
        #tidio-chat-iframe{
            display: none !important;
        }
    }

</style>

<footer id="footer" class="l-footer">
    <div class="l-footer__main">
        <div class="l-container">
            <div class="l-grid-row">
                <div class="l-col-3">
                    <div id="nav_menu-2" class="widget-container widget_nav_menu">
                        <p class="c-p u-large u-black u-bold">Les Démarches Carte Grise</p>
                        <div class="menu-footer-1-container">
                            <ul id="menu-footer-1" class="menu">
                                <li id="menu-item-13372" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13372"><a href="https://documentsofficiels.fr/app/commander.php">Changement de Titulaire</a></li>
                                <li id="menu-item-11671" class="menu-item menu-item-type-post_type menu-item-object-page-html menu-item-11671"><a href="https://documentsofficiels.fr/app/commander_Enregistrement.php">Enregistrement de Cession</a></li>
                                <li id="menu-item-11672" class="menu-item menu-item-type-post_type menu-item-object-page-html menu-item-11672"><a href="https://documentsofficiels.fr/app/commander_Changement.php">Changement d'Adresse</a></li>
                                <li id="menu-item-11673" class="menu-item menu-item-type-post_type menu-item-object-page-html menu-item-11673"><a href="https://documentsofficiels.fr/app/commander_Demande.php">Demande de Duplicata</a></li>
                                <li id="menu-item-20611" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20611"><a href="https://documentsofficiels.fr/app/commander_D%C3%A9claration.php">Déclaration d'Achat</a></li>
                                <li id="menu-item-20508" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20508"><a href="https://documentsofficiels.fr/app/commander_Demande_d'immatriculation.php">Demande d'Immatriculation Provisoire WW</a></li>
                                <li id="menu-item-12360" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12360"><a href="https://documentsofficiels.fr/app/commander_W_garage.php">W Garage</a></li>
                                <li id="menu-item-18514" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18514"><a href="https://documentsofficiels.fr/app/commander_Changement_de_raison.php">Changement de Raison Sociale</a></li>
                                <li id="menu-item-12363" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12363"><a href="https://documentsofficiels.fr/app/commander_Passage.php">Passage en Collection</a></li>
                                <li id="menu-item-12367" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12367"><a href="https://documentsofficiels.fr/app/commander_Ajout.php">Ajout d'un Cotitulaire</a></li>
                                <li id="menu-item-12355" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12355"><a href="https://documentsofficiels.fr/app/commander_Changement_de_caract%C3%A9ristiques.php">Changement de Caractéristiques Techniques</a></li>
                                <li id="menu-item-12356" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12356"><a href="https://documentsofficiels.fr/app/commander_Usurpation.php">Usurpation de Plaques</a></li>
                                <li id="menu-item-12356" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12356"><a href="https://documentsofficiels.fr/app/commander_Changement_de_nom.php">Changement de Nom</a></li>
                                <li id="menu-item-12356" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12356"><a href="https://documentsofficiels.fr/app/commander_Changement_de_locataire.php">Changement de Locataire</a></li>
                                <li id="menu-item-12356" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12356"><a href="https://documentsofficiels.fr/app/commander_Correction_de_carte.php">Correction de Carte Grise</a></li>
                                <li id="menu-item-12356" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12356"><a href="https://documentsofficiels.fr/app/commander_Fiche.php">Fiche d'Identification d'un Véhicule</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="l-col-3 u-margin-t-40-mobile-down">
                    <div id="nav_menu-4" class="widget-container widget_nav_menu">
                        <p class="c-p u-large u-black u-bold">Les Autres Démarches Administratives</p>
                        <div class="menu-footer-3-container">
                            <ul id="menu-footer-3" class="menu">
                                <li id="menu-item-11685" class="menu-item menu-item-type-post_type menu-item-object-page-html menu-item-11685"><a href="https://documentsofficiels.fr/app/vignette_critair.php">Vignettes Crit'Air</a></li>
                                <li id="menu-item-11685" class="menu-item menu-item-type-post_type menu-item-object-page-html menu-item-11685"><a href="https://documentsofficiels.fr/app/extrait_kbis.php">Extrait Kbis</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="l-col-3 u-margin-t-40-mobile-down">
                    <div id="nav_menu-3" class="widget-container widget_nav_menu">
                        <p class="c-p u-large u-black u-bold">A Propos de DocumentsOfficiels.fr</p>
                        <div class="menu-footer-2-container">
                            <ul id="menu-footer-2" class="menu">
                                <li id="menu-item-11684" class="menu-item menu-item-type-post_type menu-item-object-page-html menu-item-11684"><a href="https://documentsofficiels.fr/a-propos-de-documents-officiels.php">A Propos</a></li>
                                <li id="menu-item-11678" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11678"><a href="https://documentsofficiels.fr/Documents_Submission.php">Connexion</a></li>
                                <li id="menu-item-11681" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11681"><a href="https://documentsofficiels.fr/contact.php">Contact</a></li>
                                <li id="menu-item-11682" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11681"><a href="https://documentsofficiels.fr/mentions-legales.php">Mentions Légales</a></li>
                                <li id="menu-item-19708" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19708"><a href="https://documentsofficiels.fr/conditions-generales-de-vente.php">Conditions Générales de Vente</a></li>
                                <li id="menu-item-19708" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19708"><a href="https://documentsofficiels.fr/blog">Notre Blog</a></li>                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="l-col-3 u-margin-t-40-mobile-down">
                    <p class="c-p u-large u-black u-bold">Actualités (Le Blog)</p>
                    <ul class="c-list u-margin-t-15">
                        <li><a class="c-link" href="https://documentsofficiels.fr/blog/2023/01/04/prix-carte-grise-en-france-les-regions-les-moins-cheres-en-2023/">Prix Carte Grise en France : les régions les moins chères en 2023</a> </li>
                        <li><a class="c-link" href="https://documentsofficiels.fr/blog/2023/01/04/les-10-voitures-electriques-les-plus-vendues-en-2022/">Les 10 voitures électriques les plus vendues en 2022</a> </li>
                        <li><a class="c-link" href="https://documentsofficiels.fr/blog/2023/01/04/les-vehicules-les-plus-vendues-en-france-en-2022/">Les voitures les plus vendues en France en 2022</a> </li>
                        <li><a class="c-link" href="https://documentsofficiels.fr/blog/2022/04/06/autocollants-environnementaux-nouvelles-regles-en-france-2022/">Autocollants environnementaux : nouvelles règles en France (2022)</a> </li>
                        <li><a class="c-link" href="https://documentsofficiels.fr/blog/2022/04/04/quid-du-certificat-provisoire-dimmatriculation-cpi%ef%bf%bc/">Quid du Certificat Provisoire d’Immatriculation (CPI)</a> </li>
                        <li><a class="c-link" href="https://documentsofficiels.fr/blog/2022/03/20/comment-et-ou-faire-sa-carte-grise-en-ligne/">Comment et où faire sa carte grise en ligne ?</a> </li>
                        <li><a class="c-link" href="https://documentsofficiels.fr/blog/2022/03/25/documents-a-fournir-pour-la-carte-grise-avec-documentsofficiels-fr/">Documents à fournir pour la carte grise avec DocumentsOfficiels.fr</a> </li>
                        <li><a class="c-link" href="https://documentsofficiels.fr/blog/2022/04/06/voitures-electriques-les-plus-vendues-en-2021/">Voitures électriques les plus vendues en 2021</a> </li>
                        <li><a class="c-link" href="https://documentsofficiels.fr/blog/2022/03/20/prix-du-carburant-quelles-solutions-pour-faire-baisser-la-facture/">Prix du carburant: quelles solutions pour faire baisser la facture ?</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="l-footer__sub">
        <div class="l-container">
            <div class="l-footer__socials">
                <div class="linksContainer">
                    <a target="_blank" rel="noopener" href="https://www.facebook.com/profile.php?id=100088846105378" class="socialIcon facebook">
                        <!-- <span class="c-icon icon-facebook2"></span> -->
                        <i class="fab fa-facebook-square"></i>
                    </a>
                </div>
            </div>
            <div class="c-p u-small u-inline-center">
                <div class="hreview-aggregate note" itemscope itemtype="https://schema.org/Product">
                    <span itemprop="brand" style="color:#FFFFFF"><b>DocumentsOfficiels.fr</b></span>
                    <span itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating" style="color:#FFFFFF">est noté <span itemprop="ratingValue">4.9</span>/5 basé sur <span itemprop="ratingCount" style="color:#FFFFFF"><b>30 812</b></span> avis</span> <span style="color:#FFFFFF">pour ses services de </span><span itemprop="name" style="color:#FFFFFF">carte grise, plaques d'immatriculation et vignettes Crit'Air</span>.<br>
                </div>
            </div>
        </div>
        </footer>
    <a class="c-link-backtop c-badge js-back-to-top" href="javascript:void(0);">
        <i class="fas fa-chevron-right white" aria-hidden="true"></i>
    </a>


    <a href="https://wa.me/+33684849334" id="myBtn" target="_blank">
        <img src="https://documentsofficiels.fr/Documentoffciels_Resources/whatsapp.png" width="55px"/>
    </a>



    <script>
        //Get the button:
        mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }


    </script>


    <script src="//code.tidio.co/skhg6zruyv33b51fw0kowupcldvj4kce.js"></script>

    <script src="https://www.documentsofficiels.fr/wp-content/cache/minify/bff16.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>

</html>

<!--
Performance optimized by W3 Total Cache. Learn more: https://www.boldgrid.com/w3-total-cache/

Object Caching 353/381 objects using disk
Page Caching using disk: enhanced 
Mibnifié utilisant disk

Served from: www.documentsofficiels.fr @ 2021-09-25 10:43:04 by W3 Total Cache
-->