<?= $this->extend('dashboard/layout/template'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Users</h1>
    <a href="#" class="btn btn-danger btn-circle btn-lg" onclick="add_users()">
        <i class="fas fa-plus"></i>
    </a>

    <br>
    <br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Users</h6>
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
                            <th>Email</th>
                            <th>No Handphone</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th>Image</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>ID Parner</th>
                            <th>Position</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No Handphone</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th>Image</th>
                            <th>Opsi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($user as $Allusers) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $Allusers->user_parner; ?></td>
                                <td><?= $Allusers->jabatan; ?></td>
                                <td><?= $Allusers->full_name; ?></td>
                                <td><?= $Allusers->email; ?></td>
                                <td><?= $Allusers->no_hp; ?></td>
                                <td><?= $Allusers->password; ?></td>
                                <td><?= $Allusers->level; ?></td>
                                <td><img src="<?= base_url('uploads/image_user/') . '/' .  $Allusers->image; ?>" alt="Image Berita" width="50"></td>
                                <td><a href="#" class="btn btn-warning btn-circle btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-primary btn-circle btn-sm" onclick="edit_users(<?php echo $Allusers->id_user; ?>)">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-circle btn-sm" onclick="delete_users(<?php echo $Allusers->id_user; ?>)">
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
                <h3 class="modal-title">Form Users</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" value="" name="id_user" />
                    <div id="namaImageLama">

                    </div>
                    <div class="form-body">
                        <div class="form-group">
                            <input name="user_parner" placeholder="ID Parner" class="form-control form-control-user" type="number">
                            <span class="help-block text-danger"></span>
                        </div>
                        <div class="form-group">
                            <input name="jabatan" placeholder="Position" class="form-control form-control-user" type="text">
                            <span class="help-block text-danger"></span>
                        </div>
                        <div class="form-group">
                            <input name="full_name" placeholder="Nama" class="form-control form-control-user" type="text">
                            <span class="help-block text-danger"></span>
                        </div>
                        <div class="form-group">
                            <input name="email" placeholder="Email" class="form-control form-control-user" type="email">
                            <span class="help-block text-danger"></span>
                        </div>
                        <div class="form-group">
                            <input name="no_hp" placeholder="No Handphone" class="form-control form-control-user" type="number">
                            <span class="help-block text-danger"></span>
                        </div>

                        <div class="form-group">
                            <input name="level" placeholder="Akses Login" class="form-control form-control-user" type="number">
                            <span class="help-block text-danger"></span>
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password">
                            <span class="help-block text-danger"></span>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="customCheck" onclick="myFunction()">
                                <label class="custom-control-label" for="customCheck">Show
                                    Password</label>
                            </div>
                        </div>

                        <div class="form-group" id="photo-preview">
                            <label class="control-label col-md-3">Photo</label>
                            <div class="col-md-9">
                                <img src="<?= base_url('uploads/image_user/default.png') ?>" class="img-thumbnail img-preview" alt="" width="100">
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="image" onchange="imagePreview()">
                                <label class="custom-file-label label-photo" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                        <br>
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

<script type="text/javascript">
    $(document).ready(function() {
        $('#table_id').DataTable();
    });

    // show password 
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    var save_method; //for save method string
    var table;
    var url;

    function imagePreview() {
        const image = document.querySelector('#image');
        const imageLabel = document.querySelector('.label-photo');
        const imgPreview = document.querySelector('.img-preview');

        imageLabel.textContent = image.files[0].name;

        const fileImage = new FileReader();
        fileImage.readAsDataURL(image.files[0]);

        fileImage.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }

    function add_users() {
        save_method = 'save';
        $('#form')[0].reset(); // reset form on modals
        $('#modal_form').modal('show'); // show bootstrap modal

        $('.modal-title').text('Add users'); // Set Title to Bootstrap modal title
        // $('#photo-preview').hide(); // hide photo preview modal
        imagePreview();
        // $('#label-photo').text('Upload Photo'); // label photo upload
    }

    function edit_users(id) {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        <?php header('Content-type: application/json'); ?>
        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('Dashboard/DataUsers/ajax_edit/') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                console.log(data);

                $('[name="id_user"]').val(data.id_user);
                $('[name="user_parner"]').val(data.user_parner);
                $('[name="jabatan"]').val(data.jabatan);
                $('[name="full_name"]').val(data.full_name);
                $('[name="email"]').val(data.email);
                $('[name="no_hp"]').val(data.no_hp);
                $('[name="level"]').val(data.level);
                $('[name="password"]').val(data.password);

                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit users'); // Set title to Bootstrap modal title
                $('#photo-preview').show(); // show photo preview modal

                var BASE_URL = "<?php echo base_url('/uploads/image_user/'); ?>";

                if (data.image) {
                    $('#namaImageLama').html('<input id="namaImageLama" type="hidden" name="namaImageLama" value="' + data.image + '"/>')
                    $('.label-photo').text(data.image); // label photo upload
                    $('#photo-preview div').html('<img src="' + BASE_URL + '/' + data.image + '" class="img-thumbnail img-preview" width="100px">'); // show photo
                } else {
                    $('#label-photo').text('Upload Photo'); // label photo upload
                    $('#photo-preview div').text('(No photo)');
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
            url = "<?php echo site_url('Dashboard/DataUsers/users_add') ?>";
        } else {
            url = "<?php echo site_url('Dashboard/DataUsers/users_update') ?>";
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

    function delete_users(id) {
        if (confirm('Are you sure delete this data?')) {
            // ajax delete data from database
            $.ajax({
                url: "<?php echo site_url('Dashboard/DataUsers/users_delete') ?>/" + id,
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