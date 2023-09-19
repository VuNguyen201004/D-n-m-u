<?php
include_once "../model/function.php";
if(isset($_GET["id"])){
    $a='SELECT flights.flight_id, flights.flight_number,flights.image,flights.total_passengers,flights.description,airlines.airline_name 
    FROM flights,airlines 
    WHERE flights.airline_id=airlines.airline_id AND flights.flight_id='.$_GET["id"].';';
     $index=show($a);
     echo"<pre>";
     print_r($index);
     echo"</pre>";
 
 }
if(isset($_POST["submit"])&&($_POST["submit"])){
     // kiểm tra có update ảnh không
     if(empty($_FILES["image"]["name"])){
        $image=$index[0]["image"];
    // echo $image;
     }
     else{
        $image= $_FILES["image"]["name"];
        // di chuyển tên ảnh vào thư mục img
        $tmp=$_FILES["image"]["tmp_name"];
        $move="../img/".$image;
        move_uploaded_file($tmp,$move);
     }
    // echo $picture;
    
    // kiểm tra dữ liệu trống
    if(!empty($_POST["flight_number"])&&!empty($_POST["total_passengers"])&& !empty($_POST["description"] && !empty($image))){
        $flight_number=$_POST["flight_number"];
        $total_passengers=$_POST["total_passengers"];
        $description=$_POST["description"];
        $airline_id=$_POST["airline"];
        $flight_id=$_POST["flight_id"];
       
        // update dữ liệu vào database
        $a="UPDATE `flights` SET `flight_number`='".$flight_number."',`image`='".$image."',`total_passengers`='".$total_passengers."',`description`='".$description."',`airline_id`='".$airline_id."' WHERE flights.flight_id=".$flight_id.";";
        update($a);
        
        header('Location: show_flight.php'); // câu lệnh điều hướng
    }
    else{
        echo "Các trường không được để trống";
    }
}

?>
