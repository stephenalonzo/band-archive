<?php

namespace Database\Seeders;

use App\Models\Archive;
use App\Models\ArchiveLeader;
use App\Models\Leader;
use App\Models\LeaderSong;
use App\Models\Song;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed Archive first
        $archive = Archive::create([
            'archive_date' => date('Y-m-d', strtotime('2026-10-12'))
        ]);

        $leaders = [
            [
                'song_leader_name' => 'Amber',
                'className' => 'w-full p-3 rounded-md bg-pink-600 text-white'
            ],
            [
                'song_leader_name' => 'Rain',
                'className' => 'w-full p-3 rounded-md bg-blue-600 text-white'
            ],
            [
                'song_leader_name' => 'Arriane',
                'className' => 'w-full p-3 rounded-md bg-purple-600 text-white'
            ],
        ];

        $leadersArr = [];
        $getLeaderId = [];

        foreach ($leaders as $leader) {
            $leadersArr[] = $leader;
            $createLeader = Leader::create($leader);
            $getLeaderId[] = $createLeader;
        }

        foreach ($getLeaderId as $leaderId) {
            ArchiveLeader::create([
                'archive_id' => $archive->id,
                'leader_id' => $leaderId->id
            ]);
        }

        $song = Song::create([
            'leader_id' => 1,
            'song_title' => 'God of All My Days',
            'chords_image_path' => 'https://cloud-deploy-laravel.s3.ap-southeast-2.amazonaws.com/mbfc_songs/special-number_Stephen_20261011.png',
            'created_at' => date('2026-10-11')
        ]);

        LeaderSong::create([
            'leader_id' => $song->leader_id,
            'song_id' => $song->id
        ]);
    }
}
