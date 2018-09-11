<html>
<head>
    <title> string-3</title>
</head>
<body>
    <?php 
    $msg="PHP is easy till now:)";
    echo $msg;
    echo"<br />";
    echo strstr($msg,"easy");  //string in string
    echo"<br />";
    echo strpos($msg,"easy");  //First occurence of the word 'easy'
    echo"<br />";
    echo strchr($msg,"i");  //First occurence of character 'i'
    
    ?>
</body>
</html>