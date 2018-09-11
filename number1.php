<html>
<head>
    <title>Number-1</title>
</head>
<body>
    <?php
    $num1="25";
    $num2="10";
    echo $num1+$num2;
    echo "<br />";
    echo $num1-$num2;
    echo "<br />";
    echo $num1*$num2;
    echo "<br />";
    echo $num1%$num2;  //This gives the remainder,therefore equal to 5
    echo "<br />";
    echo $num1/$num2;
    echo "<br />";        /****IMPORTANT***/
    echo ++$num1;        //Pre-Increment operator : i.e. it first increment's the value and then passes to the echo ststement.(therefore 26)
    echo "<br />";
    echo --$num1;        //Noew the increased value is 26 and the pre-decrement operator decreases the value and then displays it i.e. 25
    echo "<br />";
    echo $num1++;        
    echo "<br />";        
    echo $num1--;
                    /*The (post) increment/decrement operator passes the value of number first and then increments or decrement's it hence  the                       output of ++num1=26 ; --num1=25 ;num1++=25 ;num1--=26 */
     ?> 
</body>
</html>