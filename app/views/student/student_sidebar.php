<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?=PROOT?>images/logo.jpg" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">A. M. C. C. SMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php echo '<img src="data:image;base64,'.base64_encode(trim($this->student->stu_photo)).'"  alt="Image">'; ?>
        </div>
        <div class="info">
          <a href="#" class="d-block">Student</a>
           <button type="button" class="btn btn-block btn-secondory btn-xs"><a href="<?=PROOT?>login/logout">log out</a></button>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?=PROOT?>student/student_dashbord/<?= $this->stu->db_id ?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Student Dashboard
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
          <li class="nav-item">
            <a href="<?=PROOT?>student/view_attendance/<?= $this->stu->db_id ?>" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Attendance 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=PROOT?>student/view_results/<?= $this->stu->db_id ?>" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Past Results 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=PROOT?>student/view_extracurricular/<?= $this->stu->db_id ?>" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Extracurricular Activities    
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=PROOT?>student/view_profile/<?= $this->stu->db_id ?>" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                My Profile  
              </p>
            </a>
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