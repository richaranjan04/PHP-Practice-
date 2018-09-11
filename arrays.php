<html>
<head>
    <title> Arrays</title>
</head>
<body>
    <?php
    $num=array(2,3,4,"array","richa");
    echo $num[3];
    echo "<br />";
    echo $num[0];
    echo "<br />";
    echo $num[1];
    echo "<br />";
    $num[1]=22;   //replace value at a position in an array
    echo "<br />";
    print_r($num);  //display position of elements & the value
    echo "<br />";
    $mynum=array(8,10,15,[19,23,28,30]);
    echo $mynum[3][1];
    echo "<br />";
    print_r($mynum);
    echo "<br />";
    ?>
</body>
</html>q1111