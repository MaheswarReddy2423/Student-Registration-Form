<?php
session_start();
//include('authentication.php');
if(isset($_POST["chronic_disease"]) && isset($_POST["10th_board_name"]) && isset($_POST["10th_roll_no"]) && isset($_POST["10th_passing_year"]) && isset($_POST["10th_marks"]) && isset($_POST["10th_percentage"]) && isset($_POST["12th_board_name"]) && isset($_POST["12th_roll_no"]) && isset($_POST["12th_passing_year"]) && isset($_POST["12th_marks"]) && isset($_POST["12th_percentage"]) && isset($_POST['10th_certificate']) && isset($_POST['12th_certificate']) && isset($_POST["Category_Certificate"]) && isset($_POST["PWD_Certificate"]))
{
    $_SESSION["10th_board_name"]=$_POST["10th_board_name"];
    $_SESSION["10th_passing_year"]=(int)$_POST["10th_passing_year"];
    $_SESSION["10th_roll_no"]=(int)$_POST["10th_roll_no"];
    $_SESSION["10th_marks"]=(int)$_POST["10th_marks"];
    $_SESSION["10th_percentage"]=(float)$_POST["10th_percentage"];
    $_SESSION["12th_board_name"]=$_POST["12th_board_name"];
    $_SESSION["12th_passing_year"]=(int)$_POST["12th_passing_year"];
    $_SESSION["12th_roll_no"]=(int)$_POST["12th_roll_no"];
    $_SESSION["12th_marks"]=(int)$_POST["12th_marks"];
    $_SESSION["12th_percentage"]=(float)$_POST["12th_percentage"];
    $_SESSION['10th_certificate']=$_POST['10th_certificate'];
    $_SESSION['12th_certificate']=$_POST['12th_certificate'];
    $_SESSION['Category_Certificate']=$_POST['Category_Certificate'];
    $_SESSION['PWD_Certificate']=$_POST['PWD_Certificate'];
    $_SESSION["chronic_disease"]=$_POST["chronic_disease"];
    if(isset($_POST["disease_info"]))
    {
        $_SESSION["disease_info"]=$_POST["disease_info"];
    }
    else{
        $_SESSION["disease_info"]=null;
    }
}
else{
    echo "<p>Some of the educational details not provided.</p><br>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            declaration
        </title>
    </head>
    <body bgcolor="F5A0B7">
        <h1>
            DECLARATION BY THE STUDENT:
        </h1>
        <form action='insert.php' method='POST'>
            <p>
                Check the below box to complete the registration process.
            </p>
            <input type="checkbox" id="declaration" name="declaration" value="Yes">
            <label for="declaration">I certified that all information provided by me in this form is correct to the best of my knowledge and belief.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  I understand that any willful misrepresentation of facts will result in my dismissal from the Institute. If
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  admitted,I shall abide by all rules and regulations of the Institute.</label>
            <br><br><br>
            <label for='join_date'><b>DATE:  </b></label>
            <input type='date' name='join_date' id='join_date'>
            <br><br><br>
            <label for='signature'><b>Signature of the student:  </b></label>
            <input type='text' name='signature' id='signature'>
            <br><br><br>
            <input type='submit' name='submit' id='submit'>
        </form>
    </body>
</html>