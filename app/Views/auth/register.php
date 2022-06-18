<?= $this->extend('auth/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
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

                                <?= form_open('auth/save_register', array(
                                    'class' => 'user',
                                    'role' => 'search'
                                )); ?>
                                <div class="form-group">
                                    <input type="number" name="user_parner" class="form-control form-control-user" id="user_parner" placeholder="Number Parner">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="full_name" class="form-control form-control-user" id="full_name" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="jabatan" class="form-control form-control-user" id="jabatan" placeholder="Position">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="email" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="no_hp" class="form-control form-control-user" id="no_hp" placeholder="Number Hp">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="repassword" class="form-control form-control-user" id="repassoword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
                                <?= form_close(); ?>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/login'); ?>">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
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
</script>
<?= $this->endSection(''); ?>