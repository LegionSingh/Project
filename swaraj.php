<?php
if(isset($_POST['sub'])){
  $con=mysqli_connect("localhost","root","","form");
  $fname=$_POST["firstname"];
  $mname=$_POST["middlename"];
  $lname=$_POST["lastname"];
  $fthname=$_POST["fathername"];
  $course=$_POST["course"];
  $gender=$_POST["ma"];
  $phone=$_POST["phone"];
  $address=$_POST["address"];
  $email=$_POST["email"];
  $sql="INSERT INTO `student`(`slno`, `fname`, `mname`, `lname`, `fthname`, 
  `course`, `gender`, `phno`, `address`, `email`) 
  VALUES ('','$fname','$mname','$lname','$fthname',
  '$course','$gender','$phone','$address','$email')";
  $res=mysqli_query($con,$sql);
  if($res){
    echo "<script>alert('You are Registered!!');
      window.location.href='form.php';
    </script>";

  }
}


?>

<html>
<head>
<title>
Registration form
</title>
<link rel="stylesheet" href="form.css">
         <style> 
         body{
          width:100%;
          height:100vh;
          background:url("img2.jpg");
          background-position:center;
          background-size:cover;
         }
         .frm{
          margin-top:20px;
          margin-bottom:20px;
          width:100%;
          display:flex;
          justify-content: center;
          align-items: center;
         }
         form{
          border-radius:50px;
          padding: 5rem;
          width: 35%;
          height:fit-content;
          background-color:rgba(255, 255, 255, 0.7);
          backdrop-filter:blur(5px);
          -webkit-backdrop-filter:blur(5px);
         }
         .val{
          display: flex;
          justify-content: center;
          align-items: center;
          width: auto;
          height:60px;
          font-size: 1rem;
          margin-bottom:0.5rem;
          color:black;
         }
         .val label{
          width:30%;
          font-size: 1.3rem;
          color:green;
          font-weight:bolder;
         }
         input[type="checkbox"],[type="radio"]{
          margin-left: 2%;
          margin-right: 2%;
         }
         input[type="text"],input[type="password"],input[type="number"],input[type="email"],textarea,select,.rad{
          width:50%;
          height:38px;
          background-color:transparent;
          outline:none;
          font-size:1rem;
          border-radius:10px;
         }
         input[type="text"],input[type="password"],select,input,textarea{
          border:2px solid black; 
          padding-left:20px;
         }
         input[type="submit"]{
            width:300px;
            height:50px;
            font-size:1.25rem;
            padding:0;
            border-radius:50px;
            font-weight:700;
            border:none;
            background-color:burlywood;
            color:black;
         }
         input{
          
          font-size:1.1rem;
          font-weight:bolder;
         }
      
        #navlinks{
          background-color:rgba(255, 255, 255, 0.5);
          backdrop-filter:blur(5px);
          -webkit-backdrop-filter:blur(5px);
          
        }
        #navlinks a{
          font-size:1.5rem;
          font-weight:bolder;
        }
        .rad{
          font-weight:bolder;
        }
          </style>
          
</head>
<body >
          
  <div class="nav-links" id="navlinks">
    <ul>
      <li><a href="form.php">HOME</a></li>
      <li><a href="about.php">ABOUT US</a></li>
      
      <li><a href="gallary.php">GALLARY</a></li>
      <li><a href="swaraj.php">FORM</a></li>
      <li><a href="result.php">RESULTS</a></li>
      
      
      </ul>
    </div>


<div class="frm">
    <form style="margin-left: 50px;" method="post" action="#">
                        <center><h1 style="color:tomato;"><u>Registration Form</u></h1></center>
                        <br>
                        
    <div class="val">
      <label>First Name</label>
      <input type="text" name="firstname"size="15"/>
    </div>
    <div class="val">
      <label>Middle Name</label>
      <input type="text"name="middlename"size="15"/>
    </div>
    <div class="val">
      <label>Last Name</label>
      <input type="text"name="lastname"size="15"/>
    </div>
    <div class="val">
      <label>Father's Name</label>
      <input type="text"name="fathername"size="15"/>
    </div>
    <div class="val">
      <label>Course</label>
        <select name="course">
        <option value="course"></option>
        <option value="BCA">BCA</option>
        <option value="BBA">BBA</option>
        <option value="B.TECH">B.TECH</option>
        <option value="MBA">MBA</option>
        <option value="MCA">MCA</option>
        <option value="M.TECH">M.TECH</option>
        </select>
    </div>


    <div class="val">
      <label>
      Gender
      </label>
      <div class="rad">
        <input type="radio" name="ma" value="a"/>Male
        <input type="radio" name="ma" value="b"/>Female
        <input type="radio" name="ma" value="c"/>Other
      </div>
    </div>
    <div class="val">
    <label>
    Phone
    </label>
    <input type="number" name="phone" max="9999999999" min="1000000000" />
    </div>
    <div class="val">
      <label for="">
        Address
      </label>
      <textarea cols="80" rows="3" value="address" name="address">
      </textarea>
    </div>

    <div class="val">
      <label for="">
          Email
        </label>
      <input type="email" id="email" name="email"/>
    </div>
              
              
    <div class="val">
    <a href="king.html"><input type="submit" value="Submit" name="sub"/></a>
    </div>
</form>
</div>
</body>
</html>




 