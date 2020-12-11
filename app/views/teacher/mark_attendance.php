<?php $this->setSiteTitle('AMCC SMS | Mark Ateendance'); ?>

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
        <a href="" class="nav-link">Home</a>
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

  include "teacher_sidebar.php";
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mark Attendance</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashbord</a></li>
              <li class="breadcrumb-item active">Select the date</li>
              <li class="breadcrumb-item active">Mark Attendance</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Students in the Class</h3>

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
              <form form role="form" action="<?=PROOT?>teacher/mark_attendance" method="post">
              <input type="hidden" name="date" class="form-control" value="<?= $this->date ?>">
              <input type="hidden" name="class" class="form-control" value="<?= $this->classtchr->tch_class ?>">
              <input type="hidden" name="tid" class="form-control" value="<?= $this->tchid ?>">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Index No</th>
                  <th>Name</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                 <?php foreach ($this->students as $student): ?>
                  <tr>
                    <td><input type="text" name="<?= $student->stu_indexno . 'name'?>" class="form-control" value="<?= $student->stu_indexno ?>"></td>
                    <td><input type="text" name="<?= $student->stu_indexno . 'index'?>" class="form-control" value="<?= $student->stu_username ?>"></td>
                    <td>
                      <div class="form-group clearfix">
                      <div class="icheck-success d-inline">
                        <input type="checkbox" name="<?= $student->stu_indexno . 'status'?>" value="present" id="<?= $student->stu_indexno . '1'?>">
                        <label for="<?= $student->stu_indexno . '1'?>" >Present
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" name="<?= $student->stu_indexno . 'status'?>" value="late" id="<?= $student->stu_indexno . '2'?>" >
                        <label for="<?= $student->stu_indexno . '2'?>">Late
                        </label>
                      </div>
                      <div class="icheck-danger d-inline">
                        <input type="checkbox" name="<?= $student->stu_indexno . 'status'?>" value="absent" id="<?= $student->stu_indexno . '3'?>">
                        <label for="<?= $student->stu_indexno . '3'?>">Absent
                        </label>
                      </div>
                    </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
              <button type="submit" name="atdsave" class="btn btn-info float-right">Save</button>
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
