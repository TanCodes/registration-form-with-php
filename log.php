 <?php
$con = mysqli_connect("localhost","root");
  mysqli_select_db($con,'registration');
    $user = $_POST["user"];
    $email=$_POST["email"];
    $pass=$_POST["password"];
    $phone = $_POST["mobile"];
    
    $data = "insert into register(name,email,password,mobile,date) values ('$user','$email','$pass','$phone',current_timestamp())";
    mysqli_query($con, $data);
    header("location: done.html"); 
?>

