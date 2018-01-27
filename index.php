<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>Transfer Files</title>
	<link href="css/general.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<script src="js/jquery-3.1.1.js"></script>
</head>
<body>

<div class="view">
	<h1>Drop Berkas untuk dikirim</h1>
	<div id="progress-wrp">
		<div class="progress-bar"></div>
	</div>
</div>

<div class="input">
	<input type="file" name="berkas[]" id="berkas">
</div>

<script src="js/insert.js"></script>
<script>
	$(function() {
		$("#berkas").on("change", function() {
			var file = $(this)[0].files[0];
			$(".view h1").css({"margin-top":"15%"});
			$("#progress-wrp").fadeIn(290);
		    var upload = new Upload(file);
			upload.doUpload();
		});
	});
	function sukses() {
		$(function() {
			$("#progress-wrp").fadeOut(290);
			$(".view h1").css({"margin-top":"18%"});
		});
	}
</script>

</body>
</html>