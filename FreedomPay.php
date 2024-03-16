<?php
// require('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Page Title</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="">
<style>
  html,
  body {
    font-family: "Verdana", sans-serif
  }

  iframe {
    width: 100%;
}

.card-overlay {
    background-color: #000;
    bottom: 0;
    display: none;
    left: 0;
    opacity: 0.35;
    position: absolute;
    right: 0;
    top: 0;
}

.context {
    display: none;
    padding: 10px;
}

.has-error {
    height: 50px;
}

.has-multiline-error {
    height: 65px;
}

.loader {
    background-color: #000;
    bottom: 0;
    left: 0;
    opacity: 0.35;
    position: absolute;
    right: 0;
    top: 0;
    transform: translateZ(0);
    z-index: 999997;
}

    .loader::after {
        border: 10px solid #fff;
        border: 10px solid rgba(255, 255, 255, 0.2);
        border-left: 10px solid #fff;
        border-radius: 50%;
        content: "";
        height: 100px;
        left: 50%;
        margin: -50px 0 0 -50px;
        position: absolute;
        top: 50%;
        width: 100px;
        animation: loader 1s infinite linear;
    }

.nav-link {
    padding: .5rem .8rem;
}

.tab-pane {
    min-height: 150px;
    position: relative;
}

@-moz-keyframes loader {
    100% {
        transform: rotate(360deg);
    }
}

@-webkit-keyframes loader {
    100% {
        transform: rotate(360deg);
    }
}

@keyframes loader {
    100% {
        transform: rotate(360deg);
    }
}

#mobileCreds{
    display:none;
}
#mobileCreds .form-group{
    padding:15px;
}

#mobileCreds {
    display: none;
}

    #mobileCreds .form-group {
        padding: 0 15px;
    }

@media only screen and (max-width: 650px) {
    .nav-item {
        display: block;
        background-color: rgb(212, 227, 235);
        width: 100% !important;
        margin: 8px;
        border-radius: 5px;
        border: solid 1px #dedede;
    }

    #mobileCreds {
        display: block;
    }

        #mobileCreds button {
            display: block;
            margin: auto;
        }
}
</style>
<script src=""></script>

<body>

<div id="CardControls" class="container">
    <div class="row mt-3 mb-3">
        <div class="col-sm-12">
            <div class="card" id="mobileCreds">
                <div class="card-header">Credentials</div>
                <div class="form-group">
                    <label for="esKeyInput">ES Key</label>
                    <input class="form-control" id="esKeyInput" placeholder="Enter ES Key">

                </div>
                <div class="form-group">
                    <label for="storeIdInput">Store Id</label>
                    <input class="form-control" id="storeIdInput" placeholder="Enter Store Id">
                </div>

                <div class="form-group">
                    <label for="terminalIdInput">Terminal Id</label>
                    <input class="form-control" id="terminalIdInput" placeholder="Enter Terminal Id">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </div>

            <div class="card">
                <div class="card-header">Payment Form</div>
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="cardPayment-tab" data-toggle="tab" href="#cardPayment" role="tab" aria-controls="cardPayment" aria-selected="false">Payment (Card)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tokenization-tab" data-toggle="tab" href="#tokenization" role="tab" aria-controls="tokenization" aria-selected="true">Tokenization</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tokenPayment-tab" data-toggle="tab" href="#tokenPayment" role="tab" aria-controls="tokenPayment" aria-selected="false">Payment (Token)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="cardPaymentTokenization-tab" data-toggle="tab" href="#cardPaymentTokenization" role="tab" aria-controls="cardPaymentTokenization" aria-selected="false">Payment (Card) & Tokenization</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="giftCardPayment-tab" data-toggle="tab" href="#giftCardPayment" role="tab" aria-controls="giftCardPayment" aria-selected="false">Payment (Gift Card)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="rewardCardPayment-tab" data-toggle="tab" href="#rewardCardPayment" role="tab" aria-controls="rewardCardPayment" aria-selected="false">Payment (Reward Card)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="googlePayPayment-tab" data-toggle="tab" href="#googlePayPayment" role="tab" aria-controls="googlePayPayment" aria-selected="false">Payment (Google Pay)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="applePayPayment-tab" data-toggle="tab" href="#applePayPayment" role="tab" aria-controls="applePayPayment" aria-selected="false">Payment (Apple Pay)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="privateLabelCardPayment-tab" data-toggle="tab" href="#privateLabelCardPayment" role="tab" aria-controls="privateLabelCardPayment" aria-selected="false">Payment (Private Label Card)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="payPalPayment-tab" data-toggle="tab" href="#payPalPayment" role="tab" aria-controls="payPalPayment" aria-selected="false">Payment (PayPal)</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active show" id="cardPayment" role="tabpanel" aria-labelledby="cardPayment-tab"></div>
                        <div class="tab-pane" id="tokenization" role="tabpanel" aria-labelledby="tokenization-tab"></div>
                        <div class="tab-pane" id="tokenPayment" role="tabpanel" aria-labelledby="tokenPayment-tab"></div>
                        <div class="tab-pane" id="cardPaymentTokenization" role="tabpanel" aria-labelledby="cardPaymentTokenization-tab"></div>
                        <div class="tab-pane" id="giftCardPayment" role="tabpanel" aria-labelledby="giftCardPayment-tab"></div>
                        <div class="tab-pane" id="rewardCardPayment" role="tabpanel" aria-labelledby="rewardCardPayment-tab"></div>
                        <div class="tab-pane" id="googlePayPayment" role="tabpanel" aria-labelledby="googlePayPayment-tab"></div>
                        <div class="tab-pane" id="applePayPayment" role="tabpanel" aria-labelledby="applePayPayment-tab"></div>
                        <div class="tab-pane" id="privateLabelCardPayment" role="tabpanel" aria-labelledby="privateLabelCardPayment-tab"></div>
                        <div class="tab-pane" id="payPalPayment" role="tabpanel" aria-labelledby="payPalPayment-tab"></div>
                        
                    </div>
                </div>
                <div class="card-overlay"></div>
            </div>
        </div>
    </div>
</div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(function () {
    var context,
        credentials = {
            esKey: "KD73HQ2WHW9GFPF4QRMFX8T33XHPT82F",
            storeId: "1511815019",
            terminalId: "2513533015"
        },
        currency = {
            alphabeticCode: "USD",
            numericCode: "840"
        },
        modal = function () {
            var createButton = function ($modal, btn) {
                var $footer = $modal.find(".modal-footer");

                $footer.prepend($("<button />").addClass("btn btn-default")
                    .attr("id", createUuid())
                    .attr("type", "button")
                    .text(btn.text)
                    .click(function () {
                        btn.click($modal);
                    }));
            },
                show = function (options) {
                    var defaults = {
                        title: "",
                        content: $("<p />"),
                        closeIcon: false,
                        id: createUuid(),
                        open: function () { },
                        buttons: []
                    },
                        settings = $.extend(true, {}, defaults, options),
                        $modal = $("<div />").attr("id", settings.id).attr("role", "dialog").addClass("modal fade")
                            .append($("<div />").addClass("modal-dialog")
                                .append($("<div />").addClass("modal-content")
                                    .append($("<div />").addClass("modal-header")
                                        .append($("<h4 />").addClass("modal-title").text(settings.title)))
                                    .append($("<div />").addClass("modal-body")
                                        .append(settings.content))
                                    .append($("<div />").addClass("modal-footer")
                                    )
                                )
                            );

                    $modal.shown = false;
                    $modal.dismiss = function () {
                        if (!$modal.shown) {
                            window.setTimeout(function () {
                                $modal.dismiss();
                            }, 50);

                            return;
                        }

                        $modal.modal("hide");
                        $modal.prev().remove();
                        $modal.empty().remove();

                        $("body").removeClass("modal-open");
                    };

                    var modalHeader = $modal.find(".modal-header");

                    modalHeader.css({
                        "color": "white",
                        "background-color": settings.type === "success" ? "green" : "red"
                    });

                    if (settings.closeIcon)
                        modalHeader
                            .append($("<button />")
                                .attr("type", "button")
                                .addClass("close")
                                .html("&times;")
                                .click(function () {
                                    if (settings.closeCallback)
                                        settings.closeCallback();

                                    $modal.dismiss();
                                }));

                    for (var i = 0; i < settings.buttons.length; i++)
                        createButton($modal, settings.buttons[i]);

                    settings.open($modal);

                    $modal.on("shown.bs.modal",
                        function () {
                            $modal.shown = true;
                        });

                    $modal.modal({
                        backdrop: "static",
                        keyboard: false
                    });

                    return $modal;
                };

            return {
                show: show
            };
        }(),
        paymentKeyData = createPaymentKeyData(),
        paymentType,
        posSyncId = getPosSyncId(),
        posSyncAttemptNum = 1,
        requestType,
        sessionKey,
        shouldErrorOnCardinalNotAvailable = false,
        threeDSecure = {
            enabled: false,
            softDeclineEnabled: false
        },
        tokenInformation = {
            token: "___TOKEN___",
            expirationMonth: "___CARDEXPIRATIONMONTH___",
            expirationYear: "___CARDEXPIRATIONYEAR___"
        },
        validationResults = [],
        version = "v1.5",
        workflowType = "Standard";

    function addHpcScript() {
        var script = document.createElement("script");

        script.type = "text/javascript";
        script.src = "https://hpc.uat.freedompay.com/api/" + version + "/cdn/hpc_min.js";

        parent.document.body.appendChild(script);
    }

    function addMessageListener() {
        window.addEventListener("message", handleMessage);
    }

    function createPaymentKeyData() {
        return {
            paymentKeys: []
        };
    }

    function createUuid() {
        var d = new Date().getTime();

        if (window.performance && typeof window.performance.now === "function")
            d += performance.now();

        var uuid = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g,
            function (c) {
                var r = (d + Math.random() * 16) % 16 | 0;

                d = Math.floor(d / 16);

                return (c === "x" ? r : r & 0x3 | 0x8).toString(16);
            });

        return uuid;
    }

    function displayValidationMessage() {
        var $validationMessage = $(".validation-message");

        $validationMessage.removeClass("alert alert-danger").addClass(validationResults.length ? "alert alert-danger" : "").empty();

        if (!validationResults.length)
            return;

        var $errorList = $("<ul/>");

        validationResults.forEach(function (result) {
            $errorList.append("<li>" + result.message + "</li>");
        });

        $validationMessage.html("<p>Please correct the errors below:</p>");
        $validationMessage.append($errorList);
    }

    function getApplePayPaymentFrame() {
        paymentType = "ApplePay";
        requestType = "ApplePayPayment";

        getFrame("#applePayPayment");
    }

    function getButtonType() {
        if (requestType === "GooglePayPayment")
            return "Buy";

        if (requestType === "Tokenization")
            return "Save";

        return null;
    }

    function getCardPaymentFrame() {
        paymentType = "Card";
        requestType = "CardPayment";

        getFrame("#cardPayment");
    }

    function getCardPaymentTokenizationFrame() {
        paymentType = "Card";
        requestType = "CardPaymentTokenization";

        getFrame("#cardPaymentTokenization");
    }

    function getContextHtml() {
        return "<p><strong>Context:</strong> " + context + "</p>";
    }

    function getExpirationDateValidationType() {
        if (paymentType === "GiftCard")
            return "Optional";

        if (paymentType === "PrivateLabelCard")
            return "NotApplicable";

        return "Required";
    }

    function getFrame(placeholder) {
        var $placeholder = $(placeholder);

        $(".tab-pane").empty();

        $placeholder.append("<div class=\"validation-message\"/>");

        if (!validateCredentials() || requestType === "TokenPayment" && !validateTokenInformation()) {
            displayValidationMessage();

            return;
        }

        $placeholder.append("<div class=\"loader\"/>");

        var initBody = getInitBody();

        if (paymentType === "ApplePay" && (initBody["ButtonColor"] === "2" || initBody["ButtonColor"].toLowerCase() === "white")) {
            $placeholder.css("background-color", "#9FB8C2");
            $placeholder.css("border-radius", "5px");
        }

        // This is needed to properly set the ccCaptureService
        if (paymentType === "Card" && initBody.PayPal && initBody.PayPal.Intent)
            window.paypalIntent = initBody.PayPal.Intent;
        else if (paymentType === "PayPal" && initBody.Intent)
            window.paypalIntent = initBody.Intent;

        console.dir(initBody);

        // NOTE: This should happen on the server, however, for testing, we are using an AJAX POST to get the iframe with SessionKey
        $.post(getInitUri(), initBody)
            .done(function(data, textStatus, jqXhr) {
                $placeholder.append(data);

                sessionKey = jqXhr.getResponseHeader("session-key");

                context = jqXhr.getResponseHeader("X-Workflow-Id");

                $placeholder.append("<small class=\"context\"><i><strong>Context:</strong> " + context + "</i></small>");

                addMessageListener();
            })
            .fail(function (jqXhr) {
                if (jqXhr.status === 401)
                    validationResults.push({ message: "401 Unauthorized: Credentials are invalid." });
                else if (jqXhr.responseJSON && jqXhr.responseJSON !== "" && jqXhr.responseJSON.Message !== null && JSON.parse(jqXhr.responseJSON.Message)[0] !== null)
                    validationResults.push({ message: JSON.parse(jqXhr.responseJSON.Message)[0] });
                else if (jqXhr.responseText && jqXhr.responseText !== "")
                    validationResults.push({ message: jqXhr.responseText });
                else
                    validationResults.push({ message: "An unknown error occurred. Please try again. If the problem persists, please contact FreedomPay." });

                displayValidationMessage();

                $(".loader").remove();

                console.log(jqXhr);
            });
    }

    function getGiftCardPaymentFrame() {
        paymentType = "GiftCard";
        requestType = "GiftCardPayment";

        getFrame("#giftCardPayment");
    }

    function getGooglePayPaymentFrame() {
        paymentType = "GooglePay";
        requestType = "GooglePayPayment";

        getFrame("#googlePayPayment");
    }

    function getInitBody() {
        var body = {
            "ButtonType": getButtonType(), // ButtonType is optional. Default is "Pay" or 4 (can be string or number). Default for GooglePay is "Buy" or 2 (can be string or number).
            "EsKey": credentials.esKey,
            "Legal": {
                "HideCheckbox": false, // HideCheckbox is optional. Default is false.
                "TextType": getLegalTextType() // TextType is optional. Default is "DynamicWithCheckbox" or 1 (can be string or number).
            },
            "StoreId": credentials.storeId,
            "TerminalId": credentials.terminalId,
            "ValidationMessageType": "Feedback", // ValidationMessageType is optional. Default is "Feedback" or 2 (can be string or number).
            "WorkflowType": workflowType // WorkflowType is optional. Default is "Standard" or 1 (can be string or number).
        };

        if (paymentType === "GooglePay") {
            body["BillingAddress"] = { // BillingAddress is optional.
                "Format": "Full", // Format is optional. Default is "Min".
                "IsPhoneNumberRequired": true, // IsPhoneNumberRequired is optional. Default is false.
                "IsRequired": true // IsRequired is optional. Default is false.
            };
            body["ButtonColor"] = "Black"; // ButtonColor is optional. Default is "Black" or 1 (can be string or number).
            body["IsEmailRequired"] = true; // IsEmailRequired is optional. Default is false.
            body["ResponseType"] = "Raw"; // ResponseType is optional. Default is "Dictionary" or 1 (can be string or number).
            body["TotalPrice"] = getTotalPrice();
        } else if (paymentType === "ApplePay") {
            body["AutoFinalizePayment"] = false;
            body["TotalPrice"] = "10";
            body["ButtonType"] = "Plain"; // ButtonType is optional. Default is "Plain" or 1 (can be string or number).
            body["ButtonColor"] = "black"; // ButtonColor is optional. Default is "Black" or 1 (can be string or number).
            body["Styles"] = ".fp-apple-pay-button{height:50px; width: 200px; border-radius:0 !important;}"; // Styles is optional.
        } else if (paymentType === "PayPal") {
            body["CurrencyCode"] = currency.alphabeticCode;
            body["Intent"] = "Capture"; // Intent is optional. Default is "Capture" or 2 (can be string or number).
            body["InvoiceNumber"] = getInvoiceNumber();
            body["TotalPrice"] = getTotalPrice();
        } else if (paymentType === "PayByBank") {
            body["PaymentType"] = paymentType;
            body["OrderId"] = "OrderB123"; // Need to be a unique Order Id / Transaction Id combination.
            body["TransactionId"] = "TransB123"; 
            body["CurrencyCode"] = "GBP";
            body["InvoiceNumber"] = getInvoiceNumber();
            body["TotalPrice"] = getTotalPrice();            
        } else {
            body["CardIconDisplayType"] = "Dynamic"; // CardIconDisplayType is optional. Default is "Dynamic" or 1 (can be string or number).
            body["PaymentType"] = paymentType; // PaymentType is optional. Default is "Card" or 1 (can be string or number).
            body["Styles"] = "input{color:red;}"; // Styles is optional.

            if (version === "v1.4" || version === "v1.5") {
                body["CardNumber"] = {
                    "LabelType": "Default", // LabelType is optional. Default is "Default" or 1 (can be string or number). Default display is "Card Number".
                    "PlaceholderType": "EnterCardNumber" // PlaceholderType is optional. Default is "Default" or 2 (can be string or number). Default display is "4111111111111111".
                };
                body["ExpirationDate"] = {
                    "LabelType": paymentType === "GiftCard" ? "IfPresent" : "Default", // LabelType is optional. Default is "Default" or 1 (can be string or number). Default display is "Expiration Date".
                    "PlaceholderType": "Default", // PlaceholderType is optional. Default is "Default" or 2 (can be string or number). Default display is "MM/YY".
                    "ValidationType": getExpirationDateValidationType() // ValidationType is optional. Default is "Required" or 3 (can be string or number). Only applies to PrivateLabelCard
                };
                body["PostalCode"] = {
                    "LabelType": "Default", // LabelType is optional. Default is "Default" or 1 (can be string or number). Default display is "Postal Code".
                    "PlaceholderType": "EnterPostalCode" // PlaceholderType is optional. Default is "Default" or 2 (can be string or number). Default display is "11111".
                };
                body["SecurityCode"] = {
                    "LabelType": paymentType === "GiftCard" ? "IfPresent" : "Default", // LabelType is optional. Default is "Default" or 1 (can be string or number). Default display is "Security Code".
                    "PlaceholderType": "Cvc", // PlaceholderType is optional. Default is "Default" or 2 (can be string or number). Default display is "123".
                    "ValidationType": getSecurityCodeValidationType() // ValidationType is optional. Default is "Required" or 3 (can be string or number). Only applies to PrivateLabelCard
                };

                if (paymentType === "Card" || paymentType === "CardOnFile") {
                    if (paymentType === "Card") {
                        // Card with PayPal
                        body["PayPal"] = {
                            "CurrencyCode": currency.alphabeticCode,
                            "Disabled": requestType === "Tokenization",
                            "Intent": "Capture", // Intent is optional. Default is "Capture" or 2 (can be string or number).
                            "InvoiceNumber": getInvoiceNumber(),
                            "TotalPrice": getTotalPrice()
                        };
                    }

                    if (paymentType === "CardOnFile") {
                        body["TokenInformation"] = {
                            "Token": tokenInformation.token,
                            "ExpirationMonth": tokenInformation.cardExpirationMonth,
                            "ExpirationYear": tokenInformation.cardExpirationYear
                        }
                    }

                    // 3D Secure
                    body["ConsumerAuthentication"] = {
                        // This must be true in order to use cardinal
                        "Enabled": threeDSecure.enabled,
                        // If this is true then the Fields will be mapped to the Freeway request
                        "AutoMapToFreewayRequest": true,
                        // These fields will be added to cardinal's lookup response https://cardinaldocs.atlassian.net/wiki/spaces/CCen/pages/905478187/Lookup+Request+Response
                        "Fields": [{
                            key: "BillingAddress1",
                            value: "111 test st"
                        }, {
                            key: "BillingCity",
                            value: "philly"
                        }, {
                            key: "BillingCountryCode",
                            value: "840"
                        }, {
                            key: "BillingFirstName",
                            value: "test"
                        }, {
                            key: "BillingLastName",
                            value: "name"
                        }, {
                            key: "BillingPostalCode",
                            value: "19103"
                        }, {
                            key: "Email",
                            value: "test@fake.com"
                        }, {
                            key: "MobilePhone",
                            value: "+12222345678"
                        }
                            // some fields are no longer allowed and should cause an error
                            //, {
                            //    key: "CardNumber",
                            //    value: "12345"
                            //}
                        ]
                    };
                    body["OrderDetails"] = {
                        "TransactionTotal": getTotalPrice(),
                        "OrderNumber": "1",
                        "OrderDescription": "test",
                        "CurrencyCode": currency.numericCode // 3 digit numeric ISO 4217 currency code for the sale amount
                    };
                }
            } else {
                body["CardNumberPlaceholderType"] = "EnterCardNumber"; // CardNumberPlaceholderType is optional. Default is "Default" or 2 (can be string or number). Default display is "4111111111111111".
                body["ExpirationDatePlaceholderType"] = "Default"; // ExpirationDatePlaceholderType is optional. Default is "Default" or 2 (can be string or number). Default display is "MM/YY".
                body["PostalCodePlaceholderType"] = "EnterPostalCode"; // PostalCodePlaceholderType is optional. Default is "Default" or 2 (can be string or number). Default display is "11111".
                body["SecurityCodePlaceholderType"] = "Cvc"; // SecurityCodePlaceholderType is optional. Default is "Default" or 2 (can be string or number). Default display is "123".
            }
        }

        console.dir(body);
        return body;
    }

    function getInitUri() {
        var baseUri = "https://hpc.uat.freedompay.com/api/" + version + "/controls/init";

        if (paymentType === "GooglePay")
            baseUri += "/google";
        else if (paymentType === "ApplePay")
            baseUri += "/apple";
        else if (paymentType === "PayPal")
            baseUri += "/paypal";
        else if (paymentType === "PayByBank")
            baseUri += "/paybybank";

        return baseUri;
    }

    function getInvoiceNumber() {
        return "HPC" + Math.random().toString().substr(2, 12);
    }

    function getIsVerifyAuth() {
        return parseInt(workflowType) === 2 || typeof workflowType === "string" && workflowType.toLowerCase() === "verifyauth";
    }

    function getLegalTextType() {
        if (paymentType === "ApplePay" || paymentType === "GooglePay" || paymentType === "PayPal" || paymentType === "PayByBank")
            return "DynamicThirdPartyWithCheckbox";

        return "DynamicWithCheckbox";
    }

    function getModalPartialTitle() {
        if (requestType === "CardPayment" || requestType === "GiftCardPayment" || requestType === "RewardCardPayment" || requestType === "TokenPayment" || requestType === "GooglePayPayment" || requestType === "ApplePayPayment" || requestType === "PrivateLabelCardPayment" || requestType === "PayPalPayment" || requestType === "PayByBankPayment")
            return "Payment";

        if (requestType === "CardPaymentTokenization")
            return "Payment & Tokenization";

        if (requestType === "Tokenization")
            return "Tokenization";

        return null;
    }

    function getModalPartialMessage() {
        if (requestType === "CardPayment" || requestType === "GiftCardPayment" || requestType === "RewardCardPayment" || requestType === "TokenPayment" || requestType === "GooglePayPayment" || requestType === "ApplePayPayment" || requestType === "PrivateLabelCardPayment" || requestType === "PayPalPayment" || requestType === "PayByBankPayment")
            return "payment";

        if (requestType === "CardPaymentTokenization")
            return "payment & tokenization";

        if (requestType === "Tokenization")
            return "tokenization";

        return null;
    }

    function getPaymentKeyAttributesHtml() {
        if (!paymentKeyData.attributes || !paymentKeyData.attributes.length)
            return "";

        var content = "<p><strong>Attributes:</strong><ul>";

        for (var i = 0; i < paymentKeyData.attributes.length; i++)
            content += "<li>" + paymentKeyData.attributes[i].Key + ": <i>" + getPaymentKeyAttributeValue(paymentKeyData.attributes[i].Value) + "</i></li>";

        return content + "</ul></p>";
    }

    function getPaymentKeyAttributeValue(value) {
        return typeof value !== "object" ? value : JSON.stringify(value, undefined, 2);
    }

    function getPaymentRequestMessage() {
        var isVerifyAuth = getIsVerifyAuth(),
            authTransType = isVerifyAuth && paymentKeyData.paymentKeys.length > 0 && paymentKeyData.paymentType !== "PayPal" ? "verify" : "",
            captureService = isVerifyAuth ? "false" : "true";

        if (paymentKeyData.paymentType !== "PayPal" && (requestType === "CardPayment" || requestType === "GiftCardPayment" || requestType === "RewardCardPayment" || requestType === "TokenPayment" || requestType === "GooglePayPayment" || requestType === "ApplePayPayment" || requestType === "PrivateLabelCardPayment") || requestType === "PayByBankPayment") {
            return {
                "ccAuthService": {
                    "run": "true",
                    "transType": authTransType
                },
                "ccCaptureService": {
                    "run": captureService
                },
                "clientMetadata": {
                    "applicationName": "Sandbox",
                    "applicationUser": "Sandbox User",
                    "applicationVersion": "Sandbox Version"
                },
                "esKey": credentials.esKey,
                "purchaseTotals": {
                    "chargeAmount": getTotalPrice()
                },
                "storeId": credentials.storeId,
                "terminalId": credentials.terminalId,
                "invoiceHeader": {
                    "invoiceNumber": getInvoiceNumber()
                }
            };
        }

        if (paymentKeyData.paymentType === "PayPal") {
            var requestMessage = {
                "ccAuthService": {
                    "run": "true",
                    "transType": authTransType
                },
                "clientMetadata": {
                    "applicationName": "Sandbox",
                    "applicationUser": "Sandbox User",
                    "applicationVersion": "Sandbox Version"
                },
                "esKey": credentials.esKey,
                "purchaseTotals": {
                    "chargeAmount": getTotalPrice(),
                    "currency": currency.alphabeticCode
                },
                "storeId": credentials.storeId,
                "terminalId": credentials.terminalId,
                "invoiceHeader": {
                    "invoiceNumber": getInvoiceNumber()
                }
            };

            if (parseInt(window.paypalIntent) === 2 || typeof window.paypalIntent === "string" && window.paypalIntent.toLowerCase() === "capture") {
                requestMessage["ccCaptureService"] = {
                    "run": "true"
                }
            }

            return requestMessage;
        }

        if (requestType === "CardPaymentTokenization") {
            return {
                "ccAuthService": {
                    "run": "true",
                    "transType": authTransType
                },
                "ccCaptureService": {
                    "run": captureService
                },
                "clientMetadata": {
                    "applicationName": "Sandbox",
                    "applicationUser": "Sandbox User",
                    "applicationVersion": "Sandbox Version"
                },
                "esKey": credentials.esKey,
                "purchaseTotals": {
                    "chargeAmount": getTotalPrice()
                },
                "storeId": credentials.storeId,
                "terminalId": credentials.terminalId,
                "tokenCreateService": {
                    "run": "true",
                    "type": "99"
                }
            };
        }

        if (requestType === "Tokenization") {
            return {
                "ccAuthService": {
                    "run": "true",
                    "transType": "verify"
                },
                "clientMetadata": {
                    "applicationName": "Sandbox",
                    "applicationUser": "Sandbox User",
                    "applicationVersion": "Sandbox Version"
                },
                "esKey": credentials.esKey,
                "purchaseTotals": {
                    "chargeAmount": getTotalPrice()
                },
                "storeId": credentials.storeId,
                "terminalId": credentials.terminalId,
                "tokenCreateService": {
                    "run": "true",
                    "type": "99"
                }
            };
        }

        return null;
    }

    function getPayPalPaymentFrame() {
        paymentType = "PayPal";
        requestType = "PayPalPayment";

        getFrame("#payPalPayment");
    }

    function getPayByBankPaymentFrame() {
        paymentType = "PayByBank";
        requestType = "PayByBankPayment";

        getFrame("#payByBankPayment");
    }

    function getPosSyncId() {
        return [(new Date()).toISOString(), credentials.storeId, credentials.terminalId, createUuid()].join(";");
    }

    function getPrivateLabelCardPaymentFrame() {
        paymentType = "PrivateLabelCard";
        requestType = "PrivateLabelCardPayment";

        getFrame("#privateLabelCardPayment");
    }

    function getRewardCardPaymentFrame() {
        paymentType = "RewardCard";
        requestType = "RewardCardPayment";

        getFrame("#rewardCardPayment");
    }

    function getSecurityCodeValidationType() {
        if (paymentType === "GiftCard")
            return "Optional";

        if (paymentType === "PrivateLabelCard")
            return "OptionalExplicit";

        return "Required";
    }

    function getTokenHtml(tokenInformation) {
        if (!tokenInformation || requestType !== "CardPaymentTokenization" && requestType !== "Tokenization")
            return "";

        return "<p><strong>Token Information:</strong><ul><li>Token: <i>" +
            tokenInformation.token + "</i></li>" + "<li>Card Expiration Month: <i>" +
            tokenInformation.cardExpirationMonth + "</i></li>" + "<li>Card Expiration Year: <i>" +
            tokenInformation.cardExpirationYear + "</i></li></ul></p>";
    }

    function getTokenizationFrame() {
        paymentType = "Card";
        requestType = "Tokenization";

        getFrame("#tokenization");
    }

    function getTokenPaymentFrame() {
        paymentType = "CardOnFile";
        requestType = "TokenPayment";

        getFrame("#tokenPayment");
    }

    function getTotalPrice() {
        if (threeDSecure.enabled)
            return 1.23;

        if (requestType === "Tokenization")
            return "0.00";
        if (requestType === "PayByBankPayment")
            return "80111.11";

        return "10.00";
    }

    function handleErrors(data) {
        if (data.errors.length > 0 && data.errors[0].emittedBy === "ApplePay") {
            window.top.document.dispatchEvent(new CustomEvent("AbortApplePay"));

            validationResults = [];
        }

        data.errors.forEach(function (error) {
            if (error.message === "Unable to generate payment key: Reached maximum attempts.")
                reloadControls();
            else if (error.emittedBy === "ApplePay") {
                if (error.message === "Browser is not supported for ApplePay.") {
                    validationResults.push({ message: error.message });
                    validationResults.push({ message: "Please use an Apple device with a modern version of Safari." });
                    validationResults.push({ message: "The device must have Touch ID or Face ID and must be logged into an Apple account that has ApplePay enabled." });
                } else
                    validationResults.push({ message: error.message });

                displayValidationMessage();
            } else if (error.emittedBy === "3d secure") {
                if (error.message.includes("Not Available")) {
                    if (!shouldErrorOnCardinalNotAvailable) {
                        return; // continue without 3ds if unavailable
                    }
                    validationResults.push({ message: "Cardinal is unavailable." });
                } else if (error.message) {
                    validationResults.push({ message: error.message });
                } else {
                    validationResults.push({ message: "Authentication failed." });
                }

                displayValidationMessage();
            } else
                throw new Error(error.message);
        });
    }

    function handleMessage(e) {
        if (e.origin !== "https://hpc.uat.freedompay.com" && e.origin.indexOf("10.10") < 0)
            throw new Error();

        var message = e.data,
            data = message.data;

        switch (message.type) {
            case 1:
                handleErrors(data);
                break;
            case 2:
                setFrameHeight(data);
                break;
            case 3:
                submitPayment(data);
                break;
            case 4:
                handleValidityChange(data);
                break;
            case 15:
                handleLegalClick(data);
                break;
        }
    }

    function handleLegalClick(data) {
        if (data.id === "terms")
            window.open("https://en.wikipedia.org/wiki/Terms_of_service");
        else if (data.id === "privacy")
            window.open("https://en.wikipedia.org/wiki/Privacy_policy");
    }

    function handleNotificationDialog(jqXhr, data) {
        var closeCallback = null,
            buttons = [{
                text: "Ok",
                click: function ($modal) {
                    if (closeCallback)
                        closeCallback();

                    $modal.dismiss();
                }
            }],
            content,
            modalType,
            title;

        if (jqXhr.status === 200) {
            console.log(data);

            if (data.FreewayResponse)
                data = data.FreewayResponse;

            if (data.reasonCode === "100") {
                content = "<div class=\"container\">" +
                    "<p class=\"lead\">Your " + getModalPartialMessage() + " has been processed. Here are the details of this transaction for your reference.</p>" +
                    "<p><strong>Request Id:</strong> " + data.requestID + "</p>" + getPaymentKeyAttributesHtml() + getTokenHtml(data.tokenInformation) + getContextHtml() + "</div>";
                modalType = "success";
                title = getModalPartialTitle() + " Successful";

                if (getIsVerifyAuth() && paymentKeyData.paymentKeys.length > 0)
                    buttons.push({
                        text: "Run Auth",
                        click: function ($modal) {
                            resetPosSyncData();

                            submitPaymentRequest(paymentKeyData.paymentKeys.pop());

                            $modal.dismiss();
                        }
                    });

                if (version !== "v1.2") {
                    buttons.push({
                        text: "Reverse",
                        click: function ($modal) {
                            submitReversalRequest();

                            $modal.dismiss();
                        }
                    });
                    buttons.push({
                        text: "Acknowledge",
                        click: function ($modal) {
                            submitAcknowledgeRequest();

                            $modal.dismiss();
                        }
                    });

                    closeCallback = function () {
                        resetPosSyncData();

                        reloadControls();
                    };
                } else
                    closeCallback = reloadControls;
            } else if (!threeDSecure.enabled && threeDSecure.softDeclineEnabled && (data.reasonCode === "216" || data.reasonCode === "217")) {
                var result = window.top.FreedomPay.Apm.ConsumerAuth.invoke();
                if (result && result.length > 0) handleFailureDialog(data);

                return;
            } else {
                handleFailureDialog(data);

                return;
            }
        } else if (jqXhr.status === 202) {
            content = "<div class=\"container\">" +
                "<p class=\"lead\">Your 'Payment' request has been submitted.</p>" +
                "</div>";
            modalType = "success";
            title = "Payment Successful";

            closeCallback = function () {
                resetPosSyncData();

                reloadControls();
            };
        } else if (jqXhr.status === 204) {
            content = "<div class=\"container\">" +
                "<p class=\"lead\">Your '" + data.source + "' request has been processed.</p>" +
                "</div>";
            modalType = "success";
            title = data.source + " Successful";

            closeCallback = function () {
                resetPosSyncData();

                reloadControls();
            };
        } else {
            console.log(jqXhr);

            window.top.document.dispatchEvent(new CustomEvent("AbortApplePay"));

            content = "<div class=\"container\">" +
                "<p class=\"lead\">Your transaction could not be processed.</p>" +
                "<p><strong>Reason:</strong> An error occurred while processing your request</p>" +
                "<p><strong>Suggestion:</strong> Please try again. If the problem persists, please contact FreedomPay.</p>" + getContextHtml() +
                "</div>";
            modalType = "error";
            posSyncAttemptNum++;
            title = getModalPartialTitle() + " Failed";
        }

        modal.show({
            type: modalType,
            title: title,
            content: $("<div />").html(content),
            closeIcon: true,
            closeCallback: function () {
                if (closeCallback)
                    closeCallback();
            },
            buttons: buttons
        });
    }

    function handleFailureDialog(data) {
        var closeCallback = null,
            buttons = [{
                text: "Ok",
                click: function ($modal) {
                    if (closeCallback)
                        closeCallback();

                    $modal.dismiss();
                }
            }],
            content,
            modalType,
            title;

        content = "<div class=\"container\">" +
            "<p class=\"lead\">Your " + ("'" + (data.source || getModalPartialTitle()) + "'" || "transaction") + " could not be processed.</p>" +
            (data.reasonCode ? "<p><strong>Reason Code:</strong> " + data.reasonCode + "</p>" : "") +
            "<p><strong>Request Id:</strong> " + data.requestID + "</p>" +
            "<p><strong>Suggestion:</strong> Please try again. If the problem persists, please contact FreedomPay.</p>" + getContextHtml() +
            "</div>";
        modalType = "error";
        posSyncAttemptNum++;
        title = (data.source || getModalPartialTitle()) + " Failed";

        if (data.source)
            closeCallback = function () {
                resetPosSyncData();

                reloadControls();
            };

        modal.show({
            type: modalType,
            title: title,
            content: $("<div />").html(content),
            closeIcon: true,
            closeCallback: function () {
                if (closeCallback)
                    closeCallback();
            },
            buttons: buttons
        });
    }

    function handleValidityChange(data) {
        validationResults = validationResults.filter(function (x) { return x.emittedBy !== data.emittedBy; });

        if (data.isValid === false)
            validationResults.push(data);

        displayValidationMessage();
    }

    function reloadControls() {
        validationResults = [];
        displayValidationMessage();

        paymentKeyData = createPaymentKeyData();
        getFrame($(".nav-tabs .active").attr("href")); // refresh the iframe
    }

    function removeMessageListener() {
        window.removeEventListener("message", handleMessage);
    }

    function resetPosSyncData() {
        posSyncId = getPosSyncId();
        posSyncAttemptNum = 1;
    }

    function setFrameHeight(data) {
        $(".loader").remove();
        $(".context").show();
        $(".tab-pane.active iframe").height(data.height);
    }

    function submitAcknowledgeRequest() {
        toggleOverlay(true);

        // NOTE: This should happen on the server, however, for testing, we are using an AJAX POST to submit the acknowledge request
        var requestData = {
                PosSyncAttemptNum: 1,
                PosSyncId: posSyncId
            },
            headers = {
                Authorization: "Bearer " + sessionKey
            };

        $.ajax({
            type: "POST",
            url: "https://hpc.uat.freedompay.com/api/" + version + "/payments/acknowledge",
            data: requestData,
            dataType: "json",
            headers: headers
        }).done(function (data, textStatus, jqXhr) {
            handleNotificationDialog(jqXhr, { source: "Acknowledge" });
        }).fail(function (jqXhr) {
            handleNotificationDialog(jqXhr);
        }).always(function () {
            toggleOverlay(false);
        });
    }

    function submitPayment(data) {
        paymentKeyData.attributes = data.attributes;
        paymentKeyData.paymentKeys = data.paymentKeys;
        paymentKeyData.paymentType = data.paymentType;

        submitPaymentRequest(paymentKeyData.paymentKeys.pop());
    }

    function submitPaymentRequest(paymentKey) {
        toggleOverlay(true);

        // NOTE: This should happen on the server, however, for testing, we are using an AJAX POST to submit the payment
        var requestData = {
                PaymentKey: paymentKey,
                RequestMessage: getPaymentRequestMessage()
            },
            headers = {
                Authorization: "Bearer " + sessionKey
            };

        if (requestType === "TokenPayment")
            requestData.TokenInformation = tokenInformation;

        if (version !== "v1.2") {
            requestData.PosSyncAttemptNum = posSyncAttemptNum;
            requestData.PosSyncId = posSyncId;
        }

        $.ajax({
            type: "POST",
            url: "https://hpc.uat.freedompay.com/api/" + version + "/payments",
            data: requestData,
            dataType: "json",
            headers: headers
        }).done(function (data, textStatus, jqXhr) {
            if (requestType === "ApplePayPayment")
                window.top.document.dispatchEvent(new CustomEvent("ApplePayFinalize", { detail: true }));

            handleNotificationDialog(jqXhr, data);
        }).fail(function (jqXhr) {
            if (requestType === "ApplePayPayment")
                window.top.document.dispatchEvent(new CustomEvent("ApplePayFinalize", { detail: false }));

            handleNotificationDialog(jqXhr);
        }).always(function () {
            toggleOverlay(false);
        });
    }

    function submitReversalRequest() {
        toggleOverlay(true);

        // NOTE: This should happen on the server, however, for testing, we are using an AJAX POST to submit the reversal request
        var requestData = {
            PosSyncAttemptNum: 1,
            PosSyncId: posSyncId
        },
            headers = {
                Authorization: "Bearer " + sessionKey
            };

        $.ajax({
            type: "POST",
            url: "https://hpc.uat.freedompay.com/api/" + version + "/payments/reverse",
            data: requestData,
            dataType: "json",
            headers: headers
        }).done(function (data, textStatus, jqXhr) {
            if (!data)
                data = {};

            data.source = "Reversal";

            handleNotificationDialog(jqXhr, data);
        }).fail(function (jqXhr) {
            handleNotificationDialog(jqXhr);
        }).always(function () {
            toggleOverlay(false);
        });
    }

    function toggleOverlay(show) {
        var $overlay = $(".card-overlay");

        if (show)
            $overlay.show();
        else
            $overlay.hide();
    }

    function validateCredentials() {
        if (credentials.esKey === "" || credentials.esKey === "___ESKEY___")
            validationResults.push({ message: "esKey is missing or invalid." });
        if (credentials.storeId === "" || credentials.storeId === "___STOREID___")
            validationResults.push({ message: "storeId is missing or invalid." });
        if (credentials.terminalId === "" || credentials.terminalId === "___TERMINALID___")
            validationResults.push({ message: "terminalId is missing or invalid." });

        return !validationResults.length;
    }

    function validateTokenInformation() {
        if (tokenInformation.token === "" || tokenInformation.token === "___TOKEN___")
            validationResults.push({ message: "token is missing or invalid." });
        if (tokenInformation.expirationMonth === "" || tokenInformation.expirationMonth === "___CARDEXPIRATIONMONTH___")
            validationResults.push({ message: "expirationMonth is missing or invalid." });
        if (tokenInformation.expirationYear === "" || tokenInformation.expirationYear === "___CARDEXPIRATIONYEAR___")
            validationResults.push({ message: "expirationYear is missing or invalid." });

        return !validationResults.length;
    }

    $("a[data-toggle=tab]").on("show.bs.tab", function (e) {
        removeMessageListener();
        resetPosSyncData();
        validationResults = [];

        var id = $(e.target).attr("id");

        if (id === "cardPayment-tab")
            getCardPaymentFrame();
        else if (id === "cardPaymentTokenization-tab")
            getCardPaymentTokenizationFrame();
        else if (id === "giftCardPayment-tab")
            getGiftCardPaymentFrame();
        else if (id === "rewardCardPayment-tab")
            getRewardCardPaymentFrame();
        else if (id === "tokenization-tab")
            getTokenizationFrame();
        else if (id === "tokenPayment-tab")
            getTokenPaymentFrame();
        else if (id === "googlePayPayment-tab")
            getGooglePayPaymentFrame();
        else if (id === "applePayPayment-tab")
            getApplePayPaymentFrame();
        else if (id === "privateLabelCardPayment-tab")
            getPrivateLabelCardPaymentFrame();
        else if (id === "payPalPayment-tab")
            getPayPalPaymentFrame();
        else if (id === "payByBankPayment-tab")
            getPayByBankPaymentFrame();
    });

    addHpcScript();
    getCardPaymentFrame();
});
  </script>
</body>

</html>