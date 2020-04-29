<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ArtistSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(LyricSeeder::class);
        $this->call(PlaylistSeeder::class);
        $this->call(PlaylistsSongSeeder::class);
        $this->call(SongSeeder::class);
        $this->call(ThemeSeeder::class);
        $this->call(UsersTypeSeeder::class);
        $this->call(PersonalPlaylistSeeder::class);
        $this->call(PersonalPlaylistSongSeeder::class);
        $this->call(SlideshowSeeder::class);
    }
}
