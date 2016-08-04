/* Copyright 2015, 2016 Damian O'Rourke
* Email: damiano_rourke@hotmail.com
* Website: damianorourke.com
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


/* ==========================================================================
    FUNCTIONS COMMON TO ALL PAGES
========================================================================== */
// show user guide 

$j('#showUserGuide').on("click", function(){
    $j('#userGuide').show();
});

$j('#closeUserGuide').on("click", function(){
    $j('#userGuide').hide();
});

/* ==========================================================================
    FUNCTIONS FOR THE ADD-TEXT-AND-IMAGES PAGE
========================================================================== */


$j('#deleteNeck').on("click", function(){
    $j('#deleteNeckForm').submit();
});
$j('#deleteCenter').on("click", function(){
    $j('#deleteCenterForm').submit();
});
$j('#deleteShoulder').on("click", function(){
    $j('#deleteShoulderForm').submit();
});
$j('#deleteHip').on("click", function(){
    $j('#deleteHipForm').submit();
});

// mouseover event to drigger the image draggable for holywood
$j('#neckRegionImage img').on("mouseover", function(){
    $j(this).draggable({
        containment: '#hollywoodNeckRegionImageHolder',
        scroll: false
    });
    $j('#neckRegionImage img').css("margin-top","0");
});

// mouseover event to drigger the image draggable for holywood

$j('#hollywoodNeckRegionImage img').on("mouseover", function(){
    $j(this).draggable({
        containment: '#neckRegionImageHolder',
        scroll: false
    });
    $j('#neckRegionImage img').css("margin-top","0");
});

// mouseover event to drigger the image draggable for pimlico
$j('#pimlicoNeckRegionImage img').on("mouseover", function(){
    $j(this).draggable({
        containment: '#neckRegionImageHolder',
        scroll: false
    });
    $j('#pimlicoNeckRegionImage img').css("margin-top","0");
});
// mouseover event to drigger the image draggable for extended
$j('#extendedNeckRegionImage img').on("mouseover", function(){
    $j(this).draggable({
        containment: '#neckRegionImageHolder',
        scroll: false
    });
});
// mouseover event to drigger the image draggable for belmont
$j('#belmontNeckRegionImage img').on("mouseover", function(){
    $j(this).draggable({
        containment: '#neckRegionImageHolder',
        scroll: false
    });
});
// mouseover event to drigger the image draggable for santa
$j('#santaNeckRegionImage img').on("mouseover", function(){
    $j(this).draggable({
        containment: '#santaNeckRegionImageHolder',
        scroll: false
    });
});
// mouseover event to drigger the image draggable for GULF
$j('#gulfNeckRegionImage img').on("mouseover", function(){
    $j(this).draggable({
        containment: '#neckRegionImageHolder',
        scroll: false
    });
});
$j('#shoulderRegionImageHolder').on("mouseover", function(){
    $j('#shoulderRegionImage').draggable({
        containment: '#shoulderRegionImageHolder',
        scroll: false
    });
});
$j('#hipRegionImageHolder').on("mouseover", function(){
    $j('#hipRegionImage').draggable({
        containment: '#hipRegionImageHolder',
        scroll: false
    });
});
// select the area 
$j('#chooseEmbroideryNeck, #chooseEmbroideryCenter, #chooseEmbroideryHip, #chooseEmbroideryShoulder').on("click", function(){
    // alert($j(this).attr("title"));
    $j('#changeMe').val($j(this).attr("title"));
    $j('#embroideryChoice').submit();
});

$j('#hipButton').on("click", function(){
    $j('#select').toggle();
    // $j('#center').hide();
    $j('#imgOne').val("ON");
});
// show user guide 
$j('#showUserGuide').on("click", function(){
    $j('#userGuide').show();
});
$j('#closeUserGuide').on("click", function(){
    $j('#userGuide').hide();
});


/* ==========================================================================
    BREADCRUMB APPLICATION NAVIGATION
========================================================================== */

// go back functionality
$j('#backToColors').on("click", function(){
    window.location.href = "http://dev.triplecrowncustom.com/dev/add-colors/";
});

$j('#backToColors').on("mouseenter", function(){
    $j('#backToColorsNumber').css({"background-color":"#eee", "border-color":"#eee"});
    $j('#backToColorsText').css("color", "#eee");
});

$j('#backToColors').on("mouseleave", function(){
    $j('#backToColorsNumber').css({"background-color":"#0D416E", "border-color":"#0D416E"});
    $j('#backToColorsText').css("color", "#0D416E");
});

// order Summary from add-text-and-images to Order Summary

$j('#onToOrderSummary').on("mouseenter", function(){
    $j('#onToOrderSummaryNumber').removeClass("grey");
    $j('#onToOrderSummaryText').removeClass("greyText");
});

$j('#onToOrderSummary').on("mouseleave", function(){
    $j('#onToOrderSummaryNumber').addClass("grey");
    $j('#onToOrderSummaryText').addClass("greyText");
});


/* ==========================================================================
SPEICAL REQUESTS
========================================================================== */
/* ==========================================================================
    OPENING CLOSING EVENTS
========================================================================== */
    // open the area under the title NECK

    $j('#specialRequests').on("click", function(){
        $j('#specialRequestsHidden').toggle();
        $j(this).toggleClass("boxContainerGold");
        $j('#speicalRequestsHeadingIcon').toggleClass("boxHeadingIconMinus");
    });

    $j('#requestText').keyup(function(e){


        var keysArr = Array();

        var y = $j(this).html();

        keysArr[0] = y;

        $j('#hiddenMessageArea').html(keysArr);

        $j('#rugCustomMessage').val($j('#hiddenMessageArea').text());


    });

   // icons on the Image to show menu options

    $j('#iconNeck').on("click", function(){
        $j('#dropOneHidden').show();
    });

    $j('#neckTitle').on("click", function(){
        $j('#dropOneHidden').show();
    });

/* ==========================================================================
    NEXT STEP
========================================================================== */

$j('#viewOrder').on("mouseenter", function(){
        $j('#goldBack').addClass("hover");
        $j('#goldText').addClass("hoverText");
    });

$j('#viewOrder').on("mouseleave", function(){
    $j('#goldBack').removeClass("hover");
    $j('#goldText').removeClass("hoverText");
});

// submit the form and call the canvas function


function convertToImage(canvas){
    var img = new Image();
    img.src = canvas.toDataURL("image/png", 1);
    img.id = "firstText";
    return img;
};

// END ADD TEXT AND COLORS PAGE


/* ==========================================================================
    FOR THE ADD-COLORS PAGE FUNCTIONS 
========================================================================== */

/* ==========================================================================
    Opening and closing of the Body Color | Binding Color | Piping color
========================================================================== */

// box 1 - body color

$j('#bodyColor').on("click", function(){
    $j('#bodyColorOptions').toggle();
    $j(this).toggleClass("boxContainerGold");
    $j('#boxHeadingIcon').toggleClass("boxHeadingIconMinus");
});


// box 2 - binding color

$j('#bindingColor').on("click", function(){
    $j(this).toggleClass("boxContainerGold");
    $j('#bindingColorOptions').toggle();
    $j('#bindingHeadingIcon').toggleClass("boxHeadingIconMinus");
});

// box 3 - piping color

$j('#pipingColor').on("click", function(){
    $j('#pipingColorOptions').toggle();
    $j(this).toggleClass("boxContainerGold");
    $j('#pipingHeadingIcon').toggleClass("boxHeadingIconMinus");
});


/* ==========================================================================
    BREADCRUMB APPLICATION NAVIGATION
========================================================================== */

// addEmbroidery from add-colors to add-text-and-images

$j('#onToEmbroidery').on("mouseenter", function(){
    $j('#onToEmbroideryNumber').removeClass("grey");
    $j('#onToEmbroideryText').removeClass("greyText");
});

$j('#onToEmbroidery').on("mouseleave", function(){
    $j('#onToEmbroideryNumber').addClass("grey");
    $j('#onToEmbroideryText').addClass("greyText");
});


// Next Step at the end of the breadcrumb hover events

$j('#create').on("mouseenter", function(){
    $j('#goldBack').addClass("hover");
    $j('#goldText').addClass("hoverText");
});

$j('#create').on("mouseleave", function(){
    $j('#goldBack').removeClass("hover");
    $j('#goldText').removeClass("hoverText");
});

// END ADD COLORS PAGE

/* ==========================================================================
    ORDER SUMMARY PAGE FUNCTIONS
========================================================================== */


    // var sizes = Array();
    // var isDom = Array();
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


/* ==========================================================================
    BREADCRUMB APPLICATION NAVIGATION
========================================================================== */


// go back functionality - edit embroidery
$j('#backToEmbroidery').on("click", function(){
    window.location.href = "http://dev.triplecrowncustom.com/dev/add-text-and-images/";
});

$j('#backToEmbroidery').on("mouseenter", function(){
    $j('#backToEmbroideryNumber').css({"background-color":"#eee", "border-color":"#eee"});
    $j('#backToEmbroideryText').css("color", "#eee");
});

$j('#backToEmbroidery').on("mouseleave", function(){
    $j('#backToEmbroideryNumber').css({"background-color":"#0D416E", "border-color":"#0D416E"});
    $j('#backToEmbroideryText').css("color", "#0D416E");
});


// END ORDER SUMMARY JS