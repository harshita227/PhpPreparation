<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$x="Hello world";
$y=5435.7;
$z="true<br>";
$bang=array("volue",1,"jhgf");
var_dump($bang);
echo "$x <br>";
var_dump($z);
//object data type
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();

  
 // $X="HEllo";
 $X=null;
  var_dump($X);
?>
</body>
</html>