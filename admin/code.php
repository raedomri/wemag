
<?php
include('security.php');
$connection = mysqli_connect("localhost","root","","wetalkk");
if(isset($_POST['login_btn']))
{
  $email_login = $_POST['email'];
  $password_login = $_POST['password'];

   $query ="SELECT * FROM register WHERE email='$email_login' AND password='$password_login' ";
   $query_run = mysqli_query($connection, $query);
   if(mysqli_fetch_array($query_run))
   {
     $_SESSION['username'] = $email_login;
     header('Location: index.php');
   }
   else
   {
     $_SESSION['status'] = 'Email id / Password is Invalid';
     header('Location: login.php');
   }
}


if(isset($_POST['podcast_btn']))
{
  
  $titleV = $_POST['titleV'];
  $subtitleV = $_POST['subtitleV'];
  $descriptionV = $_POST['descriptionV'];
  $video = $_FILES["faculty_video"]['name'];

  if(file_exists("upload/" .$_FILES["faculty_video"]['name']))
  {
    

  
   $query =" INSERT INTO podcast (`titleV`,`subtitleV`,`descriptionV`,`video`) VALUES
    ('$titleV','$subtitleV','$descriptionV','$video') ";
   $query_run = mysqli_query($connection, $query);
   if($query_run)
   {
     move_uploaded_file($_FILES["faculty_video"]['tmp_name'],  "upload/".$_FILES["faculty_video"]["name"]);
     $_SESSION['success'] = "podcast us added";
     header('Location: podcast.php');
   }
   else
   {
     $_SESSION['success'] = 'podcast us not added';
     header('Location: podcast.php');
   }
}
}




$connection = mysqli_connect("localhost","root","","wetalkk");
if(isset($_POST['wetallent_btn']))
{
  
  $title = $_POST['title'];
  $subtitle = $_POST['subtitle'];
  $description = $_POST['description'];
  $images = $_FILES["faculty_image"]['name'];

  if(file_exists("upload/" .$_FILES["faculty_image"]['name']))
  {
   $store =  $_FILES["faculty_image"]['name'];
   $_SESSION['status']="image already exists. '.$store.'";
   header('Location: wetallent.php');


  }
  else
  {

  
   $query =" INSERT INTO wetallent (`title`,`subtitle`,`description`,`images`) VALUES
    ('$title','$subtitle','$description','$images') ";
   $query_run = mysqli_query($connection, $query);
   if($query_run)
   {
     move_uploaded_file($_FILES["faculty_image"]['tmp_name'],  "upload/".$_FILES["faculty_image"]["name"]);
     $_SESSION['success'] = "wetallent us added";
     header('Location: wetallent.php');
   }
   else
   {
     $_SESSION['success'] = 'wetallent us not added';
     header('Location: wetallent.php');
   }
}
}














session_start();
 $connection = mysqli_connect("localhost","root","","wetalkk");

 if(isset($_POST['registerbtn']))
 {
   $username = $_POST['username'];
   $email = $_POST['email'];
   $pass = $_POST['pass'];
   $confpass = $_POST['confpass'];
   if ($pass === $confpass)
   {
    $query= "INSERT INTO register (username,email,password) VALUES ('$username','$email','$pass')";
$query_run = mysqli_query($connection, $query);
    
    if($query_run)
    {
       
        $_SESSION['success'] = "Admin Profile Added";
        header('Location: register.php');
 
    }
    else
    {
     $_SESSION['success'] = "Admin Profile not Added";
     header('Location: register.php');
    }
 
   } else{
    $_SESSION['status'] = "Password and confirm password Does Not Match";
    header('Location: register.php');

   }
     
   
 }
 if(isset($_POST['updatebtn'])){
   $id = $_POST['edit_id'];
   $username = $_POST['edit_username'];
   $email = $_POST['edit_email'];
   $password = $_POST['edit_pass'];

    $query =" UPDATE register SET username='$username', email='$email', password='$password' WHERE id ='$id' ";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
      $_SESSION['success'] = "your data is updated";
      header('Location: register.php');
    }
    else
    {
      $_SESSION['status'] = "your data is not updated";
      header('Location: register.php');
    }
 }


 if(isset($_POST['deletee_btn']))
 {
  $id = $_POST['deletee_id'];
   $query =" DELETE FROM register  WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);
   if($query_run)
   {
     $_SESSION['success'] = "your data is deleted";
     header('Location: register.php');
   }
   else
   {
     $_SESSION['status'] = "your data is not deleted";
     header('Location: register.php');
   }

  }









  if(isset($_POST['update_btn'])){
    $id = $_POST['edit_id'];
    $title = $_POST['edit_title'];
    $subtitle= $_POST['edit_subtitle'];
    $description = $_POST['edit_description'];
    $images = $_FILES['edit_images'];
 
     $query =" UPDATE wetallent SET title='$title', subtitle='$subtitle', description='$description', images='$images'  WHERE id ='$id' ";
     $query_run = mysqli_query($connection, $query);
     if($query_run)
     {
       $_SESSION['success'] = "your data is updated";
       header('Location: wetallent.php');
     }
     else
     {
       $_SESSION['status'] = "your data is not updated";
       header('Location: wetallent.php');
     }
  }
  if(isset($_POST['update_btn'])){
    $id = $_POST['edit_id'];
    $titleV = $_POST['edit_title'];
    $subtitleV= $_POST['edit_subtitle'];
    $descriptionV = $_POST['edit_description'];
    $video= $_FILES['edit_video'];
 
     $query =" UPDATE podcast SET titleV='$titleV', subtitleV='$subtitleV', descriptionV='$descriptionV', video='$video'  WHERE id ='$id' ";
     $query_run = mysqli_query($connection, $query);
     if($query_run)
     {
       $_SESSION['success'] = "your data is updated";
       header('Location: podcast.php');
     }
     else
     {
       $_SESSION['status'] = "your data is not updated";
       header('Location: podcast.php');
     }
  }

 
  if(isset($_POST['delete_btn']))
  {
   $id = $_POST['delete_id'];
   
 
    $query =" DELETE FROM wetallent WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
      $_SESSION['success'] = "your data is deleted";
      header('Location: wetallent.php');
    }
    else
    {
      $_SESSION['status'] = "your data is not deleted";
      header('Location: wetallent.php');
    }
 
   }
   if(isset($_POST['delete_btn']))
   {
    $id = $_POST['delete_id'];
    
  
     $query =" DELETE FROM podcast WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     if($query_run)
     {
       $_SESSION['success'] = "your data is deleted";
       header('Location: podcast.php');
     }
     else
     {
       $_SESSION['status'] = "your data is not deleted";
       header('Location: podcast.php');
     }
  
    }

?>




