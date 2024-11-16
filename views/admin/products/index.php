<?php
session_start();
require_once($_SERVER["DOCUMENT_ROOT"]."/app/config/Directories.php");
require_once(ROOT_DIR."includes/header.php");
?>


<!-- Navbar -->
<?php require_once(ROOT_DIR."includes/navbar.php");
 ?>

    
   <?php
   if(!isset($_SESSION["username"]) || (!isset($_SESSION["is_admin"]) || $_SESSION["is_admin"]!="1")){
   ?>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="text-center">
            <h1 class="display-1 text-danger">401</h1>
            <h2 class="mb-3">Unauthorized Access</h2>
            <p class="lead">Sorry, you are not authorized to view this page.</p>
            <a href="login.html" class="btn btn-primary">Go to Login</a>
        </div>
    </div> 
    <?php } ?>
       
    
    <!-- Page Header -->
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Product List</h2>
            <!-- Add New Product Button -->
            <a href="product-maintenance.html" class="btn btn-success">Add New Product</a>
        </div>
        <p class="text-center">Manage all products in the catalog</p>
        <hr>
    </div>

    <!-- Product Cards Container -->
    <div class="container content mt-3">
        <div class="row">

            <!-- Sample Product Card -->

            <!-- Loop through each product and generate a card dynamically -->

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Product Name 1</h5>
                        <p class="card-text">Category: Electronics</p>
                        <p class="card-text">Price: $100</p>
                        <p class="card-text">Stock: 50</p>
                        <p class="card-text">Sold: 50</p>
                        <p class="card-text">profit: 50</p>
                        <a href="#" class="btn btn-primary">Edit Product</a>
                        <a href="#" class="btn btn-danger">Delete Product</a>
                    </div>
                </div>
            </div>

            <!-- Another Product Card Example -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Product Name 2</h5>
                        <p class="card-text">Category: Fashion</p>
                        <p class="card-text">Price: $50</p>
                        <p class="card-text">Stock: 25</p>
                        <p class="card-text">Sold: 50</p>
                        <p class="card-text">profit: 50</p>
                        <a href="#" class="btn btn-primary">Edit Product</a>
                        <a href="#" class="btn btn-danger">Delete Product</a>
                    </div>
                </div>
            </div>

            <!-- Example for Another Product -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Product Name 3</h5>
                        <p class="card-text">Category: Home Appliances</p>
                        <p class="card-text">Price: $200</p>
                        <p class="card-text">Stock: 100</p>
                        <p class="card-text">Sold: 50</p>
                        <p class="card-text">profit: 50</p>
                        <a href="#" class="btn btn-primary">Edit Product</a>
                        <a href="#" class="btn btn-danger">Delete Product</a>
                    </div>
                </div>
            </div>

            <!-- Add more product cards dynamically based on your backend data -->
        </div>
    </div>

    

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>