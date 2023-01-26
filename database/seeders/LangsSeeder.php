<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LangsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('langs')->updateOrInsert([
            'name'=>'HTML'
        ]);
        DB::table('langs')->updateOrInsert([
            'name' => 'CSS'
        ]);
        DB::table('langs')->updateOrInsert([
            'name' => 'JavaScript'
        ]);
        DB::table('langs')->updateOrInsert([
            'name' => 'PHP'
        ]);
        DB::table('langs')->updateOrInsert([
            'name' => 'C'
        ]);
        DB::table('langs')->updateOrInsert([
            'name' => 'C++'
        ]);
        DB::table('langs')->updateOrInsert([
            'name' => 'C#'
        ]);
        DB::table('langs')->updateOrInsert([
            'name' => 'Python'
        ]);
        DB::table('langs')->updateOrInsert([
            'name' => 'Go'
        ]);
        DB::table('langs')->updateOrInsert([
            'name' => 'SQL'
        ]);
    }
}
