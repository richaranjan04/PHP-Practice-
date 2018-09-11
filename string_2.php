<html>
<head>
    <title> STRING-2</title>
</head>
<body>
    <?php 
    $msg="time is 5:30PM";
    echo $msg;
    echo"<br />";
    echo strlen($msg);
    echo"<br />";
    echo str_replace("time","good time",$msg);
    echo"<br />";
    echo str_repeat($msg,2);
    echo"<br />";
    echo substr($msg,5,7);    //Index of characters in a string start from 0.
    ?>
</body>
</html>