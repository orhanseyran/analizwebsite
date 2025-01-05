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
				<div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Vendor Card</h1>
							<p class="breadcrumbs"><span><a href="index.html">Home</a></span><span><i class="mdi mdi-chevron-right"></i></span> Vendor</p>
						</div>
						<div>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal"
								data-bs-target="#modal-add-member">Add Vendor
							</button>
						</div>
					</div>

					<div class="card card-default p-4 ec-card-space">
						<div class="ec-vendor-card mt-m-24px row">

							<div class="col-lg-6 col-xl-4 col-xxl-3">
								<div class="card card-default mt-24px">
									<a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact"
											class="view-detail"><i class="mdi mdi-eye-plus-outline"></i>
									</a>
									<div class="vendor-info card-body text-center p-4">
										<a href="javascript:0" class="text-secondary d-inline-block mb-3">
											<div class="image mb-3">
												<img src="assets/img/vendor/u1.jpg" class="img-fluid rounded-circle"
													alt="Avatar Image">
											</div>

											<h5 class="card-title text-dark">Emma Smith</h5>

											<ul class="list-unstyled">
												<li class="d-flex mb-1">
													<i class="mdi mdi-cellphone-basic mr-1"></i>
													<span>+91 963-852-7410</span>
												</li>
												<li class="d-flex">
													<i class="mdi mdi-email mr-1"></i>
													<span>exmaple@email.com</span>
												</li>
											</ul>
										</a>
										<div class="row justify-content-center ec-vendor-detail">
											<div class="col-4">
												<h6 class="text-uppercase">Items</h6>
												<h5>180</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Sell</h6>
												<h5>1908</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Payout</h6>
												<h5>$2691</h5>
											</div>
										</div>
									</div>
								</div>
							</div>


						</div>
					</div>


					<!-- Contact Modal -->
					<div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header justify-content-end border-bottom-0">
									<button type="button" class="btn-edit-icon" data-bs-dismiss="modal" aria-label="Close">
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
														<img src="assets/img/user/u1.jpg" alt="user image">
													</div>

													<div class="card-body">
														<h4 class="py-2 text-dark">John Deo</h4>
														<p>john.example@gmail.com</p>
														<a class="btn btn-primary btn-pill my-3"
															href="#">Follow</a>
													</div>
												</div>

												<div class="d-flex justify-content-between ">
													<div class="text-center pb-4">
														<h6 class="text-dark pb-2">1503</h6>
														<p>Items</p>
													</div>

													<div class="text-center pb-4">
														<h6 class="text-dark pb-2">2905</h6>
														<p>Sell</p>
													</div>

													<div class="text-center pb-4">
														<h6 class="text-dark pb-2">1200</h6>
														<p>Payout</p>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="contact-info px-4">
												<h4 class="text-dark mb-1">Contact Details</h4>
												<p class="text-dark font-weight-medium pt-3 mb-2">Email address</p>
												<p>john.example@gmail.com</p>
												<p class="text-dark font-weight-medium pt-3 mb-2">Phone Number</p>
												<p>+00 1234 5678 91</p>
												<p class="text-dark font-weight-medium pt-3 mb-2">Birthday</p>
												<p>Dec 10, 1991</p>
												<p class="text-dark font-weight-medium pt-3 mb-2">Event</p>
												<p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Add Contact Button  -->
					<div class="modal fade" id="modal-add-member" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
							<div class="modal-content">
								<form class="modal-header border-bottom-0">
									<input type="text" class="form-control" placeholder="Search...">
								</form>

								<div class="modal-body p-0" data-simplebar style="height:320px">
									<ul class="list-unstyled border-top mb-0">
										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u1.jpg"
														alt="Image">
													<span class="status away"></span>
												</div>
												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Aaren</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox" checked="checked">
														<div class="control-indicator"></div>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="media media-message ">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u2.jpg"
														alt="Image">
													<span class="status active"></span>
												</div>
												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Leon Battista</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox" checked="checked">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u3.jpg"
														alt="Image">
													<span class="status away"></span>
												</div>
												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Abriel</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u4.jpg"
														alt="Image">
													<span class="status active"></span>
												</div>

												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Emma</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u5.jpg"
														alt="Image">
													<span class="status away"></span>
												</div>

												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Emily</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u6.jpg"
														alt="Image">
													<span class="status"></span>
												</div>

												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">William</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u7.jpg"
														alt="Image">
													<span class="status away"></span>
												</div>

												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Sophia</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u8.jpg"
														alt="Image">
													<span class="status"></span>
												</div>

												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Sophia</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u1.jpg"
														alt="Image">
													<span class="status away"></span>
												</div>
												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Aaren</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u2.jpg"
														alt="Image">
													<span class="status"></span>
												</div>
												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Abby</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u3.jpg"
														alt="Image">
													<span class="status away"></span>
												</div>
												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Abriel</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u4.jpg"
														alt="Image">
													<span class="status active"></span>
												</div>

												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Emma</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u5.jpg"
														alt="Image">
													<span class="status"></span>
												</div>

												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Emily</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u6.jpg"
														alt="Image">
													<span class="status away"></span>
												</div>

												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">William</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u7.jpg"
														alt="Image">
													<span class="status"></span>
												</div>

												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Sophia</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>
									</ul>
								</div>

								<div class="modal-footer px-4">
									<button type="button" class="btn btn-secondary btn-pill"
										data-bs-dismiss="modal">Cancel</button>
									<button type="button" class="btn btn-primary btn-pill">Add new member</button>
								</div>
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
