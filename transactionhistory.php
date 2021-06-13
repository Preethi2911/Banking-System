<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <style>
    .table{
       
        background-color:rgb(200, 238, 232);
        border-color:#d64161;
        text-align:center;
        font-family: 'Courier New', Courier, monospace;
        font-size: 20px;
          

    }
    .th{
        background-color:rgb(0, 0, 0);
        font-weight: bold;
    }
    #button1 {
           
           padding:10px;
           margin-left:640px;
           margin-top:7px;
           margin-bottom:20px;
           padding-right:20px;
           padding-left:20px;
           font-size:17px;
           font-family: 'Courier New', Courier, monospace;
          font-weight: bold;
           background-color:rgb(231, 29, 73);
           color:white; 
          }

      #button1:hover {
          background-color:rgb(240, 158, 185); 
          color: white;
           }
    </style>
</head>

<body>

<?php
  include 'navbar.php';
?>

	<div class="container-fluid">
        <h2 class="text-center pt-4" style="font-family: 'Courier New', Courier, monospace;font-weight: bold;font-size: 35px;"><B>HISTORY OF TRANSACTION</B></h2>
        <button onclick="location.href='transfermoney.php'" type="button" class="btn" id="button1">Go To Transfer Money</button>
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered ">
        <thead>
            <tr>
                <th class="text-center">S.No</th>
                <th class="text-center">SENDER</th>
                <th class="text-center">RECEIVER</th>
                <th class="text-center">AMOUNT</th>
                <th class="text-center">DATE & TIME</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';
            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>

</body>
</html>