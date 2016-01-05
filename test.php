<?php 
	//接続に必要な情報を羅列してみた
	$server = "localhost";
	$dbname = "test_db";
	$user = "dbuser";
	$pass = "password";
	
	//表示用とDBの文字コードを設定
	$enc_disp = "EUC-JP";
	$enc_db = "EUC-JP";
	
	//データの文字コードを変換する用の関数
	function cnv_enc($string, $to, $from) {
		$det_enc = mb_detect_encoding($string, $from . "," . $to);
		if ($det_enc and $det_enc != $to) {
			return mb_convert_encoding($string, $to, $det_enc);
		}
		else {
			return $string;
		}
	}
	
	//データベースに接続スクリプト
	$conn = mysql_connect($sv, $user, $pass) or die("コネクション取得時のエラー");
	mysql_select_db($dbname) or die("データベース接続エラー");
	
	//データの取り出し
	$time = "select time from graph_data";
	$res = mysql_query($time, $conn);
	$data1 = array();
	while($row = mysql_fetch_row($res)) {		
		array_push($data1,$row);
	}
	
	$db = "select db from graph_data";
	$res = mysql_query($db, $conn);
	$data2 = array();
	while($row = mysql_fetch_row($res)) {
		array_push($data2,$row);
	}



mysql_close($conn);
?>


<html>
<head>
  <title>test</title>
<!--[if IE]><script type="text/javascript" src="./html5jp/excanvas/excanvas.js"></script><![endif]-->
<script type="text/javascript" src="./html5jp/graph/line.js"></script>
<script type="text/javascript"> 
window.onload = function() {
  var time = <?php echo json_encode($data1, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>;
  var db = <?php echo json_encode($data2, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>;
  var lg = new html5jp.graph.line("sample");    
  if( ! lg ) { return; }
  var items = [
    ["騒音レベル",''+db[0], ''+db[1], ''+db[2],''+db[3], ''+db[4], ''+db[5], ''+db[6], ''+db[7], ''+db[8],''+db[9],''+db[10],''+db[11]]
   ];
   var params = {
    x: ["時間", ''+time[0], ''+time[1], ''+time[2],''+time[3], ''+time[4], ''+time[5], ''+time[6], ''+time[7], ''+time[8],''+time[9],''+time[10],''+time[11]],
    y: ["騒音レベル(Hz)", 0, 20, 40, 60, 80, 100],
    yMax: 100,
    yMin: 0,
    lineWidth: [1,2],
    dotRadius: [3,4],
    dotType: ["disc", "square"]
   };
  lg.draw(items, params);
};

</script>
</head>

<body>

<div><canvas width="1400" height="600" id="sample"></canvas></div>

</body>
</html>