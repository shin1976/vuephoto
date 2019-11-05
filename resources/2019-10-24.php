<?php

$errors=array();

require_once '../../conf/const.php';
require_once '../../model/functions.php';
try {

    if($_SERVER['SERVER_NAME']==='localhost'){
      $db=new PDO('mysql:host=127.0.0.1;dbname=dotinstall_poll_php;charset=UTF8','root','');
  //v($db);
 }else{
 //ネット接続時
   $db=new PDO('mysql:host=mysql717.db.sakura.ne.jp;dbname=yutatomo_shogi;charset=UTF8','yutatomo','tomokun1230');
 }


 if(isset($_SESSION['name'])===FALSE){
   header('Location: ../../login.php');
   exit;
 }else{
   $customerEmail=$_SESSION['email'];
   $customerName=$_SESSION['name'];
   email_check($customerEmail,$errors);
   if(count($errors)===0){

   }else{
     header('Location: ../../login.php');
     exit;

   }

 }


} catch (PDOException $e){
  print "Can't connect:". $e->getMessage();
  exit();
}
 ?>
 <!DOCTYPE html>
 <head>

 <link rel="stylesheet" type="text/css" href="../Kifu-for-JS-master/css/kifuforjs.css">
 <script src="../Kifu-for-JS-master/src/jquery-3.3.1.min.js"></script>
 <script src="../Kifu-for-JS-master/bundle/kifu-for-js.js" charset="utf-8"></script>
 <script>var Kifu = KifuForJS;</script>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<style>
.todayArticle{
  font-size: 20px;
  background-color: #fffacd;
  padding: 5px;
}

.box14{
  font-size: 20px;
    padding: 0.2em 0.5em;
    margin: 2em 0;
    background: #d6ebff;
    box-shadow: 0px 0px 0px 10px #d6ebff;
    border: dashed 2px white;
}
.box14 p {
    margin: 0;
    padding: 0;
}
h1 {
padding: 0.5em;/*文字周りの余白*/
color: #010101;/*文字色*/
background: #eaf3ff;/*背景色*/
border-bottom: solid 3px #516ab6;/*下線*/
}
h2 {
color: #010079;
text-shadow: 0 0 5px white;
border-left: solid 7px #010079;
background: -webkit-repeating-linear-gradient(-45deg, #cce7ff, #cce7ff 3px,#e9f4ff 3px, #e9f4ff 7px);
background: repeating-linear-gradient(-45deg, #cce7ff, #cce7ff 3px,#e9f4ff 3px, #e9f4ff 7px);
}
h3 {
color: #364e96;/*文字色*/
border: solid 3px #364e96;/*線色*/
padding: 0.5em;/*文字周りの余白*/
border-radius: 0.5em;/*角丸*/
}

</style>
 </head>
 <body>


    <div class="container" style="width: 100%;">
      <?php include('../../view/navbar.php'); ?>


          <h1>2019年10月24日の将棋教室</h1>

      <div class="box14">
        <h3>今日の教室</h3>

        <br>&nbsp; &nbsp;今回から、プリントに次の一手問題を掲載するようにしました。
        <br>&nbsp; &nbsp;毎週の次の一手問題から、特に説明したい局面のものを用意していこうと思います。
        <br>&nbsp; &nbsp;適当に指すのではなく、今の局面が序盤か、中盤か、終盤かを意識して、考えるポイントを説明していこうと思います。
        <br>&nbsp; &nbsp;
        <br>&nbsp; &nbsp;序盤、中盤、終盤の考え方については<a href="https://shinito.net/shogiSch/kifuPlay/kouza/syouginagare.php">将棋講座の一局の流れ</a>をご覧ください。
        <br>&nbsp; &nbsp;　<span style="background:#ffff00; font-weight: bold; margin-bottom: 5px;"></span>

</div>


        <h2>大盤左の問題の解答</h2>

      <script>Kifu.load("../kifu/2019102401.kif");</script>


        <h2>大盤右の問題の解答</h2>
      <script>Kifu.load("../kifu/2019102402.kif");</script>

        <h2>懸賞詰将棋前回の解答</h2>
      <script>Kifu.load("../kifu/2019101703.kif");</script>

      <h2>懸賞詰将棋今回の問題</h2>
    <script>Kifu.load("../kifu/2019102403.kif");</script>

    <h2>今日解説した次の一手の問題</h2>
  <script>Kifu.load("../kifu/2019102404.kif");</script>



      <h2>最後に</h2>
      <div class="box14">
  <br>&nbsp; &nbsp; 来週は鉄人賞をお渡しする日です。現時点で鉄人の子は頑張ってください。
  <br>&nbsp; &nbsp; 先週のブログには書きましたが、来月からは鉄人賞は鉄人鉛筆になります。
  <br>&nbsp; &nbsp;
  <br>&nbsp; &nbsp; 初級者の子の将棋を見ていると、角の筋に気づかずに王を取られたりすることがとても多いです。
  <br>&nbsp; &nbsp; このアプリのトップページからいける「練習将棋」がお勧めです。
  <br>&nbsp; &nbsp; 普通の将棋ソフトと違い、角道に気づかないと王を取られるので、何度か指していると角道に気づかないことは減ると思います。
  <br>&nbsp; &nbsp; 是非試してみてください。
  <br>&nbsp; &nbsp; 教室内ランキングもいつのまにか大混戦ですね。

</div>


   <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  </body>
 </html>
