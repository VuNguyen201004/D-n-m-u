<?php
include_once "../model/function.php";
if(isset($_GET["id"])){
    $sql=$a='DELETE FROM flights WHERE `flights`.`flight_id` = '.$_GET["id"].'';
    delete($sql);
    header('Location: ../view/show_flight.php');
}
?>