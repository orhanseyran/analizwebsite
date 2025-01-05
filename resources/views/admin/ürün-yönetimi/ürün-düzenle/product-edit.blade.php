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
                            <h1>Ürün Ekle</h1>
                            <p class="breadcrumbs"><span><a href="index.html">Ana Sayfa</a></span>
                                <span><i class="mdi mdi-chevron-right"></i></span>Ürün</p>
                        </div>
                        <div>
                            <a href="{{ route("admin.product-list") }}" class="btn btn-primary"> Tümünü Görüntüle
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form class="row g-3" method="POST" action="{{ route("düzenle",$product->id) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card card-default">
                                    <div class="card-header card-header-border-bottom">
                                        <h2>Ürün Ekle</h2>
                                    </div>

                                    <div class="card-body">
                                        <div class="row ec-vendor-uploads">

                                            <div class="col-lg-4">
                                                <div class="ec-vendor-img-upload">

                                                    <div class="ec-vendor-main-img">
                                                        <div class="avatar-upload">
                                                            <div class="avatar-edit">
                                                                <input type='file' value="{{ $product->r1 }}" id="imageUpload" name="r1" class="ec-image-upload"
                                                                    accept=".png, .jpg, .jpeg" />
                                                                <label for="imageUpload"><img
                                                                        src="assets/img/icons/edit.svg"
                                                                        class="svg_img header_svg" alt="düzenle" /></label>
                                                            </div>
                                                            <div class="avatar-preview ec-preview">
                                                                <div class="imagePreview ec-div-preview">
                                                                    @if ($product->r1)
                                                                    <img class="image-thumb-preview ec-image-preview"
                                                                    src="images/{{ $product->r1 }}"
                                                                    alt="düzenle" />
                                                                    @else
                                                                    <img class="image-thumb-preview ec-image-preview"
                                                                    src="images/resimyok.jpg"
                                                                    alt="düzenle" />
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="thumb-upload-set colo-md-12">
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' value="{{ $product->r2 }}" name="r2" id="thumbUpload01"
                                                                        class="ec-image-upload"
                                                                        accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="assets/img/icons/edit.svg"
                                                                            class="svg_img header_svg" alt="düzenle" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        @if ($product->r2)
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                        src="images/{{ $product->r2 }}"
                                                                        alt="düzenle" />
                                                                        @else
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                        src="images/resimyok.jpg"
                                                                        alt="düzenle" />
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' value="{{ $product->r3 }}" name="r3" id="thumbUpload02"
                                                                        class="ec-image-upload"
                                                                        accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="assets/img/icons/edit.svg"
                                                                            class="svg_img header_svg" alt="düzenle" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        @if ($product->r3)
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                        src="images/{{ $product->r3 }}"
                                                                        alt="düzenle" />
                                                                        @else
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                        src="images/resimyok.jpg"
                                                                        alt="düzenle" />
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' value="{{ $product->r4 }}" name="r4" id="thumbUpload03"
                                                                        class="ec-image-upload"
                                                                        accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="assets/img/icons/edit.svg"
                                                                            class="svg_img header_svg" alt="düzenle" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        @if ($product->r4)
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                        src="images/{{ $product->r4 }}"
                                                                        alt="düzenle" />
                                                                        @else
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                        src="images/resimyok.jpg"
                                                                        alt="düzenle" />
                                                                        @endif

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' value="{{ $product->r5 }}" name="r5" id="thumbUpload04"
                                                                        class="ec-image-upload"
                                                                        accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="assets/img/icons/edit.svg"
                                                                            class="svg_img header_svg" alt="düzenle" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        @if ($product->r5)
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                        src="images/{{ $product->r5 }}"
                                                                        alt="düzenle" />

                                                                        @else
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                        src="images/resimyok.jpg"
                                                                        alt="düzenle" />

                                                                        @endif

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' value="{{ $product->r6 }}" name="r6" id="thumbUpload05"
                                                                        class="ec-image-upload"
                                                                        accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="assets/img/icons/edit.svg"
                                                                            class="svg_img header_svg" alt="düzenle" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        @if ($product->r6)
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                        src="images/{{ $product->r6 }}"
                                                                        alt="düzenle" />

                                                                        @else
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                        src="images/resimyok.jpg"
                                                                        alt="düzenle" />

                                                                        @endif

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' value="{{ $product->r7 }}" name="r7" id="thumbUpload06"
                                                                        class="ec-image-upload"
                                                                        accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="assets/img/icons/edit.svg"
                                                                            class="svg_img header_svg" alt="düzenle" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        @if ($product->r7)
                                                                        <img class="image-thumb-preview ec-image-preview"

                                                                        src="images/{{ $product->r7  }}"
                                                                        alt="düzenle" />

                                                                        @else
                                                                        <img class="image-thumb-preview ec-image-preview"

                                                                        src="images/resimyok.jpg"
                                                                        alt="düzenle" />

                                                                        @endif

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="ec-vendor-upload-detail">
                                                    <div class="row g-3">
                                                        <div class="col-md-6 mt-2">
                                                            <label for="inputEmail4" class="form-label">Ürün Adı</label>
                                                            <input required type="text" name="baslik" value="{{ $product->baslik }}" class="form-control slug-title" id="inputEmail4">
                                                        </div>
                                                        <div class="col-md-6 mt-2">
                                                            <label class="form-label">Kategorileri Seç ({{ $product->kategori ? $product->kategori : "Kategori Seçilmemiş"  }})</label>
                                                            <select name="kategori" id="Categories" class="form-select">
                                                                <option selected value="{{$product->kategori ? $product->kategori : "Kategori Seçilmemiş"  }}">{{ $product->kategori ? $product->kategori : "Kategori Seçilmemiş"  }} </option>
                                                                @foreach ($category as $ct )
                                                                <optgroup label="{{ $ct->name }}">
                                                                    @foreach ($altkt as $alt )
                                                                    @if ($ct->id == $alt->parent_category)
                                                                    <option value="{{ $ct->name }}">{{ $alt->name }}</option>
                                                                     @else
                                                                    @endif
                                                                    @endforeach

                                                                </optgroup>
                                                                @endforeach


                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mt-2">
                                                            <label class="form-label">Kargo</label>
                                                            <select name="kargo" id="Categories" class="form-select">
                                                                <option selected value="{{$product->kargo ? $product->kargo : "Kargo Seçilmemiş"  }}">{{$product->kargo ? $product->kargo : "Kargo Seçilmemiş"  }} </option>

                                                                @foreach ($kargo as $k )
                                                                <option value="{{ $k->kargo_adi }}">{{ $k->kargo_adi }}</option>
                                                                @endforeach





                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mt-2">
                                                            <label class="form-label">Marka</label>
                                                            <select name="marka" id="marka" class="form-select">
                                                                <option selected value="{{$product->marka? $product->marka : "Marka Seçilmemiş"  }}">{{$product->marka ? $product->marka : "Marka Seçilmemiş"  }} </option>
                                                                @foreach ($markalar as $k )
                                                                <option value="{{ $k->marka_adi }}">{{ $k->marka_adi }}</option>
                                                                @endforeach




                                                            </select>
                                                        </div>

                                                        {{-- <div class="col-md-12 mt-2">
                                                            <label class="form-label">Kısa Açıklama</label>
                                                            <textarea class="form-control" rows="2"></textarea>
                                                        </div> --}}
                                                        <div class="col-md-6 mt-2">
                                                            <label class="form-label">Fiyat <span>( TL olarak )</span></label>
                                                            @if ( $product->fiyat)
                                                            <input type="number" class="form-control" name="fiyat" value="{{ $product->fiyat }}" id="price1">

                                                            @else
                                                            <input type="number" class="form-control" name="fiyat" placeholder="Fiyat Girilmemiş" id="price1">

                                                            @endif
                                                        </div>
                                                        <div class="col-md-6 mt-2">
                                                            <label class="form-label">Adet</label>
                                                            @if ($product->stok_miktarı)
                                                            <input type="number" class="form-control" name="stok_miktarı" value="{{ $product->stok_miktarı}}"  id="quantity1">
                                                            @else
                                                            <input type="number" class="form-control" name="stok_miktarı" placeholder="Stok Miktari Yok"  id="quantity1">

                                                            @endif

                                                        </div>
                                                        <div class="col-md-12 mt-4">
                                                            <label class="form-label">Tam Açıklama</label>
                                                            <textarea class="form-control" name="aciklama" id="summernote" rows="4">{!!$product->aciklama!!}</textarea>
                                                        </div>

                                                        <div class="col-md-12 mt-2">
                                                            <label class="form-label">Ürün Etiketleri <span>( Etiketleri yazıp, virgül ile ayırın )</span></label>
                                                            <input type="text" class="form-control" id="group_tag"
                                                            name="anahtar_kelime" value="" placeholder=""
                                                                data-role="tagsinput" />
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button type="submit" class="btn btn-primary">Düzenle</button>
                                                        </div>
                                                    </div>
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
            @include('admin.head.footer')

		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/tags-input/bootstrap-tagsinput.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

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
