<html>
<head>
    <title> Greatest of 3 numbers</title>
</head>
<body>
    <?php 
    $x=23;
    $y=10;
    $z=55;
    if(($x>$y) &&($x>$z))
    {
       echo " {$x} is the greatest of the 3 numbers"; 
    }
    elseif(($y>$x)&&($y>$z))
    {
        echo "{$y} is the greatest of the 3 numbers";
    }
    else
    {
        echo"{$z} is the greatest";
    }
        
    ?>
</body>
</html>
