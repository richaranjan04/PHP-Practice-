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
    $sql="SELECT *FROM info ";
    $res=mysqli_query($conn,$sql);
    if(!$res)
    {
        die("querry failed"); 
        //"die" displays the message and ends the processing where as "echo" only displays the output
    
    }
    while($row=mysqli_fetch_assoc($res))
    //ASSOC : Gives the output in the form of ASSOCIATIVE ARRAY
    //one row is copied at a time i.e. per iteration.
    {
        foreach($row as $key=>$val)
        //FOREACH loop os the best loop to use for associative array.
        {
            echo "{$key}: "."{$val }<br />";
        }
        echo "<br /><hr > <br />";
    }
    ?>
</body>
</html>
<?php
    mysqli_close($conn);
?>
