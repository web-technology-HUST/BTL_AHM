<style>
    <?php
        include '../css/formCreateAccount.css';
    ?>
</style>
<div class="form-create-account" id="register-form">
    <form action="#" method="post">
        <h2>TẠO TÀI KHOẢN</h2>
        <table>
            <tr>
                <td class="label-input"><label for="name"><b>Họ tên</b><span style="color: red">*</span></label></td>
                <td><input type="text" id="name" name="name" required></td>
            </tr>
            <tr>
                <td class="label-input"><label for="email"><b>Email</b><span style="color: red">*</span></label></td>
                <td><input type="email" id="name" name="name" required></td>
            </tr>
            <tr>
                <td class="label-input"><label for="phone"><b>Số điện thoại</b><span style="color: red">*</span></label></td>
                <td><input type="text" id="phone" name="phone" required></td>
            </tr>
            <tr>
                <td class="label-input"><label for="gender"><b>Giới tính</b><span style="color: red">*</span></label></td>
                <td>
                    <input type="radio" name="gender" id="male" checked>
                    <label for="male">Nam</label>
                    <input type="radio" name="gender" id="female">
                    <label for="female">Nữ</label>
                    <input type="radio" name="gender" id="another">
                    <label for="another">Khác</label>
                </td>
            </tr>
            <tr>
                <td class="label-input"><label for="date"><b>Ngày sinh</b><span style="color: red">*</span></label></td>
                <td><input type="date" id="date" name="date" required></td>
            </tr>
            <tr>
                <td class="label-input"><label for="address"><b>Địa chỉ</b></label></td>
                <td><input type="text" id="address" name="address" required></td>
            </tr>
            <tr>
                <td class="label-input"><label for="pass"><b>Mật khẩu</b><span style="color: red">*</span></label></td>
                <td><input type="password" id="pass" name="pass" required></td>
            </tr>
            <tr>
                <td class="label-input"><label for="pass"><b>Xác nhận mật khẩu</b><span style="color: red">*</span></label></td>
                <td><input type="password" id="pass" name="pass" required></td>
            </tr>
            <tr>
                <td class="label-input"></td>
                <td>
                    <input type="checkbox" id="checkbox" name="checkbox">
                    <label for="checkbox"><i>Tôi đã đọc và đồng ý với điều khoản của AHM</i></label>
                </td>
            </tr>
            <tr>
                <td class="label-input"></td>
                <td><button>Tạo tài khoản</button></td>
            </tr>
        </table>
    </form>
</div>