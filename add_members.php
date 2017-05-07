<html>
<body>

<?php
//check input
if ($_POST['firstname']=="") {die("Name missing");}
if ($_POST['emailaddr']=="") {die("Please enter the email");}
if ($_POST['SchoolOption']=="") {die("No school selected");}

if (!preg_match("/^[a-zA-Z ]*$/", $_POST['firstname'])) { die("Only letters and white space allowed");}

if (!filter_var($_POST['emailaddr'], FILTER_VALIDATE_EMAIL)) { die("Invalid email format");}

$db = mysqli_connect("localhost","root","","test_members");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// read input of the multiple option list
if(isset($_POST['SchoolOption'])){ 
	$getInput = $_POST['SchoolOption'];
	$selectedOption = "";
	foreach ($getInput as $option => $value) {
		$selectedOption .= $value.' '; 
	}

//insert new member into datatable	
$query = "INSERT INTO members (member_name, email_addr, sch_name)
   VALUES ('".$_POST['firstname']."','".$_POST['emailaddr']."','".$selectedOption."')";
        if (mysqli_query($db, $query)) {
    		echo "New records created successfully<br>";
		echo "<a href= http://localhost/manage_members.php>Go Back</a> ";
	} else {
    		echo "Error: " . $query . "<br>" . mysqli_error($db);
	}
}

