<?php
include_once "../controller/show_data.php";
include_once "../controller/insert.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Thêm sản phẩm</h1>
    <form action="" method="Post" enctype="multipart/form-data">
        <div>
            <label for="">Số chuyến bay</label>
            <input type="text" name="flight_number" id="">
        </div>
        <div>
            <label for="">Ảnh </label>
            <input type="file" name="image" id="" >
        </div>
        <div>
            <label for="">Số lượng hành khách</label>
            <input type="number" name="total_passengers" id="" >
        </div>
        <div>
            <label for="">Ghi chú</label>
            <input type="text" name="description" id="" >
        </div>
        <div>
            <label for="">Hãng hàng không</label>
            <select name="airline" id="">
                <!-- <option value="1">tên nhi</option> -->
                <?php
                $a="SELECT * FROM `airlines`";
                $kq=show($a);
                echo"<pre>";
                print_r($kq);
                echo"</pre>";
                foreach($kq as $key=>$value){
                    echo'<option value="'.$value["airline_id"].'">'.$value["airline_name"].'</option>';
                }
                 ?>

            </select>

        </div>
        <div>
            <input type="submit" value="Thêm" name="submit">
        </div>
    </form>
</body>
</html>