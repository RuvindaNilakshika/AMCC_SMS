<?php $this->setSiteTitle('AMCC SMS | Student Mark Sheet'); ?>

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


    <!-- Main content -->
    <section class="content">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Students' Marks</h3>
                <div class="card-tools">
                </div>
              </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Index No</th>
                  <th>Name</th>
                  <th>Sinhala</th>
                  <th>English</th>
                  <th>Religion</th>
                  <th>Mathamatics</th>
                  <th>Science</th>
                  <th>History</th>
                  <th>Geography</th>
                  <th>Life Skills</th>
                  <th>Aesthatic</th>
                  <th>Health</th>
                  <th>Second Language</th>
                  <th>total</th>
                  <th>average</th>
                  <th>place</th>    
                  <th>operations</th>
                </tr>
                </thead>
                <tbody>
                  <?php $count = count($this->student69); ?>
                  <?php foreach ($this->student69 as $key => $student): ?>
                  <tr>
                    <td><?= $student->student_id ?></td>
                    <td><?= $student->stu_name ?></td>
                    <td><?= $student->sinhala ?></td>
                    <td><?= $student->english ?></td>
                    <td><?= $student->religion ?></td>
                    <td><?= $student->mathematics ?></td>
                    <td><?= $student->science ?></td>
                    <td><?= $student->history ?></td>
                    <td><?= $student->geography ?></td>
                    <td><?= $student->life_skills ?></td>
                    <td><?= $student->aesthetic ?></td>
                    <td><?= $student->health ?></td>
                    <td><?= $student->second_language ?></td>
                    <td><?= $student->total ?></td>
                    <td><?= $student->average ?></td>
                    <td><?= $count - $key ?></td>
                    <td>
                      <a href="<?=PROOT?>admin_users/edit_student/<?= $student->db_id ?>" onclick="if(!confirm('Are you sure?')){return false;}">
                      <i class="fas fa-edit"></i>
                      </a>___
                      <a  href="<?=PROOT?>admin_users/delete_student/<?= $student->stu_indexno ?>" onclick="if(!confirm('Are you sure?')){return false;}" >
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
    <section class="content-footer">
      <button class="btn-success float-sm-right" onclick="window.print()">Print the Sheet</button>
    </section>
    </section>
    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->


<?php $this->end(); ?>

