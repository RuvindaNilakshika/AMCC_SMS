<?php $this->setSiteTitle('AMCC SMS | View Exams'); ?>

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

  include "admin_sidebar.php";
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Exams</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Exams</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Exams</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Grade</th>
                  <th>Term</th>
                  <th>Year</th>
                  <th>Exam id</th>
                  <th>Operations</th>
                </tr>
                </thead>
                <tbody>
                 <?php foreach ($this->allexams as $exam): ?>
                  <tr>
                    <td><?= $exam->grade ?></td>
                    <td><?= $exam->term ?></td>
                    <td><?= $exam->year ?></td>
                    <td><?= $exam->exam_id ?></td>
                    <td>
                      <a class= "btn btn-info btn-sm" href="<?=PROOT?>admin_exams/edit_exams/<?= $exam->db_id ?>" onclick="if(!confirm('Are you sure?')){return false;}">
                      <i class="fas fa-edit"></i>
                      </a>
                      <a class= "btn btn-danger btn-sm" href="<?=PROOT?>admin_exams/delete_exams/<?= $exam->db_id ?>" onclick="if(!confirm('Are you sure?')){return false;}" >
                      <i class="fas fa-trash"></i>
                      </a>
                    </td>
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

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->end(); ?>
