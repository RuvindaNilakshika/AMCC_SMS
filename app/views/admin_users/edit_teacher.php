<?php $this->setSiteTitle('AMCC SMS | Edit Teacher'); ?>

<?php $this->start('head'); ?>

  
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  
  <?php 

  include "admin_sidebar.php";
  ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Teacher</h1>
          </div>
          <div ><?=$this->displayErrors ?></div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit Teacher Form</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
            <form role="form" action="<?=$this->postAction?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                        <label>Registration No</label>
                        <input type="text" name="regno" class="form-control" value="<?= $this->teacher->tch_regno ?>">
                  </div>
                  <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" name="fullname" value="<?= $this->teacher->tch_fullname ?>">
                  </div>
                  <div class="form-group">
                        <label>Name with initials</label>
                        <input type="text" class="form-control" name="namewi" value="<?= $this->teacher->tch_namewi ?>">
                  </div>
                  <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" value="<?= $this->teacher->tch_username ?>">
                  </div>
                  <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="<?= $this->teacher->tch_email ?>">
                  </div>
                  <div class="form-group">
                        <label>NIC</label>
                        <input type="text" class="form-control" name="nic" value="<?= $this->teacher->tch_nic ?>">
                  </div>
                  <div class="form-group">
                        <label>Gender</label>
                        <input type="text" class="form-control" name="gender" value="<?= $this->teacher->tch_gender ?>">
                  </div>
                  <div class="form-group">
                        <label>Birthday</label>
                        <input type="text" class="form-control" name="birthday" value="<?= $this->teacher->tch_birthday ?>">
                  </div>
                  <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" value="<?= $this->teacher->tch_address ?>">
                  </div>
                  <div class="form-group">
                        <label>Contact</label>
                        <input type="text" class="form-control" name="contact" value="<?= $this->teacher->tch_contact ?>">
                  </div>
                  <div class="form-group">
                        <label>Privious Shool</label>
                        <input type="text" class="form-control" name="prevsch" value="<?= $this->teacher->tch_pschool ?>">
                  </div>
                  <div class="form-group">
                        <label>Job Started Date</label>
                        <input type="text" class="form-control" name="jstartdate" value="<?= $this->teacher->tch_jobstarteddate ?>">
                  </div>
                  <div class="form-group">
                        <label>Resgistered day</label>
                        <input type="text" class="form-control" name="regdate" value="<?= $this->teacher->tch_regday ?>">
                  </div>
                  <div class="form-group">
                        <label>Qualifications</label>
                        <input type="text" class="form-control" name="qualifications" value="<?= $this->teacher->tch_qualifications ?>">
                  </div>
                  <div class="form-group">
                        <label>Subjects</label>
                        <input type="text" class="form-control" name="subjects" value="<?= $this->teacher->tch_subjects ?>">
                  </div>
                  <div class="form-group">
                        <label>Class</label>
                        <input type="text" class="form-control" name="class" value="<?= $this->teacher->tch_class ?>">
                  </div>
                  <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="descrip" value="<?= $this->teacher->tch_descrip ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="photo" id="exampleInputFile" value="<?= $this->teacher->tch_photo ?>">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="tchsubmit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->end(); ?>