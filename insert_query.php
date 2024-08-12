<?php
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

$sql = "INSERT INTO `cv_document` (`first_name`, `last_name`, `address`, `phone_number`, `email`, `objective`, `qualification`, 
`project_list`, `github`, `city`, `state`, `father_name`, `mother_name`, `dob`, `gender`, `img`, `organization`, `designation`, 
`duration`, `honers_diploma`, `hsc_alim`, `ssc_dakhil`, `technology_department`, `group_subject`, `group`, `honers`, `hsc`, `ssc`, 
`cgpa`, `gpa`, `g_p_a`, `hon_dip`, `h_s_c`, `s_s_c`, `years`, `session_hsc`, `session_ssc`, `marital_status`, `religion`, `nationality`,
 `permanent_address`, `current_location`, `confession`, `signature_name`)
VALUES ('$first_name', '$last_name', '$address', '$phone_number', '$email', '$objective', '$qualification', 
'$project_list', '$github', '$city', '$state', '$father_name', '$mother_name', '$dob', '$gender', '$image', 
'$organization', '$designation', '$duration', '$honers_diploma', '$hsc_alim', '$ssc_dakhil', '$technology_department', 
'$group_subject', '$group', '$honers', '$hsc', '$ssc', '$cgpa', '$gpa', '$g_p_a', '$hon_dip', '$h_s_c', '$s_s_c', 
'$years', '$session_hsc', '$session_ssc', '$marital_status', '$religion', '$nationality', '$permanent_address', 
'$current_location', '$confession', '$signature_name')";


//$sql = "INSERT INTO `cv_document`(`id`, `first_name`, `last_name`, `address`, `phone_number`, `email`, `objective`, `qualification`, 
//`project_list`, `github`, `city`, `state`, `father_name`, `mother_name`, `dob`, `gender`, `img`, `organization`, `designation`, `duration`)
 //VALUES ('[value-1]','$first_name','$last_name','$address','$phone_number','$email','$objective','$qualification','$project_list','$github','$city'
 //,'$state','$father_name','$mother_name','$dob','$gender','$image','$organization','$designation','$duration')";

//$sql ="SELECT `id`, `first_name`, `last_name`, `address`, `phone_number`, `email`, `objective`, `qualification`, 
//`project_list`, `github`, `city`, `state`, `father_name`, `mother_name`, `dob`, `img` FROM `cv_document` WHERE 1
$result =mysqli_query($conn, $sql);
if($result){
    echo 'data inserted successfully';
}
else{
    echo 'something is wrong';
}

?>
