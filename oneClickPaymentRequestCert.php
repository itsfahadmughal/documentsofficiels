<?php

session_destroy();
session_start();

$Total_Charges_x = "";
$Checkout_form_data_x = "";
$Database_x = "";

$Dyanmic_person_1_x = "";
$Dyanmic_person_2_x = "";
$Dyanmic_person_3_x = "";
$Dyanmic_person_4_x = "";
$Dyanmic_person_5_x = "";
$Person_Counter_x = "";
$API_DATA_x = "";
$Inquire_Info_x = "";
$Inquire_Options_x = "";
$Ajouter_checkcout_x = "";



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
if (isset($_POST['Database'])) {
    $Database_x = $_POST['Database'];
}
if (isset($_POST['Dyanmic_person_1'])) {
    $Dyanmic_person_1_x = $_POST['Dyanmic_person_1'];
}
if (isset($_POST['Dyanmic_person_2'])) {
    $Dyanmic_person_2_x = $_POST['Dyanmic_person_2'];
}
if (isset($_POST['Dyanmic_person_3'])) {
    $Dyanmic_person_3_x = $_POST['Dyanmic_person_3'];
}
if (isset($_POST['Dyanmic_person_4'])) {
    $Dyanmic_person_4_x = $_POST['Dyanmic_person_4'];
}
if (isset($_POST['Dyanmic_person_5'])) {
    $Dyanmic_person_5_x = $_POST['Dyanmic_person_5'];
}
if (isset($_POST['Person_Counter'])) {
    $Person_Counter_x = $_POST['Person_Counter'];
}
if (isset($_POST['API_DATA'])) {
    $API_DATA_x = $_POST['API_DATA'];
}
if (isset($_POST['Inquire_Info'])) {
    $Inquire_Info_x = $_POST['Inquire_Info'];
}
if (isset($_POST['Inquire_Options'])) {
    $Inquire_Options_x = $_POST['Inquire_Options'];
}
if (isset($_POST['Ajouter_checkcout'])) {
    $Ajouter_checkcout_x = $_POST['Ajouter_checkcout'];
}


$_SESSION['Checkout_form_data'] = $Checkout_form_data_x;
$_SESSION['Database'] = $Database_x;
$_SESSION['Dyanmic_person_1'] = $Dyanmic_person_1_x;
$_SESSION['Dyanmic_person_2'] = $Dyanmic_person_2_x;
$_SESSION['Dyanmic_person_3'] = $Dyanmic_person_3_x;
$_SESSION['Dyanmic_person_4'] = $Dyanmic_person_4_x;
$_SESSION['Dyanmic_person_5'] = $Dyanmic_person_5_x;
$_SESSION['Person_Counter'] = $Person_Counter_x;
$_SESSION['API_DATA'] = $API_DATA_x;
$_SESSION['Inquire_Info'] = $Inquire_Info_x;
$_SESSION['Inquire_Options'] = $Inquire_Options_x;
$_SESSION['Ajouter_checkcout'] = $Ajouter_checkcout_x;

//$_SESSION['secretKey'] = "002016000000001_KEY1";
$_SESSION['secretKey'] = "fHKPwZt5Uf5Cyrq76FwZ5WHG-e4nAKXtpGFHm_dfJTY";
$_SESSION['sealAlgorithm'] = "HMAC-SHA-256";
//$_SESSION['normalReturnUrl'] = "https://documentsofficiels.fr/Common/paymentResponseCert.php";
$_SESSION['normalReturnUrl'] = "https://documentsofficiels.fr/Common/paymentResponseCert.php";

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