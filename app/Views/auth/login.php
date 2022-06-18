<?= $this->extend('auth/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <img class="img-fluid img-thumbnail" src="<?= base_url('front_end/images/TENESA.png'); ?>" width="200" height="180" style=" margin-bottom: 10px;">

                                    <h1 class="h4 text-gray-900 mb-4">Welcome To TENESA!</h1>
                                </div>

                                <!-- Pesan Validasi Error -->
                                <?php
                                $errors = session()->getFlashdata('errors');
                                if (!empty($errors)) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <ul>
                                            <?php foreach ($errors as $error) : ?>
                                                <li><?= esc($error) ?></li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                <?php } ?>
                                <?php if (session()->getFlashdata('pesan')) {
                                    echo '<div class="alert alert-success" role="alert">';
                                    echo session()->getFlashdata('pesan');
                                    echo '</div>';
                                }
                                ?>

                                <?= form_open('auth/cek_login', array(
                                    'class' => 'user',
                                    'role' => 'search'
                                )); ?>
                                <div class="form-group">
                                    <input type="number" name="user_parner" class="form-control form-control-user" id="user_parner" placeholder="Enter number parner...">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck" onclick="myFunction()">
                                        <label class="custom-control-label" for="customCheck">Show
                                            Password</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                <?= form_close(); ?>
                                <hr>
                                <!-- <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/register'); ?>">Create an Account!</a>
                                </div> -->
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <script>
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function() {
                    $(this).remove();
                })
            }, 3000);

            function myFunction() {
                var x = document.getElementById("password");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
        <?= $this->endSection(''); ?>