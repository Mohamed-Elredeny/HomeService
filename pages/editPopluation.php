<?php
require('../php/header.php');
require('../php/Population.php');
if(isset($_GET['CurentPopId'])){
    $oneUserDet =  SelectWithTwoNodes('Users',$_GET['CurentPopId']);
?>

<br>
<center>
    <a href="NewPopulation.php"><input type="button" class="btn btn-danger" value="اضافة ساكن جديد " style="width: 200px"></a>
    <a href="Population.php"><input type="button" class="btn btn-primary" value=" عرض السكان " style="width: 200px"></a>

</center>
<center>
    <form action="editPopluation.php?CurentPopId=<?php echo $_GET['CurentPopId'] ?>" method="post">
        <div class="card" style="height: 600px;width: 500px;display: inline-block;margin-top: 20px;text-align: center;padding-top: 20px;padding-bottom: 70px">
            تعديل بيانات ساكن
            <div class="card-body">
                    <table class="table" style="text-align: center;direction: rtl">

                        <tbody>
                        <tr>
                            <th scope="row">الاسم</th>
                            <td>
                                <input class="btn btn-outline-primary" type="text" name="name" required style="text-align: right" value="<?php echo $oneUserDet['name'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">رقم الهاتف</th>
                            <td>
                                <input type="text" name="phone" class="btn btn-outline-primary" required style="text-align: right"  value="<?php echo $oneUserDet['phone'] ?>" >
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">البريد الإلكتروني</th>
                            <td>
                                <input type="text" name="email" class="btn btn-outline-primary" required style="text-align: right"  value="<?php echo $oneUserDet['email'] ?>" >
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">  كلمة المرور</th>
                            <td>
                                <input type="text" name="password" class="btn btn-outline-primary" required style="text-align: right"  value="<?php echo $oneUserDet['password'] ?>" >

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">الرقم الوظيفي</th>
                            <td>
                                <input type="text" name="jobNumber" class="btn btn-outline-primary" required style="text-align: right"  value="<?php echo $oneUserDet['jobNumber'] ?>" >
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">رقم الوحدة</th>
                            <td>
                                <input type="text" name="departmentNumber" class="btn btn-outline-primary" required style="text-align: right"  value="<?php echo $oneUserDet['departmentNumber'] ?>" >
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">صورة</th>
                            <td>
                                <input type="file" class="form-control-file" id="photo1" onchange="uploadImage()"  class="btn btn-outline-primary">
                                <input type="hidden" name="img1" id="img1"  value="<?php echo $oneUserDet['image'] ?>" >
                                <input type="hidden" name="img2" id="img2"  value="<?php echo $oneUserDet['image'] ?>" >

                                <meter class="disk_d"  id="disk_d1"></meter>


                            </td>
                        </tr>




                        </tbody>
                    </table>

                    <input type="submit" value="اضافة" class="btn btn-primary" name="EditNewCus">

            </div>
        </div>

    </form>

</center>








<?php

require ('../php/footer.php');
}else{
    header('location:Population.php');
}
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

        const ref = firebase.storage().ref();
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


   //  var y= document.getElementById("img2").value;
/*

    */
 */

    var storage = firebase.storage();
    var storageRef = storage.ref();
    var desertRef = storageRef('https://firebasestorage.googleapis.com/v0/b/swcc-housing.appspot.com/o/1587980845285-72682801_109045173848330_6121582849372979200_o.jpg?alt=media&token=0d6ed6a4-4084-4803-8fc6-15f77368dccb');

    desertRef.delete().then(function() {
        // File deleted successfully
    }).catch(function(error) {
        // Uh-oh, an error occurred!
    });
</script>
