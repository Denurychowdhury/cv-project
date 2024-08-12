<?php
include_once 'db_config.php';
$id = $_GET['id'];
$select_sql_query = "SELECT * FROM CV_document WHERE id = $id";
$result = mysqli_query($conn, $select_sql_query);
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
     integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="dashboard">
 <div class="row">
       <?php
       include 'sidebar.php'
       ?>
   <div class="right-sidebar col-md-10 bg-info">
    <h1>Registration Form</h1>
    <form method="POST" action="update_query.php?id=<?php echo $row['id'];?>" enctype="multipart/form-data">
        <div class="form-row">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="validationDefault01">first_name</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="First name" required name="first_name"value="<?php echo $row['first_name']; ?>">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefault02">Last name</label>
                    <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" required name="last_name"value="<?php echo $row['last_name']; ?>">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="row">
                <div class="col-md-8 mb-3">
                    <label for="validationDefault03">Enter your Address</label>
                    <input type="text" class="form-control" id="validationDefault03" placeholder="Address" required name="address"value="<?php echo $row['address']; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="validationDefault04">Enter your phone number</label>
                    <input type="text" class="form-control" id="validationDefault04" placeholder="Phone number" required name="phone_number"value="<?php echo $row['phone_number']; ?>">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefault05">Enter your E-mail</label>
                    <input type="email" class="form-control" id="validationDefault05" placeholder="E-mail" required name="email"value="<?php echo $row['email']; ?>">
                </div>
            </div>
            <div class="col-md-8">
                <label for="comment">Career Objective:</label>
                <textarea class="form-control" rows="5" id="comment" name="objective"><?php echo $row['objective']?></textarea>
            </div>
            <div class="col-md-12">
            <label for="formFilemultiple" class="form-label">upload your  file</label>
                <input class="form-control change" type="file"id="formFilemultiple" multiple name="img"value="<?php echo $row['img'];?>"> 
            </div>
            <div class="col-md-8 mb-3">
                <label for="validationDefault06">Special Qualification:</label>
                <select class="form-control select" multiple="multiple" name="qualification[]">

                <?php 
                foreach(json_decode ($row['qualification'])as $qualification){
                    echo "<option selected >$qualification</option>";
                }
                ?>
                </select>
            </div>
            <div class="col-md-8 mb-3">
                <label for="validationDefault07">My Completed Project List</label>
                <select class="form-control select" multiple="multiple" name="project_list[]"value="<?php echo $row ['project_list']; ?>">
                <?php 
                foreach(json_decode ($row['project_list'])as $project_list){
                    echo "<option selected>$project_list</option>";
                }?>
                </select>
            </div>
            <div class="row">
           <div class="col-md-4 my-2">
            <label for="validationDefault01">Working Experience</label>
                    <input type="text" class="form-control" id="validationDefault01" value="<?php echo $row['organization'];?>" required name="organization"><br>
                    <input type="text" class="form-control" id="validationDefault01" value="<?php echo $row['designation'];?>"required name="designation"><br>
                    <input type="text" class="form-control" id="validationDefault01" value="<?php echo $row['organization'];?>"required name="duration">
            </div>
            <div class="col-md-4 my-2">
            <label for="validationDefault01">Exam Title</label>
                    <input type="text" class="form-control" id="validationDefault01"value="<?php echo $row['honers_diploma'];?>" required name="honers_diploma"><br>
                    <input type="text" class="form-control" id="validationDefault01"value="<?php echo $row['hsc_alim'];?>"required name="hsc_alim"><br>
                    <input type="text" class="form-control" id="validationDefault01"value="<?php echo $row['hsc_alim'];?>" required name="ssc_dakhil">
            </div>
           </div>
            <div class="row">
            <div class="col-md-4 my-2">
            <label for="validationDefault01">Concentration/Major</label>
                    <input type="text" class="form-control" id="validationDefault01" value="<?php echo $row['technology_department'];?>"required name="technology_department"><br>
                    <input type="text" class="form-control" id="validationDefault01" value="<?php echo $row['group_subject'];?>"  required name="group_subject"><br>
                    <input type="text" class="form-control" id="validationDefault01" value="<?php echo $row['group'];?>" required name="group">
            </div>
            <div class="col-md-4 my-2">
            <label for="validationDefault01">Institute</label>
                    <input type="text" class="form-control" id="validationDefault01" value="<?php echo $row['honers'];?>" required name="honers"><br>
                    <input type="text" class="form-control" id="validationDefault01" value="<?php echo $row['hsc'];?>" required name="hsc"><br>
                    <input type="text" class="form-control" id="validationDefault01" value="<?php echo $row['ssc'];?>" required name="ssc">
            </div>
            </div>
           
           <div class="row">
           <div class="col-md-4 my-2">
            <label for="validationDefault01">Resulte</label>
                    <input type="text" class="form-control" id="validationDefault01" value="<?php echo $row['cgpa'];?>" required name="cgpa"><br>
                    <input type="text" class="form-control" id="validationDefault01" value="<?php echo $row['gpa'];?>" required name="gpa"><br>
                    <input type="text" class="form-control" id="validationDefault01" value="<?php echo $row['g_p_a'];?>" required name="g_p_a">
            </div>
            <div class="col-md-4 my-2">
            <label for="validationDefault01">pass year</label>
                    <input type="text" class="form-control" id="validationDefault01" value="<?php echo $row['hon_dip'];?>" required name="hon_dip"><br>
                    <input type="text" class="form-control" id="validationDefault01" value="<?php echo $row['h_s_c'];?>" required name="h_s_c"><br>
                    <input type="text" class="form-control" id="validationDefault01" value="<?php echo $row['s_s_c'];?>" required name="s_s_c">
            </div>
           </div>
            <div class="col-md-4 my-2">
            <label for="validationDefault01"> Duration</label>
                    <input type="text" class="form-control" id="validationDefault01" value="<?php echo $row['years'];?>" required name="years"><br>
                    <input type="text" class="form-control" id="validationDefault01" value="<?php echo $row['session_hsc'];?>" required name="session_hsc"><br>
                    <input type="text" class="form-control" id="validationDefault01" value="<?php echo $row['session_ssc'];?>" required name="session_ssc">
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationDefault08">Enter your GitHub link</label>
                <input type="text" class="form-control" id="validationDefault08" placeholder="GitHub link" required name="github"value="<?php echo $row['github']; ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="validationDefault09">City</label>
                    <input type="text" class="form-control" id="validationDefault09" placeholder="City" required name="city"value="<?php echo $row['city']; ?>">
                </div>
                <div class="col-md-5 mb-3">
                    <label for="validationDefault10">State</label>
                    <input type="text" class="form-control" id="validationDefault10" placeholder="State" required name="state"value="<?php echo $row['state']; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="validationDefault11">Father's Name</label>
                    <input type="text" class="form-control" id="validationDefault11" placeholder="Father's Name" required name="father_name"value="<?php echo $row['father_name']; ?>">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault12">Mother's Name</label>
                    <input type="text" class="form-control" id="validationDefault12" placeholder="Mother's Name" required name="mother_name"value="<?php echo $row['mother_name']; ?>">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3 mb-3">
                <label for="validationDefault13">Enter your Date of Birth</label>
                <input type="date" class="form-control" id="validationDefault13" placeholder="Birth date" required name="dob"value="<?php echo $row['dob']; ?>">
            </div>
        </div>
        <div class="form-check">
    <label for="gender">Select your gender:</label>
    <input type="radio" name="gender" id="male" value="Male"<?php if ($row['gender'] === 'Male') echo 'checked'; ?>>
    <label for="male">Male</label>
    <input type="radio" name="gender" id="female" value="Female" <?php if ($row['gender'] === 'Female') echo 'checked'; ?>>
    <label for="female">Female</label>
    <input type="radio" name="gender" id="others" value="Others" <?php if ($row['gender'] === 'Others') echo 'checked'; ?>>
    <label for="others">Others</label>
</div>
<div class="form-check">
            <label for="marital status">Marital Status:</label><br>
            <input type="radio" name="marital_status" id="male" value="married"<?php if ($row['marital_status'] === 'married') echo 'checked';?>>
            <label for="married">married</label><br>
            <input type="radio" name="marital_status" id="female" value="unmarried"<?php if ($row['marital_status'] === 'unmarried') echo 'checked';?>>
            <label for="unmarried">unmarried</label><br>
            <input type="radio" name="marital_status" id="others" value="Engaged"<?php if ($row['marital_status'] === 'others') echo 'checked';?>>
            <label for="others">Engaged</label>
        </div>
        <div class="form-row">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="validationDefault09">Religion</label>
                    <input type="text" class="form-control" id="validationDefault09" placeholder="" required name="religion"value="<?php echo $row['religion'];?>">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault10">Nationality</label>
                    <input type="text" class="form-control" id="validationDefault10" placeholder="" required name="nationality"value="<?php echo $row['nationality'];?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="validationDefault11">Permanent Address</label>
                    <input type="text" class="form-control" id="validationDefault11" placeholder="" required name="permanent_address"value="<?php echo $row['permanent_address'];?>">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault12">Current Location</label>
                    <input type="text" class="form-control" id="validationDefault12" placeholder="" required name="current_location"value="<?php echo $row['current_location'];?>">
                </div>
            </div>
        </div>
        <div class="col-md-6">
                <label for="comment">confession:</label>
                <textarea class="form-control" rows="2" id="comment" name="confession"><?php echo $row['confession'];?></textarea>
            </div>
            <div class="col-md-3 mb-3">
                    <label for="validationDefault12">signature name</label>
                    <input type="text" class="form-control" id="validationDefault12" placeholder="" required name="signature_name"value="<?php echo $row['signature_name'];?>">
                </div>

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">Agree to terms and conditions</label>
            </div>
        </div>
        <button class="btn btn-primary col-md-2" type="submit">Submit form</button>
    </form>
</div>

    
</div>
 
  </section>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
  integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
   crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" 
   integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
     <script>
        $(document).ready(function() {
            $(".select").select2({
    tags: true,
    tokenSeparators: [',', ' ']
})
});
     </script>
</body>
</html> 