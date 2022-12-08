<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="header">
        <section id="menu">
            <div class="logo">
                <img src="assets/imgs/Picture1.png" alt="">
                <h2>Dashboard</h2>
            </div>
            <div class="items">
                <li><i class="fas fa-chart-pie"></i><a href="index.php">Dashboard</a></li>
                <li><i class="fab fa-uikit"></i><a href="index.php">Users</a></li>
                <li><i class="fas fa-chart-pie"></i><a href="products.php">Products</a></li>
                <li><i class="fas fa-edit"></i><a href="sales.php">Sales</a></li>
                <li><i class="fab fa-cc-visa"></i><a href="add_product.php">Add Products</a></li>
                <li><i class="fas fa-hamburger"></i><a href="contact.html">Contact</a></li>
                <li><i class="fab fa-uikit"></i><a href="help.html">Help</a></li>
            </div>

        </section>
        <section id="interface">
            <div class="navigation">
                <!-- Search -->
                <div class="n1">
                    <div class="search">
                        <i class="fas fa-edit"></i>

                        <form action="">
                            <input type="text" placeholder="search" />
                        </form>
                    </div>
                </div>


                <!-- profile -->
                <div class="profile">
                    <i class="far fa-bell"></i>
                    <img src="assets/imgs/Picture1.png" alt="">
                </div>

            </div>
            <div class="container-fluid w-50 my-5">
                <h3>Add New Product</h3>
                <form method="POST" enctype="multipart/form-data" action="create_product.php">

                    <div class="mb-2 form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="title">
                    </div>
                    <div class="mb-2 form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="description" id="description" placeholder="description">
                    </div>
                    <div class="mb-2 form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price" id="price" placeholder="price">
                    </div>
                    <div class="mb-2 form-group">
                        <label>Quantity</label>
                        <input type="number" class="form-control" name="quantity" id="quantity" placeholder="quantity">
                    </div>
                    <select id="" class="form-select mb-2" name="category">
                        <option value="shoes">Shoes</option>
                        <option value="bags">Bags</option>
                        <option value="clothes">Clothes</option>
                        <option value="shirts">Shirts</option>
                    </select>
                    <div class="mb-3 form-group">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image" id="image" placeholder="image">
                    </div>
                    <div class="mb-2 text-center">
                        <input type="submit" class="btn btn-primary mt-3" value="Add Product" name="add_product_btn" id="add_product_btn">
                    </div>

                </form>
            </div>

        </section>




    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>