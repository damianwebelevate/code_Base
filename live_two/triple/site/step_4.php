<?php header('X-Robots-Tag: noindex,nofollow'); header('Content-Type: application/json');?>
<?php session_start();?>

<?php 
require dirname(__FILE__).'/emailTemplate/class/EmailTemplate.php'; 
require dirname(__FILE__).'/email.php';
?>

<?php
// message in this instance is the nice display of html in the browser to show the order summary:
$message = isset($_SESSION['new_single_order_two']) ? $_SESSION['new_single_order_two'] : "";
// orderReceipt is the table for email display
$orderReceipt = isset($_SESSION['checkEmailAgain']) ? $_SESSION['checkEmailAgain'] : "";

if(count($_SESSION['Cart']['Receipt']) > 1){
  foreach($_SESSION['Cart']['Receipt'] as $key=>$value){
    if($value == 'None'){
      $message .= "";
    }else{
      $message.=$value;
    }
  }
}

if(count($_SESSION['Cart']['Order']) > 1){
  foreach($_SESSION['Cart']['Order'] as $key=>$value){
    if($value == 'None'){
      $orderReceipt .= "";
    }else{
      $orderReceipt .= $value;
    }
  }
}

?>

<?php
/**
 * Validate form on Step 3 just in case JS fails
 */
$requiredFields = array('customer_firstname','customer_surname','customer_phone','customer_email',
                        'customer_billing_address_line_1','customer_billing_address_city','customer_billing_address_country','customer_billing_address_state','customer_billing_address_zipcode',
                        'customer_shipping_address_line_1','customer_shipping_address_city','customer_shipping_address_country','customer_shipping_address_state','customer_shipping_address_zipcode',
                        'customer_cc_fullname','customer_confirm_payment');
$errors = $meta = array();
foreach ($requiredFields as $key) {
  if (!isset($_POST[$key]) || (isset($_POST[$key]) && $_POST[$key] == '')) {
    $errors[] = $key . ' is a required field.';
  } else {
    $meta[$key] = $_POST[$key];
  }
}

// If there are errors, return basic JSON array with error message String.
if (count($errors) > 0) {
  echo json_encode(array('error' => 1, 'message' => implode("<br>", $errors)));
  exit();
}

/**
 * No errors in form, so we can proceed.
 */

require dirname(__FILE__).'/vendor/autoload.php';

// \Stripe::setApiKey("YOUR SECRET KEY");

\Stripe::setApiKey("sk_live_ModAcK8DzpDRHNdn4wTyw5cg");






$paymentReference = '';

try {
                $basketTotal = isset($_POST['total']) ? $_POST['total'] : '';
  $fee         = isset($_POST['fee']) ? $_POST['fee'] : '';
                $custName    = isset($_POST['customer_cc_fullname']) ? $_POST['customer_cc_fullname'] : '';
  $custEmail   = isset($_POST['customer_email']) ? $_POST['customer_email'] : '';
  $stripeToken = isset($_POST['stripeToken']) ? $_POST['stripeToken'] : '';


  $total = $basketTotal + $fee;
  $response = \Stripe_Charge::create(array(
    "amount"               => ($total) * 100,
    "currency"             => "USD",
    "statement_descriptor" => $custName,
    "description"          => $custName,
    "receipt_email"        => $custEmail,
    "metadata"            => $meta,
    "card"                 => $stripeToken)
  );
  if (!empty($response)) {
    $paymentReference = $response->id;
    if (!preg_match("/^ch_/", $paymentReference)) {
                $errors[] =  "Invlaid payment reference [{$paymentReference}]. You may still have been charged. Please contact site admin.";
    }
  }
} catch (\Stripe_InvalidRequestError $e) {
  $body = $e->getJsonBody();
  $err  = $body['error'];
  $errors[] = $err['message'];
} catch (\Stripe_AuthenticationError $e) {
  $body = $e->getJsonBody();
  $err  = $body['error'];
  $errors[] = $err['message'];
} catch (\Stripe_ApiConnectionError $e) {
  $body = $e->getJsonBody();
  $err  = $body['error'];
  $errors[] = $err['message'];
} catch (\Stripe_Error $e) {
  $body = $e->getJsonBody();
  $err  = $body['error'];
  $errors[] = $err['message'];
} catch (Exception $e) {
  $errors[] = $e->getMessage();
} catch (ErrorException $e) {
  $errors[] = $e->getMessage();
}

if (count($errors) <= 0) {
  $timestamp = date("YmdHis", time());

  // Save the order data
  $filename = dirname(__FILE__) . "/orders/{$custEmail}_{$timestamp}.txt";

  $serializedData = serialize(array('payment_reference' => $paymentReference, 'data' => $_POST, 'session' => isset($_SESSION) ? $_SESSION : ''));
  file_put_contents($filename, $serializedData);

  $mailOk = 0;

  $shippingFee = number_format($_POST['fee'], 2);
  $saleTotal = number_format($_POST['totalPlusFee'], 2);



  $endOfOrder = '   <table bgcolor="#FFFFFF" align="center" border="0" cellpadding="0" cellspacing="0" style="width: 500px; margin: 0 auto; border: 1px solid #B8A14F; border-bottom: none;">
                      <tr>
                        <td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
                          <h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
                            Shipping Fee
                          </h4>
                        </td>
                        <td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
                          <h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial; text-align: right;">
                            $ '.$shippingFee.'
                          </h4>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
                          <h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
                            Total <small>Inc. Shipping</small>
                          </h4>
                        </td>
                        <td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
                          <h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial; text-align: right;">
                            $ '.$saleTotal.'
                          </h4>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2" style="border-bottom: 1px solid #B8A14F; padding: 5px;">
                        <h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial; text-align: center;">
                        Thank you for shopping with Triple Crown Custom. <br /> We hope your horse enjoys their new blanket.
                        </h4>
                        </td>
                      </tr>
                    </table>';


  $receipt = "";
  $receipt .= $message;
  $receipt .= '  <div class="receiptOutline">
                    <div class="receiptLeftRow">
                      <h3>Total <small>Plus Shipping</small></h3>
                    </div><!-- cell 50% -->
                    <div class="receiptRightRow">
                      <h3>$'.$saleTotal.'</h3>
                    </div><!-- cell 50% -->
                  </div><!-- row -->
                  <h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial; text-align: center;">
                        Thank you for shopping with Triple Crown Custom. <br /> We hope your horse enjoys their new blanket.
                        </h4>
                </div>';

  $bodyDiff = "";

  // if statement above checks to see if there are items in the cart as processed and puts them into the $body 
  $bodyDiff .= $orderReceipt;
  // endOfOrder as above to close the order for client and sales inc shipping fee and total ammount paid
  $bodyDiff .= $endOfOrder;

  $nameOfFile = "this_".$timestamp;
  $newEmail = dirname(__FILE__) ."/orders/".$nameOfFile.".html";
  file_put_contents($newEmail, $bodyDiff);

  $salesTitle = ' <table bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 500px; margin: 0 auto; border: 1px solid #B8A14F;">
                    <tr>  
                        <td width="10%" style="padding: 10px 2px;">
                          <img width="37" style="border: none;" src="https://triplecrowncustom.com/wp-content/themes/triple/img/crown.png" />
                        </td>
                        <td width="90%" style="padding: 10px 0px;">
                          <h1 style="margin: 0; font-size: 29px; font-family: Times; color: #B8A14F; text-transform: uppercase; font-weight: normal;">Full Customer Details</h1>
                        </td>
                    </tr>
                </table>';
  $salesReceipt = '<table bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 500px; margin: 0 auto; border: 1px solid #B8A14F; border-bottom: none;">            <tr>
                          <td style="padding: 5px; border-bottom: 1px solid #B8A14F;">
                            <h4 style="font-size: 16px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">Payment Reference</h4></td>
                          <td style="padding: 5px; border-bottom: 1px solid #B8A14F;" >'.$paymentReference.'</td>
                        </tr>';

  foreach($_POST as $key=>$value) {
    $salesReceipt .= '<tr><td style="padding: 5px; border-bottom: 1px solid #B8A14F;"><h4 style="font-size: 16px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">'.ucwords($key = str_replace("_", " ", $key)).':</h4></td><td style="padding: 5px; text-align: right;border-bottom: 1px solid #B8A14F;"><p>'.$value.'</p></td></tr>';
  }

  $salesReceipt .= '  </table>';

  $customerTitle = '  <table bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #B8A14F; width: 500px; margin: 0 auto;">
                        <tr>  
                        <td width="10%" style="padding: 10px 2px;">
                          <img width="37" style="border: none;" src="https://triplecrowncustom.com/wp-content/themes/triple/img/crown.png" />
                        </td>
                        <td width="90%" style="padding: 10px 0px;">
                          <h1 style="margin: 0; font-size: 29px; font-family: Times; color: #B8A14F; text-transform: uppercase; font-weight: normal;">Customer Receipt</h1>
                        </td>
                        </tr>
                      </table>';

  $customerReceipt = '  <table align="center" cellpadding="0" cellspacing="0" style="border: 1px solid #B8A14F; width: 500px; background-color: #ffffff;">
                            <tr>
                              <td></td>
                            </tr>
                            <tr>  
                                <td colspan="2" style="padding: 10px 5px;">
                                <h3 style="font-size: 18px; margin: 20px 0px 10px 0px; text-transform: uppercase; font-weight: normal; font-family: Arial;">Payment Reference Number: </h3>
                                <h3 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">'.$paymentReference.'</h3>
                                <h3 style="font-size: 16px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">Order Status: <strong>Paid in Full</strong></h3>
                                <p style="font-family: Arial;">Please see your full order details below</p>
                                <p style="font-family: Arial;">Please allow 4 to 6 weeks for delivery of your bespoke blanket from Triple Crown Custom</p>
                                <p style="font-family: Arial;">Call Us on: </p>
                                <a href="tel:+12529331356" style="font-family: Arial; display: block;" title="(+1) 252-933-1356">(+1) 252-933-1356</a>
                                <br />
                                <p style="font-family: Arial;">Email: </p>
                                <a style="font-family: Arial; display: block;" href="mailto:info@triplecrowncustom.com?subject=Customer Enquiry">info@triplecrowncustom.com</a>
                              </td>
                          </tr>
                      </table>';
  // end customer Email


  $kathyCain = 'kathy.cain@horseware.com';

  $melissa = 'melissa.kilpatrick@horseware.com';

  $annette = 'annette.mills@horseware.com';

  $poppyEmail= 'poppy.blandford@triplecrowncustom.com';

  $salesSubject = "New Order ".$paymentReference;

  $clientSubject = "Payment Received - Thank you".$paymentReference;

  // generate the email template for sales:
  $salesEmailTemplate = new EmailTemplate($bodyDiff, $salesTitle, $salesReceipt);

  // generate the email template for customers:
  $customerEmailTemplate = new EmailTemplate($bodyDiff, $customerTitle, $customerReceipt);

  // back up email
  $backUpEmailSales = new SendMail('damian.orourke@horseware.com', 'Backup Email for - SALES', $salesEmailTemplate);
  $backUpEmailCustomer = new SendMail('damian.orourke@horseware.com', 'Backup Email for - CUSTOMER', $customerEmailTemplate);
  // client
  $clientEmail = new SendMail($custEmail, $clientSubject, $customerEmailTemplate);
  // poppy
  $poppy = new SendMail($poppyEmail, $salesSubject, $salesEmailTemplate);
  // kathy cain
  $kathy = new SendMail($kathyCain, $salesSubject, $salesEmailTemplate);
  // melissa kilpatrick
  $mel = new SendMail($melissa, $salesSubject, $salesEmailTemplate);
  // annette mills
  $annette = new SendMail($annette, $salesSubject, $salesEmailTemplate);

  if($backUpEmailSales->getReport()==1){
      $mailOk = 1;
    }else{
      $mailOk = 0;
    }


  $_SESSION['receipt'] = $receipt;


  echo json_encode(array('error' => 0, 'message' => "Payment OK. Payment reference is " .$paymentReference, 'mailOk' => $mailOk));

} else {
  echo json_encode(array('error' => 1, 'message' => implode("<br>", $errors)));

}// close if count errors

exit();