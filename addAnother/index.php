<?php

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

$blankets = array(
					"Pimlico_Wool_Dress_Sheet",
					"Hollywood_Cotton_Cooler",
					"Gulfstream_Net_Cooler",
					"Extended_Neck_Lined_Rain_Sheet",
					"Santa_Anita_Stable_Sheet",
					"200g_Belmont_Stable_Blanket"
				 );


$currentBlanket = isset($_POST['currentBlanket']) ? $_POST['currentBlanket'] : "";
$totalCustomizations = isset($_POST['Total_Customizations']) ? $_POST['Total_Customizations'] : "";
$totalBlanketCost = isset($_POST['Total_Blanket_Cost']) ? $_POST['Total_Blanket_Cost'] : "";
$totalBlanketCostPlusCustomizations = isset($_POST['Total_Blanket_Costs_Plus_Customizations']) ? $_POST['Total_Blanket_Costs_Plus_Customizations'] : "";
$totalBlankets = isset($_POST['totalBlankets']) ? $_POST['totalBlankets'] : "";

$totalBlanketsForLoop = $totalBlankets -1;

echo "<p>Current Blanket: ".$currentBlanket."</p>";
echo "<p>Total Customisations: ".$totalCustomizations."</p>";
echo "<p>Total Blanket Cost: ".$totalBlanketCost."</p>";
echo "<p>Total Blanket Cost Plus Customisations: ".$totalBlanketCostPlusCustomizations."</p>";
echo "<p>Total Blankets to order: ".$totalBlankets."</p>";

unset($_POST['currentBlanket']);
unset($_POST['Total_Customizations']);
unset($_POST['Total_Blanket_Cost']);
unset($_POST['Total_Blanket_Costs_Plus_Customizations']);
unset($_POST['totalBlankets']);

// foreach($_POST as $key=>$value){
// 	echo "<p>".$key = str_replace("_", " ", $key)."=>".$value = test_input($value)."</p>";
// }

// global arrays that are appended to depending on the values in the post array:
// 0 to 5 in the right order should produce the array
$outboundBlanketsArray = $outboundBlanketsQuantity = $outboundBlanketSizes = array();



foreach($_POST as $key=>$value){
	if(in_array($key, $blankets)){
		filterValues($key, $value);
	}
}




function filterValues($key, $value){

	global $outboundBlanketsArray;
	global $outboundBlanketsQuantity;
	global $outboundBlanketSizes;
	global $totalBlanketsForLoop;

	switch($key){
		// 0th position in array
		case "Pimlico_Wool_Dress_Sheet";
	
		$quantityString = "Pimlico_Wool_Dress_Sheet_quantity";
		$blanket = $_POST[$key];
		$quantity = $_POST[$quantityString];
		$sizes = array();
		for($i = 1; $i <= $totalBlanketsForLoop; $i++){
			
				$selectString = "Pimlico_Wool_Dress_Sheet_select_".$i;

			if(!(empty($_POST[$selectString]))){
				array_push($sizes, $_POST[$selectString]);
				unset($_POST[$selectString]);
			}
			
		}

		// var_dump($sizes);
		unset($_POST[$key]);
		unset($_POST[$quantityString]);
		// build a string to make a list:
		$outboundBlanketsArray[0] = $blanket;
		$outboundBlanketsQuantity[0] = $quantity;
		$outboundBlanketSizes[0] = $sizes;
		$giantString = $sizes;
		break;
		// 1st position in array
		case "Hollywood_Cotton_Cooler";
	
		$quantityString = "Hollywood_Cotton_Cooler_quantity";
		$blanket = $_POST[$key];
		$quantity = $_POST[$quantityString];
		$sizes = array();
		for($i = 1; $i <= $totalBlanketsForLoop; $i++){
			
			$selectString = "Hollywood_Cotton_Cooler_select_".$i;

			if(!(empty($_POST[$selectString]))){
				array_push($sizes, $_POST[$selectString]);
				unset($_POST[$selectString]);
			}			
			
		}

		unset($_POST[$key]);
		unset($_POST[$quantityString]);
		// build a string to make a list:
		$outboundBlanketsArray[1] = $blanket;
		$outboundBlanketsQuantity[1] = $quantity;
		$outboundBlanketSizes[1] = $sizes;
		break;
		// 2nd position in array
		case "Gulfstream_Net_Cooler";
	
		$quantityString = "Gulfstream_Net_Cooler_quantity";
		$blanket = $_POST[$key];
		$quantity = $_POST[$quantityString];
		$sizes = array();
		for($i = 1; $i <= $totalBlanketsForLoop; $i++){
			
			$selectString = "Gulfstream_Net_Cooler_select_".$i;

			if(!(empty($_POST[$selectString]))){
				array_push($sizes, $_POST[$selectString]);
				unset($_POST[$selectString]);
			}
			
		}

		// var_dump($sizes);
		unset($_POST[$key]);
		unset($_POST[$quantityString]);
		// build a string to make a list:
		
		$outboundBlanketsArray[2] = $blanket;
		$outboundBlanketsQuantity[2] = $quantity;
		$outboundBlanketSizes[2] = $sizes;
		$giantString = $sizes;
		break;

		// 3rd position in array
		case "Extended_Neck_Lined_Rain_Sheet";
	
		$quantityString = "Extended_Neck_Lined_Rain_Sheet_quantity";
		$blanket = $_POST[$key];
		$quantity = $_POST[$quantityString];
		$sizes = array();
		for($i = 1; $i <= $totalBlanketsForLoop; $i++){
			
			$selectString = "Extended_Neck_Lined_Rain_Sheet_select_".$i;

			if(!(empty($_POST[$selectString]))){
				array_push($sizes, $_POST[$selectString]);
				unset($_POST[$selectString]);
			}
			
		}

		// var_dump($sizes);
		unset($_POST[$key]);
		unset($_POST[$quantityString]);
		// build a string to make a list:
		
		$outboundBlanketsArray[3] = $blanket;
		$outboundBlanketsQuantity[3] = $quantity;
		$outboundBlanketSizes[3] = $sizes;
		$giantString = $sizes;
		break;

		// 4th position in array
		case "Santa_Anita_Stable_Sheet";
	
		$quantityString = "Santa_Anita_Stable_Sheet_quantity";
		$blanket = $_POST[$key];
		$quantity = $_POST[$quantityString];
		$sizes = array();
		for($i = 1; $i <= $totalBlanketsForLoop; $i++){
			
			$selectString = "Santa_Anita_Stable_Sheet_select_".$i;

			if(!(empty($_POST[$selectString]))){
				array_push($sizes, $_POST[$selectString]);
				unset($_POST[$selectString]);
			}
			
		}

		// var_dump($sizes);
		unset($_POST[$key]);
		unset($_POST[$quantityString]);
		// build a string to make a list:
		
		$outboundBlanketsArray[4] = $blanket;
		$outboundBlanketsQuantity[4] = $quantity;
		$outboundBlanketSizes[4] = $sizes;
		$giantString = $sizes;
		break;

		// 5th position in array
		case "200g_Belmont_Stable_Blanket";
	
		$quantityString = "200g_Belmont_Stable_Blanket_quantity";
		$blanket = $_POST[$key];
		$quantity = $_POST[$quantityString];
		$sizes = array();
		for($i = 1; $i <= $totalBlanketsForLoop; $i++){
			
			$selectString = "200g_Belmont_Stable_Blanket_select_".$i;

			if(!(empty($_POST[$selectString]))){
				array_push($sizes, $_POST[$selectString]);
				unset($_POST[$selectString]);
			}
			
		}

		// var_dump($sizes);
		unset($_POST[$key]);
		unset($_POST[$quantityString]);
		// build a string to make a list:
		
		$outboundBlanketsArray[5] = $blanket;
		$outboundBlanketsQuantity[5] = $quantity;
		$outboundBlanketSizes[5] = $sizes;
		$giantString = $sizes;
		break;
	}
}


// var_dump($outboundBlanketsArray);
// var_dump($outboundBlanketsQuantity);
// var_dump($outboundBlanketSizes);

// $collumative = array_merge($outboundBlanketsArray, $outboundBlanketsQuantity, $outboundBlanketSizes);

// print_r($collumative);
// echo count($collumative);

$list = "<ul class=''>";


for($i = 0; $i <= count($outboundBlanketsArray); $i++){

	if($i != "Null"){
		$list .= "<li><h3 class='title'><span></span>".$outboundBlanketsArray[$i]."</h3></li>";
		$list .= "<li><h4 class='goldText'>Quantity: ".$outboundBlanketsQuantity[$i]."</h4></li>";
		$list .= "<li><h5 class='goldText'>Sizes: </h5><ul>";
		if(is_array($outboundBlanketSizes[$i])){
			for($j = 0; $j < count($outboundBlanketSizes[$i]); $j++){
				$list .= "<li>".$outboundBlanketSizes[$i][$j]."</li>";
			}
			$list .= "</ul></li>";
		}
	}
	

}


$list .= "</ul>";
$output = "<div class='wrapper'>";
$output .= $list;
$output .= "<hr />";
$output .= "<p>Total Blankets to order: ".$totalBlankets."</p>";
$output .= "<p>Total Blanket Cost: ".$totalBlanketCost."</p>";
$output .= "<p>Total For Customizations: ".$totalCustomizations."</p>";
$output .= "<p>Total Blanket Cost Plus Customisations: ".$totalBlanketCostPlusCustomizations."</p>";
$output .= "</div>";

// $output = "<hr />";
// $output .= "<h3 class='goldText'>".$

echo $output;

// var_dump($_POST['Hollywood_Cotton_Cooler_select_1']);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Another Product</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/css/main.css">

	<style type="text/css">

.addAnotherBlanketList{
	list-style-type: none;
	margin: 0;
}

.addAnotherBlanketList li{
	border: 1px solid lightgrey;
	margin-bottom: 5px;
}

.addAnotherBlanketList li:hover{
	cursor: pointer;
	text-decoration: underline;
}

.addAnotherSpan, .addAnotherSpanTitle{
	float: right; color: black; background-image: none !important; text-align: center;
}

.addAnotherSpanTitle{
	color: white; text-align: center; margin-right: 50px;
}

.addAnotherListTitle{
	color: #fff;
	background-color: #0D416E;
	margin: 0;
}

#addAnotherOutput{
	min-width: 320px;
}

.plus{
	display: inline;
    float: left;
}

.plus{argin-left: 3px; width: 50px; height: 50px; position: relative; display: inline; float: left; border: 1px solid #B8A14F; line-height: 1.7; font-weight: bold; color: #B8A14F; font-size: 2em; text-align: center;
}


.minus{
    width: 50px; height: 50px; position: relative; display: inline; float: left; border: 1px solid #B8A14F; line-height: 1.65; font-weight: bold; color: #B8A14F; font-size: 2em; text-align: center;
}

.holderElement{
	width: 100%;
	min-height: 100px;
	overflow: auto;
	border: 1px solid lightgrey;
}

.plusMinusHolder{
	float: left;
	display: inline;
	border: 1px solid purple;
	width: 400px;
}

.rowOne{
	border: none;
}

.fifty{
	padding: 0;
}

.fifty select{
	margin-top: 22px;
	font-weight: normal;
	font-family: "Open Sans", Arial;
}

#addAnotherBlanketList li{
	background-color: lightgrey;
	border: 1px solid green;
	margin-bottom: 3px;
}

#addAnotherBlanketList li:hover{
	cursor: pointer;
	background-color: #eee;
}
</style>
</head>
<body>
<div class="wrapper">




<!-- <label for="rug">Current Blanket</label> -->
<input type="hidden" id="blanket" name="rug" value="Pimlico Wool Dress Sheet" />

<h1>Blanket Cost: <span id="subTotal"></span></h1>
<h1>Total Customisation Cost: <span id="customisation"></span></h1>
<h1>Subtotal <small>(Ex.shipping): </small><span id="exShipping"></span></h1>


<h2 class="title"><span></span>Would you like to add these customizations to another one of our blankets?</h2>
<label for="checkBox">Check This Box: </label>
<input type="checkbox" name="checkBox" id="addAnotherBlanket" />







<form id="addCustomisations" method="post" action="index.php">
<div class="fifty" style="padding-right: 20px;">

	<!-- output area for the list -->
	<div style="display: none;" id="addAnotherOutput">
		<h1>Select your Product</h1>		
	</div><!-- //// close area -->
	<!-- output area for the form elements -->
	<div id="formOutput">
		<label for="counter">Counter</label>
		<input type="text" value="1" id="counter"/>
		<label for="hidcustomisation">Customisation Total from server</label>
		<input type="text" id="hidcustomisation" />
		<label for="total">Total (custom plus blanket)</label>
		<input type="text" name="Total_Blanket_Costs_Plus_Customizations" value="" id="totalTotal" />
		<label for="customTotal">Customisation Total</label>
		<input type="text" name="Total_Customizations" value="" id="customTotalTotal" />
		<label for="blanketCost">Base Blanket</label>
		<input type="text" name="Total_Blanket_Cost" value="" id="blanketTotalTotal"/>
		<label for"currentBlanket">Current Blanket</label>
		<input type="text" name="currentBlanket" id="currentBlanket" value="" />
		<label for="totalBlankets">Total Blankets: </label>
		<input type="text"  name="totalBlankets" id="totalBlankets" value="1" />

	</div><!-- //// close output for form -->
</div>
<div class="fifty" style="padding-left: 20px;">
	<div style="display: none;" id="myListWrap">
	<h1>Added Extras List</h1>

	</div><!-- //// myListWrap -->
</div>
<div style="clear: both;"></div>
<input type="submit" id="buyNow" value="Go" />
</form>




</div><!-- //// wrapper -->



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">


// load the list of items from the php file and exclude the one already selected

$(function(){

	$(window).on("load", function(){

		var data = $('#blanket').serialize();

		$.ajax({
			url: 'resources/addAnotherList.php',
			type: 'POST',
			dataType: 'json',
			data: data,
			success: function(json){
				// console.log(json.list);
				// html elements:
				$('#addAnotherOutput').append(json.list);
				$('#subTotal').html(json.blanketCost);
				$('#exShipping').html(json.subTotal);
				$('#customisation').html(json.customisation);
				$('#hidcustomisation').val(json.customisation);

				// form inputs:
				$('#blanketTotalTotal').val(json.blanketCost);
				$('#customTotalTotal').val(json.customisation);
				$('#totalTotal').val(json.subTotal);
				$('#currentBlanket').val(json.currentBlanket);

				someGlobalFunction();
			}
		});

		$('#addAnotherBlanket').on("click", function(){
			if($(this).is(":checked")){
				$('#addAnotherOutput, #myListWrap').show();
			}else{
				$('#addAnotherOutput, #myListWrap').hide();
			}
		});

	});

});



function someGlobalFunction(){

	$('#addAnotherBlanketList li').each(function(i, nth){


		$(nth).on("click", function(){
			
			var counter = document.getElementById('counter');
			var count = parseInt(counter.value);
			var totalBlankets = document.getElementById('totalBlankets');
			var tB = parseInt(counter.value);

			// form output area:
			var formOutput = document.getElementById('formOutput');

			// get the attributes necessary:
			var ident = $(this).attr("id");
			var price = parseFloat($(this).attr("data-price"));

			// visible customisation will change on plus
			var customisation = document.getElementById('customisation');
			var customTotalTemp = parseFloat(customisation.innerHTML);
			var customTotal = customTotalTemp.toFixed(2);
			// hidden customisation
			var hidCust = parseFloat(document.getElementById('hidcustomisation').value);
			var custToValPlus = customTotalTemp + hidCust;
			var custToVal = custToValPlus.toFixed(2);
			// output this to screen:
			customisation.innerHTML = custToVal;
			var customTotalTotal = document.getElementById('customTotalTotal');
			customTotalTotal.value = custToVal;

			var viewTotal = document.getElementById('subTotal');

			var value = parseFloat(viewTotal.innerHTML);

			value += price;

			var blanketTot = value.toFixed(2);
			viewTotal.innerHTML = blanketTot;

			

			var blanketTotalTotal = document.getElementById('blanketTotalTotal');

			blanketTotalTotal.value = blanketTot;

			// get the blanket cost : price
			// get the customistaion total : hidCust
			var tempToAdd = price + hidCust;
			var toAdd = tempToAdd.toFixed(2);
			// get the current value
			var currentSub = document.getElementById("exShipping");
			var currentSubToNum = parseFloat(currentSub.innerHTML);
			var numCurrentSub = currentSubToNum.toFixed(2);
			var tempTot = parseFloat(toAdd) + parseFloat(numCurrentSub);
			var totTotal = tempTot.toFixed(2);
			currentSub.innerHTML = totTotal;
			var submitTotal = document.getElementById('totalTotal');
			submitTotal.value = totTotal;

			var heading = document.createElement("H3");
			heading.setAttribute("class", "goldText");
			heading.setAttribute("id", "title_"+count);
			heading.innerHTML = ident;

			// create a price:
			var charge = document.createElement("P");
			charge.setAttribute("id", "price_"+count);
			charge.innerHTML = price;

			// create a button
			var button = createInput("Done_"+count, "Remove", "button");

			// create the select box:
			var select = createSelection(ident+"_select_"+count);

			// create a container
			var container = document.createElement("DIV");
			container.setAttribute("id", "container_"+count);
			container.setAttribute("class", "holderElement");

			// add these to the container:
			container.appendChild(heading);
			container.appendChild(charge);
			container.appendChild(select);
			container.appendChild(button);

			// add container to the list
			var list = document.getElementById("myListWrap");
			list.style.display = "block";
			list.appendChild(container);

			switch(ident){
				case "Hollywood Cotton Cooler":
				// add a form for submission to server:
				// id | value | type | name:
				var elem = document.getElementById(ident+"_blanket");
				if(!(elem)){
					var blanketName = createInput(ident+"_blanket", ident, "text", ident);
					var blanketQuantity = createInput(ident+"_quantity", 0 , "number", ident+"_quantity");
					
					formOutput.appendChild(blanketName);
					formOutput.appendChild(blanketQuantity);
					
				}

				
				var quan = document.getElementById(ident+"_quantity");
				var value = quan.value;
	
				value++;
				quan.value = value;
				

				break;
				case "Gulfstream Net Cooler":
				// add a form for submission to server:
				// id | value | type | name:
				var elem = document.getElementById(ident+"_blanket");
				if(!(elem)){
					var blanketName = createInput(ident+"_blanket", ident, "text", ident);
					var blanketQuantity = createInput(ident+"_quantity", 0 , "number", ident+"_quantity");
					var formOutput = document.getElementById('formOutput');
					formOutput.appendChild(blanketName);
					formOutput.appendChild(blanketQuantity);
					
				}
				
				
				var quan = document.getElementById(ident+"_quantity");
				var value = quan.value;
	
				value++;
				quan.value = value;
				

				break;
				case "Extended Neck Lined Rain Sheet":
				// add a form for submission to server:
				// id | value | type | name:
				var elem = document.getElementById(ident+"_blanket");
				if(!(elem)){
					var blanketName = createInput(ident+"_blanket", ident, "text", ident);
					var blanketQuantity = createInput(ident+"_quantity", 0 , "number", ident+"_quantity");
					var formOutput = document.getElementById('formOutput');
					formOutput.appendChild(blanketName);
					formOutput.appendChild(blanketQuantity);
					
				}
				
				
				var quan = document.getElementById(ident+"_quantity");
				var value = quan.value;
	
				value++;
				quan.value = value;
				

				break;
				case "Santa Anita Stable Sheet":
				// add a form for submission to server:
				// id | value | type | name:
				var elem = document.getElementById(ident+"_blanket");
				if(!(elem)){
					var blanketName = createInput(ident+"_blanket", ident, "text", ident);
					var blanketQuantity = createInput(ident+"_quantity", 0 , "number", ident+"_quantity");
					var formOutput = document.getElementById('formOutput');
					formOutput.appendChild(blanketName);
					formOutput.appendChild(blanketQuantity);
					
				}
				
				
				var quan = document.getElementById(ident+"_quantity");
				var value = quan.value;
	
				value++;
				quan.value = value;
				break;
				case "200g Belmont Stable Blanket":
				// add a form for submission to server:
				// id | value | type | name:
				var elem = document.getElementById(ident+"_blanket");
				if(!(elem)){
					var blanketName = createInput(ident+"_blanket", ident, "text", ident);
					var blanketQuantity = createInput(ident+"_quantity", 0 , "number", ident+"_quantity");
					var formOutput = document.getElementById('formOutput');
					formOutput.appendChild(blanketName);
					formOutput.appendChild(blanketQuantity);
					
				}
				
				
				var quan = document.getElementById(ident+"_quantity");
				var value = quan.value;
	
				value++;
				quan.value = value;
				

				break;
				case "Pimlico Wool Dress Sheet":
				// add a form for submission to server:
				// id | value | type | name:
				var elem = document.getElementById(ident+"_blanket");
				if(!(elem)){
					var blanketName = createInput(ident+"_blanket", ident, "text", ident);
					var blanketQuantity = createInput(ident+"_quantity", 0 , "number", ident+"_quantity");
					var formOutput = document.getElementById('formOutput');
					formOutput.appendChild(blanketName);
					formOutput.appendChild(blanketQuantity);
					
				}
				
				
				var quan = document.getElementById(ident+"_quantity");
				var value = quan.value;
	
				value++;
				quan.value = value;
				

				break;
				case "200g Belmont Stable Blanket":
				// add a form for submission to server:
				// id | value | type | name:
				var elem = document.getElementById(ident+"_blanket");
				if(!(elem)){
					var blanketName = createInput(ident+"_blanket", ident, "text", ident);
					var blanketQuantity = createInput(ident+"_quantity", 0 , "number", ident+"_quantity");
					var formOutput = document.getElementById('formOutput');
					formOutput.appendChild(blanketName);
					formOutput.appendChild(blanketQuantity);
					
				}
				
				
				var quan = document.getElementById(ident+"_quantity");
				var value = quan.value;
	
				value++;
				quan.value = value;
				
				break;
			}

			var button = document.getElementById("Done_"+count);

			button.addEventListener("click", function(){

				var counter = document.getElementById('counter');
				count = parseInt(counter.value);
				var totalBlankets = document.getElementById('totalBlankets');
				var tB = parseInt(counter.value);

				var ident = this.id;
				var string = ident.replace("Done_", "");

				var title = document.getElementById("title_"+string);

				var charge = document.getElementById('price_'+string).innerHTML;
				var price = parseFloat(charge);

				var subTotal = document.getElementById('subTotal');

				var total = parseFloat(subTotal.innerHTML);

				var tempSum = parseFloat(total - price);

				var sum = tempSum.toFixed(2);

				subTotal.innerHTML = sum;

				var blanketTotalTotal = document.getElementById('blanketTotalTotal');
				blanketTotalTotal.value = sum;

				// visible customisation will change on plus
				var customisation = document.getElementById('customisation');
				var customTotalTemp = parseFloat(customisation.innerHTML);
				var customTotal = customTotalTemp.toFixed(2);
				// hidden customisation
				var hidCust = parseFloat(document.getElementById('hidcustomisation').value);
				var custToValMin = customTotalTemp - hidCust;
				var custToVal = custToValMin.toFixed(2);
				// output this to screen:
				customisation.innerHTML = custToVal;

				var customTotalTotal = document.getElementById('customTotalTotal');
				customTotalTotal.value = custToVal;

				// get the blanket cost : price	
				// get the customistaion total : hidCust
				var tempToAdd = price + hidCust;
				var toAdd = tempToAdd.toFixed(2);

				// get the current value
				var currentSub = document.getElementById("exShipping");
				var currentSubToNum = parseFloat(currentSub.innerHTML);
				var numCurrentSub = currentSubToNum.toFixed(2);
				var tempTot = parseFloat(numCurrentSub) - parseFloat(toAdd);
				var totTotal = tempTot.toFixed(2);
				currentSub.innerHTML = totTotal;

				var submitTotal = document.getElementById('totalTotal');
				submitTotal.value = totTotal;

				// get reference to output container for form fields:
				var output = document.getElementById('formOutput');

				// remove inputs:
				var head = title.innerHTML;
				switch(head){
					case "Hollywood Cotton Cooler":
					var elem = document.getElementById(head+"_blanket");
			

					if(elem){
						var quan = document.getElementById(head+"_quantity");
						var value = quan.value;
						value--;
						quan.value = value;
						if(value < 1){
							output.removeChild(elem);
							output.removeChild(quan);
						}
					}
					break;
					case "Gulfstream Net Cooler":
					var elem = document.getElementById(head+"_blanket");
					var output = document.getElementById('formOutput');

					if(elem){
						var quan = document.getElementById(head+"_quantity");
						var value = quan.value;
						value--;
						quan.value = value;
						if(value < 1){
							output.removeChild(elem);
							output.removeChild(quan);
						}
					}
					break;
					case "Extended Neck Lined Rain Sheet":
					var elem = document.getElementById(head+"_blanket");
					var output = document.getElementById('formOutput');

					if(elem){
						var quan = document.getElementById(head+"_quantity");
						var value = quan.value;
						value--;
						quan.value = value;
						if(value < 1){
							output.removeChild(elem);
							output.removeChild(quan);
						}
					}
					break;
					case "Santa Anita Stable Sheet":
					var elem = document.getElementById(head+"_blanket");
					var output = document.getElementById('formOutput');

					if(elem){
						var quan = document.getElementById(head+"_quantity");
						var value = quan.value;
						value--;
						quan.value = value;
						if(value < 1){
							output.removeChild(elem);
							output.removeChild(quan);
						}
					}
					break;
					case "200g Belmont Stable Blanket":
					var elem = document.getElementById(head+"_blanket");
					var output = document.getElementById('formOutput');

					if(elem){
						var quan = document.getElementById(head+"_quantity");
						var value = quan.value;
						value--;
						quan.value = value;
						if(value < 1){
							output.removeChild(elem);
							output.removeChild(quan);
						}
					}
					break;
					case "Pimlico Wool Dress Sheet":
					var elem = document.getElementById(head+"_blanket");
					var output = document.getElementById('formOutput');

					if(elem){
						var quan = document.getElementById(head+"_quantity");
						var value = quan.value;
						value--;
						quan.value = value;
						if(value < 1){
							output.removeChild(elem);
							output.removeChild(quan);
						}
					}
					break;
				}



				var container = document.getElementById("container_"+string);
				var list = document.getElementById("myListWrap");
				list.removeChild(container);


				count--;

				$('#counter').val(count);
				$('#totalBlankets').val(count);

				if(count == 1){

					$('#addAnotherOutput, #myListWrap').hide();
					$('#addAnotherBlanket').prop("click", function(){
						$(this).attr("checked", false);
					});

				}

			}, false);

			count++;

			counter.value = count;
			$('#totalBlankets').val(count);

		});// each click



		

	});// close each function

// var submitButton = document.getElementById("buyNow");

// submitButton.addEventListener("click", function(event){
// 	// event.preventDefault();

// });
	
$('#buyNow').on("click", function(event){
    
    var y = document.getElementsByTagName("SELECT");

    for(var i = 0; i < y.length; i++){

        if(y[i].selectedIndex === 0){
            
            y[i].className = "border";
            
        }else if(y[i].selectedIndex != 0){
            y[i].className = "";
        }
    }

    var w = document.getElementsByClassName("border");

	    if(w.length == 0){
	        $('#newCart').submit();
	    }else{
	        event.preventDefault();
	    }
    
});


}// end someGlobalFunction



function createInput(identifier, text, type, name){
	var identifer = identifier || "";
	var text = text || "";
	var type = type || "";
	var name = name || "";
	var input = document.createElement("INPUT");
	input.setAttribute("type", type);
	input.setAttribute("value", text);
	input.setAttribute("id", identifier);
	input.setAttribute("name", name);

	var frag = document.createDocumentFragment();
	frag.appendChild(input);

	return input;
}





function createSelection(id){
        var y = id, element;

        // x.className = "content";
        var div = document.createElement("DIV");
        div.setAttribute("id", id, element);
        div.setAttribute("class", "rowOne");

        var innerDivOne = document.createElement("DIV");
        innerDivOne.setAttribute("class", "fifty");

        var innerDivTwo = document.createElement("DIV");
        innerDivTwo.setAttribute("class", "fifty");

        var heading = document.createElement("H3");
        var textHeading = document.createTextNode("Please choose your size ");
        heading.appendChild(textHeading);
        innerDivOne.appendChild(heading);

        var select = document.createElement("SELECT");
        select.setAttribute("name", id, element);

        var optionLabel = document.createElement("OPTION");
        var optionLabelText = document.createTextNode("Please Select: ");
        optionLabel.appendChild(optionLabelText);

        select.appendChild(optionLabel);

        var optionOne = document.createElement("OPTION");
        var optionOneText = document.createTextNode("66 inches");
        optionOne.setAttribute("name", "66");
        optionOne.appendChild(optionOneText);

        select.appendChild(optionOne);

        var optionTwo = document.createElement("OPTION");
        var optionTwoText = document.createTextNode("69 inches");
        optionTwo.setAttribute("name", "69");
        optionTwo.appendChild(optionTwoText);

        select.appendChild(optionTwo);

        var optionThree = document.createElement("OPTION");
        var optionThreeText = document.createTextNode("72 inches");
        optionThree.setAttribute("name", "72");
        optionThree.appendChild(optionThreeText);

        select.appendChild(optionThree);

        var optionFour = document.createElement("OPTION");
        var optionFourText = document.createTextNode("75 inches");
        optionFour.setAttribute("name", "75");
        optionFour.appendChild(optionFourText);

        select.appendChild(optionFour);

        var optionFive = document.createElement("OPTION");
        var optionFiveText = document.createTextNode("78 inches");
        optionFive.setAttribute("name", "78");
        optionFive.appendChild(optionFiveText);

        select.appendChild(optionFive);

        var optionSix = document.createElement("OPTION");
        var optionSixText = document.createTextNode("81 inches");
        optionSix.setAttribute("name", "81");
        optionSix.appendChild(optionSixText);

        select.appendChild(optionSix);

        var optionSeven = document.createElement("OPTION");
        var optionSevenText = document.createTextNode("84 inches");
        optionSeven.setAttribute("name", "84");
        optionSeven.appendChild(optionSevenText);

        select.appendChild(optionSeven);

        var optionEight = document.createElement("OPTION");
        var optionEightText = document.createTextNode("87 inches");
        optionEight.setAttribute("name", "87");
        optionEight.appendChild(optionEightText);

        select.appendChild(optionEight);

        innerDivTwo.appendChild(select);

        div.appendChild(innerDivOne);
        div.appendChild(innerDivTwo);

        return div;

}


</script>
	

</body>
</html>