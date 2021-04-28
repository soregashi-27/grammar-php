<?php 
// $age = 22;

// if($age >= 20) {
//     echo("adult")
// ;}

$age = 18;
if($age >= 20) {
    echo("adult"); 
} else {
    echo("child");
}
?>

<?php 

$age = 0;

if($age >= 20) {
    echo("adult");
} else if($age == 0) {
    echo("baby");
} else {
    echo("child");
} 
?>

<?php 
// $age = 10;
// $age = 21;
// $age = 32;
// $age = 43;
// $age = 5;

//n歳未満はこう書く→ < n

if($age >= 10 && $age <= 20 ) {
    echo("10代");
} else if($age >= 20 && $age <= 30) {
    echo("20代");
} else if($age >= 30 && $age <= 40 ) {
    echo('30代');
} else {
    echo('それ以外');
}


?>