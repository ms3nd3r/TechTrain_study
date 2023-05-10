<?php

namespace Tests\Feature\LaravelStations\Station18;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Schedule;
use Carbon\CarbonImmutable;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @group station18
 */
class ScheduleTest extends TestCase
{
    use RefreshDatabase;

    public function test映画詳細ページが表示される(): void
    {
        $movie = $this->createMovie();
        $response = $this->get('/movies/'.$movie->id);
        $response->assertStatus(200);
        $response->assertSeeText($movie->title);
        $response->assertSee($movie->image_url);
        $response->assertSeeText($movie->published_year);
        $response->assertSeeText($movie->description);
    }

    public function test映画スケジュールのリレーションが存在する(): void
    {
        $movie = $this->createMovie();
        $this->createSchedule($movie->id);

        $movie = Movie::with('schedules')->find($movie->id);
        $this->assertCount(10, $movie->schedules);
    }

    public function test映画詳細ページに紐づくスケジュールが表示される(): void
    {
        $movie = $this->createMovie();
        $this->createSchedule($movie->id);
        $movie = Movie::with('schedules')->find($movie->id);

        $response = $this->get('/movies/'.$movie->id);
        $response->assertStatus(200);

        foreach ($movie->schedules as $schedule) {
            $response->assertSeeText($schedule->start_time->format('H:i'));
            $response->assertSeeText($schedule->end_time->format('H:i'));
        }
    }

    public function test映画詳細ページに座席を予約するボタンが表示されている(): void
    {
        $movie = $this->createMovie();
        Schedule::insert([
            'movie_id' => $movie->id,
            'start_time' => CarbonImmutable::now(),
            'end_time' => CarbonImmutable::now()->addHour(),
        ]);
        $response = $this->get('/movies/'.$movie->id);
        $response->assertStatus(200);
        $response->assertSeeText('座席を予約する');
    }

    public function test上映スケジュールが上映開始時刻の昇順である(): void
    {
        $movieId = $this->createMovie()->id;
        $now = CarbonImmutable::now();

        $schedule1 = Schedule::create([
            'movie_id' => $movieId,
            'start_time' => $now->addHours(10),
            'end_time' => $now->addHours(11),
        ]);
        $schedule2 = Schedule::create([
            'movie_id' => $movieId,
            'start_time' => $now->addHours(3),
            'end_time' => $now->addHours(4),
        ]);
        $schedule3 = Schedule::create([
            'movie_id' => $movieId,
            'start_time' => $now->addHours(8),
            'end_time' => $now->addHours(9),
        ]);

        $response = $this->get('/movies/' . $movieId);
        $response->assertSeeTextInOrder([
            $schedule2->start_time->format('H:i'),
            $schedule3->start_time->format('H:i'),
            $schedule1->start_time->format('H:i'),
        ]);
    }

    private function createMovie(): Movie
    {
        $genreId = Genre::insertGetId(['name' => 'ジャンル']);
        $movieId = Movie::insertGetId([
            'title' => '最初からある映画',
            'image_url' => 'https://techbowl.co.jp/_nuxt/img/6074f79.png',
            'published_year' => 2000,
            'description' => '概要',
            'is_showing' => false,
            'genre_id' => $genreId,
        ]);
        return Movie::find($movieId);
    }

    private function createSchedule(int $movieId): void
    {
        $count = 10;
        for ($i = 0; $i < $count; $i++) {
            Schedule::insert([
                'movie_id' => $movieId,
                'start_time' => CarbonImmutable::now()->addHours($i),
                'end_time' => CarbonImmutable::now()->addHours($i + 2),
            ]);
        }
    }
}
