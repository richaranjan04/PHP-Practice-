 <html>
<head>
     <title> For each loop with associative array </title>
</head>
<body>
    <?php
   $arr=array(array("name"=>"richaranjan","country"=>"india","rank"=>2),array("name"=>"ritika ranjan","country"=>"pakistan","rank"=>1));
    foreach($arr as $obj)
            {
                foreach($obj as $attribute=>$info)
                {
                    echo "<b>{$attribute} </b>: {$info}";
                    echo "<br />";
                }
            }
    ?>
</body>
</html>