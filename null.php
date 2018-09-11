<html>
<head>
    <title> NULL VALUES AND EMPTY METHOD </title>
</head>
<body>
    <?php
    $var=null;
    echo $var;
    echo"<br />";
    echo "IS NULL? ". is_null($var); //checks value of variable is null or not
    echo"<br />";
    echo "IS EMPTY? " .empty($var);   //checks value of variable is null or 0 ; if it is true=1 else =0.
    ?>
</body>
</html>