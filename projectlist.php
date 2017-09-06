<?php
include('session.php');
include('menu.php');
include('config.php'); // Includes Login Script
?>
<!DOCTYPE html>
<html>
      <head>
       <meta charset="utf-8">
       <title>project list</title>
   </head>
      <body>
          <?php
        if ($db) {
            $sql = "SELECT * FROM `projects`";
            $result = mysql_query($sql, $connection);
            // echo "<table border='1' class=\"w3-table w3-striped w3-border\">
            //   <tr>
            //      <th>id</th>
            //      <th>title</th>
            //      <th>startdate</th>
            //      <th>enddate</th>
            //    </tr>";
            while ($rows = mysql_fetch_array($result)) {
                // echo "<tr>";
                // echo "<td>" . $rows['id']. "<br>";
                // echo "<td>" . $rows ['title']. "<br>";
                // echo "<td>" . $rows['datestart']. "<br>";
                // echo "<td>" . $rows['dateend']. "<br>";
                // echo "</tr>";
                $postTitle = $rows['title'];
                $postId = $rows['id'];
                echo "<h2><a href=projects.php?id=$postId>$postTitle</a></h2>";
            }
            mysql_close($connection); // Closing Connection
        }
    ?>        
   </body>
</html>
