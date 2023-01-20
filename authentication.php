<?php
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit']))
{
    $conn = mysqli_connect('localhost','root','','dbms_project_part2') or die("Connection Failed:".mysqli_connect_error());
}
?>