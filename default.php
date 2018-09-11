<html>
<head>
    <title> Default</title>
</head>
<body>
    <?php
     function message($name="richa")
     {
         echo "hello {$name}";
     }
    message("ritika");
    //"RITIKA" is the output and not "RICHA" when we call function message. Implies that "RICHA" is the DEFAULT value if noyhing is passed in the function call.
    ?>
</body>
</html>