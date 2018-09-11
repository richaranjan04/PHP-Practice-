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
   
?>
<html>
<head>
    <title> Querrying  Database connection</title>
</head>
<body>
    <?php
    $sql="CREATE TABLE sports";
    $sql.="( id int primary key auto_increment,";
    $sql.="name varchar(30),";
    $sql.="strength int)";
    $res=mysqli_query($conn,$sql);
    if(!$res)
    {
        die("querry failed"); 
        //"die" displays the message and ends the processing where as "echo" only displays the output
    
    }
    else
    {
        echo "table creatwed";
    }
    ?>
</body>
</html>
<?php
    mysqli_close($conn);
?>
