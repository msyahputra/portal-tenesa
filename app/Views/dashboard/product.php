<?= $this->extend('dashboard/layout/template'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Product Categori</h1>
    <a href="#" class="btn btn-danger btn-circle btn-lg" onclick="add_product()">
        <i class="fas fa-plus"></i>
    </a>

    <br>
    <br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Product Categori</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Sub Category</th>
                            <!-- <th>Sub Product</th> -->
                            <th>description</th>
                            <th>File Document</th>
                            <th>File Video</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Sub Category</th>
                            <!-- <th>Sub Product</th> -->
                            <th>description</th>
                            <th>File Document</th>
                            <th>File Video</th>
                            <th>Opsi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($product as $Allproduct) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $Allproduct->title; ?></td>
                                <td><?= $Allproduct->kategori_name; ?></td>

                                <td class="comment more">
                                    <?php if (strlen($Allproduct->description) > 50) : ?>
                                        <?= substr($Allproduct->description, 0, 50) ?>
                                        <span class="read-more-show hide_content">More<i class="fa fa-angle-down"></i></span>
                                        <span class="read-more-content"> <?= substr($Allproduct->description, 300, strlen($Allproduct->description)); ?>
                                            <span class="read-more-hide hide_content">Less <i class="fa fa-angle-up"></i></span> </span>
                                    <?php endif; ?>
                                </td>
                                <td><a href="<?= base_url('uploads/file/pdf') . '/' .  $Allproduct->file_document; ?>" target="_blank" alt="File Document"><?= $Allproduct->file_document; ?></a></td>
                                <td><a href="<?= base_url('uploads/file/video') . '/' .  $Allproduct->file_video; ?>" target="_blank" alt="File Video"><?= $Allproduct->file_video; ?></a></td>
                                <td><a href="#" class="btn btn-warning btn-circle btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-primary btn-circle btn-sm" onclick="edit_product(<?php echo $Allproduct->id_product; ?>)">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-circle btn-sm" onclick="delete_product(<?php echo $Allproduct->id_product; ?>)">
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
                <h3 class="modal-title">Form Product</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" value="" name="id_product" />
                    <div id="namaPdfLama">

                    </div>
                    <div id="namaVdoLama">

                    </div>
                    <div class="form-body">
                        <div class="form-group">
                            <input name="title" placeholder="Title Product" class="form-control form-control-user" type="text">
                            <span class="help-block text-danger"></span>
                        </div>
                        <div class="form-group">
                            <select name="id_katprod" class="form-control form-control-user">
                                <option value="">-Select-</option>
                                <?php foreach ($category as $row) : ?>
                                    <option value="<?= $row->id_katprod; ?>"><?= $row->kategori_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <span class="help-block text-danger"></span>
                        </div>
                        <div class="form-group">
                            <select name="id_subproduct" class="form-control form-control-user">
                                <option value="">-Select-</option>
                                <?php foreach ($subprod as $row) : ?>
                                    <option value="<?= $row->id_subproduct; ?>"><?= $row->name_subproduct; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <span class="help-block text-danger"></span>
                        </div>
                        <div class="form-group">
                            <textarea type="text" name="description" id="description" placeholder="Description Product" class="form-control form-control-user"></textarea>
                            <span class="help-block text-danger"></span>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload File</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" accept="application/pdf, application/vnd.ms-excel" name="file_document" id="file_document">
                                <label class="custom-file-label label-file" for="file_document">Choose file</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group" id="video-preview">
                            <label class="control-label col-md-3">Video</label>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload Video</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="file_video" id="file_video" accept="video/mp4" onchange="videoPreview()">
                                <label class=" custom-file-label label-video" for="file_video">Choose file</label>
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
    // Hide the extra content initially, using JS so that if JS is disabled, no problemo:
    $('.read-more-content').addClass('hide_content')
    $('.read-more-show, .read-more-hide').removeClass('hide_content')

    // Set up the toggle effect:
    $('.read-more-show').on('click', function(e) {
        $(this).next('.read-more-content').removeClass('hide_content');
        $(this).addClass('hide_content');
        e.preventDefault();
    });

    // Changes contributed by @diego-rzg
    $('.read-more-hide').on('click', function(e) {
        var p = $(this).parent('.read-more-content');
        p.addClass('hide_content');
        p.prev('.read-more-show').removeClass('hide_content'); // Hide only the preceding "Read More"
        e.preventDefault();
    });

    $('#file_video').on('change', function() {
        //get the file name
        var fileName = $('#file_video').val().replace(/C:\\fakepath\\/i, '');
        //replace the "Choose a file" label
        $('#file_video').next('.custom-file-label').html(fileName);
    })
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
    var save_method; //for save method string
    var table;
    var url;

    function videoPreview() {
        const image = document.querySelector('#file_video');
        const imageLabel = document.querySelector('.label-video');
        const imgPreview = document.querySelector('.embed-responsive-item');

        imageLabel.textContent = image.files[0].name;

        const fileImage = new FileReader();
        fileImage.readAsDataURL(image.files[0]);

        fileImage.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }

    function add_product() {
        save_method = 'save';
        $('#form')[0].reset(); // reset form on modals
        $('#modal_form').modal('show'); // show bootstrap modal

        $('.modal-title').text('Add Product'); // Set Title to Bootstrap modal title
        // $('#photo-preview').hide(); // hide photo preview modal
        // $('#label-photo').text('Upload Photo'); // label photo upload
        videoPreview();
    }

    function edit_product(id) {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        <?php header('Content-type: application/json'); ?>
        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('dashboard/productcategori/ajax_edit/') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                console.log(data);

                $('[name="id_product"]').val(data.id_product);
                $('[name="title"]').val(data.title);
                $('[name="id_katprod"]').val(data.id_katprod).trigger('change');
                $('[name="id_subproduct"]').val(data.id_subproduct).trigger('change');
                $('textarea[name="description"]').val(data.description);

                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit product'); // Set title to Bootstrap modal title
                $('#video-preview').show(); // show photo preview modal

                var BASE_URL = "<?php echo base_url('/uploads/file/video/'); ?>";

                if (data.file_document) {
                    $('#namaPdfLama').html('<input id="namaPdfLama" type="hidden" name="namaPdfLama" value="' + data.file_document + '"/>')
                    $('.label-file').text(data.file_document); // label photo upload
                } else {
                    // $('#label-file').text('Upload File'); // label photo upload
                    // $('#photo-preview div').text('(No File)');
                }

                if (data.file_video) {
                    $('#namaVdoLama').html('<input id="namaVdoLama" type="hidden" name="namaVdoLama" value="' + data.file_video + '"/>')
                    $('.label-video').text(data.file_video); // label photo upload
                    $('#video-preview div').html('<iframe src="' + BASE_URL + '/' + data.file_video + '" class="embed-responsive-item" width="300px" allowfullscreen></iframe>'); // show photo
                } else {
                    $('#label-video').text('Upload video'); // label photo upload
                    $('#video-preview div').text('(No video)');
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
            url = "<?php echo site_url('dashboard/productcategori/product_add') ?>";
        } else {
            url = "<?php echo site_url('dashboard/productcategori/product_update') ?>";
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

    function delete_product(id) {
        if (confirm('Are you sure delete this data?')) {
            // ajax delete data from database
            $.ajax({
                url: "<?php echo site_url('dashboard/productcategori/product_delete') ?>/" + id,
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