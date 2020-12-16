<?php
require_once '../vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;


$factory = (new Factory)->withServiceAccount('../secret/swcc-housing-dd865378344f.json');
$database = $factory->createDatabase();
$auth =$factory->createAuth();

function SelectWithNode($tablename){
    $factory = (new Factory)->withServiceAccount('../secret/swcc-housing-dd865378344f.json');
    $database = $factory->createDatabase();
    $result = $database->getReference($tablename)->getSnapshot()->getValue();
    return $result;
}

function SelectWithTwoNodes($tablename,$node1){
    $factory = (new Factory)->withServiceAccount('../secret/swcc-housing-dd865378344f.json');
    $database = $factory->createDatabase();
    $result = $database->getReference($tablename.'/'.$node1)->getSnapshot()->getValue();
    return $result;
}
function SelectWithThreeoNodes($tablename,$node1,$node2){
    $factory = (new Factory)->withServiceAccount('../secret/swcc-housing-dd865378344f.json');
    $database = $factory->createDatabase();
    $result = $database->getReference($tablename.'/'.$node1.'/'.$node2)->getSnapshot()->getValue();
    return $result;
}


function SelectWithThree($tablename,$node1,$node2,$node3){
    $factory = (new Factory)->withServiceAccount('../secret/swcc-housing-dd865378344f.json');
    $database = $factory->createDatabase();
    $result = $database->getReference($tablename.'/'.$node1.'/'.$node2.'/'.$node3)->getSnapshot()->getValue();
    return $result['status'];
}


//Tables
function SelectWithTwoNodes2($tablename,$node1){
    $factory = (new Factory)->withServiceAccount('../secret/swcc-housing-dd865378344f.json');
    $database = $factory->createDatabase();
    $result = $database->getReference($tablename.'/'.$node1)->getSnapshot()->getValue();
    return $result['pdfurl'];
}
function GetCityArabicName($tablename,$node1){
    $factory = (new Factory)->withServiceAccount('../secret/swcc-housing-dd865378344f.json');
    $database = $factory->createDatabase();
    $result = $database->getReference($tablename.'/'.$node1)->getSnapshot()->getValue();
    return $result['arabic_name'];
}


/*
 * Insert new document
 */
function InsertNewPeoplePdf($url){
    $factory = (new Factory)->withServiceAccount('../secret/swcc-housing-dd865378344f.json');
    $database = $factory->createDatabase();

    $database->getReference('documentPaperPeople/pdfUrl')
        ->set([
          'pdfurl'=>$url
        ]);

}

function InsertNewMainPdf($url,$city,$det){
    $factory = (new Factory)->withServiceAccount('../secret/swcc-housing-dd865378344f.json');
    $database = $factory->createDatabase();

    $database->getReference($url.'/'.$city)
        ->set([
            'pdfurl'=>$det
        ]);

}

function register($name,$email,$password,$phone,$image,$jobNumber,$departmentNumber)
{

    $factory = (new Factory)->withServiceAccount('../secret/swcc-housing-dd865378344f.json');
    $database = $factory->createDatabase();

    $auth = $factory->createAuth();

    $newuser =$auth->createUserWithEmailAndPassword($email,$password) ;
    $userid = $auth->getUserByEmail($email);

    $newPostKey = $userid->uid;

    $userData = [
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'phone' => $phone,
        'userId' =>$newPostKey,
        'image'=>$image,
        'jobNumber'=>$jobNumber,
        'departmentNumber'=>$departmentNumber
    ];

    $Register= [
        'Users/'.$newPostKey=>$userData,
    ];

    $addedDocRef= $database->getReference()->update($Register);



    //  $auth->createUserWithEmailAndPassword($email,$password) ;


}
function Modify($name,$email,$password,$phone,$image,$jobNumber,$departmentNumber,$id)
{

    $factory = (new Factory)->withServiceAccount('../secret/swcc-housing-dd865378344f.json');
    $database = $factory->createDatabase();

    $auth = $factory->createAuth();

    $newemail= $auth->changeUserEmail($id,$email);
    $newpass = $auth->changeUserPassword($id,$password);



    $userData = [
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'phone' => $phone,
        'userId' =>$id,
        'image'=>$image,
        'jobNumber'=>$jobNumber,
        'departmentNumber'=>$departmentNumber
    ];

    $Register= [
        'Users/'.$id=>$userData,
    ];

    $addedDocRef= $database->getReference()->update($Register);




}
function DeleteUser($id){
    $factory = (new Factory)->withServiceAccount('../secret/swcc-housing-dd865378344f.json');
    $database = $factory->createDatabase();

    $auth = $factory->createAuth();
    $delete =$auth->deleteUser($id);

    $database->getReference('Users/'.$id)->remove();


}


//Accept or delete
function MaintainReqAccept($tableName,$firstnode,$userid,$requestid,$country,$description){
    $factory = (new Factory)->withServiceAccount('../secret/swcc-housing-dd865378344f.json');
    $database = $factory->createDatabase();

    $database->getReference($tableName.'/'.$firstnode.'/'.$userid.'/'.$requestid)
        ->set([
            'countryName'=>$country,
             'requestId'=>$requestid,
            'status'=>1,
            'description'=>$description,
        ]);
}
function MaintainReqRefuse($tableName,$firstnode,$userid,$requestid,$country,$description){
    $factory = (new Factory)->withServiceAccount('../secret/swcc-housing-dd865378344f.json');
    $database = $factory->createDatabase();

    $database->getReference($tableName.'/'.$firstnode.'/'.$userid.'/'.$requestid)
        ->set([
            'countryName'=>$country,
            'requestId'=>$requestid,
            'status'=>2,
            'description'=>$description
        ]);
}


//Modify Clinic Time
function ModifyClinic($city,$clinic,$arabicName,$doctorDescription,$doctorName,$englishName,$image,$workTimeFrom,$workTimeTo){
    $factory = (new Factory)->withServiceAccount('../secret/swcc-housing-dd865378344f.json');
    $database = $factory->createDatabase();

    $database->getReference('clinicCategory/'.$city.'/'.$clinic)
        ->set([
            'arabicName'=>$arabicName,
            'doctorDescription'=>$doctorDescription,
            'doctorName'=>$doctorName,
            'englishName'=>$englishName,
            'image'=>$image,
            'workTimeFrom'=>$workTimeFrom,
            'workTimeTo'=>$workTimeTo
        ]);

}
function InsertNewClinic($city,$nameArabic,$nameEnglish,$doctorName,$doctorDescription,$workTimeFrom,$workTimeTo,$image){

    $factory = (new Factory)->withServiceAccount('../secret/swcc-housing-dd865378344f.json');
    $database = $factory->createDatabase();
    $newPostKey = $database->getReference('Chats')->push()->getKey();

    $database->getReference('clinicCategory' . '/' . $city.'/'.$nameEnglish)
        ->set([
            'arabicName' => $nameArabic,
            'doctorDescription' => $doctorDescription,
            'doctorName' => $doctorName,
            'englishName' => $nameEnglish,
            'image' => $image,
            'workTimeFrom' => $workTimeFrom,
            'workTimeTo' => $workTimeTo,
        ]);



}


//Add accepted user to the clinic report
function InsertAcceptedRequestClinicReport($city,$clinic,$date,$status,$reservation,$userid){

    $factory = (new Factory)->withServiceAccount('../secret/swcc-housing-dd865378344f.json');
    $database = $factory->createDatabase();
    $newPostKey = $database->getReference('Chats')->push()->getKey();

    $database->getReference('reports' . '/' . $city.'/'.$clinic.'/'.$date.'/accepted/'.$reservation)
        ->set([
            'reservation' => $reservation,
            'userid'=>$userid
        ]);



}
