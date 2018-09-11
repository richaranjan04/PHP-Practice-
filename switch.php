<html>
<head>
    <title> Switch statement </title>
</head>
<body>
    <?php 
    $x=12;
    $y=10;
    $op='%';   
    
    /*
    sall the switch case operation are character type so we define a randon variable '@';
    now suppose addition has to be performed then '@' is replaces with '+' else the output will be invalid because no operation is defined bor the '@' symbol.*/
    
    switch($op)
    {
        case '+':
            echo $x+$y;
            break;
        case '-':
            echo $x-$y;
            break;
        case '*':
            echo $x*$y;
            break;
        case '/':
            echo $x/$y;
            break;
        case '%':
            echo $x%$y;
            break;
        default:
            echo" Invalid";
    }
    ?>
</body>
</html>
