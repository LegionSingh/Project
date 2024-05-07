  <?php
            if(isset($_POST["sub"])){
                      $conn=mysqli_connect("localhost","root","","drive");
                      $name=$_POST["name"];
                      $vl1=$_POST["mat"];
                      $vl2=$_POST["hin"];
                      $vl3=$_POST["eng"];
                      $vl4=$_POST["phy"];
                      $vl5=$_POST["che"];
                      $vl6=$_POST["bio"];
                      $sql="INSERT INTO `results`(`slno`, `name`, `mat`, `hin`, `eng`, `phy`, `che`, `bio`) VALUES ('','$name','$vl1','$vl2','$vl3','$vl4','$vl5','$vl6')";
                      $req=mysqli_query($conn,$sql);
                      if($req){
                                echo "<script>alert('Result Stored for $name !');</script>";
                      }
                      else{
                                echo "<script>alert('Result can't be stored right now!');</script>";
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
                                background:linear-gradient(90deg,burlywood,aqua);
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
                                color:rgb(17, 86, 190)
                      }
            </style>
  </head>
  <body>
  <form action="#" method="post">
                      <h2>Result Entry</h2>
                      <div class="val">
                        <label for="name">Name</label>
                        <input id="name" type="text" name="name" placeholder="Name">
                      </div>
                      <div class="val">
                        <label for="mat">Math</label>
                        <input id="mat" type="number" name="mat" placeholder="Maths">
                      </div>
                      <div class="val">
                        <label for="hin">Hindi</label>
                        <input id="hin" type="number" name="hin" placeholder="Hindi">
                      </div>
                      <div class="val">
                        <label for="eng">English</label>
                        <input id="eng" type="number" name="eng" placeholder="English">
                      </div>
                      <div class="val">
                        <label for="phy">Physics</label>
                        <input id="phy" type="number" name="phy" placeholder="Physics">
                      </div>
                      <div class="val">
                        <label for="che">Chemistry</label>
                        <input id="che" type="number" name="che" placeholder="Chemistry">
                      </div>
                      <div class="val">
                        <label for="bio">Biology</label>
                        <input id="bio" type="number" name="bio" placeholder="Biology">
                      </div>
                      <input type="submit" value="Submit" name="sub">
            </form>
  </body>
  </html>
