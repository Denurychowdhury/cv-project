
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
        <h1>Regestration Form</h1>
        <form method="POST"action="insert_query.php">
  <div class="form-row">
    <div class="col-md-4 mb-3">
        <label for="validationDefault02">Address</label>
        <input type="text" class="form-control" id="validationDefault02" placeholder="Address" required name="address">
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationDefault01">Enter your phone number</label>
        <input type="text" class="form-control" id="validationDefault01" placeholder="Phone number" required name="phone_number">
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationDefault02">Enter your E-mail</label>
        <input type="email" class="form-control" id="validationDefault02" placeholder="E-mail" required name="email">
    </div>
</div>

              <div class="col-md-8">
    <label for="comment">Career Objective:</label>
    <textarea class="form-control" rows="5" id="comment" name="objective"></textarea>
</div>
<div class="col-md-8 mb-3">
    <label for="validationDefault05">Special Qualification:</label>
    <select class="form-control select" multiple="multiple" name="qualification[]">
    <option selected="selected">Html5,Css3</option>
                    <option>Jquery</option>
                    <option selected="selected">Bootstrap</option>
                    <option selected="selected">MySQL basic</option>
                    <option>Photoshop</option>
                    <option selected="selected">Php basic</option>
    </select>
</div>
<div class="col-md-8 mb-3">
    <label for="validationDefault05">My Completed Project List</label>
    <select class="form-control select" multiple="multiple" name="project_list[]">
        <option selected="selected">http://raxmasters.com</option>
        <option>http://raxmasters.com</option>
        <option selected="selected">https://www.visiconnex.com</option>
        <option selected="selected">https://www.gamopo.com</option>
        <option selected="selected">https://openskydata.com</option>
    </select>
</div>
<div class="col-md-4 mb-3">
    <label for="validationDefault03">Enter your GitHub link</label>
    <input type="text" class="form-control" id="validationDefault03" placeholder="GitHub link" required name="github">
</div>          
   <div class="form-row">
    <div class="row">
        <div class="col-md-3 mb-3">
            <label for="validationDefault03">City</label>
            <input type="text" class="form-control" id="validationDefault03" placeholder="City" required name="city">
        </div>
        <div class="col-md-5 mb-3">
            <label for="validationDefault04">State</label>
            <input type="text" class a="form-control" id="validationDefault04" placeholder="State" required name="state">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 mb-3">
            <label for="validationDefault05">Father's Name</label>
            <input type="text" class="form-control" id="validationDefault05" placeholder="Father's Name" required name="father_name">
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationDefault06">Mother's Name</label>
            <input type="text" class="form-control" id="validationDefault06" placeholder="Mother's Name" required name="mother_name">
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-3 mb-3">
        <label for="validationDefault07">Enter your Date of Birth</label>
        <input type="date" class="form-control" id="validationDefault07" placeholder="Birth date" required name="dob">
    </div>
</div>
<div class="form-check">
    <label for="">Select your gender</label>
    <input type="radio" name="gender" id="male" value="male">
    <label for="male">Male</label>
    <input type="radio" name="gender" id="female" value="female">
    <label for="female">Female</label>
    <input type="radio" name="gender" id="others" value="others">
    <label for="others">Others</label>
</div>
 <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                  Agree to terms and conditions
                </label>
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