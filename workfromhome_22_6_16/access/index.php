 <?php header("Access-Control-Allow-Origin: *");?>

<!DOCTYPE html>
<html>
<head>

</head>


<!-- // choose a product and go to the choose colors page, normal post? -->

<body>
<form id="getSelectedProduct" method="POST" action="http://localhost/fromSite/">
<input type="text" autofocus value="" id="product" name="product_selected" />
<input type="submit" value="GO!" />
</form>

<p>Pimlico Wool Dress Sheet</p>
<p>Hollywood cotton cooler</p>
<p>Gulfstream net cooler</p>
<p>Extended Neck Lined Rain Sheet</p>
<p>Santa Anita Stable Sheet</p>
<p>200g Belmont Stable Rug</p>

<script type="text/javascript" src="http://dev.triplecrowncustom.com/app/js/jquery.js"></script>
<script type="text/javascript" src="http://dev.triplecrowncustom.com/app/js/some.js"></script>
<script type="text/javascript">

$j('p').on("click", function(){
	$j('#product').val($j(this).text());
	$j('#getSelectedProduct').submit();
})

</script>

</body>
</html>