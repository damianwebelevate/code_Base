<?php
/*
*
*
	This file is part of Triple Crown Custom - TCC

    TCC is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    TCC is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with TCC.  If not, see <http://www.gnu.org/licenses/>

*
*/

?>

<?php

require dirname(__FILE__).'\\..\\includes\commonResources.php';

?>
<?php

/* 	==========================================================================
		Breadcrumb
	==========================================================================
*/

$breadCrumb = '<ul class="breadTwo">
				<li>
					<div id="backToColorsTwo" title="Go back to choose colors" class="block">
						<div class="gapOne"></div>
							<div class="third" style="background-color: #fff;">
								<!-- empty -->
							</div>
							<div class="third">
								<div id="backToColorsTwoNumber" class="number">&#10004;</div>
							</div>
							<div class="third">
								<!-- empty -->
							</div>
						<div style="clear: both;"></div>
						<div id="backToColorsTwoText" class="textBoxTwo">
							Choose your Colors
						</div>
					</div>
				</li>
				<li>
					<div id="backToEmbroidery" title="Go back to edit embroidery" class="block toHide">
						<div class="gapOne"></div>
							<div class="third">
								<!-- empty -->
							</div>
							<div class="third">
								<div id="backToEmbroideryNumber" class="number">&#10004;</div>
							</div>
							<div class="third">
								<!-- empty -->
							</div>
						<div style="clear: both;"></div>
						<div id="backToEmbroideryText" class="textBoxTwo">
							Add Embroidery
						</div>
					</div>
				</li>
				<li>
					<div class="block">
						<div class="gapOne"></div>
							<div class="third">
								<!-- empty -->
							</div>
							<div class="third">
								<div class="numberTwo"><img src="http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/img/tick.PNG" /></div>
							</div>
							<div class="third">
								<!-- empty -->
							</div>
						<div style="clear: both;"></div>
						<div class="textBoxTwo">
							Order Summary
						</div>
					</div>
				</li>
				<li>
					<div id="alertMe" style="float: right;" class="block">
						<div class="gapOne"></div>
							
							<div style="float: right;" class="third">
								<div style="float: right;" class="goldBack">&#x276f;</div>
							</div>
								
						<div style="clear: both;"></div>		
						<div style="float: right; position: relative; left: 10px;" class="goldTextOS">
							Checkout
						</div>
					</div>
				</li>
			</ul>';

$element = "<script type='text/javascript' src=".BASE_URI."js/generalJS.js></script>";

?>


<?php echo $head; ?>
<body>
		<div class="wrapper">
			<article>
				<header>	
					<h1 class="title"><span></span>Order Summary</h1>
				</header>

				<?php echo $breadCrumb; ?>
				<div id="pants"></div>
				
			</article>

		</div><!-- </div>//// wrapper-->

<script type="text/javascript">
$j(document).ready(function(){

		var x = setInterval(function(){
			var elem = document.getElementById("pants").innerHTML;
			if(elem !== ""){

				clearInterval(x);

				/* ==========================================================================
				    ORDER SUMMARY PAGE FUNCTIONS
				========================================================================== */

			    $j('#showDetails').on("click", function(){
			        $j('#fullOrder').toggle();
			    });

			    $j('#hideDetails').on("click", function(){
			        $j('#fullOrder').hide();
			    });


			    $j('#plus').on("click", function(){
			        
			        var currentValue = Number($j('#quantityNew').val());
			        
			        callFunction(currentValue);
			        
			    });

			    $j('#minus').on("click", function(){

			        var currentValue = Number($j('#quantityNew').val());
			        var x = document.getElementById('display');
			        var val;

			        if(currentValue === 1){
			            val = 1;
			            x.className = "";
			        }else{
			            val = currentValue - 1;
			        }

			        takeAway(val);

			        $j('#quantityNew').val(val);
			        $j('#quan').html($j('#quantityNew').val());
			        $j('#newQuantityHidden').val($j('#quantityNew').val());

			        var w = $j('#unit').val();

			        var s = $j('#sub').val();

			        var sum = s - w;

			        var newSum = sum.toFixed(2);

			        if(newSum < w){
			            newSum = w;
			        }else{
			            $j('#price').html("$"+newSum);
			            $j('#sub').val(newSum);
			            $j('#newTotalHidden').val(newSum);
			        }
			        
			    });

			    function callFunction(value){
			        var y = value;

			        var x = document.getElementById('display');

			        // x.className = "content";
			        var div = document.createElement("DIV");
			        div.setAttribute("id", value);
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
			        select.setAttribute("name", value);

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

			        x.appendChild(div);

			        var val = Number($j('#quantityNew').val());
			        val = val + 1;
			        $j('#quantityNew').val(val);
			        $j('#quan').html($j('#quantityNew').val());
			        $j('#newQuantityHidden').val($j('#quantityNew').val());
			        var w = $j('#unit').val();
			        var sum = w * val;
			        var newSum = sum.toFixed(2);
			        $j('#price').html("$"+newSum);
			        $j('#sub').val(newSum);
			        $j('#newTotalHidden').val(newSum);

			    }

			    function takeAway(value){

			        var x = document.getElementById(value);

			        if(x){
			            var y = document.getElementById('display');

			            y.removeChild(x);
			    
			        }           
			        
			    }   


			$j('#buyNow').on("click", function(event){
			    
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
			        $j('#newCart').submit();
			    }else{
			        event.preventDefault();
			    }
			    
			});

			$j('#addToCart').on("click", function(event){
			    
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
				        $j('#newCart').submit();
				    }else{
				        event.preventDefault();
				    }
			    
			});

							
			}// buy now

		},1000);

});
</script>
<script>

	(function(){
		
		var elem = document.getElementById("alertMe");
		elem.addEventListener("click", function(event){

			    var y = document.getElementsByTagName("SELECT");
			    var isOpen = document.getElementById("fullOrder");
			    var but2 = document.getElementById("buyNow");

			    for(var i = 0; i < y.length; i++){

			        if(y[i].selectedIndex === 0){
			            
			            y[i].className = "border";
			            
			        }else if(y[i].selectedIndex != 0){
			            y[i].className = "";
			        }
			    }

			    var w = document.getElementsByClassName("border");

			    if(w.length != 0){
			    	if(isOpen.style.display === "block"){
			    		window.scrollTo(0, 2000);
			    	}else{
			    		window.scrollTo(0, 1000);	
			    	}

			        window.confirm("Please select your size(s)... ");

			    }else{
			    	if(isOpen.style.display === "block"){
			    		window.scrollTo(0, 2000);
			    	}else{
			    		window.scrollTo(0, 1000);	
			    	}
			    	window.confirm("Please select ADD TO CART or CHECKOUT to proceed");
			    }
		});

	})();



</script>

</body>
</html>