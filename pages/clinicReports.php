<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap 4 Table-head with Dark Background</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        .bs-example{
            margin: 20px;
        }
    </style>
</head>
<body>
<?php echo
    "<br>
    <center>
          <h5>".
            " التقارير الخاصه بعيادة"." كذا "."التابعه لمدينة " ."موكا"
        ."</h5>
     </center>";
?>
<center>
    <input type="button" class="btn btn-dark" value="طباعة" onclick="window.print()">
</center>

<div class="bs-example">
    <div class="row">
        <table class="table col-12" >
            <thead class="thead-dark">
            <tr>
                <th colspan="4">
                    <center>
                        23.12.4
                    </center>
                </th>

            </tr>

            </thead>

        </table>
        <table class="table table-bordered col-6" >
            <thead class="thead-white">
            <tr>
                <th colspan="4">
                    <center>
                       الطلبات المرفوضة
                    </center>
                </th>
            <tr style="text-align: center">
                <th>سبب الرفض</th>
                <th>رقم الهاتف</th>
                <th>اسم المريض</th>
                <th>الموعد</th>
            </tr>


            </tr>

            </thead>

        </table>
        <table class="table table-bordered col-6" >
            <thead class="thead-white">
            <tr>
                <th colspan="4">
                    <center>
                      الطلبات المقبولة
                    </center>
                </th>
            <tr style="text-align: center">
                <th>سبب القبول</th>
                <th>رقم الهاتف</th>
                <th>اسم المريض</th>
                <th>الموعد</th>
            </tr>

            </tr>

            </thead>
            <tbody style="text-align: right">
            <tr>
                <td>1</td>
                <td>Clark</td>
                <td>Kent</td>
                <td>الموعد الاول</td>
            </tr>
            <tr>
                <td>2</td>
                <td>John</td>
                <td>Carter</td>
                <td>الموعد الثاني</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Peter</td>
                <td>Parker</td>
                <td>الموعد الثالث</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Peter</td>
                <td>Parker</td>
                <td>الموعد الرابع</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Peter</td>
                <td>Parker</td>
                <td>الموعد الخامس</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Peter</td>
                <td>Parker</td>
                <td>الموعد السادس</td>
            </tr>
            </tbody>

        </table>

    </div>
</div>
</body>
</html>