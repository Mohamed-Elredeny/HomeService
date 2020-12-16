<?php
require 'realtime.php';


@$MaintainRequests=  SelectWithTwoNodes('uploadComplainRequest',$_SESSION['city']);
if(isset($_POST['accept'])){
    MaintainReqAccept('uploadComplainRequest','usersComplainIds',$_POST['uId'],$_POST['complainId'],$_SESSION['city']);
}

if(isset($_POST['refuse'])){
    MaintainReqRefuse('uploadComplainRequest','usersComplainIds',$_POST['uId'],$_POST['complainId'],$_SESSION['city']);

}

