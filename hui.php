<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <script>
          function ch(){
                    a=document.getElementById("t1").value
                    b=document.getElementById("t2").value
                    c=parseInt(a)+parseInt(b)
                    document.getElementById("d1").innerHTML=c

          }
          </script>
          <style>
          #d1{background-color: yellow;}
          </style>
</head>

<body>
          <div id="d1">Welcome To My World</div>
          <input type="text" id="t1">
          <input type="text" id="t2">
          <input type="button" onclick="ch()">
          
</body>
</html>