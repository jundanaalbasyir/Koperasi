<?php
session_start();
if (isset($_SESSION['username']) && $_SESSION['role'] == '2') {

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <title>Document</title>

        <!-- Favicons -->
        <link href="../img/favicon.png" rel="icon">
        <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- jquery cdn -->
        <script src="../lib/jquery/jquery.min.js"></script>
        <script src="../lib/popper.min.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->

        <!-- sweet alert 1 -->
        <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
        <script src="../lib/sweetalert.min.js"></script>

        <!-- Bootstrap core CSS -->
        <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--external css-->
        <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/style-responsive.css" rel="stylesheet">

        <script type="text/javascript" src="../DataTables/media/js/jquery.js"></script>
        <script type="text/javascript" src="../DataTables/media/js/jquery.dataTables.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>

        <style type="text/css">
            .container {
                width: 99%;
                margin: 15px auto;
            }
        </style>

        <link rel="stylesheet" type="text/css" href="../DataTables/media/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="../DataTables/media/css/dataTables.bootstrap.css">

        <!-- =======================================================
                                        Template Name: Dashio
                                        Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
                                        Author: TemplateMag.com
                                        License: https://templatemag.com/license/
                                        ======================================================= -->
    </head>

    <body>
        <section id="container">
            <!-- **********************************************************************************************************************************************************
                                                            TOP BAR CONTENT & NOTIFICATIONS
                                                            *********************************************************************************************************************************************************** -->
            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <!--logo start-->
                <a href="admin-dashboard.php" class="logo"><b>K<span>OPERASI</span></b></a>
                <!--logo end-->
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="logout" href="../function/logout.php">Logout</a></li>
                    </ul>
                </div>
            </header>
            <!--header end-->
            <!-- **********************************************************************************************************************************************************
                                                            MAIN SIDEBAR MENU
                                                            *********************************************************************************************************************************************************** -->
            <!--sidebar start-->
            <aside>
                <div id="sidebar" class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">
                        <p class="centered"><a href="profile.html"><img src="../img/ui-sam.jpg" class="img-circle" width="80"></a></p>
                        <h5 class="centered"><?php echo ($_SESSION['username']) ?></h5>
                        <li class="mt">
                            <a href="admin-dashboard.php">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="admin-product.php">
                                <i class="fa fa-book"></i>
                                <span>Products</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="admin-transaction.php">
                                <i class="fa fa-tasks"></i>
                                <span>Transaction</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="admin-user.php">
                                <i class="fa fa-th"></i>
                                <span>Users</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a class="active" href="admin-rekap.php">
                                <i class="fa fa-th"></i>
                                <span>Recap</span>
                            </a>
                        </li>
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->
            <!-- **********************************************************************************************************************************************************
                                            MAIN CONTENT
                                            *********************************************************************************************************************************************************** -->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper mt">
                    <h3><i class="fa fa-angle-right"></i> Recap</h3>
                    <hr>
                    <div class="row">
                        <?php
                        if (isset($_SESSION['error'])) {
                            echo "
                            <div class='showback alert alert-danger alert-dismissable'>
                            <button class='close'>&times;</button>
                            " . $_SESSION['error'] . "
                            </div>
                            ";
                            unset($_SESSION['error']);
                        }
                        if (isset($_SESSION['success'])) {
                            echo "
                            <div class='col-lg-12 col-md-12 col-sm-12'>
                            <div class='showback alert alert-success alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            " . $_SESSION['success'] . "
                            </div>
                            </div>
                            ";
                            unset($_SESSION['success']);
                        } ?>
                    </div>

                    <div class="container">
                        <form action="admin-rekap-year.php">
                            Tahun
                            <select name="tahun">
                                <?php
                                require_once '../helper/config.php';
                                $query = "SELECT YEAR(time) AS year FROM transactions GROUP BY year ORDER BY year DESC";
                                $result = mysqli_query($conn, $query);
                                ?>
                                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <option value="<?php echo $row['year']; ?>"><?php echo $row['year']; ?></option>
                                <?php } ?>
                            </select>
                            <input type="submit" value="Pilih" />
                        </form>
                    </div>
                    <?php
                    include_once('../helper/config.php');
                    $tahun          = $_GET['tahun'];
                    $bulan          = mysqli_query($conn, "SELECT 
                    YEAR(time) AS year,
                    MONTH(time) AS month
                    FROM transactions 
                    WHERE YEAR(time) = $tahun AND status = '1' GROUP BY month ORDER BY month ASC");

                    $penghasilan    = mysqli_query($conn, "SELECT 
                    SUM(cost_total) AS cost_total, 
                    MONTH(time) AS month
                    FROM transactions 
                    WHERE YEAR(time) = $tahun AND status = '1' GROUP BY month ORDER BY month ASC");

                    $namaBulan = array(
                        "1" => "Januari",
                        "2" => "Februari",
                        "3" => "Maret",
                        "4" => "April",
                        "5" => "Mei",
                        "6" => "Juni",
                        "7" => "Juli",
                        "8" => "Agustus",
                        "9" => "September",
                        "10" => "Oktober",
                        "11" => "November",
                        "12" => "Desember"
                    );
                    ?>
                    </div>

                    <div class="container">
                        <canvas id="myChart" width="100" height="100"></canvas>
                    </div>
                    <script>
                        var ctx = document.getElementById("myChart");
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: [<?php while ($b = mysqli_fetch_array($bulan)) {
                                                echo '"' . $namaBulan[$b['month']] . '",';
                                            } ?>],
                                datasets: [{
                                    label: 'Pemasukan ',
                                    data: [<?php while ($p = mysqli_fetch_array($penghasilan)) {
                                                echo '"' . $p['cost_total'] . '",';
                                            } ?>],
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)',
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(255,99,132,1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)',
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });
                    </script>
                    </div>

                    <!-- NEW ICONS -->
                    <h4><i class="fa fa-angle-right"></i> List Recap / Month</h4>
                    <div class="container">
                        <table class="table table-striped table-bordered data">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Month</th>
                                    <th>Amount of purchase</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include_once('../helper/config.php');
                                $sql = "SELECT user_id, time, status, 
                                SUM(quantity) AS quantity, 
                                MONTH(time) AS month,
                                YEAR(time) AS year
                                FROM transactions
                                WHERE status='1'
                                GROUP BY month, year
                                ORDER BY year, month ASC";
                                $namaBulan = array(
                                    "1" => "Januari",
                                    "2" => "Februari",
                                    "3" => "Maret",
                                    "4" => "April",
                                    "5" => "Mei",
                                    "6" => "Juni",
                                    "7" => "Juli",
                                    "8" => "Agustus",
                                    "9" => "September",
                                    "10" => "Oktober",
                                    "11" => "November",
                                    "12" => "Desember"
                                );
                                $query = $conn->query($sql);
                                $id = 1;
                                while ($row = $query->fetch_assoc()) {
                                    echo
                                        "<tr>
                                    <td>" . $id++ . "</td>
                                    <td>" . $namaBulan[$row['month']] . " " . $row['year'] . "</td>
                                    <td>" . $row['quantity'] . "</td>
                                    <td>
                                    <a href='admin-rekap-detail-month.php?page=detail&month=$row[month]&year=$row[year]' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-edit'></span> Detail</a>
                                    </td>
                                    </tr>";
                                    include('admin-transaction-modal.php');
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <h4><i class="fa fa-angle-right"></i> List Recap / User</h4>
                    <div class="container">
                        <table class="table table-striped table-bordered data">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>User</th>
                                    <th>Amount of purchase</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include_once('../helper/config.php');
                                $sql =
                                    "SELECT user_id, status, 
                                SUM(quantity) AS quantity,
                                MONTH(time) AS month  
                                FROM transactions
                                WHERE status='1'
                                GROUP BY user_id";
                                $query = $conn->query($sql);
                                // " . $row['user_id'] . "
                                $id = 1;
                                while ($row = $query->fetch_assoc()) {
                                    echo
                                        "<tr>
                                    <td>" . $id++ . "</td>
                                    <td>" . $row['user_id'] . "</td>
                                    <td>" . $row['quantity'] . "</td>
                                    <td>
                                    <a href='admin-rekap-detail-user.php?page=detail&id=$row[user_id]' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-edit'></span> Detail</a>
                                    </td>
                                    </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                </section>
                <!-- /wrapper -->
            </section>
            <!-- /MAIN CONTENT -->
            <!--main content end-->
            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                    <p>
                        &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
                    </p>
                    <div class="credits">
                        <!--
                                                            You are NOT allowed to delete the credit link to TemplateMag with free version.
                                                            You can delete the credit link only if you bought the pro version.
                                                            Buy the pro version with working PHP/AJAX contact 
                                                            form: https://templatemag.com/dashio-bootstrap-admin-template/Licensing information: https://templatemag.com/license/
                                                            -->
                        Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
                    </div>
                    <a href="font_awesome.html#" class="go-top">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </div>
            </footer>
            <!--footer end-->
        </section>
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="../lib/jquery.dcjqaccordion.2.7.js" class="include" type="text/javascript"></script>
        <script src="../lib/jquery.scrollTo.min.js"></script>
        <script src="../lib/jquery.nicescroll.js" type="text/javascript"></script>
        <!--common script for all pages-->
        <script src="../lib/common-scripts.js"></script>
        <!--script for this page-->

    </body>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.data').DataTable();
        });
    </script>

    </html>

<?php
} else {
    header("location:../admin-dashboard.php");
}
?>