<?php
include_once 'class.crud.php';
$crud = new CRUD();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<title>JOB SEEKER </title>
</head>
<body>

<div id="header">
<label>JOB SEEKER</label>
</div>

<center>
<table id="dataview">
<tr>
<td colspan="5"><a href="add_records.php">add new</a></td>
</tr>
<?php
$res = $crud->read();
if(mysql_num_rows($res)>0)
{
 while($row = mysql_fetch_array($res))
 {
 ?>
    <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['first_name']; ?></td>
    <td><?php echo $row['last_name']; ?></td>
    <td><?php echo $row['user_city']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['password']; ?></td>
    <td><?php echo $row['phonenumber']; ?></td>
    <td><?php echo $row['jobcategory']; ?></td>
    <td><?php echo $row['experience']; ?></td>
    <td><?php echo $row['location']; ?></td>
    <td><?php echo $row['careersummary']; ?></td>
    <td><?php echo $row['education']; ?></td>
    <td><?php echo $row['school']; ?></td>
    <td><?php echo $row['qualification']; ?></td>
    <td><?php echo $row['certification']; ?></td>
    <td><?php echo $row['referees']; ?></td>
    <td><a href="edit_records.php?edt_id=<?php echo $row['user_id']; ?>">edit</a></td>
    <td><a href="dbcrud.php?del_id=<?php echo $row['user_id']; ?>">delete</a></td>
    </tr>
    <?php
 } 
}
else
{
 ?><tr><td colspan="5">Nothing here... add some new</td></tr><?php
}
?>
</table>

<footer>
<label>Visit <a href="http://cleartuts.blogspot.com/">cleartuts</a> for more tutorials...</label>
</footer>

</center>
</body>
</html>