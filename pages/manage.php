<?php
require('../php/header.php');
require('../php/manage.php');

?>
    <link rel="stylesheet" href="../assets/css/FacilityServices.css">

<br><br><br>
<center>


    <br>
    <a href="manageDel.php"><input type="button" class="btn btn-primary" value="حذف " style="width: 200px"></a>
    <a href="manageMod.php"><input type="button" class="btn btn-danger" value="تعديل " style="width: 200px"> </a>
    <a href="manage.php"><input type="button" class="btn btn-dark" value="اضافة" style="width: 200px"> </a>



</center>
    <div class="cats">
        <a href="Maddclicnic.php"><input type="button" class="btn btn-primary" value="اضافة عيادة" ></a>
        <a href="slaughterhouse.php"><input type="button" class="btn btn-primary" value="خدمات المسلخ " ></a>
        <a href="agriculturalServices.php"><input type="button" class="btn btn-primary" value="خدمات الزراعة " ></a>
        <a href="CleanBuildingsTable.php"><input type="button" class="btn btn-primary" value="جدول تنظيف المباني  " ></a>
        <a href="AdministrativeservicesRef.php"><input type="button" class="btn btn-primary" value="اقترحات " ></a>
        <a href="AdministrativeservicesRef.php"><input type="button" class="btn btn-primary" value="إبلاغات مخالفات النظافة " ></a>




    </div>



<?php
return ('../php/footer.php');
?>