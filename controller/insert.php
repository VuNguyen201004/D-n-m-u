<?php
include_once "../model/function.php";
// function check_total($a){
//     if($a<0){
//        echo "trường số lượng khách phải là số dương";
//     }
//     else{
//         $total_passengers=$_POST["total_passengers"];
//     }
// }
if(isset($_POST["submit"])&&($_POST["submit"])){
    if(!empty($_POST["flight_number"]) && !empty($_FILES["image"])&&!empty($_POST["total_passengers"])&& !empty($_POST["description"])){
        if($_POST["total_passengers"]<=0){
            echo"trường số lượng khách phải là số dương";
        }
        else{
            $flight_number=$_POST["flight_number"];
            $image=$_FILES["image"]["name"];
            // echo $picture;
            $total_passengers=$_POST["total_passengers"];
            $description=$_POST["description"];
            $airline_id=$_POST["airline"];
            // thêm dữ liệu vào database
            $a="INSERT INTO `flights`(`flight_id`, `flight_number`, `image`, `total_passengers`, `description`, `airline_id`) VALUES (null,'".$flight_number."','".$image."','".$total_passengers."','".$description."','".$airline_id."')";
            insert($a);
            // di chuyển tên ảnh vào thư mục img
            $tmp=$_FILES["image"]["tmp_name"];
            $move="../img/".$image;
            move_uploaded_file($tmp,$move);
            header('Location: show_flight.php'); // câu lệnh điều hướng
        }
        
    }
    else{
        echo "Các trường không được để trống";
    }
}
?>