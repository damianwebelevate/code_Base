<?php session_start(); ?>

<?php
/*
*
* Template Name: Embroidery
*
*/

?>

<?php

$fontFamily = '	<ul id="fontList" class="font-list">
						<li><p data="fontFam" style="font-family: '.'Arial Black'.', '.'Arial-BoldMT'.';" title="Arial Black">Arial Black</li>
						<li><p data="fontFam" title="Arial Narrow" style="font-family: '.'Arial Narrow'.', '.'ArialMT'.';">Arial Narrow</li>
						<li><p data="fontFam" title="Century" style="font-family:  '.'Century Gothic'.', '.'CenturyGothic'.', '.'AppleGothic'.', '.'sans-serif'.';">Century</li>
						<li><p data="fontFam" title="Georgia" style="font-family: '.'Georgia'.', '.'Times'.', '.'Times New Roman'.', '.'serif'.';">Georgia</li>
						<li><p data="fontFam" title="Lucida Console" style="font-family: '.'Lucida Console'.', '.'Lucida Sans Typewriter'.', '.'monaco'.', '.'Bitstream Vera Sans Mono'.', '.'monospace'.';">Lucinda</li>
						<li><p data="fontFam" title="Times new Roman" style="font-family: '.'TimesNewRoman'.', '.'Times New Roman'.', '.'Times'.', '.'Baskerville'.', '.'Georgia'.', '.'serif'.';">Times New Roman</li>
						<li><p data="fontFam" title="Brush Script MT" style="font-family: '.'Brush Script MT'.', '.'cursive'.';">Brush Script</li>
					</ul>';

// FONT COLOR LIST FOR NECK					

$fontColor = '	<ul id="fontColor" class="font-color-list">
						<li>
							<li><p data="fontCol" class="mini-block" id="#F4F5F0" title="White" style="background-color: #F4F5F0;"></p></li>
							<li><p data="fontCol" class="mini-block" id="#59497F;" title="Purple" style="background-color: #59497F;"></p></li>
							<li><p data="fontCol" class="mini-block" id="#2A3244;" title="Navy" style="background-color: #2A3244;"></p></li>
							<li><p data="fontCol" class="mini-block" id="#2760A7;" title="Royal Blue" style="background-color: #2760A7;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#B5CED4;" title="Light Blue" style="background-color: #B5CED4;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#315D54;" title="Hunter Green"style="background-color: #315D54;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#BBBCBC;" title="Grey" style="background-color: #BBBCBC;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#343333;" title="Black" style="background-color: #343333;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#E5D0B1" title="Cream" style="background-color: #E5D0B1;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#D8C09D;" title="Tan" style="background-color: #D8C09D;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#574634;" title="Brown" style="background-color: #574634;"></p></li>
							<li><p data="fontCol" class="mini-block" id="#6A323F;" title="Burgundy" style="background-color: #6A323F;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#C81D31;" title="Red" style="background-color: #C81D31;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#D96D39;" title="Orange" style="background-color: #D96D39;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#F2AB46;" title="Gold" style="background-color: #F2AB46;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#FFD02E;" title="Yellow" style="background-color: #FFD02E;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#00B29B;" title="Turquoise" style="background-color: #00B29B;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#E95985;" title="Hot Pink" style="background-color: #E95985;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#BBBCBC;" title="Silver" style="background-color: #BBBCBC;"></p></li>
						</li>
					</ul>';

$fontSizeOpt = '<label for="fontSize">Font Size</label>
			<select id="fontSize">
				<option>Please Select: </option>
				<option value="1">1 inch</option>
				<option value="2">1.5 inches</option>
				<option value="3">2 inches</option>
				<option value="4">2.5 inches</option>
				<option value="5">3 inches</option>
				<option value="6">3.5 inches</option>
				<option value="7">4 inches</option>
				<option value="8">4.5 inches</option>
				<option value="9">5 inches</option>
				<option value="10">5.5 inches</option>
				<option value="11">6 inches</option>
				<option value="12">6.5 inches</option>
				<option value="13">7 inches</option>
				<option value="14">7.5 inches</option>
				<option value="15">8 inches</option>
				<option value="16">8.5 inches</option>
				<option value="17">9 inches</option>
				<option value="18">9.5 inches</option>
				<option value="19">10 inches</option>
				<option value="20">10.5 inches</option>
				<option value="21">11 inches</option>
				<option value="22">11.5 inches</option>
				<option value="23">12 inches</option>
				<option value="24">12.5 inches</option>
				<option value="25">13 inches</option>
				<option value="26">13.5 inches</option>
				<option value="27">14 inches</option>
				<option value="28">14.5 inches</option>
				<option value="29">15 inches</option>
				<option value="30">15.5 inches</option>
				<option value="31">16 inches</option>
				<option value="32">16.5 inches</option>
				<option value="33">MAX</option>
			</select>';

$previewDesignLightbox = 	'<div id="previewDesign" style="display: none;">						
								<div class="insidePreview">
									<div id="maincontent">
										<h1 class="title">Your Custom Embroidery</h1>
										<div id="img-out"></div>
									</div>
									<div id="sidebar">
										<div class="readmore gold" id="editDesign">Edit Design</div>
										<div class="readmore gold" id="tryOn">Try On Blanket</div>
									</div>							
								</div>
							</div>';

?>


<?php

// $value = "";

// if(!empty($_POST['textArea'])){
// 	$value = $_POST['textArea'];
// }else{
// 	$value = "";
// }

// $value .= " Embroidery";


?>

<?php get_header();?>



<?php echo "<h1 class='title'>Custom Embroidery</h1>";?>
<!-- the img-out is now in a lightbox!!! -->

<!-- the img-out is now in a lightbox!!! -->
<?php echo $previewDesignLightbox; ?>

<div style="min-height: 629px;" id="sidebar">
	<div class="innerSideBar">

	<input type="button" class="readmore gold" id="button" value="Add a line of text">
	<p style="display: none;" id="textTip">Move the text vertically with your cursor.  Select Done Editing to deselect line of text and to add another line.  Font sizes are represented in real life values.  The larger the text the less characters can fit in a line.  To edit the text simply select it with your cursor.  To delete the text clear the contents of the box or leave empty.</p>
	<input type="button" class="readmore gold" id="buttonImg" value="Upload a logo">

	<!-- // hide show -->
	<div style="display: none;" id="hideItShowIt">
		<div class="progress_bar">

		    <div  class="fill" id="fill">

		        <div class="fill_text" id="fill_text">

		        </div>

		    </div>

		</div>

		<div id="hidden_a"></div>  

		<div id="to_show"></div>

	</div>

	<p style="display: none;" id="imageTip">Move the image with your cursor.  The dotted line on the ring to the right represents the embroidery area.  Please move your image to your desired position within the confines of the embroidery area.  To resize use the bottom right hand corner.</p>

	<input type="button" class="readmore gold" id="drawCanvas" value="Preview Design">
											<!-- box 1 -->
	<div style="margin-top: 0;" id="bodyColor" class="boxContainer">
		<div class="boxHeading">
			<div class="boxHeadingText">Font Family</div>
			<div id="boxHeadingIcon" class="boxHeadingIcon"></div>
		</div>	
	</div>
	<div id="bodyColorOptions" style="display: none;" class="boxContent">
		<?php echo $fontFamily;?>
	</div>										<!-- box 2 -->
		<div id="bindingColor" class="boxContainer">
			<div class="boxHeading">
				<div class="boxHeadingText">Font Colors</div>
				<div id="bindingHeadingIcon" class="boxHeadingIcon"></div>
			</div>
		</div>
		<div id="bindingColorOptions" style="display: none;" class="boxContent">
			<?php echo $fontColor;?>
		</div>										<!-- box 3 -->
		<div id="pipingColor" class="boxContainer">
			<div class="boxHeading">
				<div class="boxHeadingText">Font-Size</div>
				<div id="pipingHeadingIcon" class="boxHeadingIcon"></div>
			</div>	
		</div>
		<div id="pipingColorOptions" style="display: none;" class="boxContent">
			<?php echo $fontSizeOpt; ?>
		</div>


			<form id="gatherValues" method="post" action="somewhere">
				<input type="hidden" value="1" id="hiddenElement" name="hiddenElement" />
				<label style="display: none;" id="widthLabel" for="imageWidth">Image Width(inches)</label>
				<input style="display: none;" type="text" name="imageWidth" value="0" id="imgWidth">

				<label style="display: none;" id="heightLabel" for="imageHeight">Image Height(inches)</label>
				<input style="display: none;" type="text" name="imageHeight" value="0" id="imgHeight">

				<label style="display: none;" id="sourceLabel" for="imageSource">Image Uploaded Path</label>
				<input style="display: none;" type="text" name="imageSource" id="imageSource" value="NULL">

				<label style="display: none;" id="generatedImageLabel" for="generatedImage">Generated Image Path</label>
				<input style="display: none;" id="generatedImage" name="generatedImage" type="text" value="NULL">
			</form>

		</div><!-- /close innersidebar-->
	
</div><!-- close sidebar -->

<div id="maincontent">

	<div class="embroideryRing">
		
		<div id="innerRing">

			
		</div>

	</div>


</div><!-- close main content -->


<div style="clear: both;"></div>


<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ 
+                                                                                                                
+                                                Upload                                                         
+
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->


<div style="display: none;" class="container">
	<!-- http://damianorourke.com/resources/PHP/upload/upload.php -->
    <!-- https://triplecrowncustom.com/wp-content/themes/triple/site/uploads/upload.php -->
		
		<form id="form" action="https://triplecrowncustom.com/wp-content/themes/triple/site/uploads/upload.php" method="post" enctype="multipart/form-data">

	        <label for="file_upload_normal">Select Upload:</label>

	        <input onchange="ValidateSingleInput(this);" type="file" name="files[]" id="file_upload_normal" />

	        <input class="btn btn-success" type="submit" name="Go" namevalue="Upload Files" id="normal_upload_submit"/>

		</form>
		
</div>


<!-- set a destination for the image after generation -->
<img src="" style="width: 128px; height: auto;" id="imageOutOut" />

<!-- this is to determine the PPI of the screen -->
<div id="ppitest" style="width:1in;visible:hidden;padding:0px"></div>


<script src="https://triplecrowncustom.com/wp-content/themes/triple/js/touchPunch.js"></script>
<script src="https://triplecrowncustom.com/wp-content/themes/triple/js/ajax_upload.js"></script>
<script src="https://triplecrowncustom.com/wp-content/themes/triple/js/upload.js"></script>

<script src="https://triplecrowncustom.com/wp-content/themes/triple/js/html2canvas.js"></script>

<script src="https://triplecrowncustom.com/wp-content/themes/triple/js/script.js"></script>
<script>

window.onload=function(){
	var a = document.getElementsByClassName('wrapper');
	for(var i = 0, len = a.length; i < len; i++ ){
		a[i].style.width = "1100px";
	}
}

var imageUp = document.getElementById('buttonImg').addEventListener("click", function(){
	$j('#fill').css("width", "0px");
	$j('#imageTip, #hideItShowIt').show();
	openDialog();
});

function openDialog(){
	var x = document.getElementById('file_upload_normal');
	x.click();

	var w = setInterval(function(y){
		var x = document.getElementById('file_upload_normal').value;

		if(x){
			clearInterval(w);
			document.getElementById('normal_upload_submit').click();
		}
		
	}, 1000);

}


// stolen from internet
var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png", ".JPEG"];    
function ValidateSingleInput(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }
             
            if (!blnValid) {
                alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                oInput.value = "";
                $j('#hideItShowIt').hide();
                return false;
            }
        }
    }
    return true;
}


function myFunction(){

	var source = $j('#upImage').attr("src");

	$j('#imageSource').val(source);

	$j('#imageSource').show();

	$j('#file_upload_normal').val("");

	$j('#buttonImg').attr("disabled", true);

	var imgWidth = $j('#upImage').width()*2;
	var imgHeight = $j('#upImage').height()*2;
	$j('#widthLabel, #heightLabel, #sourceLabel').show();
	$j('#imgWidth').show().val(pxToInches(imgWidth));
	$j('#imgHeight').show().val(pxToInches(imgHeight));
	$j('#hideItShowIt').hide();
	$j('#upImage').resizable({

		resize: function(event, ui){
			var size = ui.size;
			var newWidth = size.width*2;
			var newHeight = size.height*2;

			$j('#imgWidth').val(pxToInches(newWidth));
			$j('#imgHeight').val(pxToInches(newHeight));	

		}

	});

	$j('#hipWrap').draggable({
		containment: ".embroideryRing",
		scroll: false  
	});

	$j('#deleteImage').on("click", function(){
		$j('#upImage').remove();
		$j('#hipWrap').remove();
		$j(this).remove();
		$j('#imageSource').val("").hide();
		$j('#imageTip').hide();
		$j('#buttonImg').attr("disabled", false);
		$j('#imgWidth, #imgHeight').val("").hide();
		$j('#widthLabel, #heightLabel, #sourceLabel').hide();
		$j('#hidden_a').empty();
		$j('#fill').css("width", "0px");
		// var imageOut = document.getElementById("imageOutOut");

		// if(imageOut){
		// 	$j(imageOut).remove();
		// }
	});

};




function pxToInches(param){
	var screenPPi = document.getElementById('ppitest').offsetWidth;

	// Pixels = Inches * PPI
	// Inches = Pixesl * PPI

	var value = param / screenPPi;
	value = value.toFixed(3);
	value += " inches";

	return value;
}


// rgb to hex
function rgb2hex(orig){
 var rgb = orig.replace(/\s/g,'').match(/^rgba?\((\d+),(\d+),(\d+)/i);
 return (rgb && rgb.length === 4) ? "#" +
  ("0" + parseInt(rgb[1],10).toString(16)).slice(-2) +
  ("0" + parseInt(rgb[2],10).toString(16)).slice(-2) +
  ("0" + parseInt(rgb[3],10).toString(16)).slice(-2) : orig;
}

// object returns a div with the id of container_+number
// the title is appended to the container along with the textarea and the "close" text area
// giveMeFocus is to allow the cursor to be in the textArea
// inDomOne is the container that is movable
// title is the "wrap_+number" that shows the title hidden on done
// done is the "done_+number" to finish editing row

var addRow = document.getElementById("button").addEventListener("click", function(){
	this.setAttribute("disabled", "true");
	$j('#textTip').show();
	var area = document.getElementById("innerRing");
	var hidden = document.getElementById("hiddenElement");
	var curVal = hidden.value;
	var form = document.getElementById("gatherValues");
	// create a new instance of the TextEditor
	var textBox = new TextEditor();
	area.appendChild(textBox.addElement(curVal));

	var inDomOne = document.getElementById('container_'+curVal);
	var giveMeFocus = document.getElementById(curVal);
	var title = document.getElementById("title_"+curVal);
	var done = document.getElementById("Done_"+curVal);

	$j(inDomOne).draggable({ 
			containment: ".embroideryRing", 
			scroll: false   
        });

	// capture the number of the row
	// capture the color
	// capture the font-family selected
	// capture the text entered
	// capture the font-size

	// create the hidden elements
	var textRowElem = textBox.addHiddenField("textRow_"+curVal, "Text Row: ", curVal);
	var colorElem = textBox.addHiddenField("color_"+curVal, "Font Color: ", "#000000;");
	var familyElem = textBox.addHiddenField("family_"+curVal, "Font Family: ", "Arial");
	var textElem = textBox.addHiddenField("textValue_"+curVal, "Text Entered: ", "NULL");
	var fontSizeElem = textBox.addHiddenField("fontSize_"+curVal, "Font Size: ", "1.0 inches");
	// add them to the dom
	var toAdd = document.createDocumentFragment();
	toAdd.appendChild(textRowElem);
	toAdd.appendChild(colorElem);
	toAdd.appendChild(familyElem);
	toAdd.appendChild(textElem);
	toAdd.appendChild(fontSizeElem);

	form.appendChild(toAdd);

	// get a reference to them
	var textOutput = document.getElementById("textRow_"+curVal);
	var colorOutput = document.getElementById("color_"+curVal);
	var familyOutput = document.getElementById("family_"+curVal);
	var textElemOutput = document.getElementById("textValue_"+curVal);
	var fontSizeElemOutput = document.getElementById("fontSize_"+curVal);

	// hide controls
	// capture values
	// do more edits !!!!
	$j(done).on("click", function(){
		$j(title).css("visibility","hidden");
		$j(this).css("visibility","hidden");
		$j(inDomOne).draggable("disable");
		// $j(giveMeFocus).toggleClass("active");
		$j(giveMeFocus).attr("contenteditable", false);
		$j(colorOutput).val( rgb2hex($j(giveMeFocus).css("color")));
		$j(familyOutput).val($j(giveMeFocus).css("font-family"));
		// for the font size
		// get the value of it via css
		// *2 for real size
		var sizeFont = $j(giveMeFocus).css("font-size");
		var sizeFontToString = sizeFont.replace("px","");
		var double = sizeFontToString * 2;
		var result = pxToInches(double);
		// console.log("result "+result);
		$j(fontSizeElemOutput).val(result);

		// $j(fontSizeElem).val($j(giveMeFocus).css("font-size"));
		$j('#button').attr("disabled",false);

		// check to see if the element is empty
		// console.log($j(giveMeFocus).html());
		// console.log($j(giveMeFocus).html().length);

		if($j(giveMeFocus).html().length === 0){
			// row number and label remove
			var textRowId = textOutput.id;
			var string = "[for='"+textRowId+"']";
			$j(string).remove();
			$j(textOutput).remove();
			
			// color value and label remove
			var colorOutputId = colorOutput.id;
			var string2 = "[for='"+colorOutputId+"']";
			$j(string2).remove();
			$j(colorOutput).remove();

			var familyOutputId = familyOutput.id;
			var string3 = "[for='"+familyOutputId+"']";
			$j(string3).remove();
			$j(familyOutput).remove();

			var textElemOutputId = textElemOutput.id;
			var string4 = "[for='"+textElemOutputId+"']";
			$j(string4).remove();
			$j(textElemOutput).remove();

			var fontSizeElemOutputId = fontSizeElemOutput.id;
			var string5 = "[for='"+fontSizeElemOutputId+"']"; 
			$j(string5).remove();

			var fontSizeElemOutputId = fontSizeElemOutput.id;
			var string6 = "[for='"+fontSizeElemOutputId+"']";
			$j(string6).remove();
			$j(fontSizeElemOutput).remove();

			$j(this).remove();
			$j(giveMeFocus).remove(); 
			$j(title).remove();

			var val = $j('#hiddenElement').val();
			val -= 1;
			$j('#hiddenElement').val(val);
		}
	});

	// show controls
	$j(giveMeFocus).on("click",function(){
		$j(this).focus();
		$j(this).addClass("active");
		$j(this).attr("contenteditable", true);
		$j(title).css("visibility", "visible");
		$j(done).css("visibility", "visible");
		$j(inDomOne).draggable("enable");
		$j('#button').attr("disabled", true);
		document.execCommand('selectAll', false, null);
	});

	$j(giveMeFocus).on("keyup", function(evt){
		$j(textElemOutput).val($j(this).text());
	});

	// stop return key being pressed for new line

	$j(giveMeFocus).on("keydown", function(evt){
		if(evt.keyCode === 13){
			evt.preventDefault();
		}
	});


	curVal++;
	hidden.value = curVal;

});

$j('#fontList li>p').on("click", function(evt){
	var style = $j(this).attr("style");
	$j('.active').attr("style", style);
});


$j('#fontColor li>p').on("click", function(evt){
	var style = $j(this).attr("id");
	$j('.active').css("color", style);
});


$j('#fontSize').on("change", function(evt){
	var size = Number($j(this).val());

	switch (size){
		// 1" in real life but half of it here 0.5" in pxels
		case 1:
		$j('.active').css("font-size", "48px");

		break;
		// 1.5" => 0.75"
		case 2:
		$j('.active').css("font-size", "72px");

		break;
		// 2" => 1"
		case 3:
		$j('.active').css("font-size", "96px");
		break;
		// 2.5" => 1.25"
		case 4:
		$j('.active').css("font-size", "120px");
			
		break;
		// 3" => 1.5"
		case 5:
		$j('.active').css("font-size", "144px");
			
		break;
		// 3.5" => 1.75
		case 6:
		$j('.active').css("font-size", "168px");
			
		break;
		// 4" => 2
		case 7:
		$j('.active').css("font-size", "192px");
			
		break;
		// 4.5" => 2.25
		case 8:
		$j('.active').css("font-size", "216px");
			
		break;
		// 5" => 2.5
		case 9:
		$j('.active').css("font-size", "240px");
			
		break;
		// 5.5" => 2.75
		case 10:
		$j('.active').css("font-size", "264px");
			
		break;
		// 6" => 3
		case 11:
		$j('.active').css("font-size", "288px");
			
		break;
		// 6.5" => 3.25
		case 12:
		$j('.active').css("font-size", "312px");
			
		break;
		// 7" => 3.5
		case 13:
		$j('.active').css("font-size", "336px");
			
		break;
		// 7.5" => 3.75
		case 14:
		$j('.active').css("font-size", "360px");
			
		break;
		// 8" => 4
		case 15:
		$j('.active').css("font-size", "384px");
			
		break;
		// 8.5" => 4.25
		case 16:
		$j('.active').css("font-size", "408px");
			
		break;
		// 9" => 4.5
		case 17:
		$j('.active').css("font-size", "432px");
			
		break;
		// 9.5" => 4.75
		case 18:
		$j('.active').css("font-size", "456px");
			
		break;
		// 10" => 5
		case 19:
		$j('.active').css("font-size", "480px");
			
		break;
		// 10.5" => 5.25
		case 20:
		$j('.active').css("font-size", "504px");
			
		break;
		// 11" => 5.5
		case 21:
		$j('.active').css("font-size", "528px");
			
		break;
		// 11.5" => 5.75
		case 22:
		$j('.active').css("font-size", "552px");
			
		break;
		// 12" => 6
		case 23:
		$j('.active').css("font-size", "576px");
			
		break;
		// 12.5" => 6.25
		case 24:
		$j('.active').css("font-size", "600px");
			
		break;
		// 13" => 6.5
		case 25:
		$j('.active').css("font-size", "624px");
			
		break;
		// 13.5" => 6.75
		case 26:
		$j('.active').css("font-size", "649px");
			
		break;
		// 14" => 7
		case 27:
		$j('.active').css("font-size", "672px");
			
		break;
		// 14.5" => 7.25
		case 28:
		$j('.active').css("font-size", "696px");
			
		break;
		// 15" => 7.5
		case 29:
		$j('.active').css("font-size", "720px");
			
		break;
		// 15.5" => 7.75
		case 30:
		$j('.active').css("font-size", "744px");
			
		break;
		// 16" => 8
		case 31:
		$j('.active').css("font-size", "768px");
			
		break;
		// 16.5" => 8.25
		case 32:
		$j('.active').css("font-size", "792px");
			
		break;
		// max" => max
		// max is the maximum size that can fit in the area above 16.5 but less than available area (16.9291")
		case 33:
		$j('.active').css("font-size","792px");
			
		break;
		default:
		//
		break;

	}
});


// box 1

$j('#bodyColor').on("click", function(){
	$j('#bodyColorOptions').toggle();
	$j(this).toggleClass("boxContainerGold");
	$j('#boxHeadingIcon').toggleClass("boxHeadingIconMinus");
});


// box 2

$j('#bindingColor').on("click", function(){
	$j(this).toggleClass("boxContainerGold");
	$j('#bindingColorOptions').toggle();
	$j('#bindingHeadingIcon').toggleClass("boxHeadingIconMinus");
});

// box 3

$j('#pipingColor').on("click", function(){
	$j('#pipingColorOptions').toggle();
	$j(this).toggleClass("boxContainerGold");
	$j('#pipingHeadingIcon').toggleClass("boxHeadingIconMinus");
});




$j(function() { 
    $j("#drawCanvas").click(function() {
    	var val = $j('#hiddenElement').val();
    	val -= 1;
    	var str = "Done_"+val;
    	console.log(str);
    	var go = document.getElementById(str);

    	if(go){
    		go.click();
    	}

    	$j('#canvasImage').remove();
    	$j('#deleteImage').css("visibility", "hidden");
        html2canvas($j("#innerRing"), {
            onrendered: function(canvas) {
                theCanvas = canvas;
                // document.body.appendChild(canvas);

                // Convert and download as image 
                // Canvas2Image.saveAsPNG(canvas);
                
                $j("#img-out").append(canvas);
                $j("#img-out>canvas").attr("id","canvasImage");
                $j('body').append($j('#previewDesign').show())
                // Clean up 
                // document.body.removeChild(canvas);
            }
        });
    });
}); 


$j('#editDesign').on("click", function(){
	$j('#previewDesign').hide();
	$j('canvas').remove();
	$j('#deleteImage').css("visibility", "visible");
});

// function convertToImage(canvas){
// 	var img = new Image();
// 	img.src = canvas.toDataURL("image/png", 1);
// 	return img;
// };

$j('#tryOn').on("click", function(){
	var can = document.getElementsByTagName("canvas")[0];
	var source = can.toDataURL("image/png", 1);
	var out = document.getElementById("imageOutOut");
	out.src = source;
	$j('#previewDesign').hide();
	$j('#deleteImage').css("visibility", "visible");
	$j('#generatedImage').val(source).show();
	$j('#generatedImageLabel').show();
});




</script>




<script>
var rotation = 0;

jQuery.fn.rotate = function(degrees) {
    $j(this).css({'-webkit-transform' : 'rotate('+ degrees +'deg)',
                 '-moz-transform' : 'rotate('+ degrees +'deg)',
                 '-ms-transform' : 'rotate('+ degrees +'deg)',
                 'transform' : 'rotate('+ degrees +'deg)'});
    return $j(this);
};

</script>


<?php
get_footer();
