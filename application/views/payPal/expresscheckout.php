
<?php

require_once ("paypalfunctions.php");
// ==================================
// PayPal Express Checkout Module
// ==================================

//'------------------------------------
//' The paymentAmount is the total value of 
//' the shopping cart, that was set 
//' earlier in a session variable 
//' by the shopping cart page
//'------------------------------------
$_SESSION["Payment_Amount"]=intval("120");
$PaymentOption = "PayPal";
$paymentAmount = intval("120");
$shipping_cost = intval("20");
$currencyCodeType = "USD";
$paymentType = "Sale";


//'------------------------------------
//' The currencyCodeType and paymentType 
//' are set to the selections made on the Integration Assistant 
//'------------------------------------



//'------------------------------------
//' The returnURL is the location where buyers return to when a
//' payment has been succesfully authorized.
//'
//' This is set to the value entered on the Integration Assistant 
//'------------------------------------
$returnURL = "http://localhost/Devins/index.php?page=review";

//'------------------------------------
//' The cancelURL is the location buyers are sent to when they hit the
//' cancel button during authorization of payment during the PayPal flow
//'
//' This is set to the value entered on the Integration Assistant 
//'------------------------------------
$cancelURL = "http://www.google.com";


$_SESSION["paypalitems2"] = "&ADDROVERRIDE=0".
                "&PAYMENTREQUEST_0_SHIPTONAME="."AA".
                "&PAYMENTREQUEST_0_SHIPTOSTREET="."BB".
                "&PAYMENTREQUEST_0_SHIPTOCITY="."gedglk".
                "&PAYMENTREQUEST_0_SHIPTOSTATE="."sfsf".
                "&PAYMENTREQUEST_0_SHIPTOCOUNTRYCODE=LK".
                "&PAYMENTREQUEST_0_SHIPTOZIP="."fdgd".
                "&PAYMENTREQUEST_0_SHIPTOPHONENUM="."0774117218"."&PAYMENTREQUEST_0_ITEMAMT="."100";
				
				$paypalitems = "&L_PAYMENTREQUEST_0_NAME"."0"."="."aaaaaa"."&L_PAYMENTREQUEST_0_AMT"."1"."=".intval("100")."&L_PAYMENTREQUEST_0_QTY"."2"."="."1";
				
				$_SESSION["paypalitems"] = $paypalitems;


$paypalitems3="&PAYMENTREQUEST_0_SHIPPINGAMT=".$shipping_cost.
                "&PAYMENTREQUEST_0_AMT=".$paymentAmount.
                "&PAYMENTREQUEST_0_CURRENCYCODE=".$currencyCodeType.
                "&LOGOIMG=https://webooks.altairsl.us/logo.png". //site logo
                "&CARTBORDERCOLOR=FFFFFF". //border color of cart
                "&ALLOWNOTE=1";


$paypalitems_final = "&METHOD=SetExpressCheckout&RETURNURL=".$returnURL."&CANCELURL=".$cancelURL."&PAYMENTREQUEST_0_PAYMENTACTION=SALE".$_SESSION["paypalitems"].$_SESSION["paypalitems2"].$paypalitems3;




//'------------------------------------
//' Calls the SetExpressCheckout API call
//'
//' The CallShortcutExpressCheckout function is defined in the file PayPalFunctions.php,
//' it is included at the top of this file.
//'-------------------------------------------------
//$resArray = CallShortcutExpressCheckout ($paymentAmount, $currencyCodeType, $paymentType, $returnURL, $cancelURL);
$resArray = CallMarkExpressCheckout( $paypalitems_final, $currencyCodeType, $paymentType) ;
$ack = strtoupper($resArray["ACK"]);
if($ack=="SUCCESS" || $ack=="SUCCESSWITHWARNING")
{
	RedirectToPayPal ( $resArray["TOKEN"] );
} 
else  
{
	//Display a user friendly Error on the page using any of the following error information returned by PayPal
	$ErrorCode = urldecode($resArray["L_ERRORCODE0"]);
	$ErrorShortMsg = urldecode($resArray["L_SHORTMESSAGE0"]);
	$ErrorLongMsg = urldecode($resArray["L_LONGMESSAGE0"]);
	$ErrorSeverityCode = urldecode($resArray["L_SEVERITYCODE0"]);
	
	echo "SetExpressCheckout API call failed. ";
	echo "Detailed Error Message: " . $ErrorLongMsg;
	echo "Short Error Message: " . $ErrorShortMsg;
	echo "Error Code: " . $ErrorCode;
	echo "Error Severity Code: " . $ErrorSeverityCode;
}
?>