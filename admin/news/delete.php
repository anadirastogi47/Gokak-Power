    <?php
/* 
 DELETE.PHP
 Deletes a specific entry from the 'players' table
*/

 // connect to the database
 if(($connection=mysql_connect("127.0.0.1","root",""))===FALSE)
   die("could not connect database");
 if(mysql_select_db("gpel",$connection)===FALSE)
	die("could not select database");

 
 // check if the 'id' variable is set in URL, and check that it is valid
 if (isset($_GET['id']) && is_numeric($_GET['id']))
 {
 // get id value
 $id = $_GET['id'];
 
 // delete the entry
 $result = mysql_query("DELETE FROM news WHERE sysid=$id")
 or die(mysql_error()); 
 
 // redirect back to the view page
 header("Location: news.php");
 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
 header("Location: news.php");
 }
 
?>
