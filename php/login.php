<?php
// if (!isset($_SESSION['user'])) {

//     header('location:../forms/login.html');

// }
 $email = $_POST["email"];//finish this line
    $password = $_POST["password"];//finish this}
$data = array_map('str_getcsv',file('../storage/users.csv'));
$name_c=array_column($data,0);
$email_c=array_column($data,1);
$password_c=array_column($data,2);
$search=array_search($email,$email_c); 
$row=($data[$search]);
$db_name=$row[0];
$db_email=$row[1];
$db_password=$row[2];
session_start();
if($db_email==$email and $db_password==$password){
    $_SESSION['user']=$db_name ;
    echo '<script>alert("Welcome ' . $_SESSION['user'] . ' ");
              window.location="../dashboard.php";
              </script>';
}else{
    echo '<script>alert("Invalid Username or Password");
    window.location="../forms/login.html";
    </script>';
}




// print_r ($search);




// print_r($name1);
// echo'<br>';

// print_r($name2);
// echo'<br>';

// print_r($name3);
// echo'<br>';











// echo '<pre>';
// print_r($data[1]);
// echo'<br>';
















    // echo $email;
// echo'<br>';
// echo $password;
// echo'<br>';
// print_r ($_POST);
// echo'<br>';
// print_r ($_POST['email']);




















// loginUser($email, $password);
// session_start();
  
// $username = "";
// $email    = "";
// $_SESSION['success'] = "";

// }else {
//     $username="default";
// } 

// function loginUser($email, $password){
//     /*
//         Finish this function to check if username and password 
//     from file match that which is passed from the form
//     */



  