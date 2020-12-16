<?php
require('../php/header.php');
require('../php/OneClinic.php');
?>
<link rel="stylesheet" href="../assets/css/OneClinic.css">
<?php if(@count($Clinicals) > 0){ ?>
<div class="Content">
    <form action="OneClinic.php?clinic_id=<?php echo $_GET['clinic_id'] ?>" method="post">

        <div class="card" style="border: 0px white solid">
            <img class="card-img-top" src="<?php echo $Clinicals['image'] ?>" alt="Card image cap" >
            <div class="card-body" >
                <h5 class="card-title"><?php echo " عيادة" ." ".$Clinicals['arabicName']   ?></h5>
                <p class="card-text"><?php echo $Clinicals['doctorDescription'] ?></p>
                <p class="card-text" ><?php echo" <h3 style='text-align: right'>مواعيد العمل</h3>" ?></p>
                <!-- from -->
                <div class="btn-group">
                    <div class="btn-group">
                        <select name="workTimeTo" id="" class="btn btn-primary" style="width: 100px">

                            <option  selected>الي </option>
                            <?php for($i=1;$i<25;$i++){ ?>
                                <option  value="<?php echo $i ?>"><?php echo intval($i) ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="btn-group">
                    <select name="workTimeFrom" id="" class="btn btn-primary" style="width: 100px">
                        <option  selected>من </option>
                        <?php for($i=1;$i<25;$i++){ ?>
                            <option  value="<?php echo $i ?>"><?php echo intval($i) ?></option>
                        <?php } ?>

                    </select>
                </div>

                <br>   <br>
                <p class="card-text" ><?php echo" من". $Clinicals['workTimeFrom'] ." الي ".$Clinicals['workTimeTo'] ?></p>

                <input type="hidden" value="<?php echo $Clinicals['doctorDescription'] ?>" name="doctorDescription">
                <input type="hidden" value="<?php echo $Clinicals['arabicName'] ?>" name="arabicName">
                <input type="hidden" value="<?php echo $Clinicals['doctorName'] ?>" name="doctorName">
                <input type="hidden" value="<?php echo $Clinicals['englishName'] ?>" name="englishName">
                <input type="hidden" value="<?php echo $Clinicals['image'] ?>" name="image">


                <input type="submit" value="تاكيد" class="btn btn-dark" name="changeTime">


            </div>
        </div>

    </form>


</div>
    <br><br>
    <hr>
    <center><h2>الحجوزات</h2></center>
    <hr>
    <div style="text-align: center;">
        <a href="OneClinic.php?clinic_id=<?php echo $_GET['clinic_id']?>"> <label class="btn btn-warning">حجوزات قيد الانتظار</label></a>
        <a href="OneClinicRef.php?clinic_id=<?php echo $_GET['clinic_id']?>"><label class="btn btn-danger" name="todaySer"> الحجوزات المرفوضة </label></a>
        <a href="OneClinicAcc.php?clinic_id=<?php echo $_GET['clinic_id']?>"><label class="btn btn-primary" name="todaySer"> الحجوزات المقبولة </label></a>

    </div>
<!-- Doctors -->
    <?php $counter=0; ?>
    <?php  if(@count($MaintainRequests) > 0){ ?>
        <?php foreach ($MaintainRequests as $m){ ?>
            <?php if( SelectWithThree('userRequestIds','clinicTimeRequest',$m['userId'],$m['clinicRequestId'])== 0 ){ ?>
                <div class="card" style="height: 400px;width: 400px;display: inline-block;margin-left: 10px;margin-top: 20px;text-align: center;padding-top: 20px;padding-bottom: 70px">
                    طلب كشف
                    <div class="card-body">
                        <form action="OneClinic.php?clinic_id=<?php echo $_GET['clinic_id'] ?>" method="post">
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
                                    <th scope="row">رقم الموعد</th>
                                    <td><?php echo $m['requestNumber']?></td>
                                </tr>
                                <tr>
                                    <th scope="row">رقم التواصل</th>
                                    <td><?php echo $m['phoneNumber']?></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: center">
                                        <input type="text" placeholder="ارسل سببك" required name="description">
                                    </td>
                                </tr>



                                </tbody>
                            </table>
                            <input type="hidden" name="uId" value="<?php echo $m['userId']?>">
                            <input type="hidden" name="requestId" value="<?php echo $m['clinicRequestId']?>">
                            <input type="hidden" name="time" value="<?php echo $m['time']?>">
                            <input type="hidden" name="requestNumber" value="<?php echo $m['requestNumber']?>">



                            <input type="submit" value="قبول" class="btn btn-primary" name="accept">
                            <input type="submit" value="رفض" class="btn btn-danger" name="refuse">
                        </form>
                    </div>
                </div>
                <?php $counter++ ; ?>
            <?php } ?>
        <?php } ?>
    <?php }else{
        echo "<br><br><center><h3> لم يتم إرسال مواعيد حجز  بعد</h3> </center>";
    } ?>
    <?php if($counter == 0){
        echo "<br><br><center><h3>لا توجد مواعيد حجز قيد الانتظار</h3> </center>";
        $counter=0;
    } } ?>



    <br><br><br>


    <?php
    require('../php/footer.php');
    ?>