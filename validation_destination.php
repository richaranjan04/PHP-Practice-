<html>
<head>
    <title> Validation Source</title>
</head>
<body>
    <?php
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $age=$_POST['age'];
        if(strlen($name)<6)
        {
            echo "user name too short";
        }
        elseif(!is_numeric($age))
        {
            echo "only digit is allowed";
        }
        else
        {
            echo "login successful";
        }
    }
    else
    {
        echo "form not submitted";
    }
    
    ?>
</body>
</html>