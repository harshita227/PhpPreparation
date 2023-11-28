<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo(pi()."<br>");
    echo(sqrt(4));
    echo(min(0,1,-1,65,871)."<br>");
    echo(max(0,1,-1,65,871));
    echo(abs(-9)."<br>");
    echo(round(0.87)."<br>");
    echo(round(0.2));
    echo(rand(10,100));
  //define("greeting","www.hariba");
  //echo greeting;
  const Gtra="laka";
  echo Gtra;
  define("cars",["volvo","BMw","TOYOTA"]);
  echo "<br>";
  ECHO cars[2];
  define("greeting","www.hariba");
  function myTst(){
    echo greeting;
  }
  myTst();

 

    ?>
</body>
</html>