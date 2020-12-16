<?php include('php/header.php'); ?>
<?php include('php/home.php'); ?>


<?php if(isset($_GET['id'])){ ?>
<div class="container-fluid" id="main">

    <div class="row row-offcanvas row-offcanvas-left">
        <!--/col-->

        <div class="col main pt-5 mt-3 ">

            <div class="row mb-3" style="text-align: right;direction: rtl">
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body bg-success" >
                            <div class="rotate">
                                <i class="fa fa-user fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">المستخدمين</h6>
                            <h1 class="display-4">134</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-danger h-100">
                        <div class="card-body bg-danger">
                            <div class="rotate">
                                <i class="fa fa-list fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">عدد الوحدات الطبية</h6>
                            <h1 class="display-4">87</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-info h-100">
                        <div class="card-body bg-info">
                            <div class="rotate">
                                <i class="fa fa-twitter fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">عدد الاطباء</h6>
                            <h1 class="display-4">125</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-warning h-100">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">اختبار</h6>
                            <h1 class="display-4">36</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->

            <hr>
            <hr>


<?php     $cities = SelectWithNode('cities'); ?>

            <form action="" style="text-align: center">

                <br><br>


                <a href="pages/clinicals.php" class="btn btn-primary " style="width: 18rem;height: 10rem;padding-top: 60px;margin-right: 20px;margin-bottom: 10px;font-size: 20px">
                    الوحدة الطبية
                </a>
                <a href="pages/maintenance.php" class="btn btn-primary " style="width: 18rem;height: 10rem;padding-top: 60px;margin-right: 20px;margin-bottom: 20px;font-size: 20px">
                    الصيانة
                </a>

                <a href="pages/FacilityServices.php" class="btn btn-primary " style="width: 18rem;height: 10rem;padding-top: 60px;margin-right: 20px;margin-bottom: 20px;font-size: 20px">
                    خدمات المرافق
                </a>
                <a href="pages/Administrativeservices.php" class="btn btn-primary " style="width: 18rem;height: 10rem;padding-top: 60px;margin-right: 20px;margin-bottom: 20px;font-size: 20px">
                    الخدمات الإدارية
                </a>
                <a href="#" class="btn btn-primary " style="width: 18rem;height: 10rem;padding-top: 60px;margin-right: 20px;margin-bottom: 20px;font-size: 20px">
                    جديدنا
                </a>
                <a href="#" class="btn btn-primary " style="width: 18rem;height: 10rem;padding-top: 60px;margin-right: 20px;margin-bottom: 20px;font-size: 20px">
                    الموظفين
                </a>
                <a href="pages/Population.php" class="btn btn-primary " style="width: 18rem;height: 10rem;padding-top: 60px;margin-right: 20px;margin-bottom: 20px;font-size: 20px">
                    السكان
                </a>
                <a href="pages/manage.php" class="btn btn-primary " style="width: 18rem;height: 10rem;padding-top: 60px;margin-right: 20px;margin-bottom: 20px;font-size: 20px">
                   ادارة
                </a>
                <a href="pages/reports.php" class="btn btn-primary " style="width: 18rem;height: 10rem;padding-top: 60px;margin-right: 20px;margin-bottom: 20px;font-size: 20px">
                    التقارير
                </a>
            </form>

            <hr>
            <!--  Advs Part -->
            <?php /* ?>

            <center><h4>جديدنا</h4></center>
            <hr>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="assets/imgs/x.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <hr>

            <!-- End Of Advs-->








            <hr>
            <!--Staff -->
            <div class="row placeholders mb-3">
                <div class="col-6 col-sm-3 placeholder text-center">
                    <img src="//placehold.it/200/dddddd/fff?text=1" class="mx-auto img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4>Responsive</h4>
                    <span class="text-muted">Device agnostic</span>
                </div>
                <div class="col-6 col-sm-3 placeholder text-center">
                    <img src="//placehold.it/200/e4e4e4/fff?text=2" class="mx-auto img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4>Frontend</h4>
                    <span class="text-muted">UI / UX oriented</span>
                </div>
                <div class="col-6 col-sm-3 placeholder text-center">
                    <img src="//placehold.it/200/d6d6d6/fff?text=3" class="mx-auto img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4>HTML5</h4>
                    <span class="text-muted">Standards-based</span>
                </div>
                <div class="col-6 col-sm-3 placeholder text-center">
                    <img src="//placehold.it/200/e0e0e0/fff?text=4" class="center-block img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4>Framework</h4>
                    <span class="text-muted">CSS and JavaScript</span>
                </div>
            </div>
            <!-- -->
             <hr>

            <?php */ ?>




            <!--/row-->



            <!--/card-columns-->




        </div>
        <!--/main col-->
    </div>

</div>
<!--/.container-->
<footer class="container-fluid">
    <p class="text-right small">©MohamedElredeny</p>
</footer>


<!-- Modal -->

<?php }else{
    header('location:index.php');
} ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>