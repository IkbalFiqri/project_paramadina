<?= form_open(base_url('Login/process'));
echo csrf_field();
$session     = \Config\Services::session();
?>

<!-- <input type="text" name="username" placeholder="username">
<input type="password" name="password" placeholder="password">
<button type="submit">Login</button> -->

<!-- <?php
if (session()->getFlashdata('error')) { ?>
  <div class="app-card alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true" onclick="this.parentElement.style.display='none';">&times;</button>
    <?php echo session()->getFlashdata('error'); ?>
  </div>
<?php }
?> -->
<head>
<link id="theme-style" rel="stylesheet" href="<?= base_url('assets/css/login.css') ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="app">

    <section class="">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">

                    <div class="card">
                        <div class="card-body p-5 text-center">
                            <h3 class="">Login Admin</h3>
                            <p class="mb-3">Paramadina Bogor Homeschooling</p>

                            <?php
                            if (session()->getFlashdata('error')) { ?>
                                <div class="app-card alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true" onclick="this.parentElement.style.display='none';">&times;</button>
                                    <?php echo session()->getFlashdata('error'); ?>
                                </div>
                            <?php }
                            ?>
                            <?php
                            if (session()->getFlashdata('success')) { ?>
                                <div class="app-card alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true" onclick="this.parentElement.style.display='none';">&times;</button>
                                    <?php echo session()->getFlashdata('success'); ?>
                                </div>
                            <?php }
                            ?>

                                <div class="form-outline mb-3">
                                    <label class="form-label" for="username">Username</label>
                                    <input type="text" id="username" name="username" class="form-control form-control" />
                                </div>

                                <div class="form-outline mb-3">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" id="lihatpassword" name="password" class="form-control form-control" />
                                </div>

                                <!-- Checkbox -->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check d-flex justify-content-start mb-4">
                                            <input class="form-check-input" type="checkbox" onclick="fungsipassword()" />
                                            <label class="form-check-label" for="form1Example3"> Lihat Password </label>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-block" type="submit">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<?= form_close(); ?>
<?php //require_once 'admin/layout/footer.php'; ?>
<!-- SWEETALERT -->
<?php if ($session->getFlashdata('sukses')) { ?>
  <script>
    swal("Berhasil", "<?= $session->getFlashdata('sukses'); ?>", "success")
  </script>
<?php } ?>

<?php if (isset($error)) { ?>
  <script>
    swal("Oops...", "<?= strip_tags($error); ?>", "warning")
  </script>
<?php } ?>

<?php if ($session->getFlashdata('warning')) { ?>
  <script>
    swal("Oops...", "<?= $session->getFlashdata('warning'); ?>", "warning")
  </script>
<?php } ?>

<?php if (session('msg')) : ?>
  <div class="alert alert-info alert-dismissible">
    <?= session('msg') ?>
    <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
  </div>
<?php endif ?>

<script>
    function fungsipassword() {
        var x = document.getElementById("lihatpassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

<script>
    document.getElementById("username").focus();
</script>