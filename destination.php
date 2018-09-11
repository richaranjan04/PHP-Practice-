<html>
<head>
    <title> Destination Page</title>
</head>
<body>
    <?php
    //Here 'GET' is a SUPER GLOBAL and an associative array.
    $name=$_GET['name'];
    $age=$_GET['age'];
    $email=$_GET['email'];
    echo"name: {$name} <br />";
    echo"age {$age} <br />";
    echo"email: {$email} <br />";
    ?>
</body>
</html>