<?php
    $conn=mysqli_connect("localhost","root","","drive");
    $sql="SELECT * FROM `results` WHERE 1";
    $res=mysqli_query($conn,$sql);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <link rel="stylesheet" href="pop.css">
          <link rel="stylesheet" href="form.css">
          <style>
            button{
                border-radius:50px;
                font-size:1.25rem;
                border:none;
                width:120px;
                height:50px;
                color:rgb(58, 20, 5);
                font-weight:900;
                background-color:rgb(111, 255, 111);
            }
            button:hover{
                background-color:black;
                color:burlywood;
            }
            .del{
                background-color:rgb(255, 77, 77);
                color:rgb(255, 218, 218);
            }
            .crud{
                width: 300px;
                text-align:center;
            }

          </style>

</head>
<body>

          <table border="2">
        

        
                    <tr>
                        <th rowspan="3">slno.</th>
                        <th rowspan="3">name</th>
                        <th colspan="6">subjects</th>
                    </tr>
                    <tr>
                        <th rowspan="2">maths</th>
                        <th rowspan="2">hindi</th>
                        <th rowspan="2">english</th>
                        <th colspan="3">science</th>
                    </tr>
                    <tr>
                        <th>physics</th>
                        <th>chem</th>
                        <th>bio</th>
                    </tr>
                    <?php
                    while($row=mysqli_fetch_array($res))
                    {
                        echo "<tr>
                                <td>$row[slno]</td>    
                                <td>$row[name]</td>    
                                <td>$row[mat]</td>    
                                <td>$row[hin]</td>    
                                <td>$row[eng]</td>    
                                <td>$row[phy]</td>    
                                <td>$row[che]</td>    
                                <td>$row[bio]</td> 
                            </tr>";
                    }
                    
                    ?>
                                              
                </table>
                
          </br> 
</body>
</html>