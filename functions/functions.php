<?php 
  if(isset($_POST['ug_pg_submit'])){
      $name = $_POST['name'];
       $email = $_POST['email'];
       $phone_number = $_POST['phone_number'];
     $course_intrested = $_POST['course_intrested'];
     
      }
      $sql = "INSERT INTO admission(name,email,phone_number,course_intrested) VALUES ('$name','$email','$phone_number','$course_intrested')";
      $result = $conn->query($sql);
      
   if(isset($_POST['submit_enquiry'])){
      $name = $_POST['name'];
       $email = $_POST['email'];
       $subject = $_POST['subject'];
     $message = $_POST['message'];
     
      }
      $sql = "INSERT INTO admission_enquiry(name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
      $result = $conn->query($sql);
   
      $sql ="select * from professor_details";
      $result = $conn->query($sql);
   
      $sql ="select * from utils";
      $result = $conn->query($sql);
	  ?>