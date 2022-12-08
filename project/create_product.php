<?php
include('connection.php');
if (isset($_POST['add_product_btn'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $category = $_POST['category'];

    //image file
    $image = $_FILES['image']['tmp_name'];
    //name
    $image_name = $title . ".png";
    //upload image
    move_uploaded_file($image, "assets/imgs/" . $image_name);
    $stmt = $conn->prepare("INSERT into product (name,description,price,quantity,category,image)
                           VALUES(?,?,?,?,?,?)
    ");
    $stmt->bind_param("sssiss", $title, $description, $price, $quantity, $category, $image_name);
    if ($stmt->execute()) {
        header("location:products.php?success_message= Đã thêm sản phẩm ");
    } else {
        header("location:products.php?error_message= Lỗi,sản phẩm chưa được thêm");
    }
} else {
    header("location:products.php?error_message= Lỗi,thử lại ");
}
