<!DOCTYPE html>
<html lang="en">
    @include('admin.head.SideBarComponents.head')

	<body class="sign-inup" id="body">
		<div class="container d-flex align-items-center justify-content-center form-height-login pt-24px pb-24px">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-10">
					<div class="card">
						<div class="card-header bg-primary">
							<div class="ec-brand">
								<a href="index.html" title="Ekka">
									<img class="ec-brand-icon" src="logo.png" alt="" />
								</a>
							</div>
						</div>
						<div class="card-body p-5">
							<h4 class="text-dark mb-5">Giriş Yap</h4>

							<form method="POST" action="{{ route("user.login.post") }}">
                                @csrf
								<div class="row">
									<div class="form-group col-md-12 mb-4">
										<input type="email" class="form-control" name="email" id="email" placeholder="Kullanıcı Mail">
									</div>

									<div class="form-group col-md-12 ">
										<input type="password" class="form-control" name="password" id="password" placeholder="Şifre">
									</div>

									<div class="col-md-12">
										{{-- <div class="d-flex my-2 justify-content-between">
											<div class="d-inline-block mr-3">
												<div class="control control-checkbox">Remember me
													<input type="checkbox" />
													<div class="control-indicator"></div>
												</div>
											</div>

											<p><a class="text-blue" href="#">Forgot Password?</a></p>
										</div> --}}

										<button type="submit" class="btn btn-primary btn-block mb-4">Giriş Yap</button>

										{{-- <p class="sign-upp">Don't have an account yet ?
											<a class="text-blue" href="sign-up.html">Sign Up</a>
										</p> --}}
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
