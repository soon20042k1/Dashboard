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
        <!-- interface -->
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
            <!-- title -->
            <h3 class="i-name">Products</h3>

            <!-- php  -->
            <?php
            include('get_products.php');
            ?>

            <div class="board">
                <table width="100%">
                    <thead>
                        <tr>
                            <td>Title</td>
                            <td>Category</td>
                            <td>Quantity</td>
                            <td>Price</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product) { ?>
                            <tr class="list_people">
                                <td class="people">
                                    <p><img src="assets/imgs/<?php echo $product['image']; ?>" alt=""></p>
                                    <div class="people-description">
                                        <h5><?php echo $product['name']; ?></h5>

                                    </div>
                                </td>
                                <td class="people-des">
                                    <h5><?php echo $product['category']; ?></h5>

                                </td>
                                <td class="active">
                                    <p><?php echo $product['quantity']; ?></p>
                                </td>
                                <td class="role">
                                    <p><?php echo $product['price']; ?></p>
                                </td>
                                <td class="edit">
                                    <p><a href="">Edit</a></p>
                                </td>
                                <td class="edit">
                                    <p><a href="">Delete</a></p>
                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
            <nav class="container mx-3" aria-label="Page navigation example">
                <ul class="pagination">

                    <li class="page-item <?php if ($page_no <= 1) {
                                                echo 'disable';
                                            } ?>">
                        <a class="page-link" href="<?php if ($page_no <= 1) {
                                                        echo '#';
                                                    } else {
                                                        echo '?page_no=' . ($page_no - 1);
                                                    } ?>">Previous</a>
                    </li>
                    <li class="page-item">
                        <a href="?page_no=1" class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a href="?page_no=2" class="page-link">2</a>
                    </li>
                    <?php if ($page_no >= 3) { ?>
                        <li class="page-item">
                            <a href="#" class="page-link">...</a>
                        </li>
                        <li class="page-item">
                            <a href="<?php echo "?page_no=" . $page_no; ?>" class="page-link"><?php echo $page_no; ?></a>
                        </li>
                    <?php } ?>

                    <li class="page-item <?php if ($page_no >= $total_no_of_pages) {
                                                echo 'disable';
                                            } ?>">
                        <a class="page-link" href="<?php if ($page_no >= $total_no_of_pages) {
                                                        echo '#';
                                                    } else {
                                                        echo '?page_no=' . ($page_no + 1);
                                                    } ?>">Next</a>
                    </li>

                </ul>
            </nav>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>