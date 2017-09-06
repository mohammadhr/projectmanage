


<?php
include('login.php'); // Includes Login Script
include('menu.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: projectlist.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title> سامانه مدیریت پروژه</title>
<body >
    
  <form action="login.php" method="post" id="user-login" accept-charset="UTF-8">
  <div>
  <div class="form-item form-item-name form-type-textfield form-group"> <label class="control-label" for="edit-name">نام کاربری <span class="form-required" title="این فیلد اجباری است."></span></label>
<input class="form-control form-text required" name="username" value=""  type="text">
</div>
<div class="form-item form-item-pass form-type-password form-group"> <label class="control-label" for="edit-pass">گذرواژه <span class="form-required" ></span></label>
<input class="form-control form-text required"  name="password" type="password"></div><input name="form_build_id"  type="hidden">
<input name="submit" value="login" type="hidden">
<div class="form-actions form-wrapper form-group" id="edit-actions"><button type="submit" id="edit-submit" name="op" value="ورود" class="btn btn-warning form-submit"><span class="icon glyphicon glyphicon-import" aria-hidden="true"></span> ورود</button>
</div>
</div>
<span><?php echo $error; ?></span>
</form>
</body>
</html>

