<?php
require('../php/header.php');
require('../php/Administrativeservices.php');

?>
    <br>
    <center><h4>لائحة الإسكان</h4></center>
    <br>
    <center>
        <a href="maintenanceTable.php"><input type="button" class="btn btn-info" value="عرض الشكاوي"></a>
        <a href="maintenanceTable.php"><input type="button" class="btn btn-dark" value="لائحة الإسكان"></a>
        <a href="AdministrativeservicesAcc.php"><input type="button" class="btn btn-primary" value=" الطلبات المقبولة "></a>
        <a href="AdministrativeservicesRef.php"><input type="button" class="btn btn-danger" value="الطلبات المرفوضة "></a>
        <a href="Administrativeservices.php"><input type="button" class="btn btn-warning" value="الطلبات قيد الانتظار"></a>
    </center>


<?php  if(@count(@$MaintainRequests) > 0){ ?>
    <?php foreach ($MaintainRequests as $m){ ?>
        <?php if( SelectWithThree('requestProvidedDepartment','usersRequestIds',$m['userId'],$m['requestId']) == '2' ){ ?>
            <div class="card" style="height: 300px   ;width: auto;display: inline-block;margin-left: 10px;margin-top: 20px;text-align: center;padding-top: 20px;padding-bottom: 70px">
                <h4> طلب إثبات سكن</h4>
                <div class="card-body">
                    <form action="Administrativeservices.php" method="post">
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
                                <th scope="row">رقم التواصل</th>
                                <td><?php echo $m['phoneNumber']?></td>
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
        <?php }else{
            echo "<br><br><center><h3>لا توجد طلبات مرفوضة بعد</h3> </center>";

        } ?>
    <?php } ?>
<?php }else{
    echo "<br><br><center><h3> لم يتم إرسال طلبات صيانة بعد</h3> </center>";
} ?>











<?php
require('../php/footer.php');
?>