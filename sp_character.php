<html>
<head>
    <title>SPECIAL CHARACTERS </title>
</head>
<body>
    <a href="http://www.google.com"> DIRECT </a>
    <!-- but if we write <DIRECT> like this then it will confuse it a html tag(which is actually not ) and no output will be displayed 
    Hence; Here we can use PHP like:
    <?php
    $str="<DIRECT>";
    echo htmlspecialchars($str);
    ?>
    -->
</body>
</html>