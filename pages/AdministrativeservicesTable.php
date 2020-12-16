<?php
require('../php/header.php');
require('../php/Administrativeservices.php');

?>
    <br><br><br>
    <center>
        <a href="Administrativeservices.php"> <input type="button" class="btn btn-primary"  value=" عرض طلبات الإسكان"></a>
        <a href="AdministrativeservicesTable.php"><input type="button" class="btn btn-primary" value="عرض لائحة الإسكان"></a>
    </center>

    <br><br><br>
    <center>
        <?php if(count($PeopleTable) > 0){ ?>
            <?php foreach ($PeopleTable as $p){ ?>
                <form action="AdministrativeservicesTable.php" method="post">
                    <table class="table" style="text-align: right;direction: rtl;width: auto">

                        <tbody>
                        <tr>
                            <th scope="row" >عرض لائحة الإسكان</th>
                            <td >
                                <?php echo "<center><a target='_blank' class='btn btn-dark' href='". $p['pdfurl'] ."'> عرض </a> </center>" ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">تعديل لائحة الإسكان</th>

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