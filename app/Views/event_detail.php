<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<br>
<div class="container" style="margin-top:150px;">
    <div class="title-berita text-left">
        <h1 class="font-weight-light read-more"><?= $event['title']; ?></h1>
        <!--             <p class="lead">A great starter layout for a landing page</p> -->
    </div>

    <div class="content">
        <div class="title">
            <h5 class="h5"> <img src="<?= base_url('front_end/images/clock.png'); ?>" width="20" height="20" alt="clock"> TENESA - <?= $event['tanggal']; ?></h5>
        </div>
        <div class="images-berita text-center">
            <img class="img-fluid img-responsive" src="<?php echo base_url("uploads/image_event/") . "/" . $event['image']; ?>" alt="">
        </div>
        <br>
        <p class="description"><?= $event['description']; ?></p>
    </div>
</div>

<?= $this->endSection(''); ?>