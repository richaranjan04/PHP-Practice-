<html>
<head>
    <title> Form Source </title>
</head>
<body>
    
     <form action="form_destination.php" method="post">
         <!--ACTION gives the destination of the data collected in the form to be sent and METHOD implies that as we are using a form and so the method should be 'POST' and we use 'POST' as a global variable instead of 'GET'. -->
         NAME: <input type="text" name="name" />
         <br /> <br /> 
         AGE:&nbsp;&nbsp;&nbsp;<input type="text" name="age" />
         <br /> <br /> 
         GENDER:&nbsp;MALE<input type="radio" name="gender" value="male"/>
               FEMALE<input type="radio" name="gender" value="female"/>
          <br /> <br /> 
          EMAIL:&nbsp;<input type="text" name="email"/>
          <br /> <br /> 
          <input type="submit" name="submit" />
        </form>
</body>
</html>