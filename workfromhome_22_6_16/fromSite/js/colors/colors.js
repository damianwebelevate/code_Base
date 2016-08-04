/* ==========================================================================
    BREADCRUMB APPLICATION NAVIGATION
========================================================================== */

$j('#onToEmbroidery').on("mouseenter", function(){
    $j('#onToEmbroideryNumber').removeClass("grey");
    $j('#onToEmbroideryText').removeClass("greyText");
    $j(this).attr("title", "Add Embroidery");
});

$j('#onToEmbroidery').on("mouseleave", function(){
    $j('#onToEmbroideryNumber').addClass("grey");
    $j('#onToEmbroideryText').addClass("greyText");
});

// click event for #onToEmbroidery and #addEmbroidery is in the canvas.js file