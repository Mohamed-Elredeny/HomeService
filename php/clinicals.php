<?php
require_once 'realtime.php';
if(isset($_POST['changeCity'])){
    $_SESSION['city'] = $_POST['selectCity'];
}


$Clinicals = SelectWithTwoNodes('clinicCategory',$_SESSION['city']);
$cities = SelectWithNode('cities');

