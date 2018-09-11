<html>
<head>
    <title> scope of variable </title>
</head>
<body>
    <?php
     $msg="good morning";
    function greet()
    {
        global $msg;
        $msg="good night";
        echo"{$msg}";
        echo "<br />";
    }
    echo "{$msg}";
    echo "<br />";
    greet();
    /*echo"{$msg}"; this will show 'good morning' not night even though we have called the function outside.
    For this to happen we need to define the variable"GLOBAL".*/    
    echo"{$msg}";
    ?>
</body>
</html>