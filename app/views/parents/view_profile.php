<?php $this->setSiteTitle('AMCC SMS | Register User'); ?>

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

  include "student_sidebar.php";
  ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <?= '<img class="profile-user-img img-fluid img-circle"
                       src="data:image;base64,'.base64_encode($this->student->stu_photo).'"
                       alt="User profile picture">' ?>
                </div>

                <h3 class="profile-username text-center"><?= $this->student->stu_namewi ?></h3>

                <p class="text-muted text-center"><?= $this->student->stu_gender ?> Student</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>User Name</b> <a class="float-right"><?= $this->student->stu_username ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Grade</b> <a class="float-right"><?= $this->student->stu_grade ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Class</b> <a class="float-right"><?= $this->student->stu_class ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Class teacher</b> <a class="float-right"><?= $this->teacher->tch_namewi ?></a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Parent Information</strong>

                <p class="text-muted">
                  <strong>Name :</strong> <?= $this->parentis->pr_namewi ?>
                </p>
                <p class="text-muted">
                  <strong>Relationship :</strong> <?= $this->parentis->pr_relationship ?>
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>

                <p class="text-muted"><?= $this->student->stu_address ?></p>

                <hr>

                <strong><i class="fas fa-email-alt mr-1"></i> Email</strong>

                <p class="text-muted"><?= $this->student->stu_email ?></p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Contacts</strong>

                <p class="text-muted"><?= $this->student->stu_contact ?></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#other" data-toggle="tab">Other Details</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="other">
                    <strong>Full Name</strong>

                    <p class="text-muted"> <?= $this->student->stu_fullname ?> </p>

                    <hr>

                    <strong>NIC</strong>

                    <p class="text-muted"><?= $this->student->stu_NIC ?></p>

                    <hr>

                    <strong>Birthday</strong>

                    <p class="text-muted"><?= $this->student->stu_birthday ?></p>

                    <hr>

                    <strong>Previous School</strong>

                    <p class="text-muted"><?= $this->student->stu_pschool ?></p>

                    <hr>

                    <strong>Registered Day</strong>

                    <p class="text-muted"><?= $this->student->stu_regday ?></p>

                    <hr>

                    <strong>Transport</strong>

                    <p class="text-muted"><?= $this->student->stu_transport ?></p>

                    <hr>

                    <strong>Special Disieses</strong>

                    <p class="text-muted"><?= $this->student->stu_sdissices ?></p>

                    <hr>

                    <strong>Blood Group</strong>

                    <p class="text-muted"><?= $this->student->stu_bloodgrp ?></p>

                    <hr>

                    <strong>Notes</strong>

                    <p class="text-muted"><?= $this->student->stu_descrip ?></p>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->end(); ?>
