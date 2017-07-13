<?php
include_once 'dbconfig.php';

class CRUD
{
 public function __construct()
 {
  $db = new DB_con();
 }
 
 public function create($id,$fname,$lname,$city,$email,$password,$phonenumber,$jobcategory,$experience,$location,$careersummary,$education,$school,$qualification,$certification,$referees )
 {
  mysql_query("INSERT INTO users(user_id,first_name,last_name,user_city,user_email,user_password,user_phonenumber,user_jobcategory,user_experience,user_location,user_careersummary,user_education,user_qualification,user_certification,
   user_referees) VALUES('$id','$fname','$lname','$city','$email','$password','$phonenumber','$jobcategory','$experience','$location','$careersummary','$education','$school','$qualification','$certification','$referees')");
 }
 
 public function read()
 {
  return mysql_query("SELECT * FROM users");
 }
 
 public function delete($id)
 {
  mysql_query("DELETE FROM users WHERE user_id=".$id);
 }
 
 public function update($fname,$lname,$city,$email,$password,$phonenumber,$jobcategory,$experience,$location,$careersummary,$education,$school,$qualification,$certification,$referees,$id)
 {
  mysql_query("UPDATE users SET first_name='$fname', last_name='$lname', user_city='$city' , user_email='$email', user_password='$password' , user_phonenumber='$phonenumber' , user_jobcategory='$jobcategory' , user_experience='$experience' , user_location='$location' , user_careersummary='$careersummary' , user_education='$education' , user_school='$school' , user_qualification='$qualification' , user_certification='$certification' , user_referees='$referees'  WHERE user_id=".$id);
 }
}
?>