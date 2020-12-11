<?php $this->setSiteTitle('AMCC SMS | ALL Students'); ?>

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
            <h1>All Students</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All students</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Students</h3>
              </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Index No</th>
                  <th>Name</th>
                  <th>User name</th>
                  <th>Gender</th>
                  <th>Birthday</th>
                  <th>email</th>
                  <th>Address</th>
                  <th>Contact No</th>
                  <th>Parent</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($this->students as $student): ?>
                  <tr>
                    <td><?= $student->stu_indexno ?></td>
                    <td><?= $student->stu_namewi ?></td>
                    <td><?= $student->stu_username ?></td>
                    <td><?= $student->stu_gender ?></td>
                    <td><?= $student->stu_birthday ?></td>
                    <td><?= $student->stu_email ?></td>
                    <td><?= $student->stu_address ?></td>
                    <td><?= $student->stu_contact ?></td>
                    <td><?= $student->stu_gardnerNIC ?></td>  
                  </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
    <section class="content-footer">
      <button class="btn-success float-sm-right" onclick="window.print()">Print the Sheet</button>
    </section>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php $this->end(); ?>