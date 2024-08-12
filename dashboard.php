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
             <!-- <div col-md-4 mb-3>
                <div class="mb-4 d-flex justify-content-center">
                  <img src="cv-img/color-gallery.png"
                  alt="example placeholder" style="width: 300px;" />
              </div>
              <div class="d-flex justify-content-center">
                  <div class="btn btn-primary btn-rounded">
                      <label class="form-label text-white m-1" for="customFile1">Choose your image</label>
                      <input type="file" class="form-control d-none" id="customFile1" />
                  </div>
              </div>-->
               
                <div class="form-row">
                 <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault01">First name</label>
                        <input type="text" class="form-control" id="validationDefault01" placeholder="First name"  required name="first_name">
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="validationDefault02">Last name</label>
                        <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" required name="last_name">
                      </div>
                    
                 </div>
                 <div class="form-row">
                  <div class="row">
                    <div class="col-md-8 mb-3">
                        <label for="validationDefault03">Enter your Adress</label>
                        <input type="text" class="form-control" id="validationDefault03" placeholder="adress" required>
                      </div>
                      
                  <div class="row">
                     <div class="col-md-4 mb-3">
                         <label for="validationDefault01"> Enter your phone number</label>
                         <input type="text" class="form-control" id="validationDefault01" placeholder="phone number"  required>
                       </div>
                       <div class="col-md-4 mb-3">
                         <label for="validationDefault02">Enter your E-mail</label>
                         <input type="email" class="form-control" id="validationDefault02" placeholder="E-mail" required>
                       </div>
                     
                  </div>
                  <div class="col-md-8">
                    <label for="comment">Career Objective:</label>
                    <textarea class="form-control" rows="5" id="comment">
                      
                    </textarea>
                  </div>
                  <div class="col-md-8 mb-3">
                    <label for="validationDefault05">Special Qualification:</label>
                    <select class="form-control select" multiple="multiple">
                        <option selected="selected">Html5,Css3</option>
                        <option>Jquery</option>
                        <option selected="selected"> Bootstrap</option>
                        <option selected="selected"> MySQL basic</option>
                        <option>Photoshoop</option>
                        <option selected="selected">Php basic
                        </option>
                      </select>
                  </div>
                  <div class="col-md-8 mb-3">
                    <label for="validationDefault05">My Completed Project List</label>
                    <select class="form-control select" multiple="multiple">
                        <option selected="selected"><a href="http://raxmasters.com/">http://raxmasters.com/</a></option>
                        <option><a href="http://raxmasters.com/">http://raxmasters.com/</a></option>
                        <option selected="selected"><a href="https://www.visiconnex.com/">https://www.visiconnex.com/</a></option>
                        <option selected="selected"><a href="https://www.gamopo.com/">https://www.gamopo.com/</a></option>
                        <option selected="selected"><a href="https://openskydata.com/">https://openskydata.com/</a>
                        </option>
                      </select>
                      <div class="col-md-4 mb-3">
                        <label for="validationDefault03">Enter your github link</label>
                        <input type="text" class="form-control" id="validationDefault03" placeholder="github link" required>
                      </div>
                  </div>
                 
                   <div class="row">
                    <label for="validationDefault05"><h3>Working Experience</h3></label>
                    <div class=" col-md-3 mb-3">
                        
                        <input type="text" class="form-control" id="validationDefault05" placeholder="Name of Organization" required>
                      </div>
                      <div class=" col-md-2 mb-3">
                       
                        <input type="text" class="form-control" id="validationDefault05" placeholder="Designation " required>
                      </div>
                      <div class=" col-md-3 mb-3">
                       
                        <input type="text" class="form-control" id="validationDefault05" placeholder="Duration" required>
                      </div>
                   </div>
                 
                <div class="form-row">
                 <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="validationDefault03">City</label>
                        <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
                      </div>
                      <div class="col-md-5 mb-3">
                        <label for="validationDefault04">State</label>
                        <input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
                      </div>
                     
                 </div>
                 <div class="row">
                   
                      <div class="col-md-3 mb-3">
                        <label for="validationDefault05">Father's Name</label>
                        <input type="text" class="form-control" id="validationDefault05" placeholder="Fathers Name" required>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationDefault05">Mother's Name</label>
                        <input type="text" class="form-control" id="validationDefault05" placeholder="Father's Name" required>
                      </div>
                     
                 </div>
                </div>
                <divc class="row">
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault05">Enter your Date-of-birth</label>
                    <input type="text" class="form-control" id="validationDefault05" placeholder="Birth-date" required>
                  </div>
                 
                </div>
                <div class="checkbox">
                  <h4> 
                    Gender
                  </h4>
                <input type="radio" id="html" name="fav_language" value="HTML">
              
                  <label for="html">Male</label><br>
<input type="radio" id="css" name="fav_language" value="CSS">
<label for="css">Female</label><br>

                </div>
             <div class="row">
            <div class="col-md-3">
              <h4>Marital Status</h4>
              <select class="col-md-4" >
               
                <option value="1">Maried</option>
                <option value="2">unmarried</option>
                
              </select>
            </div>
              <div class="col-md-5">
                <h4>Nationality</h4>
              <select class="col-md-3" >
               
                <option value="1">Bangladeshi</option>
                <option value="2">indian</option>
                
              </select>
              </div>
            <div class="col-md-">
              <h4>Religion</h4>
              <select  >
               
                <option value="1">islam</option>
                <option value="2">khristian</option>
                
              </select>
            </div>
             </div>
             <div class="form-row">
              <div class="row">
                <div class="col-md-8 mb-3">
                  <label for="validationDefault03">Enter your Adress</label>
                  <input type="text" class="form-control" id="validationDefault03" placeholder="Permanent-address" required>
                </div>
                <div class="col-md-8 mb-3">
                  <input type="text" class="form-control" id="validationDefault03" placeholder="Present-address" required>
                </div>
              </div>
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