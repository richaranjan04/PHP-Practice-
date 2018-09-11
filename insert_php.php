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
    $sql="INSERT INTO info".
        " (roll_no,name,gender,phone_no,dob)".
        "VALUES(23,'ranjan','f','555555555','1991/05/20' )";
    $res=mysqli_query($conn,$sql);
    if(!$res)
    {
        die("querry failed"); 
        //"die" displays the message and ends the processing where as "echo" only displays the output
    
    }
    else
    {
        echo "Values added";
    }
    ?>
    
</body>
</html>
<?php
    mysqli_close($conn);
    // for UPDATE,DELETE A TABLE AND REMOVE A TABLE USING PHP watch videos 64,65,66.
?>
