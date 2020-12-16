<?php
    session_start();
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<nav class="navbar navbar-expand-md navbar-fixed-top navbar-dark bg-primary main-nav">
    <div class="container">
        <?php if (strpos($_SERVER['REQUEST_URI'], "pages") == true){ ?>
            <a class="navbar-brand" href="#">
                <img src="../assets/imgs/x.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
            </a>
        <?php }else{ ?>
            <img src="assets/imgs/x.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">

        <?php } ?>
        <ul class="nav navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">SWCC Housing</a></li>
        </ul>
        <ul class="nav navbar-nav mx-auto">


        </ul>
        <?php if (strpos($_SERVER['REQUEST_URI'], "pages") == true){ ?>


        <ul class="nav navbar-nav mx-auto">

            <li class="nav-item">
                <a class=" btn btn-primary" href="../pages/clinicals.php">الوحدة الطبية</a>
            </li>
            <li class="nav-item">
                <a class=" btn btn-primary" href="../pages/FacilityServices.php">خدمات المرافق</a>
            </li>
            <li class="nav-item">
                <a class=" btn btn-primary" href="../pages/maintenance.php">الصيانة</a>
            </li>
            <li class="nav-item">
                <a class=" btn btn-primary" href="../pages/Administrativeservices.php"> الخدمات الإدارية</a>
            </li>
            <li class="nav-item">
                <a class=" btn btn-primary" href="">جديدنا </a>
            </li>
            <li class="nav-item">
                <a class=" btn btn-primary" href="#"> الموظفين</a>
            </li>
            <li class="nav-item">
                <a class=" btn btn-primary" href="../pages/manage.php">إدارة </a>

            </li>
            <li class="nav-item">
                <a class=" btn btn-primary" href="../homepage.php?id=<?php echo $_SESSION['id'] ?>" >الرئيسية </a>
            </li>
        </ul>
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>

        </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">

                    <a class="btn btn-primary" href="../php/logout.php" data-target="#myModal" data-toggle="modal" name="logout">تسجيل خروج</a>
                </li>
            </ul>
        <?php } ?>
        <?php if (strpos($_SERVER['REQUEST_URI'], "homepage") == true){ ?>


            <ul class="nav navbar-nav mx-auto">

                <li class="nav-item">
                    <a class=" btn btn-primary" href="pages/clinicals.php">الوحدة الطبية</a>
                </li>
                <li class="nav-item">
                    <a class=" btn btn-primary" href="pages/FacilityServices.php">خدمات المرافق</a>
                </li>
                <li class="nav-item">
                    <a class=" btn btn-primary" href="pages/maintenance.php">الصيانة</a>
                </li>
                <li class="nav-item">
                    <a class=" btn btn-primary" href="pages/Administrativeservices.php"> الخدمات الإدارية</a>
                </li>
                <li class="nav-item">
                    <a class=" btn btn-primary" href="">جديدنا </a>
                </li>
                <li class="nav-item">
                    <a class=" btn btn-primary" href="#"> الموظفين</a>
                </li>
                <li class="nav-item">
                    <a class=" btn btn-primary" href="pages/manage.php">إدارة </a>

                </li>
                <li class="nav-item">
                    <a class=" btn btn-primary" href="../homepage.php?id=<?php echo $_SESSION['id'] ?>" >الرئيسية </a>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>

            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="btn btn-primary" href="php/logout.php">تسجيل خروج</a>
                </li>
            </ul>
        <?php } ?>

    </div>
</nav>
<!--
<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary mb-3">

    <div class="flex-row d-flex">
    <nav class="navbar">
        <a class="navbar-brand" href="#">
            <img src="../assets/imgs/x.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
        </a>
    </nav>

        <button type="button" class="navbar-toggler mr-2 " data-toggle="offcanvas" title="Toggle responsive left sidebar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#" title="Free Bootstrap 4 Admin Template" style="display: block">SWCC Housing</a>



    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="collapsingNavbar">

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="btn btn-primary" href="" data-target="#myModal" data-toggle="modal">تسجيل خروج</a>
            </li>
        </ul>
    </div>
</nav>

-->