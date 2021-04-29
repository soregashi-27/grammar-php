<?php 

// function sayHello() {
//     echo "Hello php". "\n";
// }
// sayHello();
// アンダースコアがなくても認識してくれる
//laravelのvariableの命名を参考に見てみる

// $sayHello = function() {
//     echo "Hello php!!". "\n";
// };
// $sayHello();

?>

<?php 
//function with argument

// function sayHello($greeting) {
//     echo $greeting. "\n";
// };
// sayHello("Good Morning!!!");
// sayHello("Good Coding!!!");


// function cal($x) {
//     echo($x * 3). "\n";
// };
// cal(6);


// function cal($x, $y) {
//     echo($x / $y). "\n";
// };
// cal(6, 3);

// with return
// function cal($x, $y) {
//     return $x / $y;
// };

// $result = cal(6, 3);
//  echo $result. "\n";


?>

<?php 
function cal($a, $b, $c) {
    return ($a + $b + $c ) / 3;
};

$result = cal(9, 4, 2);
echo $result. "\n";


?>