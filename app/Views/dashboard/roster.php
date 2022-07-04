<?= $this->extend('dashboard/layout/template'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Roster</h1>
    <a href="#" class="btn btn-danger btn-circle btn-lg" onclick="add_roster()">
        <i class="fas fa-plus"></i>
    </a>

    <br>
    <br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Roster</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama File</th>
                            <th>File Document</th>
                            <th>File Drive</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama File</th>
                            <th>File Document</th>
                            <th>File Drive</th>
                            <th>Opsi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($roster as $Allroster) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $Allroster->name_file; ?></td>
                                <td><a href="<?= base_url('uploads/file/excel') . '/' .  $Allroster->file_document; ?>" target="_blank" alt="File Document"><?= $Allroster->file_document; ?></a></td>
                                <td><?= $Allroster->file_drive; ?></td>
                                <td><a href="#" class="btn btn-warning btn-circle btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-primary btn-circle btn-sm" onclick="edit_roster(<?php echo $Allroster->id_roster; ?>)">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-circle btn-sm" onclick="delete_roster(<?php echo $Allroster->id_roster; ?>)">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Form Roster</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" value="" name="id_roster" />
                    <div id="namaExelLama">

                    </div>
                    <div class="form-body">
                        <div class="form-group">
                            <input name="name_file" placeholder="Name File" class="form-control form-control-user" type="text">
                            <span class="help-block text-danger"></span>
                        </div>
                        <div class="form-group">
                            <textarea type="text" name="file_drive" id="file_drive" placeholder="Link Gdocs" class="form-control form-control-user"></textarea>
                            <span class="help-block text-danger"></span>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload File</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" accept="application/vnd.xlsx" name="file_document" id="file_document">
                                <label class="custom-file-label label-file" for="file_document">Choose file</label>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" onClick="window.location.reload();" data-dismiss=" modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- <script src="<?= base_url('back_end/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script> -->
<!-- <script src="<?= base_url('back_end/ckeditor5/ckeditor.js'); ?>"></script> -->
<script type="text/javascript">
    $('#file_document').on('change', function() {
        //get the file name
        var fileName = $('#file_document').val().replace(/C:\\fakepath\\/i, '');
        //replace the "Choose a file" label
        $('#file_document').next('.custom-file-label').html(fileName);
    })
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
    var save_method; //for save method string
    var table;
    var url;

    function add_roster() {
        save_method = 'save';
        $('#form')[0].reset(); // reset form on modals
        $('#modal_form').modal('show'); // show bootstrap modal

        $('.modal-title').text('Add roster'); // Set Title to Bootstrap modal title
        // $('#photo-preview').hide(); // hide photo preview modal
        // $('#label-photo').text('Upload Photo'); // label photo upload
    }

    function edit_roster(id) {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        <?php header('Content-type: application/json'); ?>
        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('Dashboard/Roster/ajax_edit/') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                console.log(data);

                $('[name="id_roster"]').val(data.id_roster);
                $('[name="name_file"]').val(data.name_file);
                $('[name="file_drive"]').val(data.file_drive);

                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit roster'); // Set title to Bootstrap modal title

                if (data.file_document) {
                    $('#namaExelLama').html('<input id="namaExelLama" type="hidden" name="namaExelLama" value="' + data.file_document + '"/>')
                    $('.label-file').text(data.file_document); // label photo upload
                } else {
                    // $('#label-file').text('Upload File'); // label photo upload
                    // $('#photo-preview div').text('(No File)');
                }

            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR);
                alert('Error get data from ajax');
            }
        });
    }

    function save() {

        if (save_method == 'save') {
            url = "<?php echo site_url('Dashboard/Roster/roster_add') ?>";
        } else {
            url = "<?php echo site_url('Dashboard/Roster/roster_update') ?>";
            console.log(url);
        }

        // ajax adding data to database
        $.ajax({
            url: url,
            type: "POST",
            data: new FormData($('#form')[0]),
            dataType: "JSON",
            contentType: false,
            processData: false,
            success: function(data) {
                if (data.status) {
                    $('#modal-form').modal('hide');
                    location.reload();
                } else {
                    for (var i = 0; i < data.inputerror.length; i++) {
                        $('[name="' + data.inputerror[i] + '"]').parent().addClass('has-error');
                        $('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]);
                    }
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
            }
        });
    }

    function delete_roster(id) {
        if (confirm('Are you sure delete this data?')) {
            // ajax delete data from database
            $.ajax({
                url: "<?php echo site_url('Dashboard/Roster/roster_delete') ?>/" + id,
                type: "POST",
                dataType: "JSON",
                success: function(data) {

                    location.reload();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error deleting data');
                }
            });

        }
    }
</script>
<!-- /.container-fluid -->
<?= $this->endSection(''); ?>