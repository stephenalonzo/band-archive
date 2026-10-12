<?php

namespace Database\Seeders;

use App\Models\Archive;
use App\Models\ArchiveLeader;
use App\Models\Leader;
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
        // User::factory(10)->create();

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
    }
}
