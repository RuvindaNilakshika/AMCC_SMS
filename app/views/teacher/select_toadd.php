<?php $this->setSiteTitle('AMCC SMS | Select Student'); ?>

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
  <!-- Main content -->
  <section class="content">
    <!-- Horizontal Form -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Select the Student Id</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form class="form-horizontal" action="<?=PROOT?>teacher/add_extracurricular/" method="post">
        <div class="card-body">
          <?php foreach ($this->teacher as $teach): ?>
            <input type="hidden" name="id" class="form-control" value="<?= $teach->db_id ?>">
          <?php endforeach; ?>
          <div class="form-group">
            <label class="col-sm-2 col-form-label">Select the Student<br>(enter the username)</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="stuId" placeholder="12356_ravi">
            </div>
          </div>
          <div class="form-group">
            <div class="offset-sm-2 col-sm-10">
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" name="addstsubmit" class="btn btn-info float-right">Select</button>
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->
  </section>
  </div>
  <!-- /.content-wrapper -->

<?php $this->end(); ?>
