<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="<?=PROOT?>images/logo.jpg" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">A. M. C. C. SMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
           <button type="button" class="btn btn-block btn-secondory btn-xs"><a href="<?=PROOT?>login/logout">log out</a></button>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?=PROOT?>admin/admin_dashbord" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Admin Dashboard
              </p>
            </a>
          </li>
         <!-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
              </p>
            </a>
          </li>-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=PROOT?>admin_users/teachers" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Teachers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=PROOT?>admin_users/students" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=PROOT?>admin_users/parents" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Parents</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=PROOT?>admin_users/registeredusers" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All registered users</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Classrooms
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=PROOT?>admin_classes/six_nine_select" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>6-9</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=PROOT?>admin_classes/ten_eleven_select" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>10-11</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=PROOT?>admin_classes/twleve_thirteen_select" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>12-13</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=PROOT?>admin_classes/add_class" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add a Class</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=PROOT?>admin_classes/view_classes" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View all Classes</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Subjects
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=PROOT?>admin_subjects/add_subject" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Subjects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=PROOT?>admin_subjects/view_subjects" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Subjects</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="far fa-calendar nav-icon"></i>
              <p>
                Time Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=PROOT?>admin_timetables/add_timetable" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Time Table</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=PROOT?>admin_timetables/view_timetables" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Time Table</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Exams
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=PROOT?>admin_exams/add_exams" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add exams</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=PROOT?>admin_exams/view_exams" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View exams</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=PROOT?>admin_exams/add_exam_timetable" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add exam Time table</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=PROOT?>admin_exams/view_exam_timetable" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View exam time table</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                User Profiles
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=PROOT?>admin/select_stuId" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=PROOT?>admin/select_tchId" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Teacher</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=PROOT?>admin/select_prntId" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Parent</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Quick Links</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>