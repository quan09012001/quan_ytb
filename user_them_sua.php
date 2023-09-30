<?php
require_once "../functions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["user_name"];
    $email = $_POST["email"];
    $gt = $_POST["gt"];
    $hobby = $_POST["hobby"];
    $nghe_nghiep = $_POST["nghe_nghiep"];
    $intro = $_POST["intro"];
    $group_id = $_POST["group_id"];
    $file_img = $_POST["file_img"];
    $password = $_POST["password"];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Thêm người dùng vào cơ sở dữ liệu
    $sql = "INSERT INTO users (user_name, email, gt, hobby, nghe_nghiep, intro, group_id, file_img, password) 
            VALUES ('$user_name', '$email', '$gt', '$hobby', '$nghe_nghiep', '$intro', '$group_id', '$file_img', '$hashedPassword')";
    $result = execute($sql);

    if ($result) {
        echo "Thêm mới người dùng thành công.";
    } else {
        echo "Lỗi: Không thể thêm mới người dùng.";
    }
}
?>

<div class="container">
    <h2 class="py-2 text-center h4">THÊM MỚI NGƯỜI DÙNG</h2>
    <form method="post">
        <div class="form-group">
            <label for="user_name">Tên người dùng:</label>
            <input type="text" class="form-control" id="user_name" name="user_name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="gt">Giới Tính:</label>
            <select class="form-control" id="gt" name="gt">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
            </select>
        </div>
        <div class="form-group">
            <label for="hobby">Sở Thích:</label>
            <input type="text" class="form-control" id="hobby" name="hobby">
        </div>
        <div class="form-group">
            <label for="nghe_nghiep">Nghề Nghiệp:</label>
            <input type="text" class="form-control" id="nghe_nghiep" name="nghe_nghiep">
        </div>
        <div class="form-group">
            <label for="intro">Giới thiệu:</label>
            <textarea class="form-control" id="intro" name="intro"></textarea>
        </div>
        <div class="form-group">
            <label for="group_id">Quyền Hạn:</label>
            <select class="form-control" id="group_id" name="group_id">
                <option value="0">khách</option>
                <option value="1">admin</option>
            </select>
        </div>
        <div class="form-group">
            <label for="file_img">Ảnh đại diện:</label>
            <select class="form-control" id="file_img" name="file_img">
                <option value="vuilam.png">Mặt cười Nam</option>
                <option value="vuilam.jpg">Mặt cười Nữ</option>
            </select>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Thêm Mới</button>
    </form>
</div>
