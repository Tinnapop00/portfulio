<?php
 
  include("nav.php");
  include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>เสื้อผ้ามือสองจ้าา</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- Custom styles for this template -->
  <link href="bootstrap-5.0.0-beta1-examples/startbootstrap-shop-homepage-gh-pages/css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
  </script>
</head>

<body>
  <?php
 
  
    $setColumn=3;//แสดง3คอลัมน์ต่อ1แถว ถ้าต้องการให้แสดงกี่คอลัมน์ให้กำหนดตรงนี้
    $ColumnStart=1 ;

$perpage = 9;
 if (isset($_GET['page'])) {
 $page1 = $_GET['page'];
 } else {
 $page1 = 1;
 }

 $start = ($page1 - 1) * $perpage;


                $sql =" SELECT * FROM goods INNER JOIN type_product on goods.p_type= type_product.t_ip WHERE goods.p_type='".$_GET["p_type"]."' LIMIT {$start} , {$perpage}"  ;
                $result = mysqli_query($conn,$sql);
            ?>
  <!-- Navigation -->

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">เสื้อผ้ามือสองจ้า</h1>
        <div class="list-group">
          <a href="promotion.php" class="list-group-item bg-warning text-dark">โปรโมชั่น</a>
          <a href="type_product.php?p_type=1" class="list-group-item">เสื้อผ้าผู้หญิง</a>
          <a href="type_product.php?p_type=2" class="list-group-item">เสื้อผ้าผู้ชาย</a>

        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9 mt-5">



        <div class="row">
          <?php
                    while  ($show = mysqli_fetch_array($result))
                    {
                ?>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="detail_product.php?p_id=<?php echo $show['p_id'];?>"><img
                  src="<?php echo 'img/'.$show["p_img"]; ?>" style="width:100%; height:170px"></a>
              <div class="card-body">
                <h5 class="card-title">
                  <?php echo $show["p_name"]; ?></a>
                  </h4>
                  <h6>฿<?php echo $show["p_price"]; ?>&nbsp;บาท</h6>
                  <h8><?php echo $show["p_num"]; ?>&nbsp;สินค้าคงเหลือ</h8>
                  <div class="d-flex justify-content-end">
                    <?php
                    $show['p_num'];
                    if($show['p_num'] > 0){  ?>
                    <a href="detail_product.php?p_id=<?php echo $show['p_id'];?>" type="button"
                      class="btn btn-info btn-sm">รายละเอียด</a>
                    &nbsp;
                    <a href="check.php?p_id=<?=$show['p_id'];?>&act=add" class="btn-sm btn-success "
                      style="text-decoration:none;">สั่งซื้อ</a>

                    <?php
                    }else{//ถ้าสินค้าไม่มี (0)
                ?>
                    <button type="button" class="btn btn-danger btn-sm" disabled>สินค้าหมด!</button>
                    <?php
                    }
                ?>

                  </div>
              </div>

            </div>
          </div>
          <?php
if($ColumnStart==$setColumn){//หากคอลัมน์เท่ากับจำนวนคอลัมน์ที่กำหนดไว้
echo '</tr><tr>';//สร้างแท็ก </tr> ปิด เพื่อจบแถว และสร้าง <tr>เพื่อสร้างแถวใหม่
$ColumnStart=0;//เซตเป็น 0 เพื่อเริ่มนับคอลัมน์ใหม่
}
$ColumnStart++;//เพิ่มคอลัมน์ทีละ1คอลัมน์
} ?>
          <?php
include 'connect.php' ;
 $sql2 = " SELECT * FROM goods";
 $query2 = mysqli_query($conn, $sql2);
 $total_record = mysqli_num_rows($query2);
 $total_page = ceil($total_record / $perpage);
 ?>
          <br>
          <br>
          <br>
          <nav class="navbar navbar-expand-lg  justify-content-center ">
            <center>
              <ul class="navbar-nav">
                <li>
                  <h4><a href="index.php?page=1" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                <?php for($i=1;$i<=$total_page;$i++){ ?>
                <li>
                  <h4><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
                <?php } ?>
                <li>
                  <h4><a href="index.php?page=<?php echo $total_page;?>" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>

              </ul>
            </center>
          </nav>


        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->


</body>

</html>
<?php include('footer.php');?>