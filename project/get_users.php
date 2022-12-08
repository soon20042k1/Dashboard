<?php
include('connection.php');
// 1.determine page no
if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
    $page_no = $_GET['page_no'];
} else {
    $page_no = 1;
}

//2.Return number of products

$stmt = $conn->prepare("SELECT count(*) as total_users from employee");

$stmt->execute();
$stmt->bind_result($total_users);
$stmt->store_result();
$stmt->fetch();

//3. products per page

$total_users_per_page = 2;
$offset = ($page_no - 1) * $total_users_per_page;
$total_no_of_pages = ceil($total_users / $total_users_per_page); // 1,2,3,..

//4. get products

$stmt2 =  $conn->prepare("SELECT * from employee limit $offset,$total_users_per_page");
$stmt2->execute();
$users = $stmt2->get_result();
