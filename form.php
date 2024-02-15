<!doctype html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>My test page</title>
    <link rel="stylesheet" href="demo.css">   
  </head>
  <body>
    <form action="form.php" method="Post">
    <label for = "username" >Enter your name</label>
        <input type ="text" name ="username" id="username" placeholder="username"><br>
        <label for = "age" >Age</label>
        <input type ="text" name ="age" id="age" placeholder="age"><br>
         <input type ="submit" name ="Submit"><br>
        Welcome <?php 
        echo $_POST["username"];
         ?><br>
        Your age is: <?php echo $_POST["age"]; ?>

</body>
</html>
