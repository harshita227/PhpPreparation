<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function addNumbers(int $a,int $b){
        return $a+$b;
    }
    echo addNumbers(5,5);
   $cars=array("volvo","bmw");
   $arrLength=count($cars);
   for($x=0;$x<$arrLength;$x++){
    echo $cars[$x]."<br>";
   }
   $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

   foreach($age as $x=>$x_value){
    echo "key=".$x .",value=".$x_value;
   }
   $cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }
  
   ?>
</body>
</html>