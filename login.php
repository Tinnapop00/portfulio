<?php include 'nav.php';?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>เข้าสู่ระบบ</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">



  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
    <link href="https://fonts.googleapis.com/css?family=Kanit:500|Mali&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
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

    body,
    html,
    header,
    footer {
      font-family: 'Mali', cursive;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="bootstrap-5.0.0-beta1-examples\sign-in\signin.css" rel="stylesheet">
</head>


<body class="text-center">


  <main class="form-signin">
    <form action="check_login.php" method="post">
      <img class="mb-4" src="img/user1.png" alt="" width="70%">
      <h1 class="h3 mb-3 fw-normal">เข้าสู่ระบบ</h1>

      <input type="text" id="s_username" class="form-control" placeholder="Username" name="username">

      <input type="password" id="s_password" class="form-control" placeholder="Password" name="pass">
      <div class="checkbox mb-3">

        <a href="register.php">สมัครสมาชิก</a>
      </div>

      <input type="hidden" name="p_id" value="<?php if(isset($_GET['p_id'])){ echo $_GET['p_id']; } ?>">
      <button class="w-100 btn btn-lg btn-primary" name="login" type="submit">Sign in</button>
    </form>
  </main>


</body>

</html>