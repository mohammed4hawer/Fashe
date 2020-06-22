<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
	<script src="https://kit.fontawesome.com/caabacad01.js" crossorigin="anonymous"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
body
{
	padding: 0;
	margin: 0;
	background: url(https://wallpapercave.com/wp/vAGLTWa.jpg), no-repeat;
	background-size: cover;
}
.row
{
	margin: 0;
}
.login-panel
{
	margin-top: 50px;
	margin-left: 5%;
	width: 380px;
	background: none;
}
.panel-heading
{
	font-size: 40px;
	border-bottom: 5px solid #F28;
	font-family: sans-serif;
	font-weight: 600;
	color: #FFF;
	padding: 16px 0;
	text-shadow: 1px 2px 3px #F48;
	margin-bottom: 50px;
}
.formgroup
{
	width: 100%;
	overflow: hidden;
	font-size: 18px;
	padding: 8px 0;
	margin: 8px 0;
	border-bottom: 1px solid #F28;
}
.formcontrol
{
	background:none;
	outline: none;
	border:none;
	width: 80%;
	float: left;
	margin:0 10px;
	color: #FFE;
	font-size: 18px;
}
.formcontrol::placeholder
{
	color: #FCC;
}
i
{
    width: 26px;
    float: left;
	color: white;
    text-align: center;
}
.rem
{
	color: #FFF;
	font-size: 14px;
	font-weight: 600;
}
.btnn
{
	width: 100%;
    background: none;
    border: 1px solid #F28;
    box-shadow: 0.5px 0.5px 1px 1px #F28;
    color: #F05;
    padding: 5px;
	text-shadow: 1px 1px 1px #F27;
    font-size: 18px;
    font-weight: 800;
    cursor: pointer;
    margin: 12px 0;
}
.btnn:hover
{
    color: #E12;
    border: 2px solid #F14;
    box-shadow: 0.6px 0.6px 1px 1px #F2C;
}
.btnnn
{
	width: 100%;
    background: none;
    border: 1px solid #F28;
    box-shadow: 0.5px 0.5px 1px 1px #F28;
    color: #F05;
    padding: 5px;
	text-shadow: 1px 1px 1px #F27;
    font-size: 18px;
    font-weight: 600;
    cursor: pointer;
}
.btnnn:hover
{
	color: #E12;
    border: 1px solid #F14;
    box-shadow: 0.6px 0.6px 1px 1px #F2C;
}
.siup
{
	width: 200px;
	height: 50px;
	float: right;
	padding: 5px;
	margin-right: 20px;
}
#formd
{
	padding: 10px;
	margin-left: 5px;
}
.fw
{
	font-weight: 600;
	font-size: 16px;
}
.cx
{
	color: #F00;
}
.modal-content
{
	background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(https://wallpapercave.com/wp/vAGLTWa.jpg);
	color: #FFF;    
}
.form-control
{
	font-size: 16px;
}
.btn
{
	font-size: 16px;
	font-weight: 600;
}
.btn-special
{
	color: #FFE;
	background-color: #001;
}
.btn-special:hover
{
	color: #001;
	background-color: #FCF;
}
	</style>
</head>
<body>
	<div class="row">
<div class="siup">
<!--======================================================-->
<!-- Button trigger modal -->
<button type="button" class="btnnn" data-toggle="modal" data-target="#exampleModel">
Sign Up
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 style="font-weight: 900;" class="modal-title" id="exampleModalLabel">Sign Up</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="cx" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding: 6px; color: wheat; font-size: 16px; font-weight: 600; margin-bottom: 8px;">
	  Please fill in this form to create an account.
	  </div>
<!--==============================================================-->	 
<form id="formd" action="fun/add_user.php" method="post" enctype="multipart/form-data">
     <label class="fw">Username:</label>
     <input type="text" name="username" class="form-control"><br>
     <label class="fw">Password:</label>   
     <input type="password" name="password" class="form-control"><br> 
     <label class="fw">Email:</label>  
     <input type="email" name="email" class="form-control"><br>
     <label class="fw">Image:</label>   
     <input type="file" name="img"  class="form-control"><br> 
     <input type="hidden" name="priv" value="3">
     <br>
      <div class="modal-footer">
		<button type="button" class="btn btn-special" data-dismiss="modal">Close</button>
		<input type="submit" name="submit" value="Sign Up" class="btn btn-info">
	  </div>
	  </form>
    </div>
  </div>
</div>
<!--======================================================-->
</div>

	<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
	<div class="login-panel">
	<div class="panel-heading">Log in</div>
	<div class="panel-body">
	<form action="fun/sign_in.php" method="post">
		<div class="formgroup">
		<i class="fas fa-user">&nbsp;</i>
		<input class="formcontrol" placeholder="E-mail or Username" name="email" type="text" autofocus="">
		</div>
		<div class="formgroup">
		<i class="fas fa-key">&nbsp;</i>
		<input class="formcontrol" placeholder="Password" name="password" type="password">
	    </div>
		<div class="checkbox">
		<label class="rem">
		<input name="remember" type="checkbox" value="Remember Me">Remember Me
		</label>
		</div>
		<input type="submit" class="btnn" name="login" value="Login">
		</form>
		</div>
	</div>
</div><!-- /.col-->
</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
