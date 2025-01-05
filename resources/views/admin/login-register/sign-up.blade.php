<!DOCTYPE html>
<html lang="en">
    @include('admin.head.SideBarComponents.head')

<body class="sign-inup" id="body">
  <div class="container d-flex align-items-center justify-content-center form-height pt-24px pb-24px">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-10">
        <div class="card">
          <div class="card-header bg-primary">
            <div class="ec-brand">
              <a href="index.html" title="Ekka">
                <img class="ec-brand-icon" src="assets/img/logo/logo-login.png" alt="" />
              </a>
            </div>
          </div>
          <div class="card-body p-5">
            <h4 class="text-dark mb-5">Sign Up</h4>

            <form action="{{ route("user.register.post") }}" method="POST">
                @csrf
              <div class="row">
                <div class="form-group col-md-12 mb-4">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>

                <div class="form-group col-md-12 mb-4">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Username">
                </div>

                <div class="form-group col-md-12 ">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
{{--
                <div class="form-group col-md-12 ">
                  <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password">
                </div> --}}

                <div class="col-md-12">
                  <div class="d-inline-block mr-3">
                    <div class="control control-checkbox">
                      <input type="checkbox" />
                      <div class="control-indicator"></div>
                      I Agree the terms and conditions
                    </div>
                  </div>

                  <button type="submit" class="btn btn-primary btn-block mb-4">Sign Up</button>

                  <p class="sign-upp">Already have an account?
                    <a class="text-blue" href="sign-in.html">Sign in</a>
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Javascript -->
  <script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

  <!-- Ekka Custom -->
  <script src="assets/js/ekka.js"></script>
</body>

</html>
