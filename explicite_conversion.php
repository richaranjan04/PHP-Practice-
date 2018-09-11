<html>
<head>
    <title> EXPLICITE CONVERSION</title>
</head>
<body>
    <?php
    $var="45";            //string type
    settype($var,"integer");
    echo $var;  //simply value 45 is printed
    echo"<br />";
    echo gettype($var); //GETTYPE() function is the only method to know the exact data type of the variable.
    echo"<br />";
    $num=99;  
    echo gettype($num);
    echo"<br />";//integer
    settype($num,"string");  //Conversion to string
    echo gettype($num);
    echo"<br />";
    ?>
</body>
</html>