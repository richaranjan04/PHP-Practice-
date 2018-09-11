<html>
<head>
    <title> URL Encode Method</title>
    <!-- It encodes the link: http://localhost/url_destination.php?%20hobbies=Reading%20and%20coding by adding special characters-->
</head>
<body>
    <?php
    $hobbies="Reading and coding";
    ?>
    <a href="url_destination.php? hobbies=<?php echo $hobbies; ?>"> Destination <a/>
</body>
</html>