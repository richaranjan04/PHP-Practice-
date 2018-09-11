<html>
<head>
    <title> strings</title>
</head>
<body>
    <?php 
    $first="richa is my name";
    $second=" ranjan is my second name";
    $third=$first;
    echo $third;
    echo"<br />";
    $third.=$second;            //this '.=' does simultaneous concatenation and assignment of values to variable
    echo $third;
    echo "<br />";
    echo strtoupper($third);    //converts to UPPERCASE and LOWERCASE
    echo "<br />";
    echo strtolower($third);
    echo "<br />";
    echo "$first"."$second";   //concatenation of two strings
    echo "<br/>";
    echo ucwords($third);     //this statement makes the first alphabet of all the words capital Eg: "Ranjan Is My Second Name"
    echo "<br />";
    echo $third;     // this statement represents that the chnages made are not permanent but only remains till the stantement.  
    ?>
</body>
</html>