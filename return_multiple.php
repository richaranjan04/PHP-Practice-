<html>
<head>
    <title> return multiple values from function </title>
</head>
<body>
    <?php
     function division($divd,$divs)
     {
     $quotient=round($divd/$divs,1);
     $remainder=$divd%$divs;
     return array($quotient,$remainder);
     }
     $myarr=division(63,5);
     echo "QUOTIENT :".$myarr[0];
     echo "remainder :".$myarr[1];
    ?>
</body>
</html>