<html>
<head>
    <title> Array finctions</title>
</head>
<body>
    <?php 
    $arr=array(2,3,6,90,213,45);
    echo "Max num of elements in the array : ".max($arr);
    echo"<br />";
    echo"Minumym num of the array :".min($arr);
    echo"<br />";
    echo "Number of elements in the array :".count($arr);
    echo"<br />";
    echo "Sorted array: ".sort($arr);  //sort function makes permanent changes in the array
    echo"<br />";
    print_r($arr);
    echo"<br />";
    echo "reverse sorted array: ".rsort($arr); //reverse sotting
    echo"<br />";
    print_r($arr);
    echo"<br />";
    $str=implode('-',$arr);  //CONVERTS ARRAY TO STRING and the '-' is just a represenattion to seperate the elements
    echo $str;
    echo"<br />";
    $vovel="A,E,I,O,U";
    print_r(explode(",",$vovel));  //EXPLODE: converts string to array and the ',' is just used because it has been used in the variable i.e vovel , if it would have been "A E I O U" we would have just used (" ") i.e. space.
    echo"<br />";
    echo in_array(2,$arr);
    echo"<br />";
    ?>
</body>
</html>