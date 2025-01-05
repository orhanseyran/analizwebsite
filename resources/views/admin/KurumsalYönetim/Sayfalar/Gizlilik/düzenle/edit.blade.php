@include('admin.head.SideBarComponents.head2')


<bod>
    @include('admin.head.header2')

    <!-- Header -->
	<!-- WRAPPER -->
    <div  class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">

        <div class="layout-container" >

            @include('admin.head.sidebar2')

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
                    <form action="{{ route("sayfa.duzenle",$get->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="sayfa_adi">Sayfa Adi:</label>
                        <select name="sayfa_adi" class="form-select" aria-label="Default select example">
                            <option value="{{ $get->sayfa_adi }}" selected>{{ $get->sayfa_adi }}</option>

                          </select>
                      </div>
                      <div class="form-group">
                        <label for="sayfa_icerik">Sayfa İçeriği:</label>
                        <textarea class="form-control" name="sayfa_icerik" id="summernote" rows="4">{{ $get->sayfa_icerik }}</textarea>
                      </div>

                      @for ($i = 1; $i <=8; $i++)
                      <div class="form-group">
                          <label for="sayfa_icerik{{ $i }}">Sayfa İçeriği {{ $i }}:</label>
                          <textarea class="form-control" name="sayfa_icerik{{ $i }}" id="summernote{{ $i }}" rows="4"></textarea>
                      </div>
                     @endfor


                      <div class="form-group">
                        <label for="sayfa_icerik9">Meta Açıklama:</label>
                        <textarea class="form-control" id="meta_aciklama" name="meta_aciklama" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="sayfa_icerik10">Anahtar Kelimeler : (Her Kelimeden Sonra , İle Ayırınız)</label>
                        <textarea class="form-control" id="anahtar_kelime" name="anahtar_kelime" rows="5"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="Resim">Resim:</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Resim Ekle
                              </a>
                            </span>
                            <input id="thumbnail" class="form-control" name="resimler" type="text" name="filepath">
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
                            <input id="thumbnail1" class="form-control" name="resim1" type="text" name="filepath">
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
                            <input id="thumbnail2" class="form-control" name="resim2" type="text" name="filepath">
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
                            <input id="thumbnail3" class="form-control" name="resim3" type="text" name="filepath">
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
                            <input id="thumbnail4" class="form-control" name="resim4" type="text" name="filepath">
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
                            <input id="thumbnail5" class="form-control" name="resim5" type="text" name="filepath">
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
                            <input id="thumbnail6" class="form-control" name="resim6" type="text" name="filepath">
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
                            <input id="thumbnail7" class="form-control" name="resim7" type="text" name="filepath">
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
                            <input id="thumbnail8" class="form-control" name="resim8" type="text" name="filepath">
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
                            <input id="thumbnail9" class="form-control" name="resim9" type="text" name="filepath">
                          </div>
                          <div id="holder9" style="margin-top:15px;max-height:300px;"></div>
                      </div>


                      <button type="submit" class="btn btn-primary" style="
                        width: 200px;
                    ">Kaydet</button>
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

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
   <script>


    $('#summernote').summernote({
      placeholder: '',
      tabsize: 2,
      height: 400
    });

    for (let index = 1; index <= 10; index++) {
    $('#summernote' + index).summernote({
        placeholder: '',
        tabsize: 2,
        height: 400
    });
}



  </script>


	<!-- Data Tables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

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

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>

    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

</body>
</html>
