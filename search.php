<?php

  include("nav.php");

  include("connect.php");
  
?>

<div class="container">
    <div class="row my-5">
        <div class="col-10 mx-auto">
            <?php if(isset($_POST['search']) ? $_POST['search'] : '' ){  ?>
            <div class="container">

                <div class="row">

                    <div class="col-lg-3">

                        <h1 class="my-4">เสื้อผ้ามือสองจ้าา</h1>
                        <div class="list-group">
                            <a href="promotion.php" class="list-group-item bg-warning text-dark">โปรโมชั่น</a>
                            <a href="type_product.php?p_type=1" class="list-group-item">เสื้อผ้าผู้หญิง</a>
                            <a href="type_product.php?p_type=2" class="list-group-item">เสื้อผ้าผู้ชาย</a>

                        </div>


                    </div>

                    <!-- /.col-lg-3 -->

                    <div class="col-lg-9 mt-5">

                        <div class="row">
                            <tbody>
                                <?php
                                
                        $get = $_POST['search'];
                        $search = '%'.$get.'%';
                        $sql = "SELECT * FROM goods   WHERE  (p_name LIKE '$search') or (p_price LIKE '$search') ";
                        $result = $conn->query($sql);
                        while($show = $result->fetch_assoc()){
                        ?>
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="card h-100">
                                        <a href="../member/detail_product.php?p_id=<?php echo $show['p_id'];?>"><img
                                                src="<?php echo 'img/'.$show["p_img"]; ?>"
                                                style="width:100%; height:170px"></a>
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
                                                    <a href="../member/detail_product.php?p_id=<?php echo $show['p_id'];?>"
                                                        type="button" class="btn btn-info btn-sm">รายละเอียด</a>
                                                    &nbsp;
                                                    <a href="../member/cart.php?p_id=<?=$show['p_id'];?>&act=add"
                                                        class="btn-sm btn-success "
                                                        style="text-decoration:none;">สั่งซื้อ</a>

                                                    <?php
                    }else{//ถ้าสินค้าไม่มี (0)
                ?>
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                        disabled>สินค้าหมด!</button>
                                                    <?php
                    }
                ?>
                                                    <br>


                                                </div>
                                        </div>

                                    </div>
                                </div>
                                <?php }
                        }
                        ?>
                            </tbody>
                            </table>
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->


            </div> <!-- shadow -->
        </div> <!-- container -->
    </div> <!-- container -->
</div> <!-- container -->

<script src="bootstrap_v4/jquery-3.3.1.slim.min.js"></script>
<script src="bootstrap_v4/js/bootstrap.min.js"></script>
<script src="bootstrap_v4/popper.min.js"></script>
</body>

</html>
<?php include('footer.php');?>