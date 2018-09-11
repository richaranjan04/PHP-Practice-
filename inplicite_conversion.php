<html>
<head>
    <title>IMPLICITE TYPE CONVERSION </title> 
    //conversion automatically converted by PHP
</head>
<body>
    <?php
    $var="100"; //STRING VALUE 100 
    echo gettype($var);
    echo"<br />";
    $var=$var+10; 
    //PHP automatically understands the string is num and adds 10 to it.
    echo $var;
    echo"<br />";
    echo gettype($var); //OUTPUT is INT.(since addition operation has been performed and it is recognized as integer),So the data type changes
    echo"<br />";
    $num=2014;
    $str="the current year is : ". $num;
    echo $str;
    echo"<br />";
    echo gettype($str);
    //Here the integer value 2014 is automatically converted to string type.
    echo"<br />";
    ?>
</body>
</html>