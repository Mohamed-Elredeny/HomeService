<?php
require('../php/header.php');
require('../php/AdministrativeServicesComplaints.php');

?>
    <br>
    <center><h4>لائحة الإسكان</h4></center>
    <br>
    <center>
        <a href="AdministrativeServicesComplaints.php"><input type="button" class="btn btn-info" value="عرض الشكاوي"></a>
        <a href="AdministrativeservicesTable.php"><input type="button" class="btn btn-dark" value="لائحة الإسكان"></a>
        <a href="AdministrativeservicesAcc.php"><input type="button" class="btn btn-primary" value=" الطلبات المقبولة "></a>
        <a href="AdministrativeservicesRef.php"><input type="button" class="btn btn-danger" value="الطلبات المرفوضة "></a>
        <a href="Administrativeservices.php"><input type="button" class="btn btn-warning" value="الطلبات قيد الانتظار"></a>
    </center>


<?php  if(@count(@$MaintainRequests) > 0){ ?>
    <?php foreach ($MaintainRequests as $m){ ?>
        <?php if( SelectWithThree('uploadComplainRequest','usersComplainIds',$m['userId'],$m['complainId']) == '0' ){ ?>
            <div class="card" style="height: 300px   ;width: auto;display: inline-block;margin-left: 10px;margin-top: 20px;text-align: center;padding-top: 20px;padding-bottom: 70px">
                <h4> طلب الشكوي</h4>
                <div class="card-body">
                    <form action="AdministrativeServicesComplaints.php" method="post">
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
                                <th scope="row">الشكوي</th>
                                <td><?php echo $m['descriptionComplain']?></td>
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
            echo "<br><br><center><h3>لا توجد طلبات قيد الإنتظار</h3> </center>";

        } ?>
    <?php } ?>
<?php }else{
    echo "<br><br><center><h3> لم يتم إرسال طلبات صيانة بعد</h3> </center>";
} ?>











<?php
require('../php/footer.php');
?>