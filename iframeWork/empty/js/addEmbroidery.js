$j('#showUserGuide, #showUserGuideTwo').on("click", function(){
	window.parent.$j('#userGuide').toggle();
});


function placeCaretAtEnd(el) {

	el.click();
    el.focus();
    if (typeof window.getSelection != "undefined"
            && typeof document.createRange != "undefined") {
        var range = document.createRange();
        range.selectNodeContents(el);
        range.collapse(false);
        var sel = window.getSelection();
        sel.removeAllRanges();
        sel.addRange(range);
    } else if (typeof document.body.createTextRange != "undefined") {
        var textRange = document.body.createTextRange();
        textRange.moveToElementText(el);
        textRange.collapse(false);
        textRange.select();
    }
}


function roundToHalf(value) { 
   var converted = parseFloat(value); // Make sure we have a number 
   var decimal = (converted - parseInt(converted, 10)); 
   decimal = Math.round(decimal * 10); 
   if (decimal == 5) { return (parseInt(converted, 10)+0.5); } 
   if ( (decimal < 3) || (decimal > 7) ) { 
      return Math.round(converted); 
   } else {
      return (parseInt(converted, 10)+0.5); 
   } 
}



function getTextSize(value){
	// get the widht of the embroideryRing as this is the exact width needed for the maths to work
		// the innerRing is not accurate enough and produces two different results from both jquery and js
		// use native js as this will give a value without px appended
		var elem = document.getElementsByClassName('embroideryRing')[0];
		var details = elem.getBoundingClientRect();
		// get the width of the embroideryRing to determine the % difference in the rings width
		var actualWidth = details.width;
		// get the height of the embroideryRing to set a maxHeight Value
		var actualHeight = details.height;
		var nActualHeight = roundToHalf(actualHeight);
		var minimum = roundToHalf(nActualHeight / 11);
		// console.log("the "+ nActualHeight +" divided by 11 - is the number of 1inch rows as it is 11 inches high: "+minimum);
		// rate of increase||decrease is the minimum /2 which represents a half inch
		var rate = minimum / 2;
		var nRate = Number(rate);
		// console.log("set the actual height to a value that is appropriate for the screen size, then use this value to set the default font size: " +nRate);
		var maximum = Number(11);
		var nMinimum = Number(1);

		return {minimum: nMinimum, maximum: maximum, rate: nRate, maxHeight: nActualHeight, minHeight: minimum};
};

	$j('#plus').on("click", function(){

			var active = $j('.active');
			if(active){

			// get the settings from above and use them for increase/decrease:
			// minimum | maximum | rate
			var numbers = getTextSize();
			var maximum = numbers.maximum;
			var maxHeight = numbers.maxHeight;
			var minimum = numbers.minimum;
			var rate = numbers.rate;

			// console.log(typeof rate);

			// the hidden element thats on the page:
			$j('#currentValue').val(minimum);

			// calc the rate of increase in inches and show the user the inch value		
			var elem = document.getElementById('userSees');
			var elemHtml = elem.innerHTML;
			var currentInch = parseFloat(elemHtml);
			var rateInch = 0.5;
			currentInch += rateInch;


			var activeID = $j('.active').attr("id");
			var container = "container_"+activeID;

			var jsContainer = document.getElementById(container);
			var currentTitle = parseFloat($j(jsContainer).attr("title"));		

			var sum = parseFloat(currentTitle += rateInch);
			// console.log("title: "+currentTitle);
			// console.log("sum after plus: "+sum);

			var current = $j('.active').css("font-size");
			var noPx = Number(current.replace("px", ""));
			var newFont = rate + noPx;

			// console.log("+++++ New Font: ++++");
			// console.log(typeof newFont);
			// console.log("+++++ maxHeight: ++++");
			// console.log(typeof maxHeight);

			var bool = sum < maximum ? sum <= maximum : sum = maximum;

			if(bool == 11){
				$j(jsContainer).attr("title", maximum);
				newFont = maxHeight;
				$j('.active').css("font-size", maxHeight+"px");
				$j('#currentValue').val(maxHeight);
				$j('#userSees').text("11");				
			}else{
				$j(jsContainer).attr("title", sum);
				// console.log("after if:- NewFont: "+newFont);
				$j('.active').css("font-size", newFont+"px");
				$j('#currentValue').val(newFont);
				// console.log("font size: "+newFont);
				$j('#userSees').text(currentInch);
			}

		}else{
			// do nothing
		}


	});

	$j('#minus').on("click", function(){

			var active = $j('.active');
			if(active){
			
			// get the settings from above and use them for increase/decrease:
			// minimum | maximum | rate
			var numbers = getTextSize();
			var maximum = numbers.maximum;
			var minHeight = numbers.minHeight;
			var minimum = numbers.minimum;
			var rate = numbers.rate;

			// calc the rate of increase in inches and show the user the inch value		
			var elem = document.getElementById('userSees');
			var elemHtml = elem.innerHTML;
			var currentInch = parseFloat(elemHtml);
			var rateInch = 0.5;
			currentInch -= rateInch;

			var activeID = $j('.active').attr("id");
			var container = "container_"+activeID;
			var jsContainer = document.getElementById(container);
			var currentTitle = parseFloat($j(jsContainer).attr("title"));

			// console.log("++++++++");
			// console.log(typeof currentTitle);
			// console.log("value of the title: "+currentTitle);
			// console.log("++++++++");

			// console.log("rate of decrease: "+rate);

			var current = $j('.active').css("font-size");
			var noPx = Number(current.replace("px", ""));
			var newFont = (rate - noPx)*-1;

			// console.log("********");
			// console.log("New Font Value: "+newFont);
			// console.log("********");

			var bool2 = newFont > minHeight ? newFont >= minHeight : newFont = minHeight;

			// console.log("comparison of newFont vs minHeight: "+bool2);

			$j(jsContainer).attr("title", currentInch);

			// console.log("after if:- NewFont: "+newFont);

			$j('.active').css("font-size", newFont+"px");
			$j('#currentValue').val(newFont);

			$j('#userSees').text(currentInch);
			// console.log("font size: "+newFont);
			// console.log("user sees: "+currentInch);

			if(bool2 == 48){
				$j(jsContainer).attr("title", minimum);
				$j('.active').css("font-size", minHeight+"px");
				$j('#currentValue').val(minHeight);
				$j('#userSees').text("1");		
			}
		}else{
			// do nothing
		}
		
	});


$j("#tagMenu").on("click", function(){
    $j("#menuLeft").toggle("slow");
});

$j("#closeMenu").on("click", function(){
	$j("#menuLeft").hide("slow");
});


$j("#tagMenuTwo").on("click", function(){
    $j("#menuLeftTwo").toggle("slow");
});

$j("#closeMenuTwo").on("click", function(){
	$j("#menuLeftTwo").hide("slow");
});

$j("#tagMenuThree").on("click", function(){
    $j("#menuLeftThree").toggle("slow");
});

$j("#closeMenuThree").on("click", function(){
	$j("#menuLeftThree").hide("slow");
});


$j("#buttonImg").on("click", function(){
    $j("#menuLeftSeven").show("slow");
});

$j("#closeMenuSeven").on("click", function(){
	$j("#menuLeftSeven").hide("slow");
});


	
$j(function(){

// WebKit contentEditable focus bug workaround:
if(/AppleWebKit\/([\d.]+)/.exec(navigator.userAgent)) {

var editableFix = $j('<input style="width:1px;height:1px;border:none;margin:0;padding:0;" tabIndex="-1">').appendTo('html');
$j('[contenteditable]').blur(function () {
editableFix[0].setSelectionRange(0, 0);
editableFix.blur();
});
}
});

    
window.onload=function(){
	// give elements an identifier and human readable name
	var val = $j('#whichArea').val();
	$j('#widthLabel').attr("for", val+"_Image_Width");
	$j('#imgWidth').attr("name", val+"_Image_Width");

	$j('#heightLabel').attr("for", val+"_Image_Height");
	$j('#imgHeight').attr("name", val+"_Image_Height");

	$j('#sourceLabel').attr("for", val+"_Image_Upladed_Source");
	$j('#imageSource').attr("name", val+"_Image_Uploaded_Source");

	$j('#generatedImageLabel').attr("for", val+"_Generated_Image_DataToURL");
	$j('#generatedImage').attr("name", val+"_Generated_Image_DataToURL");
}

var imageUp = document.getElementById('buttonImg').addEventListener("click", function(){
	$j('#fill').css("width", "0px");
	$j('#imageTip, #hideItShowIt').show();
	openDialog();
});

function openDialog(){
	var x = document.getElementById('file_upload_normal');
	x.click();


	var w = setInterval(function(){
		var x = document.getElementById('file_upload_normal').value;

		if(x){
			clearInterval(w);
			document.getElementById('normal_upload_submit').click();
			document.getElementById('form').reset();
		}else{
			console.log("not");
		}

		document.getElementById('form').reset();

		if(document.getElementById('upImage')){
			clearInterval(w);
		}
		
	}, 1000);

	setTimeout(function(){clearInterval(w); document.getElementById('menuLeftSeven').style.display = "none";}, 3000);
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

	var source = $j('#upImage').attr("title");

	$j('#menuLeftSeven').hide();

	$j('#imageSource').val(source);

	$j('#imageSource').show();

	$j('#file_upload_normal').val("");

	$j('#buttonImg').attr("disabled", true);

	var imgWidth = $j('#upImage').width()*2;
	var imgHeight = $j('#upImage').height()*2;
	// $j('#widthLabel, #heightLabel, #sourceLabel').show();
	$j('#imgWidth').show().val(pxToInches(imgWidth));
	$j('#imgHeight').show().val(pxToInches(imgHeight));
	$j('#hideItShowIt').hide();
	$j('#widthLabel, #heightLabel, #sourceLabel, #generatedImageLabel').hide();
	$j('#upImage').resizable({
		aspectRatio: true,
		resize: function(event, ui){
			var size = ui.size;
			var newWidth = size.width;
			var newHeight = size.height;
			

			$j('#imgWidth').val(pxToInches(newWidth*2));
			$j('#imgHeight').val(pxToInches(newHeight*2));	

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
		$j('#buttonImg').attr("disabled", false);
		$j('#imgWidth, #imgHeight, #imgSource').val("empty").hide();
		$j('#widthLabel, #heightLabel, #sourceLabel, #generatedImageLabel').hide();
		$j('#hidden_a').empty();
		$j('#fill').css("width", "0px");
		$j('#menuLeftSeven').hide("slow");
	});

};



function pxToInches(param){
	var screenPPi = document.getElementById('ppitest').offsetWidth;

	// Pixels = Inches * PPI
	// Inches = Pixesl * PPI

	var value = param / screenPPi;
	value = value.toFixed(3);
	// value += " inches";

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
	// $j('#textTip').show();
	var area = document.getElementById("innerRing");
	var hidden = document.getElementById("hiddenElement");
	var curVal = hidden.value;
	var form = document.getElementById("gatherValues");
	// create a new instance of the TextEditor
	var textBox = new TextEditor();
	area.appendChild(textBox.addElement(curVal));

	// get a reference to the area 
	var whichArea = document.getElementById("whichArea").value;

	var inDomOne = document.getElementById('container_'+curVal);
	// give the container an attribute value of title and pass the rate of increase in inches to it on plus/minus
	inDomOne.setAttribute("title", 1);
	var giveMeFocus = document.getElementById(curVal);
	var title = document.getElementById("title_"+curVal);
	var done = document.getElementById("Done_"+curVal);

	// new element just to hide it
	var newDone = document.getElementById("Close_"+curVal);

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
	// use reference to whichArea value to create "human readable" names for the server and create the element in the dom
	var textRowElem = textBox.addHiddenField(whichArea+"_Text_Row_Number_"+curVal, "Text Row: ", curVal);
	var colorElem = textBox.addHiddenField(whichArea+"_Row_"+curVal+"_Font_Color_Selected", "Font Color: ", "Black");
	var familyElem = textBox.addHiddenField(whichArea+"_Row_"+curVal+"_Font_Family_Selected", "Font Family: ", "Arial");
	var textElem = textBox.addHiddenField(whichArea+"_Row_"+curVal+"_Text_Entered", "Text Entered: ", "NULL");
	var fontSizeElem = textBox.addHiddenField(whichArea+"_Row_"+curVal+"_Font_Size_Selected", "Font Size: ", "1.00");
	var rate = textBox.addHiddenField(whichArea+"_Font_Rate_"+curVal+"_$", "Font Rate: ", "1");
	var charge = textBox.addHiddenField(whichArea+"_Font_Charge_Row_"+curVal+"_$", "Font Charge: ", "");

	// add them to the dom
	var toAdd = document.createDocumentFragment();
	toAdd.appendChild(textRowElem);
	toAdd.appendChild(colorElem);
	toAdd.appendChild(familyElem);
	toAdd.appendChild(textElem);
	toAdd.appendChild(fontSizeElem);
	toAdd.appendChild(rate);
	toAdd.appendChild(charge);

	form.appendChild(toAdd);

	// get a reference to them
	var textOutput = document.getElementById(whichArea+"_Text_Row_Number_"+curVal);
	var colorOutput = document.getElementById(whichArea+"_Row_"+curVal+"_Font_Color_Selected");
	var familyOutput = document.getElementById(whichArea+"_Row_"+curVal+"_Font_Family_Selected");
	var textElemOutput = document.getElementById(whichArea+"_Row_"+curVal+"_Text_Entered");
	var fontSizeElemOutput = document.getElementById(whichArea+"_Row_"+curVal+"_Font_Size_Selected");
	var getCurRate = document.getElementById(whichArea+"_Font_Rate_"+curVal+"_$");
	var outputCharge = document.getElementById(whichArea+"_Font_Charge_Row_"+curVal+"_$");
	$j(outputCharge).attr("data", "charge");
	// hide controls
	// capture values
	// do more edits !!!!

	$j(done).bind("click touchstart", function(){

		$j(this).css("visibility", "hidden");
		$j(newDone).css("visibility", "hidden");
		$j(title).css("visibility","hidden");
		// $j('.bigGoldBoxTwo, .newDone').css("visibility", "hidden");
		$j(inDomOne).draggable("disable");
		// $j(giveMeFocus).toggleClass("active");
		$j(giveMeFocus).attr("contenteditable", false);
		$j(giveMeFocus).removeClass("active");
		$j(giveMeFocus).blur();
		// $j('#menuLeftSix').hide("slow");
		$j(colorOutput).val( getFontColorFromHex(rgb2hex($j(giveMeFocus).css("color"))+";"));
		$j(familyOutput).val($j(giveMeFocus).css("font-family"));

		// for the font size
		// get the value of it via css
		// *2 for real size
		// reset the userSees value to its initial state
		$j('#userSees').text("1");
		var sizeFont = parseFloat($j(inDomOne).attr("title"));
		
		$j(fontSizeElemOutput).val(sizeFont);

		$j(getCurRate).val(sizeFont);

		// console.log("outputted rate after math: "+$j(getCurRate).val());

		// $j(fontSizeElem).val($j(giveMeFocus).css("font-size"));
		$j('#button').attr("disabled",false);

		// check to see if the element is empty
		// console.log($j(giveMeFocus).html());
		// console.log($j(giveMeFocus).html().length);

		if($j(giveMeFocus).text().length === 0){
			// row number and label remove
			$j(inDomOne).remove();
			$j(this).remove();

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

			var removeFontRate = getCurRate.id;
			var string7 = "[for='"+removeFontRate+"']";
			$j(string7).remove();
			$j(getCurRate).remove();

			var removeFontCharge = outputCharge.id;
			var string8 = "[for='"+removeFontCharge+"']";
			$j(string8).remove();
			$j(outputCharge).remove();


			$j(this).remove();
			$j(giveMeFocus).remove(); 
			$j(title).remove();

			var val = $j('#hiddenElement').val();
			val -= 1;
			$j('#hiddenElement').val(val);

			


		}else{
			$j('#userSees').text("1");
			var text = $j(textElemOutput).val();
			var len = text.length;
			// console.log("the length of the text box" +len);

			var pattern = " ";
			
			var newText = text.trim().replace(/ /g,'').replace(/\s+$/,'');

			// newTextTwo = newText.replace(/\s+$/, '');
			var newLen = newText.length;


			var curRate = Number($j(fontSizeElemOutput).val());

			// console.log(curRate);

			var total = newLen * curRate;

			$j(outputCharge).val(total.toFixed(2));
		}
		// var a = document.getElementsByClassName('fontSize')[0];
		// $j("#fontSize").prop("click", function(){
		// 	$j(this).prop('selectedIndex',0);
		// });
	});


	// show controls
	$j(giveMeFocus).bind("click touchstart",function(){

		var ident = $j(this).attr("id");
		var x = document.getElementById(ident);
		placeCaretAtEnd(x);

		$j(this).addClass("active");
		$j(this).attr("contenteditable", true);
		$j(title).css("visibility", "visible");
		$j(done).css("visibility", "visible");
		$j(newDone).css("visibility", "visible");
		$j('#button').attr("disabled", true);
		$j(inDomOne).draggable("enable");
		$j('#userSees').text($j(inDomOne).attr("title"));
});

$j(giveMeFocus).on("keyup", function(evt){
	$j(textElemOutput).val($j(this).text());
});


$j(giveMeFocus).on("keydown", function(evt){
	if(evt.keyCode === 13){
		evt.preventDefault();
	}

});


curVal++;
hidden.value = curVal;

});



$j('#fontList li>p').on("click", function(evt){
	var style = $j(this).attr("class");
	

	var arrs = ['arialBlack', 'arialNarrow', 'centuryGothic', 'georgiaTimes', 'lucindaConsole', 'timesNew', 'brushScript', 'none'];

	for(var i = 0; i <= arrs.length; i++){
		if(!($j('.active').hasClass(arrs[i]) || $j('.active').hasClass(style))){

			$j('.active').addClass(style);

		}else{
			$j('.active').removeClass(arrs[i]);
		}
	}



});



$j('#fontColor li>p').on("click", function(evt){
	var style = $j(this).attr("id");
	$j('.active').css("color", style);
});


function getFontColorFromHex(hex){

	var newHex = hex.toUpperCase();
	switch(newHex){
	case "#F4F5F0;":
		return "White";
		break;
	case "#59497F;":
		return "Purple";
		break;
	case "#2A3244;":
		return "Navy";
		break;
	case "#2760A7;":
		return "Royal Blue";
		break;
	case "#B5CED4;":
		return "Light Blue";
		break;
	case "#315D54;":
		return "Huntergreen";
		break;
	case "#BBBCBC;":
		return "Grey";
		break;
	case "#343333;":
		return "Black";
		break;
	case "#E5D0B1;":
		return "Cream";
		break;
	case "#D8C09D;":
		return "Tan";
		break;
	case "#574634;":
		return "Brown";
		break;
	case "#6A323F;":
		return "Burgundy";
		break;
	case "#C81D31;":
		return "Red";
		break;
	case "#D96D39;":
		return "Orange";
		break;
	case "#F2AB46;":
		return "Gold";
		break;
	case "#FFD02E;":
		return "Yellow";
		break;
	case "#00B29B;":
		return "Turquoise";
		break;
	case "#E95985;":
		return "Hot Pink";
		break;
	case "#BBBCBC;":
		return "Silver";
		break;

	default:
	return "Black";
	}
}


// box 1

$j('#textTipButton').on("click", function(){
	$j('#textTipArea').toggle();
	$j(this).toggleClass("boxContainerGold");
	$j('#textTipIcon').toggleClass("boxHeadingIconMinus");
});
// close box 1
$j('#closeTextTipTwo').on("click", function(){
	$j('#textTipArea').hide();
	$j('#textTipIcon').toggleClass("boxHeadingIconMinus");
	$j('#textTipButton').toggleClass("boxContainerGold");
});

// box 2

$j('#bodyColor').on("click", function(){
	$j('#bodyColorOptions').toggle();
	$j(this).toggleClass("boxContainerGold");
	$j('#boxHeadingIcon').toggleClass("boxHeadingIconMinus");
});

// box 3

$j('#bindingColor').on("click", function(){
	$j(this).toggleClass("boxContainerGold");
	$j('#bindingColorOptions').toggle();
	$j('#bindingHeadingIcon').toggleClass("boxHeadingIconMinus");
});

// box 4

$j('#pipingColor').on("click", function(){
	$j('#pipingColorOptions').toggle();
	$j(this).toggleClass("boxContainerGold");
	$j('#pipingHeadingIcon').toggleClass("boxHeadingIconMinus");
});

// box 5

$j('#rotation').on("click", function(){
	$j('#rotationOptions').toggle();
	$j(this).toggleClass("boxContainerGold");
	$j('#rotationOptionsIcon').toggleClass("boxHeadingIconMinus");
});

// box 6

$j('#imageInfoButton').on("click", function(){
	$j('#imageInfoHidden').toggle();
	$j(this).toggleClass("boxContainerGold");
	$j('#imageInfoIcon').toggleClass("boxHeadingIconMinus");
});


// box 7
$j('#imageInfoButtonTwo').on("click", function(){
	$j('#imageInfoHiddenTwo').toggle();
	$j(this).toggleClass("boxContainerGold");
	$j('#imageInfoIconTwo').toggleClass("boxHeadingIconMinus");
});
// close box 7
$j('#closeImageTip').on("click", function(){
	$j('#imageInfoHiddenTwo').hide();
	$j('#imageInfoIconTwo').toggleClass("boxHeadingIconMinus");
	$j('#imageInfoButtonTwo').toggleClass("boxContainerGold");
	$j('.generalInfo').scrollTop(-400);
});


// box 8
$j('#textTipButtonTwo').on("click", function(){
	$j('#textTipAreaTwo').toggle();
	$j(this).toggleClass("boxContainerGold");
	$j('#textTipIconTwo').toggleClass("boxHeadingIconMinus");
});
// close box 8
$j('#closeTextTip').on("click", function(){
	$j('#textTipAreaTwo').hide();
	$j('#textTipIconTwo').toggleClass("boxHeadingIconMinus");
	$j('#textTipButtonTwo').toggleClass("boxContainerGold");
	$j('.generalInfo').scrollTop(-400);
});

$j(function() { 
    $j("#viewOrder, #tryOn, #mobileTryOn").click(function() {

    	$j('.doneEditing').each(function(i,n){
    		$j(n).click();
    	});

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
                // $j('body').append($j('#previewDesign').show());
                renderCanvasToImage();
            }
        });
    });
}); 


$j('#editDesign').on("click", function(){
	$j('#previewDesign').hide();
	$j('canvas').remove();
	$j('#deleteImage').css("visibility", "visible");
});


// try on blanket on click does all of that might remove some of the functionality
// submit the form with the click

function renderCanvasToImage(){
	$j('#deleteImage').css("visibility", "visible");
	var can = document.getElementsByTagName("canvas")[0];
	var source = can.toDataURL("image/png", 1);
	var out = document.getElementById("imageOutOut");
	out.src = source;
	$j('#generatedImage').val(source);
	// $j('#previewDesign').hide();
	// $j('#deleteImage').css("visibility", "visible");
	// $j('#generatedImageLabel').show();

	var valOne = $j('#imgWidth').val();
	var valTwo = $j('#imgHeight').val();
	var valThree = $j('#imageSource').val();

	getTotalText();

	if(valOne == 'empty'){
		$j('#imgWidth').attr("name", "");
		$j('#imgHeight').attr("name", "");
		$j('#imageSource').attr("name", "");
	}else{
		$j('#gatherValues').submit();
	}
	$j('#gatherValues').submit();
	
}

$j('#gatherValues').on("submit", function(event){

	event.preventDefault();

	var data = $j('#gatherValues').serialize();

	// console.log(data);

	$j.ajax({
		url: 'http://dev.triplecrowncustom.com/app/controller/captureEmbroideryDetailsAJAX.php',
		data: data,
		method: 'POST'
	}).done(function(json){
		// different values here:
		console.log(json);
		var whichArea = json.Region;

		switch(whichArea){
			case "Neck":
			window.parent.$j('#neckEmbroideryImage').attr("src", json.Image);
			window.parent.$j('#neckIframeHolder').hide();
			window.parent.$j('#initial').show();
			break;
			case "Shoulder":
			window.parent.$j('#shoulderEmbroideryImage').attr("src", json.Image);
			window.parent.$j('#shoulderIframeHolder').hide();
			window.parent.$j('#initial').show();
			break;
			case "Center":
			window.parent.$j('#centerEmbroideryImage').attr("src", json.Image);
			window.parent.$j('#centerIframeHolder').hide();
			window.parent.$j('#initial').show();
			break;
			case "Hip":
			window.parent.$j('#hipEmbroideryImage').attr("src", json.Image);
			window.parent.$j('#hipIframeHolder').hide();
			window.parent.$j('#initial').show();
			break;
		}
		
		
	});

	return false;
});


function getTotalText(){
	var total = 0.00;
	$j('input[data="charge"]').each(function(i, n){
		// alert($j(n).val());
		total += parseFloat($j(n).val());
	});
	// alert("total: "+total.toFixed(2));
	var out = $j('#whichArea').val();

	var getArea = document.getElementById(out+"_Total_For_Text");
	$j(getArea).val(total.toFixed(2));
};

