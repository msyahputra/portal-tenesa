<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<header class="masthead-conten-list">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-left">
                <!-- <h1 class="font-weight-light" style="color:#FF3C3C;text-shadow: 2px 2px 4px #000000;"></h1> -->
                <!--             <p class="lead">A great starter layout for a landing page</p> -->
            </div>
        </div>
    </div>
</header>
<br>
<!--  -->
<div class="container">
    <div class="title d-flex">
        <h4 class="h3 mt-1">Roster</h4>
        <div class="input-group" style="margin-left:320px;">
            <div id="navbar-search-autocomplete" class="form-outline">
                <input type="search" id="search_text" class="form-control search" name="search_text" style="width:300px;" placeholder="Search" />
            </div>
        </div>
    </div>
    <hr>
    <div class="row" id="result">

    </div>
    <hr>
    <?= $pager_roster->links('roster', 'roster_paganation') ?>
</div>
<br>
</div> <!-- .site-wrap -->
<?= $this->endSection(''); ?>