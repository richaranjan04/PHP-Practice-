<html>
<head>
    <title> cookies </title>
</head>
<body>
    <?php
    $name="message";
    $value="have agood day";
    $expire=time()+ 60*60*24*7; 
    //calculate time from:jan 1-1970 to current time(in SECONDS)
    
    //60 sec*60min*24hrs*7 days=i.e. equal to 1 week time the cookie will be active
    
    setcookie($name,$value,$expire);
    //setcookie is the function used to define cookies.It has 3 parameters
    ?>
    
    <!-- to view a cookie go to google setttings-> advance setting->content setting-> cookie-> type "localhost"->you can view all details about the cookie named "message" created-->
    
</body>
</html>