<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //while
    $x=1;
    while($x<=5){

        echo"The Number Of X is $x <br>";
        $x++;
    }
    //do while
    $x=3;
    do{
        echo"The Number is $x<br>";
        $x++;
    }
    while($x<=5);
    //for loop
    for($x=0;$x<=10;$x++){
        echo"THe number is $x <br>";
    }
    //for each loop
    $colors=array("red","green","blue");
    $age=array("pert"=>"1","ram"=>"2","lak"=>"3");
    foreach($colors as $values){

        echo "$values <br>";
    }
    foreach($age as $x=>$val){
        echo "$x=$val <br>";
    }
    //break 
    for($x=0;$x<=10;$x++){
        if($x==4){
            break;
        }
        echo "the number is $x <br>";
    }
    //continue
    for($x=0;$x<=10;$x++){
        if($x==4){
            continue;
        }
        echo "the number is $x <br>";
    }
    $x = 0;

    while($x < 10) {
      if ($x == 4) {
        break;
      }
      echo "The number is: $x <br>";
      $x++;
    }
    
?>
</body>
</html>