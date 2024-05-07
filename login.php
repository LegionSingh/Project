<?php
$conn=mysqli_connect("localhost","root","","drive");
session_start();
if(isset($_POST["sub"]))
{
    $name=$_POST["user"];
    $pass=$_POST["pass"];
    $sql="select * from numbers where name='$name' and password=$pass";
    $req=mysqli_query($conn,$sql);
    $row=mysqli_fetch_row($req);
   if($row>0)
   {
    $_SESSION["name"]=$row[0];
    header("location:form.php");
    }
    else
    {
        echo "<script>alert('wrong id or password')</script>";
    }   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>login</title>
          <link rel="stylesheet" href="login.css">
</head>
<body>
          <div class="container">
                    <h1 class="title">Admin Login</h1>
                    <div class="card">
                        <form action="#" method="post">
                            <input name="user" type="text" placeholder="Username">
                            <input name="pass" type="password" placeholder="Password">
                            <input type="submit" value="submit" name="sub" class="login-button">

                            <div class="buttons">
                              <a href="register.html" class="register-link">Register</a>
                            </div>
                        </form>
                    </div>
                </div>    
</body>
</html>