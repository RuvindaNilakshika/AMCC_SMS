<?php $this->setSiteTitle('AMCC SMS | Extra-Curricular Activities'); ?>

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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
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
            <h1>Extra-Curricular Activities</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Extra-Curricular Activities</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Extra-Curricular Activities</h3>

              </div>
            <!-- /.card-header -->
            <div class="card-body">

              <strong><i class="fas fa-email-alt mr-1"></i> Sports</strong>

              <p class="text-muted"><?= $this->extracurricular->sports ?></p>

              <hr>

              <strong><i class="fas fa-email-alt mr-1"></i> Aesthetic</strong>

              <p class="text-muted"><?= $this->extracurricular->aesthetic ?></p>

              <hr>

              <strong><i class="fas fa-email-alt mr-1"></i> Clubs</strong>

              <p class="text-muted"><?= $this->extracurricular->clubs ?></p>

              <hr>

              <strong><i class="fas fa-pencil-alt mr-1"></i> Societies</strong>

              <p class="text-muted"><?= $this->extracurricular->societies ?></p>

              <hr>

              <strong><i class="fas fa-pencil-alt mr-1"></i> Prefect</strong>

              <p class="text-muted"><?= $this->extracurricular->prefect ?></p>

              <hr>

              <strong><i class="far fa-file-alt mr-1"></i> Other</strong>

              <p class="text-muted"><?= $this->extracurricular->other ?></p>

              <hr>

              <strong><i class="far fa-file-alt mr-1"></i> Achivements</strong>

              <p class="text-muted"><?= $this->extracurricular->achivements ?></p>
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->end(); ?>