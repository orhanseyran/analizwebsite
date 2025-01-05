<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('admin.head.SideBarComponents.head')

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

	<!-- WRAPPER -->
	<div class="row">

		<!-- LEFT MAIN SIDEBAR -->

        @include('admin.head.sidebar')

		<!-- PAGE WRAPPER -->
		<div class="row">

			<!-- Header -->
            <div style="display: none">
                @include('admin.head.header')
            </div>


			<!-- CONTENT WRAPPER -->
			<div class="row">
                @if(session('success'))
                <div id="allert" class="alert alert-success">
                    {{ session('success') }}
                </div>


                @endif
                <script>
                    setTimeout(() => {
                        document.getElementById("allert").style.display = "none";

                    }, 3000);
                </script>
				<div class="content">
					<div class="breadcrumb-wrapper breadcrumb-contacts">
						<div>
							<h1>User Card</h1>
							<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>User
							</p>
						</div>
						<div>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal"
								data-bs-target="#modal-add-contact"> View All
							</button>
						</div>
					</div>

					<div class="row">
						@foreach ($users as $user )
						<div class="col-lg-6 col-xl-4 mb-24px">
							<div class="ec-user-card card card-default p-4">
								<a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modalContact{{ $user->id }}"
									class="view-detail"><i class="mdi mdi-eye-plus-outline"></i>
								</a>
								<a href="javascript:0" class="media text-secondary">
									@if ($user->profilresim == null)
									<img src="images/resimyokuser.png" class="mr-3 img-fluid" alt="Avatar Image">

									@else
									<img src="images/{{ $user->profilresim }}" class="mr-3 img-fluid" alt="Avatar Image">

									@endif

									<div class="media-body">
										<h5 class="mt-0 mb-2 text-dark">{{ $user->name }}</h5>

										<ul class="list-unstyled">
											<li class="d-flex mb-1">
												<i class="mdi mdi-email mr-1"></i>
												<span>{{ $user->email }}</span>
											</li>
											<li class="d-flex mb-1">
												<i class="mdi mdi-phone mr-1"></i>
												<span>{{ $user->TelefonNumarası == null ? "Telefon Numarsı Yok" : $user->TelefonNumarası }}</span>
											</li>
										</ul>
									</div>
								</a>
							</div>
						</div>
						<div class="modal fade modal-contact-detail" id="modalContact{{ $user->id }}" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header justify-content-end border-bottom-0">
										<button type="button" class="btn-edit-icon" data-bs-dismiss="modal"
											aria-label="Close">
											<i class="mdi mdi-pencil"></i>
										</button>

										<div class="dropdown">
											<button class="btn-dots-icon" type="button" id="dropdownMenuButton"
												data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="mdi mdi-dots-vertical"></i>
											</button>

											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>

										<button type="button" class="btn-close-icon" data-bs-dismiss="modal"
											aria-label="Close">
											<i class="mdi mdi-close"></i>
										</button>
									</div>

									<div class="modal-body pt-0">
										<div class="row no-gutters">
											<div class="col-md-6">
												<div class="profile-content-left px-4">
													<div class="text-center widget-profile px-0 border-0">
														<div class="card-img mx-auto rounded-circle">
															<img src="assets/img/user/u6.jpg" alt="user image">
														</div>

														<div class="card-body">
															<h4 class="py-2 text-dark">{{ $user->name }} - {{ $user->soyad }}</h4>
															<p>{{ $user->soyad }}</p>
															<a class="btn btn-primary btn-pill my-4" href="#">Takip Et</a>
														</div>
													</div>

													<div class="d-flex justify-content-between ">
														<div class="text-center pb-4">
															<h6 class="text-dark pb-2">354</h6>
															<p>Sipariş</p>
														</div>

														<div class="text-center pb-4">
															<h6 class="text-dark pb-2">30</h6>
															<p>İstek Listesi</p>
														</div>

														<div class="text-center pb-4">
															<h6 class="text-dark pb-2">1200</h6>
															<p>Takip Ediyor</p>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="contact-info px-4">
													<h4 class="text-dark mb-1">Contact Details</h4>
													<p class="text-dark font-weight-medium pt-4 mb-2">Email adres</p>
													<p>{{ $user->email }}</p>
													<p class="text-dark font-weight-medium pt-4 mb-2">Telefon Numarası</p>
													<p>{{ $user->TelefonNumarası }}</p>
													<p class="text-dark font-weight-medium pt-4 mb-2">Doğum Tarihi</p>
													<p>{{ $user->Doğum_Tarihi }}</p>
													<p class="text-dark font-weight-medium pt-4 mb-2">Adres</p>
													<p>{{ $user->Adres }}</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach

						{{ $users->links('pagination::bootstrap-4') }}





					</div>

					<!-- Contact Modal -->


					<!-- Add Contact Button  -->
					<div class="modal fade modal-add-contact" id="modal-add-contact" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
							<div class="modal-content">
								<form>
									<div class="modal-header px-4">
										<h5 class="modal-title" id="exampleModalCenterTitle">Add New User</h5>
									</div>

									<div class="modal-body px-4">
										<div class="form-group row mb-6">
											<label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User
												Image</label>

											<div class="col-sm-8 col-lg-10">
												<div class="custom-file mb-1">
													<input type="file" class="custom-file-input" id="coverImage"
														required>
													<label class="custom-file-label" for="coverImage">Choose
														file...</label>
													<div class="invalid-feedback">Example invalid custom file feedback
													</div>
												</div>
											</div>
										</div>

										<div class="row mb-2">
											<div class="col-lg-6">
												<div class="form-group">
													<label for="firstName">First name</label>
													<input type="text" class="form-control" id="firstName" value="John">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group">
													<label for="lastName">Last name</label>
													<input type="text" class="form-control" id="lastName" value="Deo">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group mb-4">
													<label for="userName">User name</label>
													<input type="text" class="form-control" id="userName"
														value="johndoe">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group mb-4">
													<label for="email">Email</label>
													<input type="email" class="form-control" id="email"
														value="johnexample@gmail.com">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group mb-4">
													<label for="Birthday">Birthday</label>
													<input type="text" class="form-control" id="Birthday"
														value="10-12-1991">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group mb-4">
													<label for="event">Address</label>
													<input type="text" class="form-control" id="event"
														value="Address here">
												</div>
											</div>
										</div>
									</div>

									<div class="modal-footer px-4">
										<button type="button" class="btn btn-secondary btn-pill"
											data-bs-dismiss="modal">Cancel</button>
										<button type="button" class="btn btn-primary btn-pill">Save Contact</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->

			<!-- Footer -->
            @include('admin.head.footer')

		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>

</html>
