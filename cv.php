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
    <title>Crriculam vitae</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="cv.css">
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
   integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />-->
</head>
<body>
   <sction class="name-section">
    <div class="container">
        <div class="main-column">
            <div class="adress-column">
                <h1><?php echo $row['first_name'].''.$row['last_name']; ?></h1>
                <p>Adress:<?php echo $row['address'];?></p>
                <a href="tel:01625-672075"class="phone">Mobile:<?php echo $row['phone_number'];?></a><br>
                <a href="mailto:denuryc@gmil.com"class="email">Email:<?php echo $row['email'];?></a>
            </div>
            <div class="right-column">
                <img src="<?php echo $row['img'];?>">
            </div>
        </div>
    </div>
   </sction> 
   <section class="career-section">
    <div class="container">
        <div class="objective">
            <u><h3>Career Objective:</h3></u>
       <p><?php echo $row['objective'];?></p>
        </div>
      <div class="qualification">
        <u> <h3>Special Qualification:</h3></u>
        <p>Good command and specialty over presentation.<br>
        WEB DEVELOPMENT
        </p>
                 <ul>
                <?php 
                foreach(json_decode ($row['qualification'])as $qualification){
                    echo "<li>$qualification</li>";
                }
                ?>  
                </ul>
      </div>

                <div class="project">
                    <h2>My Completed Project List</h2>
                    <ul>
                    <?php 
                foreach(json_decode ($row['project_list'])as $project_list){
                    echo "<li>$project_list</li>";
                }
                ?>     
                    </ul>
                    </div> 
                    <div class="github">
                        <h2>GitHub Link</h2>
                        <a href="<?php echo $row['github'];?>"><?php echo $row['github'];?></a>
                    </div>
                    <div class="working-ex">
                        <h1>Working Experience</h1>
                        <div class="main-column">
                            <div class="flex-column">
                                <p>Name of Organization</p>
                                <p>Designation </p>
                                <p>Duration</p>
                            </div>
                            <div class="flex-column">
                                <p>: <?php echo $row['organization'];?></p>
                                <p>: <?php echo $row['designation'];?></p>
                                <p>: <?php echo $row['duration']; ?></p>
                            </div>
                            <div class="flex-column">

                            </div>
                            <div class="flex-column">
                                
                            </div>
                            
                        </div>

                    </div>         
    </div>
</section>
<section class="table-section">
   <div class="container">
    <h1><u>Academic Qualification:</u></h1>
    <table border="2">
        <tr >
            <th>Exam Title</th>
            <th>Concentration/Major</th>
            <th>Institute</th>
            <th>Result</th>
            <th> Pas.Year</th>
            <th> Duration</th>
        </tr>
       <!-- <tr>
          <td colpad="">B.S.C</td>
            <td>CSE </td>
            <td>pending</td>
            <td></td>
            <td>Continue</td>
            <td>4</td>

        </tr>-->
        <tr>
            <td><?php echo $row['honers_diploma'];?></td>
            <td><?php echo $row['technology_department'];?></td>
            <td><?php echo $row['honers']; ?></td>
            <td><?php echo $row['cgpa']; ?></td>
            <td><?php echo $row['hon_dip'];?></td>
            <td><?php echo $row['years'];?></td>

        </tr>
         
       <tr><td><?php echo $row['hsc_alim'];?></td>
        <td><?php echo $row['group_subject'];?></td>
        <td><?php echo $row['hsc'];?></td>
            <td><?php echo $row['gpa']; ?></td>
            <td><?php echo $row['h_s_c'];?></td>
            <td><?php echo $row['session_hsc'];?></td>
        </tr>
       
       <tr><td><?php echo $row['ssc_dakhil'];?></td>
        <td><?php echo $row['group']; ?></td>
        <td><?php echo $row['ssc'];?> </td>
            <td><?php echo $row['g_p_a']; ?></td>
            <td><?php echo $row['s_s_c'];?></td>
            <td><?php echo $row['session_ssc'];?></td>
        </tr>
    </table>
   </div>        
</section>
<section class="details">
    <div class="container">
        <div class="Personal">
            <h1><u>Personal Details :</u></h1>
            <div class="main-column">
                <div class="flex-column">
                    <p>Father Name</p>
                    <p>Mother name</p>
                    <p>Date of birth</p>
                    <p>Gender</p>
                    <p>Marital Status </p>
                    <p>Nationality</p>
                    <p>Religion </p>
                    <p>Permanent Address</p>
                    <p>Current Location </p>
                </div>
                <div class="flex-column">
                    <p>: <?php echo $row['father_name'];?></p>
                    <p>: <?php echo $row['mother_name'];?></p>
                    <p>: <?php echo $row['dob'];?></p>
                    <p>: <?php echo $row['gender'];?></p>
                    <p>: <?php echo $row['marital_status'];?></p>
                    <p>: <?php echo $row['nationality'];?></p>
                    <p>: <?php echo $row['religion'];?></p>
                    <p>: <?php echo $row['permanent_address'];?></p>
                    <p>: <?php echo $row['current_location'];?></p>
                </div>
                <div class="flex-column">
        
                </div>
                <div class="flex-column">
                    
                </div>
            </div>
            <p><?php echo $row['confession'];?></p>
            <h4><?php echo $row['signature_name'];?></h4>
    </div>
</section>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" 
 integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
</body>
</html>