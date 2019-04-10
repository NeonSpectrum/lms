@php($login = true)
@extends("layout")

@section("body")
<div class="login-container login-bg">
</div>
<div class="row login-container">
  <div class="col-sm-12 col-md-6 p-0">
    <div class="login-left"></div>
  </div>
  <div class="col-sm-12 col-md-6 p-0">
    <div class="login-right"></div>
  </div>
</div>
<div class="row h-100 m-0">
  <div class="col-md-4 text-right vertical-center text-white p-0 d-none d-md-flex align-items-end">
    <div id="typed-display"></div>
    <template id="typed-template">
      <h1 class="notosans">Learning<br>Management<br>System</h1>
      <br>
      <p class="login-description" style="width:300px">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </template>
  </div>
  <div class="col-md-4 vertical-center col-offset-4">
    <div class="card shadow">
      <div class="card-body m-3">
        <h1 class="card-title">Login</h1>
        <h6 class="card-subtitle mb-2 text-muted">
          Enter your credentials to log in to the site.
        </h6>
        <form name="frmLogin">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group mb-2">
              <input type="password" id="password" name="password" class="form-control">
              <div class="input-group-append">
                <div class="input-group-text">
                  <a href="#" id="btnTogglePassword"><i class="fa fa-eye"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block white-text shadow">Log in</button>
          </div>
          <div class="text-center" style="font-size:13px">
            <a href="#" class="text-muted" style="text-decoration:underline">I have forgotten my password.</a>
            <br><br>
            <p class="text-muted">
              Contact the administrator if you do not remember your username or do not have an account yet.
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section("script")
<script>
  new Typed('#typed-display', {
    strings: [$("#typed-template").html()],
  })
</script>
@endsection
