<?php
include 'header.php';
?>
            <!-- Icon Cards -->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card card-inverse card-2 o-hidden h-100">
                        <div class="card-block">
                            <div class="card-block-icon">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                            <div class="mr-5">
                                Kunder
                            </div>
                        </div>
                        <a href="kunder.php" class="card-footer clearfix small z-1">
                            <span class="float-left">Se kunder</span>
                            <span class="float-right"><i class="fa fa-angle-right"></i></span>
                        </a>
                    </div>
                </div>
                
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card card-inverse card-1 o-hidden h-100">
                        <div class="card-block">
                            <div class="card-block-icon">
                                <i class="fa fa-fw fa-comments"></i>
                            </div>
                            <div class="mr-5">
                                26 New Messages!
                            </div>
                        </div>
                        <a href="#" class="card-footer clearfix small z-1">
                            <span class="float-left">View Details</span>
                            <span class="float-right"><i class="fa fa-angle-right"></i></span>
                        </a>
                    </div>
                </div>
                
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card card-inverse card-3 o-hidden h-100">
                        <div class="card-block">
                            <div class="card-block-icon">
                                <i class="fa fa-fw fa-shopping-cart"></i>
                            </div>
                            <div class="mr-5">
                                123 New Orders!
                            </div>
                        </div>
                        <a href="#" class="card-footer clearfix small z-1">
                            <span class="float-left">View Details</span>
                            <span class="float-right"><i class="fa fa-angle-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card card-inverse card-4 o-hidden h-100">
                        <div class="card-block">
                            <div class="card-block-icon">
                                <i class="fa fa-globe"></i>
                            </div>
                            <div class="mr-5">
                                13 New Tickets!
                            </div>
                        </div>
                        <a href="#" class="card-footer clearfix small z-1">
                            <span class="float-left">View Details</span>
                            <span class="float-right"><i class="fa fa-angle-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Example Bar Chart Card -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-bar-chart"></i> Oversigt over abonnementer:
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-8">
                                    <canvas id="myBarChart" width="100" height="50"></canvas>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <hr class="hidden-sm-up">
                                    <div class="h4 mb-0 text-1">DKK: 34,693</div>
                                    <div class="small text-muted">Det nye</div>
                                    <hr>
                                    <div class="h4 mb-0 text-2">DKK: 18,474</div>
                                    <div class="small text-muted">Det miljøvenlige</div>
                                    <hr>
                                    <div class="h4 mb-0 text-3">DKK: 18,474</div>
                                    <div class="small text-muted">I alt: </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">
                            Updated yesterday at 11:59 PM
                        </div>
                    </div>

            <!-- Area Chart Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-area-chart"></i> Area Chart Example
                </div>
                <div class="card-block">
                    <canvas id="myAreaChart" width="100%" height="30"></canvas>
                </div>
                <div class="card-footer small text-muted">
                    Updated yesterday at 11:59 PM
                </div>
            </div>
            
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/sb-admin.js"></script>

</body>

</html>
