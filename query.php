<?php
  include 'connection.php';
  if(isset($_POST['submit'])){
      $name=$_POST['name'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $subject=$_POST['subject'];
      $message=$_POST['message'];

      $query= "insert into query
      (name,phone,email,subject,message) 
      values ('$name','$phone','$email','$subject','$message')";

      $run=mysqli_query($conn,$query) or die(mysqli_error());
      if($run)
      alert ("REQUEST SENT SUCESSFULLY !!!!");
      else
      alert ("REQUEST NOT SENT!!!!");
  }
?>