<?= $this->extend('dashboard/layout/template'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Users Online</h1>
    <!-- <a href="#" class="btn btn-danger btn-circle btn-lg" onclick="add_users()">
        <i class="fas fa-plus"></i>
    </a> -->

    <br>
    <br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Users Online</h6>
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
                                    <?php } ?>
                                </td>
                                <td><?= $Allusers['user_active']; ?></td>
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