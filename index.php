<!doctype html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Bank</title>
    <style>
      #footer
      {
        padding:20px 20px 0px 20px;
        position:fixed;
        bottom:0;
        width:100%;
        height:50px;
        background:white;
        text-align:center;
      }
    body
    {
      width:850px;
      background-image: url('bank2.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;  
      background-size: cover;
    }
    .row{
      color: rgb(2, 1, 1);
      position: absolute;
      top: 35%;
      left: 8%;
    }
    .btn{
          
      background-color:rgb(231, 29, 73);
      color:white;
      font-family: 'Courier New', Courier, monospace;
      font-weight: bold;
      border-radius: 37px;
      padding:10px;
      padding-right:20px;
      padding-left:20px;
      font-size:20px;"
      }
      .btn:hover{
          
        background-color:rgb(240, 158, 185);
        color: black;
        }
  </style>
</head>

<body>
      <?php
      include 'navbar.php';
      ?>

      <div class="container">
      <div class=" row">
        <div class="col">
          <h1 style="color:rgb(0, 0, 0);font-size: 66px;font-family: 'Courier New', Courier, monospace;font-weight: bold;">Banking System</h1>
          <h5 style="color: rgb(0, 0, 0);align-items: center;font-family: 'Courier New', Courier, monospace;font-weight: bold;font-size: 25px;">
            <pre>  A bank is a place that will lend you money <br>    if you can prove that you don’t need it.</pre>
          </h5>
        <pre>                       <button onclick="location.href='transfermoney.php'"type="button" class="btn" >Send Money</button></pre>
        
        </div>

      </div>
    </div>

      
</body>
 </html>
      
      <div id="footer" style="background-color:rgb(231, 29, 73);color:white;font-family: 'Courier New', Courier, monospace;font-weight: bold;font-size: 20px;">
     
      <pre style="color:white">Made by Preethi R.M of The Sparks Foundation    <a href="https://www.linkedin.com/in/preethi-r-m-b41993211" style="color:white"><i class="fa fa-linkedin-square icon fa-lg" style="padding bottom:40px" ></i> <a href="mailto:preethirm.e0320053@sret.edu.in?subject=Blog feedback" style="color:white"><i class="fa fa-envelope icon " style="padding bottom:40px" ></i> <a href="https://github.com/Preethi2911" style="color:white"><i class="fa fa-github icon fa-lg" style="padding bottom:40px" ></i></pre></div>