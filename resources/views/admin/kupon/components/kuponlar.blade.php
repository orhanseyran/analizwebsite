

<div class="row">
    <div class="col-md-8">

        <h4 class="mt-3">Tüm Kuponlarım</h4>
    </div>
    <div class="col-md-4 text-end">
        <a href="/kupon-add" class="btn btn-success mb-4">Kupon Oluştur +</a>

    </div>

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
        <div class="ec-vendor-list card card-default">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="responsive-data-table" class="table"><thead>
                        <tr>
                            <th></th>
                            <th>Kupon Türü</th>
                            <th>Kupon Kapsamı</th>
                            <th>Kupon Toplam Bütce</th>
                            <th>Kupon Adet Tutar</th>
                            <th>Kupon Adet</th>
                            <th>Alışveriş Alt Limit</th>
                            <th>Kupon Başlangic Tarihi</th>
                            <th>Kupon Bitiş Tarihi</th>
                            <th>Kupon Oluşturulma Tarihi</th>
                            <th>Aksiyon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kupon as $get )
                        <tr>
                            <td><img width="50" class="vendor-thumb" src="images/kupon2.png" alt="user profile" /></td>
                            <td>{{ $get->kupon_türü }}</td>
                            <td>{{ $get->Urun_kapsami }}</td>
                            <td>{{ $get->Kupon_Butce }}</td>
                            <td>{{ $get->Kupon_Tutari }}</td>
                            <td>{{ $get->Kupon_Adeti }}</td>
                            <td>{{ $get->Alisveris_Alt_Limit }}</td>
                            <td>{{ $get->Kupon_Baslangic_Tarihi }}</td>
                            <td>{{ $get->Kupon_Bitis_Tarihi }}</td>
                            <td>{{ $get->created_at }}</td>
                            <td>
                                <div class="btn-group mb-1">
                                    <button type="button" class="btn btn-outline-success">Detaylar</button>
                                    <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                        <span class="sr-only">Detaylar</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Düzenle</a>
                                        <a class="dropdown-item" href="{{ route("kupondelete",$get->id) }}">Sil</a>
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
