<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<br>
<br>
<br>
<br>
<header>
    <div class="container">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h4 class="font-weight-danger" style="padding-top: 40px; text-shadow: 1px 1px 1px grey; font-size: 25px;"><?= $roster['name_file']; ?></h4>
                <!--             <p class="lead">A great starter layout for a landing page</p> -->
            </div>
        </div>
    </div>
</header>
<br>
<!--  -->
<div class="container">
    <div class="embed-responsive embed-responsive-4by3">
        <iframe class="embed-responsive-item" src="<?= $roster['file_drive']; ?>" width="1320" height="700" allow="autoplay"></iframe>
    </div>
    <div style="padding-top: 10px;">
        <button><a href="/home">Kembali</a></button>
        <button><a href="<?= base_url('uploads/file/excel/') . "/" . $roster['file_document']; ?>" class="file">Download</a></button>
    </div>
</div>
<br>
</div> <!-- .site-wrap -->
<?= $this->endSection(''); ?>