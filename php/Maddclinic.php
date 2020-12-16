<?php
require_once ('realtime.php');

$cities = SelectWithNode('cities');
if(isset($_POST['AddNewClinic'])){
    InsertNewClinic($_POST['city'],$_POST['arabicName'],$_POST['englishName'],$_POST['doctorName'],$_POST['doctorDescription'],intval($_POST['workTimeFrom']),intval($_POST['workTimeTo']),$_POST['img1']);
}