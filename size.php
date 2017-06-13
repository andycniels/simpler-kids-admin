<?php
include 'header.php';
?>

            <!-- add size -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Tilføj en størrelse
                </div>
                <form class="form">
                    <div class="form-group">
                        <input type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-default">Tilføj</button>
                </form>
                <div class="card-footer small text-muted">
                    Simplar-Kids
                </div>
            </div>


<!-- Example Tables Card -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Rediger størrelse
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Størrelse</th>
                                    <th>Sorter efter</th>
                                    <th>Rediger</th>
                                    <th>Slet</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Størrelse</th>
                                    <th>Sorter efter</th>
                                    <th>Rediger</th>
                                    <th>Slet</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Newborn</td>
                                    <td>2</td>
                                    <td class="text-center"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                                    <td class="text-center"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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