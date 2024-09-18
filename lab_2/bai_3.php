<?php

class SinhVien
{
    private $maSinhVien;
    private $hoTen;
    private $gioiTinh;
    private $namSinh;
    private $diemTrungBinh;

    public function __construct($maSinhVien, $hoTen, $gioiTinh, $namSinh, $diemTrungBinh)
    {
        $this->maSinhVien = $maSinhVien;
        $this->hoTen = $hoTen;
        $this->gioiTinh = $gioiTinh;
        $this->namSinh = $namSinh;
        $this->diemTrungBinh = $diemTrungBinh;
    }

    public function getMaSinhVien()
    {
        return $this->maSinhVien;
    }

    public function setMaSinhVien($maSinhVien)
    {
        $this->maSinhVien = $maSinhVien;
    }

    public function getHoTen()
    {
        return $this->hoTen;
    }

    public function setHoTen($hoTen)
    {
        $this->hoTen = $hoTen;
    }

    public function getGioiTinh()
    {
        return $this->gioiTinh;
    }

    public function setGioiTinh($gioiTinh)
    {
        $this->gioiTinh = $gioiTinh;
    }

    public function getNamSinh()
    {
        return $this->namSinh;
    }

    public function setNamSinh($namSinh)
    {
        $this->namSinh = $namSinh;
    }

    public function getDiemTrungBinh()
    {
        return $this->diemTrungBinh;
    }

    public function setDiemTrungBinh($diemTrungBinh)
    {
        $this->diemTrungBinh = $diemTrungBinh;
    }

    public function hienThi()
    {
        echo "<div class='student-info'>";
        echo "<p><strong>Mã sinh viên:</strong> " . $this->getMaSinhVien() . "</p>";
        echo "<p><strong>Họ tên:</strong> " . $this->getHoTen() . "</p>";
        echo "<p><strong>Giới tính:</strong> " . $this->getGioiTinh() . "</p>";
        echo "<p><strong>Năm sinh:</strong> " . $this->getNamSinh() . "</p>";
        echo "<p><strong>Điểm trung bình:</strong> " . $this->getDiemTrungBinh() . "</p>";
        echo "</div>";
    }
}

$dsSinhVien = [];

if (isset($_POST["submit"])) {
    $maSinhVien = isset($_POST["msv"]) ? $_POST["msv"] : '';
    $hoTen = isset($_POST["hoten"]) ? $_POST["hoten"] : '';
    $gioiTinh = isset($_POST["gioitinh"]) ? $_POST["gioitinh"] : '';
    $namSinh = isset($_POST["namsinh"]) ? $_POST["namsinh"] : '';
    $diemTrungBinh = isset($_POST["diemtb"]) ? $_POST["diemtb"] : '';

    $sinhVien = new SinhVien($maSinhVien, $hoTen, $gioiTinh, $namSinh, $diemTrungBinh);
    $dsSinhVien[] = $sinhVien;

    foreach ($dsSinhVien as $sv) {
        $sv->hienThi();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sinh viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="number"],
        input[type="text"],
        input[type="date"],
        select {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
        }

        .student-info {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 5px;
        }

        .student-info p {
            margin: 0 0 10px;
        }
    </style>
</head>

<body>
<div class="form-container">
    <h2>Thông tin sinh viên</h2>

    <form method="POST">
        <label for="msv">Mã sinh viên</label>
        <input type="number" id="msv" name="msv" required>

        <label for="hoten">Họ tên</label>
        <input type="text" id="hoten" name="hoten" required>

        <label for="gioitinh">Giới tính</label>
        <select name="gioitinh" id="gioitinh">
            <option value="nam">Nam</option>
            <option value="nu">Nữ</option>
        </select>

        <label for="namsinh">Năm sinh</label>
        <input type="date" id="namsinh" name="namsinh" required>

        <label for="diemtb">Điểm trung bình</label>
        <input type="number" id="diemtb" name="diemtb" required>

        <button type="submit" name="submit">Submit</button>
    </form>
</div>
</body>

</html>
