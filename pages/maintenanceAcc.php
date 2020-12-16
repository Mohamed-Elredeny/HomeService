<?php
require('../php/header.php');
require('../php/mainteance.php');

?>
    <br>
    <center><h2> <?php echo  "وحدة الصيانة التابعه لمدينة " .GetCityArabicName('cities',$_SESSION['city'])  ?></h2></center>
    <br>
    <center>
    <!-- Change City -->
    <form action="maintenanceAcc.php" method="post">
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
    <center>
        <a href="maintenanceTable.php"><input type="button" class="btn btn-dark" value="جدول الصيانة الدورية"></a>
        <a href="maintenanceAcc.php"><input type="button" class="btn btn-primary" value=" الطلبات المقبولة "></a>
        <a href="maintenanceRef.php"><input type="button" class="btn btn-danger" value="الطلبات المرفوضة "></a>
        <a href="maintenance.php"><input type="button" class="btn btn-warning" value="الطلبات قيد الانتظار"></a>


    </center>
    <br>
    <center><h4> <?php echo  "الطلبات المقبولة "  ?></h4></center>
<?php $counter=0; ?>
<?php  if(@count(@$MaintainRequests) > 0){ ?>
    <?php foreach ($MaintainRequests as $m){ ?>
        <?php if( SelectWithThree('userRequestIds','requestMaintainDepartment',$m['userId'],$m['requestId']) == 1 ){ ?>
            <div class="card" style="height: 470px;width: 400px;display: inline-block;margin-left: 10px;margin-top: 20px;text-align: center;padding-top: 20px;padding-bottom: 70px">
                طلب صيانة
                <div class="card-body">
                    <form action="maintenanceAcc.php" method="post">
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
                                <th scope="row">رقم الوحدة</th>
                                <td><?php echo $m['departmentNumber']?></td>
                            </tr>
                            <tr>
                                <th scope="row"> نوع الوحدة</th>
                                <td><?php echo $m['departmentType']?></td>
                            </tr>
                            <tr>
                                <th scope="row">نوع الصيانة</th>
                                <td><?php echo $m['maintainType']?></td>
                            </tr>
                            <tr>
                                <th scope="row">رقم التواصل</th>
                                <td><?php echo $m['phone']?></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center">
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
            <?php $counter++ ; ?>
        <?php } ?>
    <?php } ?>
<?php }else{
    echo "<br><br><center><h3> لم يتم إرسال طلبات صيانة بعد</h3> </center>";
} ?>
<?php if($counter == 0){
    echo "<br><br><center><h3>لا توجد طلبات مقبولة بعد </h3> </center>";
    $counter=0;
} ?>











<?php
require('../php/footer.php');
?>