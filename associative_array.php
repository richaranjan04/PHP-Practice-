<html>
<head>
    <title> Associative arrays</title>  
    //ASSOCIATIVE ARRAY :There is a key value relationship b/w the key value nad the corrosponding value.
</head>
<body>
    <?php 
$arr=array("name"=>"Richa","email"=>"richablair04@gmail.com");
    echo "name :".$arr["name"];
    echo "<br />";
    echo "E-mail ID:".$arr["email"];
    echo "<br />";
$myarr=array(array("name"=>"Richa","email"=>"richablair04@gmail.com"),array("name"=>"harsh","email"=>"harshgrover2016@vitstudent.ac.in"));
    echo "Name: ".$myarr[0]["name"];
     echo "<br />";
    echo $myarr[1]["email"];
     echo "<br />";
    echo $myarr[1]["name"];
     echo "<br />";    
?>
</body>
</html>