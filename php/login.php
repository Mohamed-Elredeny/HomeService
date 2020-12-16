<?php
require_once ('./realtime.php');
function login($email,$password,$submit){
    $exist=0;
    $users=0;
    $isadmin = false;
    $isactive=false;
    $user_id='';
    if(isset($_POST["$submit"])){
        $email =htmlspecialchars($_POST['email']);
        $password =htmlspecialchars($_POST['password']);
        if($email == Null || $password == Null){
            echo 'لا يمكنك ترك الحقول فارغة<br>';
        }

        $usersTable = SelectWithNode('SystemUsers');
        foreach($usersTable as $u){
            if(@$u['email'] == $email){
                if($u['isAdmin'] == 'true' ){
                    $isadmin =true;
                }
                $user_id = $u['userId'];
                $users++;

            }
        }

        if($users>0){
            if($usersTable[$user_id]['password'] == $password){
                $exist=1;
                $isactive=true;

            }else{
                echo "password is wrong";
            }
        } else{
            echo "Try Again with another email ";
        }

        if($exist == 1 ){
           header('location:homepage.php?id='.$user_id.' ');
        }





    }


}
