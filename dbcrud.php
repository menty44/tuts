<?php
include_once 'class.crud.php';
$crud = new CRUD();
if(isset($_POST['save']))
{
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $city = $_POST['city'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $phonenumber = $_POST['phonenumber'];
 $jobcategory = $_POST['jobcategory'];
 $experience = $_POST['experience'];
 $location = $_POST['location'];
 $careersummary = $_POST['careersummary'];
 $education = $_POST['education'];
 $school = $_POST['school'];
 $qualification = $_POST['qualification'];
 $certification = $_POST['certification'];
 $referees = $_POST['referees'];

 // insert
    $crud->create($fname,$lname,$city,$email,$password,$phonenumber,$jobcategory,$experience,$location,$careersummary,$education,$school,$qualification,$certification,$referees);
 // insert
 header("Location: index.php");
}

if(isset($_GET['del_id']))
{
 $id = $_GET['del_id'];
 $crud->delete($id);
 header("Location: index.php");
}

if(isset($_POST['update']))
{
 $id = $_GET['edt_id'];
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $city = $_POST['city'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $phonenumber = $_POST['phonenumber'];
 $jobcategory = $_POST['jobcategory'];
 $experience = $_POST['experience'];
 $location = $_POST['location'];
 $careersummary = $_POST['careersummary'];
 $education = $_POST['education'];
 $school = $_POST['school'];
 $qualification = $_POST['qualification'];
 $certification = $_POST['certification'];
 $referees = $_POST['referees'];
 
 $crud->update($fname,$lname,$city,$email,$password,$phonenumber,$jobcategory,$experience,$location,$careersummary,$education,$school,$qualification,$certification,$referees,$id);
 header("Location: index.php");
}
?>



