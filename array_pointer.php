 <html>
<head>
     <title> Array Pointer </title>
  
</head>
<body>
    <?php
    $arr=array(11,7,9,5,15,32,16);
    echo current($arr);  //Displaye the first element of array
    echo "<br />";
    next($arr); //Takes the pointer from first element to next element.
    echo current($arr); 
    echo "<br />";
    end($arr); //Takes the pointer from last element of the array.
    echo current($arr);  
    echo "<br />";
    reset($arr);  //Brings to the first element of the array
    echo current($arr);  
    echo "<br />";
    while(current($arr)!=null)  //used to print all elements of the array 
    {
        echo current($arr);
        echo "<br />";
        next($arr);
        
    }
    
    ?>
</body>
</html>