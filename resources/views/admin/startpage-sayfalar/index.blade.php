
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

            <div class="container-fluid mt-5">
                <div class="row">
                  <div class="col-md-8 offset-md-2">
                    <h2 class="mb-4">Sayfa Bilgileri Ekle</h2>
                    <form action="/sayfa-kaydet" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="sayfa_adi">Sayfa Adı:</label>
                        <input type="text" class="form-control" id="sayfa_adi" name="sayfa_adi" required>
                      </div>
                      <div class="form-group">
                        <label for="sayfa_icerik">Sayfa İçeriği:</label>
                        <textarea class="form-control" id="sayfa_icerik" name="sayfa_icerik" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="sayfa_icerik1">Sayfa İçeriği 1:</label>
                        <textarea class="form-control" id="sayfa_icerik1" name="sayfa_icerik1" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="sayfa_icerik2">Sayfa İçeriği 2:</label>
                        <textarea class="form-control" id="sayfa_icerik2" name="sayfa_icerik2" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="sayfa_icerik3">Sayfa İçeriği 3:</label>
                        <textarea class="form-control" id="sayfa_icerik3" name="sayfa_icerik3" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="sayfa_icerik4">Sayfa İçeriği 4:</label>
                        <textarea class="form-control" id="sayfa_icerik4" name="sayfa_icerik4" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="sayfa_icerik5">Sayfa İçeriği 5:</label>
                        <textarea class="form-control" id="sayfa_icerik5" name="sayfa_icerik5" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="sayfa_icerik6">Sayfa İçeriği 6:</label>
                        <textarea class="form-control" id="sayfa_icerik6" name="sayfa_icerik6" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="sayfa_icerik7">Sayfa İçeriği 7:</label>
                        <textarea class="form-control" id="sayfa_icerik7" name="sayfa_icerik7" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="sayfa_icerik8">Sayfa İçeriği 8:</label>
                        <textarea class="form-control" id="sayfa_icerik8" name="sayfa_icerik8" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="sayfa_icerik9">Sayfa İçeriği 9:</label>
                        <textarea class="form-control" id="sayfa_icerik9" name="sayfa_icerik9" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="sayfa_icerik10">Sayfa İçeriği 10:</label>
                        <textarea class="form-control" id="sayfa_icerik10" name="sayfa_icerik10" rows="5"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="Resim">Resim:</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Resim Ekle
                              </a>
                            </span>
                            <input id="thumbnail" class="form-control" type="text" name="filepath">
                          </div>
                          <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                      </div>
                      <div class="form-group">
                        <label for="Resim">Resim 1:</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                              <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Resim Ekle
                              </a>
                            </span>
                            <input id="thumbnail1" class="form-control" type="text" name="filepath">
                          </div>
                          <div id="holder1" style="margin-top:15px;max-height:300px;"></div>
                      </div>
                      <div class="form-group">
                        <label for="Resim">Resim 2:</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                              <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Resim Ekle
                              </a>
                            </span>
                            <input id="thumbnail2" class="form-control" type="text" name="filepath">
                          </div>
                          <div id="holder2" style="margin-top:15px;max-height:100px;"></div>
                      </div>
                      <div class="form-group">
                        <label for="Resim">Resim 3:</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                              <a id="lfm3" data-input="thumbnail3" data-preview="holder3" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Resim Ekle
                              </a>
                            </span>
                            <input id="thumbnail3" class="form-control" type="text" name="filepath">
                          </div>
                          <div id="holder3" style="margin-top:15px;max-height:100px;"></div>
                      </div>
                      <div class="form-group">
                        <label for="Resim">Resim 4:</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                              <a id="lfm4" data-input="thumbnail5" data-preview="holder4" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Resim Ekle
                              </a>
                            </span>
                            <input id="thumbnail4" class="form-control" type="text" name="filepath">
                          </div>
                          <div id="holder4" style="margin-top:15px;max-height:100px;"></div>
                      </div>
                      <div class="form-group">
                        <label for="Resim">Resim 5:</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                              <a id="lfm5" data-input="thumbnail5" data-preview="holder5" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Resim Ekle
                              </a>
                            </span>
                            <input id="thumbnail5" class="form-control" type="text" name="filepath">
                          </div>
                          <div id="holder5" style="margin-top:15px;max-height:100px;"></div>
                      </div>
                      <div class="form-group">
                        <label for="Resim">Resim 6:</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                              <a id="lfm6" data-input="thumbnail6" data-preview="holder6" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Resim Ekle
                              </a>
                            </span>
                            <input id="thumbnail6" class="form-control" type="text" name="filepath">
                          </div>
                          <div id="holder6" style="margin-top:15px;max-height:100px;"></div>
                      </div>
                      <div class="form-group">
                        <label for="Resim">Resim 7:</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                              <a id="lfm7" data-input="thumbnail7" data-preview="holder7" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Resim Ekle
                              </a>
                            </span>
                            <input id="thumbnail7" class="form-control" type="text" name="filepath">
                          </div>
                          <div id="holder7" style="margin-top:15px;max-height:100px;"></div>
                      </div>
                      <div class="form-group">
                        <label for="Resim">Resim 8:</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                              <a id="lfm8" data-input="thumbnail8" data-preview="holder8" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Resim Ekle
                              </a>
                            </span>
                            <input id="thumbnail8" class="form-control" type="text" name="filepath">
                          </div>
                          <div id="holder8" style="margin-top:15px;max-height:100px;"></div>
                      </div>
                      <div class="form-group">
                        <label for="Resim">Resim 9:</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                              <a id="lfm9" data-input="thumbnail9" data-preview="holder9" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Resim Ekle
                              </a>
                            </span>
                            <input id="thumbnail9" class="form-control" type="text" name="filepath">
                          </div>
                          <div id="holder9" style="margin-top:15px;max-height:300px;"></div>
                      </div>


                      <button type="submit" class="btn btn-primary">Kaydet</button>
                    </form>
                  </div>
                </div>
              </div>


			<!-- Footer -->
            @include('admin.head.footer')

		</div> <!-- End Page Wrapper -->

	</div> <!-- End Wrapper -->
    <script>
        function previewImage(input, imgId) {
          var imgElement = document.getElementById(imgId);
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
              imgElement.src = e.target.result;
              imgElement.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
          }
        }
      </script>

	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>
    <script>
        $('#lfm').filemanager('image');

        $('#lfm1').filemanager('image');
        $('#lfm2').filemanager('image');
        $('#lfm3').filemanager('image');
        $('#lfm4').filemanager('image');
        $('#lfm5').filemanager('image');
        $('#lfm6').filemanager('image');
        $('#lfm7').filemanager('image');
        $('#lfm8').filemanager('image');
        $('#lfm9').filemanager('image');
        $('#lfm10').filemanager('image');

    </script>

	<!-- Data Tables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>

    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

</body>
</html>