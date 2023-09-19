<?php
include_once "../controller/show_data.php";
include_once "../controller/update.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button><a href='add_flight.php'>Thêm</a></button>
    <table border=1>
        <tr>
            <th>Số chuyến bay</th>
            <th>Ảnh</th>
            <th>Số hành khách</th>
            <th>Ghi chú</th>
            <th>Hãng hàng không</th>
            <th>Xoá</th>
            <th>Sửa</th>
        </tr>
       
        <?php
        $sql= "SELECT flights.flight_id, flights.flight_number,flights.image,flights.total_passengers,flights.description,airlines.airline_name 
        FROM flights,airlines
        WHERE flights.airline_id=airlines.airline_id;";
        $kq=show($sql);
        // echo"<pre>";
        // print_r($kq);
        // echo"</pre>";
        foreach($kq as $key=>$value){
            echo' <tr>
            <td>'.$value["flight_number"].'</td>
            <td><img src="../img/'.$value["image"].'" alt="Lỗi" width=100 height=100></td>
            <td>'.$value["total_passengers"].'</td>
            <td>'.$value["description"].'</td>
            <td>'.$value["airline_name"].'</td>
            <td><a href="../controller/delete.php?id='.$value["flight_id"].'" onclick="return confirm(\'Bạn có chắc chắn muốn xoá\')" >Xoá</a> </td>
            <td><a href="update_flight.php?id='.$value["flight_id"].'">Sửa</a></td>
        </tr>';
        }
        ?>

    </table>
</body>
</html>