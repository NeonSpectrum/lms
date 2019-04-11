
<div class="shadow" style="padding: 15px 0px 0.5px 15px; ">
  <h6 style="color:gray!important">
    @php
      $url = explode("/",$_SERVER["REQUEST_URI"]);
      $url=end($url);
    @endphp
      {{ Breadcrumbs::render($url) }}

  </h6>
</div>


{{-- ////manual////
// $url = explode("/",$_SERVER["REQUEST_URI"]);

// // $url= explode('/',substr(url()->current(),22));
// $bread="";
// foreach($url as $link){
//   $title = ucwords($link);
//   $bread=  $bread."<li><a href='$link'>$title</a></li>";
// }
// echo "<span style='color:gray;font-size:18px;line-heigh:1.6'> Main :&nbsp </span>". $bread; --}}