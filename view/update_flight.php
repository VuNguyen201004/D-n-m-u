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
<h1> Thêm sản phẩm</h1>
    <form action="" method="Post" enctype="multipart/form-data">
        <div>
            <input type="hidden" name="flight_id" value="<?php echo $_GET["id"] ?>">
        </div>
        <div>
            <label for="">Số chuyến bay</label>
            <input type="text" name="flight_number" id="" value="<?php echo $index[0]["flight_number"] ?>">
        </div>
        <div>
            <label for="">Ảnh </label>
            <input type="file" name="image" id="" >
            <img src="../img/<?php echo $index[0]["image"] ?>" alt="" width=100 height=100>
        </div>
        <div>
            <label for="">Số lượng hành khách</label>
            <input type="number" name="total_passengers" id="" value="<?php echo $index[0]["total_passengers"] ?>" >
        </div>
        <div>
            <label for="">Ghi chú</label>
            <input type="text" name="description" id="" value="<?php echo $index[0]["description"] ?>" >
        </div>
        <div>
            <label for="">Hãng hàng không</label>
            <select name="airline" id="" value="<?php echo $index[0]["airline_name"] ?>">
                <?php
                $a="SELECT * FROM `airlines`";
                $kq=show($a);
                // echo"<pre>";
                // print_r($kq);
                // echo"</pre>";
                foreach($kq as $key=>$value){
                    echo'<option value="'.$value["airline_id"].'">'.$value["airline_name"].'</option>';
                }
                 ?>

            </select>

        </div>
        <div>
            <input type="submit" value="Sửa" name="submit">
        </div>
    </form>
</body>
</html>