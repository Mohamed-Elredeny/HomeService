<?php
require('../php/header.php');
require('../php/Administrativeservices.php');

?>
<link rel="stylesheet" href="../assets/css/FacilityServices.css">
    <br>
    <center><h2> <?php echo  "خدمات المرافق  التابعه لمدينة " .GetCityArabicName('cities',$_SESSION['city'])  ?></h2></center>
    <br>
    <center>
        <!-- Change City -->
        <form action="FacilityServices.php" method="post">
            <?php if(count($cities) > 0){ ?>
                <select  name="selectCity"  class="btn btn-primary" style="text-align: right;direction: rtl;width: 200px">
                    <option value="">اختر مدينة</option>
                    <?php foreach ($cities as $c ){ ?>
                        <option value="<?php echo $c['name']?>"><?php echo $c['arabic_name'] ?></option>
                    <?php } ?>
                </select>
            <?php } ?>
            <br><br>
            <input type="submit" value="تغيير المدينة" class="btn btn-dark" name="changeCity">
        </form>
    </center>
<br>
<!--
<center>
    <a href="AdministrativeservicesAcc.php"><input type="button" class="btn btn-primary" value="الإبلاغات"></a>
    <a href="AdministrativeServicesComplaints.php"><input type="button" class="btn btn-warning" value="الإقتراحات"></a>
    <a href="AdministrativeservicesTable.php"><input type="button" class="btn btn-dark" value="الجداول"></a>
    <a href="FacilityServicesServices.php"><input type="button" class="btn btn-danger" value="الخدمات"></a>

</center>
-->
<div class="cats">
    <a href="insectsRequest.php"><input type="button" class="btn btn-primary" value="خدمات مكافحة الحشرات" ></a>
    <a href="slaughterhouse.php"><input type="button" class="btn btn-primary" value="خدمات المسلخ " ></a>
    <a href="agriculturalServices.php"><input type="button" class="btn btn-primary" value="خدمات الزراعة " ></a>
    <a href="CleanBuildingsTable.php"><input type="button" class="btn btn-primary" value="جدول تنظيف المباني  " ></a>
    <a href="AdministrativeservicesRef.php"><input type="button" class="btn btn-primary" value="اقترحات " ></a>
    <a href="AdministrativeservicesRef.php"><input type="button" class="btn btn-primary" value="إبلاغات مخالفات النظافة " ></a>




</div>
