<?php
          $conn=mysqli_connect("localhost","root","","drive");
          if(isset($_GET["slno"])){
            $slno=$_GET["slno"];
            $res_sql="SELECT * FROM results WHERE slno='$slno'";
            $res_row=mysqli_query($conn,$res_sql);
            $rs=mysqli_fetch_array($res_row);
          }
          if(isset($_POST["sub"])){
            
            $name=$_POST["name"];
            $vl1=$_POST["mat"];
            $vl2=$_POST["hin"];
            $vl3=$_POST["eng"];
            $vl4=$_POST["phy"];
            $vl5=$_POST["che"];
            $vl6=$_POST["bio"];
            
            $sql="UPDATE results set `name`='$name',mat=$vl1,hin=$vl2,eng=$vl3,phy=$vl4,che=$vl5,bio=$vl6 WHERE slno =$slno";
            $req=mysqli_query($conn,$sql);
            if($req){
                      echo "<script>alert('Result Updated for $name !');
                            windows.location.href='admin_res.php';
                      </script>";

            }
            else{
                      echo "<script>alert('Result can't be updated right now!');</script>";
            }
          }
?>


<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Result Entry</title>
          <style>
                    body{
                              background:linear-gradient(270deg,burlywood,rgb(115, 41,212));
                              width:100%;
                              height:100vh;
                              display: flex;
                              justify-content: center;
                              align-items: center;
                    }
                    form{
                              display: flex;
                              justify-content: space-evenly;
                              align-items: center;
                              flex-direction: column;
                              width:400px;
                              height: 600px;
                              background-color:rgba(255,255,255,0.3);
                              border-radius:20px;
                              padding:20px;
                              backdrop-filter: blur(10px);
                              -webkit-backdrop-filter: blur(10px);
                    }
                    input::-webkit-outer-spin-button,
                    input::-webkit-inner-spin-button{
                      -webkit-appearance: none;
                      margin: 0;
                    }
                    .val{
                      width: 100%;
                      display:flex ;
                      justify-content: flex-start;
                      padding-left: 5rem;
                    }
                    input{
                              width:50%;
                              height:40px;
                              padding-left: 20px; 
                              font-size: 1.25rem;
                              outline: none;
                              color: white;
                              border:none;
                              border-bottom: 2px solid rgb(0, 48, 121);
                              background-color: transparent;
                              transition:all 0.1s linear;
                    }
                    label{
                      width:30%;
                      font-size: 1.4rem;
                    }
                    input:focus,input:hover{
                              border: 2px solid rgb(0, 48, 121); 
                              border-radius:10px; 
                    }
                    input::placeholder{
                              color:rgb(156, 78, 25,0.55);
                              border-radius:10px;
                    }
                    input[type=submit]{
                            border:none;
                            display:flex;
                            justify-content:center;
                            align-items:center;
                            color:white; 
                            padding:0; 
                            width:150px;
                            background-color:black;
                    }
                    form h2{
                              font-size:2.2rem;
                              color:rgba(97, 60, 4, 0.788);
                    }
          </style>
</head>
<body>
          <form action="#" method="POST">
                    <h2>Result Update</h2>
                    <div class="val">
                      <label for="name">Name</label>
                      <input id="name" type="text" name="name" placeholder="Name" value="<?php
                                                                                      echo $rs['name']; ?>">
                    </div>
                    <div class="val">
                      <label for="mat">Math</label>
                      <input id="mat" type="number" name="mat" placeholder="Maths" value="<?php
                                                                                      echo $rs['mat'];  ?>">
                    </div>
                    <div class="val">
                      <label for="hin">Hindi</label>
                      <input id="hin" type="number" name="hin" placeholder="Hindi" value="<?php
                                                                                      echo $rs['hin'];  ?>">
                    </div>
                    <div class="val">
                      <label for="eng">English</label>
                      <input id="eng" type="number" name="eng" placeholder="English" value="<?php
                                                                                      echo $rs['eng'];  ?>">
                    </div>
                    <div class="val">
                      <label for="phy">Physics</label>
                      <input id="phy" type="number" name="phy" placeholder="Physics" value="<?php
                                                                                      echo $rs['phy'];  ?>">
                    </div>
                    <div class="val">
                      <label for="che">Chemistry</label>
                      <input id="che" type="number" name="che" placeholder="Chemistry" value="<?php
                                                                                      echo $rs['che'];  ?>">
                    </div>
                    <div class="val">
                      <label for="bio">Biology</label>
                      <input id="bio" type="number" name="bio" placeholder="Biology" value="<?php
                                                                                      echo $rs['bio'];  ?>">
                    </div>
                    <input type="submit" value="Submit" name="sub">
          </form>
</body>
</html>
