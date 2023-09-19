<?php
include_once "connect1.php";
    function show($a){
        $conn= connectdb();
        $sql=$conn->prepare($a);
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC); // câu lệnh trả về dữ liệu dạng mảng
        $kq=$sql->fetchAll();
        return $kq;
    }
function delete($a){
    $conn= connectdb();
    $sql=$conn->prepare($a);
    $sql->execute();
}
function insert($a){
    $conn= connectdb();
    $sql=$conn->prepare($a);
    $sql->execute();
}
function update($a){
    $conn= connectdb();
    $sql=$conn->prepare($a);
    $sql->execute();
}
?>