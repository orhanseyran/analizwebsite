@include('admin.head.SideBarComponents.head2')
@include('admin.head.header2')
<div  class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
	<div class="layout-container" >

		<!-- LEFT MAIN SIDEBAR -->

        @include('admin.head.sidebar2')

		<!-- PAGE WRAPPER -->
		<div style="width: 90%" class="container mt-5">

			<!-- Header -->



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
				<div class="row">
					<div class="breadcrumb-wrapper breadcrumb-contacts">
						<div>
							<h1>Kullanıcı Listesi</h1>
							<p class="breadcrumbs"><span><a href="">Ana Sayfa</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Kullanıcı
							</p>
						</div>
						<div>
                            <a href="/userexport" class="btn btn-outline-success">Export Exel</a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal"
								data-bs-target="#addUser"> Kullanıcı Ekle
							</button>
						</div>
					</div>
					<div class="row mt-5">
						<div class="col-12">
							<div class="ec-vendor-list card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table">
											<thead>
												<tr>
													<th>Profil</th>
													<th>Ad</th>
													<th>Email</th>
													<th>Telefon</th>
													<th>Toplam Sipariş</th>
													<th>Durum</th>
													<th>Kayıt Olma Tarihi</th>
													<th>Aksiyon</th>
												</tr>
											</thead>

											<tbody>
                                                @foreach ($users as $user )
												<tr>
                                                    @if ($user->resim)
													<td><img style="width:30px"  src="images/{{ $user->resim }}" alt="user profile" /></td>

                                                    @else
													<td><img style="width:30px"   src="images/resimyokuser.png" alt="user profile" /></td>

                                                    @endif

													<td>{{ $user->name }}</td>
													<td>{{ $user->email }}</td>
													<td>{{ $user->TelefonNumarası}}</td>
													<td>{{ $user->sipariş_sayisi }}</td>
													@if ($user->Durum)
													<td>Aktif Kullanıcı</td>
													@else
													<td>Pasif Kullanıcı</td>

													@endif

													<td>{{ $user->created_at }}</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Detay</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#editUser{{ $user->id }}" >Düzenle</a>
																<a class="dropdown-item" href="#">Sil</a>
															</div>
														</div>
													</td>
												</tr>
												<div class="modal fade modal-add-contact" id="editUser{{ $user->id }}" tabindex="-1" role="dialog"
												aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
													<div class="modal-content">
														<form method="POST" action="{{ route("updateUser",$user->id) }}">
                                                            @csrf
															<div class="modal-header px-4">
																<h5 class="modal-title" id="exampleModalCenterTitle">Kullanıcı Düzenle</h5>
															</div>

															<div class="modal-body px-4">
																<div class="form-group row mb-6">
																	<label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Kullanıcı Resmi</label>

																	<div class="col-sm-8 col-lg-10">
																		<div class="custom-file mb-1">
																			<input type="file" class="custom-file-input" id="coverImage"
																				>
																			<label class="custom-file-label" for="coverImage">Resim dosyası</label>
																			<div class="invalid-feedback">Example invalid custom file feedback
																			</div>
																		</div>
																	</div>
																</div>

																<div class="row mb-2">
																	<div class="col-lg-6">
																		<div class="form-group">
																			<label for="firstName">Ad</label>
																			<input type="text" value="{{ $user->name }}"  name="name"  class="form-control" id="firstName" >
																		</div>
																	</div>

																	<div class="col-lg-6">
																		<div class="form-group">
																			<label for="lastName">Soyad</label>
																			<input type="text" value="{{ $user->Soyad }}" class="form-control" name="Soyad" id="lastName" value="Deo">
																		</div>
																	</div>

																	{{-- <div class="col-lg-6">
																		<div class="form-group mb-4">
																			<label for="userName">Kullanıcı Adı</label>
																			<input type="text" value="{{ $user->user_name }}" class="form-control" id="userName"
																				value="johndoe">
																		</div>
																	</div> --}}

																	<div class="col-lg-6">
																		<div class="form-group mb-4">
																			<label for="email">Email</label>
																			<input type="email"  value="{{ $user->email }}" name="email" class="form-control" id="email"
																				>
																		</div>
																	</div>
                                                                    <div class="col-lg-6">
																		<div class="form-group mb-4">
																			<label for="Birthday">Telefon</label>
																			<input type="number"  value="{{ $user->TelefonNumarası	 }}" name="TelefonNumarası" class="form-control" id="Birthday"
																				>
																		</div>
																	</div>

																	<div class="col-lg-6">
																		<div class="form-group mb-4">
																			<label for="Birthday">Doğum Tarihi</label>
																			<input type="text" value="{{ $user->Doğum_Tarihi }}" name="Doğum_Tarihi" class="form-control" id="Birthday"
																				>
																		</div>
																	</div>

																	<div class="col-lg-6">
																		<div class="form-group mb-4">
																			<label for="event">Adres</label>
																			<input type="text" value="{{ $user->Adres }}" name="Adres" class="form-control" id="event"
																				>
																		</div>
																	</div>
																</div>
															</div>

															<div class="modal-footer px-4">
																<button type="button" class="btn btn-secondary btn-pill"
																	data-bs-dismiss="modal">İptal</button>
																<button type="submit" class="btn btn-primary btn-pill">Kullanıcıyı Düzenle</button>
															</div>
														</form>
													</div>
												</div>
											</div>
                                                @endforeach




											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Add User Modal  -->
					<div class="modal fade modal-add-contact" id="addUser" tabindex="-1" role="dialog"
						aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
							<div class="modal-content">
								<form action="{{ route("addUser") }}" method="POST" enctype="multipart/form-data">
                                    @csrf
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
													<label for="firstName">Ad</label>
													<input type="text" class="form-control" name="name" id="firstName" value="">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group">
													<label for="lastName">Soyad</label>
													<input type="text" class="form-control" name="Soyad" id="lastName" value="">
												</div>
											</div>

											{{-- <div class="col-lg-6">
												<div class="form-group mb-4">
													<label for="userName">User name</label>
													<input type="text" class="form-control" id="userName"
														value="johndoe">
												</div>
											</div> --}}

											<div class="col-lg-6">
												<div class="form-group mb-4">
													<label for="email">Email</label>
													<input type="email" class="form-control" name="email" id="email"
														>
												</div>
											</div>
                                            <div class="col-lg-6">
												<div class="form-group mb-4">
													<label for="email">Şifre</label>
													<input type="password" class="form-control" name="password" id="email"
														>
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group mb-4">
													<label for="Birthday">Doğum Tarihi</label>
													<input type="date" class="form-control" name="Doğum_Tarihi" id="Birthday"
														>
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group mb-4">
													<label for="event">Adres</label>
													<input type="text" class="form-control" name="Adres" id="event"
														>
												</div>
											</div>
										</div>
									</div>

									<div class="modal-footer px-4">
										<button type="button" class="btn btn-secondary btn-pill"
											data-bs-dismiss="modal">İptal</button>
										<button type="submit" class="btn btn-primary btn-pill">Kullanıcı Kaydet</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->

			<!-- Footer -->


		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->

	<!-- Option Switcher -->
    <script src="admin2/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="admin2/assets/vendor/libs/popper/popper.js"></script>
    <script src="admin2/assets/vendor/js/bootstrap.js"></script>
    <script src="admin2/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="admin2/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="admin2/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="admin2/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="admin2/assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="admin2/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="admin2/assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="admin2/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

    <!-- Main JS -->
    <script src="admin2/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="admin2/assets/js/app-ecommerce-dashboard.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>

</html>
