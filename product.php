<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <title>Products</title>
</head>

<body style="background-color:  rgb(225, 233, 238);">
  <div class="main-body" style="height: 89vh;">

    <?php
    require_once './includes/conn.php';
    require_once './includes/navbar.php';

    echo "<div class='content'>
        <div class='container'>";

    echo "<h5 class='product_heading'>Products</h5>";

    $inc = 4;
    $sql = "SELECT * FROM `store`";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

      $inc = ($inc == 4) ? 1 : $inc + 1;

      if ($inc == 1)

        echo "<div class='row product-row'>";
      echo "
	        <div class='col-sm-3 main-box'>
            <div class='box box-solid'>
              <div class='box-body prod-body'>
                <center><img src='./uploads/$row[Image]' width='98%' height='220px' class='thumbnail'></center>
              </div>
                <p class='card-title'>" . $row['Name'] . "</p>
              <div class='box-footer'>
                <b> " . $row['Price'] . "</b>
              </div>
            </div>
	       	</div>
	      ";
      if ($inc == 4) echo "</div>";
    }
    if ($inc == 1) echo "<div class='col-sm-3'></div><div class='col-sm-3'></div></div><div class='col-sm-3'></div></div>";
    if ($inc == 2) echo "<div class='col-sm-3'></div><div class='col-sm-3'></div></div>";
    if ($inc == 3) echo "<div class='col-sm-3'></div></div>";
    ?>
  </div>
  </div>
  </div>
  </div>
  </div>
  <?php require_once './includes/footer.php'; ?>

  </div>
</body>

</html>