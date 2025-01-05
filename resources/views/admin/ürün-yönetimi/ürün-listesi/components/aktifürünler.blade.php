<div class="row">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Aktif Ürünler</h1>
                <p class="breadcrumbs"><span><a href="index.html">Ana Sayfa</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Ürünler</p>
            </div>
            <div>
                <a href="{{ route("admin.product-add") }}" class="btn btn-primary"> Yeni Ürün Eklet</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="responsive-data-table" class="table"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Ürün</th>
                                        <th>Ürün Başlığı</th>
                                        <th>Fiyat</th>
                                        {{-- <th>İndirim</th> --}}
                                        <th>Satiş Miktarı</th>
                                        <th>Stok</th>
                                        <th>Durum</th>
                                        <th>Yayınlanma Tarihi</th>
                                        <th>Aksiyon</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($product as $products  )
                                    <tr>
                                        @if ($products->resim)
                                        <td><img class="tbl-thumb" src="images/{{ $products->resim  }}" alt="Product Image" /></td>

                                        @else
                                        <td><img class="tbl-thumb" src="images/resimyok.jpg" alt="Product Image" /></td>

                                        @endif
                                        <td>{{ $products->baslik }}</td>
                                        <td>{{ number_format($products->fiyat) }}</td>
                                        {{-- <td>25% OFF</td> --}}
                                        <td>{{ $products->satis_miktari == null ? 0 : $products->satis_miktari }} </td>
                                        <td>{{ $products->id }}</td>
                                        <td>{{ $products->active == 1 ? 'Aktif Ürün' : "Pasif Ürün"  }} </td>
                                        <td>{{ \Carbon\Carbon::parse($products->created_at)->format('Y-m-d H:i:s') }}</td>

                                        <td>
                                            <div class="btn-group mb-1">
                                                <button type="button"
                                                    class="btn btn-outline-success">Detay</button>
                                                <button type="button"
                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route("admin.product-edit",$products->id) }}">Düzenle</a>
                                                    <a class="dropdown-item" href="#">Sil</a>
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
    </div> <!-- End Content -->
</div>