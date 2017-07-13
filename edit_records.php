<?php
include_once 'class.crud.php';
$crud = new CRUD();
if(isset($_GET['edt_id']))
{
 $res=mysql_query("SELECT * FROM users WHERE user_id=".$_GET['edt_id']);
 $row=mysql_fetch_array($res);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>php oops crud tutorial part-2 by cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<div id="header">
<label>php oops crud tutorial part-2 by cleartuts</label>
</div>

<center>
<form method="post" action="dbcrud.php?edt_id=<?php echo $_GET['edt_id'] ?>">
<table id="dataview">
<tr><td><input type="text" name="fname" placeholder="first name" value="<?php echo $row['first_name'] ?>" /><br /></td></tr>
<tr><td><input type="text" name="lname" placeholder="last name" value="<?php echo $row['last_name'] ?>" /></td></tr>
<tr><td><input type="text" name="city" placeholder="city" value="<?php echo $row['user_city'] ?>" /></td></tr>
<tr><td><input type="text" name="email" placeholder="email" value="<?php echo $row['user_email'] ?>" /><br /></td></tr>
<tr><td><input type="text" name="password" placeholder="password" value="<?php echo $row['user_password'] ?>" /></td></tr>
<tr><td><input type="text" name="phonenumber" placeholder="phonenumber" value="<?php echo $row['user_phonenumber'] ?>" /></td></tr>
<tr><td><input type="text" name="jobcategory" placeholder="jobcategory" value="<?php echo $row['user_jobcategory'] ?>" /><br /></td></tr>
<tr><td><input type="text" name="experience" placeholder="experience" value="<?php echo $row['user_experience'] ?>" /></td></tr>
<tr><td><input type="text" name="location" placeholder="location" value="<?php echo $row['user_location'] ?>" /></td></tr>
<tr><td><input type="text" name="careersummary" placeholder="careersummary" value="<?php echo $row['user_careersummary'] ?>" /><br /></td></tr>
<tr><td><input type="text" name="education" placeholder="education" value="<?php echo $row['user_education'] ?>" /></td></tr>
<tr><td><input type="text" name="school" placeholder="school" value="<?php echo $row['user_school'] ?>" /></td></tr>
<tr><td><input type="text" name="qualification" placeholder="qualification" value="<?php echo $row['user_qualification'] ?>" /><br /></td></tr>
<tr><td><input type="text" name="certification" placeholder="certification" value="<?php echo $row['user_certification'] ?>" /></td></tr>
<tr><td><input type="text" name="certification" placeholder="certification" value="<?php echo $row['user_certification'] ?>" /></td></tr>
<tr><td><input type="text" name="referees" placeholder="referees" value="<?php echo $row['user_referees'] ?>" /></td></tr>
<tr><td><button type="submit" name="update">update</button></td></tr>
</table>
</form>
</table>
</center>
</body>
</html>