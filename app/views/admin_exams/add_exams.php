<?php $this->setSiteTitle('AMCC SMS | Add Exam'); ?>

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
  //require_once(PROOT . 'admin/admin_sidebar.php');
  include "admin_sidebar.php";
  ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Exam</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Add Exam Form</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
              <form role="form" action="<?=PROOT?>admin_exams/add_exams" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Grade</label>
                    <input type="text" name="grade" class="form-control" id="exampleInputPassword1" placeholder="Ex: 6">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Term</label>
                    <input type="text" name="term" class="form-control" id="exampleInputPassword1" placeholder="Ex: 2">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Year</label>
                    <input type="text" name="year" class="form-control" id="exampleInputPassword1" placeholder="Ex: 2020">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Exam Id</label>
                    <input type="text" name="exam_id" class="form-control" id="exampleInputPassword1" placeholder="Ex: exam_6120">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="register" class="btn btn-primary">Add</button>
                </div>
              </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

<?php $this->end(); ?>
