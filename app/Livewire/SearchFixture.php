<?php

namespace App\Livewire;

use App\Models\Fixture;
use Livewire\Component;
use Livewire\WithPagination;

class SearchFixture extends Component
{
    use WithPagination;

    public $dateFilter = ''; // Varsayılan tarih filtresi
    public $search = ''; // Arama girdisi

    public function filterByDate($filter)
    {
        $this->dateFilter = $filter; // Yeni filtre değerini ayarla
    }

    public function render()
    {
        $fixtures = Fixture::query()
            ->when($this->dateFilter === 'today', function ($query) {
                $query->whereDate('date', today());
            })
            ->when($this->dateFilter === 'tomorrow', function ($query) {
                $query->whereDate('date', now()->addDay());
            })
            ->when($this->dateFilter === 'dayAfterTomorrow', function ($query) {
                $query->whereDate('date', now()->addDays(2));
            })
            ->when($this->dateFilter === 'threeDaysLater', function ($query) {
                $query->whereDate('date', now()->addDays(3));
            })
            ->when($this->search, function ($query) {
                $query->where(function ($query) {
                    $query->where('home_team_name', 'like', "%{$this->search}%")
                          ->orWhere('away_team_name', 'like', "%{$this->search}%");
                });
            })
            ->paginate(150);

        // Eğer `today` filtresine uygun veri yoksa, sonraki üç günün maçlarını getir
        if ($this->dateFilter === '' ) {
            $fixtures = Fixture::query()
                ->when($this->search, function ($query) {
                    $query->where(function ($query) {
                        $query->where('home_team_name', 'like', "%{$this->search}%")
                              ->orWhere('away_team_name', 'like', "%{$this->search}%");
                    });
                })
                ->whereBetween('date', [now(), now()->addDays(4)])// Bugünden sonraki 3 gün
                ->orderBy('date', 'asc') // Tarihe göre sıralama (artarak)

                ->paginate(150);
        }

        return view('livewire.search-fixture', [
            'fixtures' => $fixtures,
        ]);
    }
}
