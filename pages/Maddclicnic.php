<?php
require('../php/header.php');
require('../php/Maddclinic.php');
?>
<!--
<br>

<center>
    <a href="NewPopulation.php"><input type="button" class="btn btn-danger" value="اضافة ساكن جديد " style="width: 200px"></a>
    <a href="Population.php"><input type="button" class="btn btn-primary" value=" عرض السكان " style="width: 200px"></a>

</center>
-->
<center>
    <form action="Maddclicnic.php" method="post">
        <div class="card" style="height: 650px;width: 500px;display: inline-block;margin-top: 20px;text-align: center;padding-top: 20px;padding-bottom: 70px">
            اضافة عيادة جديد
            <div class="card-body">
                <form action="maintenance.php" method="post">
                    <table class="table" style="text-align: right;direction: rtl">

                        <tbody>
                        <tr>
                            <td> المدينة</td>
                            <td>
                                <div class="btn-group">
                                    <div class="btn-group">
                                        <select name="city" id="" class="btn btn-primary" style="width: 200px">

                                            <option  selected>اختر المدينة </option>
                                            <?php
                                                if(@count($cities) > 0){
                                                    foreach ($cities as $c){
                                            ?>
                                                <option  value="<?php echo $c['name'] ?>"><?php echo $c['arabic_name'] ?></option>
                                            <?php }
                                                }?>
                                        </select>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">الاسم  بالعربية</th>
                            <td>
                                <input class="btn btn-outline-primary" type="text" name="arabicName" required style="text-align: right">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">الاسم  بالانجليزية</th>
                            <td>
                                <input class="btn btn-outline-primary" type="text" name="englishName" required style="text-align: right">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">اسم  الطبيب</th>
                            <td>
                                <input class="btn btn-outline-primary" type="text" name="doctorName" required style="text-align: right">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">نبذة عن الطبيب</th>
                            <td>
                                <input class="btn btn-outline-primary" type="text" name="doctorDescription" required style="text-align: right">
                            </td>
                        </tr>


                        <tr>
                            <td> من</td>
                            <td>
                                <div class="btn-group">
                                    <div class="btn-group">
                                        <select name="workTimeTo" id="" class="btn btn-primary" style="width: 100px">

                                            <option  selected>من </option>
                                            <?php for($i=1;$i<25;$i++){ ?>
                                                <option  value="<?php echo $i ?>"><?php echo intval($i) ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> الي</td>
                            <td>
                                <div class="btn-group">
                                    <div class="btn-group">
                                        <select name="workTimeFrom" id="" class="btn btn-primary" style="width: 100px">

                                            <option  selected>الي </option>
                                            <?php for($i=1;$i<25;$i++){ ?>
                                                <option  value="<?php echo $i ?>"><?php echo intval($i) ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">صورة العيادة</th>
                            <td>
                                <input type="file" class="form-control-file" id="photo1" onchange="uploadImage()" required class="btn btn-outline-primary">
                                <input type="hidden" value="" name="img1" id="img1">
                                <meter class="disk_d"  id="disk_d1"></meter>


                            </td>
                        </tr>








                        </tbody>
                    </table>

                    <input type="submit" value="اضافة" class="btn btn-primary" name="AddNewClinic">

                </form>
            </div>
        </div>

    </form>

</center>








<?php

require ('../php/footer.php');
?>

<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-storage.js"></script>

<script>

    var firebaseConfig = {
        apiKey: "AIzaSyD5NTDeo_mn2vb2ATXumjaVmxqr47PJ2Wo",
        authDomain: "188937858497-mnlq5tad5ld4ci61pbsup6j6ar9g3bjl.apps.googleusercontent.com",
        databaseURL: "https://swcc-housing.firebaseio.com",
        projectId: "swcc-housing",
        storageBucket: "swcc-housing.appspot.com",
        appId: "1:188937858497:android:36e99361d21433aa175340\n"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);


    function uploadImage() {
        const ref = firebase.storage().ref('/Clinics');
        const file = document.querySelector("#photo1").files[0];
        const name = +new Date() + "-" + file.name;
        const metadata = {
            contentType: file.type
        };
        const task = ref.child(name).put(file, metadata);
        task
            .then(snapshot => snapshot.ref.getDownloadURL())
            .then(url => {
                console.log(url);
                document.querySelector("#img1").value = url;
                document.querySelector("#disk_d1").value = 1;
            })
            .catch(console.error);
    }

</script>
