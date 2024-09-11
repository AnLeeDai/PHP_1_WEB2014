<?php
session_start();

if (isset($_POST['logout'])) {
    session_destroy();
    header('location: login.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danh sách sản phẩm</title>
    <style>
        .a {
            text-decoration: none;
            color: inherit;
            font-weight: 600;
        }

        .a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100px;
        }
    </style>
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
    <h1 style="font-size: 24px; text-align: center;">Danh sách sản phẩm</h1>

    <?php if (empty($_SESSION['product-items'])): ?>
        <div style="height: calc(100vh - 165px); display: flex; flex-direction: column; align-items: center; justify-content: center">
            <div style="display: flex; align-items: center; gap: 5px">
                <p style="text-align: center;">Danh sách sản phẩm rỗng: </p>
                <a href="create-product.php" class="a">Tạo sản phẩm mới</a>
            </div>
        </div>

    <?php else: ?>
        <table>
            <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Mô tả</th>
                <th>Giá</th>
                <th>Ảnh</th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($_SESSION['product-items'] as $product): ?>
                <tr>
                    <td><?= ($product['name']) ?></td>
                    <td><?= ($product['desc']) ?></td>
                    <td><?= ($product['price']) ?></td>
                    <td><img src="<?= ($product['image']) ?>" alt="Ảnh sản phẩm"></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</main>

</body>
</html>
