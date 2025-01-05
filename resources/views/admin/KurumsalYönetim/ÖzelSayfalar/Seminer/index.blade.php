@include('admin.head.SideBarComponents.head2')


<bod>
    @include('admin.head.header2')

    <!-- Header -->
	<!-- WRAPPER -->
    <div  class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">

        <div class="layout-container" >

            @include('admin.head.sidebar2')


			<!-- CONTENT WRAPPER -->
            <div class="container">
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
                        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                            <div>
                                <h1>Seminer Verilen Kuruluşlar</h1>
                                <p class="breadcrumbs"><span><a href="index.html">Ana Sayfa</a></span>
                                    <span><i class="mdi mdi-chevron-right"></i></span> Seminer</p>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modal-add-member">Seminer Ekle
                                </button>
                            </div>
                        </div>

                        <div class="product-brand card card-default p-24px">
                            <div class="row mb-m-24px">
                                @foreach ($sayfa as $get)
                                <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                                    <div class="card card-default">
                                        <div class="card-body text-center p-24px">
                                            <div class="image mb-3">
                                                @if ($get->içerik1 == null)
                                                <img src="kargo/kargo.jpeg" class="img-fluid rounded-circle"
                                                alt="Avatar Resmi">
                                                @else
                                                <img src="{{ $get->içerik1 }}" class="img-fluid rounded-circle"
                                                alt="Avatar Resmi">

                                                @endif

                                            </div>

                                            <h5 class="card-title text-dark">{{ $get->içerik2 }} </h5>

                                            <a id="uyarı" onclick="return confirm('Bu Semineri silmek istediğinize emin misiniz?');" href="{{ route("ozelsayfa.sil",$get->id) }}"><span class="brand-delete mdi mdi-delete-outline"></span></a><br>


                                        </div>
                                    </div>

                                </div>
                                @endforeach


                            </div>
                        </div>


                        <!-- Contact Modal -->
                        {{-- <div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                    <div class="card text-center widget-profile px-0 border-0">
                                                        <div class="card-img mx-auto rounded-circle">
                                                            <img src="assets/img/user/u6.jpg" alt="user image">
                                                        </div>

                                                        <div class="card-body">
                                                            <h4 class="py-2 text-dark">Albrecht Straub</h4>
                                                            <p>Albrecht.straub@gmail.com</p>
                                                            <a class="btn btn-primary btn-pill btn-lg my-4"
                                                                href="#">Follow</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-content-between ">
                                                        <div class="text-center pb-4">
                                                            <h6 class="text-dark pb-2">1503</h6>
                                                            <p>Friends</p>
                                                        </div>

                                                        <div class="text-center pb-4">
                                                            <h6 class="text-dark pb-2">2905</h6>
                                                            <p>Followers</p>
                                                        </div>

                                                        <div class="text-center pb-4">
                                                            <h6 class="text-dark pb-2">1200</h6>
                                                            <p>Following</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="contact-info px-4">
                                                    <h4 class="text-dark mb-1">Contact Details</h4>
                                                    <p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
                                                    <p>Albrecht.straub@gmail.com</p>
                                                    <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
                                                    <p>+99 9539 2641 31</p>
                                                    <p class="text-dark font-weight-medium pt-4 mb-2">Birthday</p>
                                                    <p>Nov 15, 1990</p>
                                                    <p class="text-dark font-weight-medium pt-4 mb-2">Event</p>
                                                    <p>Lorem, ipsum dolor</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <!-- Add Contact Button  -->
                        <div class="modal fade" id="modal-add-member" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <form class="modal-header border-bottom-0" action="{{ route("ozelsayfa.ekle") }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <h2 class="mt-5 text-center">Partner Ekle</h2>
                                            <div class="col-12 mt-5">
                                                <div class="form-group">
                                                    <label for="Resim">Video Veya Resim:</label>
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                          <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                            <i class="fa fa-picture-o"></i> Ekle
                                                          </a>
                                                        </span>
                                                        <input id="thumbnail" class="form-control" name="içerik1" type="text" name="filepath">
                                                      </div>
                                                      <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                                  </div>
                                            </div>
                                            <div style="display:none" class="col-12 mt-5">
                                                <label for="file"> Ad</label>
                                                <input type="text" name="sayfa_adi" class="form-control" value="Seminer" >
                                            </div>
                                            <div class="col-12 mt-5">
                                                <label for="file"> Yorum (Zorunlu Değil) </label>
                                                <textarea name="içerik2" class="form-control" placeholder="Yorum"></textarea>
                                            </div>
                                            <div class="col-12 mt-5">
                                                <label for="file"> Kurumun Web Sitesi (Zorunlu Değil)</label>
                                                <input type="text" name="içerik3" class="form-control" placeholder="Şirket Adı Veya Kişi Adı">
                                            </div>



                                        <div class="modal-footer px-4">
                                            <button type="button" class="btn btn-secondary btn-pill"
                                                data-bs-dismiss="modal">İptal Et</button>
                                            <button type="submit" class="btn btn-primary btn-pill">Seminer Ekle</button>
                                        </div>


                                        </div>


                                    </form>



                                </div>
                            </div>
                        </div>

                    </div> <!-- End Content -->
                </div>
            </div>
 <!-- End Content Wrapper -->

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

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image');

        $('#lfm1').filemanager('file');
            </script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>
        $('#summernote').summernote({
  placeholder: '',
  tabsize: 2,
  height: 400
});
</script>

	<!-- Data Tables -->
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

    <!-- Data Tables -->
    <script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>

    <!-- Ekka Custom -->
    <script src="assets/js/ekka.js"></script>
</body>

</html>
