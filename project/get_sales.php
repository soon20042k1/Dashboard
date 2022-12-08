<?php
include('connection.php');
// 1.determine page no
if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
    $page_no = $_GET['page_no'];
} else {
    $page_no = 1;
}

//2.Return number of products

$stmt = $conn->prepare("SELECT count(*) as total_sales from sales");

$stmt->execute();
$stmt->bind_result($total_sales);
$stmt->store_result();
$stmt->fetch();

//3. products per page

$total_sales_per_page = 2;
$offset = ($page_no - 1) * $total_sales_per_page;
$total_no_of_pages = ceil($total_sales / $total_sales_per_page); // 1,2,3,..

//4. get products

$stmt2 =  $conn->prepare("SELECT * from sales limit $offset,$total_sales_per_page");
$stmt2->execute();
$sales = $stmt2->get_result();
