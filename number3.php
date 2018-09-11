 <html>
<head>
     <title> Number-3 </title>
</head>
<body>
    <?php
    $num=15.4523;
    echo round($num,2);
    echo "<br />";
    echo ceil($num);   //gives next highest number
    echo "<br />";
    echo floor($num);   //next lowest number
    echo "<br />";
    echo is_int($num);   //If integer value=1 elso=0/blank
    echo "<br />";
    echo is_float($num);   //fraction
    echo "<br />";
    echo is_numeric($num);  //Value is number
    ?>
</body>
</html>