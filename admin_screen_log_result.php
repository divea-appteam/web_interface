<?php
session_start();
// ログイン状態のチェック
if (!isset($_SESSION["USERID"])) {
  header("Location: logout.php");
  exit;
}
?>

<html lang="ja">
  <head>        
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">                                                                        
        <meta http-equiv="Content-Style-Type" content="text/css">        
        <meta http-equiv="Content-Script-Type" content="text/javascript">
        <title>SIZKANIC 管理者用ページ</title>                           
        <link rel="stylesheet" href="admin_screen_1.css" type="text/css">
  </head>                                                                
  <body>                                                                 
        <div id="d1">                                                    
          <h1>管理者画面</h1>                                            
          <h2>ログ情報の管理</h2>                                        
        </div>                                                           
        <div id="d2">                                                    
 	<p>ｘｘ月xx日ｘｘ時〜ｘｘ時までのログ情報</p>
	<?php include("log_result.php");?>
        </div>
	<div align="center">
	<h2><a href="logout.php">ログアウト</a></h2>
	</div>
	</body>
</html>