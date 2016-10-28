<?php
/*
  @Author: ananayarora
  @Date:   2016-10-25T10:59:12+05:30
  @Last modified by:   ananayarora
  @Last modified time: 2016-10-25T11:28:11+05:30
*/

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/intro.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		$('#intro').animate({'opacity':'1','marginTop':'0px'});
		$('#subintro').animate({'opacity':'1','marginTop':'0px'});
		$('.button').animate({'opacity':'1','marginTop':'0px'});
	});
	</script>
</head>
<body>
<div id="intro">Introducing</div>
<div id="subintro">The New Android Wear.</div>
<a href="index.php"><div class="button"><svg>
<rect x="0" y="0" fill="none" width="195" height="65px"></rect></svg>Explore</div></a>
</body>
</html>
