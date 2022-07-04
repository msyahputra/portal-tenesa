<!doctype html>
<html lang="en">

<head>
  <title><?= $title; ?> &mdash; </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Arbutus+Slab|Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('front_end/fonts/icomoon/style.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('front_end/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('front_end/css/jquery-ui.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('front_end/css/owl.carousel.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('front_end/css/owl.theme.default.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('front_end/css/owl.theme.default.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('front_end/css/jquery.fancybox.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('front_end/css/bootstrap-datepicker.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('front_end/fonts/flaticon/font/flaticon.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('front_end/css/aos.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('front_end/fontawesome/css/all.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('front_end/css/style.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('front_end/css/zoom.css'); ?>">
  <style>
    .clearfix::after {
      content: "";
      clear: both;
      display: table;
    }
  </style>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-center" style="margin-right:20px;">
          <div class=" text-center mx-3 mb-0">
            <h2 class="m-0 site-logo"><a href="<?= base_url('home'); ?>" style="text-shadow: 1px 1px 3px #000000">HOME</a></h2>
          </div>
          <div class="">
            <nav class="site-navigation " role="navigation">
              <ul class="nav-links site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li>
                  <a href="#clients-section" class="nav-link">TENESA</a>
                  <input type="checkbox" id="showMega">
                  <label for="showMega" class="mobile-item">TENESA</label>
                  <div class="mega-box">
                    <div class="content scrollable-menu">
                      <div class="row">
                        <header>TENESA</header>
                        <ul class="mega-links">
                          <?php foreach ($tenesaa as $AllTenesa) : ?>
                            <li class="list-mega"><a class="link-mega" href="<?= base_url('tenesa' . "/" . $AllTenesa['slug']); ?> "><?= $AllTenesa['title']; ?></a></li>
                          <?php endforeach; ?>
                          <li class="list-mega dropdown">
                            <button class="dropdown1" style="margin-left: -40px;" onclick="myFunction()" href="#">Perfomansi Tenesa<span class="fa fa-caret-down right"></span></<button>
                              <ul id="myDropdown" class="dropdown-content" style="margin-left: -10px;">
                                <li class="list-mega"><a class="link-mega" href="https://bit.ly/PeriodicVoiceJuni2022" target="_blank">Monitoring Periodik Voice</a></li>
                                <li class="list-mega"><a class="link-mega" href="https://bit.ly/PeriodicTier2Juni2022" target="_blank">Monitoring Periodik Tier 2</a></li>
                                <li class="list-mega"><a class="link-mega" href="https://bit.ly/PeriodicDigitalJuni2022" target="_blank">Monitoring Periodik Digital</a></li>
                                <li class="list-mega"><a class="link-mega" href="https://bit.ly/RealTimeJuni2022" target="_blank">Real Time QM Score</a></li>
                                <li class="list-mega"><a class="link-mega" href="https://bit.ly/KualitasSuaraJuni2022" target="_blank">Report Kualitas Suara Agent WFH</a></li>
                                <li class="list-mega"><a class="link-mega" href="https://bit.ly/CXJuni2022" target="_blank">Report CX</a></li>
                                <li class="list-mega"><a class="link-mega" href="" targat="_blank">Achievement Periodik</a></li>
                                <li class="list-mega"><a class="link-mega" href="https://bit.ly/MyShopVoiceJuni2022" target="_blank">Mystery Shop Voice</a></li>
                                <li class="list-mega"><a class="link-mega" href="https://bit.ly/MyShopEmailJuni2022" target="_blank">Mystery Shop e-Mail</a></li>
                                <li class="list-mega"><a class="link-mega" href="https://bit.ly/MyShopSocmedJuni2022" targat="_blank">Mystery Shop SocMed</a></li>
                              </ul>
                          </li>
                          <li class="list-mega dropdown">
                            <button class="dropdown1" style="margin-left: -40px;" onclick="myFunction()" href="#">Job Desk All Unit Tenesa<span class="fa fa-caret-down right"></span></<button>
                              <ul id="myDropdown" class="dropdown-content">
                                <?php foreach ($job as $AllJob) : ?>
                                  <li class="list-mega"><a class="drop" href="<?= base_url('tenesa/job' . "/" . $AllJob['slug']); ?> "><?= $AllJob['title']; ?></a></li>
                                <?php endforeach; ?>
                              </ul>
                          </li>
                        </ul>
                      </div>
                      <div>
                        <div class="row" style="margin-right:500px; margin-top :40px;">
                          <ul class="mega-links">
                            <li class="list-mega"><a class="link-mega drop" href="<?= base_url('roster'); ?>">Roster</a></li>
                            <li class="list-mega"><a class="link-mega drop" href="http://10.194.58.251/pnp-test/index.php" target="_blank">Test PNP</a></li>
                            <?php if (session()->get('level') == 1) { ?>

                              <li class="list-mega"><a class="link-mega drop" style="margin-top :-135px;" href="/dashboard">Dashboard Admin</a></li>
                            <?php } ?>
                            <li class="list-mega dropdown">
                              <button class="dropdown1 drop" onclick="myFunction()" href="#">Team Tenesa<span class="fa fa-caret-down"></span></<button>
                                <ul id="myDropdown" class="dropdown-content">
                                  <li class="list-mega"><a class="drop" href="/team/bandung">Team Bandung</a></li>
                                  <li class="list-mega"><a class="drop" href="/team/semarang">Team Semarang</a></li>
                                </ul>
                            </li>
                            <?php if (session()->get('level') == 1) { ?>
                              <li class="list-mega dropdown">
                                <button class="dropdown1" style="margin-left: -40px; width: 500px;" onclick="myFunction()" href="#">MOM Improvement TENESA<span class="fa fa-caret-down"></span></<button>
                                  <ul id="myDropdown" class="dropdown-content">
                                    <?php foreach ($mom as $AllMom) : ?>
                                      <li class="list-mega"><a class="drop" href="<?= base_url('productknowledge/sop' . "/" . $AllMom['slug']); ?> "><?= $AllMom['title']; ?></a></li>
                                    <?php endforeach; ?>
                                  </ul>
                              </li>
                            <?php } ?>
                          </ul>
                          <!-- <?php if (session()->get('level') == 1) { ?>
                        <div class="row" style="margin-right:60%; margin-top :10px;">
                          <header>Admin</header>
                          <ul class="mega-links" style="margin-right:0%; margin-top :-170px;">
                            <li class="list-mega"><a class="link-mega" href="/dashboard">Dashboard Admin</a></li>
                          </ul>
                        </div>
                      <?php } ?> -->
                        </div>
                      </div>
                </li>

                <!-- <li><a href="<?= base_url('/news-&-event'); ?>" class="nav-link">News & Event</a></li> -->
                <!--                   <li><a href="#about-section" class="nav-link">About</a></li> -->
              </ul>
            </nav>
          </div>
          <div class="">
            <nav class="site-navigation " role="navigation">
              <ul class="nav-links site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="">
                  <a href="#" class="desktop-item nav-link">PRODUK KNOWLEDGE</a>
                  <input type="checkbox" id="showMega">
                  <label for="showMega" class="mobile-item">Produk Knowledge</label>
                  <div class="mega-box">
                    <div class="content scrollable-menu">
                      <div class="row">
                        <ul class="mega-links" style="margin-bottom:1160px;">
                          <header>MUKADIMAH</header>
                          <?php foreach ($mukadimah as $AllMukadimah) : ?>
                            <li class="list-mega"><a class="link-mega" href="<?= base_url('productknowledge/mukadimah' . "/" . $AllMukadimah['slug']); ?> "><?= $AllMukadimah['title']; ?></a></li>
                          <?php endforeach; ?>
                          <li class="list-mega dropdown">
                            <button class="dropdown1" style="margin-left: -40px;" onclick="myFunction()" href="#">Instruksi Kerja<span class="fa fa-caret-down right"></span></<button>
                              <ul id="myDropdown" class="dropdown-content">
                                <?php foreach ($interuksi as $AllInteruksi) : ?>
                                  <li class="list-mega"><a class="drop" href="<?= base_url('productknowledge/interuksi' . "/" . $AllInteruksi['slug']); ?> "><?= $AllInteruksi['title']; ?></a></li>
                                <?php endforeach; ?>
                              </ul>
                          </li>
                          <?php if (session()->get('level') == 1) { ?>
                            <li class="list-mega dropdown">
                              <button class="dropdown1" style="margin-left: -40px;" onclick="myFunction()" href="#">SOP<span class="fa fa-caret-down right"></span></<button>
                                <ul id="myDropdown" class="dropdown-content">
                                  <?php foreach ($sop as $AllSop) : ?>
                                    <li class="list-mega"><a class="drop" href="<?= base_url('productknowledge/sop' . "/" . $AllSop['slug']); ?> "><?= $AllSop['title']; ?></a></li>
                                  <?php endforeach; ?>
                                </ul>
                            </li>
                          <?php } ?>
                          <li class="list-mega dropdown">
                            <button class="dropdown1" style="margin-left: -40px;" onclick="myFunction()" href="#">Standar<span class="fa fa-caret-down right"></span></<button>
                              <ul id="myDropdown" class="dropdown-content">
                                <?php foreach ($standar as $AllStandar) : ?>
                                  <li class="list-mega"><a class="drop" href="<?= base_url('productknowledge/standar' . "/" . $AllStandar['slug']); ?> "><?= $AllStandar['title']; ?></a></li>
                                <?php endforeach; ?>
                              </ul>
                          </li>
                          <li class="list-mega dropdown">
                            <button class="dropdown1" style="margin-left: -40px;" onclick="myFunction()" href="#">Form<span class="fa fa-caret-down right"></span></<button>
                              <ul id="myDropdown" class="dropdown-content">
                                <?php foreach ($form as $AllForm) : ?>
                                  <li class="list-mega"><a class="drop" href="<?= base_url('productknowledge/form' . "/" . $AllForm['slug']); ?> "><?= $AllForm['title']; ?></a></li>
                                <?php endforeach; ?>
                              </ul>
                          </li>
                        </ul>
                      </div>

                      <div class="row">
                        <ul class="mega-links" style="margin-bottom:30px;">
                          <header>TELEPHONY</header>
                          <?php foreach ($telephony as $Alltelephony) : ?>
                            <li class="list-mega"><a class="link-mega" href="<?= base_url('productknowledge/telephony' . "/" . $Alltelephony['slug']); ?> "><?= $Alltelephony['title']; ?></a></li>
                          <?php endforeach; ?>
                        </ul>
                        <ul class="mega-links" style="margin-bottom:1240px;">
                          <header>IMES</header>
                          <?php foreach ($imes as $AllImes) : ?>
                            <li class="list-mega"><a class="link-mega" href="<?= base_url('productknowledge/imes' . "/" . $AllImes['slug']); ?> "><?= $AllImes['title']; ?></a></li>
                          <?php endforeach; ?>
                        </ul>
                      </div>

                      <div class="row">
                        <ul class="mega-links" style="margin-bottom:175px;">
                          <header>INDIHOME</header>
                          <?php foreach ($indihome as $AllIndihome) : ?>
                            <li class="list-mega"><a class="link-mega" href="<?= base_url('productknowledge/indihome' . "/" . $AllIndihome['slug']); ?> "><?= $AllIndihome['title']; ?></a></li>
                          <?php endforeach; ?>
                        </ul>
                        <ul class="mega-links" style="margin-bottom:1240px;">
                          <header>WIFI ID</header>
                          <?php foreach ($wifiid as $AllWifiid) : ?>
                            <li class="list-mega"><a class="link-mega" href="<?= base_url('productknowledge/wifi-id' . "/" . $AllWifiid['slug']); ?> "><?= $AllWifiid['title']; ?></a></li>
                          <?php endforeach; ?>
                        </ul>
                      </div>

                      <div class="row">
                        <ul class="mega-links" style="margin-bottom:65px;">
                          <header>DATIN</header>
                          <?php foreach ($datin as $Alldatin) : ?>
                            <li class="list-mega"><a class="link-mega" href="<?= base_url('productknowledge/datin' . "/" . $Alldatin['slug']); ?> "><?= $Alldatin['title']; ?></a></li>
                          <?php endforeach; ?>
                        </ul>
                        <ul class="mega-links" style="margin-bottom:1480px;">
                          <header>Lain-lain</header>
                          <?php foreach ($lain as $Alllain) : ?>
                            <li class="list-mega"><a class="link-mega" href="<?= base_url('productknowledge/lain' . "/" . $Alllain['slug']); ?> "><?= $Alllain['title']; ?></a></li>
                          <?php endforeach; ?>
                        </ul>
                      </div>

                      <div class="row">
                        <ul class="mega-links" style="margin-bottom:1240px;">
                          <header>Fault Handling</header>
                          <?php foreach ($fault_handling as $AllFhandling) : ?>
                            <li class="list-mega dropdown">
                              <button class="dropdown1" type="button"><?= $AllFhandling['name_subproduct']; ?><span class="fa fa-caret-down right"></span></<button>
                                <ul class="dropdown-content">
                                  <?php foreach ($fhandling_All as $AllFHindihome) : ?>
                                    <?php if ($AllFhandling['id_subproduct'] == $AllFHindihome['id_subproduct']) { ?>
                                      <li class="list-mega"><a class="drop" href="<?= base_url('productknowledge/fault-handling' . "/" . $AllFHindihome['name_subproduct'] . "/" . $AllFHindihome['slug']); ?> "><?= $AllFHindihome['title']; ?></a></li>
                                    <?php } ?>
                                  <?php endforeach; ?>
                                </ul>
                            </li>
                          <?php endforeach; ?>
                        </ul>
                      </div>
                      <div class="row">
                        <ul class="mega-links" style="margin-bottom:1240px;">
                          <header>Panduan Solusi</header>
                          <?php foreach ($panduan_solusi as $AllPsolusi) : ?>
                            <li class="list-mega dropdown">
                              <button class="dropdown1" type="button"><?= $AllPsolusi['name_subproduct']; ?><span class="fa fa-caret-down right"></span></<button>
                                <ul class="dropdown-content">
                                  <?php foreach ($panduanS_All as $AllSubPanduan) : ?>
                                    <?php if ($AllPsolusi['id_subproduct'] == $AllSubPanduan['id_subproduct']) { ?>
                                      <li class="list-mega"><a class="drop" href="<?= base_url('productknowledge/panduan-solusi' . "/" . $AllSubPanduan['name_subproduct'] . "/" . $AllSubPanduan['slug']); ?> "><?= $AllSubPanduan['title']; ?></a></li>
                                    <?php } ?>
                                  <?php endforeach; ?>
                                </ul>
                            </li>
                          <?php endforeach; ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </nav>
          </div>

          <!-- <div class=" text-center mx-5">
            <h1 class="m-0 site-logo"><a href="<?= base_url('home'); ?>" style="text-shadow: 1px 1px 3px #000000">Home.</a></h1>
          </div> -->
          <div class="text-left">
            <nav class="site-navigation " role="navigation">
              <ul class="nav-links site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <!--                 <li><a href="#portfolio-section" class="nav-link">Link Web</a></li> -->
                <li>
                  <a href="#" class="desktop-item nav-link">SUPPORTING APPS</a>
                  <input type="checkbox" id="showMega">
                  <label for="showMega" class="mobile-item">SUPPORTING APPS</label>
                  <div class="mega-box">
                    <div class="content scrollable-menu">
                      <div class="row">
                        <header>Data AM</header>
                        <ul class="mega-links" style="margin-top :-200px;">
                          <li class="list-mega"><a class="link-mega" href="http://des.telkom.co.id/dashboard/index.php/support_system/search_am" target="_blank">Link AM DES</a></li>
                          <li class="list-mega"><a class="link-mega" href="https://docs.google.com/spreadsheets/d/1nWUfjFhAedhlPa-UV1gLbWz4a19lgiOGt28nwQEHxfw/edit#gid=0" target="_blank">Link AM DGS</a></li>
                          <li class="list-mega"><a class="link-mega" href="http://10.1.64.66/index.php/search/customer?m=b" target="_blank">Link AM DBS</a></li>
                        </ul>
                      </div>
                      <div class="row">
                        <header>Link Aplikasi</header>
                        <ul class="mega-links">
                          <li class="list-mega"><a class="link-mega" href="http://nossa.telkom.co.id" target="_blank">Nossa</a></li>

                          <li class="list-mega"><a class="link-mega" href="https://acs-ibooster.telkom.co.id/index.php/login" target="_blank">ACS I-Booster</a></li>
                          <li class="list-mega"><a class="link-mega" href="http://10.60.165.60/index.php?idx=0" target="_blank">E-Payment</a></li>
                          <li class="list-mega"><a class="link-mega" href="http://ncxtools.telkom.co.id/login" target="_blank">NCX Tools</a></li>
                          <li class="list-mega"><a class="link-mega" href=" http://10.62.8.132/" target="_blank">MRTG 1</a></li>
                          <li class="list-mega"><a class="link-mega" href="http://10.62.8.135/" targat="_blank">MRTG 2</a></li>
                          <li class="list-mega"><a class="link-mega" href="http://10.62.8.136/" target="_blank">MRTG 3</a></li>
                          <!-- </ul>
                      </div>
                      <div class="row">
                        <ul class="mega-links" style="margin-top:30px;"> -->
                          <li class="list-mega"><a class="link-mega" href="https://10.194.12.18/Orion/Login.aspx?ReturnUrl=%2f" target="_blank">Solarwind</a></li>
                          <li class="list-mega"><a class="link-mega" href="https://crm.on5.co.id/td5cc/login" target="_blank">ON5</a></li>
                          <li class="list-mega"><a class="link-mega" href="http://10.194.176.95:3000/d/WallboardTDSCC/wallboard-tdscc-on5-new-ver?orgId=1&refresh=30s&var-Channel=2" target="_blank">Dashboard ON5</a></li>
                          <li class="list-mega"><a class="link-mega" href="https://on4.infomedia.co.id/oct_tdscc/" target="_blank">ON4</a></li>
                          <li class="list-mega"><a class="link-mega" href="http://10.60.175.132/ideas_new/" target="_blank">IDEAS</a></li>
                          <li class="list-mega"><a class="link-mega" href="https://ott.upoint.co.id/subscriptions" target="_blank">Dashboard OTT Upoint</a></li>
                          <li class="list-mega"><a class="link-mega" href="http://10.62.170.172/datek_center" target="_blank">Datek SBC</a></li>
                          <li class="list-mega"><a class="link-mega" href="http://10.194.58.254/apps/tridys/" target="_blank">Tridys</a></li>
                        </ul>
                      </div>
                      <div class="row">
                        <ul class="mega-links" style="margin-top:30px;">
                          <li class="list-mega"><a class="link-mega" href="https://telkomcare.telkom.co.id/" target="_blank">Telkom Care</a></li>
                          <li class="list-mega"><a class="link-mega" href="http://10.194.194.119/wallboard_c4/app/wallboard.php?lay=C4DC&slide=1" target="_blank">Wallboard Indihome</a></li>
                          <li class="list-mega"><a class="link-mega" href="http://10.194.194.119/wallboard_c4/app/wallboard.php?lay=C4DC&slide=3" target="_blank">Wallboard POTS</a></li>
                          <li class="list-mega"><a class="link-mega" href="http://10.194.194.119/wallboard_c4/app/wallboard.php?lay=C4DC&slide=2" target="_blank">Wallboard Datin</a></li>
                          <li class="list-mega"><a class="link-mega" href="http://10.194.194.119/wallboard_c4/app/wallboard.php?lay=C4%20IMES&slide=1" target="_blank">Wallboard IMES</a></li>
                          <li class="list-mega"><a class="link-mega" href="http://mycx.telkom.co.id" target="_blank">MyCx</a></li>
                          <li class="list-mega"><a class="link-mega" href="http://10.60.170.94/" target="_blank">TIBS</a></li>
                          <li class="list-mega"><a class="link-mega" href="https://telkom.center/" target="_blank">Telkom Center</a></li>
                          <!-- </ul>
                      </div>
                      <div class="row">
                        <ul class="mega-links" style="margin-top:30px;"> -->
                          <li class="list-mega"><a class="link-mega" href="http://10.194.194.119/wallboard_c4/app/wallboard.php?lay=C4DC&slide=4" target="_blank">Wallboard Global</a></li>
                          <li class="list-mega"><a class="link-mega" href="https://sdms.spbu.id/" target="_blank">SDMS</a></li>
                          <li class="list-mega"><a class="link-mega" href="https://ebis.mysiis.io/#/" target="_blank">Mysiis</a></li>
                          <li class="list-mega"><a class="link-mega" href="https://union.wifi.id/apose/" target="_blank">APOSE</a></li>
                          <li class="list-mega"><a class="link-mega" href="https://monita.telkom.co.id/" target="_blank">Monita</a></li>
                          <li class="list-mega"><a class="link-mega" href="https://gladius.telkom.co.id/" target="_blank">Gladius</a></li>
                        </ul>
                      </div>
                      <div class="row">
                        <header>Panduan Aplikasi</header>
                        <br>
                        <ul class="mega-links" style="margin-top :-1px;">
                          <?php foreach ($panduanaplikasii as $AllPanduanAplikasi) : ?>
                            <li class="list-mega"><a class="link-mega" href="<?= base_url('supportapp/panduanaplikasi' . "/" . $AllPanduanAplikasi['slug']); ?> "><?= $AllPanduanAplikasi['title']; ?></a></li>
                          <?php endforeach; ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- <li>
                  <a href="#clients-section" class="nav-link">Ability Test</a>
                  <input type="checkbox" id="showMega">
                  <label for="showMega" class="mobile-item">2Ability Test</label>
                  <div class="mega-box">
                    <div class="content">
                      <div class="row">
                        <header>Test</header>
                        <ul class="mega-links">
                          <li class="list-mega"><a class="link-mega" href="#">Pre Test</a></li>
                          <li class="list-mega"><a class="link-mega" href="#">Post Test</a></li>
                          <li class="list-mega"><a class="link-mega" href="#">Test PNP</a></li>
                        </ul>
                      </div>
                </li> -->
                <!-- <li>
                  <a href="#clients-section" class="nav-link">Profile Team</a>
                  <input type="checkbox" id="showMega">
                  <label for="showMega" class="mobile-item">2Ability Test</label>
                  <div class="mega-box">
                    <div class="content">
                      <div class="row">
                        <header>Profil Team</header>
                        <ul class="mega-links">
                          <li class="list-mega"><a class="link-mega" href="#">Bandung</a></li>
                          <li class="list-mega"><a class="link-mega" href="<?= base_url('/team/semarang'); ?>">Semarang</a></li>
                        </ul>
                      </div>
                </li> -->
                <!--   
                                  <li><a href="#contact-section" class="nav-link">Contact</a></li> -->

              </ul>
            </nav>
            <div class="d-inline-block d-lg-none" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>
          </div>
          <div class=" text-center mx-3 mb-0">
            <h4 class="m-0 site-logo"><a href="<?= base_url('auth/logout'); ?>" style="text-shadow: 1px 1px 3px #000000">Logout<span class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></a></h4>
          </div>
        </div>
      </div>
      <!-- <div class="text-right" style="margin-right :10px;">
        <a href="<?= base_url('auth/logout'); ?>" class="social-circle"><span class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></span></a>
      </div> -->
    </header>

    <?= $this->renderSection('content'); ?>

    <footer class="site-section bg-dark footer ">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-8">
            <h3 class="footer-title">Telkom Enhanced Enterprise Solution Assurance Semarang</h3>
            <div class="place">
              <span class="icon-map-marker" style="color: #ff3c3c;"></span>
              <span class="text">Plasa Telkom Group Pahlawan Jl.Pahlawan No.10, Pleburan, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50241</span>
            </div>
            <div class="phone">
              <span class="icon-phone" style="color: #ff3c3c;"></span>
              <span class="text">0-800-1-835566</span>
            </div>
            <div class="phone">
              <span class="icon-whatsapp" style="color: #ff3c3c;"></span>
              <span class="text">081283235566</span>
            </div>
            <div class="email">
              <span class="icon-envelope" style="color: #ff3c3c;"></span>
              <span class="text">tenesa@telkom.co.id</span>
            </div>
            <br>
            <h3 class="footer-title">Telkom Enhanced Enterprise Solution Assurance Bandung</h3>
            <div class="place">
              <span class="icon-map-marker" style="color: #ff3c3c;"></span>
              <span class="text">Gedung GMP Infomedia TBB Jl. Terusan Buah Batu No.33, Batununggal, Kec. Bandung Kidul, Kota Bandung, Jawa Barat 40266</span>
            </div>
            <div class="phone">
              <span class="icon-phone" style="color: #ff3c3c;"></span>
              <span class="text">0-800-1-835566</span>
            </div>
            <div class="phone">
              <span class="icon-whatsapp" style="color: #ff3c3c;"></span>
              <span class="text">081283235566</span>
            </div>
            <div class="email">
              <span class="icon-envelope" style="color: #ff3c3c;"></span>
              <span class="text">tenesa@telkom.co.id</span>
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <h4 class="footer-title">Follow Me</h4>
              <a href="http://www.facebook.com/tenesatelkom" target="_blank" class="social-circle"><span class="icon-facebook" style="color: #ff3c3c;"></span></a>
              <a href="https://instagram.com/tenesasemarang?igshid=YmMyMTA2M2Y=" class="social-circle"><span class="icon-instagram" style="color: #ff3c3c;"></span></a>
              <a href="http://www.twitter.com/tenesa_telkom" target="_blank" class="social-circle"><span class="icon-twitter" style="color: #ff3c3c;"></span></a>
              <a href="mailto:tenesa@telkom.co.id" target="_blank" class="social-circle"><span class="icon-envelope" style="color: #ff3c3c;"></span></a>
            </div>
          </div>
        </div>
        <div class="row mt-100">
          <div class="col-12 text-center">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>
                document.write(new Date().getFullYear());
              </script></i> by <a href="#" target="_blank" style="color:#FF3C3C;">TENESA</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
  </div>
  </div>
  </footer>

  </div> <!-- .site-wrap -->

  <script src="<?= base_url('front_end/js/jquery-3.3.1.min.js'); ?>"></script>
  <script src="<?= base_url('front_end/js/jquery-ui.js'); ?>"></script>
  <script src="<?= base_url('front_end/js/popper.min.js'); ?>"></script>
  <script src="<?= base_url('front_end/js/bootstrap.min.js'); ?>"></script>
  <script src="<?= base_url('front_end/js/owl.carousel.min.js'); ?>"></script>
  <script src="<?= base_url('front_end/js/jquery.easing.1.3.js'); ?>"></script>
  <script src="<?= base_url('front_end/js/aos.js'); ?>"></script>
  <script src="<?= base_url('front_end/js/jquery.fancybox.min.js'); ?>"></script>
  <script src="<?= base_url('front_end/js/jquery.sticky.js'); ?>"></script>
  <script src="<?= base_url('front_end/js/isotope.pkgd.min.js'); ?>"></script>
  <script src="<?= base_url('front_end/fontawesome/js/main.js'); ?>"></script>
  <script src="<?= base_url('front_end/js/main.js'); ?>"></script>
  <script src="<?= base_url('front_end/js/zoom.js'); ?>"></script>

  <script>
    $(document).ready(function() {

      load_data();

      function load_data(query) {
        $.ajax({
          url: "<?php echo site_url('Roster/fetch') ?>",
          method: "POST",
          data: {
            query: query
          },
          success: function(data) {
            $('#result').html(data);
          }
        })
      }

      $('#search_text').keyup(function() {
        var search = $(this).val();
        if (search != '') {
          load_data(search);
          console.log(load_data(search));
        } else {
          load_data();
        }
      });

    });

    // $('.md-trigger').trigger('click');

    $('.portfolio-menu ul li').click(function() {
      $('.portfolio-menu ul li').removeClass('active');
      $(this).addClass('active');

      var selector = $(this).attr('data-filter');
      $('.portfolio-item').isotope({
        filter: selector
      });
      return false;
    });
    $(document).ready(function() {
      var popup_btn = $('.popup-btn');
      popup_btn.magnificPopup({
        type: 'image',
        gallery: {
          enabled: true
        }
      });
    });
    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
    $('.dropdown1').on("click", function(e) {
      // "this" in $(this) --> means the current clicked element
      // .find() will search the CHILDREN of the clicked element with the class "sub-nav"
      // $(this).closest('ul').nextAll('.dropdown-content').find(".dropdown-content").slideToggle("100");
      // $(".dropdown-content").not($(this).next(".dropdown-content")).fadeOut()
      // $(this).next(".dropdown-content").fadeToggle().toggleClass("isOpen");
      $(this).find(".dropdown-content").slideToggle("100");
      $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
      $(this).find(".dropdown-subcontent").slideToggle("100");
      // e.preventDefault();
      e.stopPropagation();

    });

    $('.subcontent').on("click", function(e) {
      // "this" in $(this) --> means the current clicked element
      // .find() will search the CHILDREN of the clicked element with the class "sub-nav"
      // $(this).next('ul').toggle();
      $(this).find(".dropdown-subcontent").slideToggle("100");
      $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
      e.stopPropagation();
    });

    $(".dropdown-subcontent").click(function(e) {
      $(".dropmenu").stop();
      e.stopPropagation();
    });
  </script>



</body>

</html>