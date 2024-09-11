<?php
session_start();

if (isset($_POST['logout'])) {
    session_destroy();
    header('location: login.php');
}

if (isset($_POST['create-product'])) {
    $form_name = $_POST['name'];
    $form_desc = $_POST['desc'];
    $form_price = $_POST['price'];
    $form_img_upload = $_FILES['img-upload'];

    if (!empty($form_name) && !empty($form_desc) && !empty($form_price) && !empty($form_img_upload['name'])) {
        $name = trim($form_name);
        $price = trim($form_price);
        $desc = trim($form_desc);
        $upload_dir = 'uploads/';

        // Lưu ảnh vào thư mục uploads
        $target_file = $upload_dir . basename($form_img_upload['name']);
        if (move_uploaded_file($form_img_upload['tmp_name'], $target_file)) {
            // Tạo mảng sản phẩm và lưu vào session
            $_SESSION['product-items'][] = $product_item = [
                'name' => $name,
                'desc' => $desc,
                'price' => $price,
                'image' => $target_file
            ];
        } else {
            echo "Lỗi";
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tạo sản phẩm</title>
</head>

<body style="margin: 0 auto; padding: 0; box-sizing: border-box; max-width: 1200px;">

<header style="box-shadow: rgba(100, 100, 111, 0.2) 0 7px 29px 0; display: flex; justify-content: space-between; align-items: center; height: 70px; padding: 0 20px; gap: 20px">
    <div style="display: flex; gap: 10px; align-items: center">
        <a href="create-product.php" style="text-decoration: none; color: inherit">Tạo sản phẩm</a>
        <a href="product-list.php" style="text-decoration: none; color: inherit">Danh sách sản phẩm</a>
    </div>

    <div style="display: flex; align-items: center; gap: 20px">
        <div style="display: flex; align-items: center; gap: 5px">
            <p>Tên đăng nhập: </p>
            <p style="font-weight: 600;">
                <?= $_SESSION['username'] ?>
            </p>
        </div>

        <form method="post">
            <button type="submit" name="logout"
                    style="padding: 8px; cursor: pointer; border: none; border-radius: 5px">Đăng xuất
            </button>
        </form>
    </div>
</header>

<main style="margin-top: 35px; max-width: 1200px">
    <h1 style="font-size: 24px; text-align: center;">Tạo sản phẩm</h1>

    <div style="box-shadow: rgba(149, 157, 165, 0.2) 0 8px 24px; margin-top: 15px;">
        <form method="post" enctype="multipart/form-data"
              style="padding: 20px; display: flex; flex-direction: column; gap: 15px">
            <div style="display: grid; grid-template-columns: 20% 1fr; column-gap: 15px">
                <label for="name">Tên sản phẩm</label>
                <input type="text" name="name" id="name" style="height: 20px;">
            </div>

            <div style="display: grid; grid-template-columns: 20% 1fr; column-gap: 15px">
                <label for="desc">Mô tả sản phẩm</label>
                <input type="text" name="desc" id="desc" style="height: 20px;">
            </div>

            <div style="display: grid; grid-template-columns: 20% 1fr; column-gap: 15px">
                <label for="price">Giá tiền</label>
                <input type="text" name="price" id="price" style="height: 20px;">
            </div>

            <div style="display: grid; grid-template-columns: 20% 1fr; column-gap: 15px">
                <label for="img-upload">Ảnh sản phẩm</label>
                <input type="file" name="img-upload" id="img-upload">
            </div>

            <div style="display: grid; grid-template-columns: 20% 1fr; column-gap: 15px">
                <div></div>

                <div style="display: flex; align-items: center; gap: 10px">
                    <button style="padding: 8px; width: 50%; cursor: pointer; border: none; border-radius: 5px">Hủy
                    </button>

                    <button type="submit" name="create-product"
                            style="padding: 8px; width: 50%; background-color: green; color: white; border: none; cursor: pointer; border-radius: 5px">
                        Lưu
                    </button>
                </div>
            </div>
        </form>
    </div>
</main>

</body>
</html>
