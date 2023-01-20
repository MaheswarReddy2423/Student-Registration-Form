<?php
session_start();
//include("authentication.php");
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit']))
{
    //$conn = mysqli_connect('localhost','root','','dbms_project_part2') or die("Connection Failed:".mysqli_connect_error());
    if(isset($_POST['name']) && isset($_POST['gender']) && isset($_POST['Blood_Group']) && isset($_POST['DOB']) && isset($_POST['phone1']) && isset($_POST['phone2']) && isset($_POST['email']) && isset($_POST['aadhar']) && isset($_POST['fathername']) && isset($_POST['fatheroccupation']) && isset($_POST['mothername']) && isset($_POST['motheroccupation']) && isset($_POST['branch']) && isset($_POST['disabled']))
    {
        $_SESSION['name']=$_POST['name'];
        $_SESSION['gender']=$_POST['gender'];
        $_SESSION['Blood_Group']=$_POST['Blood_Group'];
        $_SESSION['DOB']=$_POST['DOB'];//date('Y-m-d',strtotime($_POST['DOB']));
        $_SESSION['phone1']=(int)$_POST['phone1'];
        //echo ($_SESSION['DOB']);
        $_SESSION['phone2']=(int)$_POST['phone2'];
        $_SESSION['email']=$_POST['email'];
        $_SESSION['aadhar']=(int)$_POST['aadhar'];
        $_SESSION['fathername']=$_POST['fathername'];
        $_SESSION['fatheroccupation']=$_POST['fatheroccupation'];
        $_SESSION['mothername']=$_POST['mothername'];
        $_SESSION['motheroccupation']=$_POST['motheroccupation'];
        $_SESSION['branch']=$_POST['branch'];
        $_SESSION['disabled']=$_POST['disabled'];
    }
    else {
        echo "<p>Some values missing.<br>All the fields are required and mandatory<br>
        <a href='index.php'>Back</a></p>";
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            JEE details
        </title>
    </head>
    <body bgcolor="FCEA9A">
        <h1>
            JEE MAINS DETAILS:
        </h1>
        <form action='FEEdetails.php' method='POST'>
            <label for='jee_round'><b>Round Of Allotment:  </b></label>
            <input type='text' name='jee_round' id='jee_round'>
            <br><br><br>
            <label for='jee_roll'><b>Roll number:  </b>
            <input type='tel' name='jee_roll' id='jee_roll'><br><br><br>
            <label for='jee_rank'><b>AIR rank:  </b>
            <input type='text' name='jee_rank' id='jee_rank'><br><br><br>
            <label for='jee_score'><b>JEE Mains Score:  </b>
            <input type='text' name='jee_score' id='jee_score'><br><br><br>
            <label for='jee_percentile'><b>JEE Percentile:  </b>
            <input type='text' name='jee_percentile' id='jee_percentile'><br><br><br>
            
            <label for='jee_year'><b>YEAR:  </b>
            <input type='text' name='jee_year' id='jee_year'><br><br><br>
            <label for='allotment_category'><b>Allotment Category:  </b>
            <select name="allotment_category" id="allotment_category">
                <option value="OP">OP</option>
                <option value="SC">SC</option>
                <option value="ST">ST</option>
                <option value="OBC">OBC</option>
                <option value="EWS">EWS</option>
                <option value="PD">PD</option>
            </select>
            <br><br><br>
            <label for='candidate_category'><b>Candidate Ccategory:  </b>
            <select name="candidate_category" id="candidate_category">
                <option value="OP">OP</option>
                <option value="SC">SC</option>
                <option value="ST">ST</option>
                <option value="OBC">OBC</option>
                <option value="PD">PD</option>
            </select>
            <br><br><br>
            <input type='submit' value='Next' name='submit' id='submit'>
        </form>
    </body>
</html>