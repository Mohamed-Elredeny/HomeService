<?php
require('../php/header.php');
require('../php/insectsRequest.php');

?>
    <br>
    <center>
        <a href="AdministrativeservicesAcc.php"><input type="button" class="btn btn-primary" value="الإبلاغات"></a>
        <a href="AdministrativeServicesComplaints.php"><input type="button" class="btn btn-warning" value="الإقتراحات"></a>
        <a href="CleanBuildingsTable.php"><input type="button" class="btn btn-dark" value="الجداول"></a>
        <a href="FacilityServicesServices.php"><input type="button" class="btn btn-danger" value="الخدمات"></a>
        <a href="FacilityServices.php"><input type="button" class="btn btn-primary" value="خدمات المرافق"></a>


    </center>
    <br>
    <center><h2> <?php echo  "خدمة مكافحة الحشرات التابعه لمدينة " .GetCityArabicName('cities',$_SESSION['city'])  ?></h2></center>
    <br>
    <center>
        <!-- Change City -->
        <form action="insectsRequest.php" method="post">
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

    <center>

        <br>
        <a href="insectsRequestAcc.php"><input type="button" class="btn btn-primary" value=" الطلبات المقبولة "></a>
        <a href="insectsRequestRef.php"><input type="button" class="btn btn-danger" value="الطلبات المرفوضة "></a>
        <a href="insectsRequest.php"><input type="button" class="btn btn-warning" value="الطلبات قيد الانتظار"></a>


    </center>

<?php $counter=0; ?>
<?php  if(@count(@$MaintainRequests) > 0){ ?>
    <?php foreach ($MaintainRequests as $m){ ?>
        <?php if( SelectWithThree('userRequestIds','insectsRequest',$m['userId'],$m['insectsRequestId']) == 0 ){ ?>
            <div class="card" style="height: 380px;width: auto;display: inline-block;margin-left: 10px;margin-top: 20px;text-align: center;padding-top: 20px;padding-bottom: 70px">
                طلب صيانة
                <div class="card-body">
                    <form action="insectsRequest.php" method="post">
                        <table class="table" style="text-align: right;direction: rtl">

                            <tbody>
                            <tr>
                                <th scope="row">الاسم</th>
                                <td><?php echo $m['name']?></td>
                            </tr>
                            <tr>
                                <th scope="row">الرقم الوظيفي</th>
                                <td><?php echo $m['jobNumber']?></td>
                            </tr>


                            <tr>
                                <th scope="row">رقم الوحدة</th>
                                <td><?php echo $m['departmentNumber']?></td>
                            </tr>

                            <tr>
                                <th scope="row">رقم الهاتف</th>
                                <td><?php echo $m['phoneNumber']?></td>
                            </tr>


                            <tr>
                                <td colspan="2">
                                    <center> <input type="text" placeholder="ارسل سببك" required name="description"></center>
                                </td>
                            </tr>



                            </tbody>
                        </table>
                        <input type="hidden" name="uId" value="<?php echo $m['userId']?>">
                        <input type="hidden" name="requestId" value="<?php echo $m['insectsRequestId']?>">

                        <input type="submit" value="قبول" class="btn btn-primary" name="accept">
                        <input type="submit" value="رفض" class="btn btn-danger" name="refuse">
                    </form>
                </div>
            </div>
            <?php $counter++ ?>
        <?php } ?>


    <?php } ?>
<?php }else{
    echo "<br><br><center><h3> لم يتم إرسال طلبات  بعد</h3> </center>";
} ?>
<?php if($counter == 0 ){
    echo "<br><br><center><h3>لا توجد طلبات قيد الانتظار بعد</h3> </center>";

} ?>











<?php
require('../php/footer.php');
?>