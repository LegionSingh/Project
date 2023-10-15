<?php
if(isset($_POST["insert"]))
{
          $conn=mysqli_connect("localhost","root","","form");
          $firstname=$_POST["t1"];
          $middlename=$_POST["t2"];
          $lastname=$_POST["t3"];
          $fathername=$_POST["t4"];
          $courses=$_POST["t5"];
          $gender=$_POST["t6"];
          $phone=$_POST["t7"];
          $address=$_POST["t8"];
          $email=$_POST["t9"];
          $sql="insert into student value('','$firstname','$middlename','$lastname','$fathername','$courses','$gender',$phone,'$address','$email','')";


          if(mysqli_query($conn,$sql))
          {
                  
                    echo "<script>alert('data stored in the database')</script>";
          }
          else{
                    echo "something went wrong"."<br>";
                    echo mysqli_error($conn);
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
                    .container{
                              
                              background-color: lightblue;
                              }
                              <style>
body{
font-family:Calibri, Helvetica, sans-serif;
background-color: pink;
}
.container{
padding: 50px;
background-color: lightblue;
}
input[type=text],input[type=password],input[type=number],select,textarea{
width: 100%;
padding: 15px;
margin: 5px 0 22px 0;
display:inline-block;
border:none;
background:#f1f1f1;
}
input[type=submit]{
  background-color: burlywood;
  color: black;
  font-size:1.5rem;
  font-family: sans-serif;
  width:120px;
  height: 40px;
  display: flex;
  justify-content:center;
  align-items: center;

}
input[type=text]:focus,input[type=password]:focus{
background-color:orange;
outline:none;
}
div{
padding:10px 0;
}
hr{
border:1px solid #f1f1f1;
margin-bottom: 25px;
}
.registerbtn{
background-color:#4CAF50;
color:white;
padding:16px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
opacity: 0.9;
} 
.registerbtn:hover{
opacity: 1;
}
          
          </style>
</head>
<body style="background-color:skyblue  ;">
          
  <div class="nav-links" id="navlinks">
    <ul>
      <li><a href="form.html">HOME</a></li>
      <li><a href="about.html">ABOUT US</a></li>
      
      <li><a href="gallary.html">GALLARY</a></li>
      <li><a href="swaraj.html">FORM</a></li>
      <li><a href="result.html">RESULTS</a></li>
      
      
      </ul></div>
<br>
<br>
<form style="margin-left: 50px;" action="#" method="POST">
          <div >
                    <center><h1><u>Registration Form</u></h1></center>
<label>Firstname</label>
<input type="text" name="t1"size="15"/><br><br>
<lable>Middlename:</lable>
<input type="text"name="t2"size="15"/><br><br>
<lable>lastname:</label>
<input type="text"name="t3"size="15"/><br><br>
<lable>Father name:</label>
<input type="text"name="t4"size="15"/><br><br>
<label>
course:
</label>
<select name="t5">
<option value="course"></option>
<option value="BCA">BCA</option>
<option value="BBA">BBA</option>
<option value="B.TECH">B.TECH</option>
<option value="MBA">MBA</option>
<option value="MCA">MCA</option>
<option value="M.TECH">M.TECH</option>
</select>
<br>
<br>
<label>
Gender:
</label><br>
<input type="radio"name="t6" value="male"/>male<br>
<input type="radio"name="t6" value="female"/>female<br>
<input type="radio"name="t6" value="other"/>other
<br>
<br>
<label>
Phone
</label>
<input type="text" name="country code" value="+91" size="2" disabled/>
<input type="number" name="t7"size="10"/><br><br>
Address
<br>
<textarea cols="80" rows="5" value="address" name="t8">
</textarea>
<br><br>
Email:
<input type="email" id="email" name="t9"/><br>
<br><br>
<label>
          Hobies:
          </label><br>
          <input type="checkbox"name="sub1[]" value="sports">sports<br>
          <input type="checkbox"name="sub1[]" value="cultural activities">cultural activities<br>
          <input type="checkbox"name="sub1[]" value="social activities">social activities
          <br>
          <br>
          



<input type="submit" value="Submit" name="insert">
</form>
          
</body>
</html>