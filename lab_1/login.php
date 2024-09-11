<?php
session_start();


$thongBao = '';
if (isset($_POST['login'])) {
    $formUserName = $_POST['username'];
    $formPassWord = $_POST['password'];

    if (isset($formUserName) && isset($formPassWord)) {
        $username = trim($formUserName);
        $password = trim($formPassWord);

        if ($username === 'admin' && $password === 'admin') {
            $_SESSION['username'] = $username;
            header('location: create-product.php');

        } else {
            $thongBao = 'Đăng nhập thất bại';
        }
    }
}

?>

<!doctype html>
<html lang="en" xmlns:input="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        ::placeholder {
            padding-left: 2px;
            font-weight: 600;
        }

        label {
            font-size: 14px;
            font-weight: 600;
        }

        input {
            width: 100%;
            height: 30px;
            margin-top: 5px;
            padding-left: 5px;
        }

        button {
            margin-top: 15px;
            padding: 8px;
            width: 50%;
            border: none;
            cursor: pointer;
            border-radius: 5px
        }
    </style>
</head>

<body>
<form method="post">
    <div style="display: flex; justify-content: center; flex-direction: column; height: 100vh">
        <div style="box-shadow: rgba(100, 100, 111, 0.2) 0 7px 29px 0; padding: 20px; border-radius: 15px; width: 500px; margin: 0 auto; display: flex; flex-direction: column; align-items: center; gap: 15px">
            <h2 style="text-align: center;">Đăng nhập</h2>

            <p style="color: red;">
                <?= $thongBao ?>
            </p>

            <div style="display: flex; flex-direction: column; gap: 15px">
                <div>
                    <label for="username">Tên Đăng Nhập</label>
                    <input type="text" name="username" id="username" placeholder="admin">
                </div>

                <div>
                    <label for="password">Mật Khẩu</label>
                    <input type="password" name="password" id="password" placeholder="admin">
                </div>
            </div>

            <button type="submit" name="login">
                Đăng nhập
            </button>
        </div>
    </div>
</form>
</body>
</html>
