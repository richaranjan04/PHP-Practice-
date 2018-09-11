<html>
<head>
    <title> If-Elseif</title>
</head>
<body>
    <?php
    $x=2;
    $y=3;
    if($x>$y)
    {
        echo"{$x} is greater than {$y}";
        echo "<br />";
    }
    elseif($x<$y)
    {
        echo"{$x} is less than {$y}";
    }
    else
    {
        echo "Both the values are equal";
    }
    
    ?>
</body>
</html>