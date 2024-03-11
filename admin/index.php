<?php
require_once "../includes/conn.php";
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCT STORE</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="container mt-4 p-3 bg-dark text-light rounded">
        <div class="d-flex align-content-center justify-content-between px-3">
            <h3><a href="index.php" class="text-white text-decoration-none"><i class="bi bi-bag"></i> Product Store</a></h3>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addproduct">
                <i class="bi bi-cart-plus"></i> Add Product
            </button>
        </div>
    </div>

     <!-- insert data using bootstrap modal and display in the table  -->
    <!-- *************************     INSERT and DISPLAY DATA (Create and Read)     ********************** -->

    <div class="container mt-5 p-0">
        <table class="table table-hover text-center">
            <thead class="bg-dark text-light">
                <tr>
                    <th width="10%" scope="col" class="rounded-start">Sr No.</th>
                    <th width="20%" scope="col">Image</th>
                    <th width="10%" scope="col">Name</th>
                    <th width="10%" scope="col">Price</th>
                    <th width="30%" scope="col">Description</th>
                    <th width="20%" scope="col" class="rounded-end">Action</th>

                </tr>
            </thead>
            <tbody class="bg-white">
                <?php
                //require_once "conn.php";
                

                $sql = "SELECT * FROM `store`";
                $result = mysqli_query($conn, $sql);
                $i = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr class='align-middle'>";
                    echo "<th scope='row'>$i</th>";
                    echo "<td><img src='../uploads/$row[Image]' height=100px width=120px></td>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Price'] . "</td>";
                    echo "<td>" . $row['Description'] . "</td>";
                    echo "<td>
                    <a href='?edit=$row[Id]' class='btn btn-warning m-2'><i class='bi bi-pencil-square'></i></a> 
                    <a href='delete.php?remove=$row[Id]'><i class='bi bi-trash-fill btn btn-danger mx-2'></i></a> 
                    </td>";
                    $i++;
                }
                ?>

            </tbody>
        </table>
    </div>

    <div class="modal fade" id="addproduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">

            <form action="crud.php" method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Product</h5>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Name</span>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Price</span>
                            <input type="number" class="form-control" name="price" min="1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Description</span>
                            <textarea class="form-control" name="desc" required></textarea>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Image</label>
                            <input type="file" class="form-control" name="image" accept=".jpg, .png, .svg" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancle</button>
                        <button type="submit" class="btn btn-success px-4" name="AddProduct">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- ************************    Create end    ************************* -->



    <!-- ******************   UPDATE (edit)  ***************  -->

    <div class="modal fade" id="editproduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="crud.php" method="post" enctype="multipart/form-data">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Product</h5>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Name</span>
                            <input type="text" class="form-control" name="name" id="editname" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Price</span>
                            <input type="number" class="form-control" name="price" id="editprice" min="1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Description</span>
                            <textarea class="form-control" name="desc" id="editdesc" required></textarea>
                        </div>
                        <center><img src="" width="50%" class="mb-3" id="editimg"></center><br>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Image</label>
                            <input type="file" class="form-control" name="image" id="editPimg" accept=".jpg, .png, .svg">
                        </div>
                               <input type="hidden" name="productid" id="editpid">
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancle</button>
                        <button type="submit" class="btn btn-success px-4" name="EditProduct">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php

    if (isset($_GET['edit']) && ($_GET['edit'])>0)
{
    $sql="SELECT * FROM store WHERE Id='$_GET[edit]'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    echo "
        <script>
             var editproduct = new bootstrap.Modal(document.getElementById('editproduct'), {
             keyboard: false
             });
             document.querySelector('#editname').value=`$row[Name]`;
             document.querySelector('#editprice').value=`$row[Price]`;
             document.querySelector('#editdesc').value=`$row[Description]`;
             document.querySelector('#editpid').value=`$row[Id]`;
             editproduct.show();             
             </script>
             ";
            }
            ?>
            <!-- document.querySelector('#editimg').src=`./uploads/$row[Image]`; -->

        <!-- *************************      Update end     ***********************                -->

</body>

</html>