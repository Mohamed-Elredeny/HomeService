<?php
require 'realtime.php';

if(isset($_POST['changeCity'])){
    $_SESSION['city'] = $_POST['selectCity'];
}
//@$MaintainRequests = SelectWithThreeoNodes('insectsRequest', $_SESSION['city'] ,$_GET['clinic_id']);

@$MaintainRequests=  SelectWithTwoNodes('insectsRequest',$_SESSION['city']);
if(isset($_POST['accept'])){
    MaintainReqAccept('userRequestIds','insectsRequest',$_POST['uId'],$_POST['requestId'],$_SESSION['city'],$_POST['description']);
}

if(isset($_POST['refuse'])){
    MaintainReqRefuse('userRequestIds','insectsRequest',$_POST['uId'],$_POST['requestId'],$_SESSION['city'],$_POST['description']);

}
$cities = SelectWithNode('cities');
