<html>
<head>
    <title> Source Page</title>
   <!-- Pass value of one script in PHP to another script.(USED TO MAKE DYNAMIC WEBSITE) -->
</head>
<body>
    <?php
    $name="Richa";
    $age=21;
    $email="richabelair04@gmail.com";
    $str="name={$name}&age={$age}&email={$email}"
    ?>
    <a href="destination.php? <?php echo $str; ?>">Destination <a/>
</body>
</html>