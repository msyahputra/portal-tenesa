<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <!-- <div class="col-12 text-center">
        <h1 class="font-weight-light" style="color:#FF3C3C;text-shadow: 2px 2px 4px #000000;">NEWS & Even</h1> -->
      <!--             <p class="lead">A great starter layout for a landing page</p> -->
      <!-- </div> -->
    </div>
  </div>
</header>

<div class="container-fluid pb-4 pt-4 paddding">
  <div class="container paddding">
    <div class="row mx-0">
      <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
        <div>
          <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
        </div>
        <?php foreach ($news as $Allnews) : ?>
          <div class="row pb-4">
            <div class="col-md-5">
              <div class="fh5co_hover_news_img">
                <div class="fh5co_news_img" style="box-shadow: 3px 3px 5px grey;"><img src="<?php echo base_url("uploads/image_berita/") . "/" . $Allnews['image']; ?>"" alt="" /></div>
                                <div></div>
                            </div>
                        </div>
                        <div class=" col-md-7 animate-box">
                  <a href="single.html" class="fh5co_magna py-2"><?= $Allnews['title']; ?></a> <a href="#" class="fh5co_mini_time py-3"> TENESA - <?= $Allnews['tanggal']; ?></a>
                  <div class="fh5co_consectetur"><?= $Allnews['description']; ?></div>
                  <p><a href="/news/<?= $Allnews['slug']; ?>" class="btn-read btn-primary">Read More</a></p>
                </div>
              </div>
            <?php endforeach; ?>
            <hr>
            <?= $pager_news->links('news', 'news_paganation') ?>
            </div>
            <div class="col-sm-4 ">
              <div class="container">
                <h2 class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4 text-right">Event</h2>
                <?php foreach ($event as $Allevent) : ?>
                  <div class="card mt-4" style="box-shadow: 3px 3px 5px grey; margin-bottom: 3px;">
                    <!-- <div class="card-body text-center text-black"> -->
                    <a href="<?= base_url('/event/' . "/" . $Allevent['slug']); ?>"><img src="<?php echo base_url("uploads/image_event/") . "/" . $Allevent['image']; ?>" width="320" height="100" title="<?= $Allevent['title']; ?>"></a>
                    <!-- </div> -->
                  </div>
                <?php endforeach; ?>
              </div>
              <hr>
              <?= $pager_event->links('event', 'event_paganation') ?>
            </div>

          </div>
      </div>
    </div>
    <!-- <div class="container-fluid pb-4 pt-5">
        <div class="container animate-box">
          <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
          </div>
          <div class="owl-carousel owl-theme" id="slider2">
            <div class="item px-2">
              <div class="fh5co_hover_news_img">
                <div class="fh5co_news_img"><img src="<?= base_url(''); ?>front_end/images/news-1.jpg" alt=""/></div>
                <div>
                  <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                  <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                </div>
              </div>
            </div>
            <div class="item px-2">
              <div class="fh5co_hover_news_img">
                <div class="fh5co_news_img"><img src="<?= base_url(''); ?>front_end/images/joe-gardner-75333.jpg" alt=""/></div>
                <div>
                  <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                  <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                </div>
              </div>
            </div>
            <div class="item px-2">
              <div class="fh5co_hover_news_img">
                <div class="fh5co_news_img"><img src="<?= base_url(''); ?>front_end/images/ryan-moreno-98837.jpg" alt=""/></div>
                <div>
                  <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                  <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                </div>
              </div>
            </div>
            <div class="item px-2">
              <div class="fh5co_hover_news_img">
                <div class="fh5co_news_img"><img src="<?= base_url(''); ?>front_end/images/seth-doyle-133175.jpg" alt=""/></div>
                <div>
                  <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                  <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    <?= $this->endSection(''); ?>