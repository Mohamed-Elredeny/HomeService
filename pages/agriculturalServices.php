<?php
require('../php/header.php');
require('../php/agriculturalServices.php');

?>

    <br><br><br>
    <center>
        <h2>الخدمات الزراعية</h2>
        <br>
        <center>
            <a href="AdministrativeservicesAcc.php"><input type="button" class="btn btn-primary" value="الإبلاغات"></a>
            <a href="AdministrativeServicesComplaints.php"><input type="button" class="btn btn-warning" value="الإقتراحات"></a>
            <a href="AdministrativeservicesTable.php"><input type="button" class="btn btn-dark" value="الجداول"></a>
            <a href="FacilityServicesServices.php"><input type="button" class="btn btn-danger" value="الخدمات"></a>
            <a href="FacilityServices.php"><input type="button" class="btn btn-primary" value="خدمات المرافق"></a>

        </center>

        <br>
        <a href="agriculturalServicesAcc.php"><input type="button" class="btn btn-primary" value=" الطلبات المقبولة "></a>
        <a href="agriculturalServicesRef.php"><input type="button" class="btn btn-danger" value="الطلبات المرفوضة "></a>
        <a href="agriculturalServices.php"><input type="button" class="btn btn-warning" value="الطلبات قيد الانتظار"></a>


    </center>

<?php $counter=0 ?>
<?php  if(@count(@$MaintainRequests) > 0){ ?>
    <?php foreach ($MaintainRequests as $m){ ?>
        <?php if( SelectWithThree('userRequestIds','agricultureServices',$m['userId'],$m['requestId']) == 0 ){ ?>
            <div class="card" style="height: 300px;width: auto;display: inline-block;margin-left: 10px;margin-top: 20px;text-align: center;padding-top: 20px;padding-bottom: 70px">
                طلب صيانة
                <div class="card-body">
                    <form action="agriculturalServices.php" method="post">
                        <table class="table" style="text-align: right;direction: rtl">

                            <tbody>
                            <tr>
                                <th scope="row">الاسم</th>
                                <td><?php echo $m['name']?></td>
                            </tr>
                            <tr>
                                <th scope="row">الرقم الوظيفي</th>
                                <td><?php echo $m['nationalWork']?></td>
                            </tr>


                            <tr>
                                <th scope="row">نوع الصيانة</th>
                                <td><?php echo $m['servicesType']?></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="text" placeholder="ارسل سببك" required name="description">
                                </td>
                            </tr>



                            </tbody>
                        </table>
                        <input type="hidden" name="uId" value="<?php echo $m['userId']?>">
                        <input type="hidden" name="requestId" value="<?php echo $m['requestId']?>">

                        <input type="submit" value="قبول" class="btn btn-primary" name="accept">
                        <input type="submit" value="رفض" class="btn btn-danger" name="refuse">
                    </form>
                </div>
            </div>
            <?php $counter++ ?>
        <?php } ?>


    <?php } ?>
<?php }else{
    echo "<br><br><center><h3> لم يتم إرسال طلبات صيانة بعد</h3> </center>";
} ?>



<?php if($counter == 0){
    echo "<br><br><center><h3>لا توجد طلبات قيد الإنتظار</h3> </center>";

} ?>







<?php
require('../php/footer.php');
?>