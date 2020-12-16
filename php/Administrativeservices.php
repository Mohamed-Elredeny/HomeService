<?php
require 'realtime.php';

if(isset($_POST['changeCity'])){
    $_SESSION['city'] = $_POST['selectCity'];
}
@$MaintainRequests=  SelectWithTwoNodes('requestProvidedDepartment',$_SESSION['city']);
if(isset($_POST['accept'])){
    MaintainReqAccept('requestProvidedDepartment','usersRequestIds',$_POST['uId'],$_POST['requestId'],$_SESSION['city']);
}

if(isset($_POST['refuse'])){
    MaintainReqRefuse('requestProvidedDepartment','usersRequestIds',$_POST['uId'],$_POST['requestId'],$_SESSION['city']);

}

$PeopleTable =SelectWithNode('documentPaperPeople');
if(isset($_POST['edit-pdf'])){
    InsertNewPeoplePdf($_POST['pdfurl']);
    header('location:AdministrativeservicesTable.php');
}
$cities = SelectWithNode('cities');
