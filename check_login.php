<?php
    session_start();
    include("connect.php"); //ไฟล์ connect

        if(isset($_POST['username'])){ //รับค่า ชื่อผู้ใช้งาน

                    
            //รับค่า user & password
            $Username = $_POST['username']; //ชื่อผู้ใช้
            $Password = $_POST['pass']; //รหัสผ่าน

            $p_id = $_POST['p_id'];

                    //คำสั่ง sql
            $sql="SELECT * FROM user
            WHERE username ='".$Username."' 
            AND pass='".$Password."' ";

            
                    //echo $sql;
                    //exit;
    
                $result = mysqli_query($conn,$sql);   

                    
                    //echo mysqli_num_rows($result);
                    //exit;

                    
                    if(mysqli_num_rows($result)==1){ // ==1 คือ ถ้าผู้ใช้งานมีอยู่จริง 
    
                        $row = mysqli_fetch_array($result);
    
                        $_SESSION["id_user"] = $row["id_user"]; //ช่องไอดี
                        $_SESSION["username"] = $row["username"]; //ชื่อผู้ใช้
                        $_SESSION["pass"] = $row["pass"]; //รหัส
                        $_SESSION["sname"] = $row["sname"];
                        $_SESSION["lastname"] = $row["lastname"];//ชื่อ
                        $_SESSION["email"] = $row["email"];//นามสกุล 
                        $_SESSION["tell"] = $row["tell"];//ชื่อ
                        $_SESSION["saddress"] = $row["saddress"];//ชื่อ
                        $_SESSION["s_status"] = $row["s_status"];//สถานะ member admin
                       
                       
                        
    
                        
                        if($_SESSION["s_status"]=="admin"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_index.php
                            echo "<script>";
                            echo "alert ('ยินดีต้อนรับ Admin');";
                            echo "window.location = 'admin/index.php'; ";
                            echo "</script>";
                            //echo 'R U Admin'; //แสดงคำว่า R U Admin
                            //echo "<meta http-equiv='refresh' content='3;url=admin/admin_index.php'>";	//หน่วงเวลา 3 วิ
                            //Header("Location: admin/admin_index.php"); //ไปยังไฟล์ admin/admin_index.php
                        }

                        if ($_SESSION["s_status"]=="member"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_index.php
                            if(isset($p_id)){
                                echo "<script>";
                                echo "alert ('ยินดีต้อนรับ สมาชิก');";
                                echo "window.location = 'member/cart.php?act=add&p_id={$p_id}'; ";
                                echo "</script>";
                                // echo 'Have '.$p_id;
                            }else{
                            echo "<script>";
                            echo "alert ('ยินดีต้อนรับ สมาชิก');";
                            echo "window.location = 'member/index.php'; ";
                            echo "</script>";
                            // echo 'No '.$p_id;
                            }
    
                        }

                       
                        
                        if ($_SESSION["s_status"]=="employee"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_index.php
                            echo "<script>";
                            echo "alert ('ยินดีต้อนรับ พนักงาน');";
                            echo "window.location = 'employee/index.php'; ";
                            echo "</script>";
                          
    
                        }


                        
                    
    
    
                    }else{
                        echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                        echo "</script>";
                        }
    
        }else
            {
            Header("Location: login.php"); //user & password incorrect back to login again
            } 
    ?>


    