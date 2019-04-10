@extends("layout")

@section("body")
<div  class="main">
  <h5>Main: Courses / Mathematics / Lessons</h5>
  <div>
  <hr  >
  <br>
  <div class="main-content">
    <h2 style="font-weight: bold;">Mathematics: Lessons</h2 >
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
    <input type="text" class="form-control" placeholder="Search Courses...">


    <br><br>
    <div style="margin-bottom:12px">
    <span><a href="#" style="color:blue;font-size: 15px;"><i class="fa fa-sort-alpha-asc"></i>  Sort ascending</a></span><span style="float:right">Number of Lessons: 3</span></div>
<div class="table-responsive shadow" style="border-radius:15px">
    <table class="table table-hover " style="width:100%">
    <thead>
      <tr>
        <th>Lesson Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody >
      <tr>
        <td>Numbers</td>
        <td><a href="{{url('/courses/files')}}" class="action-buttons"><i class="fa fa-eye"></i></a><a href="#"  class="action-buttons"><i class="fa fa-pencil-square-o"></i></a><a href="#"  class="action-buttons"><i class="fa fa-trash-o"></i></a></td>
      </tr>
      <tr>
        <td>Advanced Numbers</td>
        <td><a href="#" class="action-buttons"><i class="fa fa-eye"></i></a><a href="#"  class="action-buttons"><i class="fa fa-pencil-square-o"></i></a><a href="#"  class="action-buttons"><i class="fa fa-trash-o"></i></a></td>
      </tr>
      <tr>
        <td>Subtracting Numbers <span class="new">NEW</span></td>
        <td><a href="#" class="action-buttons"><i class="fa fa-eye"></i></a><a href="#"  class="action-buttons"><i class="fa fa-pencil-square-o"></i></a><a href="#"  class="action-buttons"><i class="fa fa-trash-o"></i></a></td>
      </tr>
    </tbody>
  </table>
</div>

  </div>
</div>


@endsection
{{-- <a href="#"  class="action-buttons"><i class="fa fa-pencil-square-o"></i></a><a href="#"  class="action-buttons"><i class="fa fa-trash-o"></i></a> --}}