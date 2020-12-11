<?php $this->setSiteTitle('AMCC SMS | Add Extra-Curricular Activity'); ?>

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

  include "teacher_sidebar.php";
  ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Extra-Curricular Activity</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Add Extra-Curricular Activity Form</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
              <form role="form" action="<?=PROOT?>teacher/add_extracurricular" method="post">
                <div class="card-body">
                    <input type="hidden" name="year" class="form-control" id="exampleInputEmail1" placeholder="Ex: 2020">
                  <div class="form-group">
                  <label>Sport</label>
                  <select name="section" class="form-control select2" style="width: 100%;">
                    <option>Athletic</option>
                    <option>Vollyball</option>
                    <option>Football</option>
                    <option>Cricket</option>
                    <option>Badminton</option>
                    <option>Netball</option>
                    <option>Chess</option>
                    <option>Carrom</option>
                    <option>No Sport</option>
                  </select>
                  <div class="form-group">
                  <label>Aesthetic</label>
                  <select name="Grade" class="form-control select2" style="width: 100%;">
                    <option>Music</option>
                    <option>Drama</option>
                    <option>Dancing</option>
                    <option>Painting</option>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Clubs</label>
                    <input type="text" name="confpassword" class="form-control" id="exampleInputPassword1" placeholder="Ex: 6D_20">
                  </div>
                  <div class="form-group">
                  <label>Prefect</label>
                  <select name="class_section" class="form-control select2" style="width: 100%;">
                    <option>No</option>
                    <option>Junior Prefect</option>
                    <option>Senior Prefect</option>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Other</label>
                    <input type="text" name="confpassword" class="form-control" id="exampleInputPassword1" placeholder="Ex: 6D_20">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Achivements</label>
                    <input type="text" name="confpassword" class="form-control" id="exampleInputPassword1" placeholder="Ex: 6D_20">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="">
                  <button type="submit" name="csubmit" class="btn btn-primary">Add</button>
                </div>
              </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

<?php $this->end(); ?>
