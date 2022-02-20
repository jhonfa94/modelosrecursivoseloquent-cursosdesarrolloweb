<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    // \App\Models\User::factory(10)->create();
    public function run()
    {
        DB::table("categories")->insert([
            ["title" => "Root 1", "parent_id" => null, "enabled" => true,], // ID 1
                ["title" => "Child 1", "parent_id" => 1, "enabled" => true,], // ID 2
                ["title" => "Child 2", "parent_id" => 1, "enabled" => false,], // ID 3
                    ["title" => "Child 3", "parent_id" => 3, "enabled" => true,], // ID 4
                        ["title" => "Child 4", "parent_id" => 4, "enabled" => true,], // ID 5
                            ["title" => "Child 5", "parent_id" => 5, "enabled" => true,], // ID 6
            ["title" => "Root 2", "parent_id" => null, "enabled" => false,], // ID 7
            ["title" => "Root 3", "parent_id" => null, "enabled" => true,], // ID 8
                ["title" => "Child 1", "parent_id" => 8, "enabled" => true,], // ID 9
                    ["title" => "Child 2", "parent_id" => 9, "enabled" => true,], // ID 10
                        ["title" => "Child 3", "parent_id" => 10, "enabled" => true,], // ID 11
                            ["title" => "Child 4", "parent_id" => 11, "enabled" => true,], // ID 12
                            ["title" => "Child 5", "parent_id" => 11, "enabled" => true,], // ID 13
                            ["title" => "Child 6", "parent_id" => 11, "enabled" => true,], // ID 14
                                ["title" => "Child 7", "parent_id" => 14, "enabled" => true,], // ID 15
                                    ["title" => "Child 8", "parent_id" => 15, "enabled" => true,], // ID 16
                                        ["title" => "Child 9", "parent_id" => 16, "enabled" => true,], // ID 17
                                            ["title" => "Child 10", "parent_id" => 17, "enabled" => true,], // ID 18
            ["title" => "Root 4", "parent_id" => null, "enabled" => true,], // ID 19
        ]);
    }
}
