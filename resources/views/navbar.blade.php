
<div class="sidebar">
  <div class="image-with-text">
    <div class="sidebar-image">
        <img src="{{ asset("images/social.png") }}" style="height:150px; max-width:100%;object-fit: cover">
    </div>
    <a href="#link" class="btn profile-button shadow"  style="height:45px;"><i class="fa fa-user sidenav-icons" ></i></a>
    <div class="bottom-left">Russell John <br> Santos</div>
  </div>
  <br><br>
  <div class="navbar-links">
  <a  href="{{ url('dashboard') }}" class="{{ active('dashboard') }}">Dashboard {!! activeCaret('dashboard') !!}</a>
  <a  href="{{ url('courses') }}" class="{{ active('courses*') }}">Courses {!! activeCaret('courses*') !!}</a>
  <a    href="{{ url('students') }}" class="{{ active('students') }}">Students {!! activeCaret('students') !!}</a></div>
</div>
<nav class="navbar navbar-light light-blue lighten-4">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#" style="text-align:center">LMS</a>

  <!-- Collapse button -->
  <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
    aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation" style="float:right"><span class="dark-blue-text"><i class="fa fa-bars"></i></span></button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ active('dashboard') }}">
        <a class="nav-link" href="{{ url('dashboard') }}" >Dashboard</a>
      </li>
      <li class="nav-item {{ active('courses*') }}">
        <a class="nav-link" href="{{ url('courses') }}" >Courses</a>
      </li>
      <li class="nav-item {{ active('students') }}">
        <a class="nav-link" href="{{ url('students') }}" >Students</a>
      </li>
      <li class="nav-item {{ active('profile') }}">
        <a class="nav-link" href="#" >Profile</a>
      </li>
    </ul>
    <!-- Links -->

  </div>
  <!-- Collapsible content -->

</nav>

<!-- Page content -->

