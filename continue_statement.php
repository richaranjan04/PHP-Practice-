 <html>
<head>
     <title> Continue Statement </title>
    //used to skip iteration of loop
</head>
<body>
    <?php
    $arr=array(12,13,45,"richa",22,"ritika");
    foreach($arr as $val)
    {
        if(gettype($val)=="string")
        {
            continue; //whenever the value in array is string ;that value is not printed but loop continues to next variable.
        }
        echo $val;
        echo "<br />";
    }
    ?>
</body>
</html>