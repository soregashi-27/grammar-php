<?php 
echo "Good morning.\n";
echo "Good evening.";
echo "Good Afternoon.";

$num; 
// 変数定義
$num = 1;
echo $num;

$num = 1;
$num01 = 2;
$num_01 = 3.1;
// $num-01 = 3; ハイフンは使えない

echo $num = 1;
echo $num01 = 2;
echo $num_01 = 3.1;

echo gettype($num01) ,"\n"; 
echo gettype($num_01),"\n"; 

var_dump($num_01)."\n"; 
?>

<?php 
$string_a = "Hello php";
echo $string_a."\n";


$a = 10;
$b = 1;
$bool01 = ($a > $b);

echo $bool01."\n";
echo gettype($bool01);

// aaという変数に"sato", "Suzuki", "takashi"という3つの文字データを変数で指定してデータ配列を作成
// $aa = array(3);
// $aa[0] = "sato";
// $aa[1] = "Suzuki";
// $aa[2] = "Suzuki";

// $aa = array("sato", "suzuki", "takashi");

$aa = ["sato", "suzuki", "takashi"];
// これらは同じ意味として書ける

$aa[1] = "tanaka";
// 文字データを更新

echo ($aa[0]),"\n";
echo ($aa[1]),"\n";
echo ($aa[2]),"\n";


?>

<?php 
$aaa = [["sato", "suzuki"],["bob", "tom"]];

echo($aaa[0][0]),"\n";
echo($aaa[1][1]),"\n";
echo($aaa[1][0]),"\n";
echo($aaa[0][1]),"\n";


?>