<?php
require('../php/header.php');
require('../php/OneClinic.php');
?>

    <link rel="stylesheet" href="../assets/css/OneClinic.css">

    <br><br>
    <hr>
    <center id="7gz"><h2>الحجوزات</h2></center>
    <hr>
    <div style="text-align: center;">
        <a href="OneClinic.php?clinic_id=<?php echo $_GET['clinic_id']?>"> <label class="btn btn-danger"> قيد الانتظار</label></a>
        <a href="TodayOrders.php?clinic_id=<?php echo $_GET['clinic_id']?>"><label class="btn btn-danger" name="todaySer"> حجوزات اليوم</label></a>
    </div>
    <!-- Doctors -->
    <br><br>
    <table class="table table-hover" style="text-align: right;direction: rtl">
        <thead>
        <tr>
            <th scope="col">رقم الحجز</th>
            <th scope="col">الموعد</th>
            <th scope="col">اسم الطبيب</th>
            <th scope="col">اسم المريض</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>



        <tr>
            <th scope="row">8</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>

        </tbody>
    </table>


    <br><br><br>
    <br><br><br> <br><br><br>
<?php
require('../php/footer.php');
?>