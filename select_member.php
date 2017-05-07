<html>
<body>

<?php
if ($_POST['SchoolOption']=="") {die("No school selected");}

$db = mysqli_connect("localhost","root","","test_members");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 $selected = $_POST['SchoolOption'];

 echo "<u>".$selected."</u><br>";

//select from table and display the result
 $query = "SELECT member_name FROM members WHERE sch_name LIKE '%$selected%'";
 $result = mysqli_query($db, $query);
 while ($row = mysqli_fetch_row($result))
 {foreach($row as $key => $value)
 {print_r($value);} echo "<br>";}
 echo "<a href= http://localhost/manage_members.php>Go Back</a> ";
 mysqli_close($db);

?>
</body></html>




