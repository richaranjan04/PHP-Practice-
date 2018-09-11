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
    $sql="SELECT roll_no , name ,";
    $sql.="datediff(now(),dob)/365 as age,";
    $sql.="gender,phone_no FROM info";
    
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
             
        
            if($key=='age')
            {
                $val=round($val,0);
            }
            echo ucfirst($key)," :$val <br /";
        
            }
        echo "<br /><hr > <br />";
    }
    mysqli_free_result($res);
    ?>
</body>
</html>
<?php
    mysqli_close($conn);
?>
