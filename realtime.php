<?php
require_once 'vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)->withServiceAccount('secret/swcc-housing-dd865378344f.json');
$database = $factory->createDatabase();


function SelectWithNode($tablename){
    $factory = (new Factory)->withServiceAccount('secret/swcc-housing-dd865378344f.json');
    $database = $factory->createDatabase();
    $result = $database->getReference($tablename)->getSnapshot()->getValue();
    return $result;
}
function SelectWithTwoNodes($tablename,$node1){
    $factory = (new Factory)->withServiceAccount('secret/swcc-housing-dd865378344f.json');
    $database = $factory->createDatabase();
    $result = $database->getReference($tablename .'/'. $node1)->getSnapshot()->getValue();
    return $result;
}

function SelectWithThree($tablename,$node1,$node2){
    $factory = (new Factory)->withServiceAccount('secret/swcc-housing-dd865378344f.json');
    $database = $factory->createDatabase();
    $result = $database->getReference($tablename.'/'.$node1.'/'.$node2)->getSnapshot()->getValue();
    return $result;
}

function InsertInToDataBase($tableName,$country,$clinic){
    $factory = (new Factory)->withServiceAccount('secret/swcc-housing-dd865378344f.json');
    $database = $factory->createDatabase();

    $database->getReference($tableName.'/'.$country.'/'.$clinic)
        ->set([
            'arabicName' => 'My Application',
            'clinicDetails' =>[
                'ss' =>'..'
             ],
             'doctorDescription'=>'',
             'doctorName'=>'',
             'englishName'=>'',
            'image'=>'',
            'requestsTime'=>[
                't'=>'..',
            ],
            'workTimeFrom'=>'',
            'workTimeTo'=>'',
        ]);
}


//InsertInToDataBase('clinicCategory','alshakek','x');

///
///

//
//Add New User
//
function InsertNewUser($city,$email,$image,$name,$password,$phone){
    $notValidEmail=false;
        @$users = SelectWithNode('SystemUsers');
        if(count(@$users) > 0) {
            foreach ($users as $u) {
                if ($u['email'] == $email) {
                    $notValidEmail = true;
                }
            }
        }
        if($notValidEmail == false) {
            $factory = (new Factory)->withServiceAccount('secret/swcc-housing-dd865378344f.json');
            $database = $factory->createDatabase();
            $newPostKey = $database->getReference('Chats')->push()->getKey();

            $database->getReference('SystemUsers' . '/' . $newPostKey)
                ->set([
                    'email' => $email,
                    'image' => $image,
                    'name' => $name,
                    'password' => $password,
                    'phone' => $phone,
                    'isAdmin' => 'false',
                    'city' => $city,
                    'userId' => $newPostKey,
                ]);
        }else{
            echo "البريد الإلكتروني موجود بالفعل";
        }


}
//InsertNewUser();
///
//InsertNewUser('Damanhour','mohamed1@yahoo.com','','mohamed','mohamed123','01068298958');
//Insert new clinic
function InsertNewClinic($city,$nameArabic,$nameEnglish,$doctorName,$doctorDescription,$workTimeFrom,$workTimeTo,$image){

        $factory = (new Factory)->withServiceAccount('secret/swcc-housing-dd865378344f.json');
        $database = $factory->createDatabase();
        $newPostKey = $database->getReference('Chats')->push()->getKey();

        $database->getReference('clinicCategory' . '/' . $city.'/'.$nameEnglish)
            ->set([
                'arabicName' => $nameArabic,
                'doctorDescription' => $doctorDescription,
                'doctorName' => $doctorName,
                'englishName' => $nameEnglish,
                'image' => $image,
                'workTimeFrom' => intval($workTimeFrom),
                'workTimeTo' => intvval($workTimeTo),
            ]);



}


function DelNot($userid,$postid){
    $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/secret/camel-d6e52-7adbf525f176.json');

    $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://camel-d6e52.firebaseio.com/')
        ->create();
    $database = $firebase->getDatabase();
    @$res = SelAnyTableWithOneNode('notifications',$userid);
    if(@count($res) > 0){
        foreach ($res as $r){
            if($r['postid'] == $postid){
                $database->getReference('notifications/'.$userid.'/'.$r['$saveCurrentDate'])->remove();
            }
        }
    }



}
function register($name,$email,$password,$phone)
{
    $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/secret/camel-d6e52-7adbf525f176.json');
    $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://camel-d6e52.firebaseio.com/')
        ->create();

    $auth = $firebase->getAuth();
    $database = $firebase->getDatabase();

    $newuser =$auth->createUserWithEmailAndPassword($email,$password) ;
    $userid = $auth->getUserByEmail($email);

    $newPostKey = $userid->uid;

    $userData = [
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'phone' => $phone,
        'userId' =>$newPostKey,
        'image'=>'',
    ];

    $Register= [
        'Users/'.$newPostKey=>$userData,
    ];

    $addedDocRef= $database->getReference()->update($Register);

    if($addedDocRef > 0){
        return $addedDocRef;
    }else{
        return 0;
    }


    //  $auth->createUserWithEmailAndPassword($email,$password) ;


}
function modify($name,$email,$password,$phone,$documentid,$img1){
    $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/secret/camel-d6e52-7adbf525f176.json');
    $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://camel-d6e52.firebaseio.com/')
        ->create();
    $database = $firebase->getDatabase();


    $data = [
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'phone' => $phone,
        'userId'=>$documentid,
        'image'=>$img1,

    ];
    $Register= [
        'Users/'.$documentid=>$data,
    ];

    $addedDocRef= $database->getReference()->update($Register);

    return $addedDocRef;
    //$this->db->collection('Users')->document($documentid)->set($data);
}

