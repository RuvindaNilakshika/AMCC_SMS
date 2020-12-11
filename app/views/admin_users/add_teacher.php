<?php $this->setSiteTitle('AMCC SMS | Add Teacher'); ?>

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
            <h1>Add Teacher</h1>
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
          <h3 class="card-title">Add Teacher Form</h3>

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
                        <input type="text" name="regno" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" name="fullname" placeholder="full tname">
                  </div>
                  <div class="form-group">
                        <label>Name with initials</label>
                        <input type="text" class="form-control" name="namewi" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>NIC</label>
                        <input type="text" class="form-control" name="nic" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Gender</label>
                        <input type="text" class="form-control" name="gender" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Birthday</label>
                        <input type="text" class="form-control" name="birthday" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Contact</label>
                        <input type="text" class="form-control" name="contact" placeholder="contact 01">
                  </div>
                  <div class="form-group">
                        <label>Privious Shool</label>
                        <input type="text" class="form-control" name="prevsch" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Job Started Date</label>
                        <input type="text" class="form-control" name="jstartdate" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Resgistered day</label>
                        <input type="text" class="form-control" name="regdate" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Qualifications</label>
                        <input type="text" class="form-control" name="qualifications" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Subjects</label>
                        <input type="text" class="form-control" name="subjects" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Class</label>
                        <input type="text" class="form-control" name="class" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="descrip" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="photo" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="tsubmit" class="btn btn-primary">Submit</button>
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