<div>
    <style>
        #resim{
            width: 20px;
        }
    </style>


        <!-- Arama Formu -->
        <div class="mb-3 mt-3">

            <div class="mb-2" role="group" aria-label="Date Filter">
                <button wire:click="filterByDate('')" class="btn btn-outline-success btn-lg {{ $dateFilter == '' ? 'active' : '' }}">
                   Tüm Maçlar
                </button>
                <button wire:click="filterByDate('today')" class="btn btn-outline-success btn-lg {{ $dateFilter == 'today' ? 'active' : '' }}">
                    Bugün
                </button>
                <button wire:click="filterByDate('tomorrow')" class="btn btn-outline-success btn-lg {{ $dateFilter == 'tomorrow' ? 'active' : '' }}">
                    Yarın
                </button>
                <button wire:click="filterByDate('dayAfterTomorrow')" class="btn btn-outline-success btn-lg {{ $dateFilter == 'dayAfterTomorrow' ? 'active' : '' }}">
                    <span>{{ \Carbon\Carbon::now()->addDays(2)->format('d/m/Y') }}</span>
                </button>
                <button wire:click="filterByDate('threeDaysLater')" class="btn btn-outline-success btn-lg {{ $dateFilter == 'threeDaysLater' ? 'active' : '' }}">
                    <span>{{ \Carbon\Carbon::now()->addDays(3)->format('d/m/Y') }}</span>
                </button>

            </div>
            <form class="mt-3">
                <div class="input-group">
                    <input type="text" wire:model.live="search" class="form-control" placeholder="Fiksür Adını Giriniz..." aria-label="Search">
                    <button class="btn btn-primary" style="background-color: #5a3599; font-weight: 700; color: #fff; font-size: 13px;">
                        <i class="fa fa-search"></i> Maç Analizi Ara
                    </button>
                </div>
            </form>
        </div>
<style>
    table a, table a:link, table a:visited {
    text-decoration: none;
    padding: 5px;
}
.btn-group-lg>.btn, .btn-lg {
    padding: .9em 4rem !important;
    font-size: 1.25rem !important;
    border-radius: .3rem !important;
}
</style>
        <!-- Tablo -->
        <table class="table table-bordered table-hover align-middle custom-table">
            <thead>
                <tr>
                    <th class="text-center" scope="col"></th>
                    <th class="text-center" scope="col"></th>
                    <th class="text-center" scope="col"></th>
                    <th class="text-center" scope="col"></th>
                    <th class="text-center" scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @if ($fixtures->isEmpty())

                <h6 class="text-center">Maç Bulunamadı</h6>

                @foreach($fixtures as $item)
                <tr>
                    <!-- Maç saati -->
                    <td style="font-weight: 800;">
                        <i class="fa-solid fa-clock mx-2 d-md-none"></i>
                        <span class="d-md-none">

                            {{ \Carbon\Carbon::parse($item->date)->format('m-d-Y') }}
                        </span>
                        <span class="d-none d-md-inline">


                            {{ \Carbon\Carbon::parse($item->date)->format('m-d-Y ') }}
                        </span>
                    </td>

                    <td class="text-end">
                        {{ $item->home_team_name ?? 'N/A' }}
                    </td>
                    <td class="text-end">
                        <img  src="{{ $item->home_team_logo ?? 'f.png' }}"
                             alt="{{ $item->home_team_name ?? 'Home' }}"
                             class="team-logo mx-2" >
                    </td>

                    <td class="text-center" style="font-weight: 700;">
                        <a href="{{ route("detail", $item->fixture_id) }}" class="btn btn-sm mx-2 my-2"
                           style="background-color: #4E0C6E; font-weight: 700; color: #fff; font-size: 13px; padding:15px">
                            <i class="fa-regular fa-futbol"></i> Analiz
                        </a>
                    </td>

                    <td class="text-start">
                        <img src="{{ $item->away_team_logo ?? 'f.png' }}"
                             alt="{{ $item->away_team_name?? 'Away' }}"
                             class="team-logo mx-2">
                    </td>
                    <td class="text-start">
                        {{ $item->away_team_name ?? 'N/A' }}
                    </td>

                    <td><i class="fa-regular fa-star"></i></td>
                </tr>
            @endforeach

                @else
                @foreach($fixtures as $item)
                    <tr>
                        <!-- Maç saati -->
                        <td style="font-weight: 800;">
                            <i class="fa-solid fa-clock mx-2 d-md-none"></i>
                            <span class="d-md-none">

                                {{ \Carbon\Carbon::parse($item->date)->format('H:i') }}
                            </span>
                            <span class="d-none d-md-inline">


                                {{ \Carbon\Carbon::parse($item->date)->format('m-d-Y H:i') }}
                            </span>
                        </td>

                        <td class="text-end">
                            {{ $item->home_team_name ?? 'N/A' }}
                        </td>
                        <td class="text-end">
                            <img id="resim" src="{{ $item->home_team_logo ?? 'f.png' }}"
                                 alt="{{ $item->home_team_name ?? 'Home' }}"
                                 class="team-logo mx-2">
                        </td>

                        <td class="text-center" style="font-weight: 700;">
                            <a href="{{ route("detail", $item->fixture_id) }}" class="btn btn-sm mx-2 my-2"
                               style="background-color: #4E0C6E; font-weight: 700; color: #fff; font-size: 13px;">
                                <i class="fa-regular fa-futbol"></i> Analiz
                            </a>
                        </td>

                        <td class="text-start">
                            <img  id="resim" src="{{ $item->away_team_logo ?? 'f.png' }}"
                                 alt="{{ $item->away_team_name?? 'Away' }}"
                                 class="team-logo mx-2">
                        </td>
                        <td class="text-start">
                            {{ $item->away_team_name ?? 'N/A' }}
                        </td>

                        <td><i class="fa-regular fa-star"></i></td>
                    </tr>
                @endforeach
                @endif

            </tbody>
        </table>

        <!-- Sayfalama linkleri -->
        <div class="pagination">
            {{ $fixtures->links('pagination::bootstrap-5') }}  <!-- Bootstrap 5 için -->
        </div>
    </div>

