<html>
<head>
    <title> Relational Operator</title>
</head>
<body>
    <?php 
    $x=15;
    $y=10;
    $z="15";
    if($x==$y)
    {
        echo "The numbers are equal";
    }
    if($x!=$y)
    {
        echo "The numbers are unqual";
        echo "<br />";
    }
    if($x<$y)
    {
        echo "x is less than y";
        echo "<br />";
    }
    else
    {
        echo "y is less than x";
        echo "<br />";
    }
        if($x==$z)
    {
        echo "The numbers are equal";
            echo "<br />";
    }
    if($x===$z)
    {
        echo "The numbers are equal and of SAME TYPE";
        echo "<br />";
    }
    ?>
</body>
</html>