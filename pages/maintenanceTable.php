<?php
require('../php/header.php');
require('../php/mainteance.php');

?>
    <br>
    <center><h2> <?php echo  "وحدة الصيانة التابعه لمدينة " .GetCityArabicName('cities',$_SESSION['city'])  ?></h2></center>
    <br>
    <center>
        <!-- Change City -->
        <form action="maintenanceTable.php" method="post">
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
        <a href="maintenanceTable.php"> <input type="button" class="btn btn-primary"  value=" عرض جدول الصيانة الدورية "></a>
        <a href="maintenance.php"><input type="button" class="btn btn-primary" value="عرض طلبات الصيانة "></a>
    </center>

    <br><br><br>
    <center>
        <?php if(@count($PeopleTable) > 0){ ?>
                <form action="maintenanceTable.php" method="post">
                    <table class="table" style="text-align: right;direction: rtl;width: auto">

                        <tbody>
                        <tr>
                            <th scope="row" >عرض جدول الصيانة</th>
                            <td >
                                <?php echo "<center><a target='_blank' class='btn btn-dark' href='". $PeopleTable ."'> عرض </a> </center>" ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">تعديل جدول الصيانة</th>

                            <td>
                                <input type="text" value="<?php echo $PeopleTable ?>" name="pdfurl">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <center>
                                    <input type="submit" value="تعديل" class="btn btn-danger" name="edit-pdf">

                                </center>
                            </td>
                        </tr>



                        </tbody>
                    </table>
                </form>
        <?php } ?>
    </center>














<?php
require('../php/footer.php');
?>