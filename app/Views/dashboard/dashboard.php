<?= $this->extend('dashboard/layout/template'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <a href="/dashboard/user-online" style="text-decoration: none;">
            <button class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Users Data Online
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800" id="get_user_online">

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
        </a>
        </button>


        <a href="/dashboard/visitor-user" style="text-decoration: none;">
            <button class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Visitor All User
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800" id="get_user_visitoy">
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
        </a>
        </button>

        <a href="#" style="text-decoration: none;">
            <button class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Total Login User For Today
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800" id="get_total_for_day">
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
        </a>
        </button>

        <a href="#" style="text-decoration: none;">
            <button class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-dark shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                    Total Login User For Monthly
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800" id="get_total_for_month">
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
        </a>
        </button>
    </div>
    <div class="row">
        <div class="col-sm-5 col-md-6">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Total Login User For Day </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table_id" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Date</th>
                                    <th>Tahun</th>
                                    <th>Bulan</th>
                                    <th>Hari</th>
                                    <th>Total User Login</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Date</th>
                                    <th>Tahun</th>
                                    <th>Bulan</th>
                                    <th>Hari</th>
                                    <th>Total User Login</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($get_user_forday as $Alltotalforday) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $Alltotalforday['user_active']; ?></td>
                                        <td><?= $Alltotalforday['tahun']; ?></td>
                                        <td><?= $Alltotalforday['bulan']; ?></td>
                                        <?php
                                        $day = date('D', strtotime($Alltotalforday['user_active']));
                                        $dayList = array(
                                            'Sun' => 'Minggu',
                                            'Mon' => 'Senin',
                                            'Tue' => 'Selasa',
                                            'Wed' => 'Rabu',
                                            'Thu' => 'Kamis',
                                            'Fri' => 'Jumat',
                                            'Sat' => 'Sabtu'
                                        );
                                        ?>
                                        <td><?= $dayList[$day]; ?></td>
                                        <td><span class="badge badge-pill badge-dark"><?= $Alltotalforday['total_login']; ?></span></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Total Login User For Month</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table_id" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tahun</th>
                                    <th>Bulan</th>
                                    <th>Total User Login</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Tahun</th>
                                    <th>Bulan</th>
                                    <th>Total User Login</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($get_user_formonth as $Alltotalformonth) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $Alltotalformonth['tahun']; ?></td>
                                        <td><?= $Alltotalformonth['bulan']; ?></td>
                                        <td> <span class="badge badge-pill badge-dark"><?= $Alltotalformonth['total_login_month']; ?></span></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bootstrap modal -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- <script src="<?= base_url('back_end/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script> -->

<script type="text/javascript">
    $(document).ready(function() {
        $('#table_id').DataTable();

        // CALL FUNCTION SHOW PRODUCT
        selesai();

        function selesai() {
            setTimeout(function() {
                show_user_online();
                show_user_visitor();
                show_total_forday();
                show_total_formonth();
                selesai();
            }, 200);
        }
        // FUNCTION SHOW PRODUCT
        function show_user_online() {
            $.ajax({
                url: '<?php echo site_url("Dashboard/Dashboard/get_users_online"); ?>',
                type: 'GET',
                async: true,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var count = 1;
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += data[i].total;
                    }
                    $('#get_user_online').html(html);
                    console.log('data :' + data);
                }

            });
        }

        function show_user_visitor() {
            $.ajax({
                url: '<?php echo site_url("Dashboard/Dashboard/get_users_visitor"); ?>',
                type: 'GET',
                async: true,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var count = 1;
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += data[i].total;
                    }
                    $('#get_user_visitoy').html(html);
                    console.log('data :' + data);
                }

            });
        }

        function show_total_forday() {
            $.ajax({
                url: '<?php echo site_url("Dashboard/Dashboard/get_total_forday"); ?>',
                type: 'GET',
                async: true,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var count = 1;
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += data[i].total_login;
                    }
                    $('#get_total_for_day').html(html);
                    console.log('data :' + data);
                }

            });
        }

        function show_total_formonth() {
            $.ajax({
                url: '<?php echo site_url("Dashboard/Dashboard/get_total_formonth"); ?>',
                type: 'GET',
                async: true,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var count = 1;
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += data[i].total_login_month;
                    }
                    $('#get_total_for_month').html(html);
                    console.log('data :' + data);
                }

            });
        }
    });
</script>
<!-- /.container-fluid -->
<?= $this->endSection(''); ?>