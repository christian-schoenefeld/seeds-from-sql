<?php

namespace ChristianSchoenefeld\SeedsFromSql\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SQLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = file_get_contents(__DIR__ . '/../seeds/unprepared.sql');

        DB::unprepared($sql);
    }
}
