


@include('admin.head.SideBarComponents.head2')

<body>
    @include('admin.head.header2')
	<!-- WRAPPER -->
    <div  class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">

		<div class="layout-container" >


		<!-- PAGE WRAPPER -->
		<div class="row">




                @include('admin.head.sidebar2')

			<!-- CONTENT WRAPPER -->

            <div style="width: 90%" class="container mt-5">
				<div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Bloglar</h1>
							<p class="breadcrumbs"><span><a href="index.html">Ana Sayfa</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Bloglar</p>
						</div>
						<div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                İçerik Ekle
                              </button>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
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
							<div class="card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table"
											style="width:100%">
											<thead>
												<tr>
													<th>Resim</th>
													<th>Başlık</th>
													<th>Yayınlayan</th>
													<th>Kategori</th>
													<th>Anahtar Kelimeler</th>
													<th>Blog İD</th>
                                                    <th>Durum</th>
                                                    <th>Yayınlanma Tarihi</th>
                                                    <th>Düzenleme</th>
												</tr>
											</thead>

											<tbody>
                                                @foreach ($blogs as $get )
                                                <tr>
													<td><img width="100" class="tbl-thumb" src="{{ $get->resim }}" alt="{{ $get->baslik }}" /></td>
													<td>{{ $get->baslik}}</td>
													<td>{{ $get->user_name}}</td>
													<td>{{ $get->kategori}}</td>
													<td>{{ $get->anahtar_kelime}}</td>
													<td>{{ $get->id}}</td>
													<td>{{ $get->durum == 1 ? "Aktif Blog" : "Deaktif"}}</td>
													<td>{{ $get->created_a}}</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Detay</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Detay</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $get->id }}" href="#">Düzenle</a>
																<a class="dropdown-item" onclick="confirm('Blogu Silmek İstiyormusunuz')" href="{{ route("blog.delete",$get->id) }}">Sil</a>
															</div>
														</div>
													</td>
                                                    <div class="modal fade" id="exampleModal{{ $get->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <form action="{{ route("blog.edit",$get->id) }}" method="POST" >
                                                            @csrf
                                                        <div class="modal-dialog modal-xl">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <h1 class="modal-title fs-5" id="exampleModalLabel">Blog Düzenle</h1>
                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body p-5">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Başlık</label>
                                                                            <input type="text" class="form-control" name="baslik" value="{{ $get->baslik}}" id="exampleInputEmail" aria-describedby="emailHelp">
                                                                            <div id="emailHelp" class="form-text">Girilen Başlık Seo Açısından Çok Önemli Olduğunu Unutmayın.</div>
                                                                          </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Açıklama</label>
                                                                            <textarea id="summernote{{ $get->id }}" name="icerik"  >{!! $get->icerik !!}</textarea>
                                                                            <div id="emailHelp" class="form-text">Lütfen Açıklamayı Giriniz.</div>
                                                                          </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Resim</label>
                                                                            <div class="input-group">
                                                                                <span class="input-group-btn">
                                                                                  <a id="lfm{{ $get->id}}" data-input="thumbnail" data-preview="holder{{ $get->id}}" class="btn btn-primary">
                                                                                    <i class="fa fa-picture-o"></i> Resim Ekle
                                                                                  </a>
                                                                                </span>
                                                                                <input id="thumbnail" class="form-control" name="resim" value="{{ $get->resim}}" type="text" name="filepath">
                                                                              </div>
                                                                              <div id="holder{{ $get->id}}" style="margin-top:15px;max-height:100px;">
                                                                              <img src="{{ $get->resim}}" alt="{{ $get->resim}}">
                                                                              </div>
                                                                          </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1"  class="form-label">Kategori</label>
                                                                            <select name="kategori" class="form-select" aria-label="Default select example">
                                                                                <option value="{{ $get->kategori}}" selected>{{ $get->kategori}}</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                              </select>
                                                                          </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Meta Açıklama</label>
                                                                            <textarea name="Meta_aciklama" class="form-control" id="" name="Meta_aciklama" cols="30" rows="10">{{ $get->Meta_aciklama}}</textarea>
                                                                            <div id="emailHelp" class="form-text">Girilen Meta Açıklama Bölümünün Seo Açısından Çok Önemli Olduğunu Unutmayın.</div>
                                                                          </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Anahtar Kelime(Her Kelime Sonrası (Virgül , ) İle Ayırınız)</label>
                                                                            <input type="text" class="form-control" value="{{ $get->anahtar_kelime }}" name="anahtar_kelime">
                                                                            <div id="emailHelp" class="form-text">Girilen Anahtar Kelime Bölümünün Seo Açısından Çok Önemli Olduğunu Unutmayın.</div>
                                                                          </div>
                                                                    </div>

                                                                </div>


                                                            </div>
                                                            <div class="modal-footer">
                                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                                                              <button type="submit" class="btn btn-primary">İçerik Ekle</button>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </form>
                                                    </div>
												</tr>

                                                @endforeach



											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- End Content -->
			</div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <form method="POST" action="{{ route("blog.add") }}">
                    @csrf
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Blog Ekle</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Başlık</label>
                                    <input type="text" class="form-control" name="baslik" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">Girilen Başlık Seo Açısından Çok Önemli Olduğunu Unutmayın.</div>
                                  </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Açıklama</label>
                                    <textarea id="summernote" name="icerik" ></textarea>
                                    <div id="emailHelp" class="form-text">Lütfen Açıklamayı Giriniz.</div>
                                  </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Resim</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                          <a id="lfm" data-input="thumbnai" data-preview="holder" class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Resim Ekle
                                          </a>
                                        </span>
                                        <input required id="thumbnai" class="form-control"  name="resim" type="text" name="filepath">
                                      </div>
                                      <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                  </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                    <select  name="kategori" class="form-select" aria-label="Default select example">
                                        <option selected value="Deneme">Deneme</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                  </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Meta Açıklama</label>
                                    <textarea name="Meta_aciklama" name="Meta_aciklama" class="form-control" id="" cols="30" rows="10"></textarea>
                                    <div id="emailHelp" class="form-text">Girilen Meta Açıklama Bölümünün Seo Açısından Çok Önemli Olduğunu Unutmayın.</div>
                                  </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Anahtar Kelime(Her Kelime Sonrası (Virgül , ) İle Ayırınız)</label>
                                    <input type="text" class="form-control" value="" id="exampleInputEmail1" name="anahtar_kelime" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">Girilen Anahtar Kelime Bölümünün Seo Açısından Çok Önemli Olduğunu Unutmayın.</div>
                                  </div>
                            </div>

                        </div>


                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                      <button type="submit" class="btn btn-primary">İçerik Ekle</button>
                    </div>
                  </div>
                </div>
            </form>
              </div>



		</div> <!-- End Page Wrapper -->

	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>


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


    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
       <script>
        $('#summernote').summernote({
          placeholder: '',
          tabsize: 2,
          height: 400
        });
      </script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

    <script>
     $('#lfm').filemanager('image');
    </script>


  @foreach ($blogs as $get )
   <script>
    $('#summernote{{ $get->id }}').summernote({
      placeholder: '',
      tabsize: 2,
      height: 400
    });
  </script>
    @endforeach

    @foreach ($blogs as $get )
    <script>
        $('#lfm{{ $get->id }}').filemanager('image');
    </script>

    @endforeach


	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>
</html>
