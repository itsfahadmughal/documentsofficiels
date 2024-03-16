<?php

session_start();

$Total_Charges_x = "";
$Checkout_form_data_x = "";
$ExtraBillingInfo_x = "";
$Database_x = "";

include('Common/sealCalculationPaypagePost.php');
include('Common/flatten.php');
require("./app/Database_Connection.php");

//PAYMENT REQUEST
//testing merchatn id: 002016000000001
//production merchant id: 216000015210001
//You can change the values in session according to your needs and architecture

if (isset($_POST['TransactionTotal'])) {
    $Total_Charges_x = floatval($_POST['TransactionTotal']) * 100;
}
if (isset($_POST['Checkout_form_data'])) {
    $Checkout_form_data_x = $_POST['Checkout_form_data'];
}
if (isset($_POST['ExtraBillingInfo'])) {
    $ExtraBillingInfo_x = $_POST['ExtraBillingInfo'];
}
if (isset($_POST['Database'])) {
    $Database_x = $_POST['Database'];
}

$_SESSION['Checkout_form_data'] = $Checkout_form_data_x;
$_SESSION['ExtraBillingInfo'] = $ExtraBillingInfo_x;
$_SESSION['Database'] = $Database_x;

//$_SESSION['secretKey'] = "002016000000001_KEY1";
$_SESSION['secretKey'] = "fHKPwZt5Uf5Cyrq76FwZ5WHG-e4nAKXtpGFHm_dfJTY";
$_SESSION['sealAlgorithm'] = "HMAC-SHA-256";
$_SESSION['normalReturnUrl'] = "https://documentsofficiels.fr/Common/paymentResponse.php";
//$_SESSION['normalReturnUrl'] = "https://documentsofficiels.fr/Common/paymentResponse.php";

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
    "amount" => $Total_Charges_x,           //Note that the amount entered in the "amount" field is in cents
    "orderChannel" => "INTERNET",
    "currencyCode" => "978",
        "orderId" => $OrderNumber,
//    "transactionReference" => $OrderNumber,
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
