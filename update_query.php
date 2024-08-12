<?php
$id = $_GET['id'];
include_once 'db_config.php';
include 'view-all-students.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$objective = $_POST['objective'];
$qualification = json_encode($_POST['qualification']);
$project_list = json_encode($_POST['project_list']);
$github = $_POST['github'];
$city = $_POST['city'];
$state = $_POST['state'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$organization=$_POST['organization'];
$designation =$_POST['designation'];
$duration =$_POST['duration'];
$honers_diploma=$_POST['honers_diploma'];
$hsc_alim =$_POST['hsc_alim'];
$ssc_dakhil=$_POST['ssc_dakhil'];
$technology_department =$_POST['technology_department'];
$group_subject =$_POST['group_subject'];
$group =$_POST['group'];
$honers =$_POST['honers'];
$hsc =$_POST['hsc'];
$ssc =$_POST['ssc'];
$cgpa =$_POST['cgpa'];
$gpa =$_POST['gpa'];
$g_p_a=$_POST['g_p_a'];
$hon_dip=$_POST['hon_dip'];
$h_s_c =$_POST['h_s_c'];
$s_s_c=$_POST['s_s_c'];
$years =$_POST['years'];
$session_hsc=$_POST['session_hsc'];
$session_ssc=$_POST['session_ssc'];
$marital_status=$_POST['marital_status'];
$religion=$_POST['religion'];
$nationality=$_POST['nationality'];
$permanent_address=$_POST['permanent_address'];
$current_location=$_POST['current_location'];
$confession=$_POST['confession'];
$signature_name=$_POST['signature_name'];


//$image =$_file['img'];


$random =rand(1111,9999);
$image ='upload/' .$random . $_FILES['img']['name'];
move_uploaded_file($_FILES['img']['tmp_name'], $image);


$sql = "UPDATE `cv_document` SET `first_name`='$first_name', `last_name`='$last_name', `address`='$address', `phone_number`='$phone_number',
`email`='$email', `objective`='$objective', `qualification`='$qualification', `project_list`='$project_list', `github`='$github', `city`='$city', `state`='$state',
`father_name`='$father_name', `mother_name`='$mother_name', `dob`='$dob', `gender`='$gender', `img`='$image', `organization`='$organization', `designation`='$designation',
`duration`='$duration', `honers_diploma`='$honers_diploma', `hsc_alim`='$hsc_alim', `ssc_dakhil`='$ssc_dakhil', `technology_department`='$technology_department', `group_subject`='$group_subject',
`group`='$group', `honers`='$honers', `hsc`='$hsc', `ssc`='$ssc', `cgpa`='$cgpa', `gpa`='$gpa', `g_p_a`='$g_p_a', `hon_dip`='$hon_dip',
`h_s_c`='$h_s_c', `s_s_c`='$s_s_c', `years`='$years', `session_hsc`='$session_hsc', `session_ssc`='$session_ssc',`marital_status`='$marital_status',`religion`='$religion',`nationality`='$nationality',
`permanent_address`='$permanent_address',`current_location`='$current_location',`confession`='$confession',`signature_name`='$signature_name' WHERE id=$id";

$result =mysqli_query($conn, $sql);
if($result){
    echo 'data inserted successfully';
}
else{
   echo 'something is wrong';
}

?>
