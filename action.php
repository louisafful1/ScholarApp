<?php
include_once"include/database.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
$fname=$_POST['fname'];
$sname=$_POST['sname'];
$gender=$_POST['gender'];
$date=$_POST['date'];
$email=$_POST['email'];
$phone=$_POST['Phone-Number'];
$shs=$_POST['shs'];
$note=$_POST['note'];
// handling the wassce file
$wassce =$_FILES['wassce']['name'];
$wassce_size = $_FILES['wassce']['size'];
$wassce_temp_name = $_FILES['wassce']['tmp_name'];
$wassce_folder = 'uploads/wassce/'.$wassce;

// handling transcript
$transcript =$_FILES['transcript']['name'];
$transcript_size = $_FILES['transcript']['size'];
$transcript_temp_name = $_FILES['transcript']['tmp_name'];

$transcript_folder = 'uploads/transcript/'.$transcript;
 $insert="insert into details(form_id, fname, sname, gender, d_o_b, email, phone, shs, note, wassce, transcript) values(DEFAULT, '$fname', '$sname', '$gender', '$date', '$email', '$phone', '$shs', '$note', '$wassce', '$transcript');";
 $execute=mysqli_query($connection, $insert);

//  fetching the emails from the db
$select_email =mysqli_query($connection, "SELECT email FROM `details`");

 if($execute){
       if($wassce_size > 2000000 && $transcript_size <= 2000000){
             echo "<script>alert('Sorry, The wassce file is too large!')</script>";
       }else if ( $transcript_size > 2000000 && $wassce_size <= 2000000){
              echo "<script>alert('Sorry, This file is too large!')</script>";
              
       }else if($wassce_size > 2000000 && $transcript_size > 2000000 ){
              echo "<script>alert('Sorry, This two files you submitted are too large!')</script>";
       } else{
               move_uploaded_file($wassce_temp_name, $wassce_folder);
               move_uploaded_file($transcript_temp_name, $transcript_folder);
               echo "<script>
               alert('Application submitted Successfully');
                 </script>";
       }
} else if(mysqli_num_rows ($select_email) > 0){
       echo "<script>
       alert('Sorry, This Email exists');
         </script>";
} //I will validate the date here
else{
       echo "<script>
       alert('Sorry, There was a problem with your submission. Contact our Technical team now for assistance.')</script>".mysqli_error($connection);
}

}

// I will be validating the inputs here

?>
