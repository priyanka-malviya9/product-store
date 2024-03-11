<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- external css -->

  <link rel="stylesheet" type="text/css" href="./css/header.css">

  <title>Navbar</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg" style="background-color:rgb(115, 131, 145) ;">
    <div class="container">
      <a class="navbar-brand" href="#"><b>Ecommerce</b>Site</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse">
        <span class="navbar-toggler-icon text-light"></span>
        <i class="bi bi-three-dots-vertical text-light"></i>
      </button>

      <div class="navLink collapse navbar-collapse pull-left" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product.php">PRODUCTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CONTACT US</a>
          </li>
        </ul>
       
        <form method="POST" class="navbar-form navbar-left">
          <div class="input-group">
            <input type="text" class="form-control" id="navbar-search-input" name="keyword" placeholder="Search for Product" required>
            <span class="input-group-btn" id="searchBtn">
              <button type="submit" class="btn btn-default btn-flat"><i class="bi bi-search"></i></button>
            </span>
          </div>
        </form>
     
      <!-- <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
            Menu toggle button
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="bi bi-cart-plus-fill"></i>
              <span class="label label-success cart_count"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <span class="cart_count"></span> item(s) in cart</li>
              <li>
                <ul class="menu" id="cart_menu">
                </ul>
              </li>
              <li class="cart_footer">
                <a href="#">Go to Cart</a>
              </li>
            </ul>
          </li>

          <li><a href="login.php">LOGIN</a></li>
          <li><a href="signup.php">SIGNUP</a></li>

        </ul>
      </div> -->

    </div>
  </nav>
</body>

</html>