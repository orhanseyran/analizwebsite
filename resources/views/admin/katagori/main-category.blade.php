@include('admin.head.SideBarComponents.head2')


<bod>
    @include('admin.head.header2')

    <!-- Header -->
	<!-- WRAPPER -->
    <div  class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">

        <div class="layout-container" >

            @include('admin.head.sidebar2')



			<!-- CONTENT WRAPPER -->
            <div class="row">
                <div style="width: 90%" class="container mt-5">
                    <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
                        <h1>Ana Kategori</h1>
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
                                        <h4>Yeni Kategori Ekle</h4>

                                        <form method="POST" action="{{ route("AdminCategoryAdd") }}">
                                            @csrf

                                            <div class="form-group row">
                                                <label for="text" class="col-12 col-form-label">İsim</label>
                                                <div class="col-12">
                                                    <input id="text" name="name" class="form-control here slug-title" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="text" class="col-12 col-form-label">Komisyon Orani %</label>
                                                <div class="col-12">
                                                    <input  name="commission" min="5" class="form-control" type="number">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="slug" class="col-12 col-form-label">Slug</label>
                                                <div class="col-12">
                                                    <input id="slug" name="slug" class="form-control here set-slug" type="text">
                                                    <small>“Slug” ismin URL dostu versiyonudur. Genellikle küçük harflerden oluşur ve sadece harfler, sayılar ve tireler içerir.</small>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-12 col-form-label">Kısa Açıklama</label>
                                                <div class="col-12">
                                                    <textarea id="sortdescription" name="shortdescription" cols="40" rows="2" class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-12 col-form-label">Tam Açıklama</label>
                                                <div class="col-12">
                                                    <textarea id="fulldescription" name="full_description" cols="40" rows="4" class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-12 col-form-label">Ürün Etiketleri <span>( Etiketleri yazıp, virgül ile ayırın )</span></label>
                                                <div class="col-12">
                                                    <input type="text" class="form-control" id="group_tag" name="products_tag" value="" placeholder="" data-role="tagsinput">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <button name="submit" type="submit" class="btn btn-primary">Ekle</button>
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
                                                                <a class="dropdown-item" href="{{ route("admin.main-categoryedit",$kategori->id) }}">Düzenle</a>
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


		</div> <!-- End Page Wrapper -->

	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->
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

	<!-- Data Tables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>
</html>
