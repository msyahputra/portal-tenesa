<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<header class="masthead-conten-list">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-left">
                <!-- <h1 class="font-weight-light" style="color:#FF3C3C;text-shadow: 2px 2px 4px #000000;"><?= $content['title']; ?></h1> -->
                <!--             <p class="lead">A great starter layout for a landing page</p> -->
            </div>
        </div>
    </div>
</header>
<br>

<div class="container">
    <div class="content">
        <div class="title">
            <h4 class="h5"><?= $content['title']; ?></h4>
        </div>
        <p class="description"><?= $content['description']; ?></p>
        <?php if ($content['file_document']) { ?>
            <div class="container">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="<?= base_url('uploads/file/pdf' . "/" . $content['file_document']); ?>" allow="autoplay"></iframe>
                </div>
            </div>
        <?php } else { ?>
            <div></div>
        <?php } ?>
        <br>
        <?php if ($content['file_video']) { ?>
            <div class="title">
                <!-- <h6>Tutorial Video</h6> -->
            </div>
            <div class="col-md-9 embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="<?= base_url('uploads/file/video' . "/" . $content['file_video']); ?>" allowfullscreen></iframe>
            </div>
        <?php } else { ?>
            <div></div>
        <?php } ?>
        <br>
        <!-- <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem dolore nisi eligendi necessitatibus in nobis numquam minima odit perferendis nam, illo laboriosam suscipit quibusdam a quae voluptates nostrum nulla! Cum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit porro et reiciendis nesciunt quis unde ab repellendus iure, esse pariatur consequuntur nobis minus, fugit. Quisquam sequi distinctio tempore quia mollitia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus nesciunt blanditiis, velit unde deleniti cum harum veniam ad dolore quia sit sunt est, alias, libero cupiditate. Commodi tenetur, aliquid corrupti.</p>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem dolore nisi eligendi necessitatibus in nobis numquam minima odit perferendis nam, illo laboriosam suscipit quibusdam a quae voluptates nostrum nulla! Cum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit porro et reiciendis nesciunt quis unde ab repellendus iure, esse pariatur consequuntur nobis minus, fugit. Quisquam sequi distinctio tempore quia mollitia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus nesciunt blanditiis, velit unde deleniti cum harum veniam ad dolore quia sit sunt est, alias, libero cupiditate. Commodi tenetur, aliquid corrupti.</p> -->
    </div>
</div>
<?= $this->endSection(''); ?>