<!DOCTYPE html>
<html>
<head>
	<title>Edwards page</title>

	<style>

	</style>
</head>
<body>

<form id="toSubmit">

<input type="text" name="pants" value="Some Value" />

<input type="hidden" name="closeMe" value="closeMe" />

<input id="submit" type="submit" value="go" />

</form>


<input type="text" />


<script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>

<script>

$('#submit').on("click", function(event){
	event.preventDefault();

	var data = $('#toSubmit').serialize();

	$.ajax({
		url: 'submitForm.php',
		data: data,
		method: 'POST'
	}).done(function(json){
		// different values here:
		window.parent.$('#output').text(json.deadly);
		// different values here:
		window.parent.$('#iframeOne').hide();
		
	});
});


</script>
</body>
</html>

