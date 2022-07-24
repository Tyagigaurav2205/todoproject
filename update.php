<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> 
    <script src="https://kit.fontawesome.com/eb2cfeef2f.js"crossorigin="anonymous"></script>
</head>



<?php
$id= $_GET['ID'];
include "config.php";
$Rdata = mysqli_query($con,  "select * from tbltodo where Id= $id");
$data = mysqli_fetch_array($Rdata);
?>


<body class="bg-info">
<form action="update1.php" method="POST">
<div class="container">
  <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
    <h3 class="text-center text-danger font-monospace">TIME TO UPDATE</h3>
    <div class="col-10">
    <input type="text" required value="<?php echo $data['list'] ?> "name="list" class="form-control ">
    </div>
       <div class="col-2">
<button class="btn btn-outline-success"><i class="fa-brands fa-golang"></i></button>
<input type="hidden" name = "id" value="<?php echo $data['Id'] ?>" >
       </div>
  </div>
</div> 
</form>
</body>
</html>