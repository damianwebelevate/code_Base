<?php

/*
*
* Template Name: Temp Landing
*
*/

?>


<?php get_header();?>
<!-- 
<!DOCTYPE html>

<html>

<head>
	
	<meta name="viewport" content="width=device-width">

<link rel='stylesheet' id='cssJQ-css'  href='http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/inc/css/jquery-ui.min.css?ver=4.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='structure-css'  href='http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/inc/css/jquery-ui.structure.min.css?ver=4.4.2' type='text/css' media='all' />

<link rel='stylesheet' id='run_custom_rug_css-css'  href='css/main.css' type='text/css' media='all' />

<link rel='stylesheet' id='widgetCss-css'  href='http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css?ver=4.4.2' type='text/css' media='all' />
<script type='text/javascript' src='http://dev.triplecrowncustom.com/dev/wp-includes/js/jquery/jquery.js?ver=1.11.3'></script>

<script type='text/javascript' src='http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/js/jqueryui.js?ver=4.4.2'></script>
<script type='text/javascript' src='http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/js/some.js?ver=4.4.2'></script>

<script type='text/javascript' src='//code.jquery.com/ui/1.10.0/jquery-ui.js?ver=4.4.2'></script>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<style type="text/css">

</style>

</head>

<body> -->



<p title="Neck" id="getNeck">Neck</p>
<p title="Center" id="getCenter">Center</p>
<p title="Hip" id="getHip">Hip</p>
<p title="Shoulder" id="getShoulder">Shoulder</p>





<form id="getTextArea" action="https://triplecrowncustom.com/embroidery/" method="post">

<input id="toPost" type="text" name="textArea" value="" />
</form>




<script>
$j('#getNeck, #getCenter, #getShoulder, #getHip').on("click", function(evt){
	var value = $j(this).attr("title");
	$j('#toPost').val(value);
	$j('#getTextArea').submit();
});
</script>


<?php
get_footer();
