<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $t=date("H");
    if($t<"10"){
        echo "Have a Good Day";
    }elseif($t<20){
        echo"Not A Good Day";
    }else{
        echo "Have a Good Night";
    }
    
//switch
$favco="rpo";
switch($favco){
    case "red":
      echo "Your favourate color is red !";
      break;
      case "blue":
        echo "your favorate colour is blue";
        break;
        default:
        echo"no faouvatre";  
}

    ?>
</body>
</html>