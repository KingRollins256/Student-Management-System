<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <div class="nav-link">
          <div class="profile-image">
            <img src="{{asset('images/faces/face21.jpg')}}" alt="image"/>
          </div>
          <div class="profile-name">
            <p class="name">
              Welcome
            </p>
            <p class="designation">
                Admin
            </p>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset('dashboard')}}">
          <i class="fa fa-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      {{-- Student Dashboard item --}}
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
          <i class="fa fa-user-graduate menu-icon"></i>
          <span class="menu-title">Students</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="page-layouts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{route('student.create')}}">Admitt Student</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('student.index')}}">View Student</a></li>
          </ul>
        </div>
      </li>

      {{-- Course Dashboard item --}}
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#page-layoutst" aria-expanded="false" aria-controls="page-layoutst">
          <i class="fas fa-book-open menu-icon"></i>
          <span class="menu-title">Courses</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="page-layoutst">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{route('course.create')}}">Add Course</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('course.index')}}">View Courses</a></li>
          </ul>
        </div>
      </li>

      {{-- Enrollment Dashboard item --}}
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#page-layoutse" aria-expanded="false" aria-controls="page-layoutse">
          <i class="fas fa-user-plus menu-icon"></i>
          <span class="menu-title">Reports</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="page-layoutse">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{route('enrollment.create')}}">Enroll Student</a></li>
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{route('enrollment.index')}}">Enrolled Students</a></li>
          </ul>
        </div>
      </li>

    </ul>
  </nav>
