<?php
require('../php/header.php');
require('../php/Administrativeservices.php');

?>

    <br><br><br>
    <center>
        <a href="AdministrativeservicesAcc.php"><input type="button" class="btn btn-primary" value="الإبلاغات"></a>
        <a href="AdministrativeServicesComplaints.php"><input type="button" class="btn btn-warning" value="الإقتراحات"></a>
        <a href="AdministrativeservicesTable.php"><input type="button" class="btn btn-dark" value="الجداول"></a>
        <a href="FacilityServicesServices.php"><input type="button" class="btn btn-danger" value="الخدمات"></a>

    </center>
    <br>
    <center>
        <h2>جدول تنظيف المباني</h2>
    </center>


    <br><br><br>
    <center>
        <?php if(count($PeopleTable) > 0){ ?>
            <?php foreach ($PeopleTable as $p){ ?>
                <form action="CleanBuildingsTable.php" method="post">
                    <table class="table" style="text-align: right;direction: rtl;width: auto">

                        <tbody>
                        <tr>
                            <th scope="row" >عرض جدول تنظيف المباني</th>
                            <td >
                                <?php echo "<center><a target='_blank' class='btn btn-dark' href='". $p['pdfurl'] ."'> عرض </a> </center>" ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">تعديل جدول تنظيف المباني</th>

                            <td>
                                <input type="text" value="<?php echo $p['pdfurl']?>" name="pdfurl">
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
        <?php } ?>
    </center>














<?php
require('../php/footer.php');
?>