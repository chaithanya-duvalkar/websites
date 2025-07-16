<!-- 10b) Write a PHP script to check whether the number is prime or not when user input a valid number from client 
side.  -->

<?php
$result="";

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $num=intval($_POST['number']);
    if($num<=1)
    {
        $result="Please enter number greater than 1";
    }
    else 
    {
        $isPrime=true;
        for($i=2;$i<sqrt($num);$i++)
        {
            if($num%$i==0)
                $isPrime=false;
                break;
        }
        $result=$isPrime?"$num is prime number.":"$num is not prime number.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
        <title>prime_check</title>
        <style>
            body{
                font-family:"arial";
                background-color:lightblue;
                text-align:center;
                padding:60px;
            }
            h2{
                font-size:30px;
                color:red;
            }
            form{
                background-color:white;
                padding:20px;
                border-radius:8px;
                border:1px solid black;
                width:400px;
                height:400px; 
            }
            input{
                width:60%;
                border-radius:8px;
                border:1px solid black;
            }
            p{
                color:green;
                font-size:20px;
            }
            </style>
</head>
<body>
    <h2>Prime number</h2>
    <form method="POST" action="">
        <label for="number">Enter a number:</label><br><br>
        <input type="text:" id="number" name="number" required><br><br>
        <input type="submit" value="Check Prime">
    </form>

<?php 
if($result)
{
    echo "<p>$result</p>";
}    
?>
</body>
</html>