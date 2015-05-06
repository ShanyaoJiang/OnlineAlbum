<?php
//This page is to do the function of management of the album. You can do the delete and upload picture here.
session_start();
if (isset($_SESSION['admin'])) {
  require 'info.php';
  $link = mysql_connect($db_host, $db_user, $db_pwd);
  mysql_select_db($db_name) or die(mysql_error());
  $sqlstr = "select * from `pictures`";
  $result = mysql_query($sqlstr) or die(mysql_error());
  echo "<html>";
  echo "<head>";
  echo "<title>Admin!!</title>";
  echo "<style>";
  echo "p{text-align:center;font-size:25px;color:orange;margin:0}";
  echo "div.d1{float:left;margin:10px;border:1px solid red;width:200px;height:180px;}";
  echo "div.d2{margin:0 auto;width:50%;text-align:center;}";
  echo "tr{font-size:25px;color:orange;}";
  echo "input.i1{font-size:20px;width:100px;height:30px;color:orange;background-color:gray;}";
  echo "form{text-align:center;}";
  echo "</style>";
  echo "</head>";
  echo "<body>";
  while ($row = mysql_fetch_array($result)) {
    echo "<div class='d1'><img src='" . $row['path'] . "' width='100%' height='100%'><br>" . $row['name'] . "</div>";
  }
  mysql_close($link);
  echo "<div style='clear:both'></div>";
  echo "<hr>";
  echo "<form id='insertform' name='iform' method='post' action='upload.php' enctype='multipart/form-data'>";
  echo "<div class='d2'>";
  echo "<table border='0' cellpadding='0' cellspacing='0'>";
  echo "<tr>";
  echo "<td>GivePicName&#58;&nbsp;</td>";
  echo "<td><input type='text' name='picname'/></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>GetPicFile</td>";
  echo "<td><input type='file' name='picfile'/></td>";
  echo "</tr>";
  echo "</table>";
  echo "</div>";
  echo "<hr>";
  echo "<p>GivPicStory</p>";
  echo "<div class='d2'>";
  echo "<textarea name='txt' cols='50' rows='10' style='text-align: center;'></textarea>";
  echo "</div>";
  echo "<hr>";
  echo "<input class='i1' type='submit' value='Upload' name='uploadsubmit'/>";
  echo "</form>";
  echo "<hr>";
  echo "<form id='deleteform' name='dform' method='post' action='delete.php'>";
  echo "<div class='d2'>";
  echo "<table border='0' cellpadding='0' cellspacing='0'>";
  echo "<tr>";
  echo "<td>NameForDelete&#58;&nbsp;</td>";
  echo "<td><input type='text' name='picname'/><td>";
  echo "</tr>";
  echo "</table>";
  echo "</div>";
  echo "<hr>";
  echo "<input class='i1' type='submit' value='Delete' name='deletesubmit'/>";
  echo "</form>";
  echo "</center>";
  echo "</body>";
  echo "</html>";
} else {
  header("Cache-control:no-cache,no-store,must-revalidate");
  header("Pragma:no-cache");
  header("Expires:0");
  header("location: admin.php");
}
?>