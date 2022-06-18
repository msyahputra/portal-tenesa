<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<header class="masthead-conten-list">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-left">
                <h1 class="font-weight-light" style="color:#FF3C3C;text-shadow: 2px 2px 4px #000000;">Team TENESA Bandung</h1>
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
                <h3 style="font-weight: bold; color:#fff; margin-top:20px;">Team Bandung</h4>
            </div>
        </div>
        <div class="portfolio-menu mt-2 mb-4">
            <ul>
                <li class="btn btn-outline-dark active" data-filter="*">All</li>
                <li class="btn btn-outline-dark" data-filter=".gts">Team Leader To Agent</li>
                <li class="btn btn-outline-dark" data-filter=".lap">supervisor And Team Leader</li>
                <li class="btn btn-outline-dark" data-filter=".selfie">Team Support</li>
            </ul>
        </div>
        <div class="portfolio-item row">
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_bdg/B1.jpeg" alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_bdg/B2.jpeg" alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_bdg/B3.jpeg" alt="">
            </div>
            <div class="gallery lap col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_bdg/STLSNIB.jpeg" alt="">
            </div>
            <div class="gallery lap col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_bdg/STLDOB.jpeg" alt="">
            </div>
            <div class="gallery lap col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_bdg/STLSEBS.jpeg" alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_bdg/B4.jpeg" alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_bdg/B5.jpeg" alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_bdg/B6.jpeg" alt="">
            </div>
            <div class="gallery gts col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_bdg/B7.jpeg" alt="">
            </div>
            <div class="gallery selfie col-lg-3 col-md-4 col-6 col-sm">
                <img data-action="zoom" class="img-fluid" src="/uploads/image_bdg/TSB.png" alt="">
            </div>
        </div>
    </div>
</body>
<?= $this->endSection(''); ?>