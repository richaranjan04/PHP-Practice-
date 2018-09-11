 <html>
<head>
     <title> Break Statement </title>
  
</head>
<body>
    <?php
    for($val=0;$val<20;$val++)
    {
        if($val==15)  //for values greater than 15 the loop will break
        {
            break;
        }
        echo "{$val}";
        echo "<br />";
    }
    ?>
</body>
</html>