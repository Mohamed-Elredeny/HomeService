<?php
require_once ('./realtime.php');
if(isset($_GET['id'])){
    $Curentuser = SelectWithTwoNodes('SystemUsers',$_GET['id']);
    $_SESSION['id'] =$_GET['id'];
    $_SESSION['city']=$Curentuser['city'];
}
