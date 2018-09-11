<html>
<head>
    <title> Function-1 </title>
</head>
<body>
    <?php
    function hello_world()
    {
        echo "hello world";
        echo "<br />";
    }
    hello_world();
    function power($power)
    {
        echo "2 to the power {$power} is : ".pow(2,$power);
    }
    power(8);
    ?>
</body>
</html>