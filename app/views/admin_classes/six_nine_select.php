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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    </ul>
  </nav>
  <!-- /.navbar -->

  
  <?php 

  include "admin_sidebar.php";
  ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <!-- Horizontal Form -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Select a Class</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form class="form-horizontal" action="<?=PROOT?>admin_classes/view_class" method="post">
        <div class="card-body">
          <div class="form-group">
            <label class="col-sm-2 col-form-label">Select the Class</label>
            <div class="col-sm-10">
              <select name="class_id" class="form-control select1" style="width: 100%;">
              <?php foreach ($this->classes as $class): ?>
                   <option><?= $class->class_id ?></option>
              <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="offset-sm-2 col-sm-10">
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" name="csubmit" class="btn btn-info float-right">Select</button>
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->
  </section>
  </div>
  <!-- /.content-wrapper -->

<?php $this->end(); ?>
