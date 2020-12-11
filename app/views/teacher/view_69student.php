<?php $this->setSiteTitle('AMCC SMS | Register User'); ?>

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

  include "teacher_sidebar.php";
  ?>
  
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <?= '<img class="profile-user-img img-fluid img-circle"
                       src="data:image;base64,'.base64_encode($this->student->stu_photo).'"
                       alt="User profile picture">'; ?>
                </div>

                <h3 class="profile-username text-center"><?= $this->student->stu_namewi ?></h3>

                <p class="text-muted text-center"><?= $this->student->stu_gender ?> Student</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>User Name</b> <a class="float-right"><?= $this->student->stu_username ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Grade</b> <a class="float-right"><?= $this->student->stu_grade ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Class</b> <a class="float-right"><?= $this->student->stu_class ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Class teacher</b> <a class="float-right"><?= $this->teach->tch_namewi ?></a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Parent Information</strong>

                <p class="text-muted">
                  <strong>Name :</strong> <?= $this->parentis->pr_namewi ?>
                </p>
                <p class="text-muted">
                  <strong>Relationship :</strong> <?= $this->parentis->pr_relationship ?>
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>

                <p class="text-muted"><?= $this->student->stu_address ?></p>

                <hr>

                <strong><i class="fas fa-email-alt mr-1"></i> Email</strong>

                <p class="text-muted"><?= $this->student->stu_email ?></p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Contacts</strong>

                <p class="text-muted"><?= $this->student->stu_contact ?></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#other" data-toggle="tab">Other Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="#results" data-toggle="tab">Results</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Attendance</a></li>
                  <li class="nav-item"><a class="nav-link" href="#extra" data-toggle="tab">Extra-Curricular Activity</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="other">
                    <strong><i class="fas fa-book mr-1"></i>Full Name</strong>

                    <p class="text-muted"> <?= $this->student->stu_fullname ?> </p>

                    <hr>

                    <strong><i class="fas fa-map-marker-alt mr-1"></i> NIC</strong>

                    <p class="text-muted"><?= $this->student->stu_NIC ?></p>

                    <hr>

                    <strong><i class="fas fa-email-alt mr-1"></i> Birthday</strong>

                    <p class="text-muted"><?= $this->student->stu_birthday ?></p>

                    <hr>

                    <strong><i class="fas fa-email-alt mr-1"></i> Previous School</strong>

                    <p class="text-muted"><?= $this->student->stu_pschool ?></p>

                    <hr>

                    <strong><i class="fas fa-email-alt mr-1"></i> Registered Day</strong>

                    <p class="text-muted"><?= $this->student->stu_regday ?></p>

                    <hr>

                    <strong><i class="fas fa-pencil-alt mr-1"></i> Transport</strong>

                    <p class="text-muted"><?= $this->student->stu_transport ?></p>

                    <hr>

                    <strong><i class="fas fa-pencil-alt mr-1"></i> Special Disieses</strong>

                    <p class="text-muted"><?= $this->student->stu_sdissices ?></p>

                    <hr>

                    <strong><i class="far fa-file-alt mr-1"></i> Blood Group</strong>

                    <p class="text-muted"><?= $this->student->stu_bloodgrp ?></p>

                    <hr>

                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                    <p class="text-muted"><?= $this->student->stu_descrip ?></p>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="results">
                      <?php // $count = count($this->student69); ?>
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
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>Date</th>
                        <th>Status</th>
                      </tr>
                      </thead>

                        <?php foreach ($this->attendance as $key => $value): ?>
                        <?php if ($key <= 30) { ?>
                          <tbody>
                            <tr>
                              <td><?= $value->date ?></td>
                              <td><?= $value->status ?></td>
                            </tr>
                          </tbody>
                        <?php } ?>
                        <?php endforeach; ?>

                      <tfoot>
                      </tfoot>
                      </table>

                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="extra">
                    <strong><i class="fas fa-email-alt mr-1"></i> Sports</strong>

                    <p class="text-muted"><?= $this->extracurricular->sports ?></p>

                    <hr>

                    <strong><i class="fas fa-email-alt mr-1"></i> Aesthetic</strong>

                    <p class="text-muted"><?= $this->extracurricular->aesthetic ?></p>

                    <hr>

                    <strong><i class="fas fa-email-alt mr-1"></i> Clubs</strong>

                    <p class="text-muted"><?= $this->extracurricular->clubs ?></p>

                    <hr>

                    <strong><i class="fas fa-pencil-alt mr-1"></i> Societies</strong>

                    <p class="text-muted"><?= $this->extracurricular->societies ?></p>

                    <hr>

                    <strong><i class="fas fa-pencil-alt mr-1"></i> Prefect</strong>

                    <p class="text-muted"><?= $this->extracurricular->prefect ?></p>

                    <hr>

                    <strong><i class="far fa-file-alt mr-1"></i> Other</strong>

                    <p class="text-muted"><?= $this->extracurricular->other ?></p>

                    <hr>

                    <strong><i class="far fa-file-alt mr-1"></i> Achivements</strong>

                    <p class="text-muted"><?= $this->extracurricular->achivements ?></p>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->end(); ?>
