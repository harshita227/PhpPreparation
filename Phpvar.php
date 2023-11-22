<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  echo "Hello world";
    $v1="gfa";
    echo $v1;
    $color = "red";
echo "My car is  $color" . "<br>";
//global scope
$txt=5;
function myText(){
    echo"<p></p>";
}
//myText();
//echo"<p>variable x $txt</p>";
//local scope 
function myLoca(){

    static $x=9;
    echo"$x";
    $x++;
}
myLoca();
myLoca();
myLoca();
    //now we use global keyword to acces var in func
    $y=2;
    $z=4;
    function myTez(){
        $GLOBALS['z']=$GLOBALS ['y']+$GLOBALS['z'];
    }
    myTez();
    echo $z;
    ?>
    
</body>
</html>