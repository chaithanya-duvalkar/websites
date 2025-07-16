<!-- 10a)  Write a PHP script to display today’s date in dd-mm-yyyy format. -->

<?php
$date=date("d-m-y");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Today's date</title>
        <style>
            body{
                font-family:"Arial";
                background-color:white;
                text-align:center;
                padding:60px;
            }
            h1{
                color:black;
                font-size:40px;
            }
            p{
                color:black;
                font-size:20px;
            }
         </style>
    </head>
    <body>
        <h1>Today's Date</h1>
        <p><?php
        echo "DATE: $date"?>
        </p>
    </body>
</html>