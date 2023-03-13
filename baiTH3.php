<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Form</title>
</head>

<body>
    <?php
    $fullname = $phone = $email = $income = $city = $county = $branch = "";
    $fullnameErr = $phoneErr = $emailErr = $incomeErr = $cityErr = $countyErr = $branchErr = "";

    // Kiểm tra đầu vào
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Họ Tên
        if (empty($_POST["fullname"])) {
            $fullnameErr = "Họ và tên không để trống";
        } else {
            $fullname = inputInfo($_POST["fullname"]);
        }

        // Số điện thoại
        if (empty($_POST["phone"])) {
            $phoneErr = "Số điện thoại không để trống";
        } else {
            $phone = inputInfo($_POST["phone"]);
        }

        // Email
        if (empty($_POST["email"])) {
            $email = inputInfo($_POST["email"]);
        }

        // Thu nhập hàng tháng qua chuyển khoản
        if (empty($_POST["income"])) {
            $incomeErr = "Không bỏ qua mục này";
        } else {
            $income = inputInfo($_POST["income"]);
        }

        // Tỉnh thành phố
        if (empty($_POST["city"])) {
            $cityErr = "Không bỏ qua mục này";
        } else {
            $city = inputInfo($_POST["city"]);
        }

        // Quận huyện
        if (empty($_POST["county"])) {
            $countyErr = "Không bỏ qua mục này";
        } else {
            $county = inputInfo($_POST["county"]);
        }

        // Chi nhánh
        if (empty($_POST["branch"])) {
            $branchErr = "Không bỏ qua mục này";
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
    <style>
        .form-group>* {
            width: 50%;
        }

        .form-group {
            display: flex;
            flex-direction: row;
        }

        .form {
            gap: 10px;
            display: flex;
            flex-direction: column;
        }
    </style>

    <h5 class="text-danger"><b>ĐĂNG KÝ MỞ THẺ NGAY ĐỂ NHÂN QUÀ TẶNG!</b></h5>
    <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <div class="group-label-span">
                <label for="fullname" class="form-label">Họ và tên </label>
                <span class="text-danger">*<?php echo $fullnameErr; ?></span>
            </div>
            <input id="fullname" type="text" class="form-control" name="fullname">
        </div>

        <div class="form-group">
            <div class="group-label-span">
                <label for="phone" class="form-label">Điện thoại </label>
                <span class="text-danger">*<?php echo $phoneErr; ?></span>
            </div>
            <input id="phone" type="number" class="form-control" name="phone">
        </div>

        <div class="form-group">
            <div class="group-label-span">
                <label for="email" class="form-label">Email </label>
            </div>
            <input id="email" type="email" class="form-control" name="email">
        </div>

        <div class="form-group">
            <div class="group-label-span">
                <label for="income" class="form-label">Thu nhập hàng tháng qua <strong>chuyển khoản ngân hàng </strong></label>
                <span class="text-danger">*<?php echo $incomeErr; ?></span>
            </div>
            <select name="income" id="income" class="form-select">
                <option value=""> Vui lòng chọn</option>
                <option value="5 triệu">dưới 5 triệu</option>
                <option value="10 triệu"> dưới 10 triệu</option>
                <option value="15 triệu">dưới 15 triệu</option>
                <option value="20 triệu">dưới 20 triệu</option>
                <option value="25 triệu">dưới 30 triệu</option>
                <option value="30 triệu">trên 30 triệu</option>
            </select>
        </div>

        <h5 style="margin: 0.5rem; margin-left: 0;">Chi nhánh tư vấn</h5>
        <div class="form-group">
            <div class="group-label-span">
                <label for="city" class="form-label">Tỉnh/Thành phố </label>
                <span class="text-danger">*<?php echo $cityErr; ?></span>
            </div>
            <select name="city" id="city" class="form-select">
                <option value=""> Chọn tỉnh, thành phố</option>
                <option value="An Giang">An Giang</option>
                <option value="Bạc Liêu">Bạc Liêu</option>
                <option value="Cà Mau">Cà Mau</option>
                <option value="Đà Nẵng">Đà Nẵng</option>
                <option value="Hà Nội">Hà Nội</option>
                <option value="Hà Tĩnh">Hà Tĩnh</option>
                <option value="Hải Phòng">Hải Phòng</option>
                <option value="Nghệ An">Nghệ An</option>
                <option value="Thành phố Hồ Chí Minh">Thành phố Hồ Chí Minh</option>
                <option value="Phú Yên">Phú Yên</option>
                <option value="Vĩnh Long">Vĩnh Long</option>
            </select>
        </div>

        <div class="form-group">
            <div class="group-label-span">
                <label for="county" class="form-label">Quận/ huyện </label>
                <span class="text-danger">*<?php echo $countyErr; ?></span>
            </div>
            <select name="county" id="county" class="form-select">
                <option value=""> Chọn quận/ huyện</option>
                <option value="Nghi Lộc">Nghi Lộc</option>
                <option value="Nam Đàn">Nam Đàn</option>
                <option value="Thanh Chương">Thanh Chương</option>
                <option value="Con Cuông">Con Cuông</option>
                <option value="Tương Dương">Tương Dương</option>
                <option value="Yên Bái">Yên Bái</option>
            </select>
        </div>

        <div class="form-group">
            <div class="group-label-span">
                <label for="branch" class="form-label">Chi nhánh </label>
                <span class="text-danger">*<?php echo $branchErr; ?></span>
            </div>
            <select name="branch" id="branch" class="form-select">
                <option value=""> Chọn chi nhánh</option>
                <option value="An Giang">An Giang</option>
                <option value="Bạc Liêu">Bạc Liêu</option>
                <option value="Cà Mau">Cà Mau</option>
                <option value="Đà Nẵng">Đà Nẵng</option>
                <option value="Hà Nội">Hà Nội</option>
                <option value="Hà Tĩnh">Hà Tĩnh</option>
                <option value="Hải Phòng">Hải Phòng</option>
                <option value="Nghệ An">Nghệ An</option>
                <option value="Thành phố Hồ Chí Minh">Thành phố Hồ Chí Minh</option>
                <option value="Phú Yên">Phú Yên</option>
                <option value="Vĩnh Long">Vĩnh Long</option>
            </select>
        </div>
        <input style="width: fit-content; margin-inline: auto; margin-top:25px; --bs-btn-bg: #de3747; --bs-btn-hover-color: #000;--bs-btn-hover-bg: var(--bs-cyan);" class="btn btn-success" type="submit" value="GỬI THÔNG TIN">
    </form>

</body>

</html>