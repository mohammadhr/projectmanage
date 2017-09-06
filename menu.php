<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="bootstrap/css/style.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
</head>
<body>
 <div class="cssclsmenu">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">سامانه مدیریت پروژه ها</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="">صفحه اصلی</a></li>
      <li><a href="index.php">ورود</a></li>
      <li><a href="logout.php">خروج</a></li>
    </ul>
        <ul class="nav navbar-nav navbar-left">
      <div id="profile">
      <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
      </div>
    </ul>
  </div>
</nav>
</div>
	
</body>
</html>