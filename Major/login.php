<?php

//login.php

include('admin/database_connection.php');

session_start();

if(isset($_SESSION["teacher_id"]))
{
  header('location:index1.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teacher Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: ;">

<div class="jumbotron text-center" style="margin-bottom:0; background-color:whitesmoke ;">
  <h1>Teacher Login</h1>
</div>
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>

<div class="container" style="">
  <div class="row" style="   ">
    <div class="col-md-4">

    </div>
    <div class="col-md-4" style="margin-top:20px; margin-left: -50px;">
      <div class="card" style="background-color:lightgray ;box-shadow: 20px 20px 50px black; width: 450px;">
        <div class="card-header" ><b>Teacher Login</div>
        <div class="card-body">
          <form method="post" id="teacher_login_form">
            <div class="form-group">
              <label style="color:black;">Enter Email Address</label>
              <input style="box-shadow: 4px 8px 10px black;" type="text" name="teacher_emailid" id="teacher_emailid" placeholder="Enter Email" class="form-control" />
              <span id="error_teacher_emailid" class="text-danger"></span>
            </div>
            <div class="form-group">
              <label style="color:black;">Enter Password</label>
              <input style="box-shadow: 4px 8px 10px black;" type="password" name="teacher_password" id="teacher_password" placeholder="Password" class="form-control" />
              <span id="error_teacher_password" class="text-danger"></span>
            </div>
            <div class="form-group">
              <input type="submit" name="teacher_login" id="teacher_login" class="btn btn-info" value="Login" />
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-4">

    </div>
  </div>
</div>

</body>
</html>

 


<script>
$(document).ready(function(){
  $('#teacher_login_form').on('submit', function(event){
    event.preventDefault();
    $.ajax({
      url:"check_teacher_login.php",
      method:"POST",
      data:$(this).serialize(),
      dataType:"json",
      beforeSend:function(){
        $('#teacher_login').val('Validate...');
        $('#teacher_login').attr('disabled','disabled');
      },
      success:function(data)
      {
        if(data.success)
        {
          location.href="index1.php";
        }
        if(data.error)
        {
          $('#teacher_login').val('Login');
          $('#teacher_login').attr('disabled', false);
          if(data.error_teacher_emailid != '')
          {
            $('#error_teacher_emailid').text(data.error_teacher_emailid);
          }
          else
          {
            $('#error_teacher_emailid').text('');
          }
          if(data.error_teacher_password != '')
          {
            $('#error_teacher_password').text(data.error_teacher_password);
          }
          else
          {
            $('#error_teacher_password').text('');
          }
        }
      }
    })
  });
});
</script>