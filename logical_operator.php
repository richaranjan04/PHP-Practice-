<html>
<head>
    <title> LOGICAL OPERATOR</title>
</head>
<body>
    <?php
     $x=-6;
    $y=80;
    if(($x>0)&&($x%2==0))
    {
        echo "(AND)the number is positive and even";
        echo "<br />";
    }
    if(($y>0) || ($y%2==0))
    {
        echo "(OR)the number is positive and even";
        echo "<br />";
    }
    if(!($x<0))
    {
        echo "number is positive";
        echo "<br />";
    }
    
    ?>
</body>
</html>