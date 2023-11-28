<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo strlen("Hello World");
    echo str_word_count("HEllo World");
    echo strrev("Hello world");
    echo strpos("Hello World","World");
    echo str_replace("World","Dolly","Hello World");

    $x = 5985;
    var_dump(is_numeric($x));
     var_dump($x);
     echo "<br>";
     $x="234.765";
     $int1=(float)$x;
     echo $int1;
    ?>
</body>
</html>