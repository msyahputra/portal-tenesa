<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>



<header class="masthead-conten-list">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-left">
                <h1 class="font-weight-light" style="color:#FF3C3C;text-shadow: 2px 2px 4px #000000;">Team TENESA Semarang</h1>
                <!--             <p class="lead">A great starter layout for a landing page</p> -->
            </div>
        </div>
    </div>
</header>
<br>

<body>
    <div class="container" style="border-radius:5px; background-image:  url('<?php echo base_url(); ?>/front_end/images/bg_team.png')">
        <div class="row">
            <div class="col-lg-12 text-center my-2">
                <h3 style="font-weight: bold; color:#fff; margin-top:20px;">Team Semarang</h4>
            </div>
        </div>
        <div class="portfolio-menu mt-2 mb-4">
            <ul>
                <li class="btn btn-outline-dark active" data-filter="*">All</li>
                <li class="btn btn-outline-dark " data-filter=".gts">Team Leader To Agent</li>
                <li class="btn btn-outline-dark" data-filter=".lap">Supervisor And Team Leader</li>
                <li class="btn btn-outline-dark" data-filter=".selfie">Team Support</li>
            </ul>
        </div>
        <div class="portfolio-item row">
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/S1.jpg" alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/S2.jpg" alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/S3.jpg" alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/S4.png" alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/S5.png" alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/S6.png" alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/S7.jpg" alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/S8.jpeg" alt="">
            </div>
            <div class="gallery lap col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/STLDGOS.jpg" alt="">
            </div>
            <div class="gallery lap col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/STLSNIS.jpg" alt="">
            </div>
            <div class="gallery lap col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/STLVIS.png" alt="">
            </div>
            <div class="gallery lap col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/STLSEBS.jpeg" alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/S9.png" alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/S10.jpg" alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/S11.jpg" alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/S12.jpeg" alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/S13.jpg" alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/S14.png   " alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/S15.png" alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/S16.jpg" alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/S17.png" alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/S18.jpg" alt="">
            </div>
            <div class="gallery selfie col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_smg/TSS.png" alt="">
            </div>
        </div>
    </div>
    <br>
</body>
<?= $this->endSection(''); ?>