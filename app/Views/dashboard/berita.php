<?= $this->extend('dashboard/layout/template'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Berita</h1>
    <a href="#" class="btn btn-danger btn-circle btn-lg" onclick="add_news()">
        <i class="fas fa-plus"></i>
    </a>

    <br>
    <br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Berita</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="table_id" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Tanggal</th>
                            <th>description</th>
                            <th>Image</th>
                            <th>File Document</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Tanggal</th>
                            <th>description</th>
                            <th>Image</th>
                            <th>File Document</th>
                            <th>Opsi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($news as $Allnews) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $Allnews->title; ?></td>
                                <td><?= $Allnews->tanggal; ?></td>
                                <td class="comment more">
                                    <?php if (strlen($Allnews->description) > 100) : ?>
                                        <?= substr($Allnews->description, 0, 300) ?>
                                        <span class="read-more-show hide_content">More<i class="fa fa-angle-down"></i></span>
                                        <span class="read-more-content"> <?= substr($Allnews->description, 300, strlen($Allnews->description)); ?>
                                            <span class="read-more-hide hide_content">Less <i class="fa fa-angle-up"></i></span> </span>
                                    <?php endif; ?>
                                </td>
                                <td><img src="<?= base_url('uploads/image_berita/') . '/' .  $Allnews->image; ?>" alt="Image Berita" width="200"></td>
                                <td><a href="<?= base_url('uploads/file/pdf_berita') . '/' .  $Allnews->file_document; ?>" target="_blank" alt="File Document"><?= $Allnews->file_document; ?></a></td>
                                <td><a href="#" class="btn btn-warning btn-circle btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-primary btn-circle btn-sm" onclick="edit_news(<?php echo $Allnews->id_news; ?>)">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-circle btn-sm" onclick="delete_news(<?php echo $Allnews->id_news; ?>)">
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
                <h3 class="modal-title">Form Berita</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" value="" name="id_news" />
                    <div id="namaImageLama">

                    </div>
                    <div id="namaPdfLama">

                    </div>
                    <div class="form-body">
                        <div class="form-group">
                            <input name="title" placeholder="Title News" class="form-control form-control-user" type="text">
                            <span class="help-block text-danger"></span>
                        </div>
                        <div class="form-group">
                            <input name="tanggal" placeholder="Tanggal News" class="form-control form-control-user" type="date">
                            <span class="help-block text-danger"></span>
                        </div>
                        <div class="form-group">
                            <textarea type="text" name="description" id="description" placeholder="Description News" class="form-control form-control-user"></textarea>
                            <span class="help-block text-danger"></span>
                        </div>
                        <div class="form-group" id="photo-preview">
                            <label class="control-label col-md-3">Photo</label>
                            <div class="col-md-9">
                                <img src="<?= base_url('uploads/image_berita/default.png') ?>" class="img-thumbnail img-preview" alt="">
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload Image</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="image" onchange="imagePreview()">
                                <label class="custom-file-label label-photo" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                        <br>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload File</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" accept="application/pdf, application/vnd.ms-excel" name="file_document" id="file_document">
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
<script type="text/javascript">
    // ClassicEditor
    //     .create(document.querySelector('#description'))
    //     .then(editor => {
    //         console.log(editor);
    //     })
    //     .catch(error => {
    //         console.error(error);
    //     });

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
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
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

    function add_news() {
        save_method = 'save';
        $('#form')[0].reset(); // reset form on modals
        $('#modal_form').modal('show'); // show bootstrap modal

        $('.modal-title').text('Add news'); // Set Title to Bootstrap modal title
        // $('#photo-preview').hide(); // hide photo preview modal
        imagePreview();
        // $('#label-photo').text('Upload Photo'); // label photo upload
    }

    function edit_news(id) {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        <?php header('Content-type: application/json'); ?>
        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('dashboard/berita/ajax_edit/') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                console.log(data);

                $('[name="id_news"]').val(data.id_news);
                $('[name="title"]').val(data.title);
                $('[name="tanggal"]').val(data.tanggal);
                $('textarea[name="description"]').val(data.description);


                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit news'); // Set title to Bootstrap modal title
                $('#photo-preview').show(); // show photo preview modal

                var BASE_URL = "<?php echo base_url('/uploads/image_berita/'); ?>";

                if (data.image) {
                    $('#namaImageLama').html('<input id="namaImageLama" type="hidden" name="namaImageLama" value="' + data.image + '"/>')
                    $('.label-photo').text(data.image); // label photo upload
                    $('#photo-preview div').html('<img src="' + BASE_URL + '/' + data.image + '" class="img-thumbnail img-preview" width="300px">'); // show photo
                } else {
                    $('#label-photo').text('Upload Photo'); // label photo upload
                    $('#photo-preview div').text('(No photo)');
                }

                if (data.file_document) {
                    $('#namaPdfLama').html('<input id="namaPdfLama" type="hidden" name="namaPdfLama" value="' + data.file_document + '"/>')
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
            url = "<?php echo site_url('dashboard/berita/news_add') ?>";
        } else {
            url = "<?php echo site_url('dashboard/berita/news_update') ?>";
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

    function delete_news(id) {
        if (confirm('Are you sure delete this data?')) {
            // ajax delete data from database
            $.ajax({
                url: "<?php echo site_url('dashboard/berita/news_delete') ?>/" + id,
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