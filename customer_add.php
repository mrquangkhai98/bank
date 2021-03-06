<?php
    include "validate_admin.php";
    include "user_navbar.php";
    include "admin_sidebar.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customer_add_style.css">
</head>

<body>
    <form class="add_customer_form" action="customer_add_action.php" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">Hãy điền thông tin vào form dưới . . .</h1>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Tên :</label><br>
                <input name="fname" size="30" type="text" required />
            </div>
            <div  class=container>
                <label>Họ :</b></label><br>
                <input name="lname" size="30" type="text" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Giới tính :</label>
            </div>
            <div class="flex-container-radio">
                <div class="container">
                    <input type="radio" name="gender" value="male" id="male-radio" checked>
                    <label id="radio-label" for="male-radio"><span class="radio">Nam</span></label>
                </div>
                <div class="container">
                    <input type="radio" name="gender" value="female" id="female-radio">
                    <label id="radio-label" for="female-radio"><span class="radio">Nữ</span></label>
                </div>
                <div class="container">
                    <input type="radio" name="gender" value="others" id="other-radio">
                    <label id="radio-label" for="other-radio"><span class="radio">Giới tính khác</span></label>
                </div>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Ngày tháng năm sinh :</label><br>
                <input name="dob" size="30" type="text" placeholder="dd-mm-yyyy" required />
            </div>
        </div>


        <div class="flex-container">
            <div class=container>
                <label>Email :</label><br>
                <input name="email" size="30" type="text" required />
            </div>
            <div  class=container>
                <label>Số điện thoại :</b></label><br>
                <input name="phno" size="30" type="text" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Địa chỉ :</label><br>
                <textarea name="address" required /></textarea>
            </div>
        </div>



        <div class="flex-container">
            <div class=container>
                <label>Số tài khoản :</label><br>
                <input name="acno" size="25" type="text" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Mức tiền nạp lần đầu :</label><br>
                <input name="o_balance" size="20" type="text" required />
            </div>

        <div class="flex-container">
            <div class=container>
                <label>Tên đăng nhập :</label><br>
                <input name="cus_uname" size="30" type="text" required />
            </div>
            <div  class=container>
                <label>Password :</b></label><br>
                <input name="cus_pwd" size="30" type="text" required />
            </div>
        </div>

        <div class="flex-container">
            <div class="container">
                <button type="submit">Thêm khách hàng</button>
            </div>

            <div class="container">
                <button type="reset" class="reset" onclick="return confirmReset();">Điền lại</button>
            </div>
        </div>

    </form>

    <script>
    function confirmReset() {
        return confirm('Bạn có muốn điền lại thông tin không?')
    }
    </script>

</body>
</html>
