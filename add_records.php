<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JOB SEEKER PAGE</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<div id="header">
<label>JOB SEEKER PAGE</label>
</div>

<center>
<form method="post" action="dbcrud.php">
<table id="dataview">
<tr>
<td><input type="text" name="fname" placeholder="first name" /></td>
</tr>
<tr>
<td><input type="text" name="lname" placeholder="last name" /></td>
</tr>
<tr>
<td><input type="text" name="city" placeholder="city" /></td>
</tr>
<td><input type="text" name="email" placeholder="email" /></td>
</tr>
<td><input type="text" name="password" placeholder="password" /></td>
</tr>
<td><input type="text" name="phonenumber" placeholder="phonenumber" /></td>
</tr>
<td><input type="text" name="jobcategory" placeholder="category" /></td>
</tr>
<td><input type="text" name="experience" placeholder="experience" /></td>
</tr>
<td><input type="text" name="location" placeholder="location" /></td>
</tr>
<td><input type="text" name="careersummary" placeholder="careersummary" /></td>
</tr>
<td><input type="text" name="education" placeholder="education" /></td>
</tr>
<td><input type="text" name="school" placeholder="school" /></td>
</tr>
<td><input type="text" name="qualification" placeholder="qualification" /></td>
</tr>
<td><input type="text" name="certification" placeholder="certification" /></td>
</tr>
<td><input type="text" name="referees" placeholder="referees" /></td>
</tr>
<tr>
<td><button type="submit" name="save">save</button></td>
</tr>
</table>
</form>
</center>
</body>
</html>