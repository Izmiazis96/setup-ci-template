<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('assets/template-admin/vendors/mdi/css/materialdesignicons.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/template-admin/vendors/base/vendor.bundle.base.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/template-admin/css/style.css')?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('assets/template-admin/images/favicon.png')?>" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-center py-5 px-4 px-sm-5">
              <div class="brand-logo">
              <img src="<?= base_url('assets/template-admin/images/logo-tempo.png')?>" alt="logo" style="width:300px;">
              </div>
              <h4 class="font-weight-light">Login Sistem</h4>
              <!-- message -->
              <?php if ($this->session->flashdata('pesan')) { ?>
                      <div class="container-fluid">
                          <div class="alert alert-success alert-pesan">
                              <span><?= $this->session->flashdata('pesan'); ?></span>
                          </div>
                      </div>
              <?php } ?>
              <?php if ($this->session->flashdata('error')) { ?>
                      <div class="container-fluid">
                          <div class="alert alert-danger alert-pesan">
                              <span><?= $this->session->flashdata('error'); ?></span>
                          </div>
                      </div>
              <?php } ?>
              <!-- end message -->
              <form class="pt-3" action="<?= site_url('login/prosesLogin')?>" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="login" type="submit">Sign In</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                </div>
                
                <div class="text-center mt-4 font-weight-light">
                  <!-- Don't have an account? <a href="register.html" class="text-primary">Create</a> -->
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= base_url('assets/template-admin/vendors/base/vendor.bundle.base.js')?>"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?= base_url('assets/template-admin/js/off-canvas.js')?>"></script>
  <script src="<?= base_url('assets/template-admin/js/hoverable-collapse.js')?>"></script>
  <script src="<?= base_url('assets/template-admin/js/template.js')?>"></script>
  <!-- endinject -->
  <script>
    $(function() {
        window.setTimeout(function() {
            $('.alert-pesan').hide(300);
        }, 3000);
    });
  </script>
</body>

</html>
