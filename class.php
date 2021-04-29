<?php 
// classの便利なところ
// 一度定義してしまえば、再利用しまくれるところ
// PC操作でいうコピペの元となるもの、コピペして貼り付けたものがinstance、といった理解でOK

?>


<?php 
// プロパティ: class内で定義されたvariable 
//プロパティ-アクセス修飾子：アクセス範囲の決定 public, protected, private (Kotlinではinternalがあった)
// Kotlinを書いていると、これはよく出てくるやつ
// public: どこからでもアクセスOK
// protected: class自身、継承したclass、親クラスからのみアクセスOK
// private: 同じclassの中だけOK

// メソッド: クラス内の関数

class Student {
    function avg() {
        echo ((80 + 70) / 2). "\n";
    }
}

$a001 = new Student();
// instance to use in class (do something new)

$a001->avg();
// act methods to "->"


?>

<?php 
// with argument

class Student002 {
    function avg($math, $english) {
        echo(($math + $english) / 2). "\n";
    }
}

$a002 = new Student002();
$a002->avg(30, 70);
// Method

?>


<?php 
//using property

class Student003 {

    public $name;

    function avg($math, $english) {
        echo (($math + $english) /2). "\n";
    }
}

$a003 = new Student();
// instance = class
$a003->avg(80, 70);
$a003->name = 'sato';
//instance propertyには$が必要ない(instanceとして見分けがつきやすいかも)
// Propertyはinstance毎に存在しているし、instance毎にPropertyは必ず定義すること（だって使いたいから）
//でも、ことある毎に書いてると何十個も書くことになる。そこで、constructorを使う↓

echo $a003->name. "\n";


?>

<?php 
//constructor: classの中身をinstanceとして使う時にcallbackされるmethodのこと

class Student004 {
    public $name;

    public function __construct() {
    // Constructor
        $this->name = "Roland";
        // add in instance (Property)
    }
    
    function avg($math, $english){
       echo (($math + $english) / 2). ".\n";
    }
}

$a004 = new Student004();
$a004->name = "Kato";
// $a004->avg(80, 70);
echo $a004->name. "\n";

$a005 = new Student004();
echo $a005->name. "\n";

?>

<?php 
//Propertyをinstanceとして使う時、add inもできる

class Student005 {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
    
    function avg($math, $english) {
        echo (($math + $english) / 2). "\n";
    }
}

$a006 = new Student005("Roland");
// $a006->name = "Kaneko";
echo $a006->name. "\n";

$a007 = new Student005("Kato");
echo $a007->name. "\n"; 

?>

<?php 
class Student008 {
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    function calAvg($data) {
        $sum = 0;
        for($i = 0; $i < count($data); $i++) {
            $sum += $data[$i];
        }
        $avg = $sum / count($data);
        return $avg;
    } 

    function judge($avg) {
        $result = "default"; // defaultではなく、空欄でも認識される
        if(60 <= $avg) {
            $result = "passed";
        } else {
            $result = "failed";
        }
        return $result;
    }

}

$a008 = new Student008("Sato");
$data = [70, 65, 50, 90 ,30];
$avg = $a008->calAvg($data);
$result = $a008->judge($avg);

echo count($data). "\n";
echo $a008->name. "\n";
echo $avg. "\n";
echo $result. "\n";

?>