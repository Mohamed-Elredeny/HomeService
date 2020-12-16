<?php
require('../php/header.php');
require('../php/Population.php');
?>

    <br>
    <center>
        <a href="NewPopulation.php"><input type="button" class="btn btn-danger" value="اضافة ساكن جديد " style="width: 200px"></a>
        <a href="Population.php"><input type="button" class="btn btn-primary" value=" عرض السكان " style="width: 200px"></a>

    </center>
    <br><br>
<table class="table table-sm" style="text-align: right;direction: rtl;">
    <tr >

        <th>
               <center>ابحث عن ساكن</center>
        </th>
        <th >
            <input type="text" class="btn btn-outline-primary" id="myInput" placeholder="بحث ">
        </th>





    </tr>

</table>
    <table class="table table-sm" style="text-align: right;direction: rtl" id="myTable">
        <thead>
        <tr>
            <th scope="col">الترتيب</th>
            <th scope="col">الاسم</th>
            <th scope="col">الرقم الوظيفي</th>
            <th scope="col">رقم الهاتف</th>
            <th scope="col">البريد اللإلكتروني</th>
            <th scope="col">كلمة المرور</th>
            <th scope="col"> رقم الوحدة</th>
            <th scope="col">صوره</th>
            <th>حذف</th>
            <th>تعديل</th>

        </tr>
        </thead>
        <tbody>

<?php $counter=1; ?>
        <?php foreach ($users as $u){ ?>
        <tr>

            <td ><?php echo  $counter?></td>
            <?php $counter++ ?>
            <td><?php echo  $u['name'] ?></td>
            <td><?php echo $u['jobNumber'] ?></td>
            <td><?php echo $u['phone'] ?></td>
            <td><?php echo $u['email'] ?></td>
            <td><?php echo $u['password'] ?></td>
            <td><?php echo $u['departmentNumber'] ?></td>
            <td><img src="<?php echo $u['image'] ?>" style="height: 100px;width: 100px;"></td>
            <td>
                <a href="editPopluation.php?DelId=<?php echo $u['userId'] ?>">
                     <input type="button" class="btn btn-danger" value="حذف">
                </a>
            </td>
            <td>
                <a href="editPopluation.php?CurentPopId=<?php echo $u['userId'] ?>">
                    <input type="button" class="btn btn-primary" value="تعديل">
                </a>
            </td>


        </tr>
    <?php } ?>
        </tbody>
    </table>


<?php
require ('../php/footer.php')
?>
<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
