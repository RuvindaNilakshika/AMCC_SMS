<?php $this->setSiteTitle('AMCC SMS | Add Parent'); ?>

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
            <h1>Add Parent</h1>
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
          <h3 class="card-title">Add Parent Form</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
            <form role="form" action="<?=$this->postAction?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                        <label>Name with initials</label>
                        <input name="namewi" type="text" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Username</label>
                        <input name="username" type="text" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="email" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>NIC</label>
                        <input name="nic" type="text" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Address</label>
                        <input name="address" type="text" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Contact</label>
                        <input name="contact" type="text" class="form-control" placeholder="contact 01">
                  </div>
                  <div class="form-group">
                        <label>Students</label>
                        <input name="students" type="text" class="form-control" placeholder="username01, username02">
                  </div>
                  <div class="form-group">
                  <label>Relationship</label>
                  <select name="ralationship" class="form-control select2" style="width: 100%;">
                    <option>Mother</option>
                    <option>Father</option>
                  </select>
                  </div>
                  <div class="form-group">
                        <label>Description</label>
                        <input name="descrip" type="text" class="form-control" placeholder="Enter ...">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="psubmit" class="btn btn-primary">Submit</button>
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