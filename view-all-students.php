<?php
include_once 'db_config.php';
$select_sql ="SELECT * FROM `cv_document`";

$result =mysqli_query($conn, $select_sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
     integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            include 'sidebar.php';
        ?>
        <div class="right-sidebar col-md-10 bg-info">
            <div class="row">
                <div class="col-md-10">
                    <h1>All data here</h1>
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">sl number</th>
                                <th scope="col">Name</th>
                                <th scope="col">phone</th>
                                <th scope="col">E-MAIL</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                       while ($row = mysqli_fetch_assoc($result)){
                     ?>
                            <tr>
                                <th scope="row"><?php echo $row['id']; ?></th>
                                <td><?php echo $row['first_name']; ?></td>
                                <td><?php echo $row['phone_number']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td>
                                    <a href="cv.php?id=<?php echo $row['id']; ?>" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                                    <a href="delete_query.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>

                            <?php
                       }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
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
