<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("players")->insert([
            [
                "name" => "Matt Fish",
                "age" => 27,
                "height" => 210.82,
                "team_id" => 4
            ],
            [
                "name" => "Walter McCarty",
                "age" => 27,
                "height" => 208.28,
                "team_id" => 1
            ],
            [
                "name" => "James Posey",
                "age" => 31,
                "height" => 203.2,
                "team_id" => 1
            ],
            [
                "name" => "James Michael McAdoo",
                "age" => 22,
                "height" => 205.74,
                "team_id" => 2
            ],
            [
                "name" => "Ricky Davis",
                "age" => 26,
                "height" => 200,
                "team_id" => 3
            ]
        ]);
    }
}
