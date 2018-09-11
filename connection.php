<?php
    $host="localhost";
    $dbuser="root";
    $dbname="school";
    $pass="richa0404";
    $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
    if(mysqli_connect_errno())
    {
        die(" Connection failed".mysqli_connect_error());
        //terminates connection
    }
    else
    {
        echo"connected to database {$dbname}";
    }
?>
<html>
<head>
    <title> Database connection</title>
</head>
<body>
</body>
</html>
<?php
    mysqli_close($conn);
?>