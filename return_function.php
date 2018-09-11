<html>
<head>
    <title> return statement </title>
</head>
<body>
    <?php
    function hypo($base,$per)
    {
        return sqrt($base*$base+$per*$per);
    }
    echo "Hypotenous: ". hypo(12,5);
    ?>
</body>
</html>
