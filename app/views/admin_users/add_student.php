<?php $this->setSiteTitle('AMCC SMS | Add Student'); ?>

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
            <h1>Add Student</h1>
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
          <h3 class="card-title">Add Student Form</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
            <form form role="form" action="<?=PROOT?>admin_users/add_student" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                        <label>Index No</label>
                        <input type="text" name="indexno" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="fullname" class="form-control" placeholder="firs tname">
                  </div>
                  <div class="form-group">
                        <label>Name with initials</label>
                        <input type="text" name="namewi" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>NIC</label>
                        <input type="text" name="nic" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="card-body">
                  <div class="form-group">
                  <label>Gender</label>
                  <select name="gender" class="form-control select2" style="width: 100%;">
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                  </div>
                  <div class="form-group">
                        <label>Birthday</label>
                        <input type="text" name="birthday" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Transport</label>
                        <input type="text" name="transport" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Contact</label>
                        <input type="text" name="contact1" class="form-control" placeholder="contact 01">
                  </div>
                  <div class="form-group">
                        <label>Special Dissices</label>
                        <input type="text" name="dissices" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Blood group</label>
                        <input type="text" name="bloodgroup" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Gardner NIC</label>
                        <input type="text" name="gdnic" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Privious Shool</label>
                        <input type="text" name="pschool" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Resgistered day</label>
                        <input type="text" name="regday" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Grade</label>
                        <input type="text" name="grade" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Class</label>
                        <input type="text" name="class" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="descrip" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Photo</label>
                    <div class="input-group">
                        <input type="file" name="image" id="exampleInputFile">
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="ssubmit" class="btn btn-primary">Submit</button>
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


