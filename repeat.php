<?php 
// for文 for(first argument, 継続条件, 増減式){}

//0スタートの4まで繰り返しfor()
// for($i = 0; $i <= 4; $i ++) {
//     echo $i, "\n";
// }

// break 繰り返し処理fin
// for($i = 0; $i <= 4; $i++) {
//     if($i == 3) {
//          break; 
//     }
//     echo $i, "\n";
//     // 0,1,2
// }

//continue
for($i = 0; $i <= 4; $i ++) {
    if($i == 3) {
        continue;
    }
    echo$i. "\n";
    //0,1,2,4
}

//nest(cf. City nest)
for($i = 0; $i <= 2; $i ++) {
    for($j = 0; $j <= 2; $j ++) {
        echo $i. '-'. $j. "\n";
    }
}

?>

<?php 
$arr = [2, 4, 6, 8, 10];
$sum = 0;

for ($i = 0; $i <= 4; $i++) {
    echo $arr[$i]. "\n";
    $sum += $arr[$i];
}
echo $sum. "\n";


?>

<?php 
for($i = 0; $i <= 10; $i++) {
    if($i == 3) {
        continue;
    } else if($i == 8) {
        break;
    } else {
    echo $i. "\n";
    }
}



?>