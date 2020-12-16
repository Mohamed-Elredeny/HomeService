<?php
require 'realtime.php';

if(isset($_POST['changeCity'])){
    $_SESSION['city'] = $_POST['selectCity'];
}
@$MaintainRequests=  SelectWithTwoNodes('requestMaintainDepartment',$_SESSION['city']);
if(isset($_POST['accept'])){
    MaintainReqAccept('userRequestIds','requestMaintainDepartment',$_POST['uId'],$_POST['requestId'],$_SESSION['city'],$_POST['description']);
}

if(isset($_POST['refuse'])){
    MaintainReqRefuse('userRequestIds','requestMaintainDepartment',$_POST['uId'],$_POST['requestId'],$_SESSION['city'],$_POST['description']);

}
$PeopleTable =SelectWithTwoNodes2('documentMaintainPdf',$_SESSION['city']);
if(isset($_POST['edit-pdf'])){
    InsertNewMainPdf('documentMaintainPdf',$_SESSION['city'],$_POST['pdfurl']);
    header('location:maintenanceTable.php');
}
$cities = SelectWithNode('cities');
