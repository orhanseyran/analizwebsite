<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fixtures';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fixture_id',
        'referee',
        'timezone',
        'date',
        'timestamp',
        'period_first',
        'period_second',
        'venue_id',
        'venue_name',
        'venue_city',
        'status_long',
        'status_short',
        'status_elapsed',
        'status_extra',
        'league_id',
        'league_name',
        'league_country',
        'league_logo',
        'league_flag',
        'league_season',
        'league_round',
        'home_team_id',
        'home_team_name',
        'home_team_logo',
        'home_team_winner',
        'away_team_id',
        'away_team_name',
        'away_team_logo',
        'away_team_winner',
        'goals_home',
        'goals_away',
        'score_halftime_home',
        'score_halftime_away',
        'score_fulltime_home',
        'score_fulltime_away',
        'score_extratime_home',
        'score_extratime_away',
        'score_penalty_home',
        'score_penalty_away',
    ];
}
