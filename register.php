<?php 
if(isset($_POST['butt']))
{
    $conn=mysqli_connect("localhost","root","","drive");
    $name=$_POST["nam"];
    $phone=$_POSt["pho"];
    $email=$_POST["emal"];
    $pass=$_POST["pass"];
    $sql="insert into numbers values('$name','$email','$phone','$pass')";
    if(mysqli_query($conn,$sql))
    {
        echo "successfully regestired";
        header("location:login.php");
    }
    else
    {
        echo "<script>alert ('somethings went wrong')</script>";
    }
    
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Register</title>
          <style>
                    /*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}*/
html, body{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color:#008cba; 
    height:100%;
}
.container{ 
   height:100%;
   display:flex;
   align-items:center;
   justify-content:center;
}
.content{
    background-color:white;
    width:500px;
    height:500px;
}
img{
    width: 100%;
    height: 25%;
}
.form-title{
    padding:10px 40px 0px;
}
form{
    padding:0px 40px;
}
input[type=text], [type=email]{
    border: none;
    border-bottom: 1px solid black;
    outline:none;
    width:100%;
    margin: 8px 0;
    padding:10px 0;
}
input[type=number]{
    border: none;
    border-bottom: 1px solid black;
    outline:none;
    margin: 8px 0;
    padding:5px 0;
}
input :hover {
    background-color: red;
}
select{
    border: none;
    border-bottom: 1px solid black;
    outline:none;
    margin: 8px 0;
    padding:5px 0;
    width:50%;
}
.beside{
    display:flex;  
    justify-content: space-between;
}
.button{
    color:#ffffff;
    background-color: #4caf50;
    height:40px;
    width:25%;
    margin-top:15px;
    cursor: pointer;
    border:none;
    border-radius:2%;
    outline:none;
    text-align:center;
    font-size:16px;
    text-decoration:none;
    -webkit-transition-duration:0.4s;
    transition-duration:0.4s;
}
.button:hover{
    background-color:#333333;
}
          </style>
</head>
<body>
          <div class="container">
                    <div class="content">
                       <img src="reg.png" alt="header-image" class="cld-responsive">
                            <h1 class="form-title">Register Here</h1>
                            <form action="register.php" method="post">
                               <input name="nam" type="text" placeholder="NAME">
                            <div class="beside">
                                <input name="pho" type="number" placeholder="PHONE NUMBER">
                        
                            </div>
                                <input name="emal" type="email" placeholder="EMAIL ADDRESS" autocomplete="false">
                                <input name="pass" type="password" placeholder="password" autocomplete="false"><br>
                                <input name="butt" class="button" value="submit" type="submit">
                            </form>
                        </div>
                 </div>
                  
</body>
</html>