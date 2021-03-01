<style>
      
    *{
        background-color: gray; 
      }
  
    p {
        font-family: Tahoma;
        color:white;
        display:block;
        text-align: center;
      }

    div {
        text-align: center;
        color: white;
      }
  
</style>




<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];
$a_one = $_POST['a_one'];
$a_two = $_POST['a_two'];
$a_three = $_POST['a_three'];
$one = $_POST['one'];
$two = $_POST['two'];
$three = $_POST['three'];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
?>


<p><?php echo $my_name; ?>さんの結果は・・・？</p>
<div>
    <p>①の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php if($a_one === $one) {
        echo "正解！";
    }else {
        echo "残念・・・";
    }?>
    <p>②の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php if($a_two === $two) {
        echo "正解！";
    }else {
        echo "残念・・・";
    }?>
    <p>③の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php if($a_three === $three) {
        echo "正解！";
    }else {
        echo "残念・・・";
    }?>
</div>