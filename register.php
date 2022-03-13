
<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 

  <title>สมัครสมาชิก</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
   
  </head>
  <body class="bg-light">
  <?php include 'nav.php';?>
  <?php include 'fonts.php' ?>
 
  
<div class="container" align="center" >

  <main>
    <div class="py-5 text-center">
      <!--img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"-->
      <br>
      <br>
      <h2> สมัครสมาชิก</h2>
      
    </div>
 
    
    <form action="register2.php" method="post">
   
      <div class="col-md-7 col-lg-5" >
        <h4 class="mb-3">กรอกข้อมูลเพื่อยืนยันการสมัคร</h4>
       

        <div class="col">
              <label for="Username" class="form-label">Username </label>
              <input type="text" class="form-control" id="s_username" placeholder="" name="ser">
            </div>
        
        <div class="col "  >
          <label for="inputPassword5" class="form-label ">Password</label>
          <input type="password" id="s_pwd" class="form-control" aria-describedby="passwordHelpBlock" name="pwd">
          <div class="invalid-feedback">
           
          </div>
        </div>

          <div class="row ">
            <div class="col">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="s_name" placeholder="" value="" required name="one">
              <div class="invalid-feedback">
               
              </div>
            </div>

            <div class="col" >
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="s_lastname" placeholder="" value="" required name="two">
              <div class="invalid-feedback">
               
              </div>
            </div>
    </div>
            <div class="col">
              <label for="email" class="form-label">Email</label>
              <div class="input-group">
                <input type="text" class="form-control" id="s_email" placeholder=" " required name="mail">
              </div>
            </div>

            <div class="col">
              <label for="tell" class="form-label">Tell </label>
              <input type="tell" class="form-control" id="s_tell" placeholder="" name="stell" >

            </div>

            <div class="col">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="s_address" placeholder="" required name="add">
            </div>

           

        

        
          <hr class="my-4">

         




         

         
            

           

       

          <button class="w-100 btn btn-primary btn-lg"  name="reg" type="submit" >ยืนยันการสมัครสมาชิก</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; </p>
    <ul class="list-inline">

  </footer>
</div>


  </body>
</html>
