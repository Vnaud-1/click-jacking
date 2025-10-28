<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $hobbies = $_POST['hobbies'];

    // Lưu dữ liệu vào file
    $file = fopen("data.txt", "a");
    fwrite($file, "Họ tên: $name | Tuổi: $age | SĐT: $phone | Địa chỉ: $address | Sở thích: $hobbies\n");
    fclose($file);

    echo "✅ Đăng ký thành công! Dữ liệu đã được lưu vào file data.txt";
}
?>
