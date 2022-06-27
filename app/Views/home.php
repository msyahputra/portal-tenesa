       <?= $this->extend('layout/template'); ?>

       <?= $this->section('content'); ?>
       <a href="" class="md-trigger" data-toggle="modal" data-target=".bd-example-modal-xl" aria-hidden="true"></a>

       <!--       <img src="front_end/images/face.png" alt="Image" class="img-face" data-aos="fade"> -->
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
       	<ol class="carousel-indicators">
       		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
       		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
       		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
       	</ol>
       	<div class="carousel-inner">
       		<div class="carousel-item active">
       			<img class="d-block w-100 img-face img-responsive" src="<?= base_url('front_end/images/BG100.png'); ?>" alt="First slide">
       			<div class="carousel-caption">
       				<div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
       					<div class="row">
       						<div class="col-lg-6">
       							<h1 class="text-white">
       								<span>Telkom Enhanced</span>
       								<br>
       								<span>Enterprise Solution Assurance</span>
       							</h1>
       						</div>
       					</div>
       				</div>
       			</div>
       		</div>
       		<div class="carousel-item">
       			<img class="d-block w-100 img-face img-responsive" src="<?= base_url('front_end/images/BG300.png'); ?>" alt="First slide">
       			<div class="carousel-caption">
       				<div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
       					<div class="row">
       						<div class="col-lg-6">
       							<h1 class="text-white">
       								<span>Telkom Enhanced</span>
       								<br>
       								<span>Enterprise Solution Assurance</span>
       							</h1>
       							<!--                     <p class="lead">I'm Web Developer Based on NY City</p> -->
       						</div>
       					</div>
       				</div>
       			</div>
       		</div>
       		<div class="carousel-item">
       			<img class="d-block w-100 img-face img-responsive" src="<?= base_url('front_end/images/BG200.png'); ?>" alt="First slide">
       			<div class="carousel-caption">
       				<div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
       					<div class="row">
       						<div class="col-lg-6">
       							<h1 class="text-white">
       								<span>Telkom Enhanced</span>
       								<br>
       								<span>Enterprise Solution Assurance</span>
       							</h1>
       							<!--                     <p class="lead">I'm Web Developer Based on NY City</p> -->
       						</div>
       					</div>
       				</div>
       			</div>
       		</div>
       		<div class="carousel-item">
       			<img class="d-block w-100 img-face img-responsive" src="<?= base_url('front_end/images/BG400.png'); ?>" alt="First slide">
       			<div class="carousel-caption">
       				<div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
       					<div class="row">
       						<div class="col-lg-6">
       							<h1 class="text-white">
       								<span>Telkom Enhanced</span>
       								<br>
       								<span>Enterprise Solution Assurance</span>
       							</h1>
       							<!--                     <p class="lead">I'm Web Developer Based on NY City</p> -->
       						</div>
       					</div>
       				</div>
       			</div>
       		</div>

       		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
       			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
       			<span class="sr-only">Previous</span>
       		</a>
       		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
       			<span class="carousel-control-next-icon" aria-hidden="true"></span>
       			<span class="sr-only">Next</span>
       		</a>
       	</div>
       </div>
       <div class="runtext-container">
       	<div class="main-runtext">
       		<marquee direction="" onmouseover="this.stop();" onmouseout="this.start();">

       			<div class="holder">
       				<?php foreach ($news as $Allnews) : ?>
       					<div class="text-container">
       						&nbsp; &nbsp; <img width="30" height="30" src="<?php echo base_url("uploads/image_berita/") . "/" . $Allnews['image']; ?>"> &nbsp; <a href="/news/<?= $Allnews['slug']; ?>" title="<?= $Allnews['title']; ?>"><?= $Allnews['title']; ?></a></i>
       					</div>
       				<?php endforeach; ?>

       			</div>
       		</marquee>
       	</div>
       </div>
       <div class="site-section" id="about-section">
       	<div class="container">
       		<div class="row">
       			<div class="col-sm-8">
       				<h2 class="section-title">News | <a href="<?= base_url('/news-&-event'); ?>" style="font-size:20px; color:#FF3C3C;">ALL News</a></h2>
       				<div class="col-md-20">
       					<div id="news-slider8" class="owl-carousel">
       						<?php foreach ($news as $Allnews) : ?>
       							<div class="post-slide8" style="box-shadow: 3px 3px 5px grey; padding: 10px;">
       								<div class="post-img">
       									<img src="<?php echo base_url("uploads/image_berita/") . "/" . $Allnews['image']; ?>">
       									<div class="over-layer">
       										<ul class="post-link">
       											<li><a href="#" class="fa fa-search"></a></li>
       											<li><a href="#" class="fa fa-link"></a></li>
       										</ul>
       									</div>
       									<div class="post-date">
       										<!-- <span class="date">25</span> -->
       										<span class="month"><?= $Allnews['tanggal']; ?></span>
       									</div>
       								</div>
       								<div class="post-content">
       									<h3 class="post-title">
       										<a href="#"><?= $Allnews['title']; ?></a>
       									</h3>
       									<p class="post-description">
       										<?= $Allnews['description']; ?>
       									</p>
       									<a href="/news/<?= $Allnews['slug']; ?>" class="read-more">read more</a>
       								</div>
       							</div>
       						<?php endforeach; ?>
       					</div>
       				</div>
       			</div>
       			<div class="col-sm-4 ">
       				<div class="container">
       					<h2 class="section-title-right text-right mobile-right"><a href="<?= base_url('/news-&-event'); ?>" style="font-size:20px; color:#FF3C3C;">ALL Event</a> |Event</h2>
       					<?php foreach ($event as $Allevent) : ?>
       						<div class="card mt-4" style="box-shadow: 3px 3px 5px grey; margin-bottom: 3px;">
       							<!-- <div class="card-body text-center text-black"> -->
       							<a href="<?= base_url('/event/' . "/" . $Allevent['slug']); ?>"><img src="<?php echo base_url("uploads/image_event/") . "/" . $Allevent['image']; ?>" width="320" height="100" title="<?= $Allevent['title']; ?>"></a>
       							<!-- </div> -->
       						</div>
       					<?php endforeach; ?>
       				</div>
       				<hr>
       			</div>
       		</div>
       	</div>
       </div>

       <section class=" site-section" style="background: url('<?= base_url('front_end/images/BG60.jpg'); ?>'); height:700px;">
       	<div class="container">
       		<div class="text-center bg-transparent" style="margin-bottom:300px;">
       			<!-- <img src="<?= base_url('front_end/images/profile.png'); ?>" class="img-responsive" alt="Responsive image"> -->
       			<div class="card-body">
       				<h5 class="card-title text-white" style="color:#fff;"></h5>
       				<p class="card-text text-white"></p>
       				<!-- <img src="<?= base_url('front_end/images/infomedia.png'); ?>" class="rounded mx-auto d-block" alt="..." width="230" height="70" style="background:#fff;"> -->
       			</div>
       			<br>
       		</div>
       	</div>
       </section>
       <br>
       <br>
       <br>
       <br>


       <section class="" id="contact-section" style="background-color:#F1F1F1;">
       	<div class="container text-center">
       		<div class="row">
       			<div class="col-12 mb-5 position-relative">
       				<div id="posts" class="row no-gutter" style="margin-top:50px;">
       					<div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
       						<a href="<?= base_url('front_end/images/1.PNG'); ?>" class="item-wrap fancybox">
       							<span class="icon-search2"></span>
       							<img class="img-fluid img-thumbnail" src="<?= base_url('front_end/images/covid-1.png'); ?>" width="200" height="180" style="box-shadow: 3px 3px 5px grey;">
       							<br>
       							<p class="card-text">Persiapan Sebelum Berangkat.</p>
       						</a>
       					</div>
       					<div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
       						<a href="<?= base_url('front_end/images/2.PNG'); ?>" class="item-wrap fancybox">
       							<span class="icon-search2"></span>
       							<img class="img-fluid img-thumbnail" src="<?= base_url('front_end/images/covid-2.png'); ?>" width="200" style="box-shadow: 3px 3px 5px grey;">
       							<br>
       							<p class="card-text">Menggunakan Transportasi Public.</p>
       						</a>
       					</div>

       					<div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
       						<a href="<?= base_url('front_end/images/3.PNG'); ?>" class="item-wrap fancybox">
       							<span class="icon-search2"></span>
       							<img class="img-fluid img-thumbnail " src="<?= base_url('front_end/images/covid-3.png'); ?>" width="200" height="180" style="box-shadow: 3px 3px 5px grey;">
       							<br>
       							<p class="card-text">Saat Diruangan Public.</p>
       						</a>
       					</div>
       					<div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
       						<a href="<?= base_url('front_end/images/5.PNG'); ?>" class="item-wrap fancybox">
       							<span class="icon-search2"></span>
       							<img class="img-fluid img-thumbnail" src="<?= base_url('front_end/images/covid-4.png'); ?>" width="200" height="180" style="box-shadow: 3px 3px 5px grey;">
       							<br>
       							<p class="card-text">Saat Memasuki Rumah.</p>
       						</a>
       					</div>
       					<div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
       						<a href="<?= base_url('front_end/images/6.jpeg'); ?>" class="item-wrap fancybox ">
       							<span class="icon-search2"></span>
       							<img class="img-fluid img-thumbnail" src="<?= base_url('front_end/images/covid5.jpeg'); ?>" width="200" height="180" style="box-shadow: 3px 3px 5px grey;">
       							<br>
       							<p class="card-text">Health Life</p>
       						</a>
       					</div>
       					<div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
       						<a href="<?= base_url('front_end/images/7.jpeg'); ?>" class="item-wrap fancybox ">
       							<span class="icon-search2"></span>
       							<img class="img-fluid img-thumbnail" src="<?= base_url('front_end/images/covid6.jpeg'); ?>" width="200" height="180" style="box-shadow: 3px 3px 5px grey;">
       							<br>
       							<p class="card-text"></p>
       						</a>
       					</div>
       					<div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
       						<a href="<?= base_url('front_end/images/8.jpeg'); ?>" class="item-wrap fancybox ">
       							<span class="icon-search2"></span>
       							<img class="img-fluid img-thumbnail" src="<?= base_url('front_end/images/covid7.jpeg'); ?>" width="200" height="180" style="box-shadow: 3px 3px 5px grey;">
       							<br>
       							<p class="card-text"></p>
       						</a>
       					</div>
       				</div>
       			</div>
       		</div>
       	</div>
       </section>
       <div class=" modal fade bd-example-modal-xl" tabindex="-999" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
       	<div class="modal-dialog modal-xl" style="margin-top:150px;">
       		<div class="modal-content" style="background-color:#EBEBEB; padding:20px;">
       			<div class="container">
       				<!-- Modal Header -->
       				<button type="button" class="close" data-dismiss="modal">&times;</button>

       				<div class="trending-main mt-5">
       					<div class="row">
       						<div class="col-lg-8">
       							<!-- Trending Top -->
       							<div class="trending-top mb-30">
       								<?php foreach ($newsPopUp as $AllnewsPopUp) : ?>
       									<div class="trend-top-img">
       										<img src="<?php echo base_url("uploads/image_berita/") . "/" . $AllnewsPopUp['image']; ?>" alt="">
       										<div class="trend-top-cap">
       											<span>Latest News</span>
       											<h2 style=""><a href="/news/<?= $AllnewsPopUp['slug']; ?>"><?= $AllnewsPopUp['title']; ?></a></h2>
       										</div>
       									</div>
       								<?php endforeach; ?>
       							</div>
       						</div>
       						<!-- Riht content -->
       						<div class="col-lg-4">
       							<h1 class="" style="color:#000; margin-bottom:30px;">New Roster</h1>
       							<?php foreach ($roster as $Allroster) : ?>
       								<div class="trand-right-single d-flex" style="height:80px;">
       									<div class="trand-right-img">
       										<img src="<?php echo base_url("front_end/images/excel.jpg"); ?>" alt="">
       									</div>
       									<div class="trand-right-cap">
       										<h4><a class="linkk" href="/roster/<?= $Allroster['slug']; ?>"><?= $Allroster['name_file']; ?></a></h4>
       									</div>
       									<a href="<?php echo base_url("uploads/file/excel") . "/" . $Allroster['file_document']; ?>"><i class="fa fa-download fa-lg" aria-hidden="true" style="margin-top:15px; margin-left:15px;"></i></a>
       								</div>
       							<?php endforeach; ?>
       						</div>
       					</div>
       				</div>
       			</div>
       		</div>
       	</div>
       </div>
       </div>
       <?= $this->endSection(''); ?>