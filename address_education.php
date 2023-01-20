<?php
session_start();
include('authentication.php');
if(isset($_POST['jossa_DD_No']) && isset($_POST['jossa_Date']) && isset($_POST['jossa_amount']) && isset($_POST['institute_DD_No']) && isset($_POST['institute_Date']) && isset($_POST['institute_amount']) && isset($_POST['hostel_required']))// && isset($_FILES["photo"]["tmp_name"]))
{
    $_SESSION['jossa_DD_No']=$_POST['jossa_DD_No'];
    $_SESSION['jossa_Date']=$_POST['jossa_Date'];
    $_SESSION['jossa_amount']=(int)$_POST['jossa_amount'];
    $_SESSION['institute_DD_No']=$_POST['institute_DD_No'];
    $_SESSION['institute_Date']=$_POST['institute_Date'];
    $_SESSION['institute_amount']=(int)$_POST['institute_amount'];
    $_SESSION['hostel_required']=$_POST['hostel_required'];
    collect_files_details();
}
else {
    echo "<p>Some fee details missing.<br>All the fields are required and mandatory<br>
    <a href='FEEdetails.php'>Back</a></p>";
}
function collect_files_details()
{
    
if(!isset($_POST['DOB_certificate']))
{
    echo "photo id not given";
}
    if(isset($_POST['seat_allotment_letter']) && isset($_POST['JEE_Rank_Card']) && isset($_POST['Photo_ID_Proof']) && isset($_POST['DOB_certificate']) && isset($_POST['Mark_sheet']) && isset($_POST['Transfer_Certificate']) && isset($_POST['Migration_Certificate']) && isset($_POST['Aadhaar_Card']) && isset($_POST['Income_certificate']) && isset($_POST['Caste_certificate']) && isset($_POST['Caste_validity']) && isset($_POST['OBC_certificate']) && isset($_POST['GAP_Certificate']) && isset($_POST['disabiliy_certificate']))// && isset($_FILES['photo']['tmp_name']))
    {
        //$_SESSION['jossa_Date']=$_POST['jossa_Date'];
        //$_SESSION['photo']=$_POST['photo'];
        $_SESSION['seat_allotment_letter']=$_POST['seat_allotment_letter'];
        $_SESSION['JEE_Rank_Card']=$_POST['JEE_Rank_Card'];
        $_SESSION['Photo_ID_Proof']=$_POST['Photo_ID_Proof'];
        $_SESSION['DOB_certificate']=$_POST['DOB_certificate'];
        $_SESSION['Mark_sheet']=$_POST['Mark_sheet'];
        $_SESSION['Transfer_Certificate']=$_POST['Transfer_Certificate'];
        $_SESSION['Migration_Certificate']=$_POST['Migration_Certificate'];
        $_SESSION['Aadhaar_Card']=$_POST['Aadhaar_Card'];
        $_SESSION['Income_certificate']=$_POST['Income_certificate'];
        $_SESSION['Caste_certificate']=$_POST['Caste_certificate'];
        $_SESSION['Caste_validity']=$_POST['Caste_validity'];
        $_SESSION['OBC_certificate']=$_POST['OBC_certificate'];
        $_SESSION['GAP_Certificate']=$_POST['GAP_Certificate'];
        $_SESSION['disabiliy_certificate']=$_POST['disabiliy_certificate'];
    }
    else{
        echo "some files not provided....<br>";
        echo "<a href='FEEdetails.php'>Back</a>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            ADDRESS_EDUCATION:
        </title>
    </head>
    <body bgcolor="5DE509">
        <h1>
            ADDRESS:
        </h1>
        <form action="education.php" method='POST'>
        <table>
                <tr>
                    <td>
                    <b>Address Of Correspondence</b>
                    </td>
                    <td></td>
                    <td>
                    <b>Permanent Address</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for='CorrespondenceCity'><b>City:  </b></label>
                    </td>
                    <td>
                        <input type='text' name='CorrespondenceCity' id='CorrespondenceCity'>
                    </td>
                    <td>
                        <label for='PermanentCity'><b>City:  </b></label>
                    </td>
                    <td>
                        <input type='text' name='PermanentCity' id='PermanentCity'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for='CorrespondenceState'><b>State:  </b></label>
                    </td>
                    <td>
                        <input type='text' name='CorrespondenceState' id='CorrespondenceState'>
                    </td>
                    <td>
                        <label for='PermanentState'><b>State:  </b></label>
                    </td>
                    <td>
                        <input type='text' name='PermanentState' id='PermanentState'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for='CorrespondencePIN_CODE'><b>PIN CODE:  </b></label>
                    </td>
                    <td>
                        <input type='text' name='CorrespondencePIN_CODE' id='CorrespondencePIN_CODE'>
                    </td>
                    <td>
                        <label for='PermanentPIN_CODE'><b>PIN CODE:  </b></label>
                    </td>
                    <td>
                        <input type='text' name='PermanentPIN_CODE' id='PermanentPIN_CODE'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for='CorrespondenceMobile'><b>Mobile No. :  </b></label>
                    </td>
                    <td>
                        <input type='text' name='CorrespondenceMobile' id='CorrespondenceMobile'>
                    </td>
                    <td>
                        <label for='PermanentMobile'><b>Mobile No. :  </b></label>
                    </td>
                    <td>
                        <input type='text' name='PermanentMobile' id='PermanentMobile'>
                    </td>
                </tr>
            </table>
            
            
            <input type='submit' value='Next' name='submit' id='submit'>
            </form>
    </body>
</html>