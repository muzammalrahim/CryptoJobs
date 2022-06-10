<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo text-light" href="/"><h3>Dasboard</h3></a>
    </div>
    <ul class="nav">
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('jobs') }}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Add Jobs</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('job_list') }}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">List of jobs</span>
        </a>
      </li>
      <!-- <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('show_doctor') }}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">All Doctors</span>
        </a>
      </li> -->
    </ul>
  </nav>