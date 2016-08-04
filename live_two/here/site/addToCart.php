<?php header('X-Robots-Tag: noindex,nofollow'); ?>
<?php  session_start(); 

function generateToken() {
    
   // generate a token from an unique value
  // $token = md5(uniqid(microtime(), true));  
  $token = hash('sha256', uniqid(microtime(),true));
  // Write the generated token to the session variable to check it against the hidden field when the form is sent
  // $_SESSION[$rugName.'_token'] = $token; 
  
  return $token;

}


function genReceipt($receipt){


  if(is_array($_SESSION['Cart']['Cart Number'])){

    return array_push($_SESSION['Cart']['Receipt'], $receipt);
   
  }

}

function genOrder($order){


  if(is_array($_SESSION['Cart']['Cart Number'])){

    return array_push($_SESSION['Cart']['Order'], $order);
   
  }

}

function genThumb($thumb){

    if(is_array($_SESSION['Cart']['Cart Number'])){
        
        return array_push($_SESSION['Cart']['Thumb'], $thumb);
      }
}

function genKey($key){
    
    if(is_array($_SESSION['Cart']['Cart Number'])){
        return array_push($_SESSION['Cart']['Cart Number'], $key);
      }
      
}

function genSubTotals($total){
    
    if(is_array($_SESSION['Cart']['Cart Number'])){
        return array_push($_SESSION['Cart']['Subtotal'], $total);
      }
      
}

function array_fillkeysAgain($keyArray, $valueArray) {
  if(is_array($keyArray)) {
      foreach($keyArray as $key => $value) {
          $filledArray[$value] = $valueArray[$key];
        }
    }
          return $filledArray;
}


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


function checkTokenAgain($form){
  if(!isset($_SESSION[$form.'_token'])){
    echo "not set";
    return false;
  }
  if(!isset($_POST['orderSummaryToken'])){
    echo "not in post data";
    return false;
  }

  if($_SESSION[$form.'_token'] !== $_POST['orderSummaryToken']){
    echo "not equal to each other";
    return false;
  }

  return true;
}


?>
<?php
/*
* Copyright 2015, 2016 Damian O'Rourke
* Email: damiano_rourke@hotmail.com
* Website: damianorourke.com
*/
/*
*  This file is part of Triple Crown Custom - TCC

    TCC is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    TCC is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with TCC.  If not, see <http://www.gnu.org/licenses/>.
*/

// looking for token




// declare an array $sizesArray that captures the multiple select options that are on the order summary page
// the first one is select and its value is pushed into the first position of the $sizesArray[0]
// the loop below checks the values of the key and if it is an integer it will push the remaining values to the
// $sizesArray
// the remainder of the foreach loop assigns the keys and values to a new array called afterClean using a function above
// to clean the html inputted by the form


// little check to see if the total is somehow zero then it bounces to homepage - hack attempted
if($_POST['total'] == "0"){
  header("location: https://triplecrowncustom.com/");
}else{




if(checkTokenAgain('Order_Summary')){

  
  $sizesArray = array();
  $values = array();
  $keys = array();
  $afterClean = array();

  foreach($_POST as $key=>$value){

    if($key == 'select'){
      $sizesArray[0] = test_input($value. " inches");
    }elseif(is_int($key)){
      array_push($sizesArray, test_input($value));
    }else{
      array_push($values, test_input($value));
      array_push($keys, $key);
    }

  }

$afterClean = array_fillkeysAgain($keys, $values);

// this is effectivly the receipt for the session at the end
$singleOrder = isset($_SESSION['new_single_order']) ? $_SESSION['new_single_order'] : "";

$quantity = $afterClean['quantity'];
$total = $afterClean['total'];
$size = "<ul style='list-style-type: none; margin: 0; padding: 0;'>";
if(count($sizesArray) > 0){
  
  for($i = 0; $i < count($sizesArray); $i++){
    $size .= "<li><h3>".$sizesArray[$i]."</h3></li>";
  }
}

$size .= "</ul>";

// add to the receipt for display !!for emails:

$addToHtml = '<div class="bodyColorRow">
                <div class="bodyColorHalf">
                  <h3>Quantity</h3>
                </div><!-- cell 50% -->
                <div class="bodyColorHalfCenter">
                <h3>'.$quantity.'</h3>
                </div><!-- cell 50% -->
              </div><!-- row -->';

$addToHtml .= '<div class="bodyColorRow">
                <div class="bodyColorHalf">
                  <h3>Size(s)</h3>
                </div><!-- cell 50% -->
                <div class="bodyColorHalfCenter">
                '.$size.'
                </div><!-- cell 50% -->
              </div><!-- row -->';

$addToHtml .= '<div class="bodyColorRow">
                <div class="bodyColorHalf">
                  <h3>Subtotal <small>Ex. Shipping</small></h3>
                </div><!-- cell 50% -->
                <div class="bodyColorHalfCenter">
                <h3>$ '.$total.'</h3>
                </div><!-- cell 50% -->
              </div><!-- row --></div></div></div>';

// new as of 26/04/2016:

$emailTemplate = $_SESSION['checkEmail'];

$addToTemplate = '  <tr>
                      <td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
                        <h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
                          Quantity
                        </h4>
                      </td>
                      <td style="border-bottom: 1px solid #B8A14F; padding: 5px; font-family: Arial;">
                        <p style="margin: 10px 0px; text-align: right;">'.$quantity.'</p>
                      </td>
                    </tr>';

$addToTemplate .= '  <tr>
                      <td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
                        <h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
                          Size(s)
                        </h4>
                      </td>
                      <td style="border-bottom: 1px solid #B8A14F; padding: 5px; font-family: Arial;">
                        <p style="margin: 10px 0px; text-align: right;">'.$size.'</p>
                      </td>
                    </tr>';
$addToTemplate .= '  <tr>
                      <td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
                        <h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
                          Subtotal <small>Ex. Shipping</small>
                        </h4>
                      </td>
                      <td style="border-bottom: 1px solid #B8A14F; padding: 5px; font-family: Arial;">
                        <p style="margin: 10px 0px; text-align: right;">$ '.$total.'</p>
                      </td>
                    </tr>
                    </table>';

$addToTemplate .= " <table cellpadding=\"0\" cellspacing=\"0\" style='width: 500px; margin: 0 auto;'>
                      <tr><td style='padding: 10px;''><!-- gap in flow of doc --> </td><td></td></tr>
                    </table></table>";

$emailTemplate .= $addToTemplate;



$_SESSION['checkEmailAgain'] = $emailTemplate;

$singleOrder .= $addToHtml;

$_SESSION['new_single_order_two'] = $singleOrder;

$id = generateToken();

$partOneOfCart = $_SESSION['part_one_of_cart'];

$partOneOfCart .= '
    <div class="bodyColorRow">
      <div class="cartRowRow">
        <h3>SIZE(s)</h3>
      </div><!-- cell 50% -->
      <div style="width: 50%; box-sizing: border-box; -o-box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; padding-left: 5%; text-align: center; position: relative; display: inline; float: left; padding-left: 5%;">
        '.$size.'
      </div><!-- cell 50% -->
    </div><!-- row -->
    <div class="bodyColorRow">
      <div class="cartRowRow">
        <h3>Subtotal <small>Ex. Shipping</small></h3>
      </div><!-- cell 50% -->
      <div style="width: 50%; box-sizing: border-box; -o-box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; padding-left: 5%; text-align: center; position: relative; display: inline; float: left; padding-left: 5%;">
        <h3>$ '.$total.'</h3>
      </div><!-- cell 50% -->
    </div><!-- row -->
    <div class="bodyColorRow">
      <div class="cartRowRow">
        <!-- empty -->
        &nbsp;
      </div><!-- cell 50% -->
      <div class="cartRowRow">
        <form method="post" action="https://triplecrowncustom.com/triple-cart-page-2/">
          <input type="hidden" name="unique" value="'.$id.'">
          <input type="hidden" name="blanket" value="Gulf Stream Net Cooler">
          <input type="submit" style="float: right;" name="delete" value="Remove">
        </form>
      </div><!-- cell -->
    </div><!-- row -->
  </div><!-- close 60%  -->
</div><!-- close 100% -->';

// unsetting order summary token here:
unset($_SESSION['Order_Summary_token']);

  if(!empty($_POST['cart'])){
      
//       // call your add to cart function genCart and assign them to it.
//       // can check to see whats in cart and if nothing then...
//       // if add to cart write to the cart variable in the session and unset all of the session data after writing to table


      genKey($id);

      genReceipt($singleOrder);

      genOrder($emailTemplate);

      genThumb($partOneOfCart);

      genSubTotals($total);

      // unset session vars on the addToCartRoutine      
      unset($_SESSION['index']['Rug Selection']);
      unset($_SESSION['index']['Category']);
      unset($_SESSION['index']);
      // unset($_SESSION['page2']);
      // unset($_SESSION['page2']['Body Color']);
      // unset($_SESSION['page2']['Binding Color']);
      // unset($_SESSION['page2']['Piping Color']);
      
      unset($_SESSION['part_one_of_cart']);
      unset($_SESSION['new_single_order']);

      unset($_SESSION['new_single_order_two']);

      unset($_SESSION['checkEmail']);
      unset($_SESSION['checkEmailAgain']);


      header('location: https://triplecrowncustom.com/triple-cart-page-2/');


      }

      if(!(empty($_POST['buy']))){

        // if there are already items in the cart:

        if(count($_SESSION['Cart']['Order']) > 1){

                genKey($id);

                genReceipt($singleOrder);

                genOrder($emailTemplate);

                genThumb($partOneOfCart);

                genSubTotals($total);

                // unset session vars on the addToCartRoutine      
                unset($_SESSION['index']['Rug Selection']);
                unset($_SESSION['index']['Category']);
                unset($_SESSION['index']);
                // unset($_SESSION['page2']);
                // unset($_SESSION['page2']['Body Color']);
                // unset($_SESSION['page2']['Binding Color']);
                // unset($_SESSION['page2']['Piping Color']);
                
                unset($_SESSION['part_one_of_cart']);
                unset($_SESSION['new_single_order']);

                unset($_SESSION['new_single_order_two']);

                unset($_SESSION['checkEmail']);
                unset($_SESSION['checkEmailAgain']);


                header('location: https://triplecrowncustom.com/triple-cart-page-2/');

        }else{

                $_SESSION['total'] = $total;
                
                unset($_SESSION['index']['Rug Selection']);
                unset($_SESSION['index']['Category']);
                unset($_SESSION['index']);
                // unset($_SESSION['page2']);
                // unset($_SESSION['page2']['Body Color']);
                // unset($_SESSION['page2']['Binding Color']);
                // unset($_SESSION['page2']['Piping Color']);
                // unset($_SESSION['Order_Summary_token']);
                unset($_SESSION['product_image']);
                unset($_SESSION['part_one_of_cart']);
                unset($_SESSION['new_single_order']);

                unset($_SESSION['checkEmail']);

                header('location: https://triplecrowncustom.com/order-form/');

        }// close inner if

      }// close if buy


}else{

  die();
  echo "hack attempted ... storing ip address and begining trace ... best of luck";
}

}// close opening condition for the whole page ie if someone goes through with no products in basket WHY but anyway

?>