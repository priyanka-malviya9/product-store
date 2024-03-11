<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="header.css">
    <!-- bootstrap   -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Ecommerce Site</title>
</head>

<body style="background-color:  rgb(225, 233, 238);">

    <?php 
    require_once './includes/conn.php';
    require_once './includes/navbar.php'; ?>


    <div class="carousels" style="height: 78vh;">
        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/banner4.jpg" class="d-block w-100" alt="first">
                            </div>
                            <div class="carousel-item">
                                <img src="images/banner5.jpg" class="d-block w-100" alt="second">
                            </div>
                            <div class="carousel-item">
                                <img src="images/banner6.png" class="d-block w-100" alt="third">
                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-sm-2"></div>

            </div>
        </div>
    </div>
    <?php require_once './includes/footer.php'; ?>
</body>

</html>
