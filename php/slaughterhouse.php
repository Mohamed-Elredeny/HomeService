<?php
require 'realtime.php';


@$MaintainRequests=  SelectWithTwoNodes('almaslhServices',$_SESSION['city']);
if(isset($_POST['accept'])){
    MaintainReqAccept('userRequestIds','almaslhServices',$_POST['uId'],$_POST['requestId'],$_SESSION['city'],$_POST['description']);
}

if(isset($_POST['refuse'])){
    MaintainReqRefuse('userRequestIds','almaslhServices',$_POST['uId'],$_POST['requestId'],$_SESSION['city'],$_POST['description']);

}
