<?= $this->extend('dashboard/layout/template'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Visitor All User</h1>
    <!-- <a href="#" class="btn btn-danger btn-circle btn-lg" onclick="add_users()">
        <i class="fas fa-plus"></i>
    </a> -->
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Cari Total Data Per Hari</h6>
                </div>
                <div class="card-body">
                    <form action="" method="GET">
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" placeholder="Cari tanggal ...">
                        </div>
                        <!-- <div class="form-group">
                            <label for="bulan">Bulan</label>
                            <input type="month" name="bulan" class="form-control" placeholder="Cari Bulan ...">
                        </div> -->
                        <!-- <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="number" min="1900" max="2099" step="1" name="tahun" class="form-control" placeholder="Cari Tahun ...">
                        </div> -->
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Visitor All User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="table_id" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Parner</th>
                            <th>Position</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Waktu Login</th>
                            <th>Waktu Logout</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>ID Parner</th>
                            <th>Position</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Waktu Login</th>
                            <th>Waktu Logout</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($get_user_online as $Allusers) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $Allusers['user_parner']; ?></td>
                                <td><?= $Allusers['jabatan']; ?></td>
                                <td><?= $Allusers['full_name']; ?></td>
                                <td>
                                    <?php if ($Allusers['status'] == "online") { ?>
                                        <button type="button" class="btn btn-success btn-sm"><i class="fas fa-user"> Online</i></button>
                                    <?php } else { ?>
                                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-user"> Offline</i></button>
                                    <?php } ?>
                                </td>
                                <td><?= $Allusers['user_active']; ?></td>
                                <td><?= $Allusers['user_notactive']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tr>
                    </tbody>
                </table>
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
    });
</script>
<!-- /.container-fluid -->
<?= $this->endSection(''); ?>