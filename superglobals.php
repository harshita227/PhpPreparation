<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>
    <?php
    
    $z=65;
    $x=76;
    function addition(){
        $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['z'];
    }
    addition();
    echo $y;
    #$_SERVER is a super global which holds info about headers paths and scripts
    echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
#echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
#Reqest Super global collect html form data

if($_SERVER["REQUEST_METHOD"]=="POST"){
    //collect value of input field
  $name=htmlspecialchars($_REQUEST['fname']);
  if(empty($name)){
    echo "Name is Empty";
  }else{
   echo $name;
  }
}
    ?>
</body>
</html>