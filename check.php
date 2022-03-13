<?php
 
include('connect.php');  
$p_id = $_GET['p_id'];

if($_GET["p_id"]=="p_id"){

}else{
    echo "<script type='text/javascript'>"; 
    echo "alert('กรุณาล็อกอินเข้าสู่ระบบก่อนครับ/ค่ะ');"; 
    echo "window.location = 'login.php?act=add&p_id=$p_id'; "; 
    echo "</script>"; 
}
?>