<?php $this->setSiteTitle('AMCC SMS | Results'); ?>

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

  include "parents_sidebar.php";
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Exam Results</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Exam Results</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Exam Results</h3>

              </div>
            <!-- /.card-header -->
            <div class="card-body">
                                    <?php foreach ($this->results as $key => $student): ?>
                      <h5><strong>Exam Id : </strong><?= $student->exam_id ?></h5>
                      <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>Subject</th>
                        <th>Marks</th>
                      </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Sinhala</td>
                          <td><?= $student->sinhala ?></td>
                        </tr>
                        <tr>
                          <td>English</td>
                          <td><?= $student->english ?></td>
                        </tr>
                        <tr>
                          <td>Religion</td>
                          <td><?= $student->religion ?></td>
                        </tr>
                        <tr>
                          <td>Mathamatics</td>
                          <td><?= $student->mathematics ?></td>
                        </tr>
                        <tr>
                          <td>Science</td>
                          <td><?= $student->science ?></td>
                        </tr>
                        <tr>
                          <td>History</td>
                          <td><?= $student->history ?></td>
                        </tr>
                        <tr>
                          <td>Geography</td>
                          <td><?= $student->geography ?></td>
                        </tr>
                        <tr>
                          <td>Life Skills</td>
                          <td><?= $student->life_skills ?></td>
                        </tr>
                        <tr>
                          <td>Aesthatic</td>
                          <td><?= $student->aesthetic ?></td>
                        </tr>
                        <tr>
                          <td>Health</td>
                          <td><?= $student->health ?></td>
                        </tr>
                        <tr>
                          <td>Second Language</td>
                          <td><?= $student->second_language ?></td>
                        </tr>
                        <tr>
                          <td>total</td>
                          <td><?= $student->total ?></td>
                        </tr>
                        <tr>
                          <td>average</td>
                          <td><?= $student->average ?></td>
                        </tr>
                        <tr>
                          <td>place</td>
                          <td></td>
                        </tr>
                        <tr>
                        </tr>
                      </tbody>
                      <tfoot>
                      </tfoot>
                    </table>
                    <hr>
                    <?php endforeach; ?>
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
