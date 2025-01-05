
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
                                <h1>Product</h1>
                                <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                                    <span><i class="mdi mdi-chevron-right"></i></span>Product
                                </p>
                            </div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Launch demo modal
                              </button>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <form>
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">

                                        <div class="col-md-6 mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                          </div>
                                          <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                          </div>
                                    </div>
                                    <textarea id="editor1" name="editor1"></textarea>




                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                              </div>
                            </div>
                        </form>
                          </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card card-default">
                                    <div class="card-header card-header-border-bottom d-flex justify-content-between">
                                        <div class="card-bar">
                                            <div class="col-lg-6 col-md-12">
                                                <input type="text" class="form-control" id="searchProduct"
                                                    placeholder="search with product name..">
                                            </div>
                                            <div class="col-lg-6 col-md-12 sort">
                                                <div class="col-lg-4 col-md-6 p-space">
                                                    <select class="form-control" id="dropdownCategory">
                                                        <option value="ALL">ALL Category</option>
                                                        <option value="MEN">Men's</option>
                                                        <option value="WOMAN">Woman's</option>
                                                        <option value="KID">Kids</option>
                                                        <option value="OTHER">OTHER</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4 col-md-6 p-space">
                                                    <select class="form-control" id="dropdownOrderBy">
                                                        <option value="ALL">ORDER BY</option>
                                                        <option value="MEN">Letest</option>
                                                        <option value="WOMAN">Price Low - High</option>
                                                        <option value="KID">Price High - Low</option>
                                                        <option value="OTHER">OTHER</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-sm-6">
                                                <div class="card-wrapper">
                                                    <div class="card-container">
                                                        <div class="card-top">
                                                            <img class="card-image" src="assets/img/products/p1.jpg"
                                                                alt="" />
                                                        </div>
                                                        <div class="card-bottom">
                                                            <h3>Glomy shoes</h3>
                                                            <p>$50</p>
                                                        </div>
                                                        <div class="card-action">
                                                            <div class="card-edit"><i
                                                                    class="mdi mdi-circle-edit-outline"></i></div>
                                                            <div class="card-preview"><i class="mdi mdi-eye-outline"></i>
                                                            </div>
                                                            <div class="card-remove"><i
                                                                    class="mdi mdi mdi-delete-outline"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <nav aria-label="Page navigation example p-0">
                                                <ul class="pagination pagination-seperated pagination-seperated-rounded">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <span aria-hidden="true"
                                                                class="mdi mdi-chevron-left mr-1"></span> Prev
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                    </li>

                                                    <li class="page-item active">
                                                        <a class="page-link" href="#">1</a>
                                                    </li>

                                                    <li class="page-item">
                                                        <a class="page-link" href="#">2</a>
                                                    </li>

                                                    <li class="page-item">
                                                        <a class="page-link" href="#">3</a>
                                                    </li>

                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            Next
                                                            <span aria-hidden="true"
                                                                class="mdi mdi-chevron-right ml-1"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


			</div>




			<!-- Footer -->
            @include('admin.head.footer')

		</div> <!-- End Page Wrapper -->

	</div> <!-- End Wrapper -->

    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('editor1');
    </script>


	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Data Tables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>
</html>
