<?php $this->setSiteTitle('AMCC SMS | Add Class'); ?>

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
            <h1>Add Class</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Add Class Form</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
              <form role="form" action="<?=PROOT?>admin_classes/add_class" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Year</label>
                    <input type="text" name="year" class="form-control" id="exampleInputEmail1" placeholder="Ex: 2020">
                  </div>
                  <div class="form-group">
                  <label>Grade</label>
                  <select name="section" class="form-control select2" style="width: 100%;">
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                  </select>
                  <div class="form-group">
                  <label>Section</label>
                  <select name="Grade" class="form-control select2" style="width: 100%;">
                    <option>6</option>
                    <option>6E</option>
                    <option>7</option>
                    <option>7E</option>
                    <option>8</option>
                    <option>8E</option>
                    <option>9</option>
                    <option>9E</option>
                    <option>10</option>
                    <option>10E</option>
                    <option>11</option>
                    <option>11E</option>
                    <option>12P</option>
                    <option>12B</option>
                    <option>12C</option>
                    <option>12A</option>
                    <option>12BT</option>
                    <option>12ET</option>
                    <option>13P</option>
                    <option>13B</option>
                    <option>13C</option>
                    <option>13A</option>
                    <option>13BT</option>
                    <option>13ET</option>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Class Id</label>
                    <input type="text" name="confpassword" class="form-control" id="exampleInputPassword1" placeholder="Ex: 6D_20">
                  </div>
                  <div class="form-group">
                  <label>Class Section</label>
                  <select name="class_section" class="form-control select2" style="width: 100%;">
                    <option>6-9</option>
                    <option>10-11</option>
                    <option>12-13</option>
                  </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="csubmit" class="btn btn-primary">Add</button>
                </div>
              </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

<?php $this->end(); ?>
