@extends("layout")

@section("body")
<div  class="main">
   <div class="shadow" style="padding: 15px 0px 0.5px 15px;">
  <h6> {{ Breadcrumbs::render('students') }}</h6></div>
  <br>
  <div class="main-content">
    <h2 style="font-weight: bold;">Students</h2 >
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
    <input type="text" class="form-control" placeholder="Search Students...">


    <br><br>
    <div style="margin-bottom:12px">
    <span><a href="#" style="color:blue;font-size: 15px;"><i class="fa fa-sort-alpha-asc"></i>  Sort ascending</a></span><span style="float:right">Number of Students: 3</span></div>
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
        <td>Russell John Santos</td>
        <td><a href="#"class="action-buttons"><i class="fa fa-eye"></i></a><button onClick="displaySubject()" class="action-buttons btn btn-link"><i class="fa fa-chevron-down"></i></button></td>

      </tr>
      <tr id="subject" class="subject" onClick="displaySections(event)">
        <td colspan="2" >
           <input  type="checkbox" value="" > Mathematics
          <button  class="action-buttons btn btn-link"><i class="fa fa-chevron-down"></i></button>
        </td>
      </tr>
      <tr id="section" class="section">
        <td colspan="2" style="padding-left:50px">
          <input type="checkbox" value="" > Mathematics<br><br>
          <input type="checkbox" value="" > Saturn<br><br>
          <input type="checkbox" value="" > Uranus<br>
        </td>
      </tr>
      <tr id="subject" class="subject">
        <td colspan="2">
          <input  type="checkbox" value="" > Science <button onClick="#" class="action-buttons btn btn-link"><i class="fa fa-chevron-down"></i></button>
        </td>
      </tr>
      <tr id="subject" class="subject">
        <td colspan="2">
          <input  type="checkbox" value="" > Values Education <button onClick="#" class="action-buttons btn btn-link"><i class="fa fa-chevron-down"></i></button>
        </td>
      </tr>
      <tr>
        <td>Michaela Divine Panopio</td>
        <td><a href="#" class="action-buttons"><i class="fa fa-eye"></i></a><button onClick="" class="action-buttons btn btn-link"><i class="fa fa-chevron-down"></i></button></td>
      </tr>
      <tr>
        <td>Manila Alejandro Young <span class="new">NEW</span></td>
        <td><a href="#" class="action-buttons"><i class="fa fa-eye"></i></a><button onClick="" class="action-buttons btn btn-link"><i class="fa fa-chevron-down"></i></button></td>
      </tr>
    </tbody>
  </table>
</div>

  </div>
</div>


@endsection
{{-- <a href="#"  class="action-buttons"><i class="fa fa-pencil-square-o"></i></a><a href="#"  class="action-buttons"><i class="fa fa-trash-o"></i></a> --}}