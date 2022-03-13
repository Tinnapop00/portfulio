<?php

  include("nav.php");
  include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>รายละเอียดสินค้า</title>
</head>
<body>
    


    <!-- php select product-->
    <?php
     include("fonts.php");
        $p_id = $_GET["p_id"];
        $sql = " SELECT * FROM goods WHERE p_id = '$p_id' ";
        $result = mysqli_query($conn,$sql);
        $show = mysqli_fetch_array($result);
    ?>

   <div class="row">
            
                <div class="col-sm-5"  >
                    
                <img src="<?php echo 'img/'.$show["p_img"]; ?>"class="img-fluid"> 
              
                </div>

                <div class="col-sm-7">

                        <h2> <?php echo $show['p_name']; ?> </h2>
                    <br>
                        <h3> รายละเอียด </h3>
                        <?php echo $show['p_detail']; ?>
                    <br><br>
                        <font color="RED"> <h3> ราคา <?php echo $show['p_price']; ?> บาท </h3></font>
                        <!--<a href="product_detail.php?pd_id=<?php echo $show['p_id'];?>&act=product_detail" class="btn btn-success"> <span class="glyphicon glyphicon-shopping-cart"></span> เพิ่มลงตะกร้า </a>-->
                    <br><br>


                    <!-- start เงื่อนไขแสดงสินค้าว่า มีหรือไม่ 2 -->
                    <?php
                        $show['p_num'];
                        if($show['p_num'] > 0){ //ถ้าสินค้ามากกว่า 0 (1 2 3 ...n)                       
                    ?>
                        
                        <a href="check.php?p_id=<?php echo $show['p_id'];?>&act=add" class="btn btn-success btn-md"> <span class="glyphicon glyphicon-shopping-cart"></span> สั่งซื้อสินค้า </a>
                    <?php
                        }else{//ถ้าสินค้าไม่มี (0)
                    ?>
                        <button type="button" class="btn btn-danger btn-sm" disabled>สินค้าหมด!</button>
                    <?php
                        }
                    ?>  
                    <!-- end เงื่อนไขแสดงสินค้าว่า มีหรือไม่ -->

                </div>
            
</center>
            </div>
        </div>
    </div>
    <!--end show  product-->

   

</body>
</html>
<?php include('footer.php');?>

     
