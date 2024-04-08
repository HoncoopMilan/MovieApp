<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $films = [
            [
                'title' => 'The Shawshank Redemption',
                'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'director' => 'Frank Darabont',
                'imdb_rating' => 9.3,
                'poster' => 'the_shawshank_redemption.jpg',
                'release' => '1994',
                'views' => 1970000,
            ],
            [
                'title' => 'The Godfather',
                'description' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
                'director' => 'Francis Ford Coppola',
                'imdb_rating' => 9.2,
                'poster' => 'the_godfather.jpg',
                'release' => '1972',
                'views' => 1940000,
            ],
            [
                'title' => 'Apocalypse now',
                'description' => 'A U.S. Army officer serving in Vietnam is tasked with assassinating a renegade Special Forces Colonel who sees himself as a god.',
                'director' => 'Francis Ford Coppola',
                'imdb_rating' => 8.4,
                'poster' => 'apocalypse_now.jpg',
                'release' => '1979',
                'views' => 818000,
            ],
            [
                'title' => 'alien',
                'description' => 'The crew of a commercial spacecraft encounters a deadly lifeform after investigating a mysterious transmission of unknown origin.',
                'director' => 'Ridley Scott',
                'imdb_rating' => 8.5,
                'poster' => 'alien.png',
                'release' => '1979',
                'views' => 1410000,
            ],
            [
                'title' => 'All that jazz',
                'description' => 'Director/choreographerv Bob Fosse tells his own life story as he details the sordid career of Joe Gideon, a womanizing, drug-using dancer.',
                'director' => 'Bob Fosse',
                'imdb_rating' => 7.8,
                'poster' => 'all_that_jazz.jpg',
                'release' => '1979',
                'views' => 98000,
            ],
            [
                'title' => 'Sound of metal',
                'description' => 'A heavy metal drummers life is turned upside down when he begins to lose his hearing and he must confront a future filled with silence.',
                'director' => 'Darius Marder',
                'imdb_rating' => 7.7,
                'poster' => 'sound_of_metal.jpg',
                'release' => '2020',
                'views' => 659000,
            ],
            [
                'title' => '2001: a space odyssey',
                'description' => 'After uncovering a mysterious artifact buried beneath the Lunar surface, a spacecraft is sent to Jupiter to find its origins: a spacecraft manned by two men and the supercomputer HAL 9000.',
                'director' => 'Stanley Kubrick',
                'imdb_rating' => 8.3,
                'poster' => '2001.jpg',
                'release' => '1968',
                'views' => 1260000,
            ],
            [
                'title' => '12 angry men',
                'description' => 'The jury in a New York City murder trial is frustrated by a single member whose skeptical caution forces them to more carefully consider the evidence before jumping to a hasty verdict.',
                'director' => 'Sidney Lumet',
                'imdb_rating' => 9.0,
                'poster' => '12-angry_men.jpg',
                'release' => '1957',
                'views' => 894000,
            ],
            [
                'title' => 'The silence of the lambs',
                'description' => 'A young F.B.I. cadet must receive the help of an incarcerated and manipulative cannibal killer to help catch another serial killer, a madman who skins his victims.',
                'director' => 'Jonathan Demme',
                'imdb_rating' => 8.6,
                'poster' => 'silence_of_the_lambs.jpg',
                'release' => '1991',
                'views' => 2220000,
            ],
            [
                'title' => 'Psycho',
                'description' => 'A Phoenix secretary embezzles $40,000 from her employers client, goes on the run and checks into a remote motel run by a young man under the domination of his mother.',
                'director' => 'Alfred Hitchcock',
                'imdb_rating' => 8.5,
                'poster' => 'psycho.jpg',
                'release' => '1960',
                'views' => 1200000,
            ],
            

            
        ];

        foreach ($films as $film) {
            DB::table('films')->insert([
                'title' => $film['title'],
                'description' => $film['description'],
                'director' => $film['director'],
                'imdb_rating' => $film['imdb_rating'],
                'poster' => $film['poster'], // Voeg de poster toe aan de database
                'release' => $film['release'], // Insert release year
                'views' => $film['views'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
