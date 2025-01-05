<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fixtures', function (Blueprint $table) {
            // Fixture Details
            $table->id();
            $table->unsignedBigInteger('fixture_id')->unique();
            $table->string('referee')->nullable();
            $table->string('timezone')->default('UTC');
            $table->dateTime('date');
            $table->unsignedBigInteger('timestamp');

            // Periods
            $table->unsignedInteger('period_first')->nullable();
            $table->unsignedInteger('period_second')->nullable();

            // Venue Details
            $table->unsignedBigInteger('venue_id');
            $table->string('venue_name');
            $table->string('venue_city');

            // Status
            $table->string('status_long');
            $table->string('status_short');
            $table->unsignedInteger('status_elapsed')->nullable();
            $table->string('status_extra')->nullable();

            // League Details
            $table->unsignedBigInteger('league_id');
            $table->string('league_name');
            $table->string('league_country');
            $table->string('league_logo');
            $table->string('league_flag');
            $table->unsignedInteger('league_season');
            $table->string('league_round');

            // Home Team Details
            $table->unsignedBigInteger('home_team_id');
            $table->string('home_team_name');
            $table->string('home_team_logo');
            $table->boolean('home_team_winner')->nullable();

            // Away Team Details
            $table->unsignedBigInteger('away_team_id');
            $table->string('away_team_name');
            $table->string('away_team_logo');
            $table->boolean('away_team_winner')->nullable();

            // Goals
            $table->unsignedInteger('goals_home')->nullable();
            $table->unsignedInteger('goals_away')->nullable();

            // Scores
            $table->unsignedInteger('score_halftime_home')->nullable();
            $table->unsignedInteger('score_halftime_away')->nullable();
            $table->unsignedInteger('score_fulltime_home')->nullable();
            $table->unsignedInteger('score_fulltime_away')->nullable();
            $table->unsignedInteger('score_extratime_home')->nullable();
            $table->unsignedInteger('score_extratime_away')->nullable();
            $table->unsignedInteger('score_penalty_home')->nullable();
            $table->unsignedInteger('score_penalty_away')->nullable();

            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fixtures');
    }
};
