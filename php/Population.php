<?php
require ('realtime.php');
@$users = SelectWithNode('Users');

if(isset($_POST['AddNewCus'])){
    $exist=false;
    if(@$users > 0){
        foreach ($users as $user){
            if($user['email'] == $_POST['email']){
                $exist=true;
            }

        }
    }
    if(strlen ($_POST['password']) < 6 ) {
        echo "كلمة المرور يجب ان تحتوي علي اكثر من 6 حروف";
    }else{

        if($exist == false ) {
            register($_POST['name'], $_POST['email'], $_POST['password'], $_POST['phone'], $_POST['img1'], $_POST['jobNumber'], $_POST['departmentNumber']);
        }
    }
    $exist=false;
}

if(isset($_POST['EditNewCus'])){
    if(isset($_GET['CurentPopId'])) {

        if (strlen($_POST['password']) < 6) {
            echo "كلمة المرور يجب ان تحتوي علي اكثر من 6 حروف";
        } else {

            Modify($_POST['name'], $_POST['email'], $_POST['password'], $_POST['phone'], $_POST['img1'], $_POST['jobNumber'], $_POST['departmentNumber'], $_GET['CurentPopId']);

        }
    }

}

if(isset($_GET['DelId'])){
    DeleteUser($_GET['DelId']);
    header('location:Population.php');
}