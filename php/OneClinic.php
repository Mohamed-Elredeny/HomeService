<?php
require 'realtime.php';
if(isset($_POST['changeCity'])){
    $_SESSION['city'] = $_POST['selectCity'];
}

if(isset($_GET['clinic_id'])) {
    $Clinicals = SelectWithThreeoNodes('clinicCategory', $_SESSION['city'] ,$_GET['clinic_id']);
   // date_default_timezone_set('GMT+2');
    //$date = date('m/d/Y h:i:s a', time());
}
if(isset($_POST['changeTime'])){
    if(@count($Clinicals) > 0) {
        ModifyClinic($_SESSION['city'], $_GET['clinic_id'], $_POST['arabicName'], $_POST['doctorDescription'], $_POST['doctorName'], $_POST['englishName'], $_POST['image'], intval($_POST['workTimeFrom']), intval($_POST['workTimeTo']));
    }
    header('location:OneClinic.php?clinic_id='.$_GET['clinic_id'].' ');
}


@$MaintainRequests=  SelectWithThreeoNodes('clinicTimeRequest',$_SESSION['city'],$_GET['clinic_id']);
if(isset($_POST['accept'])){
    MaintainReqAccept('userRequestIds','clinicTimeRequest',$_POST['uId'],$_POST['requestId'],$_SESSION['city'],$_POST['description']);
    InsertAcceptedRequestClinicReport($_SESSION['city'],$_GET['clinic_id'],$_POST['time'],'accepted',$_POST['requestNumber'],$_POST['uId']);
}

if(isset($_POST['refuse'])){
    MaintainReqRefuse('userRequestIds','clinicTimeRequest',$_POST['uId'],$_POST['requestId'],$_SESSION['city'],$_POST['description']);
}