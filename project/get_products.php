<?php
include('connection.php');
// 1.determine page no
if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
    $page_no = $_GET['page_no'];
} else {
    $page_no = 1;
}

//2.Return number of products

$stmt = $conn->prepare("SELECT count(*) as total_products from product");

$stmt->execute();
$stmt->bind_result($total_products);
$stmt->store_result();
$stmt->fetch();

//3. products per page

$total_products_per_page = 4;
$offset = ($page_no - 1) * $total_products_per_page;
$total_no_of_pages = ceil($total_products / $total_products_per_page); // 1,2,3,..

//4. get products

$stmt2 =  $conn->prepare("SELECT * from product limit $offset,$total_products_per_page");
$stmt2->execute();
$products = $stmt2->get_result();
