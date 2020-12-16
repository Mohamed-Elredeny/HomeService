<?php
require ('php/login.php');
if(isset($_POST['login'])){
    login('email','password','login');
}
?>
<link rel="stylesheet" href="assets/css/all.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/login.css">
<body>
<div class="container">

    <br><br>
    <div class="row" style="text-align: right;direction: rtl">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <br><br>
                <div class="card-body">
                    <h3 class="card-title text-center h-100" >اهلا بكم في خدماتي </h3>
                    <img src="assets/imgs/x.jpeg" alt="" class="imgs">
                    <br><br>

                    <form class="form-signin" action="index.php" method="post">
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" class="form-control" placeholder="البريد الإلكتروني" required autofocus name="email">
                            <label for="inputEmail">البريد الإلكتروني</label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" placeholder="كلمة المرور" required name="password">
                            <label for="inputPassword">كلمة المرور</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="login">تسجيل دخول</button>
                        <hr class="my-4">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<script src="assets/js/jquery.slim.min.js" type="text/javascript">
</script>
<script src="assets/js/jquery.slim.min.js" type="text/javascript">
</script>