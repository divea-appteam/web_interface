<!DOCTYPE html>

<html lang="ja">
  <head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<script src="js/flotr2.min.js"></script>
	<title>SIZKANIC</title>
	<script type="text/javascript" src="include.js"></script>
	<link rel="stylesheet" href="user_screen_1.css" type="text/css">
  </head>
  <body>
	<div id="d1">
	  <h1>図書館騒音情報</h1>
	  <h2>1Fメディア学習室</h2>
	</div>
	<div id="d2">
	  <h3>騒音情報確認位置</h3>
	  <h3 id="d4">1Fメディア学習室</h3>
	  <h3 id="d4"><a href="./user_screen_2f_1.php">2F学習スペース①</a></h3>
	  <h3 id="d4"><a href="./user_screen_2f_2.php">2F学習スペース②</a></h3>
	</div>
	<div id="d3">
	  <div id="graph">
	  <h1 id="d5">
<?php
	include("./gragh.html");
?>
	  </h1>
	  </div>
	</div>

  </body>
</html>