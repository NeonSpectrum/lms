@extends("layout")

@section("body")
<div  class="main">
   <div class="shadow" style="padding: 15px 0px 15px 0px;"> <h5>Main: Courses / Mathematics</h5></div>
  <div>
  <br>
  <div class="main-content">
    <h2 style="font-weight: bold;">Mathematics</h2 >
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
    <input type="text" class="form-control" placeholder="Search Sections...">


    <br><br>
    <div style="margin-bottom:12px">
    <span><a href="#" style="color:blue;font-size: 15px;"><i class="fa fa-sort-alpha-asc"></i>  Sort ascending</a></span><span style="float:right">Number of Sections: 3</span></div>
<div class="table-responsive shadow" style="border-radius:15px">
    <table class="table table-hover " style="width:100%">
    <thead>
      <tr>
        <th>Section Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody >
      <tr>
        <td>Earth</td>
        <td><a href="{{url('courses/lessons')}}" class="action-buttons"><i class="fa fa-eye"></i></a><a href="{{url('students')}}" class="action-buttons"><i class="fa fa-users"></i></a></td>
      </tr>
      <tr>
        <td>Saturn</td>
        <td><a href="#" class="action-buttons"><i class="fa fa-eye"></i></a><a href="{{url('students')}}" class="action-buttons"><i class="fa fa-users"></i></a></td>
      </tr>
      <tr>
        <td>Uranus <span class="new">NEW</span></td>
        <td><a href="#" class="action-buttons"><i class="fa fa-eye"></i></a><a href="{{url('students')}}" class="action-buttons"><i class="fa fa-users"></i></a></td>
      </tr>
    </tbody>
  </table>
</div>

  </div>
</div>


@endsection
{{-- <a href="#"  class="action-buttons"><i class="fa fa-pencil-square-o"></i></a><a href="#"  class="action-buttons"><i class="fa fa-trash-o"></i></a> --}}