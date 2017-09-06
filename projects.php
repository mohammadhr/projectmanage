    <?php
include('session.php');
include('menu.php');
include('config.php'); // Includes Login Script
?>
    <!DOCTYPE html>

    <html dir="rtl" lang="fa-IR">

    <head>

    <title>مشاهده پست</title>

    <meta charset="utf-8" />

    </head>

    <body style="font-family: tahoma; font-size:14px;">

    <center>

    <?php
    $pid = $_GET['id'];
    //select all records from projects table

    $get_query = mysql_query("SELECT * FROM `projects` WHERE `id` = '$pid' ");

    $fetch_result = mysql_fetch_array($get_query);

    $postid = $fetch_result['id'];
    $postTitle = $fetch_result['title'];
    $poststartdate = $fetch_result['datestart'];
    $postenddate = $fetch_result['dateend'];

    echo "<h2>$postid</h2>";
    echo "<h2>$postTitle</h2>";
    echo "<h2>$poststartdate</h2>";
    echo "<h2>$postenddate</h2>";

      ?>

    </center>
    <div class="btn btn-success"><a href="projectlist.php">برگشت به صفحه قبل</a></div>
    </body>

    </html>