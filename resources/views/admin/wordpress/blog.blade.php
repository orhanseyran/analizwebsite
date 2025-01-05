


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
													<th>Link</th>
													<th>Blog İD</th>
													<th>Durum</th>
													<th>Kategori</th>
                                                    <th>Güncellenme Tarihi</th>
                                                    <th>Yayınlanma Tarihi</th>
                                                    <th>Düzenleme</th>
												</tr>
											</thead>

											<tbody>
                                                @foreach ( $posts as $get )
                                                <tr>
													<td><img width="100" class="tbl-thumb" src="{{ $get["featured_image_src"]['landsacpe'][0] }}" alt="{{ $get['title']['rendered'] }}" /></td>
													<td>{{ $get['title']['rendered'] }}</td>
													<td><a href="{{ $get['link']}}" >Post Linki</a></td>

													<td>{{ $get["id"]}}</td>
													<td>{{ $get['status'] == "publish" ? "Yayınlanmış" : "Yayınlanmamış"}}</td>
                                                    <td>Wordpress İçerik</td>
                                                    <td>{{ $get["date"]}}</td>
													<td>{{ $get["modified_gmt"]}}</td>
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
																<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $get['id'] }}" href="#">Düzenle</a>
                                                                <form action="{{ route("deleteBlog") }}" method="post">
                                                                    @csrf
                                                                    <input type="text" name="site_url" value="https://oyunkeyal.com/" hidden>
                                                                    <input type="text" name="post_id" value="{{ $get['id'] }}" hidden>
                                                                    <button class="dropdown-item" type="submit" >Sil</button>


                                                                </form>
															</div>
														</div>
													</td>
                                                    <div class="modal fade" id="exampleModal{{ $get['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $get['id'] }}" aria-hidden="true">
                                                        <form action="{{ route("updateBlog") }}" enctype="multipart/form-data" method="POST" >
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
                                                                            <input type="text" class="form-control" name="title" value="{{ $get['title']['rendered'] }}" id="exampleInputEmail" aria-describedby="emailHelp">
                                                                            <div id="emailHelp" class="form-text">Girilen Başlık Seo Açısından Çok Önemli Olduğunu Unutmayın.</div>
                                                                          </div>
                                                                    </div>
                                                                    <input type="text" name="post_id" value="{{ $get['id'] }}" hidden>
                                                                    @php
                                                                    $link = $get['link'];
                                                                    $parsedUrl = parse_url($link);
                                                                    $domain = rtrim($parsedUrl['scheme'] . '://' . $parsedUrl['host'], '/') . '/';
                                                                @endphp

                                                                <input type="text" name="site_url" value="{{ $domain }}" hidden>

                                                                    <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Açıklama</label>
                                                                            <textarea id="summernote{{ $get['id']}}" name="content"  >{{ $get["content"]['rendered'] }}</textarea>
                                                                            <div id="emailHelp" class="form-text">Lütfen Açıklamayı Giriniz.</div>
                                                                          </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <select name="status" class="form-select form-select-lg" aria-label=".form-select-lg example">
                                                                            <option value="publish">Yayınla</option>
                                                                            <option value="draft">Taslak</option>
                                                                        </select>
                                                                       </div>
                                                                    <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Resim</label>
                                                                            <div class="input-group">
                                                                                <label for="exampleInputEmail1"  class="form-label">Resim</label>

                                                                            <input type="file" class="form-control-file" name="featured_media" >
                                                                              </div>
                                                                              <div id="holder{{ $get['id']}}" style="margin-top:15px;max-height:100px;">
                                                                              <img width="100" src="{{ $get["featured_image_src"]['landsacpe'][0] }}" alt="{{ $get["featured_image_src"]['landsacpe'][0] }}">
                                                                              </div>
                                                                          </div>
                                                                    </div>


                                                                    {{-- <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Anahtar Kelime(Her Kelime Sonrası (Virgül , ) İle Ayırınız)</label>
                                                                            <input type="text" class="form-control" value="{{ $get->anahtar_kelime }}" name="anahtar_kelime">
                                                                            <div id="emailHelp" class="form-text">Girilen Anahtar Kelime Bölümünün Seo Açısından Çok Önemli Olduğunu Unutmayın.</div>
                                                                          </div>
                                                                    </div> --}}

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
                <form method="POST" action="{{ route("addBlog") }}" enctype="multipart/form-data">
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
                                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">Girilen Başlık Seo Açısından Çok Önemli Olduğunu Unutmayın.</div>
                                  </div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Site</label>
                                <select
                                    class="form-select form-select-lg"
                                    name="site_url"
                                    id=""
                                >
                                @foreach ($wordpress as $wordpress )
                                <option value="{{ $wordpress->site_url }}">{{ $wordpress->site_url}}</option>
                                @endforeach



                                </select>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Açıklama</label>
                                    <textarea id="summernote" name="content" ></textarea>
                                    <div id="emailHelp" class="form-text">Lütfen Açıklamayı Giriniz.</div>
                                  </div>
                            </div>
                            <div class="col-md-12">
                            <select name="status" class="form-select form-select-lg" aria-label=".form-select-lg example">
                                <option value="publish">Yayınla</option>
                                <option value="draft">Taslak</option>
                            </select>
                           </div>
                           <div class="col-md-12">

                        </div>
                           <div class="col-md-12 mt-3">
                            <label for="exampleInputEmail1"  class="form-label">Resim</label>

                            <input type="file" class="form-control-file" name="featured_media" required>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                                <button type="submit" class="btn btn-primary">İçerik Ekle</button>
                              </div>
                        </div>
                        </div>
                            {{-- <div class="col-md-12">
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
                            </div> --}}

                        </div>


                    </div>

                  </div>
                </form>
                </div>

              </div>



		</div> <!-- End Page Wrapper -->

	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
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


  @foreach ($posts  as $get )
   <script>
    $('#summernote{{ $get["id"] }}').summernote({
      placeholder: '',
      tabsize: 2,
      height: 400
    });
  </script>
    @endforeach

    @foreach ($posts as $get )
    <script>
        $('#lfm{{ $get["id"] }}').filemanager('image');
    </script>

    @endforeach


	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>
</html>
