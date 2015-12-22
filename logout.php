<?php
session_start();
if (isset($_SESSION["USERID"])) {
  $errorMessage = "ログアウトしました。";
}
else {
  $errorMessage = "セッションがタイムアウトしました。";
}
// セッション変数のクリア
$_SESSION = array();
// クッキーの破棄は不要
//if (ini_get("session.use_cookies")) {
//    $params = session_get_cookie_params();
//    setcookie(session_name(), '', time() - 42000,
//        $params["path"], $params["domain"],
//        $params["secure"], $params["httponly"]
//    );
//}
// セッションクリア
@session_destroy();
?>

<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <title>SIZCANIC 管理者用ページ</title>
    <link rel="stylesheet" href="admin_screen_1.css" type="text/css">
  </head>
  <body  id="d1">
  <h1>ログアウト</h1>
  <div><?php echo $errorMessage; ?></div>
  <a href="admin_screen_login.php">ログイン画面に戻る</a>
  </body>
</html>