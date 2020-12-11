<?php $this->setSiteTitle('AMCC SMS | Add Marks'); ?>

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

  include "teacher_sidebar.php";
  ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Marks</h1>
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
          <h3 class="card-title">Add Marks</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
            <form role="form" action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                        <label>Grade</label>
                        <input type="text" name="regno" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Term</label>
                        <input type="text" class="form-control" name="fullname" placeholder="full tname">
                  </div>
                  <div class="form-group">
                        <label>Student index</label>
                        <input type="text" class="form-control" name="namewi" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label><h2>Subjct List</h2></label>
                  </div>
                  <div class="form-group">
                        <label>Sinhala</label>
                        <input type="number" class="form-control" name="username" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Englsh</label>
                        <input type="number" class="form-control" name="email" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Religion</label>
                        <input type="number" class="form-control" name="nic" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Mathematics</label>
                        <input type="number" class="form-control" name="gender" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Science</label>
                        <input type="number" class="form-control" name="birthday" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>History</label>
                        <input type="number" class="form-control" name="address" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Geography</label>
                        <input type="number" class="form-control" name="contact" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Life Skills</label>
                        <input type="number" class="form-control" name="prevsch" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Aesthatic Subject</label>
                        <input type="number" class="form-control" name="jstartdate" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Health and Ph. Education</label>
                        <input type="number" class="form-control" name="regdate" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Second Language</label>
                        <input type="number" class="form-control" name="qualifications" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                        <label>Subjects</label>
                        <input type="number" class="form-control" name="subjects" placeholder="Enter ...">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="marksubmit" class="btn btn-primary">Submit</button>
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