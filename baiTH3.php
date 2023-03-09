<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    $fullname = $phone = $email = $income = $city = $county = $branch = "";
    $fullnameErr = $phoneErr = $emailErr = $incomeErr = $cityErr = $countyErr = $branchErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fullname"])) {
            $fullnameErr = "* Yêu cầu nhập họ và tên";
        } else {
            $fullname = inputInfo($_POST["fullname"]);
        }

        if (empty($_POST["phone"])) {
            $phoneErr = "* Yêu cầu nhập số điện thoại";
        } else {
            $phone = inputInfo($_POST["phone"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "* Yêu cầu nhập email";
        } else {
            $email = inputInfo($_POST["email"]);
        }

        if (empty($_POST["income"])) {
            $incomeErr = "* Yêu cầu nhập thu nhập hàng tháng";
        } else {
            $income = inputInfo($_POST["income"]);
        }

        if (empty($_POST["city"])) {
            $cityErr = "* Yêu cầu chọn Tỉnh / Thành phố";
        } else {
            $city = inputInfo($_POST["city"]);
        }

        if (empty($_POST["county"])) {
            $countyErr = "* Yêu cầu chọn Quận / Huyện";
        } else {
            $county = inputInfo($_POST["county"]);
        }

        if (empty($_POST["branch"])) {
            $branchErr = "* Yêu cầu chọn chi nhánh";
        } else {
            $branch = inputInfo($_POST["branch"]);
        }
    }

    function inputInfo($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

    <h2 class="text-danger">ĐĂNG KÝ MỞ THẺ NGAY ĐỂ NHÂN QUÀ TẶNG !</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label for="" class="form-label">Họ và tên: </label>
            <input type="text" class="form-control" name="fullname">
            <span class="text-danger"><?php echo $fullnameErr;?></span>
        </div>

        <div class="form-group">
            <label for="" class="form-label">Số điện thoại: </label>
            <input type="number" class="form-control" name="phone">
            <span class="text-danger"><?php echo $phoneErr;?></span>
        </div>

        <div class="form-group">
            <label for="" class="form-label">Email: </label>
            <input type="email" class="form-control" name="email">
            <span class="text-danger"><?php echo $emailErr;?></span>
        </div>

        <div class="form-group">
            <label for="" class="form-label">Thu nhập hàng tháng qua <strong>chuyển khoản ngân hàng</strong>: </label>
            <select name="income" id="" class="form-select">
                <option value="">--- Vui lòng chọn ---</option>
                <option value="5 triệu">5 triệu</option>
                <option value="10 triệu">10 triệu</option>
                <option value="15 triệu">15 triệu</option>
                <option value="20 triệu">20 triệu</option>
                <option value="25 triệu">25 triệu</option>
                <option value="30 triệu">30 triệu</option>
            </select>
            <span class="text-danger"><?php echo $incomeErr;?></span>
        </div>

        <h3 style="margin-top:20px;">Chi nhánh tư vấn</h3>
        <div class="form-group">
            <label for="" class="form-label">Tỉnh / Thành phố: </label>
            <select name="city" id="" class="form-select">
                <option value="">--- Chọn tỉnh, thành phố ---</option>
                <option value="Nghệ An">Nghệ An</option>
                <option value="Hải Phòng">Hải Phòng</option>
                <option value="Hà Nội">Hà Nội</option>
                <option value="Hà Tĩnh">Hà Tĩnh</option>
                <option value="Sài Gòn">Sài Gòn</option>
                <option value="Phú Thọ">Phú Thọ</option>
            </select>
            <span class="text-danger"><?php echo $cityErr;?></span>
        </div>

        <div class="form-group">
            <label for="" class="form-label">Quận / Huyện: </label>
            <select name="county" id="" class="form-select">
                <option value="">--- Chọn quận, huyện ---</option>
                <option value="Đô Lương">Đô Lương</option>
                <option value="Nam Đàn">Nam Đàn</option>
                <option value="Thái Hòa">Thái Hòa</option>
                <option value="Quỳ Hợp">Quỳ Hợp</option>
                <option value="Thanh Chương">Thanh Chương</option>
                <option value="Can Lộc">Can Lộc</option>
            </select>
            <span class="text-danger"><?php echo $countyErr;?></span>
        </div>

        <div class="form-group">
            <label for="" class="form-label">Chi nhánh: </label>
            <select name="branch" id="" class="form-select">
                <option value="">--- Chọn chi nhánh ---</option>
                <option value="Chi nhánh Nghệ An">Chi nhánh Nghệ An</option>
                <option value="Chi nhánh Hà Tĩnh">Chi nhánh Hà Tĩnh</option>
                <option value="Chi nhánh Hà Nội">Chi nhánh Hà Nội</option>
                <option value="Chi nhánh Sài Gòn">Chi nhánh Sài Gòn</option>
                <option value="Chi nhánh Phú Thọ">Chi nhánh Phú Thọ</option>
                <option value="Chi nhánh Thanh Hóa">Chi nhánh Thanh Hóa</option>
            </select>
            <span class="text-danger"><?php echo $branchErr;?></span>
        </div>


        <input style="margin-top:20px;" class="btn btn-success" type="submit" value="GỬI THÔNG TIN">
    </form>



    <?php
    if(!empty($fullname) && !empty($phone) && 
        !empty($email) && !empty($income) && 
        !empty($city) && !empty($county) && 
        !empty($branch)) {
        echo "</br><h3>Thông tin bạn đã nhập</h3>";
        echo "<strong>Họ và tên:</strong> " . $fullname."</br>";
        echo "<strong>Điện thoại:</strong> " . $phone."</br>";
        echo "<strong>Email:</strong> " . $email."</br>";
        echo "<strong>Thu nhập hàng tháng qua chuyển khoản ngân hàng:</strong> " . $income."</br>";
        echo "<strong>Tỉnh / Thành phố:</strong> " . $city."</br>";
        echo "<strong>Quận / Huyện:</strong> " . $county."</br>";
        echo "<strong>Chi nhánh:</strong> " . $branch;
    }
    ?>
</body>

</html>