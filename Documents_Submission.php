<script src="./res/jquery-3.2.1.min.js"></script>
<?php
require('header.php');

require('./app/Database_Connection.php');

$flag = true;

$certificate_id = null;

$Nom = null;
$CNIT = null;
$Emission = null;
$Cylindrée = null;
$Moteur = null;
$Année = null;
$Boite = null;
$Carburant = null;
$Version = null;
$Nombre = null;
$Numéro = null;
$Puissance = null;
$Puissance_Dynamique = null;
$Mise = null;



$Prénom = null;
$Téléphone = null;
$Email = null;
$Rue = null;
$Code = null;
$Ville = null;

$Email = null;
$Transaction_ID = null;

$commander_type="";

$Sign_Doc_1="";
$Sign_Doc_2="";
$Sign_Doc_3="";

$vehicle_num = "";


$CT = null;
// echo "Echo";
// exit;
if (isset($_POST["verification"])) {
    $Email = $_POST["Email_verification"];
    $Transaction_ID = $_POST["Transaction_ID"];


    $query = "SELECT a.*,b.*,c.* FROM `tbl_certificate` AS a INNER JOIN tbl_vehicle_data AS b 
        ON a.vehicle_api_data_id = b.vehicle_api_data_id INNER JOIN tbl_transaction_detail AS c 
        ON a.transaction_id = c.transaction_id WHERE a.email = '$Email' 
        AND a.transaction_id = '$Transaction_ID'";

    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {

        while ($row = mysqli_fetch_array($result)) {
            $certificate_id = $row['crt_id'];


            $Nom = $row['Description'];
            $CNIT = $row['CNIT'];
            $Emission = $row['Co2'];
            $Cylindrée = $row['Cylinders'];
            $Moteur = $row['EngineCC'];
            $Année = $row['anneeSortie'];
            $Boite = $row['boiteDeVitesse'];
            $commander_type = $row['commander_option'];
            $Carburant = $row['carburantVersion'];
            $Version = $row['libVersion'];
            $Nombre = $row['nbPlace'];
            $Numéro = $row['numSerieMoteur'];
            $Puissance = $row['puissance'];
            $Puissance_Dynamique = $row['puissanceDyn'];
            $Mise = $row['RegistrationDate'];

            $Prénom = $row['name'];
            $Téléphone = $row['telephone'];
            $Email = $row['email'];
            $Rue = $row['address'];
            $Code = $row['postal_code'];
            $Ville = $row['city'];
            $vehicle_num = $row['vehicle_number'];
        }

        $flag = false;
    } else {

        $query = "SELECT a.*,c.* FROM `tbl_certificate` AS a INNER JOIN tbl_transaction_detail AS c 
        ON a.transaction_id = c.transaction_id WHERE a.email = '$Email' 
        AND a.transaction_id = '$Transaction_ID'";

        $result = $conn->query($query);


        if ($result && $result->num_rows > 0) {

            while ($row = mysqli_fetch_array($result)) {
                $certificate_id = $row['crt_id'];

                $Prénom = $row['name'];
                $Téléphone = $row['telephone'];
                $Email = $row['email'];
                $Rue = $row['address'];
                $Code = $row['postal_code'];
                $Ville = $row['city'];
            }

            $flag = false;
        } else {

?>
<script>
    alert("Email Or Transaction ID Not Matched");
</script>
<?php
        }
    }
}




if (isset($_POST['submit'])) {
    $c_type="";
    if(isset($_POST['crt'])){
        $CT = $_POST['crt'];
    }
    if(isset($_POST['c_type'])){
        $c_type = $_POST['c_type'];
    }


    $files = array_filter($_FILES['upload']['name']); //Use something similar before processing files.
    // Count the number of uploaded files in array
    $total_count = count($_FILES['upload']['name']);
    // Loop through every file
    for( $i=0 ; $i < $total_count ; $i++ ) {
        $n = $i+1;
        //The temp file path is obtained
        $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
        //A file path needs to be present
        if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "Documents/SignedDoc-".$n."-" . rand() . "-" . $Prénom . $_FILES['upload']['name'][$i];
            //File is uploaded to temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                if($n == 1){
                    $Sign_Doc_1 = $newFilePath;
                }else if($n == 2){
                    $Sign_Doc_2 = $newFilePath;
                }else{
                    $Sign_Doc_3 = $newFilePath;
                }

            }
        }
    }


    $filename_Document_2 = $_FILES['Document_2']['name'];
    $filepath_Document_2 = $_FILES['Document_2']['tmp_name'];
    $ext_Document_2 = pathinfo($filename_Document_2, PATHINFO_EXTENSION);
    $target_dir_Document_2 = "Documents/Document_2-" . rand() . "-" . $Prénom . "." . $ext_Document_2;
    $image_path_Document_2 = $target_dir_Document_2;
    move_uploaded_file($filepath_Document_2, $image_path_Document_2);

    if ($filename_Document_2 == "") {
        $Document_2 = "";
    } else {
        $Document_2 = (string) $target_dir_Document_2;
    }

    $filename_Document_3 = $_FILES['Document_3']['name'];
    $filepath_Document_3 = $_FILES['Document_3']['tmp_name'];
    $ext_Document_3 = pathinfo($filename_Document_3, PATHINFO_EXTENSION);
    $target_dir_Document_3 = "Documents/Document_3-" . rand() . "-" . $Prénom . "." . $ext_Document_3;
    $image_path_Document_3 = $target_dir_Document_3;
    move_uploaded_file($filepath_Document_3, $image_path_Document_3);

    if ($filename_Document_3 == "") {
        $Document_3 = "";
    } else {
        $Document_3 = (string) $target_dir_Document_3;
    }


    $filename_Document_4 = $_FILES['Document_4']['name'];
    $filepath_Document_4 = $_FILES['Document_4']['tmp_name'];
    $ext_Document_4 = pathinfo($filename_Document_4, PATHINFO_EXTENSION);
    $target_dir_Document_4 = "Documents/Document_4-" . rand() . "-" . $Prénom . "." . $ext_Document_4;
    $image_path_Document_4 = $target_dir_Document_4;
    move_uploaded_file($filepath_Document_4, $image_path_Document_4);

    if ($filename_Document_4 == "") {
        $Document_4 = "";
    } else {
        $Document_4 = (string) $target_dir_Document_4;
    }


    $filename_Document_5 = $_FILES['Document_5']['name'];
    $filepath_Document_5 = $_FILES['Document_5']['tmp_name'];
    $ext_Document_5 = pathinfo($filename_Document_5, PATHINFO_EXTENSION);
    $target_dir_Document_5 = "Documents/Document_5-" . rand() . "-" . $Prénom . "." . $ext_Document_5;
    $image_path_Document_5 = $target_dir_Document_5;
    move_uploaded_file($filepath_Document_5, $image_path_Document_5);

    if ($filename_Document_5 == "") {
        $Document_5 = "";
    } else {
        $Document_5 = (string) $target_dir_Document_5;
    }


    $filename_Document_6 = $_FILES['Document_6']['name'];
    $filepath_Document_6 = $_FILES['Document_6']['tmp_name'];
    $ext_Document_6 = pathinfo($filename_Document_6, PATHINFO_EXTENSION);
    $target_dir_Document_6 = "Documents/Document_6-" . rand() . "-" . $Prénom . "." . $ext_Document_6;
    $image_path_Document_6 = $target_dir_Document_6;
    move_uploaded_file($filepath_Document_6, $image_path_Document_6);

    if ($filename_Document_6 == "") {
        $Document_6 = "";
    } else {
        $Document_6 = (string) $target_dir_Document_6;
    }



    $filename_Document_7 = $_FILES['Document_7']['name'];
    $filepath_Document_7 = $_FILES['Document_7']['tmp_name'];
    $ext_Document_7 = pathinfo($filename_Document_7, PATHINFO_EXTENSION);
    $target_dir_Document_7 = "Documents/Document_7-" . rand() . "-" . $Prénom . "." . $ext_Document_7;
    $image_path_Document_7 = $target_dir_Document_7;
    move_uploaded_file($filepath_Document_7, $image_path_Document_7);

    if ($filename_Document_7 == "") {
        $Document_7 = "";
    } else {
        $Document_7 = (string) $target_dir_Document_7;
    }



    $filename_Document_8 = $_FILES['Document_8']['name'];
    $filepath_Document_8 = $_FILES['Document_8']['tmp_name'];
    $ext_Document_8 = pathinfo($filename_Document_8, PATHINFO_EXTENSION);
    $target_dir_Document_8 = "Documents/Document_8-" . rand() . "-" . $Prénom . "." . $ext_Document_8;
    $image_path_Document_8 = $target_dir_Document_8;
    move_uploaded_file($filepath_Document_8, $image_path_Document_8);

    if ($filename_Document_8 == "") {
        $Document_8 = "";
    } else {
        $Document_8 = (string) $target_dir_Document_8;
    }

    $Document_Query = "INSERT INTO `tbl_documents_submitted`(`crt_id`, `document_2`, `document_3`, `document_4`, `document_5`, `document_6`, `document_7`, `document_8`, `sign_doc_1`, `sign_doc_2`, `sign_doc_3`, `commander_type`) 
        VALUES ('$CT','$Document_2','$Document_3','$Document_4','$Document_5','$Document_6','$Document_7','$Document_8','$Sign_Doc_1','$Sign_Doc_2','$Sign_Doc_3','$c_type')";

    if ($conn->query($Document_Query) === TRUE) {
        echo "<script>
alert('Documents Stored Successfully');
window.location.href='Documents_Submission.php';
</script>";
    }
}


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

    span.side_title {
        color: black;
        font-weight: 600;
    }

    span.side_title1 {
        color: black;
        font-size: 20px;
        font-weight: 600;
    }

    .cta1 {
        border-radius: 100px;
        padding: 10px 25px;
        cursor: pointer;
        background-color: #203864;
        border: 1px solid #203864;
        color: white
    }

    .Telephone:focus {
        border: 1px solid #203864;
    }

    .upload-btn-wrapper {
        position: relative;
        overflow: hidden;
        display: inline-block;
    }

    .btn {
        border: 2px solid gray;
        color: gray;
        background-color: white;
        padding: 8px 20px;
        border-radius: 8px;
        font-size: 20px;
        font-weight: bold;
    }

    .upload-btn-wrapper input[type=file] {
        font-size: 100px;
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
    }

    span.side_value {
        font-size: 18px;
        font-weight: 600;
        color: #203864;
        padding-left: 5px;
    }

    .alignColumnCenterX {
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    @media only screen and (min-width: 1500px) {
        .orderMainWidth_section {
            width: 600px;
            margin: auto;
        }
    }

    #partialsIdentification .identHead {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 20px;
    }

    #partialsIdentification .identHead .title {
        color: #000;
        font-weight: 600;
        text-align: center;
    }

    #input .inputContainer {
        position: relative;
        border: 1px solid #E1E1E1;
        border-radius: 5px;
    }

    #input .inputContainer.active {
        border-color: #203864
    }

    #input .inputContainer .inputLabel {
        position: absolute;
        z-index: 0;
        left: 10px;
        transition: top .2s ease-in, font-size .2s ease-in;
        font-size: 18px;
        color: #57617a;
        font-weight: 400;
        line-height: 1;
    }

    label,
    output {
        display: inline-block;
    }

    #input .inputContainer .inputContent {
        position: relative;
        font-size: 16px;
        display: flex;
        align-items: center;
    }

    #input .inputContainer .inputContent .elemInp {
        width: 100%;
        height: 100%;
        color: #000;
        border-radius: 5px;
        padding: 16px 0 0 10px;
        background-color: transparent;
        border: none;
    }

    input {
        -webkit-appearance: none;
        box-shadow: none !important;
    }

    #partialsIdentification .mt12 {
        margin-top: 12px;
    }

    .checkboxContainer {
        display: inline-block;
        cursor: pointer;
        width: 100%;
        min-height: 30px;
    }

    .checkboxContainer .defaultMode {
        display: flex;
    }

    .checkboxContainer .check {
        border: 2px solid #E1E1E1;
        width: 20px;
        height: 20px;
        flex-shrink: 0;
        color: #fff;
        border-radius: 2px;
    }

    .alignCenterXY {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .checkboxContainer .defaultMode .text {
        margin-top: -2px;
        align-self: baseline;
        font-size: 14px;
        color: #57617a;
        margin-left: 10px;
    }

    #partialsIdentification .identCtaContainer .cta1 {
        font-size: 16px;
    }

    [type="button"]:not(:disabled),
    [type="reset"]:not(:disabled),
    [type="submit"]:not(:disabled),
    button:not(:disabled),
    summary {
        cursor: pointer;
    }

    .retourContainer {
        cursor: pointer;
        font-size: 16px;
        color: #57617A;
        background-color: transparent;
        margin-top: 30px;
    }

    #partialsIdentification .identCtaContainer {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    @media only screen and (min-width: 1025px) {

        #partialsIdentification .identHead .title {
            font-size: 26px;
        }

        #partialsIdentification .identContainer {
            display: flex;
            width: 100%;
        }

        #partialsIdentification .identContainer .identContainerLeft {
            flex: 1;
        }

        #partialsIdentification .identContainer .identContainerLeft .identContent {
            display: flex;
            flex-direction: column;
        }

        #input .inputContainer .inputLabel {
            top: 25px;
        }

        #input .inputContainer .inputLabel.labelTop {
            z-index: 1;
            font-size: 14px
        }

        #input .inputContainer .inputLabel.labelTop {
            top: 10px;
        }

        #input .inputContainer .inputContent {
            height: 68px;
        }

        #partialsIdentification .identContainer .identContainerLeft .identContent .identContentPrix {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        #partialsIdentification .identCtaContainer .cta1 {
            height: 70px;
            width: 200px;
        }

        #partialsIdentification .identCtaContainer {
            margin-top: 30px;
        }
    }
</style>

<div style="height: 100px;" class="space-for-desktop"></div>
<div style="height: 30px;" class="space-for-mobile"></div>

<?php
if ($flag) {
?>
<form action="" enctype="multipart/form-data" method="POST">


    <!-- Step 1 -->
    <h6></h6>
    <section id="Step_1">
        <div class="stepBox orderMainWidth_section alignColumnCenterX">
            <div class="head alignColumnCenterX"></div>
            <div class="content">
                <app-partials-identification>
                    <div id="partialsIdentification" class="tunnel">
                        <div class="identHead">
                            <!---->
                            <div class="title">
                                <p>Entrez votre adresse e-mail ainsi que votre ID de Transaction que vous avez reçu par e-mail
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </p>
                                <!---->
                                <!---->
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                        </div>
                        <!---->
                        <div class="identContainer">
                            <div class="identContainerLeft">
                                <div class="identContent">
                                    <app-inp>
                                        <div id="input">
                                            <!---->
                                            <!---->
                                            <div id="inputContainer_Email" class="inputContainer"><span id="inputLabel_Email" class="inputLabel"><label for="3jczxb25o5e">Email</label></span>
                                                <!---->
                                                <!---->
                                                <div id="inputContent_Email" class="inputContent"><input name="Email_verification" id="Veuillez_Email" spellcheck="false" autocorrect="off" autocomplete="off" class="elemInp" type="email" id="3jczxb25o5e" placeholder="" maxlength="50">
                                                    <!---->
                                                </div>
                                                <!---->
                                            </div>
                                            <!---->
                                        </div>
                                    </app-inp>
                                    <app-inp class="mt12">
                                        <div id="input">
                                            <!---->
                                            <!---->
                                            <div id="inputContainer_Codepostal" class="inputContainer"><span id="inputLabel_Codepostal" class="inputLabel"><label for="zf911a0lsta">Transaction ID</label></span>
                                                <!---->
                                                <!---->
                                                <div id="inputContent_Codepostal" class="inputContent"><input name="Transaction_ID" id="inputContent_Input_Codepostal" spellcheck="false" autocorrect="off" autocomplete="off" class="elemInp" type="tel" id="zf911a0lsta" placeholder="" maxlength="5">
                                                    <!---->
                                                </div>
                                                <!---->
                                            </div>
                                            <!---->
                                        </div>
                                    </app-inp>
                                    <!---->
                                    <!-- <div class="identContentPrix">
<app-checkbox>
<div class="checkboxContainer">
<div class="defaultMode pdc">
<div id="step_6_checkbox" class="check alignCenterXY">

</div>
<p class="text">J'accepte la <u>politique de confidentialité</u>.</p>
</div>





</div>
</app-checkbox>



</div> -->
                                    <!---->
                                </div>
                                <!---->
                                <!---->
                            </div>
                        </div>
                        <!---->

                        <div id="Veuillez1_Suivant" class="identCtaContainer mainCta big"><button type="submit" name="verification" class="cta1"><span>Suivant</span>
                            <!---->
                            <!---->
                            </div>
                            <!---->
                            <!---->
                        </div>
                        </app-partials-identification>
                    </div>

                <!---->
            </div>
            </section>
        </br>
    </br>
</br>
</br>

</form>

<?php
}
?>

<?php

if (!$flag) {
?>

<!-- Step 2 -->
<h6></h6>
<section id="Step_2">
    <!-- this section for desktop -->

    <div class="container sub-header-desktop">
        <div class="row">
            <div class="col-md-3">
                <img src="https://documentsofficiels.fr/img/documentsofficiels_professionnel_agree_habilitation.png" alt="" loading="lazy" width="80%" height="auto">
            </div>
            <div class="col-md-6 my-auto">
                <h3 class="text-center" style="color: #203864; font-weight: bold;">Plus que quelques documents à nous fournir…</h3>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-2 p-1">
                        <img src="https://documentsofficiels.fr/Documentoffciels_Resources/iii.png" alt="" loading="lazy" width="100%" height="auto">
                    </div>
                    <div class="col-md-10 p-0">
                        <p style="font-size: 13px;"> <span style="font-weight: bold;color: #203864;"><?php echo random_int(50, 150) ?> personnes</span> consultent actuellement le site.
                            Dernière demande en ligne il y a <span style="font-weight: bold;color: #203864;"><?php echo random_int(1, 10) ?> minutes.</span></p>
                    </div>
                </div>
            </div>
        </div>

        <div style="height: 50px;" class="space-for-desktop"></div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 my-auto">
                <h4 class="text-left" style="color: #203864; font-weight: 600;">
                    IMPORTANT:</br>
                Ces documents sont éxigés par le Ministère de l’Intérieur et sont obligatoires pour effectuer votre demarche.
                </h4>
            </br>
        <p class="text-left" style="color: #203864; font-weight: 600;">
            Votre demande sera prise en charge sous 24h dès reception de tous documents à fournir.Notre équipe se tient à votre disposition pour vous aider.
        </p>
        </br>

    <?php
    if ($Nom == null) {
    } else {
    ?>
    <h4 class="text-center" style="color: #203864; font-weight: 600;">
        Les détails de votre véhicule
    </h4>
    <?php
    }
    ?>

    </br>
</div>
<div class="col-md-2"></div>
</div>
<?php
             if ($Nom == null) {
             } else {
?>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 my-auto">
        <div class="row">
            <div class="col-7">
                <span class="side_title">Nom:</span><span class="side_value"><?php echo $Nom; ?></span><br>
                <span class="side_title">CNIT:</span><span class="side_value"><?php echo $CNIT; ?></span><br>
                <span class="side_title">Emission de CO2:</span><span class="side_value"><?php echo $Emission; ?></span><br>
                <span class="side_title">Cylindrée:</span><span class="side_value"><?php echo $Cylindrée; ?></span><br>
                <span class="side_title">Moteur:</span><span class="side_value"><?php echo $Moteur; ?></span><br>
                <span class="side_title">Année de Sortie:</span><span class="side_value"><?php echo $Année; ?></span><br>
                <span class="side_title">Boite de Vitesse:</span><span class="side_value"><?php echo $Boite; ?></span><br>
                <span class="side_title">Carburant:</span><span class="side_value"><?php echo $Carburant; ?></span><br>
                <span class="side_title">Version:</span><span class="side_value"><?php echo $Version; ?></span><br>
                <span class="side_title">Nombre de Places:</span><span class="side_value"><?php echo $Nombre; ?></span><br>
                <span class="side_title">Numéro de Série Moteur:</span><span class="side_value"><?php echo $Numéro; ?></span><br>
                <span class="side_title">Puissance:</span><span class="side_value"><?php echo $Puissance; ?></span><br>
                <span class="side_title">Puissance Dynamique:</span><span class="side_value"><?php echo $Puissance_Dynamique; ?></span><br>
                <span class="side_title">Mise en Circulation:</span><span class="side_value"><?php echo $Mise; ?></span><br>
            </div>
            <?php
                     $flag_vehicle = 1;

                     $ch = curl_init();
                     $url = "https://www.immatriculationapi.com/api/reg.asmx/CheckFrance?RegistrationNumber=$vehicle_num&username=olitest";

                     curl_setopt($ch, CURLOPT_URL, $url);
                     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                     curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

                     $contents = curl_exec($ch);

                     if (strcmp(strtolower(trim($contents)), "out of credit") == 0) {
                         $flag_vehicle = 0;
                     } else if (strcmp(strtolower(trim($contents)), "french lookup failed") == 0) {
                         $flag_vehicle = 0;
                     }
                     
                     if ($flag_vehicle !== 0) {
                         $data = simplexml_load_string($contents);
                     }

                     curl_close($ch);

                     $data = json_decode($data->vehicleJson, true);

            ?>
            <div class="col-5">
                <?php if($flag_vehicle == 0){ ?>
                <img onerror="this.src='./app/App_Resources/300.png';" width="100%" src="./app/App_Resources/300.png" alt="car">
                <?php }else{ ?>
                <img onerror="this.src='./app/App_Resources/300.png';" src="<?php

        $bits = parse_url($data['ImageUrl']);

        $newHost = substr($bits["host"], 0, 4) !== "www." ? "www." . $bits["host"] : $bits["host"];

        $url2 = $bits["scheme"] . "://" . $newHost . (isset($bits["port"]) ? ":" . $bits["port"] : "") . $bits["path"] . (!empty($bits["query"]) ? "?" . $bits["query"] : "");;

        echo $url2; ?>" alt="car" width="100%">
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>

<?php
                    }
?>



<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 my-auto">
        </br>
    </br>
</br>
<h4 class="text-center" style="color: #203864; font-weight: 600;">
    Vos coordonnées
</h4>
</br>
</br>
<span class="side_title1">Nom et Prénom:</span><span class="side_value"><?php echo $Prénom; ?></span><br>
<span class="side_title1">Téléphone:</span><span class="side_value"><?php echo $Téléphone; ?></span><br>
<span class="side_title1">Email:</span><span class="side_value"><?php echo $Email; ?></span><br>
<span class="side_title1">Rue:</span><span class="side_value"><?php echo $Rue; ?></span><br>
<span class="side_title1">Code Postal:</span><span class="side_value"><?php echo $Code; ?></span><br>
<span class="side_title1">Ville:</span><span class="side_value"><?php echo $Ville; ?></span><br>
</div>
<div class="col-md-2"></div>
</div>


<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 my-auto">
        </br>
    </br>
</br>
<h3 class="text-center" style="color: #203863; font-weight: 600;">
    Document 1
</h3>
<h4 class="text-center" style="color: #203864; font-weight: 600;">
    Document Cerfa à signer
</h4>
</br>
<p class="text-center" style="color: #203864; font-weight: 600;">
    Vous allez être redirigé vers notre partenaire de signature électronique Universign. Le processus ne dure qu'une minute, assurez-vous simplement d'avoir accès au numéro de téléphone ci-dessous :
</p>
</br>
</br>
<div style="width: 100%; text-align: center;">
    <input name="Document_1" class="Telephone" type="tel" value="<?php echo $Téléphone; ?>" placeholder="Telephone" style="width: 90%; padding: 20px;background: #F1F1F5;border: none;border-radius: 5px;" />
    </br>
</br>
<button id="Suivant_CarNumber" onclick="DownloadFile('<?php echo $commander_type; ?>')" class="cta1" style="height: 70px;font-size: 16px;width: 400px;">Cliquez pour Télécharger le document pour signer et soumettre ci-dessous</button>
</div>
</br>
</br>
</div>
<div class="col-md-3"></div>
</div>

<form action="" method="POST" enctype="multipart/form-data">


    <input type="hidden" name="crt" value="<?php echo $certificate_id; ?>" />
    <input type="hidden" name="c_type" value="<?php echo $commander_type; ?>" />


    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 my-auto">
            </br>
        </br>
    </br>

<h3 class="text-center" style="color: #203863; font-weight: 600;">
    <u> Documents signés </u>
</h3>
<div style="box-shadow: 0px 0px 10px rgb(0 0 0 / 10%);">


    <div style="text-align: center;padding: 50px;background: #F5F6FA;">
        <div style="width: 100%;">
            <div class="upload-btn-wrapper">
                <button class="btn" id="signed_files_btn" style="cursor: pointer;">Sélectionnez votre/vos fichier(s)</button>
                <input name="upload[]" type="file" onchange="sub(this,'signed_files_btn')" multiple="multiple" style="cursor: pointer;" />
            </div>
        </div>
    </div>

</div>

</br>
</br>
</div>
<div class="col-md-3"></div>
</div>





<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 my-auto">
        </br>
    </br>
</br>

<h3 class="text-center" style="color: #203863; font-weight: 600;">
    <u> Document 2 </u>
</h3>
<h4 class="text-center" style="color: #203864; font-weight: 600;">
    Carte Grise
</h4>
</br>
<div style="box-shadow: 0px 0px 10px rgb(0 0 0 / 10%);">

    <div style="padding: 20px;">
        <div style="width: 100%;">
            <p class="text-center" style="color: #203864; font-weight: 600;">
                Vous allez être redirigé vers notre partenaire de
            </p>
        </div>
    </div>

    <div style="text-align: center;padding: 50px;background: #F5F6FA;">
        <div style="width: 100%;">
            <div class="upload-btn-wrapper">
                <button class="btn" id="doc_2_btn" style="cursor: pointer;">Upload a file</button>
                <input name="Document_2" onchange="sub(this,'doc_2_btn')" type="file" style="cursor: pointer;" />
            </div>
            </br>
        </br>
    <p class="text-center" style="color: #203864; font-weight: 600;">
        Vous allez être redirigé vers notre partenaire de
    </p>
</div>
</div>

</div>

</br>
</br>
</div>
<div class="col-md-3"></div>
</div>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 my-auto">
        </br>
    </br>
</br>

<h3 class="text-center" style="color: #203863; font-weight: 600;">
    <u> Document 3 </u>
</h3>
<h4 class="text-center" style="color: #203864; font-weight: 600;">
    Certificat de cession
</h4>
</br>
<div style="box-shadow: 0px 0px 10px rgb(0 0 0 / 10%);">

    <div style="padding: 20px;">
        <div style="width: 100%;">
            <p class="text-center" style="color: #203864; font-weight: 600;">
                Vous allez être redirigé vers notre partenaire de
            </p>
        </div>
    </div>

    <div style="text-align: center;padding: 50px;background: #F5F6FA;">
        <div style="width: 100%;">
            <div class="upload-btn-wrapper">
                <button class="btn" id="doc_3_btn" style="cursor: pointer;">Upload a file</button>
                <input name="Document_3" type="file" onchange="sub(this,'doc_3_btn')" style="cursor: pointer;" />
            </div>
            </br>
        </br>
    <p class="text-center" style="color: #203864; font-weight: 600;">
        Vous allez être redirigé vers notre partenaire de
    </p>
</div>
</div>

</div>

</br>
</br>
</div>
<div class="col-md-3"></div>
</div>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 my-auto">
        </br>
    </br>
</br>

<h3 class="text-center" style="color: #203863; font-weight: 600;">
    <u> Document 4 </u>
</h3>
<h4 class="text-center" style="color: #203864; font-weight: 600;">
    Permis de conduire (Recto/Verso)
</h4>
</br>
<div style="box-shadow: 0px 0px 10px rgb(0 0 0 / 10%);">

    <div style="padding: 20px;">
        <div style="width: 100%;">
            <p class="text-center" style="color: #203864; font-weight: 600;">
                Vous allez être redirigé vers notre partenaire de
            </p>
        </div>
    </div>

    <div style="text-align: center;padding: 50px;background: #F5F6FA;">
        <div style="width: 100%;">
            <div class="upload-btn-wrapper">
                <button class="btn" id="doc_4_btn" style="cursor: pointer;">Upload a file</button>
                <input name="Document_4" type="file" onchange="sub(this,'doc_4_btn')" style="cursor: pointer;" />
            </div>
            </br>
        </br>
    <p class="text-center" style="color: #203864; font-weight: 600;">
        Vous allez être redirigé vers notre partenaire de
    </p>
</div>
</div>

</div>

</br>
</br>
</div>
<div class="col-md-3"></div>
</div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 my-auto">
        </br>
    </br>
</br>

<h3 class="text-center" style="color: #203863; font-weight: 600;">
    <u> Document 5 </u>
</h3>
<h4 class="text-center" style="color: #203864; font-weight: 600;">
    Justificatif de domicile de moins de 3 mois
</h4>
</br>
<div style="box-shadow: 0px 0px 10px rgb(0 0 0 / 10%);">

    <div style="padding: 20px;">
        <div style="width: 100%;">
            <p class="text-center" style="color: #203864; font-weight: 600;">
                Vous allez être redirigé vers notre partenaire de
            </p>
        </div>
    </div>

    <div style="text-align: center;padding: 50px;background: #F5F6FA;">
        <div style="width: 100%;">
            <div class="upload-btn-wrapper">
                <button class="btn" id="doc_5_btn" style="cursor: pointer;">Upload a file</button>
                <input name="Document_5" type="file" onchange="sub(this,'doc_5_btn')" style="cursor: pointer;" />
            </div>
            </br>
        </br>
    <p class="text-center" style="color: #203864; font-weight: 600;">
        Vous allez être redirigé vers notre partenaire de
    </p>
</div>
</div>

</div>

</br>
</br>
</div>
<div class="col-md-3"></div>
</div>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 my-auto">
        </br>
    </br>
</br>

<h3 class="text-center" style="color: #203863; font-weight: 600;">
    <u> Document 6 </u>
</h3>
<h4 class="text-center" style="color: #203864; font-weight: 600;">
    Pièce d’identité en cours de validité (Recto/Verso)
</h4>
</br>
<div style="box-shadow: 0px 0px 10px rgb(0 0 0 / 10%);">

    <div style="padding: 20px;">
        <div style="width: 100%;">
            <p class="text-center" style="color: #203864; font-weight: 600;">
                Vous allez être redirigé vers notre partenaire de
            </p>
        </div>
    </div>

    <div style="text-align: center;padding: 50px;background: #F5F6FA;">
        <div style="width: 100%;">
            <div class="upload-btn-wrapper">
                <button class="btn" id="doc_6_btn" style="cursor: pointer;">Upload a file</button>
                <input name="Document_6" type="file" onchange="sub(this,'doc_6_btn')" style="cursor: pointer;" />
            </div>
            </br>
        </br>
    <p class="text-center" style="color: #203864; font-weight: 600;">
        Vous allez être redirigé vers notre partenaire de
    </p>
</div>
</div>

</div>

</br>
</br>
</div>
<div class="col-md-3"></div>
</div>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 my-auto">
        </br>
    </br>
</br>

<h3 class="text-center" style="color: #203863; font-weight: 600;">
    <u> Document 7 </u>
</h3>
<h4 class="text-center" style="color: #203864; font-weight: 600;">
    Attestation d’assurance du véhicule
</h4>
</br>

<h5 class="text-center" style="color: #203864; font-weight: 600;">
    Le véhicule doit obligatoirement etre assuré pour faire une demarche d’immatriculation
</h5>
</br>
<div style="box-shadow: 0px 0px 10px rgb(0 0 0 / 10%);">

    <div style="padding: 20px;">
        <div style="width: 100%;">
            <p class="text-center" style="color: #203864; font-weight: 600;">
                Vous allez être redirigé vers notre partenaire de
            </p>
        </div>
    </div>

    <div style="text-align: center;padding: 50px;background: #F5F6FA;">
        <div style="width: 100%;">
            <div class="upload-btn-wrapper">
                <button class="btn" id="doc_7_btn" style="cursor: pointer;">Upload a file</button>
                <input name="Document_7" type="file" onchange="sub(this,'doc_7_btn')" style="cursor: pointer;" />
            </div>
            </br>
        </br>
    <p class="text-center" style="color: #203864; font-weight: 600;">
        Vous allez être redirigé vers notre partenaire de
    </p>
</div>
</div>

</div>

</br>
</br>
</div>
<div class="col-md-3"></div>
</div>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 my-auto">
        </br>
    </br>
</br>

<h3 class="text-center" style="color: #203863; font-weight: 600;">
    <u> Document 8 </u>
</h3>
<h4 class="text-center" style="color: #203864; font-weight: 600;">
    Controle technique de moins de 6 mois
</h4>
</br>
</br>
<div style="box-shadow: 0px 0px 10px rgb(0 0 0 / 10%);">

    <div style="padding: 20px;">
        <div style="width: 100%;">
            <p class="text-center" style="color: #203864; font-weight: 600;">
                Vous allez être redirigé vers notre partenaire de
            </p>
        </div>
    </div>

    <div style="text-align: center;padding: 50px;background: #F5F6FA;">
        <div style="width: 100%;">
            <div class="upload-btn-wrapper">
                <button class="btn" id="doc_8_btn" style="cursor: pointer;">Upload a file</button>
                <input name="Document_8" type="file" onchange="sub(this,'doc_8_btn')" style="cursor: pointer;" />
            </div>
            </br>
        </br>
    <p class="text-center" style="color: #203864; font-weight: 600;">
        Vous allez être redirigé vers notre partenaire de
    </p>
</div>
</div>

</div>

</br>
</br>
<div style="text-align: center;padding: 50px;">
    <div style="width: 100%;">
        <button name="submit" type="submit" class="cta1" style="height: 70px;font-size: 16px;width: 200px;">Submit</button>
    </div>
</div>
</div>
<div class="col-md-3"></div>
</div>

<!--add download buttons-->


</form>


</div>
</section>

<?php
            }
?>
<?php
require('footer.php');
?>

<script>
    inputContent_Email_Fetch = null;

    $("#Veuillez_Email").focus(function() {
        $("#inputContainer_Email").addClass("active");
        $("#inputLabel_Email").addClass("labelTop");
        $("#inputContent_Email").addClass("active");
    });


    $("#Veuillez_Email").focusout(function() {

        $("#inputContainer_Email").removeClass("active");
        $("#inputContent_Email").removeClass("active");


        inputContent_Email_Fetch = $("#Veuillez_Email").val();
        if (!inputContent_Email_Fetch) {
            $("#inputLabel_Email").removeClass("labelTop");
        }
    });



    inputContent_Postal_Fetch = null;

    $("#inputContent_Input_Codepostal").focus(function() {
        $("#inputContainer_Codepostal").addClass("active");
        $("#inputLabel_Codepostal").addClass("labelTop");
        $("#inputLabel_Codepostal").addClass("active");
    });


    $("#inputContent_Input_Codepostal").focusout(function() {

        $("#inputContainer_Codepostal").removeClass("active");
        $("#inputLabel_Codepostal").removeClass("active");


        inputContent_Postal_Fetch = $("#inputContent_Input_Codepostal").val();
        if (!inputContent_Postal_Fetch) {
            $("#inputLabel_Codepostal").removeClass("labelTop");
        }
    });
</script>

<script type="text/javascript">

    function DownloadFile(command_type) {

        if(command_type == "Occasion"){
            file_d('cerfa_15776-02.pdf');
            file_d('cerfa_13750-05.pdf');
            file_d('cerfa_13757-03.pdf');
        }else if(command_type=="Enregistrement_de_Cession"){
            file_d('cerfa_13757-03.pdf');
            file_d('cerfa_15776-02.pdf');
        }else if(command_type=="Changement"){
            file_d('cerfa_13757-03.pdf');
            file_d('cerfa_13750-05.pdf');
        }else if(command_type=="Demande_de_Duplicata"){
            file_d('cerfa_13757-03.pdf');
        }else if(command_type=="Declaration"){
            file_d('cerfa_13757-03.pdf');
            file_d('13751-2_statique.pdf'); 
        }else if(command_type=="Demande_immatriculation"){
            file_d('cerfa_13757-03.pdf');
            file_d('cerfa_13750-05.pdf');
        }else if(command_type=="W_garage"){
            file_d('cerfa_13757-03.pdf');
            file_d('cerfa_13752-02.pdf');
        }else if(command_type=="Changement_de_raison"){
            file_d('cerfa_13757-03.pdf');
            file_d('cerfa_13750-05.pdf');
        }else if(command_type=="Passage"){
            file_d('cerfa_13757-03.pdf');
        }else if(command_type=="Ajout"){
            file_d('cerfa_13757-03.pdf');
            file_d('cerfa_13750-05.pdf');
        }else if(command_type=="Changement_Technique"){
            file_d('cerfa_13750-05.pdf');
        }else if(command_type=="Usurpation"){
            file_d('cerfa_13750-05.pdf');
        }else if(command_type=="Changement_de_Nom"){
            file_d('cerfa_13757-03.pdf');
            file_d('cerfa_13750-05.pdf');
        }else if(command_type=="Changement_de_locataire"){
            file_d('cerfa_13757-03.pdf');
        }else if(command_type=="Correction_de_carte"){
            file_d('cerfa_13757-03.pdf');
        }else if(command_type=="Fiche"){
            file_d('cerfa_13757-03.pdf');
        }else if(command_type=="NEUF_or_ETRANGER"){
            file_d('cerfa_13757-03.pdf');
            file_d('cerfa_13749-05.pdf');
        }


    };

    function file_d(fileName){
        //Set the File URL.
        var url = "docs_for_download/" + fileName;

        //Create XMLHTTP Request.
        var req = new XMLHttpRequest();
        req.open("GET", url, true);
        req.responseType = "blob";
        req.onload = function () {
            //Convert the Byte Data to BLOB object.
            var blob = new Blob([req.response], { type: "application/octetstream" });

            //Check the Browser type and download the File.
            var isIE = false || !!document.documentMode;
            if (isIE) {
                window.navigator.msSaveBlob(blob, fileName);
            } else {
                var url = window.URL || window.webkitURL;
                link = url.createObjectURL(blob);
                var a = document.createElement("a");
                a.setAttribute("download", fileName);
                a.setAttribute("href", link);
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
            }
        };
        req.send();
    }


    function sub(obj,id) {
        var file = obj.value;
        var fileName = file.split("\\");
        document.getElementById(id).innerHTML = fileName[fileName.length - 1];
        document.myForm.submit();
        event.preventDefault();
    }
</script>