<?php
include 'connect.php';
// print_r($_POST);

//ตัวแปร
if(isset($_POST['reg'])){
  $usern = $_POST['ser'];
  $passn = $_POST['pwd'];
  $namen = $_POST['one'];
  $lastnamen = $_POST['two'];
  $emailn = $_POST['mail'];
  $telln = $_POST['stell'];
  $addressn = $_POST['add'];
 

  //การสร้างแบบไม่ให้เห็นรหัสผ่าน
  //$salt = "8520asdfghjklzxcvbnmwertyu";
  //$hash_loign_pass = hash_hmac ('sha256', $pass,$salt);
  $sql = "SELECT * FROM user WHERE username = '$usern'";
  $rs = mysqli_query($conn , $sql);
  if(mysqli_num_rows($rs) > 0){
    echo "<script>alert('ชื่อผู้ใช้ซ้ำ');window.location='register.php'</script>";
  }else{
    $sql = "INSERT INTO user (username, pass, sname, lastname, email, tell, saddress)
    VALUES('$usern', '$passn', '$namen','$lastnamen','$emailn','$telln','$addressn')";
    //$sql = "INSERT INTO user (s_username) VALUES ('$user')";

    if (mysqli_query($conn, $sql)) {
      echo "<script>window.location='login.php'</script>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
  }

//header("Location: index.php");
mysqli_close($conn);
?>