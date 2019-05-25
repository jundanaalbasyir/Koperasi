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
        <link rel="stylesheet" type="text/css" href="../DataTables/media/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="../DataTables/media/css/dataTables.bootstrap.css">

        <style type="text/css">
            .container {
                width: 99%;
                margin: 15px auto;
            }
        </style>

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
                            <a class="active" href="admin-transaction.php">
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
                            <a href="admin-rekap.php">
                                <i class="fa fa-th"></i>
                                <span>Recap</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="admin-savings.php">
                                <i class="fa fa-th"></i>
                                <span>Savings</span>
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
                    <h3><i class="fa fa-angle-right"></i> Transaction</h3>
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
                    <!-- NEW ICONS -->
                    <h4><i class="fa fa-angle-right"></i> List Transactions</h4>
                    <div class="container">
                        <table class="table table-striped table-bordered data">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Code Transaction</th>
                                    <th>User ID</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Cost Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once '../helper/config.php';
                                $sql = "SELECT 
                                a.id, a.code_transaction, a.user_id, a.product_id, a.quantity, a.cost_total, a.status,
                                b.product_name, b.product_quantity,
                                c.user_id, c.poin
                                FROM transactions AS a INNER JOIN products AS b ON a.product_id = b.id INNER JOIN savings AS c ON a.user_id = c.user_id ORDER BY id DESC";
                                $query = $conn->query($sql);
                                $id = 1;
                                $status = array(
                                    "0" => "Pending",
                                    "1" => "Paid",
                                    "2" => "Canceled"
                                );
                                ?>
                                <?php while ($row = $query->fetch_assoc()) { ?>
                                    <tr>
                                        <td><?php echo $id++; ?></td>
                                        <td><?php echo $row['code_transaction']; ?></td>
                                        <td><?php echo $row['user_id']; ?></td>
                                        <td><?php echo $row['product_name']; ?></td>
                                        <td><?php echo $row['quantity']; ?></td>
                                        <td><?php echo $row['cost_total']; ?></td>
                                        <td>
                                            <?php
                                            if ($row['status'] == 0) {
                                                echo "<a href='#edit_" . $row['id'] . "' class='btn btn-warning btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> " . $status[$row['status']] . "</a>";
                                            } else if ($row['status'] == 1) {
                                                echo "<a href='#' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> " . $status[$row['status']] . "</a>";
                                            } else {
                                                echo "<a href='#' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> " . $status[$row['status']] . "</a>";
                                            };
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                    include('admin-transaction-modal.php');
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