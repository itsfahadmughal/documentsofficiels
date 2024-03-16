<?php
if(session_id()){
    session_destroy();
}
session_start();

$db_price = 0;
$total_price = 0; 
$prenom = '';
$SIREN = '';
$Adresse_postale = '';
$Code_postal = '';
$Ville = '';
$Siren_Email = '';


include('Common/sealCalculationPaypagePost.php');
include('Common/flatten.php');
require("./app/Database_Connection.php");

//PAYMENT REQUEST
//testing merchatn id: 002016000000001
//production merchant id: 216000015210001
//You can change the values in session according to your needs and architecture

if (isset($_POST['total_price_'])) {
    $total_price = floatval($_POST['total_price_']) * 100;
    $db_price = floatval($_POST['total_price_']);
}
if (isset($_POST['prenom_'])) {
    $prenom = $_POST['prenom_'];
}
if (isset($_POST['siren_'])) {
    $SIREN = $_POST['siren_'];
}
if (isset($_POST['adresse_postale_'])) {
    $Adresse_postale = $_POST['adresse_postale_'];
}
if (isset($_POST['code_postal_'])) {
    $Code_postal = $_POST['code_postal_'];
}
if (isset($_POST['ville_'])) {
    $Ville = $_POST['ville_'];
}
if (isset($_POST['siren_email_'])) {
    $Siren_Email = $_POST['siren_email_'];
}

$_SESSION['db_price'] = $db_price;
$_SESSION['total_price'] = $total_price;
$_SESSION['prenom'] = $prenom;
$_SESSION['siren'] = $SIREN;
$_SESSION['adresse_postale'] = $Adresse_postale;
$_SESSION['code_postal'] = $Code_postal;
$_SESSION['ville'] = $Ville;
$_SESSION['siren_email'] = $Siren_Email;


// $_SESSION['secretKey'] = "002016000000001_KEY1";
$_SESSION['secretKey'] = "fHKPwZt5Uf5Cyrq76FwZ5WHG-e4nAKXtpGFHm_dfJTY";
$_SESSION['sealAlgorithm'] = "HMAC-SHA-256";
//$_SESSION['normalReturnUrl'] = "https://documentsofficiels.fr/Common/paymentResponseSiren.php";
$_SESSION['normalReturnUrl'] = "https://documentsofficiels.fr/Common/paymentResponseSiren.php";

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