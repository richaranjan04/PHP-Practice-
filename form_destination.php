<html>
<head>
    <title> FORM DESTINATION</title>
</head>
<body>
    <?php
    if(isset($_POST['name']))
    {
        echo "name: {$_POST ['name']}";
            echo"<br />";
        echo "age: {$_POST ['age']}";
            echo"<br />";
        echo "gender: {$_POST ['gender']}";
            echo"<br />";
        echo "email: {$_POST ['email']}";
            echo"<br />";
    }
    else
    {
        echo "form not submitted !!";
    }
    ?>
</body>
</html>