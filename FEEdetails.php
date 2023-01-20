<?php
session_start();
//include("authentication.php");
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit']))
{
    //$conn = mysqli_connect('localhost','root','','dbms_project_part2') or die("Connection Failed:".mysqli_connect_error());
    /*if(!isset($_POST['Blood_Group']))
    {
        echo "name missing";
    }*/
    if(isset($_POST['jee_year']) && isset($_POST['jee_round']) && isset($_POST['jee_rank']) && isset($_POST['jee_score']) && isset($_POST['jee_percentile']) && isset($_POST['allotment_category']) && isset($_POST['jee_roll']) &&isset($_POST['candidate_category']))
    {
        $_SESSION['jee_roll']=(int)$_POST['jee_roll'];
        $_SESSION['jee_round']=(int)$_POST['jee_round'];
        $_SESSION['jee_rank']=(int)$_POST['jee_rank'];
        $_SESSION['jee_score']=(int)$_POST['jee_score'];
        $_SESSION['jee_percentile']=(float)$_POST['jee_percentile'];
        //echo $_SESSION['jee_percentile'];
        $_SESSION['jee_year']=(int)$_POST['jee_year'];
        $_SESSION['allotment_category']=$_POST['allotment_category'];
        $_SESSION['candidate_category']=$_POST['candidate_category'];
    }
    else {
        echo "<p>Some values missing.<br>All the fields are required and mandatory<br>
        <a href='JEEmains.php'>Back</a></p>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            FEE details
        </title>
    </head>
    <body bgcolor="F397C5">
        <h1>
            FEE DETAILS:
        </h1>
        <form action="address_education.php" enctype="multipart/form-data" method='POST'>
            <label for='jossa_DD_No'><b>JOSSA DD No.  :</b></label>
            <input type='text' name='jossa_DD_No' id='jossa_DD_No'>
            &nbsp;&nbsp;
            <label for='jossa_Date'><b>Date:</b></label>
            <input type='date' name='jossa_Date' id='jossa_Date'>
            &nbsp;&nbsp;
            <label for='jossa_amount'><b>Amount:</b></label>
            <input type='text' name='jossa_amount' id='jossa_amount'>
            <br><br><br>
            <label for='institute_DD_No'><b>Institute DD No.  :</b></label>
            <input type='text' name='institute_DD_No' id='institute_DD_No'>
            &nbsp;&nbsp;
            <label for='institute_Date'><b>Date:</b></label>
            <input type='date' name='institute_Date' id='institute_Date'>
            &nbsp;&nbsp;
            <label for='institute_amount'><b>Amount:</b></label>
            <input type='text' name='institute_amount' id='institute_amount'>
            <br><br><br>
            <label for='hostel_required'><b>Hostel Required? </b></label>
            <input type="radio" name='hostel_required' value='Y'>Yes
            <input type="radio" name='hostel_required' value='N'>No
            <br><br><br>
            <label for='photo'><b>photo:  </b>
            <input type="File" name='photo' id='photo'>
            <br><br><br>
            <h2><p>List of Enclosures submitted or not?</p></h2>
            <br><br>
            <label for='seat_allotment_letter'><b>Seat Allotment Letter: </b></label>
            <!--input type="File" name='seat_allotment_letter' id='seat_allotment_letter'-->
            <input type="radio" name='seat_allotment_letter' value='Y'>Yes
            <input type="radio" name='seat_allotment_letter' value='N'>No
            <br><br><br>
            <label for='JEE_Rank_Card'><b>JEE Rank Card: </b></label>
            <!--input type="File" name='JEE_Rank_Card' id='JEE_Rank_Card'-->
            <input type="radio" name='JEE_Rank_Card' value='Y'>Yes
            <input type="radio" name='JEE_Rank_Card' value='N'>No
            <br><br><br>
            <label for='Photo_ID_Proof'><b>Photo ID Proof: </b></label>
            <!--input type="File" name='Photo_ID_Proof' id='Photo_ID_Proof'-->
            <input type="radio" name='Photo_ID_Proof' value='Y'>Yes
            <input type="radio" name='Photo_ID_Proof' value='N'>No
            <br><br><br>
            <label for='DOB_certificate'><b>Certificate for proof of date of birth: </b></label>
            <!--input type="File" name='DOB_certificate' id='DOB_certificate'-->
            <input type="radio" name='DOB_certificate' value='Y'>Yes
            <input type="radio" name='DOB_certificate' value='N'>No
            <br><br><br>
            <label for='Mark_sheet'><b>Qualifying Examination Mark-Sheet: </b></label>
            <!--input type="File" name='Mark_sheet' id='Mark_sheet'-->
            <input type="radio" name='Mark_sheet' value='Y'>Yes
            <input type="radio" name='Mark_sheet' value='N'>No
            <br><br><br>
            <label for='Income_certificate'><b>Income Certificate (For EWS): </b></label>
            <!--<input type="File" name='Income_certificate' id='Income_certificate'>-->
            <input type="radio" name='Income_certificate' value='Y'>Yes
            <input type="radio" name='Income_certificate' value='N'>No
            <br><br><br>
            <label for='Caste_certificate'><b>Caste Certificate ( As applicable to Res Category ): </b></label>
            <!--input type="File" name='Caste_certificate' id='Caste_certificate'-->
            <input type="radio" name='Caste_certificate' value='Y'>Yes
            <input type="radio" name='Caste_certificate' value='N'>No
            <br><br><br>
            <label for='Caste_validity'><b>Caste validity (if caste certificate issued by Maharashtra Govt.): </b></label>
            <!--input type="File" name='Caste_validity' id='Caste_validity'-->
            <input type="radio" name='Caste_validity' value='Y'>Yes
            <input type="radio" name='Caste_validity' value='N'>No
            <br><br><br>
            <label for='OBC_certificate'><b>Non-Creamy layer Certificate for OBC Category: </b></label>
            <!--input type="File" name='OBC_certificate' id='OBC_certificate'-->
            <input type="radio" name='OBC_certificate' value='Y'>Yes
            <input type="radio" name='OBC_certificate' value='N'>No
            <br><br><br><label for='disabiliy_certificate'><b>Certificate for persons with disabilities: </b></label>
            <!--input type="File" name='disabiliy_certificate' id='disabiliy_certificate'-->
            <input type="radio" name='disabiliy_certificate' value='Y'>Yes
            <input type="radio" name='disabiliy_certificate' value='N'>No
            <br><br><br>
            <label for='Transfer_Certificate'><b>Transfer Certificate: </b></label>
            <!--input type="File" name='Transfer_Certificate' id='Transfer_Certificate'-->
            <input type="radio" name='Transfer_Certificate' value='Y'>Yes
            <input type="radio" name='Transfer_Certificate' value='N'>No
            <br><br><br>
            <label for='Migration_Certificate'><b>Migration Certificate: </b></label>
            <!--input type="File" name='Migration_Certificate' id='Migration_Certificate'-->
            <input type="radio" name='Migration_Certificate' value='Y'>Yes
            <input type="radio" name='Migration_Certificate' value='N'>No
            <br><br><br>
            <label for='Aadhaar_Card'><b>Aadhaar Card: </b></label>
            <!--input type="File" name='Aadhaar_Card' id='Aadhaar_Card'-->
            <input type="radio" name='Aadhaar_Card' value='Y'>Yes
            <input type="radio" name='Aadhaar_Card' value='N'>No
            <br><br><br>
            <label for='GAP_Certificate'><b>GAP Certificate (If applicable): </b></label>
            <!--input type="File" name='GAP_Certificate' id='GAP_Certificate'-->
            <input type="radio" name='GAP_Certificate' value='Y'>Yes
            <input type="radio" name='GAP_Certificate' value='N'>No
            <br><br><br>
            <input type='submit' value='Next' name='submit' id='submit'>
        </form>
    </body>
</html>
<?php

/*function collect_files()
{
    if(isset($_POST['jossa_Date']))
    {
        $_SESSION['jossa_Date']=$_POST['jossa_Date'];
        $_SESSION['photo']=addslashes(file_get_contents($_FILES['photo']['tmp_name']));
        $_SESSION['seat_allotment_letter']=addslashes(file_get_contents($_FILES['seat_allotment_letter']['tmp_name']));
        $_SESSION['JEE_Rank_Card']=addslashes(file_get_contents($_FILES['JEE_Rank_Card']['tmp_name']));
        $_SESSION['Photo_ID_Proof']=addslashes(file_get_contents($_FILES['Photo_ID_Proof']['tmp_name']));
        $_SESSION['DOB_certificate']=addslashes(file_get_contents($_FILES['DOB_certificate']['tmp_name']));
        $_SESSION['Mark_sheet']=addslashes(file_get_contents($_FILES['Mark_sheet']['tmp_name']));
        $_SESSION['Income_certificate']=addslashes(file_get_contents($_FILES['Income_certificate']['tmp_name']));
        $_SESSION['Caste_certificate']=addslashes(file_get_contents($_FILES['Caste_certificate']['tmp_name']));
        $_SESSION['Caste_validity']=addslashes(file_get_contents($_FILES['Caste_validity']['tmp_name']));
        $_SESSION['OBC_certificate']=addslashes(file_get_contents($_FILES['OBC_certificate']['tmp_name']));
        $_SESSION['disabiliy_certificate']=addslashes(file_get_contents($_FILES['disabiliy_certificate']['tmp_name']));
        $_SESSION['Transfer_Certificate']=addslashes(file_get_contents($_FILES['Transfer_Certificate']['tmp_name']));
        $_SESSION['Migration_Certificate']=addslashes(file_get_contents($_FILES['Migration_Certificate']['tmp_name']));
        $_SESSION['Aadhaar_Card']=addslashes(file_get_contents($_FILES['Aadhaar_Card']['tmp_name']));
        $_SESSION['GAP_Certificate']=addslashes(file_get_contents($_FILES['GAP_Certificate']['tmp_name']));
    }
    else{
        echo "not done here....";
    }
}*/
?>