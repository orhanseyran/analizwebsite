@include('admin.head.SideBarComponents.head2')


<bod>
    @include('admin.head.header2')

    <!-- Header -->
	<!-- WRAPPER -->
    <div  class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">

        <div class="layout-container" >

            @include('admin.head.sidebar2')


			<!-- Header -->
            <div style="display: none">
                @include('admin.head.header')
            </div>


			<!-- CONTENT WRAPPER -->
            <div class="container">
                <div class="content">

                    <div class="row">
                        <div class="col-12">

                            <form class="row g-3" method="POST" action="{{ auth()->user()->Role == "Admin" ? route("urun.ekle") : route("satici-urun.ekle")  }}  " enctype="multipart/form-data">

                                @csrf
                                <div class="card card-default">
                                    <div class="card-header card-header-border-bottom">
                                        <h2>Ürün Ekle</h2>
                                    </div>

                                    <div class="card-body">
                                        <div class="row ec-vendor-uploads">

                                            {{-- <div class="col-lg-4 mt-4">
                                                <div class="ec-vendor-img-upload">

                                                    <div class="ec-vendor-main-img">
                                                        <div class="avatar-upload">
                                                            <div class="avatar-edit">
                                                                <input type='file' id="imageUpload" name="r1" class="ec-image-upload"
                                                                    accept=".png, .jpg, .jpeg" />
                                                                <label for="imageUpload"><img
                                                                        src="assets/img/icons/edit.svg"
                                                                        class="svg_img header_svg" alt="düzenle" /></label>
                                                            </div>
                                                            <div class="avatar-preview ec-preview">
                                                                <div class="imagePreview ec-div-preview">
                                                                    <img class="ec-image-preview"
                                                                        src="assets/img/products/vender-upload-preview.jpg"
                                                                        alt="düzenle" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="thumb-upload-set colo-md-12">
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' name="r2" id="thumbUpload01"
                                                                        class="ec-image-upload"
                                                                        accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="assets/img/icons/edit.svg"
                                                                            class="svg_img header_svg" alt="düzenle" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                            src="assets/img/products/vender-upload-thumb-preview.jpg"
                                                                            alt="düzenle" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' name="r3" id="thumbUpload02"
                                                                        class="ec-image-upload"
                                                                        accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="assets/img/icons/edit.svg"
                                                                            class="svg_img header_svg" alt="düzenle" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                            src="assets/img/products/vender-upload-thumb-preview.jpg"
                                                                            alt="düzenle" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' name="r4" id="thumbUpload03"
                                                                        class="ec-image-upload"
                                                                        accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="assets/img/icons/edit.svg"
                                                                            class="svg_img header_svg" alt="düzenle" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                            src="assets/img/products/vender-upload-thumb-preview.jpg"
                                                                            alt="düzenle" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' name="r5" id="thumbUpload04"
                                                                        class="ec-image-upload"
                                                                        accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="assets/img/icons/edit.svg"
                                                                            class="svg_img header_svg" alt="düzenle" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                            src="assets/img/products/vender-upload-thumb-preview.jpg"
                                                                            alt="düzenle" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' name="r6" id="thumbUpload05"
                                                                        class="ec-image-upload"
                                                                        accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="assets/img/icons/edit.svg"
                                                                            class="svg_img header_svg" alt="düzenle" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                            src="assets/img/products/vender-upload-thumb-preview.jpg"
                                                                            alt="düzenle" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' name="r7" id="thumbUpload06"
                                                                        class="ec-image-upload"
                                                                        accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="assets/img/icons/edit.svg"
                                                                            class="svg_img header_svg" alt="düzenle" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                            src="assets/img/products/vender-upload-thumb-preview.jpg"
                                                                            alt="düzenle" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div> --}}
                                            <div class="col-lg-12">
                                                <div class="ec-vendor-upload-detail">
                                                    <div class="row g-3">
                                                        <div class="col-md-6 mt-4">
                                                            <label for="inputEmail4" class="form-label">Ürün Adı</label>
                                                            <input required type="text" name="baslik" class="form-control slug-title" id="inputEmail4">
                                                        </div>
                                                        <div class="col-md-6 mt-4">
                                                            <label class="form-label">Kategorileri Seç</label>
                                                            <select name="kategori" id="Categories" class="form-select">
                                                                @foreach ($category as $ct )
                                                                <optgroup label="{{ $ct->name }}">
                                                                    @foreach ($altkt as $alt )
                                                                    @if ($alt)
                                                                    @if ($ct->id == $alt->parent_category)
                                                                    <option value="{{ $ct->name }}">{{ $alt->name }}</option>
                                                                     @else
                                                                    @endif
                                                                    @endif


                                                                    @endforeach

                                                                </optgroup>
                                                                @endforeach


                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mt-4">
                                                            <label class="form-label">Kargo</label>
                                                            <select name="kargo" id="Categories" class="form-select">
                                                                <option selected value="Dijital Ürün">Dijital Gönderim </option>
                                                                @foreach ($kargo as $k )
                                                                <option value="{{ $k->kargo_adi }}">{{ $k->kargo_adi }}</option>
                                                                @endforeach





                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mt-4">
                                                            <label class="form-label">Marka</label>
                                                            <select name="marka" id="marka" class="form-select">
                                                                @foreach ($markalar as $k )
                                                                <option value="{{ $k->marka_adi }}">{{ $k->marka_adi }}</option>
                                                                @endforeach




                                                            </select>
                                                        </div>

                                                        {{-- <div class="col-md-12 mt-2">
                                                            <label class="form-label">Kısa Açıklama</label>
                                                            <textarea class="form-control" rows="2"></textarea>
                                                        </div> --}}
                                                        <div class="col-md-6 mt-4">
                                                            <label class="form-label">Fiyat <span>( TL olarak )</span></label>
                                                            <input type="number" name="fiyat" class="form-control" id="price1">
                                                        </div>
                                                        <div class="col-md-6 mt-4">
                                                            <label class="form-label">Adet</label>
                                                            <input type="number" name="stok_miktarı" class="form-control" id="quantity1">
                                                        </div>
                                                        <div class="col-md-12 mt-4">
                                                            <label class="form-label">Tam Açıklama</label>
                                                            <textarea class="form-control" name="aciklama" id="summernote" rows="4"></textarea>
                                                        </div>
                                                        <div class="col-md-12 mt-4">
                                                            <label class="form-label">Ürün Etiketleri <span>( Etiketleri yazıp, virgül ile ayırın )</span></label>
                                                            <input type="text" class="form-control" id="group_tag"
                                                                name="anahtar_kelime" value="" placeholder=""
                                                                data-role="tagsinput" />
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item">
                                                      <h2 class="accordion-header">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                          Ürün Varyasyonları
                                                        </button>
                                                      </h2>
                                                      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">

                                                                <div class="row">
                                                                    <div class="col-md-4 ">
                                                                        <label class="form-label">Beden</label>
                                                                        <select name="marka" id="marka" class="form-select">
                                                                            @foreach ($markalar as $k )
                                                                            <option value="{{ $k->marka_adi }}">{{ $k->marka_adi }}</option>
                                                                            @endforeach




                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-4 ">
                                                                        <label class="form-label">Renk</label>
                                                                        <select name="marka" id="marka" class="form-select">
                                                                            @foreach ($markalar as $k )
                                                                            <option value="{{ $k->marka_adi }}">{{ $k->marka_adi }}</option>
                                                                            @endforeach




                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-4 ">
                                                                        <label class="form-label">Malzeme</label>
                                                                        <select name="marka" id="marka" class="form-select">
                                                                            @foreach ($markalar as $k )
                                                                            <option value="{{ $k->marka_adi }}">{{ $k->marka_adi }}</option>
                                                                            @endforeach




                                                                        </select>
                                                                    </div>

                                                                </div>


                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                      <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                          Kargo
                                                        </button>
                                                      </h2>
                                                      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <div class="row">
                                                                <div class="col-md-4 ">
                                                                    <label class="form-label">Gönderim Süresi</label>
                                                                    <select name="marka" id="marka" class="form-select">
                                                                        @foreach ($markalar as $k )
                                                                        <option value="{{ $k->marka_adi }}">{{ $k->marka_adi }}</option>
                                                                        @endforeach




                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4 ">
                                                                    <label class="form-label">Desi</label>
                                                                    <select name="marka" id="marka" class="form-select">
                                                                        @foreach ($markalar as $k )
                                                                        <option value="{{ $k->marka_adi }}">{{ $k->marka_adi }}</option>
                                                                        @endforeach




                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4 ">
                                                                    <label class="form-label">Ağırlık</label>
                                                                    <select name="marka" id="marka" class="form-select">
                                                                        @foreach ($markalar as $k )
                                                                        <option value="{{ $k->marka_adi }}">{{ $k->marka_adi }}</option>
                                                                        @endforeach




                                                                    </select>
                                                                </div>

                                                            </div>

                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                      <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                          Kdv Ve Fatura
                                                        </button>
                                                      </h2>
                                                      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <div class="row">
                                                                <div class="col-md-4 ">
                                                                    <label class="form-label">Gönderim Süresi</label>
                                                                    <select name="marka" id="marka" class="form-select">
                                                                        @foreach ($markalar as $k )
                                                                        <option value="{{ $k->marka_adi }}">{{ $k->marka_adi }}</option>
                                                                        @endforeach




                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4 ">
                                                                    <label class="form-label">Desi</label>
                                                                    <select name="marka" id="marka" class="form-select">
                                                                        @foreach ($markalar as $k )
                                                                        <option value="{{ $k->marka_adi }}">{{ $k->marka_adi }}</option>
                                                                        @endforeach




                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4 ">
                                                                    <label class="form-label">Ağırlık</label>
                                                                    <select name="marka" id="marka" class="form-select">
                                                                        @foreach ($markalar as $k )
                                                                        <option value="{{ $k->marka_adi }}">{{ $k->marka_adi }}</option>
                                                                        @endforeach




                                                                    </select>
                                                                </div>

                                                            </div>                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-4 ">
                                                    <button type="submit" class="btn btn-primary">Gönder</button>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div> <!-- İçerik Bitti -->
            </div>
             <!-- End Content Wrapper -->

			<!-- Footer -->


		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->





    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
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


    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
       <script>
        $('#summernote').summernote({
          placeholder: '',
          tabsize: 2,
          height: 400
        });
      </script>
</body>

</html>
