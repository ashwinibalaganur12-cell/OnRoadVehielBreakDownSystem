<?php
$conn = mysqli_connect('localhost', 'YOUR_DB_USER', 'YOUR_DB_PASSWORD', 'YOUR_DB_NAME');
if($conn)
{
    echo"connected";
}
else
{
    echo"fail";
}
?>
