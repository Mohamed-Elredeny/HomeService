<?php

use Kreait\Firebase\Firestore;

class MyService
{
    public function __construct(Firestore $firestore)
    {
        $this->firestore = $firestore;
    }


}


//phpinfo();
/*
if(isset($_SERVER['POST'])){

}
*/

/*
 * date_default_timezone_set('Asia/Riyadh');
$dateTime =  time();
$date = new DateTime();
header("Refresh:60");

echo "Date: " . $date->format("Y-m-d") . "<br> Time: " . $date->format("h:i:s A");
if($date->format("h:i:s A") == "09:59:00 AM"){
    echo "

        <script>
            alert('Done');
        </script>
    ";
    InsertNewClinic('A','أ','A','A','A',2,3,'1');
};
 */


echo date('H:i:s');
sleep(1);
flush();
echo "<br>";
echo date('H:i:s');
