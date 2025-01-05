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
                    <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
                        <h1><a href="/admin-category-category" class="btn btn-success">Yeni Kategori Ekle + </a></h1>
                        <p class="breadcrumbs"><span><a href="index.html">Ana Sayfa</a></span>
                            <span><i class="mdi mdi-chevron-right"></i></span>Ana Kategori</p>
                    </div>
                    @if(session('onay'))
                    <div class="alert alert-success">
                        {{ session('onay') }}
                    </div>
                    @elseif(session('hata'))
                    <div class="alert alert-danger">
                        {{ session('hata') }}
                    </div>

                    @endif
                    <div class="row">
                        <div class="col-xl-4 col-lg-12">
                            <div class="ec-cat-list card card-default mb-24px">
                                <div class="card-body">
                                    <div class="ec-cat-form">
                                        <h4>{{ $edit->name  }} Adlı Kategoriyi Düzenle</h4>

                                        <form method="POST" action="{{ route("CategoryEdit",$edit->id) }}">
                                            @csrf

                                            <div class="form-group row">
                                                <label for="text" class="col-12 col-form-label">İsim</label>
                                                <div class="col-12">
                                                    <input id="text" name="name" value="{{ $edit->name }}"  class="form-control here slug-title" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="text" class="col-12 col-form-label">Komisyon Orani %</label>
                                                <p>Komisyon Oranı Girilmezse Sistem Otomatik Olarak Kategoriye %15 Komisyon Oranı Verir</p>
                                                <div class="col-12 mt-2">
                                                    <input  name="commission" min="5" value="{{ $edit->commission }}" class="form-control" type="number">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="slug" class="col-12 col-form-label">Slug</label>
                                                <div class="col-12">
                                                    <input id="slug" name="slug"  value="{{ $edit->slug }}" class="form-control here set-slug" type="text">
                                                    <small>“Slug” ismin URL dostu versiyonudur. Genellikle küçük harflerden oluşur ve sadece harfler, sayılar ve tireler içerir.</small>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-12 col-form-label">Kısa Açıklama</label>
                                                <div class="col-12">
                                                    <textarea id="sortdescription"  name="shortdescription" cols="40" rows="2" class="form-control">{{ $edit->shortdescription }}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-12 col-form-label">Tam Açıklama</label>
                                                <div class="col-12">
                                                    <textarea id="fulldescription" name="full_description" cols="40" rows="4" class="form-control">{{ $edit->full_description }}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-12 col-form-label">Ürün Etiketleri <span>( Etiketleri yazıp, virgül ile ayırın )</span></label>
                                                <div class="col-12">
                                                    <input type="text" class="form-control" id="group_tag" name="products_tag" value="{{ $edit->full_description }}" placeholder="" data-role="tagsinput">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <button name="submit" type="submit" class="btn btn-primary">Düzenle</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-12">
                            <div class="ec-cat-list card card-default">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="responsive-data-table" class="table">
                                            <thead>
                                                <tr>
                                                    {{-- <th>Görsel</th> --}}
                                                    <th>Kategori Adı</th>
                                                    <th>Alt Kategoriler</th>
                                                    <th>Ürün</th>
                                                    <th>Toplam Satış</th>
                                                    <th>Durum</th>
                                                    <th>Trend</th>
                                                    <th>İşlem</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($get as $kategori )
                                                <tr>
                                                    {{-- <td><img class="cat-thumb" src="assets/img/category/clothes.png" alt="Ürün Görseli" /></td> --}}
                                                    <td>{{ $kategori->name }}</td>




                                                    <td>


                                                        {{-- <span class="ec-sub-cat-count" title="Toplam Alt Kategoriler"></span> --}}

                                                        @foreach ($altKategori as $alt )

                                                        @if ($alt->parent_category == $kategori->id )


                                                        <span class="ec-sub-cat-list">

                                                        <span class="ec-sub-cat-tag">{{ $alt->name }}</span>

                                                        </span>

                                                        @else


                                                        @endif
                                                        @endforeach
                                                    </td>









                                                    @if ($kategori->products == 0)
                                                    <td>0</td>
                                                    @else
                                                    <td>{{ $kategori->products }}</td>
                                                    @endif

                                                    @if ($kategori->sell == 0)
                                                    <td>0</td>
                                                    @else
                                                    <td>{{ $kategori->sell }}</td>
                                                    @endif


                                                    <td>{{ $kategori->durum }}</td>
                                                    <td><span class="badge badge-success">En İyi</span></td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-outline-success">Bilgi</button>
                                                            <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                                <span class="sr-only">Bilgi</span>
                                                            </button>

                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Düzenle</a>
                                                                <a class="dropdown-item" href="{{ route("Categorydelete", $kategori->id) }}">Sil</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
