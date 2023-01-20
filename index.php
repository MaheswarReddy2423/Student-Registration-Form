<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <body bgcolor="ABC0F3">
        <h1>
            PART II: ADMISSION WEB PORTAL
        </h1>
        <form action='JEEmains.php' method='POST'>
            <label for='name'><b>NAME:  </b></label>
            <input type='text' name='name' id='name'>
            <br><br><br>
            <label for='gender'><b>GENDER:</b></label>
            <input type="radio" name='gender' value='M'>Male
            <input type="radio" name='gender' value='F'>Female
            <input type="radio" name='gender' value='O'>Others
            <br><br><br>
            <label for='Blood_Group'><b>Blood Group:  </b></label>
            <input type="radio" name='Blood_Group' value='A-'>A-
            <input type="radio" name='Blood_Group' value='A+'>A+
            <input type="radio" name='Blood_Group' value='B-'>B-
            <input type="radio" name='Blood_Group' value='B+'>B+
            <input type="radio" name='Blood_Group' value='O+'>O+
            <input type="radio" name='Blood_Group' value='O-'>O-
            <br><br><br>
            <label for='DOB'><b>Date Of Birth:  </b></label>
            <input type='date' name='DOB' id='DOB'>
            <br><br><br>
            <label for='phone1'><b>Mobile number 1:  </b>
            <input type='tel' name='phone1' id='phone1'>&nbsp;
            <label for='phone2'><b>Mobile number 2:  </b>
            <input type='tel' name='phone2' id='phone2'>
            <br><br><br>
            <label for='email'><b>Email:  </b>
            <input type='email' name='email' id='email'>
            
            <br><br><br>
        
            <label for='aadhar'><b>Aadhar number:  </b>
            <input type='tel' name='aadhar' id='aadhar'><br><br><br>
            <label for='fathername'><b>Father Name:  </b></label>
            <input type='text' name='fathername' id='fathername'>&nbsp;
            <label for='fatheroccupation'><b>Father Occupation:  </b></label>
            <input type='text' name='fatheroccupation' id='fatheroccupation'><br><br><br>
            <label for='mothername'><b>Mother Name:  </b></label>
            <input type='text' name='mothername' id='mothername'>&nbsp;
            <label for='motheroccupation'><b>Mother Occupation:  </b></label>
            <input type='text' name='motheroccupation' id='motheroccupation'><br><br><br>
            <label for='Branch'><b>Branch:</b></label>
            <input type="radio" name='branch' value='CSE'>CSE
            <input type="radio" name='branch' value='ECE'>ECE
            <br><br><br>
            <label for='disabled'><b>Physically Disabled?  </b></label>
            <input type="radio" name='disabled' value='Y'>yes
            <input type="radio" name='disabled' value='N'>no
            <br><br><br>
            <input type='submit' value='Next' name='submit' id='submit'>
        </form>
    </body>
</html>