<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<br>
<div class="container" style="margin-top:150px;">
    <div class="title-berita text-left">
        <h1 class="font-weight-light read-more"><?= $news['title']; ?></h1>
        <!--             <p class="lead">A great starter layout for a landing page</p> -->
    </div>

    <div class="content">
        <div class="title">
            <h5 class="h5"> 
            <img src="<?= base_url('front_end/images/clock.png'); ?>" width="20" height="20" alt="clock">
            TENESA - <?= $news['tanggal']; ?></h5>
        </div>
        <div class="images-berita text-center">
            <img class="img-thumbnail" src="<?php echo base_url("uploads/image_berita/") . "/" . $news['image']; ?>" alt="">
        </div>
        <br>
        <?php if ($news['file_document']) { ?>

            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="<?= base_url('uploads/file/pdf_berita' . "/" . $news['file_document']); ?>" allow="autoplay"></iframe>
            </div>

        <?php } else { ?>
            <div>.</div>
        <?php } ?>
        <br>
        <p class="description"><?= $news['description']; ?></p>
    </div>
</div>

<?= $this->endSection(''); ?>