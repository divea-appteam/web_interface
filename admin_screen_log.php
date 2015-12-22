<?php
session_start();
// ログイン状態のチェック
if (!isset($_SESSION["USERID"])) {
  header("Location: logout.php");
  exit;
}
?>


<!DOCTYPE html>                                    

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
          <form action="cgi-bin/formsample.cgi" method="post">           
          <p>ログ情報を表示させたい時間帯を入力してください。</p>        
          <p>                               
	   <select name="month">
                  <option value="month1">1</option>                          
                  <option value="month2">2</option>                          
                  <option value="month3">3</option>                          
                  <option value="month4">4</option>                          
                  <option value="month5">5</option>                          
                  <option value="month6">6</option>                          
                  <option value="month7">7</option>                          
                  <option value="month8">8</option>                          
                  <option value="month9">9</option>                          
                  <option value="month10">10</option>                        
                  <option value="month11">11</option>                        
                  <option value="month12">12</option> 
	   </select>
		月
	<select name="day">
                  <option value="day1">01</option>                         
                  <option value="day2">02</option>                         
                  <option value="day3">03</option>                         
                  <option value="day4">04</option>                         
                  <option value="day5">05</option>                         
                  <option value="day6">06</option>                         
                  <option value="day7">07</option>                         
                  <option value="day8">08</option>                         
                  <option value="day9">09</option>                         
                  <option value="day10">10</option>                        
                  <option value="day11">11</option>                        
                  <option value="day12">12</option>                        
                  <option value="day13">13</option>                        
                  <option value="day14">14</option>                        
                  <option value="day15">15</option>                        
                  <option value="day16">16</option>                        
                  <option value="day17">17</option>                        
                  <option value="day18">18</option>                        
                  <option value="day19">19</option>                        
                  <option value="day20">20</option>                        
                  <option value="day21">21</option>                        
                  <option value="day22">22</option>                        
                  <option value="day23">23</option>                        
                  <option value="day24">24</option>                        
                  <option value="day25">25</option>                        
                  <option value="day26">26</option>                        
                  <option value="day27">27</option>                        
                  <option value="day28">28</option>                        
                  <option value="day29">29</option>                        
                  <option value="day30">30</option                         
                  <option value="day31">31</option>
	   </select>
		日
                <select name="hour">                                        
                  <option value="hour0">0</option>                          
                  <option value="hour1">1</option>                          
                  <option value="hour2">2</option>                          
                  <option value="hour3">3</option>                          
                  <option value="hour4">4</option>                          
                  <option value="hour5">5</option>                          
                  <option value="hour6">6</option>                          
                  <option value="hour7">7</option>                          
                  <option value="hour8">8</option>                          
                  <option value="hour9">9</option>                          
                  <option value="hour10">10</option>                        
                  <option value="hour11">11</option>                        
                  <option value="hour12">12</option>                        
                  <option value="hour13">13</option>                        
                  <option value="hour14">14</option>                        
                  <option value="hour15">15</option>                        
                  <option value="hour16">16</option>                        
                  <option value="hour17">17</option>                        
                  <option value="hour18">18</option>                        
                  <option value="hour19">19</option>                        
                  <option value="hour20">20</option>                        
                  <option value="hour21">21</option>                        
                  <option value="hour22">22</option>                        
                  <option value="hour23">23</option>                        
                </select>                                                
                時〜
                  <select name="month">
                  <option value="month1">1</option>                          
                  <option value="month2">2</option>                          
                  <option value="month3">3</option>                          
                  <option value="month4">4</option>                          
                  <option value="month5">5</option>                          
                  <option value="month6">6</option>                          
                  <option value="month7">7</option>                          
                  <option value="month8">8</option>                          
                  <option value="month9">9</option>                          
                  <option value="month10">10</option>                        
                  <option value="month11">11</option>                        
                  <option value="month12">12</option> 
	   </select>
		月
	<select name="day">
                  <option value="day1">01</option>                         
                  <option value="day2">02</option>                         
                  <option value="day3">03</option>                         
                  <option value="day4">04</option>                         
                  <option value="day5">05</option>                         
                  <option value="day6">06</option>                         
                  <option value="day7">07</option>                         
                  <option value="day8">08</option>                         
                  <option value="day9">09</option>                         
                  <option value="day10">10</option>                        
                  <option value="day11">11</option>                        
                  <option value="day12">12</option>                        
                  <option value="day13">13</option>                        
                  <option value="day14">14</option>                        
                  <option value="day15">15</option>                        
                  <option value="day16">16</option>                        
                  <option value="day17">17</option>                        
                  <option value="day18">18</option>                        
                  <option value="day19">19</option>                        
                  <option value="day20">20</option>                        
                  <option value="day21">21</option>                        
                  <option value="day22">22</option>                        
                  <option value="day23">23</option>                        
                  <option value="day24">24</option>                        
                  <option value="day25">25</option>                        
                  <option value="day26">26</option>                        
                  <option value="day27">27</option>                        
                  <option value="day28">28</option>                        
                  <option value="day29">29</option>                        
                  <option value="day30">30</option                         
                  <option value="day31">31</option>
	   </select>
		日
                <select name="hour">                                        
                  <option value="hour0">0</option>                          
                  <option value="hour1">1</option>                          
                  <option value="hour2">2</option>                          
                  <option value="hour3">3</option>                          
                  <option value="hour4">4</option>                          
                  <option value="hour5">5</option>                          
                  <option value="hour6">6</option>                          
                  <option value="hour7">7</option>                          
                  <option value="hour8">8</option>                          
                  <option value="hour9">9</option>                          
                  <option value="hour10">10</option>                        
                  <option value="hour11">11</option>                        
                  <option value="hour12">12</option>                        
                  <option value="hour13">13</option>                        
                  <option value="hour14">14</option>                        
                  <option value="hour15">15</option>                        
                  <option value="hour16">16</option>                        
                  <option value="hour17">17</option>                        
                  <option value="hour18">18</option>                        
                  <option value="hour19">19</option>                        
                  <option value="hour20">20</option>                        
                  <option value="hour21">21</option>                        
                  <option value="hour22">22</option>                        
                  <option value="hour23">23</option>                        
                </select>
	時                   
          </p>
          <p>ログ情報を表示させたい場所を入力してください。</p>
          <p>
                <select name="choice2">
                  <option value="s1">1Fメディア学習室</option>
                  <option value="s2">2F学習スペース①</option>
                  <option value="s3">2F学習スペース②</option>
                  <option value="s4">図書館全体</option>
                </select>
          </p>
          <p>
                <input type="submit" value="表示する">
          </p>
          </form>
        </div>
	<div align="center">
	<h2><a href="logout.php">ログアウト</a></h2>
	</div>
	</body>
</html>