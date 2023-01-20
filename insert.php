<?php
session_start();
include('authentication.php');
if(isset($_POST["declaration"]) && isset($_POST["join_date"]) && isset($_POST["signature"]))
{
    $join_date=$_POST["join_date"];
    $signature=$_POST["signature"];
}
else{
    echo "<p>Some of the educational details not provided or u havent declared.</p><br>";
}
$jee_roll=$_SESSION['jee_roll'];
$student_name=$_SESSION['name'];
$branch=$_SESSION['branch'];
$gender=$_SESSION['gender'];
$email=$_SESSION['email'];
$bloodgroup=$_SESSION['Blood_Group'];
$DOB=$_SESSION['DOB'];
$phone1=$_SESSION['phone1'];
$phone2=$_SESSION['phone2'];
$aadharno=$_SESSION['aadhar'];
$fathername=$_SESSION['fathername'];
$fatheroccupation=$_SESSION['fatheroccupation'];
$mothername=$_SESSION['mothername'];
$motheroccupation=$_SESSION['motheroccupation'];
$disabled=$_SESSION['disabled'];
$jeeround=$_SESSION['jee_round'];
$jeerank=$_SESSION['jee_rank'];
$jee_percentile=$_SESSION['jee_percentile'];
$jee_marks=$_SESSION['jee_score'];
$jee_year=$_SESSION['jee_year'];
$jee_allot_category=$_SESSION['allotment_category'];
$jee_candidate_category=$_SESSION['candidate_category'];
$jossa_dd_no=$_SESSION['jossa_DD_No'];
$jossa_pay_date=$_SESSION['jossa_Date'];
$jossa_amount_paid=$_SESSION['jossa_amount'];
$institute_dd_no=$_SESSION['institute_DD_No'];
$institute_pay_date=$_SESSION['institute_Date'];
$institute_amount_paid=$_SESSION['institute_amount'];
$hostel_required=$_SESSION['hostel_required'];
$total_amount_paid=$jossa_amount_paid+$institute_amount_paid;


$roll_10th=$_SESSION["10th_roll_no"];
$board10th=$_SESSION["10th_board_name"];
$pass_10th_year=$_SESSION["10th_passing_year"];
$marks_10th=$_SESSION["10th_marks"];
$percentage_10th=$_SESSION["10th_percentage"];
$roll_12th=$_SESSION["12th_roll_no"];
$board12th=$_SESSION["12th_board_name"];
$pass_12th_year=$_SESSION["12th_passing_year"];
$marks_12th=$_SESSION["12th_marks"];
$percentage_12th=$_SESSION["12th_percentage"];
$certificate_10th=$_SESSION['10th_certificate'];
$certificate_12th=$_SESSION['12th_certificate'];

$co_ad_city=$_SESSION["CorrespondenceCity"];
$co_ad_state=$_SESSION["CorrespondenceState"];
$co_ad_pincode=$_SESSION["CorrespondencePIN_CODE"];
$co_mobile=$_SESSION["CorrespondenceMobile"];
$pe_ad_city=$_SESSION["PermanentCity"];
$pe_ad_state=$_SESSION["PermanentState"];
$pe_ad_pincode=$_SESSION["PermanentPIN_CODE"];
$pe_mobile=$_SESSION["PermanentMobile"];

$seat_allotment_letter=$_SESSION['seat_allotment_letter'];
$JEE_Rank_Card=$_SESSION['JEE_Rank_Card'];
$Photo_ID_Proof=$_SESSION['Photo_ID_Proof'];
$DOB_certificate=$_SESSION['DOB_certificate'];
$Mark_sheet=$_SESSION['Mark_sheet'];
$Income_certificate=$_SESSION['Income_certificate'];
$Caste_certificate=$_SESSION['Caste_certificate'];
$Caste_validity=$_SESSION['Caste_validity'];
$OBC_certificate=$_SESSION['OBC_certificate'];
$disability_certificate=$_SESSION['disabiliy_certificate'];
$Transfer_Certificate=$_SESSION['Transfer_Certificate'];
$Migration_Certificate=$_SESSION['Migration_Certificate'];
$Aadhaar_Card=$_SESSION['Aadhaar_Card'];
$GAP_Certificate=$_SESSION['GAP_Certificate'];

$chronic_disease=$_SESSION["chronic_disease"];
$disease_info=$_SESSION["disease_info"];


$insert_student="INSERT INTO `STUDENT` VALUES ('$jee_roll','$student_name','$branch','$gender','$email')";
$insert_student_query=mysqli_query($conn,$insert_student);
$insert_student_basic_details="INSERT INTO `STUDENT_BASIC_DETAILS` VALUES ('$jee_roll','$bloodgroup','$DOB','$phone1','$phone2','$aadharno','$fathername','$fatheroccupation','$mothername','$motheroccupation','$disabled',null)";
$insert_student_basic_details_query=mysqli_query($conn,$insert_student_basic_details);
$insert_jee_details="INSERT INTO `jee_details` VALUES ('$jee_roll','$jeeround','$jeerank','$jee_percentile','$jee_marks','$jee_year','$jee_allot_category','$jee_candidate_category')";
$insert_jee_details_query=mysqli_query($conn,$insert_jee_details);
$insert_fee_details="INSERT INTO `fee_details` VALUES ('$jee_roll','$jossa_dd_no','$jossa_amount_paid','$jossa_pay_date','$institute_dd_no','$institute_amount_paid','$institute_pay_date','$total_amount_paid')";
$insert_fee_details_query=mysqli_query($conn,$insert_fee_details);
$insert_education_details="INSERT INTO `education_details` VALUES ('$jee_roll','$board10th','$roll_10th','$pass_10th_year','$marks_10th','$percentage_10th','$12th_board_name','$roll_12th','$pass_12th_year','$marks_12th','$percentage_12th','$certificate_10th','$certificate_12th')";
$insert_education_details_query=mysqli_query($conn,$insert_education_details);
$insert_address_details="INSERT INTO `addresses` VALUES ('$jee_roll','$co_ad_city','$co_ad_state','$co_ad_pincode','$co_mobile','$pe_ad_city','$pe_ad_state','$pe_ad_pincode','$pe_mobile')";
$insert_address_details_query=mysqli_query($conn,$insert_address_details);
$insert_documents_details="INSERT INTO `documents` VALUES ('$jee_roll','$seat_allotment_letter','$JEE_Rank_Card','$Photo_ID_Proof','$DOB_certificate','$Mark_sheet','$Income_certificate','$Caste_certificate','$Caste_validity','$OBC_certificate','$disability_certificate','$Transfer_Certificate','$Migration_Certificate','$Aadhaar_Card','$GAP_Certificate')";
$insert_documents_details_query=mysqli_query($conn,$insert_documents_details);
$insert_student_extra_details="INSERT INTO `student_extra_details` VALUES ('$jee_roll','$chronic_disease','$disease_info','$join_date','$signature')";
$insert_student_extra_details_query=mysqli_query($conn,$insert_student_extra_details);

if($insert_student_query && $insert_student_basic_details_query && $insert_jee_details_query && $insert_fee_details_query && $insert_education_details_query && $insert_address_details_query && $insert_documents_details_query && $insert_student_extra_details_query)
{
    include 'success.php';
}
else{
    echo "Entry with this jee roll no. already recorded<br>Please check the JEE roll no. u have entered";
}
?>
