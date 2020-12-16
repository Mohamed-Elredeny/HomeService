<?php
require 'realtime.php';


@$MaintainRequests=  SelectWithTwoNodes('agricultureServices',$_SESSION['city']);
if(isset($_POST['accept'])){
    MaintainReqAccept('userRequestIds','agricultureServices',$_POST['uId'],$_POST['requestId'],$_SESSION['city'],$_POST['description']);
}

if(isset($_POST['refuse'])){
    MaintainReqRefuse('userRequestIds','agricultureServices',$_POST['uId'],$_POST['requestId'],$_SESSION['city'],$_POST['description']);

}
