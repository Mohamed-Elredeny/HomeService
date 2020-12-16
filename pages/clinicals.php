<?php
    require('../php/header.php');
    require('../php/clinicals.php');

?>
<link rel="stylesheet" href="../assets/css/clinicals.css">
<?php if(@count($Clinicals) > 0){ ?>
<div class='view ' style="position: relative;bottom:25%;margin-left: 5%">
    <center><h2> <?php echo  "الوحدة الطبية التابعه لمدينة " .GetCityArabicName('cities',$_SESSION['city'])  ?></h2></center>
    <br>
    <center>
        <!-- Change City -->
        <form action="clinicals.php" method="post">
        <?php if(count($cities) > 0){ ?>
            <select  name="selectCity"  class="btn btn-primary" style="text-align: right;direction: rtl;width: 200px">
                <option value="">اختر مدينة</option>
                <?php foreach ($cities as $c ){ ?>
                    <option value="<?php echo $c['name']?>"><?php echo $c['arabic_name'] ?></option>
                <?php } ?>
            </select>
        <?php } ?>
        <br>   <br>
        <input type="submit" value="تغيير المدينة" class="btn btn-dark" name="changeCity">
        </form>


    </center>
    <br>

    <br><br>
    <?php foreach ($Clinicals as $c){ ?>
        <?php echo "
   
    <div class='card' style='width: 18rem;display: inline-block;margin-right: 20px;margin-bottom: 10px;padding-top: 5px;padding-bottom: 10px;text-align: center;direction: rtl'>
        <img class='card-img-top' src=' " .$c['image']." ' alt='Card image cap' style='height:200px'>
        <div class='card-body'>
            <h5 class='card-title'>" .$c['arabicName']."</h5>
            <p class='card-text'>" .$c['doctorDescription']."</p>
            <a href='OneClinic.php?clinic_id=".$c['englishName']." ' class='btn btn-primary'>تفاصيل</a>
        </div>
    </div>


        " ?>
    <?php } ?>
</div>
<?php } ?>

