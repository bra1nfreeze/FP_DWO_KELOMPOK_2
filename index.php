<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FP DWO - Laman Dashboard</title>
    <link rel="icon" href="img/logox.png">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles and charts for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-blue sidebar sidebar-blue accordion" id="accordionSidebar">

            <!-- Sidebar - ADW2022 -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-archive"></i>
                </div>
                <div class="sidebar-brand-text mx-3">FP ADW DWO</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Chart Menu
            </div>

            <!-- Item - Items -->
            <li class="nav-item">
                <a class="nav-link" href="customer.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Customer Chart</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="vendor.php">
                    <i class="fas fa-fw fa-store"></i>
                    <span>Vendor Chart</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="product.php">
                    <i class="fa fa-boxes"></i>
                    <span>Product Chart</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="sales.php">
                    <i class="fa fa-chart-line"></i>
                    <span>Sales Chart</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="shipment.php">
                    <i class="fas fa-ship"></i>
                    <span>Shipment Chart</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <div class="input-group" style="margin-left: 10px; color: #000000; font-weight: 500; font-size: 15pt">
                        Data Warehouse AdventureWorks2022
                    </div>
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-900">Summary</h1>

                    </div>

                    <!-- Content Row 1 Summary -->
                    <div class="row">

                        <!-- Total Income Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col auto">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Incomes</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                <?php
                                                $mysqli = mysqli_connect("localhost", "root", "", "deweo");
                                                $sql = "SELECT SUM(SubTotal) as total from sales_fact";
                                                $query = mysqli_query($mysqli, $sql);
                                                while ($row2 = mysqli_fetch_array($query)) {
                                                    echo "$" . number_format($row2['total']);
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Customers Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Customers</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                <?php
                                                $sql = "SELECT COUNT(CustomerID) as jumlah_cus from customer";
                                                $query = mysqli_query($mysqli, $sql);
                                                while ($row2 = mysqli_fetch_array($query)) {
                                                    echo number_format($row2['jumlah_cus'], 0, ".", ",");
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-users fa-2x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Employees Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Vendor</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                <?php
                                                $sql = "SELECT COUNT(VendorID) as jumlah_vendor from vendor";
                                                $query = mysqli_query($mysqli, $sql);
                                                while ($row2 = mysqli_fetch_array($query)) {
                                                    echo number_format($row2['jumlah_vendor'], 0, ".", ",");
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-store fa-2x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Products Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Products</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                <?php
                                                $sql = "SELECT COUNT(ProductID) as jumlah_produk from product";
                                                $query = mysqli_query($mysqli, $sql);
                                                while ($row2 = mysqli_fetch_array($query)) {
                                                    echo number_format($row2['jumlah_produk'], 0, ".", ",");
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-boxes fa-2x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Transactions Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Transactions</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                <?php
                                                $sql = "SELECT COUNT(CustomerID) as jumlah_transaksi from sales_fact";
                                                $query = mysqli_query($mysqli, $sql);
                                                while ($row2 = mysqli_fetch_array($query)) {
                                                    echo number_format($row2['jumlah_transaksi'], 0, ".", ",");
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-cash-register fa-2x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Shipments Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Shipments</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                <?php
                                                $sql = "SELECT COUNT(PurchaseOrderID) as jumlah_pengiriman from purchase_fact";
                                                $query = mysqli_query($mysqli, $sql);
                                                while ($row2 = mysqli_fetch_array($query)) {
                                                    echo number_format($row2['jumlah_pengiriman'], 0, ".", ",");
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-shipping-fast fa-2x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Content Row 2 OLAP -->

                    <!-- Collapsable Card -->
                    <div class="card shadow mb-4">

                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-dark">Mondrian OLAP</h6>
                        </a>

                        <!-- Card Content - Collapse -->
                        <div class="collapse" id="collapseCardExample">
                            <div class="card-body">
                                <iframe name="mondrian" src="http://localhost:8080/mondrian/testpage.jsp?query=adw1" style="height: 500px;; width:100%; border:none; align-content:center"> </iframe>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row"> -->
                    <!-- <iframe name="mondrian" src="http://localhost:8080/mondrian/index.html" style="height:300px; width:100%; border:none; align-content:center"> </iframe> -->
                    <!-- <iframe name="mondrian" src="http://localhost:8080/mondrian/testpage.jsp?query=dwoadw1" style="height:1000px; width:100%; border:none; align-content:center"> </iframe>
                    </div>         -->
                </div>
                <!-- End of Page Content -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; deweo 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Do you want to Leave this Site?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "LogOut" button below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-success" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>


</body>

</html>