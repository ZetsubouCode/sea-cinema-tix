<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get data from provided API endpoint
        // $apiEndpoint = 'https://seleksi-sea-2023.vercel.app/api/movies';
        // $response = Http::get($apiEndpoint);
        // $movies = $response->json();
        $movies = [
            [
                'title' => 'Inception',
                'description' => 'A thief who steals corporate secrets through use of dream-sharing technology.',
                'release_date' => '2010-07-16',
                'poster_url' => 'https://upload.wikimedia.org/wikipedia/id/9/91/Inception_poster.jpg',
                'age_rating' => 'PG-13',
                'ticket_price' => 10.50,
            ],
            [
                'title' => 'The Matrix',
                'description' => 'A computer hacker learns about the true nature of his reality and his role in the war.',
                'release_date' => '1999-03-31',
                'poster_url' => 'https://id.wikipedia.org/wiki/The_Matrix#/media/Berkas:The_Matrix_Poster.jpg',
                'age_rating' => 'R',
                'ticket_price' => 9.00,
            ],
            [
                'title' => 'Interstellar',
                'description' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
                'release_date' => '2014-11-07',
                'poster_url' => 'https://id.wikipedia.org/wiki/Interstellar#/media/Berkas:Interstellar_film_poster.jpg',
                'age_rating' => 'PG-13',
                'ticket_price' => 11.00,
            ],
            [
                'title' => 'The Dark Knight',
                'description' => 'Batman faces the Joker, a criminal mastermind who plunges Gotham into chaos.',
                'release_date' => '2008-07-18',
                'poster_url' => 'https://id.wikipedia.org/wiki/The_Dark_Knight_%28film%29#/media/Berkas:Dark_Knight.jpg',
                'age_rating' => 'PG-13',
                'ticket_price' => 10.00,
            ],
            [
                'title' => 'Parasite',
                'description' => 'Greed and class discrimination threaten the newly formed symbiotic relationship between the wealthy Park family and the destitute Kim clan.',
                'release_date' => '2019-05-30',
                'poster_url' => 'https://m.media-amazon.com/images/M/MV5BYjk1Y2U4MjQtY2ZiNS00OWQyLWI3MmYtZWUwNmRjYWRiNWNhXkEyXkFqcGc@._V1_FMjpg_UY3556_.jpg',
                'age_rating' => 'R',
                'ticket_price' => 8.50,
            ],
            [
                'title' => 'Spirited Away',
                'description' => 'A young girl enters the world of spirits and must find a way to save her parents and return to the human world.',
                'release_date' => '2001-07-20',
                'poster_url' => 'https://id.wikipedia.org/wiki/Spirited_Away#/media/Berkas:Spirited_Away_Japanese_poster.png',
                'age_rating' => 'PG',
                'ticket_price' => 7.75,
            ],
            
        ];

        // Insert data to database
        foreach ($movies as $movie) {
            Movie::create([
                'title' => $movie['title'],
                'description' => $movie['description'],
                'release_date' => $movie['release_date'],
                'poster_url' => $movie['poster_url'],
                'age_rating' => $movie['age_rating'],
                'ticket_price' => $movie['ticket_price'],
            ]);
        }
    }
}
