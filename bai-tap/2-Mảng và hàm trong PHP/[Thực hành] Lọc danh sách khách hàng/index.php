<?php

$customerList = [
    "1" => [
        "name" => "Mai Văn Hoàn",
        "day_of_birth" => "1983/08/20",
        "address" => "Hà Nội",
        "profile" => "images/ball.jpg"],
    "2" => [
        "name" => "Nguyễn Văn Nam",
        "day_of_birth" => "1983/08/21",
        "address" => "Bắc Giang",
        "profile" => "images/ball.jpg"],
    "3" => [
        "name" => "Nguyễn Thái Hòa",
        "day_of_birth" => "1983/08/22",
        "address" => "Nam Định",
        "profile" => "images/ball.jpg"],
    "4" => [
        "name" => "Trần Đăng Khoa",
        "day_of_birth" => "1983/08/17",
        "address" => "Hà Tây",
        "profile" => "images/ball.jpg"],
    "5" => [
        "name" => "Nguyễn Đình Thi",
        "day_of_birth" => "1983/08/19",
        "address" => "Hà Nội",
        "profile" => "images/ball.jpg"]
];

function searchByDate($customers, $fromDate, $toDate)
{
    if (empty($fromDate) || empty($toDate)) {
        return $customers;
    }

    $filteredCustomers = [];
    foreach ($customers as $customer) {
        if (strtotime($customer['day_of_birth']) < strtotime($fromDate))
            continue;
        if (strtotime($customer['day_of_birth']) > strtotime($toDate))
            continue;
        $filteredCustomers[] = $customer;
    }
    return $filteredCustomers;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Customers filter</title>
    <style>
        table { border-collapse: collapse; width: 100%; border: 1px solid #ddd; } th, td { padding: 8px; text-align: left; border-bottom: 1px solid #ddd; } #from, #to { width: 200px; border: 2px solid #ccc; border-radius: 4px; font-size: 16px; padding: 12px 10px 12px 10px; } #submit { border-radius: 2px; padding: 10px 32px; font-size: 16px; } .profile{ height: 60px; width: 80px; overflow: hidden; } .profile img{ width: 100%; } caption { background-color: aqua; } form { text-align: center; padding-bottom: 5px; }
    </style>
</head>
<body>
<?php
$fromDate = null;
$toDate = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fromDate = $_POST["from"];
    $toDate = $_POST["to"];
}
$filteredCustomers = searchByDate($customerList, $fromDate, $toDate);
?>
<form method="post">
    Chọn ngày sinh từ: <label for="from"></label><input id="from" type="date" name="from" placeholder="yyyy/mm/dd"
                                                        value="<?php echo isset($fromDate) ? $fromDate : ''; ?>"/>
    đến: <label for="to"></label><input id="to" type="date" name="to" placeholder="yyyy/mm/dd"
                                        value="<?php echo isset($toDate) ? $toDate : ''; ?>"/>
    <input type="submit" id="submit" value="Lọc"/>
</form>
<table border="0">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php foreach ($filteredCustomers as $index => $customer): ?>
        <tr>
            <td><?php echo $index + 1; ?></td>
            <td><?php echo $customer['name']; ?></td>
            <td><?php echo $customer['day_of_birth']; ?></td>
            <td><?php echo $customer['address']; ?></td>
            <td>
                <div class="profile"><img src="<?php echo $customer['profile']; ?>"/></div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>