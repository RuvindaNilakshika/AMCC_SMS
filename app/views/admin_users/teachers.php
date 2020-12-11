<?php $this->setSiteTitle('AMCC SMS | Teachers'); ?>

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
            <h1>All Teachers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Teachers</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content-header">
      <div class="container-fluid"> 
          <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li><button type="button" class="btn btn-block btn-success btn-lg"><a href="<?=PROOT?>admin_users/add_teacher">Add Teacher</a></button></li>
              <li><button type="button" class="btn btn-block btn-info btn-lg"><a href="<?=PROOT?>admin_users/reg_user">Register Teacher</a></button></li>
            </ol>
          </div>
          </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Teachers</h3>

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
                  <th>Reg No</th>
                  <th>Full Name</th>
                  <th>User name</th>
                  <th>Class</th>
                  <th>Gender</th>
                  <th>Birthday</th>
                  <th>email</th>
                  <th>Address</th>
                  <th>Contact No</th>
                  <th>Operations</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($this->teachers as $teacher): ?>
                  <tr>
                    <td><?= $teacher->tch_regno ?></td>
                    <td><?= $teacher->tch_namewi ?></td>
                    <td><?= $teacher->tch_username ?></td>
                    <td><?= $teacher->tch_class ?></td>
                    <td><?= $teacher->tch_gender ?></td>
                    <td><?= $teacher->tch_birthday ?></td>
                    <td><?= $teacher->tch_email ?></td>
                    <td><?= $teacher->tch_address ?></td>
                    <td><?= $teacher->tch_contact ?></td>
                    <td>
                      <a class= "btn btn-info btn-sm" href="<?=PROOT?>admin_users/edit_teacher/<?= $teacher->db_id ?>" onclick="if(!confirm('Are you sure?')){return false;}">
                      <i class="fas fa-edit"></i>
                      </a>
                      <a class= "btn btn-danger btn-sm" href="<?=PROOT?>admin_users/delete_teacher/<?= $teacher->db_id ?>" onclick="if(!confirm('Are you sure?')){return false;}" >
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