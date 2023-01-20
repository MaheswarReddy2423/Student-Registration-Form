<?php
session_start();
//include('authentication.php');
if(isset($_POST["CorrespondenceCity"]) && isset($_POST["PermanentCity"]) && isset($_POST["CorrespondenceState"]) && isset($_POST["PermanentState"]) && isset($_POST["CorrespondencePIN_CODE"]) && isset($_POST["PermanentPIN_CODE"]) && isset($_POST["CorrespondenceMobile"]) && isset($_POST["PermanentMobile"]))
{
    $_SESSION["CorrespondenceCity"]=$_POST["CorrespondenceCity"];
    $_SESSION["PermanentCity"]=$_POST["PermanentCity"];
    $_SESSION["CorrespondenceState"]=$_POST["CorrespondenceState"];
    $_SESSION["PermanentState"]=$_POST["PermanentState"];
    $_SESSION["CorrespondencePIN_CODE"]=(int)$_POST["CorrespondencePIN_CODE"];
    $_SESSION["PermanentPIN_CODE"]=(int)$_POST["PermanentPIN_CODE"];
    $_SESSION["CorrespondenceMobile"]=(int)$_POST["CorrespondenceMobile"];
    $_SESSION["PermanentMobile"]=(int)$_POST["PermanentMobile"];
}
else{
    echo "not saved.";
}
?>

<!DOCTYPE html>
<html>
    <body bgcolor="5DE509">
    <h1>Education:</h1>
        <form action='declaration.php' method='POST'>
        <table>
            <tr>
                <td>
                <b>Class</b>
                </td>
                <td>
                <b>Name Of Board</b>
                </td>
                <td>
                <b>roll no.</b>
                </td>
                <td>
                <b>Year Of Passing</b>
                </td>
                <td>
                <b>Marks obtained</b>
                </td>
                <td>
                <b>Percentage/Grade</b>
                </td>
            </tr>
            <tr>
                <td>
                    <b>10th/SSC</b>
                </td>
                <td>
                    <input type='text' name='10th_board_name' id='10th_board_name'>
                </td>
                <td>
                    <input type='text' name='10th_passing_year' id='10th_passing_year'>
                </td>
                <td>
                    <input type='text' name='10th_roll_no' id='10th_roll_no'>
                </td>
                <td>
                    <input type='text' name='10th_marks' id='10th_marks'>
                </td>
                <td>
                    <input type='text' name='10th_percentage' id='10th_percentage'>
                </td>
            </tr>
            <tr>
                <td>
                    <b>12th/HSC</b>
                </td>
                <td>
                    <input type='text' name='12th_board_name' id='12th_board_name'>
                </td>
                <td>
                    <input type='text' name='12th_passing_year' id='12th_passing_year'>
                </td>
                <td>
                    <input type='text' name='12th_roll_no' id='12th_roll_no'>
                </td>
                <td>
                    <input type='text' name='12th_marks' id='12th_marks'>
                </td>
                <td>
                    <input type='text' name='12th_percentage' id='12th_percentage'>
                </td>
            </tr>
        </table>
        <h2>
                Documents submitted:
            </h2>
            <br><br><br>
            <label for='10th_certificate'><b>10th certificate?  </b></label>
            
            <!--input type="File" name='10th_certificate' id='10th_certificate'-->
            <input type="radio" name='10th_certificate' value='Y'>Yes
            <input type="radio" name='10th_certificate' value='N'>No
            <br><br><br>
            <label for='12th_certificate'><b>12th certificate?  </b></label>
            
            <!--input type="File" name='12th_certificate' id='12th_certificate'-->
            <input type="radio" name='12th_certificate' value='Y'>Yes
            <input type="radio" name='12th_certificate' value='N'>No
            <br><br><br>
            <label for='Category_Certificate'><b>Category Certificate?  </b></label>
            
            <!--input type="File" name='Category_Certificate' id='Category_Certificate'-->
            <input type="radio" name='Category_Certificate' value='Y'>Yes
            <input type="radio" name='Category_Certificate' value='N'>No
            <br><br><br>
            <label for='PWD_Certificate'><b>PWD Certificate?  </b></label>
            
            <!--input type="File" name='PWD_Certificate' id='PWD_Certificate'-->
            <input type="radio" name='PWD_Certificate' value='Y'>Yes
            <input type="radio" name='PWD_Certificate' value='N'>No
            <br><br><br>

            <label for='chronic_disease'>Are you suffering from any chronic disease?  
            <input type='radio' name='chronic_disease' value='Y'>Yes
            <input type='radio' name='chronic_disease' value='N'>No

            <br><br><br>
            <p>If yes, please provide detailed information:</p>
            
            <!---<label for='disease_info'>-->
            <textarea id="disease_info" name="disease_info" rows="4" cols="50">
                
            </textarea>
            <br><br><br>
        <input type='submit' value='Next' name='submit' id='submit'>
        </form>
    </body>
</html>