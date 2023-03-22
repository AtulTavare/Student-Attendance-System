<?php

//login.php

include('database_connection.php');

session_start();

if(isset($_SESSION["admin_id"]))
{
  header('location:index.php');
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
<body>

<div class="jumbotron text-center" style="margin-bottom:0; background-color:whitesmoke ;" >
  <h1>Admin Login</h1>
</div>
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

<div class="container">
  <div class="row"style=" ">
    <div class="col-md-4">

    </div>
    <div class="col-md-4" style="margin-top:20px; margin-left: -50px;">
      <div class="card" style="background-color:lightgray ; box-shadow: 20px 20px 50px black; width: 450px; ">
        <div class="card-header"><b>Admin Login</div>
        <div class="card-body">
          <form method="post" id="admin_login_form">
            <div class="form-group">
              <label style="color:black;">Enter Username</label>
              <input style="box-shadow: 4px 8px 10px black;" type="text" name="admin_user_name" id="admin_user_name" placeholder="Enter Username" class="form-control" />
              <span id="error_admin_user_name" class="text-danger"></span>
            </div>
            <div class="form-group">
              <label style="color:black;">Enter Password</label>
              <input style="box-shadow: 4px 8px 10px black;" type="password" name="admin_password" id="admin_password" placeholder="Enter Password" class="form-control" />
              <span id="error_admin_password" class="text-danger"></span>
            </div>
            <div class="form-group">
              <input type="submit" name="admin_login" id="admin_login" class="btn btn-info" value="Login" />
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
  $('#admin_login_form').on('submit', function(event){
    event.preventDefault();
    $.ajax({
      url:"check_admin_login.php",
      method:"POST",
      data:$(this).serialize(),
      dataType:"json",
      beforeSend:function(){
        $('#admin_login').val('Validate...');
        $('#admin_login').attr('disabled', 'disabled');
      },
      success:function(data)
      {
        if(data.success)
        {
          location.href = "<?php echo $base_url; ?>admin";
        }
        if(data.error)
        {
          $('#admin_login').val('Login');
          $('#admin_login').attr('disabled', false);
          if(data.error_admin_user_name != '')
          {
            $('#error_admin_user_name').text(data.error_admin_user_name);
          }
          else
          {
            $('#error_admin_user_name').text('');
          }
          if(data.error_admin_password != '')
          {
            $('#error_admin_password').text(data.error_admin_password);
          }
          else
          {
            $('#error_admin_password').text('');
          }
        }
      }
    });
  });
});
</script>