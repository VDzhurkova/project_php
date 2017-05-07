<html>
<body>

<?php
//Connect to database
$db = mysqli_connect("localhost","root","","test_members");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//add new member
echo"<form action=add_members.php method=post>";
echo"<fieldset>";
echo"<legend><h2>Add New Member</h2></legend>";
echo"<table>";
echo"<tr><td>Name:</td> <td> <input type=text name=firstname> </td></tr>" ;
echo"<tr><td>Email Address:</td> <td> <input type=text name=emailaddr> </td></tr>" ;
echo"<tr><td>School:</td> 
   <td> 
  <select name=SchoolOption[] multiple>
    <option value='School of Art'>School of Art</option>
    <option value='Sport school'>Sport school</option>
    <option value='College of Oxford'>College of Oxford</option>
  </select>
  </td></tr>" ;
echo"</table>";
echo"<input type=submit value=Submit>";
echo"</fieldset></form>";

//select members for a given school
echo"<form action=select_member.php method=post>";
echo"<fieldset>";
echo"<legend><h2>View Members</h2></legend>";
echo"<table>";
echo"<tr><td>Select school:</td> 
   <td> 
  <select name=SchoolOption>
    <option> </option>
    <option value='School of Art'>School of Art</option>
    <option value='Sport school'>Sport school</option>
    <option value='College of Oxford'>College of Oxford</option>
  </select>
  </td></tr>" ;
echo"</table>";
echo"<input type=submit value=Submit>";
echo"</fieldset></form>";


mysqli_close($db);

?>
</body></html>
