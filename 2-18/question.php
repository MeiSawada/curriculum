
  <style>

    *{
      background-color: gray; 
    }

    p,h2 {
      font-family: Tahoma;
      color:white;
      display:block;
      text-align: center;
    }

    input {
        background-color: white;
    }

    div {
      text-align: center;
      color: white;
    }

  </style>

<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$q_ones = array();
$q_ones = array(80, 22, 20, 21);
$q_twos = array();
$q_twos = array("PHP", "Python", "JAVA", "HTML");
$q_threes = array();
$q_threes = array("join", "select", "insert", "update"); 
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$a_one = 80;
$a_two = "HTML";
$a_three = "select";

?>


<p>お疲れ様です<?php echo $my_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<div>
    <form action="answer.php" method="post">
    <?php foreach ($q_ones as $q_one) {?>
    <input type="radio" name="one" >
    <?php echo $q_one;
    }?>
    <input type="hidden" name="a_one" value="<?php echo $a_one;?>">
    </form>
</div>

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<div>
    <form action="answer.php" method="post">
        <?php foreach ($q_twos as $q_two) {?>
        <input type="radio" name="two">
        <?php echo $q_two;
        }?>
        <input type="hidden" name="a_two" value="<?php echo $a_two;?>">
    </form>
 </div>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<div>
    <form action="answer.php" method="post">
        <?php foreach ($q_threes as $q_three) {?>
        <input type="radio" name="three">
        <?php echo $q_three;
        }?>
        <input type="hidden" name="a_three" value="<?php echo $a_three;?>">
    </form>
</div>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<form action="answer.php" method="post">
    <div>
     <input type="submit" value="テスト開始" />
    </div>
    <input type="hidden" name="my_name" />
     <?php  
        $my_name = $_POST['my_name']; 
        $a_one = 80;
        $a_two = "HTML";
        $a_three = "select";
    ?>
</form>