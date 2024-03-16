<?php
if(session_id()){
    session_destroy();
}
session_start();

$db_price = 0;
$total_price = 0; 
$car_number = '';
$vignette_date = '';
$vignette_nom = '';
$vignette_prenom = '';
$vignette_adresse = '';
$vignette_nom_et_prenom = '';
$vignette_libelle = '';
$vignette_complement_adresse = '';
$vignette_complement_adresse2 = '';
$vignette_code_postal = '';
$vignette_ville = '';
$vh1 = '';
$vh2 = '';
$vh3 = '';
$vh4 = '';
$vh5 = '';
$vh6 = '';
$vh7 = '';
$vh8 = '';
$vh9 = '';
$vh10 = '';
$vh11 = '';
$vh12 = '';
$vh13 = '';
$vh14 = '';
$vh15 = '';


include('Common/sealCalculationPaypagePost.php');
include('Common/flatten.php');
require("./app/Database_Connection.php");

//PAYMENT REQUEST
//testing merchatn id: 002016000000001
//production merchant id: 216000015210001
//You can change the values in session according to your needs and architecture

if (isset($_POST['total_price_'])) {
    $total_price = floatval($_POST['total_price_']) * 100;
    $db_price=floatval($_POST['total_price_']);
}
if (isset($_POST['CarNumber_'])) {
    $car_number = $_POST['CarNumber_'];
}
if (isset($_POST['vignette_date_'])) {
    $vignette_date = $_POST['vignette_date_'];
}
if (isset($_POST['vignette_nom_'])) {
    $vignette_nom = $_POST['vignette_nom_'];
}
if (isset($_POST['vignette_prenom_'])) {
    $vignette_prenom = $_POST['vignette_prenom_'];
}
if (isset($_POST['vignette_adresse_'])) {
    $vignette_adresse = $_POST['vignette_adresse_'];
}
if (isset($_POST['vignette_nom_et_prenom_'])) {
    $vignette_nom_et_prenom = $_POST['vignette_nom_et_prenom_'];
}
if (isset($_POST['vignette_libelle_'])) {
    $vignette_libelle = $_POST['vignette_libelle_'];
}
if (isset($_POST['vignette_complement_adresse_'])) {
    $vignette_complement_adresse = $_POST['vignette_complement_adresse_'];
}
if (isset($_POST['vignette_complement_adresse2_'])) {
    $vignette_complement_adresse2 = $_POST['vignette_complement_adresse2_'];
}
if (isset($_POST['vignette_code_postal_'])) {
    $vignette_code_postal = $_POST['vignette_code_postal_'];
}
if (isset($_POST['vignette_ville_'])) {
    $vignette_ville = $_POST['vignette_ville_'];
}
if (isset($_POST['veh1_'])) {
    $vh1 = $_POST['veh1_'];
}
if (isset($_POST['veh2_'])) {
    $vh2 = $_POST['veh2_'];
}
if (isset($_POST['veh3_'])) {
    $vh3 = $_POST['veh3_'];
}
if (isset($_POST['veh4_'])) {
    $vh4 = $_POST['veh4_'];
}
if (isset($_POST['veh5_'])) {
    $vh5 = $_POST['veh5_'];
}
if (isset($_POST['veh6_'])) {
    $vh6 = $_POST['veh6_'];
}
if (isset($_POST['veh7_'])) {
    $vh7 = $_POST['veh7_'];
}
if (isset($_POST['veh8_'])) {
    $vh8 = $_POST['veh8_'];
}
if (isset($_POST['veh9_'])) {
    $vh9 = $_POST['veh9_'];
}
if (isset($_POST['veh10_'])) {
    $vh10 = $_POST['veh10_'];
}
if (isset($_POST['veh11_'])) {
    $vh11 = $_POST['veh11_'];
}
if (isset($_POST['veh12_'])) {
    $vh12 = $_POST['veh12_'];
}
if (isset($_POST['veh13_'])) {
    $vh13 = $_POST['veh13_'];
}
if (isset($_POST['veh14_'])) {
    $vh14 = $_POST['veh14_'];
}
if (isset($_POST['veh15_'])) {
    $vh15 = $_POST['veh15_'];
}


$_SESSION['db_price'] = $db_price;
$_SESSION['total_price'] = $total_price;
$_SESSION['car_number'] = $car_number;
$_SESSION['vignette_date'] = $vignette_date;
$_SESSION['vignette_nom'] = $vignette_nom;
$_SESSION['vignette_prenom'] = $vignette_prenom;
$_SESSION['vignette_adresse'] = $vignette_adresse;
$_SESSION['vignette_nom_et_prenom'] = $vignette_nom_et_prenom;
$_SESSION['vignette_libelle'] = $vignette_libelle;
$_SESSION['vignette_complement_adresse'] = $vignette_complement_adresse;
$_SESSION['vignette_complement_adresse2'] = $vignette_complement_adresse2;
$_SESSION['vignette_code_postal'] = $vignette_code_postal;
$_SESSION['vignette_ville'] = $vignette_ville;
$_SESSION['vh1'] = $vh1;
$_SESSION['vh2'] = $vh2;
$_SESSION['vh3'] = $vh3;
$_SESSION['vh4'] = $vh4;
$_SESSION['vh5'] = $vh5;
$_SESSION['vh6'] = $vh6;
$_SESSION['vh7'] = $vh7;
$_SESSION['vh8'] = $vh8;
$_SESSION['vh9'] = $vh9;
$_SESSION['vh10'] = $vh10;
$_SESSION['vh11'] = $vh11;
$_SESSION['vh12'] = $vh12;
$_SESSION['vh13'] = $vh13;
$_SESSION['vh14'] = $vh14;
$_SESSION['vh15'] = $vh15;


// $_SESSION['secretKey'] = "002016000000001_KEY1";
$_SESSION['secretKey'] = "fHKPwZt5Uf5Cyrq76FwZ5WHG-e4nAKXtpGFHm_dfJTY";
$_SESSION['sealAlgorithm'] = "HMAC-SHA-256";
//$_SESSION['normalReturnUrl'] = "https://documentsofficiels.fr/Common/paymentResponseVignette.php";
$_SESSION['normalReturnUrl'] = "https://documentsofficiels.fr/Common/paymentResponseVignette.php";

$query = "SELECT MAX(`transaction_id`) + 1 as tid FROM `tbl_transaction_detail`";


$result = $conn->query($query);

$Tid = null;

if ($result && $result->num_rows > 0) {

    while ($row = mysqli_fetch_array($result)) {
        $Tid = $row['tid'];
    }
}

$OrderNumber = "ON00".time(). $Tid;

$requestData = array(
    "normalReturnUrl" => $_SESSION['normalReturnUrl'],
    "merchantId" => "216000015210001",
    "amount" => $total_price,           //Note that the amount entered in the "amount" field is in cents
    "orderChannel" => "INTERNET",
    "currencyCode" => "978",
        "orderId" => $OrderNumber,
    // "transactionReference" => $OrderNumber,
    "keyVersion" => "1",
    "responseEncoding" => "base64",
    "merchantWalletId" => "1205987",
);

$dataStr = flatten_to_sips_payload($requestData);

$dataStrEncode = base64_encode($dataStr);

$_SESSION['seal'] = compute_seal_from_string($_SESSION['sealAlgorithm'], $dataStrEncode, $_SESSION['secretKey']);

$_SESSION['data'] = $dataStrEncode;

header('Location: Common/redirectionForm.php');

?>