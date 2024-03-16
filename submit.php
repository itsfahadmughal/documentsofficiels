<?php
require('./app/Database_Connection.php');
require('config.php');






// $ID = $_POST['id'];
if (isset($_POST['stripeToken'])) {

    \Stripe\Stripe::setVerifySslCerts(false);

    $token = $_POST['stripeToken'];

    $data = \Stripe\Charge::create(array(
        "amount" => $_POST['btnClickedValue'] * 100,
        "currency" => "EUR",
        "description" => "numéro 1 de l'immatriculation et cartes grises en ligne",
        "source" => $token,
    ));

    echo "<pre>";
    // print_r($data);



?>
<script>
    window.location.href = "https://documentsofficiels.fr/Documents_Submission.php";
</script>
<?php
}

$Not_Plaque = null;
if (isset($_POST["Database"])) {
    $Not_Plaque = explode(",", $_POST['Database']);
    $Not_Plaque = $Not_Plaque[sizeof($Not_Plaque) - 1];

//    echo $_POST['Database'];
//    echo '<br>';
//    echo "Ref : ". $Not_Plaque;

}

// $Counter = $_POST["Person_Counter"];
$Counter = 0;
if (isset($_POST["Person_Counter"])) {
    $Counter = (int)$_POST["Person_Counter"];
}


// echo "This is the counter Value: ". $Counter;
// echo gettype($Counter) . "<br>";

// echo "Check #1 </br></br>";
$transaction_id = null;
$Vehicle_id = null;
$Inquire_Info_id = null;
$Inquire_Options_id = null;

$EMAIL = "";
if (isset($_POST['Checkout_form_data'])) {


    $Checkout_form_data = $_POST['Checkout_form_data'];
    $Checkout_form_data = explode(",~,", $_POST['Checkout_form_data']);


    $Total_Charges = round($Checkout_form_data[13], 2);
    $EMAIL = $Checkout_form_data[14];


    $time = date("Y-m-d H:i:s");

    $query = "INSERT INTO `tbl_transaction_detail`(`holder_type`, `title`, `name`, `first_name`, `username`, `social_reason`, `siren_number`, `address`, `add_address`, `postal_code`, `city`, `country`, `telephone`, `total_amount`, `authRequestID`,`Purchaser_Code`, `OrderNumber`, `merchantReferenceCode`, `invoiceNumber`, `entrytime`) 
		VALUES ('$Checkout_form_data[0]','$Checkout_form_data[1]','$Checkout_form_data[2]','$Checkout_form_data[3]','$Checkout_form_data[4]','$Checkout_form_data[5]','$Checkout_form_data[6]','$Checkout_form_data[7]','$Checkout_form_data[8]','$Checkout_form_data[9]','$Checkout_form_data[10]','$Checkout_form_data[11]','$Checkout_form_data[12]','$Total_Charges','$Checkout_form_data[15]','$Checkout_form_data[16]','$Checkout_form_data[17]','$Checkout_form_data[18]','$Checkout_form_data[19]','$time')";

    if ($conn->query($query) === TRUE) {


        $transaction_id = $conn->insert_id;



        if (isset($_POST['Database']) && $Not_Plaque !== "Not_Plaque") {


            $ExtraBillingInfo = explode(",~,", $_POST['ExtraBillingInfo']);


            if ($ExtraBillingInfo[12] == "true") {


                if (isset($_POST["ExtraBillingInfo"])) {



                    $Databse_Ajouter_Query = "INSERT INTO `tbl_transaction_detail_billing_address`(`transaction_id`, `holder_type`, `title`, `name`, `first_name`, `username`, `social_reason`, `siren_number`, `address`, `add_address`, `postal_code`, `city`, `country`) 
								VALUES ('$transaction_id','$ExtraBillingInfo[0]','$ExtraBillingInfo[1]','$ExtraBillingInfo[2]','$ExtraBillingInfo[3]','$ExtraBillingInfo[4]','$ExtraBillingInfo[5]','$ExtraBillingInfo[6]','$ExtraBillingInfo[7]','$ExtraBillingInfo[8]','$ExtraBillingInfo[9]','$ExtraBillingInfo[10]','$ExtraBillingInfo[11]')";

                    if ($conn->query($Databse_Ajouter_Query) === TRUE) {
                    }
                }
            }



            $Database = $_POST['Database'];

            $lists = explode(",~,", $Database);

            $list1 = null;
            $list_1 = array();
            $list_2 = array();
            $list_3 = array();
            $list_4 = array();
            $list_5 = array();
            $list_6 = array();
            $list_7 = array();
            $list_8 = array();

            $list_9 = array();
            $list_10 = array();
            $list_11 = array();
            $list_12 = array();
            $list_13 = array();
            $list_14 = array();
            $list_15 = array();
            $list_16 = array();
            $list_17 = array();
            $list_18 = array();
            $list_19 = array();
            $plateEntryTime = date("Y-m-d H:i:s");
            $j = 1;
            for ($k = 0; $k < sizeof($lists); $k++) {
                $list1 = explode(",", $lists[$k]);

                for ($i = 0; $i < sizeof($list1); $i++) {
                    ${"list_$j"}[$i] = $list1[$i];
                }

                $j++;
            }
            for ($i = 0; $i < sizeof($list_1); $i++) {
                $Query1 = "INSERT INTO `tbl_plate_order`( `vehicle_number`, `vehicle_type`, `material_type`, `region`, `region_number`, `toolkit`, `custom_option`, `custom_text`, `quantity`, `unit_price`, `transaction_id`, `email`, `productCode`, `productName`, `productDescription`, `taxAmount`, `totalAmount`, `status`, `entrytime`, `Code`) 
						VALUES ('$list_1[$i]','$list_2[$i]','$list_3[$i]','$list_4[$i]','$list_5[$i]','$list_6[$i]','$list_7[$i]','$list_9[$i]','$list_10[$i]','$list_11[$i]',$transaction_id,'$Checkout_form_data[14]','$list_12[$i]','$list_13[$i]','$list_14[$i]','$list_15[$i]','$list_16[$i]','$list_17[$i]','$plateEntryTime','$list_19[$i]')";


                if ($conn->query($Query1) === TRUE) {
                    // echo "New record created successfully";

                } else {
                    // echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }


            mail("info@documentsofficiels.fr","Documentsofficiels Plates Order","You Receive a New Order : ".$Checkout_form_data[17]);
            echo '<script>alert("Order Payment Successfull."); window.location.href = "https://documentsofficiels.fr/booking-print.php?slug='.$Checkout_form_data[17].'";</script>';
            
        } else {



            if (isset($_POST["API_DATA"]) && $_POST["API_DATA"] !== "") {


                $Vehicle_data = explode(",", $_POST['API_DATA']);

                $Vehicle_Query = "INSERT INTO `tbl_vehicle_data`(`Description`, `CNIT`, `Co2`, `Cylinders`, `EngineCC`, `anneeSortie`, `boiteDeVitesse`, `carburantVersion`, `libVersion`, `nbPlace`, `numSerieMoteur`, `puissance`, `puissanceDyn`, `RegistrationDate`, `FuelType`) 
						VALUES ('$Vehicle_data[0]','$Vehicle_data[1]','$Vehicle_data[2]','$Vehicle_data[3]','$Vehicle_data[4]','$Vehicle_data[5]','$Vehicle_data[6]','$Vehicle_data[7]','$Vehicle_data[8]','$Vehicle_data[9]','$Vehicle_data[10]','$Vehicle_data[11]','$Vehicle_data[12]','$Vehicle_data[13]','$Vehicle_data[14]')";

                if ($conn->query($Vehicle_Query) === TRUE) {


                    $Vehicle_id = $conn->insert_id;
                }
            }
            if (isset($_POST["Inquire_Info"])) {


                $Inquire_Info_data = explode(",~,", $_POST['Inquire_Info']);
                $Inquire_Info_Query = "INSERT INTO `tbl_inquire_info`(`Genre_du_vehicule`, `Carburant utilise_par_le_vehicule`, `Date_de_mise_en_circulation`, `Émission`, `Chevaux_fiscaux`, `commercial_vehicle`) 
						VALUES ('$Inquire_Info_data[0]','$Inquire_Info_data[1]','$Inquire_Info_data[2]',$Inquire_Info_data[3],$Inquire_Info_data[4],'$Inquire_Info_data[5]')";




                if ($conn->query($Inquire_Info_Query) === TRUE) {

                    $Inquire_Info_id = $conn->insert_id;
                }
            }

            if (isset($_POST["Inquire_Options"])) {


                $Inquire_Options_data = explode(",", $_POST['Inquire_Options']);

                $Inquire_Options_Query = "INSERT INTO `tbl_inquire_options`(`Le_vehicule_est_il_pris_en_leasing`, `Le_vehicule_a_t_il_fait_lobjet_dune_reception_non_communautair`, `Etes_vous_concerne_par_lexoneration_pour_les_personnes_handicap`, `Vous_etes-un_professionnel_de_lautomobile_et_souhaitez`, `Souhaitez_vous_egalement_declarer_un_changement_de`, `Est_ce_que_le_changement_de`) 
						VALUES ('$Inquire_Options_data[0]','$Inquire_Options_data[1]','$Inquire_Options_data[2]','$Inquire_Options_data[3]','$Inquire_Options_data[4]','$Inquire_Options_data[5]')";


                if ($conn->query($Inquire_Options_Query) === TRUE) {


                    $Inquire_Options_id = $conn->insert_id;
                }
            }


            if (isset($_POST["Database"])) {


                $Databse_data = explode(",", $_POST['Database']);

                $newtime = date("Y-m-d H:i:s");

                $Databse_Query = "INSERT INTO `tbl_certificate`(`email`, `commander_option`, `vehicle_reg_type`, `vehicle_number`, `vehicle_api_data_id`, `inquire_info_id`, `inquiry_option_id`, `postal_code`, `special_treatment`, `special_offer`, `total_amount`, `transaction_id`,`status`, `entrytime`) 
						VALUES ('$Databse_data[0]','$Databse_data[1]','$Databse_data[2]','$Databse_data[3]','$Vehicle_id','$Inquire_Info_id','$Inquire_Options_id','$Databse_data[4]','$Databse_data[5]','$Databse_data[6]','$Databse_data[7]','$transaction_id','$Databse_data[8]','$newtime')";


                if ($conn->query($Databse_Query) === TRUE) {
                }
            }

            if ($Counter === 1) {


                if (isset($_POST["Dyanmic_person_1"])) {


                    $Databse__Dyanmic_person_1_data = explode(",", $_POST['Dyanmic_person_1']);

                    $Databse_Dyanmic_person_1_Query = "INSERT INTO `tbl_transaction_detail_joint_holder`(`transaction_id`, `title`, `name`, `first_name`, `username`) 
								VALUES ('$transaction_id','$Databse__Dyanmic_person_1_data[0]','$Databse__Dyanmic_person_1_data[1]','$Databse__Dyanmic_person_1_data[2]','$Databse__Dyanmic_person_1_data[3]')";


                    if ($conn->query($Databse_Dyanmic_person_1_Query) === TRUE) {
                    }
                }
            } else if ($Counter === 2) {

                if (isset($_POST["Dyanmic_person_1"])) {


                    $Databse__Dyanmic_person_1_data = explode(",", $_POST['Dyanmic_person_1']);

                    $Databse_Dyanmic_person_1_Query = "INSERT INTO `tbl_transaction_detail_joint_holder`(`transaction_id`, `title`, `name`, `first_name`, `username`) 
								VALUES ('$transaction_id','$Databse__Dyanmic_person_1_data[0]','$Databse__Dyanmic_person_1_data[1]','$Databse__Dyanmic_person_1_data[2]','$Databse__Dyanmic_person_1_data[3]')";


                    if ($conn->query($Databse_Dyanmic_person_1_Query) === TRUE) {
                    }
                }
                if (isset($_POST["Dyanmic_person_2"])) {


                    $Databse__Dyanmic_person_2_data = explode(",", $_POST['Dyanmic_person_2']);

                    $Databse_Dyanmic_person_2_Query = "INSERT INTO `tbl_transaction_detail_joint_holder`(`transaction_id`, `title`, `name`, `first_name`, `username`) 
								VALUES ('$transaction_id','$Databse__Dyanmic_person_2_data[0]','$Databse__Dyanmic_person_2_data[1]','$Databse__Dyanmic_person_2_data[2]','$Databse__Dyanmic_person_2_data[3]')";


                    if ($conn->query($Databse_Dyanmic_person_2_Query) === TRUE) {
                    }
                }
            } else if ($Counter === 3) {

                if (isset($_POST["Dyanmic_person_1"])) {


                    $Databse__Dyanmic_person_1_data = explode(",", $_POST['Dyanmic_person_1']);

                    $Databse_Dyanmic_person_1_Query = "INSERT INTO `tbl_transaction_detail_joint_holder`(`transaction_id`, `title`, `name`, `first_name`, `username`) 
								VALUES ('$transaction_id','$Databse__Dyanmic_person_1_data[0]','$Databse__Dyanmic_person_1_data[1]','$Databse__Dyanmic_person_1_data[2]','$Databse__Dyanmic_person_1_data[3]')";


                    if ($conn->query($Databse_Dyanmic_person_1_Query) === TRUE) {
                    }
                }
                if (isset($_POST["Dyanmic_person_2"])) {



                    $Databse__Dyanmic_person_2_data = explode(",", $_POST['Dyanmic_person_2']);

                    $Databse_Dyanmic_person_2_Query = "INSERT INTO `tbl_transaction_detail_joint_holder`(`transaction_id`, `title`, `name`, `first_name`, `username`) 
								VALUES ('$transaction_id','$Databse__Dyanmic_person_2_data[0]','$Databse__Dyanmic_person_2_data[1]','$Databse__Dyanmic_person_2_data[2]','$Databse__Dyanmic_person_2_data[3]')";

                    if ($conn->query($Databse_Dyanmic_person_2_Query) === TRUE) {
                    }
                }


                if (isset($_POST["Dyanmic_person_3"])) {


                    $Databse__Dyanmic_person_3_data = explode(",", $_POST['Dyanmic_person_3']);

                    $Databse_Dyanmic_person_3_Query = "INSERT INTO `tbl_transaction_detail_joint_holder`(`transaction_id`, `title`, `name`, `first_name`, `username`) 
								VALUES ('$transaction_id','$Databse__Dyanmic_person_3_data[0]','$Databse__Dyanmic_person_3_data[1]','$Databse__Dyanmic_person_3_data[2]','$Databse__Dyanmic_person_3_data[3]')";


                    if ($conn->query($Databse_Dyanmic_person_3_Query) === TRUE) {
                    }
                }
            } else if ($Counter === 4) {

                if (isset($_POST["Dyanmic_person_1"])) {


                    $Databse__Dyanmic_person_1_data = explode(",", $_POST['Dyanmic_person_1']);

                    $Databse_Dyanmic_person_1_Query = "INSERT INTO `tbl_transaction_detail_joint_holder`(`transaction_id`, `title`, `name`, `first_name`, `username`) 
								VALUES ('$transaction_id','$Databse__Dyanmic_person_1_data[0]','$Databse__Dyanmic_person_1_data[1]','$Databse__Dyanmic_person_1_data[2]','$Databse__Dyanmic_person_1_data[3]')";


                    if ($conn->query($Databse_Dyanmic_person_1_Query) === TRUE) {
                    }
                }

                if (isset($_POST["Dyanmic_person_2"])) {


                    $Databse__Dyanmic_person_2_data = explode(",", $_POST['Dyanmic_person_2']);

                    $Databse_Dyanmic_person_2_Query = "INSERT INTO `tbl_transaction_detail_joint_holder`(`transaction_id`, `title`, `name`, `first_name`, `username`) 
								VALUES ('$transaction_id','$Databse__Dyanmic_person_2_data[0]','$Databse__Dyanmic_person_2_data[1]','$Databse__Dyanmic_person_2_data[2]','$Databse__Dyanmic_person_2_data[3]')";


                    if ($conn->query($Databse_Dyanmic_person_2_Query) === TRUE) {
                    }
                }


                if (isset($_POST["Dyanmic_person_3"])) {


                    $Databse__Dyanmic_person_3_data = explode(",", $_POST['Dyanmic_person_3']);

                    $Databse_Dyanmic_person_3_Query = "INSERT INTO `tbl_transaction_detail_joint_holder`(`transaction_id`, `title`, `name`, `first_name`, `username`) 
								VALUES ('$transaction_id','$Databse__Dyanmic_person_3_data[0]','$Databse__Dyanmic_person_3_data[1]','$Databse__Dyanmic_person_3_data[2]','$Databse__Dyanmic_person_3_data[3]')";


                    if ($conn->query($Databse_Dyanmic_person_3_Query) === TRUE) {
                    }
                }


                if (isset($_POST["Dyanmic_person_4"])) {


                    $Databse__Dyanmic_person_4_data = explode(",", $_POST['Dyanmic_person_4']);

                    $Databse_Dyanmic_person_4_Query = "INSERT INTO `tbl_transaction_detail_joint_holder`(`transaction_id`, `title`, `name`, `first_name`, `username`) 
								VALUES ('$transaction_id','$Databse__Dyanmic_person_4_data[0]','$Databse__Dyanmic_person_4_data[1]','$Databse__Dyanmic_person_4_data[2]','$Databse__Dyanmic_person_4_data[3]')";


                    if ($conn->query($Databse_Dyanmic_person_4_Query) === TRUE) {
                    }
                }
            } else if ($Counter === 5) {

                if (isset($_POST["Dyanmic_person_1"])) {


                    $Databse__Dyanmic_person_1_data = explode(",", $_POST['Dyanmic_person_1']);

                    $Databse_Dyanmic_person_1_Query = "INSERT INTO `tbl_transaction_detail_joint_holder`(`transaction_id`, `title`, `name`, `first_name`, `username`) 
								VALUES ('$transaction_id','$Databse__Dyanmic_person_1_data[0]','$Databse__Dyanmic_person_1_data[1]','$Databse__Dyanmic_person_1_data[2]','$Databse__Dyanmic_person_1_data[3]')";


                    if ($conn->query($Databse_Dyanmic_person_1_Query) === TRUE) {
                    }
                }

                if (isset($_POST["Dyanmic_person_2"])) {


                    $Databse__Dyanmic_person_2_data = explode(",", $_POST['Dyanmic_person_2']);

                    $Databse_Dyanmic_person_2_Query = "INSERT INTO `tbl_transaction_detail_joint_holder`(`transaction_id`, `title`, `name`, `first_name`, `username`) 
								VALUES ('$transaction_id','$Databse__Dyanmic_person_2_data[0]','$Databse__Dyanmic_person_2_data[1]','$Databse__Dyanmic_person_2_data[2]','$Databse__Dyanmic_person_2_data[3]')";


                    if ($conn->query($Databse_Dyanmic_person_2_Query) === TRUE) {
                    }
                }


                if (isset($_POST["Dyanmic_person_3"])) {


                    $Databse__Dyanmic_person_3_data = explode(",", $_POST['Dyanmic_person_3']);

                    $Databse_Dyanmic_person_3_Query = "INSERT INTO `tbl_transaction_detail_joint_holder`(`transaction_id`, `title`, `name`, `first_name`, `username`) 
								VALUES ('$transaction_id','$Databse__Dyanmic_person_3_data[0]','$Databse__Dyanmic_person_3_data[1]','$Databse__Dyanmic_person_3_data[2]','$Databse__Dyanmic_person_3_data[3]')";


                    if ($conn->query($Databse_Dyanmic_person_3_Query) === TRUE) {
                    }
                }


                if (isset($_POST["Dyanmic_person_4"])) {


                    $Databse__Dyanmic_person_4_data = explode(",", $_POST['Dyanmic_person_4']);

                    $Databse_Dyanmic_person_4_Query = "INSERT INTO `tbl_transaction_detail_joint_holder`(`transaction_id`, `title`, `name`, `first_name`, `username`) 
								VALUES ('$transaction_id','$Databse__Dyanmic_person_4_data[0]','$Databse__Dyanmic_person_4_data[1]','$Databse__Dyanmic_person_4_data[2]','$Databse__Dyanmic_person_4_data[3]')";


                    if ($conn->query($Databse_Dyanmic_person_4_Query) === TRUE) {
                    }
                }


                if (isset($_POST["Dyanmic_person_5"])) {


                    $Databse__Dyanmic_person_5_data = explode(",", $_POST['Dyanmic_person_5']);

                    $Databse_Dyanmic_person_5_Query = "INSERT INTO `tbl_transaction_detail_joint_holder`(`transaction_id`, `title`, `name`, `first_name`, `username`) 
								VALUES ('$transaction_id','$Databse__Dyanmic_person_5_data[0]','$Databse__Dyanmic_person_5_data[1]','$Databse__Dyanmic_person_5_data[2]','$Databse__Dyanmic_person_5_data[3]')";


                    if ($conn->query($Databse_Dyanmic_person_5_Query) === TRUE) {
                    }
                }
            }


            $Ajouter_data = explode(",~,", $_POST['Ajouter_checkcout']);

            if ($Ajouter_data[12] == "true") {
                if (isset($_POST["Ajouter_checkcout"])) {


                    $Databse_Ajouter_data = explode(",~,", $_POST['Ajouter_checkcout']);

                    $Databse_Ajouter_Query = "INSERT INTO `tbl_transaction_detail_billing_address`(`transaction_id`, `holder_type`, `title`, `name`, `first_name`, `username`, `social_reason`, `siren_number`, `address`, `add_address`, `postal_code`, `city`, `country`) 
								VALUES ('$transaction_id','$Databse_Ajouter_data[0]','$Databse_Ajouter_data[1]','$Databse_Ajouter_data[2]','$Databse_Ajouter_data[3]','$Databse_Ajouter_data[4]','$Databse_Ajouter_data[5]','$Databse_Ajouter_data[6]','$Databse_Ajouter_data[7]','$Databse_Ajouter_data[8]','$Databse_Ajouter_data[9]','$Databse_Ajouter_data[10]','$Databse_Ajouter_data[11]')";



                    if ($conn->query($Databse_Ajouter_Query) === TRUE) {
                    }
                }
            }


            $to      = $EMAIL;

            $headers = "From: noReply@documentsofficiels.fr \r\n";
            $headers .= "Reply-To: noReply@documentsofficiels.fr \r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            $subject = "Documents Submission!";

            $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Documents Officiels</title></head><body>";


            $body .= "<p>Greetings from Documentsofficiels!</p>";

            $body .= "<p>You have successfully ordered with Documentsofficiels. Now you can logged in to and submit your documents.</p>";

            $body .= "<p>Submit Your Documents Here: <a href='https://documentsofficiels.fr/Documents_Submission.php' target='_blank'>https://documentsofficiels.fr/Documents_Submission.php</a></p>";

            $body .= "<p>Here is Your Transaction ID for login: $transaction_id</p>";

            $body .= "<p>Thanks for your order.</p>";

            $body .= "<p>Best Regards,<br>Documentsofficiels Inc.<br>France<br>Ph: +1 000000000<br>info@documentsofficiels.fr</p>";

            $body .= "</body></html>";


            mail($to, $subject, $body, $headers);	
            
            mail("info@documentsofficiels.fr","Documentsofficiels Certificate Order","You Receive a New Order : ".$Checkout_form_data[17]);

?>

<script>
    alert("Payment Successful");
    window.location.href = "https://documentsofficiels.fr/Documents_Submission.php";
</script>
<?php
        }
    } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "No Data found on Checkout Page";
}




?>